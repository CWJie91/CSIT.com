<!doctype html> 
<html> 
<head>
<meta charset="utf-8"> 
<title>CsiT</title>
<h1>Sign In</h1> </head>

<body >  <p align="center"> <input type="image" name="imageField" id="imageField" src="images/aaa.jpg"> </p> 
 <?php
// define variables and set to empty values
$idErr = $passwordErr = "";
$id = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["id"]))
     {$idErr = "ID is required";}
   else
     {
     $id = test_input($_POST["id"]);
     if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$id))
       {
       $idErr = "Invalid email format"; 
       }
     }
   
   if (empty($_POST["password"]))
     {$passwordErr = "Password is required";}
   else
     {
     $password = test_input($_POST["password"]);
     }
     
}

function test_input($data)
{
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
}
?>

 <form name="login" method="post">
 <table align="center">
 <tr>
  <td> 
  <label for="email">Email: 
  </label>
  </td>
  <td>
  <input name="id" type="email" id="id" tabindex="1" value=<?php echo $id; ?>>  
  </td>
  <td>
  <?php echo $idErr;?>
  </td>
  </tr>
  <tr>
  <td>
  <label for="password">
  Password:</label> 
  </td>
  <td>
  <input type="password" name="password" id="password" value=<?php echo $password; ?>>
    </td>
    <td>
    <?php echo $passwordErr;?>
    </td>
    </tr>
    </table>
    <center>
    <input type="submit" name="button" id="button" value="Sign In">
   <INPUT Type="button" VALUE="Back" onClick="history.go(-1);return true;"> </p>
   </center>
   </form>
 
</body> </html>