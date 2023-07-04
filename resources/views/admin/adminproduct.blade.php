@extends('layouts.admin')

@section('content')
    @foreach ($category as $c)
        <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">{{ $c->name }}</h5>
            <div class="card">
                <div class="card-body p-4">
                    <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                            <tr>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Id</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Nama</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Category</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Type</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Details</h6>
                                </th>
                                <th class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">Delete</h6>
                                </th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $p)
                                @if ($c->id == $p->categories_id)
                                    <tr>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-0">{{ $p->id }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $p->name }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $p->category }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <h6 class="fw-semibold mb-1">{{ $p->type }}</h6>
                                        </td>
                                        <td class="border-bottom-0">
                                            <button type="button" id="details"
                                                data-url='{{ route('admproduct.detail', $p->id) }}'
                                                class="btn btn-secondary m-1">Details</button>
                                        </td>
                                        <td class="border-bottom-0">

                                        </td>

                                    </tr>
                                @endif
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endforeach


    <!-- Modal details -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>ID : <span id="product-id"></span></p>
                    <p>Name : <span id="product-name"></span></p>
                    <p>Category : <span id="product-category"></span></p>
                    <p>Type : <span id="product-type"></span></p>
                    <p>Brand : <span id="product-brand"></span></p>
                    <p>Price : <span id="product-price"></span></p>
                    <p>Dimension : <span id="product-dimension"></span></p>
                    <p>Description : <span id="product-description"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="edit" onclick="create()"
                    data-url='{{ route('admproduct.edit', $p->id) }}'
                    class="btn btn-secondary m-1">edit</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal edit-->
    {{-- <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">kategori</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$product[0]->id}}">

                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">tipe</label>
                            <div>
                                <select class="form-select">
                                  @foreach ($types as $t )
                                  <option value="">{{$t->name}}</option>
                                  @endforeach
                                </select>
                            </div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">nama</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">brand</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">price</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">dimension</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">description</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">image_url</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $('body').on('click', '#details', function() {
                var userURL = $(this).data('url');
                $.get(userURL, function(data) {
                    $('#exampleModalLong').modal('show');
                    $('#product-id').text(data[0].id);
                    $('#product-name').text(data[0].name);
                    $('#product-category').text(data[0].category);
                    $('#product-type').text(data[0].type);
                    $('#product-brand').text(data[0].brand);
                    $('#product-price').text(data[0].price);
                    $('#product-dimension').text(data[0].dimension);
                    $('#product-description').text(data[0].description);
                    $('#product-image').text(data[0].img_url);

                })
            })
        });

        function create() {
            $("#editModal").modal('show');
        }
    </script>
@endsection
