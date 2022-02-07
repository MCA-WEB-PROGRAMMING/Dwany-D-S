<html>
<head>

</head>
<body>
<form action="" method="POST">
<h2>Register</h2>
<label>Name</label><input type="text" name="name"><br><br>
<label>Place</label><input type="text" name="place"><br><br>
<label>Age</label><input type="number" name="age" ><br><br>
<label>Email</label><input type="email" name="email"><br><br>
<input type="submit"name="submit">
</form>
<?php
$conn=mysqli_connect('localhost','root','','student');
if(isset($_POST['submit']))
{
    
   $name=$_POST['name'];
   $place=$_POST['place'];
   $age=$_POST['age'];
   $email=$_POST['email'];
   $sql="INSERT INTO student(name,place,age,email)VALUES('$name','$place',$age,'$email')";
   if(mysqli_query($conn,$sql))
       {
       echo("successfully connected");
       echo"<br>";
   }
   else{
       echo("error");
       echo"<br>";
   }  
}?>
<table border="1">
    <tr>
        <th>NAME</th>
        <th>PLACE</th>
        <th>AGE</th>
        <th>Email Id</th>
</tr>
<?php

 $display="SELECT * FROM student";
    $result=mysqli_query($conn,$display);
    while($row=mysqli_fetch_assoc($result))
    {
        echo '<tr>
        <td>'.$row['name'].'</td>
        <td>'.$row['place'].'</td>
        <td>'.$row['age'].'</td>
        <td>'.$row['email'].'</td>
        </tr>';

    }

?>
</table>
</body>


