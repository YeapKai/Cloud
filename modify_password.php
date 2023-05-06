<?php
// Database connection
$host = "localhost";
$db_name = "99speedmart";
$username = "root";
$password = "";

$link = mysqli_connect("localhost", "root", "") or error(mysqli_errno($link));
mysqli_select_db($link, "99speedmart")  or error(mysqli_errno($link));

try {
    $db = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Database connection successful.<br>";
} catch(PDOException $e) {
    die("Error: " . $e->getMessage());
}

// Get user inputs
$username = $_POST['email'];
$password = $_POST['password'];
$new_password = $_POST['new_password'];

try {

    if(isset($_POST["update"])){

        //get user inputs

        //check if password matches
        $stmt = $db->prepare("SELECT CustomerPassword FROM customer WHERE UserName = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $stored_password = $result['CustomerPassword'];

        if($stored_password === $password){
            //update password
            $query = $db->prepare("UPDATE customer SET CustomerPassword = :new_password WHERE UserName = :username");
            $query->bindParam(':new_password', $new_password);
            $query->bindParam(':username', $username);
            $query->execute();

            //redirect to changepass.php with success message
            ?>
            <script type="text/javascript">
                alert("Update Successfully!"); 
                window.location="index.php";
            </script>
            <?php
        } else {
            //passwords do not match?>
            <script type="text/javascript">
             alert("Update Unsuccessfully. Try Again!"); 
            window.location="changepass.php";
            </script><?php
        }

    }

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


?>