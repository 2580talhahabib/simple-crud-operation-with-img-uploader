<?php   
include("./db_conn.php");

if (isset($_POST['submit'])) {
    $_username = $_POST['username'];
    $_password = $_POST['password'];
    $_Email = $_POST['Email'];
    $_Roll_number = $_POST['Roll_number'];
    $_Address = $_POST['Address'];
}

if (isset($_FILES['p-img'])) {
    $file_name = $_FILES['p-img']['name'];
    $file_size = $_FILES['p-img']['size'];
    $file_tmp = $_FILES['p-img']['tmp_name'];
    $file_type = $_FILES['p-img']['type'];

    $uploaded_img = './images/'; 
    $img_path = $uploaded_img . $file_name;
    move_uploaded_file($file_tmp, $img_path);
}

$sql = "INSERT INTO `crud` (`username`, `password`, `Email`, `Roll_number`, `Address`, `p-img`) VALUES ('$_username', '$_password', '$_Email', '$_Roll_number', '$_Address', '$file_name')";

if (mysqli_query($conn, $sql)) {
    
    header("Location: ./display.php");
    exit(); 
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
