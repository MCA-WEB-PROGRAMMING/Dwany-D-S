<<<<<<< HEAD
<html>
<head>
<title>book</title>
</head>
<body> 
    <div>
<form action="" method="POST">
   
<h2>Book Details</h2>
<table cellpadding ="5">
    <tr><th>Accession number:</th>
    <td><input type="number" name="accessno">
</td>
</tr>
<tr>
    <th>Title:</th><td><input type="text" name="title"></td>
</tr>
<tr>
    <th>Authors:</th><td><input type="text" name="author"></td>
</tr>
<tr>
    <th>Edition:</th><td><input type="number" name="edition" ></td>
</tr>
<tr>
    <th>Publisher:</th><td><input type="text" name="publisher"></td>
</tr>
</table>

<input type="submit"name="submit">
</form></div>
<div>
<form action="" method="POST">
    <table cellpadding ="5">
        
    <tr>
        <td><input type="text" placeholder="search with title" name="title"></td><td><input type="submit" name="search" value="search"></td></tr>
        <br>
</table>

</form>

</div>


<?php
$conn=mysqli_connect('localhost','root','','book');
if(isset($_POST['submit']))
{
   $accessno=$_POST['accessno'];
   $title=$_POST['title'];
   $author=$_POST['author'];
   $edition=$_POST['edition'];
   $publisher=$_POST['publisher'];
   $sql="INSERT INTO book_tb(accessno,title,author,edition,publisher)VALUES('$accessno','$title','$author',$edition,'$publisher')";
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
        <th>Accession No.</th>
        <th>Title</th>
        <th>Author</th>
        <th>Edition</th>
        <th>Publisher</th>
</tr>
<?php
if(isset($_POST['search']))
{
    $title=$_POST['title'];
    $conn=mysqli_connect("localhost","root","","book");
    $search="SELECT * FROM book_tb where title='$title' ";
    $result=mysqli_query($conn,$search);


    while($row=mysqli_fetch_assoc($result))
    {
        echo '<tr>
        <td>'.$row['accessno'].'</td>
        <td>'.$row['title'].'</td>
        <td>'.$row['author'].'</td>
        <td>'.$row['edition'].'</td>
        <td>'.$row['publisher'].'</td>
        </tr>';

    }
}

?>
</table>
</body>


=======
<html>
<head>
<title>book</title>
</head>
<body> 
    <div>
<form action="" method="POST">
   
<h2>Book Details</h2>
<table cellpadding ="5">
    <tr><th>Accession number:</th>
    <td><input type="number" name="accessno">
</td>
</tr>
<tr>
    <th>Title:</th><td><input type="text" name="title"></td>
</tr>
<tr>
    <th>Authors:</th><td><input type="text" name="author"></td>
</tr>
<tr>
    <th>Edition:</th><td><input type="number" name="edition" ></td>
</tr>
<tr>
    <th>Publisher:</th><td><input type="text" name="publisher"></td>
</tr>
</table>

<input type="submit"name="submit">
</form></div>
<div>
<form action="" method="POST">
    <table cellpadding ="5">
        
    <tr>
        <td><input type="text" placeholder="search with title" name="title"></td><td><input type="submit" name="search" value="search"></td></tr>
        <br>
</table>

</form>

</div>


<?php
$conn=mysqli_connect('localhost','root','','book');
if(isset($_POST['submit']))
{
   $accessno=$_POST['accessno'];
   $title=$_POST['title'];
   $author=$_POST['author'];
   $edition=$_POST['edition'];
   $publisher=$_POST['publisher'];
   $sql="INSERT INTO book_tb(accessno,title,author,edition,publisher)VALUES('$accessno','$title','$author',$edition,'$publisher')";
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
        <th>Accession No.</th>
        <th>Title</th>
        <th>Author</th>
        <th>Edition</th>
        <th>Publisher</th>
</tr>
<?php
if(isset($_POST['search']))
{
    $title=$_POST['title'];
    $conn=mysqli_connect("localhost","root","","book");
    $search="SELECT * FROM book_tb where title='$title' ";
    $result=mysqli_query($conn,$search);


    while($row=mysqli_fetch_assoc($result))
    {
        echo '<tr>
        <td>'.$row['accessno'].'</td>
        <td>'.$row['title'].'</td>
        <td>'.$row['author'].'</td>
        <td>'.$row['edition'].'</td>
        <td>'.$row['publisher'].'</td>
        </tr>';

    }
}

?>
</table>
</body>


>>>>>>> 854eda2b0bce8815227cbb84bb37e060e2991db6
