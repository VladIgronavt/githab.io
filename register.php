<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>SolarSand - Aвторизация</title>
	<meta data-react-helmet="true" name="viewport" content="GoodWolves, верстка сайтов, заказать сайт, купить сайт,
	сайт не дорого, бессплатный хост, goodwolves сайт">

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

<?php
 require "php/db.php";
 $data = $_POST;
 unset($_SESSION['logged_user']);

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
				</div>
</div>
		
</div>
	</header>
	<section class="header-login" id="header">
	<div class="container-fluid">
		<div class="row">
		<div class="col-lg-12">
			<div class="title">
<form action="/register.php" method="POST">				
<input type="submit" name="click_login" value=">>> Продолжить <<<" class="button">
</form>

			<?php if(isset($data['click_login'])) : ?>
			
				<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-3 block-login">

<h3 style="color: #212529;">Авторизация</h3>
		<form action="/php/login.php" method="POST">
<p>
		 <input type="text" placeholder="Логин" name="login" value="<?php echo @$data['login'] ?>" class="text-login">
</p>
	<p>
		 <input type="password" placeholder="Пароль" name="password" value="<?php echo @$data['password'] ?>" class="text-login">
	</p>
	<p>
		<input type="submit" name="do_login" value="Войти" class="button-login">
</p>
		</form>
		<div class="error_w"><?php echo '<div style="color:red;">'. array_shift($errors).'</div>'; ?> </div>
</div>
<div class="col-lg-3 block-login">
	<h3>НЕТ УЧЁТНОЙ ЗАПИСИ SolarSand?</h3>
	<p>Учётная запись SolarSand позволит вам получить доступ к закрытым отделам, а также к Личному кабинету</p>
		<form action="/register.php" method="POST">	
		<p>			
<input type="submit" name="click_reg" class="button-login-brt" value="ЗАРЕГИСТРИРОВАТЬСЯ">
</p>
</form>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		<?php else : ?>

<?php endif; ?>

<?php if(isset($data['click_reg'])) : ?>
	<div class="row">
					<div class="col-lg-3"></div>
					<div class="col-lg-3 block-login">
<p>Регистрация</p>
<form action="/php/singup.php" method="POST">
	<p>
		 <input type="text" placeholder="Имя" name="name" value="<?php echo @$data['name'] ?>" class="text-login">
</p>
<p>
		 <input type="text" placeholder="Фамилия" name="surname" value="<?php echo @$data['surname'] ?>" class="text-login">
</p>
<p>
		 <input type="text" placeholder="Логин" name="login" value="<?php echo @$data['login'] ?>" class="text-login">
</p>
	<p>
		 <input type="email" name="email" placeholder="Адрес электронной почты" value="<?php echo @$data['email'] ?>" class="text-login">
	</p>
	<p>
		 <input type="password" name="password" placeholder="Пароль" value="<?php echo @$data['password'] ?>" class="text-login">
	</p>
	<p>
		 <input type="password" name="password_2" placeholder="Повтор пароля" value="<?php echo @$data['password_2'] ?>" class="text-login">
	</p>
	<p>
		<input type="submit" name="do_singup" value="Зарегистрироваться" class="button-login">
	</p>
		</form>
		<div class="error_w"><?php echo '<div style="color:red;">'. array_shift($errors).'</div>'; ?> </div>
	</div>
	<div class="col-lg-3 block-login">
		<h3>У ВАС УЖЕ ЕСТЬ УЧЁТНАЯ ЗАПИСЬ GOOD WOLVES?</h3>
	<p>Учётная запись Good Wolves позволит вам получить доступ к закрытым отделам сайта, а также к сообществу разработчиков.</p>
		<form action="/register.php" method="POST">		
		<p>		
<input type="submit" name="click_login" value="Авторизация" class="button-login-brt">
</p>
</form>
</div>
</div>
<br><br><br>
<?php else : ?>

				<?php endif; ?>


	</div>
</div>
	</div>
	</div>

	</section>
	<footer>
		<div class="container-fluid">
		<?php require($_SERVER[DOCUMENT_ROOT].'/php/footer.php');?>
	</div>
	</footer>
</body>
</html>