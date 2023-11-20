@extends('admin.layouts.app')

@section('content')
	<!-- Content Wrapper. Contains page content -->
	  <!-- Content Header (Page header) -->
	  <section class="content-header">
	    <h1>
	      Text Editors
	      <small>Advanced form element</small>
	    </h1>
	    <ol class="breadcrumb">
	      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
	      <li><a href="#">Forms</a></li>
	      <li class="active">Editors</li>
	    </ol>
	  </section>

	  <!-- Main content -->
	  <section class="content">
	    <div class="row">
	      <div class="col-md-12">
	        <!-- general form elements -->
	        <div class="box box-primary">
	          <div class="box-header with-border">
				@if (session()->has("success_message"))
				<h4 class="alert alert-success">{{ session()->get("success_message") }}</h4>
			  @endif
			  @if (session()->has("error_message"))
			  <h4 class="alert alert-danger">{{ session()->get("error_message") }}</h4>
			@endif
	          </div>
	          <!-- /.box-header -->
	          <!-- form start -->
	          <form role="form" action="{{ route('customers.update',$customer->id) }}" method="post">
	          {{ csrf_field() }}
	          {{ method_field('PUT') }}
	            <div class="box-body">
	            <div class="col-lg-offset-3 col-lg-6">
	              <div class="form-group has-feedback {{ $errors->has('name')?"has-error":"" }}">
	                <label for="name">Customer name</label>
	                <input type="text" class="form-control" id="name" name="name" placeholder="customer name" value="{{ $customer->name }}">
					<strong class="text-red">{{ $errors->first('name') }}</strong>
	              </div>

	              <div class="form-group has-feedback {{ $errors->has('email')?"has-error":"" }}">
	                <label for="slug">Customer email</label>
	                <input type="email" class="form-control" id="slug" name="email" placeholder="email" value="{{ $customer->email }}">
					<strong class="text-red">{{ $errors->first('email') }}</strong>
	              </div>

				   <div class="form-group has-feedback {{ $errors->has('password')?"has-error":"" }}">
	                <label for="slug"> New Password (optional)</label>
	                <input type="password" class="form-control" id="password" name="password" placeholder="new password" value="">
					<strong class="text-red">{{ $errors->first('password') }}</strong>
	              </div>
				  <div class="form-group has-feedback {{ $errors->has('password')?"has-error":"" }}">
	                <label for="slug">Password Confirmation </label>
	                <input type="password" class="form-control" id="password" name="password_confirmation" placeholder=" password confirmation" value="">
	              </div>

	            <div class="form-group">
	              <button type="submit" class="btn btn-primary">Submit</button>
	              <a href='{{ route('customers.index') }}' class="btn btn-warning">Back</a>
	            </div>

	            </div>

				</div>

	          </form>
	        </div>
	        <!-- /.box -->


	      </div>
	      <!-- /.col-->
	    </div>
	    <!-- ./row -->
	  </section>
	  <!-- /.content -->
	<!-- /.content-wrapper -->
@endsection
