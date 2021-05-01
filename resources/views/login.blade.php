@extends('layouts.userapp')

@section('content')

  <section id="login" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h4>
                <i class="fas fa-sign-in-alt"></i> Login</h4>
            </div>
            <div class="card-body">
              <form id='loginForm' method="post">
                  @csrf
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id='email' class="form-control" required>
                  <span class="text-danger" id="emailError"></span>
                </div>

                <div class="form-group">
                  <label for="password2">Password</label>
                  <input type="password" name="password" id='password' class="form-control" required>
                  <span class="text-danger" id="passwordError"></span>
                </div>

                <input type="submit" value="Login" class="btn btn-secondary btn-block">
              </form>
              <span class="text-danger" id="loginfailError"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
