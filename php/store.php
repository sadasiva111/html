<?php
$conn = mysql_connect("localhost","root","");
$db   = mysql_select_db("test",$conn);
?>

<?php
$name=$_POST['student'];
$age=$_POST['age'];
$phno=$_POST['number'];

$sql="INSERT INTO sample values('$name,'$age','$phno')";
$qry=mysql_query($sql);

if(!qry)
    echo mysql_error();
    else
        echo "values inserted successfully";
    echo"<a href="#">View the data</a>";
?>

<?php
echo "<ol>";
$sql="select * from sample";
$qry=mysql_query($sql);
while($row=mysql_fetech_array($qry))
    echo"<li>name:$row[0]</li>
    <li>age:$row[1]</li>
    <li>phno:$row[2]</li><br/>";
    echo "<ol>";
?>
