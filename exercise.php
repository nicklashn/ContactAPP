<html>
   <head>
       <link rel="stylesheet" type="text/css" href="../css/exercise.css">
   </head>
    <body>
       <h1> Exercise time! </h1>
       <h2> Exercise 1.</h2>
        <?php
$currMonth=date('f',time());
if ($currMonth == "August"){
    echo "It's August, so it's really hot";  
    } else{ 
    echo "Not August, so at least not in the peak of the heat.";
}
?>
   <h2> Exercise 2, a.</h2>
   <?php
        $counter = 1;
        while ($counter < 10){
            echo 'abc';
            $counter++;
        }
        ?>
        
        <h2> Exercise 2, b.</h2>
        
        <?php
        $counter = 1;
        do{
        echo 'xyz';
        $counter++;
        }while($counter < 10);
        ?>
        
        <h2> Exercise 2, c.</h2>
        
        <?php
        for($count = 1; $count <= 9; $count++){
            echo "$count";
        }
        ?>
        
        <h2> Exercise 2, d.</h2>
        <!--https://www.phpexercises.com/php-simple-loops-exercise.html -->
        <?php
        echo "\n<ol>";
        for ($x='A'; $x<'G'; $x++){
            echo"<li> Item $x</li>\n";
        }
        echo "\n</ol>";
        ?>
        
        <h2> Exercise 3.</h2>
        <!-- https://www.w3resource.com/php-exercises/php-for-loop-exercise-1.php -->
        <?php
        for($x=1; $x<=10; $x++)
        {
            if($x < 10)
            { 
                echo "$x-";
            }
            else
            {
                echo "$x"."\n";
            }
        }
        ?>
        
        <h2> Exercise 4. </h2>
        <!-- se på senere -->
        <?php
        for($x=0; $x<=3; $x++)
        {
            echo "$x". " ";
        }
        ?>
        
        <h2> Exercise 5.</h2>
        <?php
        // https://www.phpexercises.com/php-nested-for-loops-exercise.html
        // HTML table
        echo "<table border=\"1\">";
        //generate table data showing the numbers 1-7 multiplied by eachother,
        // starting with the rows.
        for ($row=1; $row <= 7; $row++){
            echo "<tr\n";
            // Generate each entry in the row to create the columns.
            for ($col=1; $col <=7; $col++){
                // do the math
                $x=$col * $row;
                // then send the value to the table with the table data tags.
                echo "<td>$x</td>\n";
            }
            echo "</tr>";
        }
        echo "<table>";
        
        ?>
        
        <h2> Exercise 1. </h2>
        <?php
        // define function
        function hello(){
            echo "Hello, World!";
        }
        // call function
        hello();
        ?>
        
        <h2> Exercise 2. a </h2>
        <?php
        // define function
        function recArea($l, $w){
            $area = $l * $w;
            echo "A rectangle of length $l and width $w has an area of $area.";
        }
        // call function
        recArea(2, 4);
        ?>
        
        <h2> Exercise 2. b</h2>
        <?php
        /*
        //define function
        define($l, 2);
        define($w, 4);
        function areaCalc($l, $w){
            $area=$l*$w;
            return$area;
        }
        echo areaCalc();
        */
        ?>
        
        <h2> Exercise 3. </h2>
        
        <?php
        /*
        //multidimensional array 1
        $member_multi = array(array('Tokyo'),
                                array('Mexico City'),
                                array('New York City'),
                                array('Mumbai'),
                              array('Seoul'),
                              array('Shanghai'),
                              array('Lagos'),
                              array('Buenos Aires'),
                              array('Cairo'),
                              array('London'));
        
        // use for loop and print it
        function print_multi_array($array_parameter){
        for($level1 = 0; $level1 <= 9; $level1++){
            echo $array_parameter[$level1] . ", ";
        }
            echo "<br>";
        }
        print_multi_array($member_multi);
        */
        ?>
        
    <?php
        /*
        $members = array('Tokyo', 'Mexico City', 'New York City', 'Mumbai', 'Seoul', 'Shanghai', 'Lagos', 'Buenos Aires', 'Cairo', 'London');
        //function
        // sort array alpha....
        function sort_array($array){
            sort($array);
            return $array;
        }
        
        // prints array
        function print_array($title, $array){
            echo "<h1>$title</h1>";
            for($count = 0; $count <= 9; $count++){
                echo "$array[$count] <br>";
                }
            }
        
        // print array before sorting
        print_array('before sorting', $members);
        
        // the array is sorted
        $members = sort_array($members);
        
        // prints array after sorting
        print_array('after sorting', $members)
            
            // print array in unordered list
            // print_array('unordered list', $value)
            */
        // create array.
        $cities=array(
        "Tokyo",
        "Mexico City",
        "New York City",
        "Mumbai",
        "Seoul",
        "Shanghai",
        "Lagos",
        "Buenos Aires",
        "Cairo",
        "London"
        );
        
        // print values of array to browser, separated by commas.
        foreach($cities as $c){
            echo "$c, ";
        }
        
        // sort array
        sort($cities);
        
        // print array as bulleted list.
        echo "\n<ul>\n" ;
        foreach($cities as $c){
            echo "<li$c</li>\n";
        }
        echo "</ul>";
        
        // add four cities to array.
        array_push($cities, "Los Angeles", "Calcutta", "Osaka", "Beijing");
        
        //Sort again, and print bulleted list.
        sort($cities);
        echo "\n<ul>\n";
        foreach($cities as $c){
            echo "<li>$c</li>\n";
        }
                echo "</ul>";
        ?>
        
        <h2> Exercise 4. </h2>
        
        <?php
        
        // create array
        $months=array(
        "January",
            "February",
            "March",
            "April",
            "May",
            "June",
            "July",
            "August",
            "September",
            "October",
            "November",
            "December");
        
        // print values of array to browser, separated by commas.
        foreach($months as $m){
            echo "$m, ";
        }
        // shuffle list and print
        shuffle($months);
        echo "<br><br>";
        foreach($months as $m){
            echo "$m, ";
        }
        ?>
        
        <h2> Exercise 5. </h2>
        <?php
        // create array
        $member_multi = array(array("month" =>'Jan.', "days" => '31'),
                              array("month" => 'Feb.', "days" =>'29'),
                              array("month" =>'Mar.', "days" =>'31'),
                              array("month" =>'Apr.', "days" =>'30'),
                              array("month" =>'May.', "days" =>'31'),
                              array("month" =>'June.', "days" =>'30'),
                              array("month" =>'July.', "days" =>'31'),
                              array("month" =>'Aug.', "days" =>'31'),
                              array("month" =>'Sep.', "days" =>'30'),
                              array("month" =>'Oct.', "days" =>'31'),
                              array("month" =>'Nov.', "days" =>'30'),
                              array("month" =>'Dec.', "days" =>'31'));
        
        foreach ($member_multi as $key => $value){
            echo "$key :";
            echo "$value <br>";
        }
        
        /*
        $months=array(
        "Jan.",
            "Feb",
            "Mar.",
            "Apr.",
            "May.",
            "June.",
            "July.",
            "Aug.",
            "Sept.",
            "Oct.",
            "Nov.",
            "Dec.");
        */
        ?>
        
        
        
        
    </body>
</html>