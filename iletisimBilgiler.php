<html>
<head>
<title>İletişim Bilgileri</title>
 <meta charset="utf-8">
</head>
<body>
	<table width="500" height="300">
		<tr>
			<td width="200"><b>Ad:</br></td>
			<td><?php echo($_POST["username"]);?></td>
		</tr>
		
		<tr>
			<td width="200"><b>Soyad:</br></td>
			<td><?php echo($_POST["usersurname"]);?></td>
		</tr>
		
		<tr>
			<td><b>E-mail:</b></td>
			<td><?php echo $_POST["email"];?></td>
		</tr>
		
		<tr>
			<td><b>Cinsiyet:</b></td>
			<td><?php echo $_POST["optradio"];?></td>
		</tr>
		
		<tr>
			<td><b>Site Hakkındaki Önerileriniz:</b></td>
			<td><?php echo $_POST["option1"]?></td>
		</tr>
		
		<tr>
			<td><b>Şehir:</b></td>
			<td><?php echo $_POST["sellist1"];?></td>
		</tr>
		
		<tr>
			<td><b>Yorum:</b></td>
			<td><?php echo $_POST["yorum"];?></td>
		</tr>
	</table>
</body>
</html>
