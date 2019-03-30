<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>GoodWolves - Отзывы</title>
	<meta data-react-helmet="true" name="viewport" content="GoodWolves, верстка сайтов, заказать сайт, купить сайт,
	сайт не дорого, бессплатный хост, goodwolves сайт">
<link rel="stylesheet" href="chat/main.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">

<?php
 require "php/db.php";
 $data = $_POST;

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
<h1 style="text-align: center; color: white;">Отзывы</h1>
<?php  
$reviews = R::getAssoc('SELECT * FROM reviews');
foreach (array_reverse($reviews) as $row){
echo '<div class="block">' . '<h2>' . $row['login'] .'</h2>'.'<br>' . '<p>' . $row['topic'] . '</p>' . '<br>' . '<span>' . $row['text'] . '</span>' . '<br>' . '<span>' . $row['date'] . '</span>' . '<br>'. '</div>';

}
?>
	</section>
	<footer>
		<div class="container-fluid">
		<?php require($_SERVER[DOCUMENT_ROOT].'/php/footer.php');?>
	</div>
	</footer>
</body>
</html>