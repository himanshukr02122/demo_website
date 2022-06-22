<?php
if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
    
    $conn = mysqli_connect('localhost','new_user','passworD@123','Business') or die("Connection Failed");
    
    $name= $_POST['name'];    

    $email= $_POST['email'];

    $phone_no = $_POST['phone_no'];

    $text = $_POST['text'];

    $sql = "INSERT INTO Labs(name,email,phone_no,text) VALUES('$name','$email','$phone_no','$text')";

    if(mysqli_query($conn,$sql))
    {
        echo "Entry Successful";

    }else{
        echo "Error";
    }
}

?>