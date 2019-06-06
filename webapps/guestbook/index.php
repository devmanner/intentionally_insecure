<html>
<body>

<p>Make sure to start your browser with:</p>
<pre>chromium-browser -disable-xss-auditor</pre>

<form method=post>
<input type=text name=name>
<input type=textfield name=message>
<input type=submit>
</form>


<?php

$fname = "posts.html";

if ( isset($_POST['name']) ) {
	$handle = fopen($fname, 'a') or die('Cannot open file: '.$fname);
	$data = "<p>" . $_POST['name'] . "</p><p>" . $_POST['message'] . "</p><hr>\n";
	fwrite($handle, $data);
	fclose($handle);
}

include("posts.html")

?>

</body>
</html>

