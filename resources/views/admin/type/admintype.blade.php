@extends('layouts.admin')

@section('content')
    <button class="btn btn-success" id="add-type" onclick="create()">Tambah Tipe</button>
    <div class="card-body">
        <h5 class="card-title fw-semibold mb-4">List Kategori</h5>
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
                        @foreach ($type as $t)
                            <tr>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-0">{{ $t->id }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <h6 class="fw-semibold mb-1">{{ $t->name }}</h6>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-primary rounded-3 fw-semibold">{{ $t->created_at }}</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <div class="d-flex align-items-center gap-2">
                                        <span class="badge bg-primary rounded-3 fw-semibold">{{ $t->updated_at }}</span>
                                    </div>
                                </td>
                                <td class="border-bottom-0">
                                    <button type="button" id="btn-edit"
                                       onclick="edit({{$t->id}})"
                                        class="btn btn-secondary m-1">Edit</button>
                                </td>
                                <td class="border-bottom-0">
                                    <button type="button" id="details" class="btn btn-secondary m-1">Test</button>
                                </td>

                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalCreate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">Tipe baru</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('type.store')}}" id="form-store" method="post">
                        @method('POST')
                        @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label" >nama</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="textHelp">
                      </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="btn-insert" onclick="store()">Insert</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
{{-- modal edit --}}
    <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Edit Type</h5>

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
@endsection
@section('script')

    <script>
        function create() {
            $("#modalCreate").modal("show");
        }
        function store(){
            $("#form-store").submit();
        }
        function edit(id){
            updateId = id
            $.get("{{url('/admin/type/editform')}}/"+ id,function (data) {
                $("#modalEdit .modal-body").html(data)
                $("#modalEdit").modal("show");
            });
        }
        function update(){
            $("#form-update").submit();
        }


</script>

@endsection
