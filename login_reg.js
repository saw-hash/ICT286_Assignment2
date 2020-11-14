$(document).ready(function() {

    $("#form").validate({
    
     rules: {
         username: {
             required: true,
             minlength: 5
         },
        password: {
             required: true,
            minlength: 5
        },
        confirmpassword: {
            required: true,
            equalTo: "#Password"
        },
         
         email: {
            required: true,
     }
     },
     messages:{
         username: {
             required: "Name is required...",
             minlength: "enter number and character eg.user1",
         },
         
         password: {
             required: "Password is required...",
             minlength: "enter number and character eg.user1",
         },
         
        confirmpassword: {
             required: "This is required",
            equalTo: "Passwords do not match!",
            
             minlength: "enter number and character eg.user1",
         }
     }   
       
 });
});  