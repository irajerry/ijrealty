<?php
include('database-connect.php');

if(isset($_POST['add']))
{

$conn = mysql_connect($servername, $username, $password, $dbname );
if(! $conn )
{
die('Could not connect: ' . mysql_error());
}

if(! get_magic_quotes_gpc() )
{
$student_name = addslashes ($_POST['student_name']);
$student_email_address = addslashes ($_POST['student_email_address']);
}
else
{
$student_name = $_POST['student_name'];
$student_email_address = $_POST['student_email_address'];
}
$student_website = $_POST['student_website'];

$sql = "INSERT INTO students". "(name,email, url, added) ". "VALUES('$student_name','$student_email_address','$student_website', NOW())";
mysql_select_db($dbname);
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
mysql_close($conn);
}
else
{
?>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="400" border="0" cellspacing="1" cellpadding="2">
<tr>
<td width="100">Student name</td>
<td><input name="student_name" type="text" id="student_name" /></td>
</tr>
<tr>
<td width="100">Student Email Address</td>
<td><input name="student_email_address" type="text" id="student_email_address" /></td>
</tr>
<tr>
<td width="100">Student Website</td>
<td><input name="student_website" type="text" id="student_website" /></td>
</tr>
<tr>
<td width="100"> </td>
<td> </td>
</tr>
<tr>
<td width="100"> </td>
<td>
<input name="add" type="submit" id="add" value="Add Student" />
</td>
</tr>
</table>
</form>
<?php
}
?>

