<form id="form-update" action="{{route('type.update',$type->id)}}" method="post" >
    @method("PUT")
    @csrf
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label" >nama</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" value="{{$type->name}}" aria-describedby="textHelp">
      </div>

</form>
