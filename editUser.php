<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$username = $_POST['username'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE user SET username='$username',email='$email',age='$age', tel='$phone' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: user.php");
}
?>

<?php

$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($koneksi, "SELECT * FROM user WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$username = $user_data['username'];
    $email = $user_data['email'];
    $age = $user_data['age'];
    $phone = $user_data['tel'];  
}
?>
<html>
<head>	
	<title>Edit User Data</title>
    <link rel="stylesheet" href="editUser.css" />
</head>

<body>
    <div class="logo">
      <img
        src="https://s3-alpha-sig.figma.com/img/87ee/1c98/3ad9f4adde835c58584effe84325f1ce?Expires=1655683200&Signature=CcXfEJsJBruqoTS61ZTB8cjNTP5WP7rUQz8lnCXSyCKCAFMshGspAy5C7jOv09OEUVgYKuyE0uAWxGMl9JYhVBpQ8dRFmPcqwdukMPON2QCyqGx8xvRRC4mHkCGAmTTJaTOgCDvDUyk5UIohgx5ide8S4SLTgtB1k~j1GaAEw3T9j8gBYZPCQk5ItsElxOuGnxQQ3PzBhMx0JrEbFnXWD4QAAGjADdNp-wzvsFMYaeraCpLOR4Xecmd2Qteth7oWl9sxrxsVyxJZ2BNvHmv7weiUbBTGgkGL7DS9eLGRL5D5ibRaDuqcBgVJrWv-96b5Jr3VzzUx5Bmg27ZOnNNA-Q__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
        alt="logo"
      />
    </div>
    <form name="update_user" action="editUser.php" method="post">
      <h1>
        <b><u>EDIT USER</u></b>
      </h1>
      <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
      <div class="username">
        <b>Username</b>
        <input type="text" id="username" name="username" value=<?php echo $username;?>>
      </div>

      <div class="email">
        <b>Email</b>
        <input type="email" id="email" name="email" value=<?php echo $email;?> />
      </div>

      <div class="age">
        <b>Age</b>
        <input type="number" id="age" name="age" value=<?php echo $age;?> />
      </div>

      <div class="phone">
        <b>Phone Number</b>
        <input type="tel" id="phone" name="phone" name="phone" pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" value=<?php echo $phone;?> />
      </div>
      <input type="submit" name="update" value="Update" />
    </form>
  </body>
</html>