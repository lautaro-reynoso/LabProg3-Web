<html>
<body>
<?php if(! ($_SERVER["REQUEST_METHOD"] == "POST")) {?>
	<form action="form2.php" method="POST">
	<select multiple name=menu[]>
	<option>Tortilla <option>Milanesa
	<option>Asado <option>Lentejas
	</select><input type=submit></form>
<?php
} else {
?>
<?php
  echo "Su elección:<br>\n";
	$i=0;
	$menu = $_POST["menu"];
     while ($i<4){
       if($menu[$i]!="") {
         echo  $menu[$i]."<br>\n";
       }
      $i++;
		}
	}
?>
</body>
</html>
