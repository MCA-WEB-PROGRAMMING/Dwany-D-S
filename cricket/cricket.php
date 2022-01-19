<html>
    <head>
</head>
<body>
    <?php
    $a=array("Virat Kohli","MS Dhoni","Rohit Sharma","KL Rahul","Hardik Pandya");
    echo "<table border='1'cellpadding ='5' bgcolor='lightblue'><tr><th></th><th>Indian Cricket Players</th></tr>";
    foreach($a as $s=>$n)
    {
        echo "<tr><td>$s</td><td>$n</td></tr>";
    }
    echo "</table>";    
    ?>
</body>
</html>
