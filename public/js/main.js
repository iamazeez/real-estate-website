const date = new Date();
document.querySelector('.year').innerHTML = date.getFullYear();

// =============== set csrf token start ===============
/*
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
});
*/
// =============== set csrf token end ===============



$(document).ready(function() {

//=================Preview Image Function===============
var imagesPreview = function(input, placeToInsertImagePreview) {

    if (input.files) {
        var filesAmount = input.files.length;

        for (var i = 0; i < filesAmount; i++) {
            var reader = new FileReader();

            reader.onload = function(event) {
                $($.parseHTML('<img>')).attr({'src': event.target.result,'width':'100px',"class": "m-2",}).css("max-width", "150px").appendTo(placeToInsertImagePreview);
            }

            reader.readAsDataURL(input.files[i]);
        }
    }

}
//=================Preview Image Function ends===============

 //=========================Register User===========================

 //Preview register image if upoaded any
 $('#profile_image').change(function(){
    let reader = new FileReader();
    reader.onload = (e) => {
      $('#preview-image-before-upload').attr('src', e.target.result);
    }
    reader.readAsDataURL(this.files[0]);
   });

   $('#registerForm').on('submit',function(e) {
       e.preventDefault();
       $.ajax({
        type : "POST",
        url : "/register",
        dataType : "json",
        contentType: false,//When contentType is set to false, that means jQuery uses multipart/form-data
        cache: false,
        processData: false,//( Moastly uses when working with image )processData is false jQuery simply sends whatever you specify as data in an Ajax request without any attempt to modify it by encoding as a query string.
        data : new FormData(this),
        beforeSend: function() {
            $('#loader').show();
         },
         complete: function(){
            $('#loader').hide();
         },
        success : function(data){
            alert('ajax response');
        //-- start alert --
            Swal.fire({
                toast: true,
               // position: 'top-end',
                icon: 'success',
                title: 'Data added successfully',
                showConfirmButton: false,
                timer: 3000
            })
        //-- end alert --
            console.log("successfully added data");
            location.reload();
        },
        error : function(error){
            console.log(error)
            $('#fnameError').text(error.responseJSON.errors.first_name);
            $('#lnameError').text(error.responseJSON.errors.last_name);
            $('#usernameError').text(error.responseJSON.errors.username);
            $('#emailError').text(error.responseJSON.errors.email);
            $('#passwordError').text(error.responseJSON.errors.password);
            $('#passconfError').text(error.responseJSON.errors.password_confirmation);
            $('#fileError').text(error.responseJSON.errors.profile_image);
        }
    });
    });
//=========================Register User End here===========================


//=========================Login User Start here===========================
$('#loginForm').on('submit',function(e) {
    alert('Form Submit');
    var data = new FormData(this);
    for(var pair of data.entries()) {
        console.log(pair[0]+ ', '+ pair[1]);
     }

    e.preventDefault();
    $.ajax({
     type : "POST",
     url : "/login",
     dataType : "json",
     contentType: false,
     cache: false,
     processData: false,
     data : new FormData(this),
     beforeSend: function() {
         $('#loader').show();
      },
      complete: function(){
         $('#loader').hide();
      },
     success : function(data){
        location.reload();
     },
     error : function(error){
         console.log(error)
         $('#emailError').text(error.responseJSON.errors.email);
         $('#passwordError').text(error.responseJSON.errors.password);
         $("#loginfailError").text(error.responseJSON.errors.loginfail);
     }
    });

    });
//=========================Login User End here==========================


//=========================Create new sell listing======================

$('#create-inquiry-form').on('submit',function(e) {
    e.preventDefault();
            $('#titleError').text('');
            $('#descreptionError').text('');
            $('#bedroomsError').text('');
            $('#asking_priceError').text('');
            $('#bathroomError').text('');
            $('#garageError').text('');
            $('#squarefeetError').text('');
            $('#lot_sizeError').text('');
            $('#imageError').text('');
            $('#messageError').text('');

            var formData = new FormData(this);


    $.ajax({
        type : "POST",
        url : "/create-listing",
        dataType : "json",
        contentType: false,
        cache: false,
        processData: false,
        data : formData,
        beforeSend: function() {
            $('#loader').show();
         },
         complete: function(){
            $('#loader').hide();
         },
        success : function(data){
            alert('ajax response');
            console.log(data);
        //-- start alert --
            Swal.fire({
                toast: true,
               // position: 'top-end',
                icon: 'success',
                title: 'Data added successfully',
                showConfirmButton: false,
                timer: 3000
            })
        //-- end alert --
            console.log("successfully added data");
        },
        error : function(error){
            console.log(error);
            $('#titleError').text(error.responseJSON.errors.title);
            $('#descreptionError').text(error.responseJSON.errors.descreption);
            $('#bedroomsError').text(error.responseJSON.errors.bedrooms);
            $('#asking_priceError').text(error.responseJSON.errors.asking_price);
            $('#bathroomError').text(error.responseJSON.errors.bathroom);
            $('#garageError').text(error.responseJSON.errors.garage);
            $('#squarefeetError').text(error.responseJSON.errors.squarefeet);
            $('#lot_sizeError').text(error.responseJSON.errors.lot_size);
            $('#imageError').text(error.responseJSON.errors.image);
            $('#messageError').text(error.responseJSON.message);
        }
    });

});

//====================Show Multiple Images in Listing ====================

$('#image').change(function(e){
    imagesPreview(this, '#show-image');
});


//====================Show All Listing of User in Profile



//jQuery ENDS
});
