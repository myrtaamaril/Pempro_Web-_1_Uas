<?php
include ('config.php');
session_start();
$username =$_POST['username'];
$password =$_POST['password'];
$password2 =$_POST['password2'];


$query = mysqli_query($koneksi,"SELECT count(*) as nama FROM tbusers WHERE username= '$username'");
while($cek =mysqli_fetch_array($query)){
  $cekcek=$cek['nama'];
}


if($cekcek>0){
  header('Location:../register.php?error=2');
}else if($password!=$password2){
  header('Location:../register.php?error=1');
}else if($username == '' || $password ==''){
    header('Location:../register.php?error=3');
}else{
    $query = mysqli_query($koneksi,"insert into tbusers(username,password,level)values('$username','$password','operator') ");
  header('Location:../index.php');
}


?>
