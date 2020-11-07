<!DOCTYPE html>
<html>
<head> 
<title> L8_E2 Student Form </title> 
    
    <script>
        
      function validateMyForm() {
    if (fname.value.length < 1) || (lname.value.length<1) {
        error.innerText = "Please enter your name!";
        return false;
    }
    return true;
}  
    </script>

    
    </head>

<body>

    <h1> Lab8 E3</h1>
    <h2> Student Form</h2>
    
    
<form name="myForm" action="L8_e3_Search.php" onsubmit="return ValidateMyForm()" method="POST">
    
        <p>Student FirstName:</p> 
    <input type="text" size="30" name="fname" id='fname'/> <span id="name_error"> </span>
        
        <p>Student LastName:</p> 
    <input type="text" size="30" name="lname" name="lname" /> <span id="lname_error" > </span>
        
    <p>Unit Codes </p>
    <input type="number" size="30" name="code" onkeypress="Numbervalidate(event)" min="0"/> <span id="price_error"></span>
       
    <p>
  
        <input type="submit" value="Submit" name="Submit" />  </p> </form>
        

   <br>
    <form action="L8_e3_Search.php" method="POST">
<input type="text" name="Sname" id="Sname" alt="Search" 
maxlength="356" size="30";   placeholder="search by StudID,Fname,Lname,Unit"/>
<input type="submit" name="search" id="search" value="Search"/>
        
    </form>
        


</body>
</html>

