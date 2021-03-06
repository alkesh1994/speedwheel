    @extends('layouts.app')    

    @section('content')

    <section class="content-header">
      <h1>
        My Profile

      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">My Profile</li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Your Profile</h3>
            </div>
            @include('admin.includes.errors')
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" id="first_name" name="first_name" class="form-control" value="{{ $user->first_name }}" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" id="last_name" name="last_name" class="form-control" value="{{ $user->last_name }}" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value="{{ $user->email }}">
                </div>
                <div class="form-group">
                   <label for="passowrd">New Password</label>
                   <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
                 </div>
                 <div class="form-group">
                   <label for="avatar">Profile Image</label>
                   <input type="file" id="avatar" name="avatar">
                 </div>
                 <div class="form-group">
                   <label for="qualification">Qualification</label>
                   <input type="text" id="qualification" name="qualification" class="form-control" value="{{ $user->profile->qualification }}" placeholder="Enter Qualification">
                 </div>
             </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-primary btn-md ">Update Teacher</button>
              </div>
            </form>

          <!-- /.box -->
        </div>
      </div>
    </div>
    </section>


    @include('admin.includes.errors')

    <div class="panel panel-default">

      <div class="panel-heading">
        Edit your Profile

      </div>
      <div class="panel-body">

        <form  action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">

          {{ csrf_field() }}

          <div class="form-group">

            <label for="title">Username</label>

            <input type="text" name="name" value="{{ $user->name }}" class="form-control">

          </div>

          <div class="form-group">

            <label for="title">Email</label>

            <input type="email" name="email" value="{{ $user->email }}" class="form-control">

          </div>

          <div class="form-group">

            <label for="title">New password</label>

            <input type="password" name="password" class="form-control">

          </div>

          <div class="form-group">

            <label for="title">Upload new Photo</label>

            <input type="file" name="avatar" class="form-control" style="height:40px;">

          </div>

          <div class="form-group">

            <label for="title">Qualification</label>

            <input type="text" name="qualification" value="{{ $user->profile->qualification }}" class="form-control">

          </div>



          <div class="form-group">

            <div class="text-center">

              <button type="submit" class="btn btn-success" name="button">Update Profile</button>

            </div>

          </div>

        </form>

      </div>
    </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     
    @endsection                                                                                                                                                                  
