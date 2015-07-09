<?    
$log='admin';
$pass='qwerty';

$_SESSION['admin'];

if ($_GET["login1"]==$log && $_GET["password1"]==$pass){
		print $_SESSION['admin'].'<br>'."<h1>Welcome</h1><br><a href='e_1.html'>next page</a>";
		unset ($_SESSION ['admin']); 
		
		
					
}
	else {
	print '<p>Wrong username or password</p>'.'<form action="e_1.html" method="GET">
	<input type="text" name="login1">
	<input type="password" name="password1">
	<input type="submit" name="submit1" value="Next">
	</form>';	
	}
?>
</body>
</html>	

