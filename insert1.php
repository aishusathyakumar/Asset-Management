<html>
<head>
<title>insert1.php</TITLE>
</head>
<body bgcolor="peach">
<?php




$mysqlport=getenv('S2G_MYSQL_PORT');
	
$dbhost="localhost:".$mysqlport;
	
$dbuser='root';
	$dbpassword='';
	
$connect=mysql_connect($dbhost,$dbuser,$dbpassword)or die("connection failed");
	mysql_select_db('placement1');
	$query_select="select * from marks1";
$result=mysql_query($query_select);
?>

<pre>
<b><marquee>CONGRATS YOU ARE ALMOST THERE!</marquee></b>
Jump start your service desk...
Welcome to your service desk...
</pre>
    <table WIDTH="100" height="300" border="2">
	<tr>
		<th>ENTRY NAME</th>
		<th>CATEGORY</th>
		<th>VALUE</th>
		<th>APPRECIATION/DEPRECIATION/FIXED PRICE</th>
		<th>QUANTITY</th>
		<th>TOTAL VALUE</th>
	</tr>
<?php
	$i=1;
	while($row=mysql_fetch_array($result,MYSQL_ASSOC))
	{
		?>
	<tr>
		<td><?php echo $i;$i++ ?></td>
		<td><?php echo $row['entry_name'];?></td>
		<td><?php echo $row['category'];?></td>
		<td><?php echo $row['value'];?></td>
		<td><?php echo $row['app_dep_fix'];?></td>
		<td><?php echo $row['quantity'];?></td>
		<td><?php echo $row['value']*$row['quantity'] ;?></td>
	</tr>
<?php } ?>
</table>
    You have now entered all the details.Ensure that all the fields are filled and click<form action="homepage.html" method="POST">
  <button type="submit">NEXT</button>
<form action="insert2.php" method="POST"> proceed to estimate the market price after a particular span of time or current market value.
  <button type="submit">HOME</button>
</body>
</html>
