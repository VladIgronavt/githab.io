<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>SolarSand - Правила</title>
	<meta data-react-helmet="true" name="viewport" content="GoodWolves, верстка сайтов, заказать сайт, купить сайт,
	сайт не дорого, бессплатный хост, goodwolves сайт">

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

<?php
 require "php/db.php";
?>
</head>
<body>
<header>
	<div class="menu">
		<div class="row">
			<div class="col-lg-8">
	<?php require($_SERVER[DOCUMENT_ROOT].'/php/menu.php');?>
</div>
<div class="col-lg-4">
	<?php if( isset($_SESSION['logged_user'])) : ?>
		<a class="button_down" href="php/logout.php">Выйти<i class="fas fa-sign-out-alt"></i></a>
				<a class="button_down" href="lk.php"><i class="fas fa-user"></i>ЛК</a>
<?php else : ?>
				<a class="button_down" href="register.php"><i class="fas fa-user"></i>Войти</a>
				<?php endif; ?>
				</div>
</div>
		
</div>
	</header>
	<section class="header" id="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2">
			</div>
			<div class="col-lg-8">

<div class="content">
	<h1>Правила</h1>
			<p>В разработке</p>

		</div>

			</div>
			<div class="col-lg-2">
			</div>
		</div>
		
	</div>
	</section>
	<section class="langpu" id="langpu">
	
	</section>

	<footer>
		<div class="container-fluid">
		<?php require($_SERVER[DOCUMENT_ROOT].'/php/footer.php');?>
	</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>