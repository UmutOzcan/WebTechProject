<!DOCTYPE html>
<html lang="en">
<head>



<META HTTP-EQUIV="Refresh" CONTENT="3; URL=AnaSayfa.html"> 


</head>
<style>

body {

background-color : #9AC0CD;

}

h1 {

text-align:center;
padding: 300px;

}



</style>



<body>


	<h1> Hoşgeldiniz 
	
	<hr>
	<?php $email = $_POST["email"]; 
	
		$dizi = explode ("@",$email);
		
		echo $dizi[0];
	?>
	
	
	</h1>
		
</body>
</html>