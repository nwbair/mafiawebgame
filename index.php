<?php include_once("connect.php"); 


if(isset($_POST['Login'])) {
	
	if (preg_match('[^A-Za-z0-9]', $_POST['Username'])) {// before we fetch anything from the database we want to see if the user name is in the correct format.
         echo "Invalid  Username.";
		 }else{
			 $username = mysqli_real_escape_string($connection, $_POST['Username']);
			 $query = "select * from users where name = '$username'";
			 $result = mysqli_query($connection, $query);
			 $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
			 if (!$result) {
				printf("Error: %s\n", mysqli_error($connection));
				exit();
			}
//$result = mysqli_query($connection, $query) or die(mysqli_error());
//$row = mysqli_fetch_array($result); // Search the database and get the password, id, and login ip that belongs to the name in the username field.

if(empty($row['id'])){
	// check if the id exist and it isn't blank.
    echo "Could not verify login information.";
	}else{
		
		if(md5($_POST['password']) != $row['password']){
			// if the account does exist this is matching the password with the password typed in the password field. notice to read the md5 hash we need to use the md5 function.
            echo "Could not verify login information."; 
			}else{
				
				if(empty($row['login_ip'])){ // checks to see if the login ip has an ip already 
		$row['login_ip'] = $_SERVER['REMOTE_ADDR'];
		}else{
		
		$ip_information = explode("-", $row['login_ip']); // if the ip is different from the ip that is on the database it will store it
		
		if (in_array($_SERVER['REMOTE_ADDR'], $ip_information)) {	
		$row['login_ip'] = $row['login_ip'];
		}else{	
		$row['login_ip'] = $row['login_ip']."-".$_SERVER['REMOTE_ADDR'];
		}
		}
		
	$_SESSION['user_id'] = $row['id'];// this line of code is very important. This saves the user id in the php session so we can use it in the game to display information to the user.
$remote_addr = mysqli_real_escape_string($connection, $_SERVER['REMOTE_ADDR']);
$login_ip = mysqli_real_escape_string($connection, $row['login_ip']);
$user_id = mysqli_real_escape_string($connection, $_SESSION['user_id']);
$result = mysqli_query($connection, "UPDATE users SET userip='$remote_addr',login_ip='$login_ip' WHERE id='$user_id'")
or die(mysqli_error());

// to test that the session saves well we are using the sessions id update the database with the ip information we have received.

header("Location: usersonline.php"); // this header redirects me to the Sample.php i made earlier
	
		
			}
			}
	}
}
?>


<form id="form1" name="form1" method="post" action="">
<center>
  GAME LOGIN
  <br />
  <br />
  Username:
  <input type="text" name="Username" id="Username" />
  <br />
  <br />
Password:
<input type="password" name="password" id="password" />
  <br />
  <br />
  <input type="submit" name="Login" id="Login" value="Login" />
  </center>
</form>
