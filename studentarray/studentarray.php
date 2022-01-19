<html>
    <head>
</head>
<body>
<?php
$s=array("Ajmal","Arun","Don","Dwany","Raichel","Ansiya","Anju","Deepak");
asort($s);
echo " array sorted using asort function<br>";
print_r($s);
echo"<br>";
arsort($s);
echo " array sorted using arsort function<br>";
print_r($s);
?>
</body>
</html>
