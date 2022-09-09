<form method="post">
<table border="2">
<tr>
<th>Choose Number</th>
<td><input type="text" name="cn" ></td>
</tr>

<tr>
<th>First number</th>
<td><input type="text" name="fn" ></td>
</tr>

<tr>
<th>Last number</th>
<td><input type="text" name="ln" ></td>
</tr>

<tr>

<td><input type="submit" name="sb" ></td>
</tr>
</table>

</form>


<?php
	
$i=$_POST['fn'];
$ln=$_POST['ln'];
$table=$_POST['cn'];


if(isset($_POST['sb']))
while($i<=$ln)
{
	$total=$table*$i;
	echo("$table X $i = $total"."<br>");
	$i++;
	
}

?>