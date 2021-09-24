<?php 
if(isset($_GET['name'])){
    // Prevents injection attack on form- disables script tags 
    $name =  htmlentities($_GET['name']);
    //echo $name;
}
// if(isset($_REQUEST['name'])){
//     // Prevents injection attack on form- disables script tags 
//     $name =  htmlentities($_REQUEST['name']);
//     echo $name;
//}
//echo $_SERVER["QUERY_STRING"];



?>
<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
  <form method="GET" action="get_post.php">
    <div>
    <!-- Name attribute required to hok on to -->
    <label>Name</label>
    <input type="text" name="name">
    </div>
    <div>
    <label>Email</label>
    <input type="text" name="email">
    </div>
    <input type="submit" value="submit"> 
  </form>
  <ul>
  <li><a href="get_post.php?name=Karin">Karin</a></li>
  <li><a href="get_post.php?name=Blanka">Blanka</a></li>

  </ul>
    </div>
</body>
</html>