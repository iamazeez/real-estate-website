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

 //Register User

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
        contentType: false,
        cache: false,
        processData: false,
        data : new FormData(this),
        success : function(data){
            alert('ajax response');
        //-- start alert --
            Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: 'Data added successfully',
                showConfirmButton: false,
                timer: 3000
            })
        //-- end alert --
            console.log("successfully added data");
        },
        error : function(error){
            console.log(error)
            if(error.responseJSON.errors.first_name != undefined){
               $('#fnameError').text(error.responseJSON.errors.first_name);
            }

            if(error.responseJSON.errors.last_name != undefined){
                $('#lnameError').text(error.responseJSON.errors.last_name);
             }

             if(error.responseJSON.errors.username != undefined){
                $('#usernameError').text(error.responseJSON.errors.username);
             }

             if(error.responseJSON.errors.email != undefined){
                $('#emailError').text(error.responseJSON.errors.email);
             }

             if(error.responseJSON.errors.password != undefined){
                $('#passwordError').text(error.responseJSON.errors.password);
             }

             if(error.responseJSON.errors.password_confirmation != undefined){
                $('#passconfError').text(error.responseJSON.errors.password_confirmation);
             }

             if(error.responseJSON.errors.profile_image != undefined){
                $('#fileError').text(error.responseJSON.errors.profile_image);
             }
        }
    });
    });
/*
$(document).on('click','#registerUser',function(e){
   e.preventDefault();
   //Fetch all data
   var first_name = $("#first_name").val();
   var last_name = $("#last_name").val();
   var username = $("#username").val();
   var email = $("#email").val();
   var password = $("#password").val();
   var password_confirmation = $("#password_confirmation").val();
   var profile_image = $("#profile_image").val();

   $.ajax({
    type : "POST",
    dataType : "json",
    data : {first_name:first_name, last_name:last_name, username:username, email:email,password:password,password_confirmation:password_confirmation,profile_image:profile_image},
    url : "/register",
    success : function(data){
        alert('ajax response');
    //-- start alert --
        Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: 'Data added successfully',
            showConfirmButton: false,
            timer: 3000
        })
    //-- end alert --
        console.log("successfully added data");
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
*/
//jQuery ENDS
});
