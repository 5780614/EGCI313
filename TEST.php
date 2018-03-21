Last login: Wed Mar 21 10:39:22 on ttys002
6272s-Mac-mini-34:desktop 6272user$ bash -c "clear && docker exec -it lamp sh"
































# ls
app  boot			 dev  home  lib64  mnt	proc  run     sbin  start-apache2.sh  sys  usr
bin  create_mysql_admin_user.sh  etc  lib   media  opt	root  run.sh  srv   start-mysqld.sh   tmp  var
# cd app
# ls
LICENSE  README.md  index.php  logo.png  phpinfo.php  test.php
# ls
LICENSE  README.md  index.php  logo.png  phpinfo.php  test.php
# nano test.php
# nano test.php
























  GNU nano 2.2.6                                    File: test.php                                                                               

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EGCI313";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, firstname, weight, height FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ID: ". $row["id"].  " Name: ". $row["firstname"].  " Weight: ". $row["weight"].  " Height: ". $row["height"].   "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>



                                                                [ Read 27 lines ]
^G Get Help             ^O WriteOut             ^R Read File            ^Y Prev Page            ^K Cut Text             ^C Cur Pos
^X Exit                 ^J Justify              ^W Where Is             ^V Next Page            ^U UnCut Text           ^T To Spell
