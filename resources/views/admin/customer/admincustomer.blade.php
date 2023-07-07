@extends('layouts.admin')

@section('content')
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="modalCreateCust" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Create Customer</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ route('customers.store') }}" method="post" id="formInsert">
                        @csrf
                        Username : <input type="text" name="username" id="" value="{{ old('username') }}"><br><br>
                        Password : <input type="text" name="password" id="" value="{{ old('password') }}"><br><br>
                        Email : <input type="text" name="email" id="" value="{{ old('email') }}"><br><br>
                        First Name : <input type="text" name="fname" id="" value="{{ old('fname') }}"><br><br>
                        Last Name : <input type="text" name="lname" id="" value="{{ old('lname') }}"><br><br>
                        Phone Number : <input type="text" name="phone_number" id="" value="{{ old('phone_number') }}"><br><br>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="insertCustomer()">Submit</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div class="modal fade" id="modalEditCust" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal Update Customer</h4>
                </div>
                <div class="modal-body">
                    Update Data 1
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" onclick="updateCustomer()">Update</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    {{-- <div class="modal fade" id="modalDeleteCust" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">Modal Delete Customer</h4>
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
        <h5 class="card-title fw-semibold mb-4">Daftar Customer</h5>
        <button class="btn btn-success" onclick="modalCreateCust()">Tambah Customer</button>
        <div class="card">
            <div class="card-body p-4">
                <table class="table text-nowrap mb-0 align-middle" border=1 id="admcust-table">
                    <thead class="text-dark fs-4">
                        <tr>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">ID</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Username</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">First Name</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Last Name</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Phone Number</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Point Member</h6>
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
                        @foreach ($users as $u)
                            <tr id="tr_{{ $u->id }}">
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $u->id }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $u->username }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $u->fname }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $u->lname }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $u->phone_number }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $u->point_member }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="btn btn-success"
                                            onclick="modalEditCust({{ $u->id }})">Edit</button>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="btn btn-success"
                                            onclick="if(confirm('Are you sure want to delete {{ $u->id }} - {{ $u->username }}?'))
                                        modalDeleteCust({{ $u->id }})">Delete</button>
                                    </div>
                                </td>
                                {{-- <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-success rounded-3 fw-semibold">{{$u->created_at}}</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-secondary rounded-3 fw-semibold">{{$u->updated_at}}</span>
                                    </div>
                                </td> --}}
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

        function modalCreateCust() {
            $('#modalCreateCust').modal('show');
        }

        function modalEditCust(id) {
            $.get("{{ url('admin/update_customer') }}/" + id, function(data) {
                $('#modalEditCust .modal-body').html(data);
                $('#modalEditCust').modal('show');
            });
        }

        function modalDeleteCust(id) {
            // $('#modalDeleteCust').modal('show');
            $.post({
                type: 'POST',
                url: '{{ route('customers.deleteData') }}',
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

        function insertCustomer() {
            $('#formInsert').submit();
        }

        function updateCustomer() {
            $('#form-update').submit();
        }

        $("#admcust-table").DataTable();
    </script>
@endsection
