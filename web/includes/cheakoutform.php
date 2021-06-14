<?php
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zip'];

    if(!empty($username) || !empty($email) || !empty($address) || !empty($city) || !empty($state) || !empty($zip))
    {
        $servername="localhost";
        $dBUsername="root";
        $dBPassword="";
        $dBName="loginsystem";

        $conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);
        
        $INSERT = "INSERT Into cheakout (username, email, address, city, state, zip) values (?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($INSERT);
        $stmt->bind_param("sssssi", $username, $email, $address, $city, $state, $zip);
        $stmt->execute();
        echo "Your Order is approved";
        echo '<br>';
        
    }
    
    else{
        echo "All fiels are required";
        die();
    }
    $stmt->close();
    $conn->close();
?>