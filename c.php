<?php 
//mysqli_connect("localhost","root","");
//mysql_select_db("t4");
//connection to mysql
$conn=mysqli_connect("localhost","root","","c");
if(!$conn)
{
   die("Connection Failed".mysql_connect_error());
}
if(isset($_POST['s']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $msg=$_POST['msg'];

    $sql_query="INSERT INTO c1(name,email,number,msg)
VALUES('$name','$email','$number','$msg')";
 if( mysqli_query($conn,$sql_query) )
 {
   header("Location: index.php");
 }
 else
 {
 echo ("Error Creating Database".mysqli_error($conn));
 }
 mysqli_close($conn);
}
?>
