@extends('backend.layouts.app')

@push('custom_styles')
     <link href="{{ asset('backend/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endpush

@section('page_content')


<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">All Users</h4>
                        <div class="page-title-right">
                            <ol class="breadcrumb p-0 m-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active">Users</li>
                            </ol>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">View List</h3>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-12">
                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Avatar</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <tr>
                                                <td>
                                                    <img width="40" class="img-thumbnail" src="https://i.pravatar.cc/200/200?{{ rand() }}" alt="">
                                                </td>
                                                <td>Sourov Pal</td>
                                                <td>sourovpal35@gmail.com</td>
                                                <td>01919852044</td>
                                                <td>
                                                    <span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="40" class="img-thumbnail" src="https://i.pravatar.cc/200/200?{{ rand() }}" alt="">
                                                </td>
                                                <td>Sourov Pal</td>
                                                <td>sourovpal35@gmail.com</td>
                                                <td>01919852044</td>
                                                <td>
                                                    <span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="40" class="img-thumbnail" src="https://i.pravatar.cc/200/200?{{ rand() }}" alt="">
                                                </td>
                                                <td>Sourov Pal</td>
                                                <td>sourovpal35@gmail.com</td>
                                                <td>01919852044</td>
                                                <td>
                                                    <span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="40" class="img-thumbnail" src="https://i.pravatar.cc/200/200?{{ rand() }}" alt="">
                                                </td>
                                                <td>Sourov Pal</td>
                                                <td>sourovpal35@gmail.com</td>
                                                <td>01919852044</td>
                                                <td>
                                                    <span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="40" class="img-thumbnail" src="https://i.pravatar.cc/200/200?{{ rand() }}" alt="">
                                                </td>
                                                <td>Sourov Pal</td>
                                                <td>sourovpal35@gmail.com</td>
                                                <td>01919852044</td>
                                                <td>
                                                    <span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="40" class="img-thumbnail" src="https://i.pravatar.cc/200/200?{{ rand() }}" alt="">
                                                </td>
                                                <td>Sourov Pal</td>
                                                <td>sourovpal35@gmail.com</td>
                                                <td>01919852044</td>
                                                <td>
                                                    <span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="40" class="img-thumbnail" src="https://i.pravatar.cc/200/200?{{ rand() }}" alt="">
                                                </td>
                                                <td>Sourov Pal</td>
                                                <td>sourovpal35@gmail.com</td>
                                                <td>01919852044</td>
                                                <td>
                                                    <span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="40" class="img-thumbnail" src="https://i.pravatar.cc/200/200?{{ rand() }}" alt="">
                                                </td>
                                                <td>Sourov Pal</td>
                                                <td>sourovpal35@gmail.com</td>
                                                <td>01919852044</td>
                                                <td>
                                                    <span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img width="40" class="img-thumbnail" src="https://i.pravatar.cc/200/200?{{ rand() }}" alt="">
                                                </td>
                                                <td>Sourov Pal</td>
                                                <td>sourovpal35@gmail.com</td>
                                                <td>01919852044</td>
                                                <td>
                                                    <span class="badge badge-success">Active</span>
                                                </td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning" href="">Edit</a>
                                                    <a class="btn btn-sm btn-danger" href="">Delete</a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Row -->
        </div>
        <!-- end container-fluid -->

    </div>
    <!-- end content -->

</div>


@endsection

@push('custom_scripts')
<script src="{{ asset('backend/libs/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ asset('backend/libs/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables/responsive.bootstrap4.min.js') }}"></script>

<script src="{{ asset('backend/libs/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('backend/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
<script>
    (function(){
        $('#datatable').DataTable();
    })();
</script>
@endpush