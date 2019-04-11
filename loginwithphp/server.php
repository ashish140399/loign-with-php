<?php
$nameErr = $emailErr=$passwordErr=$dnmErr="";
$username = $email=$password1=$password2 ="";

// Create connection
$conn = new mysqli('localhost', 'root', '', 'registration');
$db = mysqli_connect('localhost', 'root', '', 'registration');
// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 

//For new registration when user click registration button

if (isset($_POST['register_user'])) {
	if (empty($_POST["username"])) {
    	$nameErr = "Name is required";
    } else {
  		$username = mysqli_real_escape_string($db,$_POST["username"]);
    }
    if (empty($_POST["email"])) {
    	$emailErr = "Email is required";
    } else {
    	$email = mysqli_real_escape_string($db, $_POST["email"]);
    }
    if (empty($_POST["password1"])) {
    	$passwordErr = "Password is required";
    } else {
    	$password1 = mysqli_real_escape_string($db, $_POST["password1"]);
    }
	$password2 = mysqli_real_escape_string($db, $_POST['password2']);

  // form validation: ensure that the form is correctly filled ...
  
  
	if ($password1 != $password2) {
		$dnmErr= "The two passwords do not match";
    }
    if($password1==$password2)
	{
    	$db = mysqli_connect('localhost', 'root', '', 'registration');
    	//mysqli_select_db("registration");
    	$sql = "INSERT INTO users (username, password, email)
		VALUES ('$username', '$password1', '$email')";
    	echo "You have been registered.";
    	echo "$username";
    }	

    if ($db->query($sql) === TRUE) {
    	header('location: success.php');
		} else {
    	echo "Error: " . $sql . "<br>" . $db->error;
		}
}
 

// LOGIN USER 


if(isset($_POST['login'])){

    $email= mysqli_real_escape_string($conn,$_POST['email']);
    $password1 = mysqli_real_escape_string($conn,$_POST['password1']);

    if ($email != "" && $password1 != ""){

        $sql_query = "select count(*) as cntUser from users where email='".$email."' and password='".$password1."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['email'] = $email;
            header('Location: successlog.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
