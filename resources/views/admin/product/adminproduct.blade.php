@extends('layouts.admin')

@section('content')
    <button class="btn btn-success" onclick="create()">Tambah Kategori</button>
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
                                    <h6 class="fw-semibold mb-0">Action</h6>
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
                                            <button type="button" class="btn btn-secondary m-1"
                                                onclick="show({{ $p->id }})">Edit</button>
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
                </div>
            </div>
        </div>
    </div>

    <!-- Modal edit-->
    <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="page" class="p-2"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        function show(id) {
            $.get("{{ url('admin/product/show/edit_product') }}/" + id, {}, function(data, status) {
                $("#modalTitle").html('Edit Produk');
                $("#page").html(data);
                $("#Modal").modal('show');

            });
        }
        $(document).ready(function() {
            $('body').on('click', '#details', function() {
                var userURL = $(this).data('url');
                $.get(userURL, function(data) {
                    $("#exampleModalLongTitle").html('Detail Produk ');
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
            $.get("{{ url('admin/product/show/create_product') }}", {}, function(data, status) {
                $("#modalTitle").html('Produk baru');
                $("#page").html(data);
                $("#Modal").modal('show');

            });
        }

        function store() {
            var category = $("#category").val();
            var type = $("#type").val();
            var name = $("#name").val();
            var brand = $("#brand").val();
            var price = $("#price").val();
            var dimension = $("#dimension").val();
            var description = $("#description").val();
            var img_url = $("#img_url").val();
            $.ajax({
                type: "get",
                url: "{{ url('/admin/product/show/store_product') }}",
                data: {
                    category: category,
                    type: type,
                    name: name,
                    brand: brand,
                    price: price,
                    dimension: dimension,
                    description: description,
                    img_url: img_url
                },
                success:function(data){
                    $("#page").html('');
                }

            })
        }
    </script>
@endsection
