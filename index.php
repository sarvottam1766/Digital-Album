<html>
<head>
    <title>
    photo viewer album
    </title></head>
 <link href="css/index.css" rel="stylesheet">
<body>
    <div align="center">
        <table>
        <thead>
            <tr> <th>photo album collection</th></tr></thead>
        
            </td></tr></table></div>

    
    
   <div class="container" ><table border="1" height="300" width="300">
        <div class="row text-center" id="cameras">
                <div class="col-md-3 col-sm-6 home-feature">
       <tr>
    <thead><tr><th>
        father</th></tr></thead>
        <tr><td>
            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT location FROM album";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
 
?>

				
         <?php if($row['location'] != ""): ?>
									 <img src="uploads/<?php echo $row['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;">
            <?php endif; ?>
            </td>
            <tfoot> <tr><th><a href="add.php">click to add</a></th></tr>
                <tr>  <th> <a href="father.php">click to serch</a> </th></tr></tfoot>
    </table>

       </div>
       <div class="col-md-3 col-sm-6 home-feature">
       <table border="1" height="300" width="300">
            
    <thead><tr><th>
        father</th></tr></thead>
        <tr><td>

				
         <?php if($row['location'] != ""): ?>
									<img src="uploads/<?php echo $row['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;">
            <?php endif; ?>
            </td>
            <tfoot> <tr><th><a href="add.php">click to add</a></th></tr>
                <tr>  <th> <a href="father.php">click to serch</a> </th></tr></tfoot>
    </table>
    
           </table></table></div></div>

        
      

    
    </body></html>