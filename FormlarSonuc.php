<!DOCTYPE html>
<html lang="en">
<head>
	<title> WebPro </title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	
	<link rel="stylesheet" href="css/Formlar-style.css">


  
</head>
<body>
	

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>	


    <!-- Başlık kısmı   -->

	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="AnaSayfa.html"> WebPro </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ">
      <a class="nav-item nav-link active" href="Hakkımda.html"> Hakkımda </a>
      <a class="nav-item nav-link active" href="Şehrim.html">Şehrim</a>
      <a class="nav-item nav-link active" href="Takımımız.html">Takımımız</a>
      <a class="nav-item nav-link active" href="Formlar.html">Formlar</a>
	  <a class="nav-item nav-link active" href="İletişim.html">İletişim</a>
    </div>
    </div>
    </nav>
	
	
	<div class="container">	
   	
		<div class="welcome">
		
		<h1> Formlar </h1>
				
		</div>
		
		<div class="row">
		<div class="col-md-6">
		
		
		<h2>Ad </h2> <input type="text" name="adi" id="adi" required="required"><br/><br>
		<h2>Soyad </h2> <input type="text" name="soyadi" id="soyadi" required="required"><br/><br>
		<h2>E-mail </h2> <input type="email" name="email" id="email" required="required"><br/><br>
		

		<h2> Cinsiyet </h2>

		Erkek <input type="radio" name="cinsiyet" value="erkek" checked>
		Kadın <input type="radio" name="cinsiyet" value="kadin">
		
		<br><br>
		
		<h2>Doğum Tarihi</h2> <input type="date" name="bday" id="bday" required="required">
		
		<br><br>
		
		<h2>Mesajınız</h2> <textarea name="mesaj" rows="10" cols="30" id="mesaj"></textarea>
		
		<br><br>

		
		
		<button type="submit"> GÖNDER </button> <br/><br>
		
		
		
		
		</div>
		
		
		
		<div class="col-md-6">
		
		
		
		
		
		<?php
		
				
			echo " <h2> Ad </h2>";
		 	echo $_POST["adi"]; 
			echo " <br><br><br>";
			
			echo " <h2> Soyad </h2>";
			echo $_POST["soyadi"];
			echo " <br><br><br>";
			
			echo " <h2> E-mail </h2>";
			echo $_POST["email"];
			echo " <br><br><br>";
			
			echo " <h2> Cinsiyet </h2>";
			echo $_POST["cinsiyet"];
			echo " <br><br><br>";
			
			echo " <h2> Doğum Tarihi </h2>";
			echo $_POST["bday"];
			echo " <br><br><br>";
			
			echo " <h2> Mesaj </h2>";
			echo $_POST["mesaj"];
			echo " <br><br><br>";
			
					
		
		?>
		
		
		
		</div>
		</div>
		
		
		
		
		</form>
		
				
	</div>







	
</body>


<!-- Footer kısmı -->

	<footer class="page-footer font-small blue pt-4">

  
  <div class="container-fluid text-center text-md-left">

    
    <div class="row">

     
      <div class="col-md-6 mt-md-0 mt-3">

        
        <h5 class="text-uppercase">WebTech Project</h5>
        <p>Non scholae, sed vitae discimus <br> 'Okul için değil,yaşam için öğrenmeli'</p>

      </div>
      

      <hr class="clearfix w-100 d-md-none pb-3">

      
      <div class="col-md-6 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Links</h5>

        <ul class="list-unstyled">
          <li>
            <a href="https://www.instagram.com/umutysff/?hl=tr" target="_blank">Instagram</a>
          </li>
          <li>
            <a href="https://twitter.com/SaUmutBen" target="_blank">Twitter</a>
          </li>
          <li>
            <a href="https://www.facebook.com/umutyusuf.ozcan.54 "target="_blank">Facebook</a>
          </li>
		  
        </ul>

      </div>
     

    </div>
    

  </div>
  

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2020 Copyright:
     Umut Yusuf Özcan
  </div>
 

</footer>



    

</html>

