<html>
<head>
<title>Launch</title>
</head>
<body>
<form action='test.php' method='post'>
ping address:<br>
<input type='text' name='address'><br><br>
Amount:<br>
<input type='text' name='amount'><br>
<br>
Packet Size (Max 65500):<br>
<input type='text' name='size'><br>
<input type='submit' name='submit' value='submit'><br>
</form>
</body>
</html>

<?php
//code for actual ping
if(isset($_POST['submit'])) 
//if submit has been pressed
{
$address=$_POST['address'];
$amount=$_POST['amount'];
$size=$_POST['size'];
//above is a security measure to make sure it pings the typed address
exec("ping -n $amount -l $size -w 0 $address",$results);
//the actual ping execution command
//output thrown in $results
$count=count($results);
//counts number of rows $in results array
for($i=0;$i<$count;$i++)
{
print "$results[$i]<br>";
}
}
//the loops print out all results of $results //line by line ?>
