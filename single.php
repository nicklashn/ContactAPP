<html>

<head>
<link rel="stylesheet" type="text/css" href="../css/singleny.css">
</head>

<body>
    <h1>MyContactApp</h1>
    <?php 
$contact= array(array("Luke Skywalker","../billeder/LukeTLJ.jpg"),
				array("Bruce Wayne","../billeder/bruce.jpg"),
				array("James T. Kirk","../billeder/james.jpg"));
							
				$bearNbr = $_GET['prod']; 					

?>

    <p>ipsum</p>
    <h2><?php echo $contact[$bearNbr][0]?></h2>

    <img src="../billeder/LukeTLJ.jpg" <?php echo $contact[$bearNbr][1]?> width="250px">
    
    <div class="back">
        <a href="ViewContacts.php">Back</a>
    </div>
</body>

</html>