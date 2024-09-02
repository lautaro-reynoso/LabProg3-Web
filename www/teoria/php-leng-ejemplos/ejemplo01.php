<html>
<head><title>Ejemplo Incrustado 1</title></head>
<body>
<?php
  if (date("H")>19 || date("H")<4) {
  echo "<h1>Buenas noches clase.</h1>";
  }
  else {
  echo "<h1>Buenos d&iacute;as clase.</h1>";
  }
?>
</body>
</html>