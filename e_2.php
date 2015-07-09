<html>
<head>
    <title> 2  </title>
    
    </head>
    <body>
    <p>
	<?
	$txt=$_GET['textarea1'];
	$name=$_GET['text1'];
	$f_o=fopen("new/$name.txt","w+");
	fwrite($f_o,$txt);
	$content=fread($f_o,filesize("new/$name.txt"));
	fclose($f_o);
	?>
    </body>
</html>

