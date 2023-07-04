@extends('layouts.admin')

@section('content')
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="modalCreateCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Create Category</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('categories.store') }}" method="post" id="formInsert">
                        @csrf
                        Name : <input type="text" name="name" id="" value="{{ old('name') }}"><br><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="insertCategory()">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="modalEditCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Update Category</h4>
                </div>
                <div class="modal-body">
                    Update Data 1
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="updateCategory()">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    {{-- <div class="modal fade" id="modalDeleteCat" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Modal Delete Category</h4>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success">Yes</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div> --}}
    <!-- /.modal-dialog -->
    {{-- </div> --}}
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">Daftar Kategori</h5>
        <button class="btn btn-success" onclick="modalCreateCat()">Tambah Kategori</button>
        {{-- <a href="{{route('categories.create')}}" style="font-size: 15px">Add New Category</a> --}}
        <div class="card">
            <div class="card-body p-4">
                <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">ID</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Nama</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Created at</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Updated at</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Edit</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Delete</h6>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $c)
                            <tr id="tr_{{ $c->id }}">
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{ $c->id }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $c->name }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">{{ $c->created_at }}</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-secondary rounded-3 fw-semibold">{{ $c->updated_at }}</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="btn btn-success"
                                            onclick="modalEditCat({{ $c->id }})">Edit</button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="btn btn-success"
                                            onclick="if(confirm('Are you sure want to delete {{ $c->id }} - {{ $c->name }}?'))
                                        modalDeleteCat({{ $c->id }})">Delete</button>
                                    </div>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        // jQuery(document).ready(function() {
        //     App.init();
        //     $('#myModal').modal('show');
        // });

        function modalCreateCat() {
            $('#modalCreateCat').modal('show');
        }

        function modalEditCat(id) {
            $.get("{{ url('admin/update_category') }}/" + id, function(data) {
                $('#modalEditCat .modal-body').html(data);
                $('#modalEditCat').modal('show');
            });
        }

        function modalDeleteCat(id) {
            // $('#modalDeleteCat').modal('show');
            $.post({
                type: 'POST',
                url: '{{ route('categories.deleteData') }}',
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

        function insertCategory() {
            $('#formInsert').submit();
        }

        function updateCategory() {
            $('#form-update').submit();
        }
    </script>
@endsection
