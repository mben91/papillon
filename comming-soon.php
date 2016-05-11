<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Papillon</title>

	<link rel="stylesheet" type="text/css" href="./bower_components/semantic/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="./stylesheets/css/main.css">

</head>
<body>
    <div class="grayback">
	<header>
	<?php include 'header.php';?>
	
	
	</header>
	
	<section id="slider">
            
        <div class="slide slide-1">
            <img src="images/slide-1.png" >
            <div class="text">
                <span>BETTER EDUCATION FOR A BETTER WORLD
                </span>

                <button>READ MORE</button>
            </div>

        </div>
        <div class="slide slide-2">
            <img src="images/slide-2.png" >
            <div class="text">
                <span>BETTER WORLD FOR A BETTER EDUCATION 
                </span>

                <button>READ MORE</button>
            </div>

        </div>
        <div class="slide slide-3">
            <img src="images/slide-3.png" >
            <div class="text">
                <span>WORLD EDUCATION A BETTER FOR BETTER
                </span>

                <button>READ MORE</button>
            </div>

        </div>
        <div class="slide slide-4">
            <img src="images/slide-4.png" >
            <div class="text">
                <span>BETTER EDUCATION FOR A BETTER WORLD
                </span>

                <button>READ MORE</button>
            </div>
        </div>
        
        <div class="ui container">    
            <div class="navigation">
                <div class="dot dots-1"></div>
                <div class="dot dots-2"></div>
                <div class="dot dots-3"></div>
                <div class="dot dots-4"></div>
            </div>
            
		</div>
		<img src="./images/arrow-down.png" >
	</section>
	</div>

    <div class="content">
	<section class="page-title">
		<div class="ui container">
			<h1><span>About us</span></h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis doloremque error autem non corrupti repudiandae repellendus quaerat quae voluptas.</p>
		</div>
	</section>

	<section>
		<div class="ui container">
			<div class="ui stackable grid">
				<div class="seven wide column">
					<img src="" alt="" >	
				</div>
				<div class="nine wide column">
					<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>

					<p>Psum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
				</div>
			</div>
		</div>
	</section>

	<section id="quote">
		<div class="ui container">
			<p>There are many variations of passages of Lorem Ipsum available, 
but the majority have suffered alteration in some form, by injected humour,
or randomised words which don't look even slightly believable.</p>
			<span>Micheal Somone</span>
		</div>
	</section>
    </div>

	<footer><?php include 'footer.php';?></footer>
	<script src="./bower_components/jquery/dist/jquery.min.js"></script>
	<script src="./bower_components/semantic/dist/semantic.min.js"></script>
	<script src="scripts/main.js"></script>
</body>
</html>