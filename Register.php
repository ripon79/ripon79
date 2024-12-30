<?php
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

$conn = new mysqli("localhost", "root", "", "exam");
if($conn->connect_error) {
    die("Failed to connect : ".$con->connect_error);
} else {
    $stmt = $conn->prepare("insert into edge(name, email,password)
value(?,?, ?)");
    $stmt ->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    echo "Registration Successfully....";
    $stmt->close();
    $conn->close();
}

?>