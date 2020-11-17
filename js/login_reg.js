/*$(function(){
    var $registerForm = $("registration);
        if($registerForm)")
});*/

$(document).ready(function() {

    $("#myform").validate({
    
     rules: {
         username: {
             required: true,
             
         },
         
        custname: {
             required: true,
             
         },
         
         email: {
             required: true
            
         },
         
        phone: {
             required: true,
             minlength: 8,
             maxlength: 10
         },
    
         
        country:{ 
             required: true,
         },
         
        subject:{ 
             required: true,
         },
            
        password: {
             required: true,
            minlength: 5
        },
        confirmpassword: {
            required: true,
            //equalTo: "#password"
           
            //passwordMatch: true // set this on the field you're trying to match
        },
         
        
     },
     messages:{
         username: {
             required: "Name is required...",
             
         },
         
            custname: {
             required: "Name is required...",
            
         },
         
            email: {
                required:"enter youe email address... eg. john@xxxmail.com"
            
         },
         
             phone: {
                required: "plese enter your valid phone number",
                minlength: "enter valid phone number ",
                maxlength: "number doesn't exit"
         },
         
             country: {
                required: "Please select a country..."  
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