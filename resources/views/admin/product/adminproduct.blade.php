@extends('layouts.admin')

@section('content')
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Daftar Produk</h5>
        <div class="mb-2">
        <button class="btn btn-success" onclick="create()">Tambah Produk</button>
    </div>
        <div class="card">
            <div class="card-body p-4">
                <h5 class="card-title fw-semibold mb-4">Daftar Produk</h5>
                <table class="table text-nowrap mb-0 align-middle" id="table">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Id</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Nama</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Kategori</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Tipe</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Aksi</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $p)
                            <tr id="tr_{{ $p->id }}">
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
                                    <button type="button" id="btn-edit" onclick="edit({{ $p->id }})"
                                        class="btn btn-secondary m-1">Edit</button>
                                    <button type="button" onclick="destroy({{ $p->id }})"
                                        class="btn btn-danger m-1"><i class="ti ti-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal edit-->
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Edit Product</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" id="btn-update"class="btn btn-secondary m-1" onclick="update()">Update</button>
                </div>
            </div>
        </div>
    </div>
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
        new DataTable('#table');

        $(document).ready(function() {

        });

        function create() {
            $.get("{{ url('admin/product/show/create_product') }}", {}, function(data, status) {
                $("#modalTitle").html('Tambah Produk');
                $("#modalEdit .modal-body").html(data)
                $("#modalEdit").modal("show");

            });
        }

        function store() {
            $("#form-store").submit();
        }

        function destroy(id) {
            $.post({
                type: 'POST',
                url: '{{ route('products.delete') }}',
                data: {
                    '_token': '<?php echo csrf_token(); ?>',
                    'id': id
                },
                success: function(data) {
                    if (data.status == 'oke') {
                        $('#tr_' + id).remove();
                    }
                }
            });
        }

        function edit(id) {
            updateId = id
            $.get("{{ url('/admin/product/edit') }}/" + id, function(data) {
                $("#modalTitle").html('Edit Produk');
                $("#modalEdit .modal-body").html(data)
                $("#modalEdit").modal("show");
            });
        }

        function update() {
            $("#form-update").submit();
        }
    </script>
@endsection
