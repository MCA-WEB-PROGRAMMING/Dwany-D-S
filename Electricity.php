<html>
<head>
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Enter the meter number:
                    <input type="number" name="num" value="" placeholder="Enter Meter Number">
</td>
</tr>
<tr>
    <td>Enter the Number of Units:
        <input type="number" name="unit" value="" placeholder="Enter Unit consume">
</td>
</tr>
<tr>
    <td>Enter the Category:
        <select name="tariff">
            <option>Select</option>
            <option>Rural</option>
            <option>Commercial</option>
</option>Residential</option>
</select>
</td>
</tr>
<tr>
    <td>
        <input type="submit" name="submit" value="submit"/>
</td>
</tr>
</table>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
    $num=$_POST['num'];
    $unit=$_POST['unit'];
    $tariff=$_POST['tariff'];
    if($tariff=="Rural")
    {
        if($unit>0&&$unit<=50)
        {
            $el=20;
            $price=(($unit*.25)+$el);
           
        }
        else if($unit>50&&$unit<=100){
            $el=20;
            $price=(($unit*.5)+$el);
            
        }
        else if($unit>100&&$unit<=250){
            $el=20;
            $price=(($unit*.75)+$el);
           
        }
        else if($unit>50&&$unit<=100){
            $el=20;
            $price=(($unit*.95)+$el);
        
        }
        else if($unit>400){
            $el=20;
            $price=(($unit*1.25)+$el);
           
        }
        echo "<br>Your Meter Number is:".$num;
        echo "<br>";
        echo "Units are:".$unit;
        echo "<br>";
        echo "Extra Charges are:".$el;
        echo "<br>";
        echo "Total $unit Units of charges:".$price;
        echo"<br>";
    }


    if($tariff=="Residential")
    {
        if($unit>0&&$unit<=50)
        {
            $el=35;
            $price=(($unit*1.35)+$el);
            
        }
        else if($unit>50&&$unit<=100){
            $el=35;
            $price=(($unit*2)+$el);
           
        }
        else if($unit>100&&$unit<=250){
            $el=35;
            $price=(($unit*3)+$el);
      
        }
        else if($unit>50&&$unit<=100){
            $el=35;
            $price=(($unit*4)+$el);
            
        }
        else if($unit>400){
            $el=35;
            $price=(($unit*6)+$el);
           
        }
        echo "<br>Your Meter Number is:".$num;
        echo "<br>";
        echo "Units are:".$unit;
        echo "<br>";
        echo "Extra Charges are:".$el;
        echo "<br>";
        echo "Total $unit Units of charges:".$price;
        echo"<br>";
    }


    if($tariff=="Commercial")
    {
        if($unit>0&&$unit<=50)
        {
            $el=65;
            $price=(($unit*4.5)+$el);
            
        }
        else if($unit>50&&$unit<=100){
            $el=65;
            $price=(($unit*5.8)+$el);
         
        }
        else if($unit>100&&$unit<=250){
            $el=65;
            $price=(($unit*6.5)+$el);
           
        }
        else if($unit>50&&$unit<=100){
            $el=65;
            $price=(($unit*7.2)+$el);
            
        }
        else if($unit>400){
            $el=65;
            $price=(($unit*9)+$el);
            
        }
        echo "<br>Your Meter Number is:".$num;
        echo "<br>";
        echo "Units are:".$unit;
        echo "<br>";
        echo "Extra Charges are:".$el;
        echo "<br>";
        echo "Total $unit Units of charges:".$price;
        echo"<br>";
    }

}
?>
