
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, incitial-scale=1.0">
    <title>Document</title>
</head>

<body bgcolor="lightblue">
    <center>

    
    <h2><b>Hospital Registration Form</b></h2>
    <form method="POST" action="">
        <table cellpadding="4" cellspacing="5" bgcolor="lightgrey">
            <tr>
                <td>Name:</td><td><input type="text" name="name" placeholder="enter your name" autofocus="required"></td>
            </tr>
            <tr>
                <td>Age:</td><td><input type="number" name="age" placeholder="enter your age" autofocus="required"></td>
            </tr>
            <tr>
                <td>Phone No:</td><td><input type="tel" name="phn" placeholder="enter your phone no." autofocus="required"></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="password" name="passwd" placeholder="enter your password" autofocus="required"></td>
            </tr>

            <tr>
            <td>Email ID:</td><td><input type="email" name="email" title="must include @ " placeholder="email id" autofocus="required"></td>
            </tr>
            <tr>
                <td> Blood Group:</td><td><select name="blood"value="bloodgroup">
                <option value="">select</option>
                <option value="O+ve">O+ve</option>
                <option value="B+ve">B+ve</option>
                <option value="A+ve">A+ve</option>
                <option value="AB+ve">AB+ve</option>
                <option value="B+ve">B+ve</option>
                <option value="B-ve">B-ve</option>
                <option value="A-ve">A-ve</option>
                <option value="AB-ve">AB-ve</option>
            </select></td>
                </tr>
                <tr>
                    <td>Gender:</td><td><input type="radio" name="gender" value="female">female
                    <input type="radio" name="gender" value="male">Male
                    </tr>
            <tr>
                <td>Doctor Name:</td><td><input type="text" name="dr" placeholder="enter doctors name"autofocus="required"></td>
            </tr>
            <tr>
                <td><input type="reset" name="reset" value="reset">
                </td>
                <td align="center">
                    <input type="submit" name="submit" value="submit">
                </td>
            </tr>
        </table>
    </form></center>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    $phn=$_POST['phn'];
    $passwd=$_POST['passwd'];
    $email=$_POST['email'];
    $dr=$_POST['dr'];
    // $upper=preg_match([@A-Z@]);
    // $lower=preg_match(@[a-z]@);
    // $special=preg_match(@[$%^&*@]@);
    // $digit=preg_match(@[0-9]@);
    if($name=="")
    {
        echo"enter your name";
    }
    elseif($age=="")
    {
        echo"enter your age";
    }
    elseif($phn=="")
    {
        echo"enter your phone number";
    }
    elseif(strlen($phn)!=10)
    {
        echo"enter phone number correctly";
    }
    elseif($passwd=="")
    {
        echo"enter your password and must have 8 characters with one uppercase lowercase digit and special character";
    }
    elseif($email=="")
    {
echo"enter your email";
    }
    elseif($dr=="")
    {
        echo "enter the doctor ";
    }
    else{
        echo"WELCOME";
    }


   
}
?>