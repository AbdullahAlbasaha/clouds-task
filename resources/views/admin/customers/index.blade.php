@extends('admin.layouts.app')
@section('headSection')
    <link rel="stylesheet" href="{{ asset('admins/plugins/datatables/dataTables.bootstrap.css') }}">
@endsection
@section('content')
    <section class="content-header">
        <h1>
            Blank page
            <small>it all starts here</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">

                    <form action="" method="GET">
                      <div class="row">
                        <div class=" col-md-6  pull-right">
                          <div class="input-group">
                            <input type="text" name="search" value="{{ request()->search }}"class="form-control" placeholder="Search By Name Or Email" id="txtSearch"required />
                            <div class="input-group-btn">
                              <button class="btn btn-primary" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                              </button>
                               <a onclick="window.location.href='/admin/customers';" class="btn btn-warning" >
                               reset
                              </a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </form>
            </div>
            <div class="box-body">
                <div class="box">
                    <div class="box-header">
                        @if (session()->has("success_message"))
                          <h4 class="alert alert-success">{{ session()->get("success_message") }}</h4>
                        @endif
                        @if (session()->has("error_message"))
                        <h4 class="alert alert-danger">{{ session()->get("error_message") }}</h4>
                      @endif

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>S.No</th>
                                <th> Name</th>
                                <th>email</th>
                                <th>status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($customers as $customer)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $customer->name }}</td>
                                    <td>{{ $customer->email }}</td>
                                    <td>
                                        <form id="activation_{{ $customer->id }}" method="post" action="{{ route("customers.activation",$customer) }}" >
                                            {{ csrf_field() }}
                                            <input type="hidden" name="activation" id="activationId{{ $customer->id }}">
                                        <div class="btn-group"   onclick="activation_{{ $customer->id }}.submit()" data-toggle="buttons">
                                            <label onclick="activationId{{ $customer->id }}.value='active'" class="btn {{ $customer->activation =="active"?"btn-success":"btn-default" }} btn-on-3 btn-sm active">
                                            <input type="radio"  value="1" >
                                            Active</label>
                                            <label onclick="activationId{{ $customer->id }}.value='inactive'" class="btn {{ $customer->activation =="inactive"?"btn-danger":"btn-default" }} btn-off-3 btn-sm ">
                                            <input type="radio"    value="0" >
                                            Deactive</label>
                                          </div>

                                        </form>
                                        {{-- <span class="badge badge-primary">{{ $customer->activation }}</span> --}}
                                    </td>
                                    <td><a href="{{ route('customers.edit',$customer->id) }}"><span class="glyphicon glyphicon-edit"></span></a></td>
                                    <td>
                                        <form id="delete-form-{{ $customer->id }}" method="post" action="{{ route('customers.destroy',$customer->id) }}" style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
                                            if(confirm('Are you sure, You Want to delete this?'))
                                            {
                                            event.preventDefault();
                                            document.getElementById('delete-form-{{ $customer->id }}').submit();
                                            }
                                            else{
                                            event.preventDefault();
                                            }" ><span class="glyphicon glyphicon-trash"></span></a>
                                    </td>
                                </tr>
                                </tr>
                            @endforeach
                            </tbody>
                            {{-- <tfoot>
                            <tr>
                                <th>S.No</th>
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </tfoot> --}}
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>

            <!-- /.box-footer-->
        </div>
        <!-- /.box -->

    </section>
@endsection
@section('footerSection')
    <script src="{{ asset('admins/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admins/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $("#example1").DataTable( {
              "bFilter": false,
                 });

        });
    </script>
@endsection
