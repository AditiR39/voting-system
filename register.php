<?php
include("connect.php");
$name= $_POST['name'];
$mobile= $_POST['mobile'];
$password= $_POST['password'];
$Cpassword= $_POST['Cpassword'];
$address= $_POST['address'];
$image= $_FILES['photo']['name'];
$tmp_name=$_FILES['photo']['tmp_name'];
$role=$_POST['role'];

if($password==$cpassword){
    move_uploaded_file($tmp_name,"../uploads/$image");
    $insert = mysqli_query($connect,"INSERT INTO user (name,mobile,password,Cpassword,address,photo,status,role) 
    VALUES('$name','$mobile','$password','$Cpassword','$address','$image','$tmp_name','$role',0,0)");
    if($insert){
        echo'
        <script>
        alert("Registration Successfull");
        window.location="../";
        <script/>';
    }
    else{
        echo'
        <script>
        alert("Some error occured");
        window.location="../routes/register.html";
        <script/>';
    }

}
else{
    echo'
        <script>
        alert("Password and confirm Password are not same");
        window.location="../routes/register.html";
        <script/>';
}
?>