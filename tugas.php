<!DOCTYPE html>
<html>
<head>
	<title>Program Bioddata</title>
</head>
<body>
	<form methode="POST" action="tugasAct.php">
		<table width="400" align="center" cellpadding="2" cellspacing="2">
			<!-- tr berfungsi nemabha baris di tabel -->
			<tr> 
				<!-- td berfungsi menambah kolom di tabel -->
				<td width="130">Nama</td>
				<!-- input untuk memasukan inputan html -->
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td width="130">Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="btnlogin" value="Login">
					<input type="reset" name="reset" value="Reset">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>