<?php
// include database connection file
include_once("koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$rid = $_POST['rid'];
	
    $stat = $_POST['stat'];
		
	// update user data
	$result = mysqli_query($koneksi, "UPDATE reservation SET rstat ='$stat' WHERE rid=$rid");
	
	// Redirect to homepage to display updated user in list
	header("Location: admin.php");
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
    <form name="update_Reservation" action="editReservation.php" method="post">
      <h1>
        <b><u>EDIT STATUS</u></b>
      </h1>
      <input type="hidden" name="rid" value=<?php echo $_GET['rid'];?>>
      <div class="stat">
        <p ><b>Reservation Status</b></p>
        <select id="stat" name="stat">
            <option value="Pending" selected>Pending</option>
            <option value="Check In">Check In</option>
            <option value="Check Out">Check Out</option>
        </select>
        </div>
      <input type="submit" name="update" value="Update" />
    </form>
  </body>
</html>