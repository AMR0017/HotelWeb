<?php 
    include_once "koneksi.php";

    $result = mysqli_query($koneksi, "SELECT * FROM reservation ORDER BY rid DESC");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation-Manage</title>
    <link rel="stylesheet" href="admin.css" />
  </head>
  <body>
    <header>
      <logo>
        <div id="logo" class="logo">
          <a href="index.html">
            <img
              src="https://s3-alpha-sig.figma.com/img/55cc/dfb0/a2d7f31f6d3f58768a39c19a1aa39d85?Expires=1655683200&Signature=gOYRitftt4Y5ijQVUX2CR8GJw8DYKZZ6XJiqICjmxBBD7DwtscMo4bpkuo-eUOc4tYAH2~3k8rS6P~RWGuWga7af3NcJxXa7TxYpcVt8y4NyTMwC5ft~3HHc3l4qhL-bAyXBU5wvsM8Y2pOTvDKTAaqeDckE5b7oFEliyFJ7xgTwKMQrkgTrCkpxTWwRifbV34CWNaieiOG~e7lSNBi6m0TUPNUy~41BZ~ToKfW9aJbhdYrdhCdNG3DRM7S1ApCIgdomNoQzjbd1iKvEiydqP1xdKcIa2qmIEabYenoaTJA7mEh12XWGT1StD1XMQ1ROO6op5etATyhAyCeUjTEgrQ__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA"
            />
          </a>
        </div>
      </logo>
    </header>
    <content>
      <h1>
        <b><u>ADMIN MANAGEMENT</u></b>
      </h1>

      <div class="form-inline">
        <nav>
          <div class="uneditable-textarea" id="mainmenu-coontainer" style="position: relative">
              <ul id="mainmenu">
                <li>
                  <a href="admin.php">Reservation</a>
                </li>
                <li>
                  <a href="user.php">User</a>
                </li>
              </ul>
            </div> 
        </nav>

        <add>
          <ul id="add">
            <li>
              <a href="addReservation.html">Add New Reservation</a>
            </li>
          </ul>
        </add>
      </div>

      <user>
            <table width='90%' border=8 cellspacing=0>
            <tr >
                <th>Email</th> <th>ReservationID</th><th>Rooms Type</th> <th>Check In Date</th><th>Check Out Date</th> <th>Duration</th><th>Rooms</th><th>Status</th><th>Update</th>
            </tr>
            <?php  
            while($user_data = mysqli_fetch_array($result)) {         
                echo "<tr>";
                echo "<td>".$user_data['email']."</td>";
                echo "<td>".$user_data['rid']."</td>";
                echo "<td>".$user_data['rtype']."</td>";
                echo "<td>".$user_data['check_in']."</td>";
                echo "<td>".$user_data['check_out']."</td>";
                echo "<td>".$user_data['duration']."</td>";
                echo "<td>".$user_data['room']."</td>";
                
                if ($user_data['rstat'] == "Pending") {
                  # code...
                  echo "<td style='color:orange'>".$user_data['rstat']."</td>";  
                }else if ($user_data['rstat'] == "Check In") {
                  # code...
                  echo "<td style='color:Green'>".$user_data['rstat']."</td>";  
                }
                else if ($user_data['rstat'] == "Check Out") {
                  echo "<td style='color:red'>".$user_data['rstat']."</td>";  
                }
                                
                echo "<td><a href='editReservation.php?rid=$user_data[rid]'>Edit</a> | <a href='deleteReservation.php?rid=$user_data[rid]'>Delete</a></td></tr>";        
            }
            ?>
            </table>
        </user>

    </content>
    <footer class="footer" id="footer">
      <div class="footerlogo" id="footerlogo">
        <img src="https://s3-alpha-sig.figma.com/img/87ee/1c98/3ad9f4adde835c58584effe84325f1ce?Expires=1655683200&Signature=CcXfEJsJBruqoTS61ZTB8cjNTP5WP7rUQz8lnCXSyCKCAFMshGspAy5C7jOv09OEUVgYKuyE0uAWxGMl9JYhVBpQ8dRFmPcqwdukMPON2QCyqGx8xvRRC4mHkCGAmTTJaTOgCDvDUyk5UIohgx5ide8S4SLTgtB1k~j1GaAEw3T9j8gBYZPCQk5ItsElxOuGnxQQ3PzBhMx0JrEbFnXWD4QAAGjADdNp-wzvsFMYaeraCpLOR4Xecmd2Qteth7oWl9sxrxsVyxJZ2BNvHmv7weiUbBTGgkGL7DS9eLGRL5D5ibRaDuqcBgVJrWv-96b5Jr3VzzUx5Bmg27ZOnNNA-Q__&Key-Pair-Id=APKAINTVSUGEWH5XD5UA" alt="footer-logo" align="left">
      </div>

      <div class="Contact">
        <address>
        <h1><u>Contact & Address</u></h3>
        <h3>
          "Jl. Urip Sumoharjo KM. 5, Makassar Sulawesi Selatan 90231 Indonesia"
          <span>
            <strong>Phone/Fax :</strong>
            (+62) 8238267210
          </span>
          <span>
            <strong>email :</strong>
            <a href="Hotel@ECapsHotel.com">Hotel@ECapsHotel.com</a>
          </span>
          <span>
            <strong>Web :</strong>
            <a href="https://ecapshotel.w3spaces.com/">https://ecapshotel.w3spaces.com/</a>
          </span>
        </h3>
        </address>
      </div>
      <div class="subfooter">
        <div class="container">
          <div class="text-center">
            @ Copyright 2022 - E-Caps Makassar
            <div class="text-center">AMR-17 Thirmidzi</div>
            </div>
        </div>
      </div>
    </footer>
  </body>
</html>
