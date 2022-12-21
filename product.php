<!DOCTYPE html>
<html>
<head>
<title>Products</title>
<meta charset="utf-8" />
<meta name="viewpoint" content="width=device-width,initial-scal=1.0">
<meta http-equip="X-UA-compatible" content="ie=edge">
<link rel="stylesheet" href="style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.store.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<section id="nav-bar">
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#E2E1DF ;">
	  
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
	  </button>
	  <div class="pull-right" >
	  <a style="color:#000000; font-size: 40px; font-family: Palatino Linotype;" href="index.html">ИП Романова</a>
	</div> 
	  <div class="collapse navbar-collapse" id="navbarNav">
	  
		<ul class="navbar-nav ml-auto">
		 <li class="nav-item">
			<a style="color:#000000; font-size: 24px;" class="nav-link" href="index.html">Главная</a>
		  </li>
		 <li class="nav-item">
			<a style="color:#000000;font-size: 24px;" class="nav-link" href="product.html">Каталог</a>
		  </li>
		  
		  
		  
		  <li class="nav-item">
			<a style="color:#000000;font-size: 24px;" class="nav-link" href="aboutus.html">О нас</a>
		  </li>

		  </li>
		  <li class="nav-item">
			<a style="color:#000000;font-size: 24px;" class="nav-link" href="contact.html">Обратная связь</a>
		  </li>
		  <li class="nav-item">
			<a style="color:#000000;font-size: 24px;" class="nav-link" href="cart.html">Корзина</a>
		
		  </li>
		  
		  
		</ul>
	  </div>
	</nav>

</section>


<section class="new-arrivals">
<div id="site">
	<div class="container">
		<div class="title-box">
		<h2>Каталог одеял</h2>
		</div>
		<div class="row">

		<?php
		$dbUser = 'products';
		$dbName = 'products';
		$dbPass = '0000';
		$mysqli = new mysqli('localhost', 'root','' ,'products');
		$query = "set names utf8";
		$mysqli->query($query);
		$query = "select * from products";
		$results = $mysqli->query($query);
		while($row = $results->fetch_assoc()){
			echo '
			<div class="col-md-3">
			<div class="product-top">
				<img src="'.$row["imgFile"].'">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>'.$row["name"].'</h3>
			<div class="product-description" data-name='.$row["name"].' data-price='.$row["price"].'>
				
				<p class="product-price">&#8369;10,400 </p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>
			';
		}

		?>

			

<!--			
			<div class="col-md-3">

			<div class="product-top">
				<img src="images/odeyalo2.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>Smoky<br> Blue</h3>
			<div class="product-description" data-name="Smoky Blue" data-price="10400">
				
				<p class="product-price">&#8369;10,400</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/odeyalo3.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>Melange Green Tea</h3>
			<div class="product-description" data-name="Melange Green Tea" data-price="10400">
				
				<p class="product-price">&#8369;10,400</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="number" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/odeyalo4.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>Melange Steel Gray</h3>
			<div class="product-description" data-name="Melange Steel Gray" data-price="10400">
				
				<p class="product-price">&#8369;10,400</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>



	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/odeyalo5.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>Melange<br> Calm</h3>
			<div class="product-description" data-name="Melange Calm" data-price="11400">
				
				<p class="product-price">&#8369;11,400</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/odeyalo6.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>Melange Powder</h3>
			<div class="product-description" data-name="Melange Powder" data-price="12400">
				
				<p class="product-price">&#8369;12,400</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/odeyalo7.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>Pale <br>Moon</h3>
			<div class="product-description" data-name="Pale Moon" data-price="14000">
				
				<p class="product-price">&#8369;14,000</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/odeyalo8.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>Pale <br>Banana</h3>
			<div class="product-description" data-name="Pale Banana" data-price="14000">
				
				<p class="product-price">&#8369;14,000</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>	
		</div>






	</div>
</div>
</section>


<section class="on-sale">
<div id="site">
	<div class="container">
		<div class="title-box">
		<h2>Каталог подушек</h2>
		</div>
		<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/podushka1.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
		
			<h3>Подушка из шёлка</h3>
			<div class="product-description" data-name="Podushka Malbery" data-price="4950">
				
				<p class="product-price">&#8369;4,950</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/podushka2.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>Подушка из шёлка </h3>
			
			<div class="product-description" data-name="Podushka Malbery Пепел" data-price="4950">
				
				<p class="product-price">&#8369;4,950</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/podushka3.jpg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>DREAMLINE LUX</h3>
			<div class="product-description" data-name="DREAMLINE DREAM LUX" data-price="3275">
				
				<p class="product-price">&#8369;3,275</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/podushka4.jpg">
				
			</div>
			<br>
			<br>
			
			
			<div class="product-bottom text-center">
			
			<h3>DREAMLINE DREAM</h3>
			<div class="product-description" data-name="Гусиный пух" data-price="2950">
				
				<p class="product-price">&#8369;2,950</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>			

		</div>



	<div class="row">
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/podushka5.jpg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>Гусиный<br> пух</h3>
			<div class="product-description" data-name="Гусиный пух " data-price="3000">
				
				<p class="product-price">&#8369;3,000</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>

			
			<div class="col-md-3">
			<div class="product-top">
				<img src="images/podushka6.jpeg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>DREAMLINE YELLOW</h3>
			<div class="product-description" data-name="DREAMLINE FREEDOM SAFETY YELLOW" data-price="2339">
				
				<p class="product-price">&#8369;2,339</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/podushka7.jpg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>LONAX<br> EASY</h3>
			<div class="product-description" data-name="LONAX EASY" data-price="2130">
				
				<p class="product-price">&#8369;2130</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>



			<div class="col-md-3">
			<div class="product-top">
				<img src="images/podushka8.jpg">
				
			</div>
			
			
			<div class="product-bottom text-center">
			
			<h3>SONTELLE FIBRE MIK</h3>
			
			<div class="product-description" data-name="SONTELLE FIBRE MIK" data-price="2600">
				
				<p class="product-price">&#8369;2,600
				</p>
				<form class="add-to-cart" action="cart.html" method="post">
							<div>
								<label for="qty-2">Количество</label>
								<input type="text" name="qty-2" id="qty-2" class="qty" value="1" />
							</div>
							<p><input type="submit" value="В корзину" class="btn" /></p>
						</form>
						
			</div>
			</div>
			</div>	


		</div>


-->



	</div>
</div>

</section>
