    @extends('layouts.app')    

    @section('content')

    <section class="content-header">
      <h1>
        Employees

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Employees</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Create New Employee</h3>
            </div>
            @include('admin.includes.errors')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" id="first_name" name="first_name" class="form-control" value="{{old('first_name')}}" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" id="last_name" name="last_name" class="form-control" value="{{old('last_name')}}" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{old('email')}}">
                </div>

              </div>
            </div>


             </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary btn-md ">Create Employee</button>
              </div>
            </form>

          <!-- /.box -->
        </div>
      </div>
    </div>
    </section>

    @endsection                                                                                                                                                                  
