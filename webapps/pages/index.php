<html><body>

<?php

$file = $_GET['file'];
if (isset($file))  {
	include("$file");
}
else {
	include("default.php");
}

?>

<a href="index.php?file=default.php">default</a>
<a href="index.php?file=other.php">other</a>
</body></html>
