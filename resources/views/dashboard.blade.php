@extends('layouts.userapp')

@section('content')
  <section id="showcase-inner" class="py-5 text-white">
    <div class="container">
      <div class="row text-center">
        <div class="col-md-12">
          <h1 class="display-4">User Dashboard</h1>
          <p class="lead">Manage your BT Real Estate account</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Breadcrumb -->
  <section id="bc" class="mt-3">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.html">
              <i class="fas fa-home"></i> Home</a>
          </li>
          <li class="breadcrumb-item active"> Dashboard</li>
        </ol>
      </nav>
    </div>
  </section>

  <section id="dashboard" class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Welcome John</h2>
          <p>Here are the property listings that you have inquired about</p>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Property</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>22</td>
                <td>45 Drivewood Circle</td>
                <td>
                  <a class="btn btn-light" href="#">View Listing</a>
                </td>
              </tr>
              <tr>
                <td>43</td>
                <td>22 Westbrook rd</td>
                <td>
                  <a class="btn btn-light" href="#">View Listing</a>
                </td>
              </tr>
              <tr>
                <td>31</td>
                <td>12 Samson Ave</td>
                <td>
                  <a class="btn btn-light" href="#">View Listing</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>

@endsection
