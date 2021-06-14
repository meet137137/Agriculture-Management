<?php
    
    $username = $_POST['username'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($username) || !empty($phoneno) || !empty($email) || !empty($message))
    {
        $servername="localhost";
        $dBUsername="root";
        $dBPassword="";
        $dBName="loginsystem";

        $conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
        
        $INSERT = "INSERT Into feedback (username, phoneno, email, message) values (?, ?, ?, ?)";

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("siss", $username, $phoneno, $email, $message);
        $stmt->execute();
        echo "New feedback inserted sucessfully";
        echo '<br>';
        echo '<a href="../index.html">Back to main page</a>';
    }
    
    else{
        echo "All fiels are required";
        die();
    }
    $stmt->close();
    $conn->close();
?>