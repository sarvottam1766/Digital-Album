<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>album</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

<body>


         

 <div align ="center" >         
     <a href="add.php"><h1>click here to add new photo</h1></a>



                        <table border="10">
                    
                            <thead>
                                
                            <tbody>
							<?php
								require_once('db.php');
								$result = $conn->prepare("SELECT * FROM album ORDER BY id ASC");
								$result->execute();
								for($i=0; $row = $result->fetch(); $i++){
								//$id=$row['tbl_image_id'];
							?>
								<tr>
                                    
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;">
									<?php if($row['location'] != ""): ?>
									<img src="uploads/<?php echo $row['location']; ?>" width="500px" height="510px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									                 <?php endif; ?>
                                    </td></tr>
                                    
								
                                  <tr>  <td style="text-align:center; word-break:break-all; width:200px;"> <h2><?php echo $row ['name']; ?></h2></td>
								</tr>
								<?php } ?>
                            </tbody>
                        </table>


</body>
</html>


