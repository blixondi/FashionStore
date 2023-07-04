<form>

    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">kategori</label>
      <select class="form-select" name="category">
        @foreach ($category as $c)
        <option value="{{$c->id}}">{{$c->name}}</option>
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
        <label for="exampleInputEmail1" class="form-label" >nama</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">brand</label>
        <input type="text" name="brand" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">price</label>
        <input type="text" name="price" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">dimension</label>
        <input type="text" name="dimension" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">description</label>
        <input type="text" name="description" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">image_url</label>
        <input type="text" name="img_url" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp">
      </div>

    <button type="submit" onclick="store()" class="btn btn-primary">Submit</button>
</form>
