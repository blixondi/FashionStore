<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    public function indexadmin()
    {
        // $product = Product::with('category','type')->get();
        $product = DB::select(DB::raw('SELECT p.id,p.categories_id,c.name as category ,t.name as type,p.name,p.brand,p.price,p.dimension,p.description,p.img_url,p.updated_at,p.created_at
        FROM products p INNER JOIN categories c on p.categories_id = c.id
        INNER JOIN types t ON p.types_id = t.id'));
        $category = Category::all();
        return view('admin.adminproduct', compact('product', 'category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function addcart(Request $request, Product $product)
    {
        $cart = session('cart');
        if (!$cart) {
            $cart = array();
        }
        if (!isset($cart[$product->id])) {
            $cart[$product->id] = [
                "name" => $product->name,
                "brand" => $product->brand,
                "price" => $product->price,
                "quantity" => $request->qty,
                "filename" => $product->img_url,
                "dimension" => $product->dimension,
            ];
        } else {
            $cart[$product->id]['quantity'] = $request->qty;
        }
        session()->put('cart', $cart);
        return response()->json([
            "status" => "oke",
            "message" => "sukses menambahkan $product->name ke cart",
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
