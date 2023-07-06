<form id="form-update" action="{{ route('product.update', $product->id) }}" method="post">
    @method('POST')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">kategori</label>
        <select class="form-select" name="category">
            @foreach ($category as $c)
            <option value="{{$c->id}}" {{$c->id == $product->category_id ? 'selected' : ''}}>
                {{$c->name}}
            </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">tipe</label>
          <select class="form-select" name="type">
              @foreach ($types as $t)
              <option  value="{{$t->id}}">{{$t->name}}</option>
              @endforeach
          </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">nama</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $product->name }}"
            aria-describedby="textHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">brand</label>
        <input type="email" name="brand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->brand}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">price</label>
        <input type="email" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->price}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">dimension</label>
        <input type="email" name="dimension" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->dimension}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">description</label>
        <input type="email" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->description}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">image_url</label>
        <input type="email" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->img_url}}">
    </div>
</form>
