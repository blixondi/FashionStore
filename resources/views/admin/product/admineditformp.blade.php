<form id="form-update" action="{{ route('product.update', $product->id) }}" method="post" enctype="multipart/form-data">
    @method('POST')
    @csrf
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">kategori</label>
                                <select class="form-select" name="category">
                                    @foreach ($category as $c)
                                    <option value="{{$c->id}}" {{$c->id == $product->category_id ? 'selected' : ''}}>
                                        {{$c->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-2">
                                  <label for="exampleInputEmail1" class="form-label">tipe</label>
                                  <select class="form-select" name="type">
                                      @foreach ($types as $t)
                                      <option  value="{{$t->id}}">{{$t->name}}</option>
                                      @endforeach
                                  </select>
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">nama</label>
                                <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{ $product->name }}"
                                    aria-describedby="textHelp">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">brand</label>
                                <input type="text" name="brand" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->brand}}">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">price</label>
                                <input type="number" name="price" class="form-control" id="typeNumber" aria-describedby="emailHelp" value="{{$product->price}}">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">dimension</label>
                                <input type="text" name="dimension" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product->dimension}}">
                            </div>
                            <div class="mb-2">
                                <label for="exampleInputEmail1" class="form-label">description</label>
                                <textarea class="form-control" id="description" name="description" rows="3">{{$product->description}}</textarea>
                            </div>
                            <div class="mb-2">
                                <label class="form-label">Image</label>
                                <input type="file" class="form-control" id="img" name="img">
                              </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <img id="product-image" class="card-img-top" src="{{ asset('assets/img/products/'.$product->img_url) }}">
                        </div>
                    </div>
                </div>
            </div>



</form>
