<?php 
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}

echo "hi";
    if (isset($_POST['add_package_btn'])) 
    {
        $name = $_POST['place'];
        $description = $_POST['description'];
        $image = $_FILES['image']['name'];
        $status = isset($_POST['staus']) ? '1':'0';
        echo "hi1";
        $path = "images/";
        $query=  "INSERT INTO package (place, description,image, status) VALUES ('$name', '$description','$image','$status')";
        $query_run = mysqli_query($conn,$query);
        echo "hi2";
        echo $query_run;
        if ($query_run) {
            move_uploaded_file($_FILES['image']['tmp_name'],$path.'.'.$image);
            header("Location: admin.php");
            echo '<script>alert("Added Successfully")</script>';
        }else{
            echo $name;
            echo $description;
            echo $filename;
            echo $status; 
            header ('Location: admin.php');
            echo '<script>alert("Something went wrong")</script>';

        }
    }

?>