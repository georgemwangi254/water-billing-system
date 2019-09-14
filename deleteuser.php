<?php session_start();
if(!isset($_SESSION['id'])){
	echo '<script>windows: location="index.php"</script>';

	
	}
		
?>
<?php
$session=$_SESSION['id'];
include 'db.php';
$result = mysql_query("SELECT * FROM user where id= '$session'");
while($row = mysql_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
  $q = "delete from user where id !=$session";
  mysql_query($q);
  header("Location: user.php");
?>
