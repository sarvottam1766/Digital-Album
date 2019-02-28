
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

$sql1 = "SELECT location FROM mother";
$result1 = $conn->query($sql1);
$row1= $result1->fetch_assoc();
$sql2 = "SELECT location FROM father";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$sql3 = "SELECT location FROM brother";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$sql4 = "SELECT location FROM sister";
$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();
$sql5 = "SELECT location FROM schoolfriend";
$result5 = $conn->query($sql5);
$row5 = $result5->fetch_assoc();
$sql6 = "SELECT location FROM grandparents";
$result6 = $conn->query($sql6);
$row6 = $result6->fetch_assoc();
$sql7 = "SELECT location FROM villagefreinds";
$result7 = $conn->query($sql7);
$row7 = $result7->fetch_assoc();
$sql8 = "SELECT location FROM teachers";
$result8 = $conn->query($sql8);
$row8 = $result8->fetch_assoc();
 
?><html>
    <head>
<title>
    </title>
    </head>
    <link href="css/index1.css" rel="stylesheet">
    <body >
        
        <div align="center">
            <div class="center"><h2> your family album</h2>
            </div>
    <table border="1" height="" width="" >
        <tr>
            <th colspan="2">mother</th><th colspan="2">father</th><th colspan="2">brorther</th><th colspan="2">Sister</th></tr>
        <tr><td rowspan="6" colspan="2"> <?php if($row1['location'] != ""): ?>
            <a href="mother.php"><img src="uploads/<?php echo $row1['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;"></a>
            <?php endif; ?></td>
            <td rowspan="6" colspan="2"><?php if($row2['location'] != ""): ?>
                <a href="father.php">	<img src="uploads/<?php echo $row2['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;"></a>
            <?php endif; ?>
            </td><td rowspan="6" colspan="2"><?php if($row3['location'] != ""): ?>
            <a href="brother.php">		<img src="uploads/<?php echo $row3['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;"></a>
            <?php endif; ?>
        </td><td rowspan="6" colspan="2"><?php if($row4['location'] != ""): ?>
            <a href="sister.php">	<img src="uploads/<?php echo $row4['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;"></a>
            <?php endif; ?></td></tr>
        <tfoot><tr><th colspan="2"><a href="mother.php">click to add</a></th><th colspan="2"><a href="father.php">click to add</a></th><th colspan="2"><a href="brother.php">click to add</a></th><th colspan="2"><a href="sister.php">click to add</a></th></tr></tfoot>
        </table>
            <table border="1" height="" width="">
        <tr>
            <th colspan="2">school friend</th><th colspan="2">grandparents</th><th colspan="2">vill friend</th><th colspan="2">teachers</th></tr>
        <tr><td rowspan="6" colspan="2"> <?php if($row5['location'] != ""): ?>
            <a href="schoolfriend.php">		<img src="uploads/<?php echo $row5['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;"></a>
            <?php endif; ?></td><td rowspan="6" colspan="2"><?php if($row6['location'] != ""): ?>
            <a href="grandparents.php">		<img src="uploads/<?php echo $row6['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;"></a>
            <?php endif; ?></td><td rowspan="6" colspan="2"><?php if($row7['location'] != ""): ?>
            <a href="villfriend.php">			<img src="uploads/<?php echo $row7['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;"></a>
            <?php endif; ?></td>
            <td rowspan="6" colspan="2"><?php if($row8['location'] != ""): ?>
                <a href="teachers.php">		<img src="uploads/<?php echo $row8['location']; ?>" width="300px" height="300px" style="border:1px solid #333333;"></a>
            <?php endif; ?></td>
           </tr>
        <tfoot><tr><th colspan="2"><a href="schoolfriend.php">click to add</a></th><th colspan="2"><a href="grandparents.php">click to add</a></th><th colspan="2"><a href="villfriend.php">click to add</a></th><th colspan="2"><a href="teachers.php">click to add</a></th></tr></tfoot>
        </table>
        </div>
        
    </body>