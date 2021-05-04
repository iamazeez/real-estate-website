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
          <li class="breadcrumb-item active"> Profile</li>
        </ol>
      </nav>
    </div>
  </section>

  <section id="dashboard" class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2>Welcome {{ auth()->user()->first_name }}</h2>
          <div class="col-md-12 mt-3 mb-3">
              <button class="btn btn-primary" id='showListing'>Show All Listings</button>
              <button class="btn btn-primary" id='showInquiry'>Show All Inquiry</button>
              <button class="btn btn-primary" id='showSellInquiry'>Show All Inquiry on listings</button>
            </div>


          <p id='profile-message'>Here are the property listings that you have inquired about</p>

          <div class='container' id='show-data-dashboard'>
           <div class="row">
           @foreach ($listing as $data)
           <div class="col-md-6 col-lg-4 mb-4">
            <div class="card listing-preview">
              <img class="card-img-top" src="assets/img/homes/{{ $data->image[0] }}" alt="">
              <div class="card-img-overlay">
                <h2>
                  <span class="badge badge-secondary text-white">${{ $data->asking_price }}</span>
                </h2>
              </div>
              <div class="card-body">
                <div class="listing-heading text-center">
                  <h4 class="text-primary">187 Woodrow Street</h4>
                  <p>
                    <i class="fas fa-map-marker text-secondary"></i> Salem MA, 01915</p>
                </div>
                <hr>
                <div class="row py-2 text-secondary">
                  <div class="col-6">
                    <i class="fas fa-th-large"></i> Sqft: {{ $data->squarefeet }}</div>
                  <div class="col-6">
                    <i class="fas fa-car"></i> Garage: {{ $data->garage }}</div>
                </div>
                <div class="row py-2 text-secondary">
                  <div class="col-6">
                    <i class="fas fa-bed"></i> Bedrooms: {{ $data->bedrooms }}</div>
                  <div class="col-6">
                    <i class="fas fa-bath"></i> Bathrooms: {{ $data->bathroom }}</div>
                </div>
                <hr>
                <div class="row py-2 text-secondary">
                  <div class="col-6">
                    <i class="fas fa-user"></i> Azeez</div>
                </div>
                <div class="row text-secondary pb-2">
                  <div class="col-6">
                    <i class="fas fa-clock"></i> 5 days ago</div>
                </div>
                <hr>
                <a href="listing.html" class="btn btn-primary btn-block">More Info</a>
              </div>
            </div>
          </div>
           @endforeach
        </div>


          </div>
<!--
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
-->
@endsection
