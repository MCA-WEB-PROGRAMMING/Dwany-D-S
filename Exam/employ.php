<html>
<head>
<title>Employee Details</title>
</head>
<body>

<h1>Employee Details</h1>
<div>
     <form action="" method="POST">
         <table border="1" bgcolor="lightblue">
             <tr><th>Employee_ID</th><th><input type="number" name="emp_id" ></th></tr>
             <tr><th>Employee_Name</th><th><input type="text" name="na"></th></tr>
             <tr><th>Job_Name</th><th><input type="text" name="jna"></th></tr>
             <tr><th>Manager_id</th><th><input type="number" name="mgid"></th></tr>
             <tr><th>Salary</th><th><input type="number" name="sala"></th></tr>
             <tr>
            <td><input type="reset" name="clear" value="clear"></td>
            <td><input type="submit" name="submit" value="submit"></td>
      </tr>
         </table>
     </form>
</div>
</body>
</html>
<?php 
$conn=mysqli_connect("localhost","root","","employ");
if(isset($_POST["submit"]))
{
    $emp_id=$_POST['emp_id'];
    $emp_name=$_POST['na'];
    $job_name=$_POST['jna'];
    $manager_id=$_POST['mgid'];
    $salary=$_POST['sala'];
    $sql="INSERT INTO emp(emp_id,emp_name,job_name,manager_id,salary)VALUES($emp_id,'$emp_name','$job_name',$manager_id,$salary)";
    if(mysqli_query($conn,$sql))
       {
       echo("successfully connected");
       echo"<br>";
   }
   else{
       echo("error");
       echo"<br>";
   } 
   
   $search="SELECT * FROM emp Where salary >35000";
    $data=mysqli_query($conn,$search);
    echo "<div><table border='1'><tr><th>Employee_Name</th><th>Salary</th></tr>";
    while($res=mysqli_fetch_assoc($data))
    { echo "<tr>";
       echo "<th>".$res['emp_name']."</th>";
       echo "<th>".$res['salary']."</th>"; 
       echo "</tr>";
    }
    echo "</table></div>";
    
}
?>


