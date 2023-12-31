<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Type;
use App\Models\User;
use Database\Seeders\ProductSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(){
        $transaction = DB::select(DB::raw('SELECT u.fname, u.lname, u.username, COUNT(t.id) AS total_pembelian FROM users u JOIN transactions t ON u.id = t.users_id GROUP BY u.id,u.username,u.fname,u.lname ORDER BY total_pembelian DESC'));
        // dd($transaction);
        $transactionnow = DB::select(DB::raw('SELECT DISTINCT u.fname,u.lname, p.name, p.price, HOUR(t.created_at) as jam, MINUTE(t.created_at) as menit, DATE(t.created_at) as tanggal FROM transactions t INNER JOIN product_transaction pt ON t.id = pt.transaction_id INNER JOIN products p ON pt.product_id = p.id INNER JOIN users u ON t.users_id = u.id ORDER BY t.created_at DESC'));

        return view('admin.adminhome',compact('transaction','transactionnow'));
    }
    public function index_pria()
    {
        $product = Product::where('categories_id', 1)->get();
        return view('main.productlist', ["product" => $product, "title" => "Pria", "subtitle" => "Temukan Fashion pria yang cocok untuk anda"]);
    }

    public function index_wanita()
    {
        $product = Product::where('categories_id', 2)->get();
        return view('main.productlist', ["product" => $product, "title" => "Wanita", "subtitle" => "Temukan Fashion wanita yang cocok untuk anda"]);
    }

    public function index_anak()
    {
        $product = Product::where('categories_id', 3)->get();
        return view('main.productlist', ["product" => $product, "title" => "Anak", "subtitle" => "Temukan Fashion anak yang cocok untuk anda"]);
    }
    public function index_promo()
    {
        $product = Product::where('categories_id', 4)->get();
        return view('main.productlist', ["product" => $product, "title" => "Tukar Poin", "subtitle" => "Tukarkan poinmu dengan berbagia jenis barang yang lucu"]);
    }

    public function indexadmin()
    {
        // $product = Product::with('category','type')->get();
        $product = DB::select(DB::raw('SELECT p.id, p.categories_id, c.name AS category, t.name AS type, p.name, p.brand, p.price, p.dimension, p.description, p.img_url, p.updated_at, p.created_at FROM products p INNER JOIN categories c ON p.categories_id = c.id INNER JOIN types t ON p.types_id = t.id WHERE p.deleted_at IS NULL'));
        $category = Category::all();
        return view('admin.product.adminproduct', compact('product', 'category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    public function admincreate()
    {
        $category = Category::all();
        $types = Type::all();
        return view('admin.product.admincreateform',compact('category','types'));
    }
    public function addcart(Request $request, Product $product)
    {
        $cart = session('cart');
        if (!$cart) {
            $cart = array();
        }
        if (!isset($cart[$product->id])) {
            $cart[$product->id] = [
                "id" => $product->id,
                "name" => $product->name,
                "brand" => $product->brand,
                "price" => $product->price,
                "quantity" => $request->qty,
                "filename" => $product->img_url,
                "dimension" => $product->dimension,
            ];
        } else {
            $cart[$product->id]['quantity'] += $request->qty;
        }
        session()->put('cart', $cart);
        return response()->json([
            "status" => "oke",
            "message" => "sukses menambahkan $product->name ke cart",
        ]);
    }
    public function updatecart(Request $request)
    {
        $cart = session('cart');
        foreach($cart as $id => $item){
            $qty = "qty".$id;
            $cart[$id]['quantity'] = $request->$qty;
        }
        session()->put('cart',$cart);
        return redirect()->route('cart');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product = Product::where('name',$request->name)->first();
        if($product){
            return back()->withInput()->with("messege","produk dengan nama yang sama sudah ada!") ;
        }
        $product = new Product();
        $product->categories_id = $request->category;
        $product->types_id = $request->type;
        $product->name = $request->name;
        $product->brand= $request->brand;
        $product->price = $request->price;
        $product->dimension = $request->dimension;
        $product->description = $request->description;
        // $product->img_url = $request->img_url;

        $file = $request->file('img');
        if ($file) {
            $imgFolder = 'assets/img/products/';
        $imgFile=$file->getClientOriginalName();
        $file->move($imgFolder,$imgFile);
        $product->img_url = $imgFile;
        }


        $product->save();
        return redirect()->route("admproduct.index")->with("messege", "Berhasil menambahkan");
    }
    public function adminstore(Request $request)
    {

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('main.productdetail', compact('product'));
    }
    public function adminshow($id)
    {
        // $product = DB::select(DB::raw("SELECT p.id, p.categories_id, c.name as category, t.name as type, p.name, p.brand, p.price, p.dimension, p.description, p.img_url, p.updated_at, p.created_at
        // FROM products p INNER JOIN categories c ON p.categories_id = c.id
        // INNER JOIN types t ON p.types_id = t.id
        // WHERE p.id = '".$id."'"));
        $product = Product::all();

        // return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }
    public function adminedit(Product $product)
    {
        $category = Category::all();
        $types = Type::all();
        return view('admin.product.admineditformp',compact('product','category','types'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $product->categories_id = $request->category;
        $product->types_id = $request->type;
        $product->name = $request->name;
        $product->brand = $request->brand;
        $product->price = $request->price;
        $product->dimension = $request->dimension;
        $product->description = $request->description;

        $file = $request->file('img');

        if ($file) {
            $file = $request->file('img');
            $imgFolder = 'assets/img/products/';
            $imgFile=$file->getClientOriginalName();
            $file->move($imgFolder,$imgFile);
            $product->img_url = $imgFile;
        }

        $product->save();
        return redirect()->route('admproduct.index')->with("message","insert successfull");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $id = $request->get('id');
        $data = Product::find($id);
        $data->delete();
        return response()->json(array(
            'status' => 'oke',
            'msg' => 'Produk berhasil di hapus'
        ), 200);
    }
}
