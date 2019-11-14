<html>
    <head>
        
    </head>
    <body>
        <?php 
$teddy= array(array("Luke Skywalker","../billeder/LukeTLJ.jpg"),
							array("Bruce Wayne","../billeder/bruce.jpg"),
							array("James T. Kirk","james.jpg");
							
							$bearNbr = $_GET['prod']; 					

?>

<p>selected teddy bear</p>
<h2><?php echo $teddy[$bearNbr][2]?></h2>

<img src="../billeder/LukeTLJ.jpg" <?php echo $teddy[$bearNbr][1]?> width="250px">
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla egestas arcu sed justo vehicula, non commodo magna congue. Nullam diam eros, hendrerit eget lobortis sit amet, porta non nulla.</p>
   
    </body>
</html>