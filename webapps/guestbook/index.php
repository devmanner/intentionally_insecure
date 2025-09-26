<html>
<body>

<p>If you run an old browser with XSS-Auditor: Make sure to start your browser with:</p>
<pre>chromium-browser -disable-xss-auditor</pre>

<table> 
	<tr>
		<form method=post>
		<td>Name:</td>
		<td><input type=text name=name></td>
	</tr>
	<tr>
		<td>Message:</td>
		<td><input type=textfield name=message></td>
	</tr>
	<tr><td>
		<input type=submit>
	</td></tr>
	</form>
</table>

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

