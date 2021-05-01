@extends('layouts.userapp')

@section('content')



  <section id="register" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h4>
                <i class="fas fa-user-plus"></i> Register</h4>
            </div>
            <div class="card-body">


                <form enctype="multipart/form-data" method="post" id="registerForm">
                   @csrf
                  <div class="form-group">
                  <label for="first_name">First Name</label>
                  <input type="text" id="first_name" name="first_name" class="form-control" required>
                  <span class="text-danger" id="fnameError"></span>
                </div>


                <div class="form-group">
                  <label for="last_name">Last Name</label>
                  <input type="text" id='last_name' name="last_name" class="form-control" required>
                  <span class="text-danger" id="lnameError"></span>
                </div>


                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" id='username' name="username" class="form-control" required>
                  <span class="text-danger" id="usernameError"></span>
                </div>


                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" id='email' name="email" class="form-control" required>
                  <span class="text-danger" id="emailError"></span>
                </div>


                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" id='password' name="password" class="form-control" required>
                  <span class="text-danger" id="passwordError"></span>
                </div>


                <div class="form-group">
                  <label for="password2">Confirm Password</label>
                  <input type="password" id='password_confirmation' name="password_confirmation" class="form-control" required>
                  <span class="text-danger" id="passconfError"></span>
                </div>


                <div class="form-group">
                    <label for="Image">Upload profile image</label>
                    <input type="file" id='profile_image' name="profile_image" class="form-control">
                    <img id='preview-image-before-upload' class='mt-2 ml-2' style="max-width: 100px;">
                    <span class="text-danger" id="fileError"></span>
                </div>
                <input type="submit" id='registerUser' value="Register" class="btn btn-secondary btn-block">
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
