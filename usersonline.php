<?php require("left.php"); ?>
<html>
<head>
</head> 
<body>
<table width="90%" height="94" border="1">
  <tr>

    <td height="23" align="center">Users online</td>
  </tr>
  <tr>
    <td>
		<?php
			$sql = "SELECT name FROM users WHERE DATE_SUB(NOW(),INTERVAL 5 MINUTE) <= lastactive ORDER BY id ASC"; // Searches the db for everyone recently active.
			$query = mysqli_query($connection, $sql) or die(mysqli_error());
			$count = mysqli_num_rows($query);
			$i = 1;
			while($row = mysqli_fetch_object($query)) {
				$online_name = htmlspecialchars($row->name);
				echo "$online_name"; // displays the names that fit the search
				
				if($i != $count) {
					echo "<label>, </label>";
				}
				$i++;
			}
			
			echo "<p><center>Total Online: " . $count . "</center></p>";
		?>
	</td>
  </tr>
</table>
</body>
</html>
<?php require("right.php"); ?>
