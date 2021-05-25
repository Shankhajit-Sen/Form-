<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";


$conn = mysqli_connect($server, $username, $password, $dbname);
 
if(isset($_POST['submit'])){

    if(!empty($_POST['id']) && !empty($_POST['fname']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['address']) && !empty($_POST['phone'])){
        $id=$_POST['id'];
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];

        $query = "insert into form(id,fname,lname,email,password,address,phone) values('$id','$fname','$lname','$email','$password','$address','$phone')";
        $run = mysqli_query($conn,$query) or die(mysqli_error($conn));
        if($run){
            echo "Form Submitted Successfully";
        }
        else {
            echo "Form not Submitted";
        }
    }
    else{
        echo "All Fields are reuired" ;
    }
}


?>