@extends('layouts.userapp')

@section('content')



  <section id="register" class="bg-light py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-10 mx-auto">
          <div class="card">
            <div class="card-header bg-primary text-white">
              <h4>
                <i class="fas fa-home"></i> Fill Menshion details</h4>
            </div>
            <div class="card-body">


                <form enctype="multipart/form-data" method='post' id="create-inquiry-form">

                   @csrf
                   <div class='row'>
                  <div class="form-group col-md-12">
                  <label for="title">Title</label>
                  <input type="text" id="title" name="title" class="form-control" required>
                  <span class="text-danger" id="titleError"></span>
                </div>


                <div class="form-group col-md-12">
                  <label for="descreption">Descreption</label>
                  <textarea type="text" id='descreption' name="descreption" class="form-control" required></textarea>
                  <span class="text-danger" id="descreptionError"></span>
                </div>


                <div class="form-group col-md-6">
                  <label for="username">No of Bedrooms</label>
                  <input type="text" id='bedrooms' name="bedrooms" class="form-control" required>
                  <span class="text-danger" id="bedroomsError"></span>
                </div>


                <div class="form-group col-md-6">
                  <label for="asking_price">Asking price</label>
                  <input type="text" id='asking_price' name="asking_price" class="form-control" required>
                  <span class="text-danger" id="asking_priceError"></span>
                </div>


                <div class="form-group col-md-6">
                  <label for="bathroom">No of bathroom</label>
                  <input type="text" id='bathroom' name="bathroom" class="form-control" required>
                  <span class="text-danger" id="bathroomError"></span>
                </div>


                <div class="form-group col-md-6">
                  <label for="garage">No of Garage</label>
                  <input type="text" id='garage' name="garage" class="form-control" required>
                  <span class="text-danger" id="garageError"></span>
                </div>

                <div class="form-group col-md-6">
                    <label for="squarefeet">Squarefeet</label>
                    <input type="text" id='squarefeet' name="squarefeet" class="form-control" required>
                    <span class="text-danger" id="squarefeetError"></span>
                  </div>

                  <div class="form-group col-md-6">
                    <label for="lot_size">Lot size</label>
                    <input type="text" id='lot_size' name="lot_size" class="form-control" required>
                    <span class="text-danger" id="lot_sizeError"></span>
                  </div>


                <div class="form-group col-md-4">
                    <label for="image">Upload profile image</label>
                    <input type="file" id='image' name="image[]" multiple class="form-control">
                    <span class="text-danger" id="imageError"></span>
                </div>

                <div class='col-md-8' id='show-image'>

                </div>


                <div class='col-md-12'>
                     <span id='#messageError' class="text-danger"></span>
                     <span id='#successError' class="success-danger"></span>
                </div>

                <input type="submit" id='create-listing' value="Sell Now" class="btn btn-secondary btn-block">
            </div>
            </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
