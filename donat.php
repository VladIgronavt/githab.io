<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>SolarSand - Донат</title>
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
	<section class="header-donat" id="header">
	<div class="container-fluid" >
		<div class="row">
			<div class="col-lg-4">

<div class="content">
	<h1>Техник</h1>
						<h2>Возможности:</h2> 
<p>Регион 3х300к</p>
<p>Сохранение вещей и опыта после смерти </p>
<p>Возможность вернуться на место смерти</p>
<p>Возможность говорить от третьего лица</p>
<p>Возможность очистить инвентарь командой</p>
<p>Возможность принять или отклонить предложение телепортации игрока к вам или вас к игроку</p>
<p>Возможность создавать цветные таблички</p>
<p>Ежедневный набор ресурсов (HiTech | Magic | Pixelmon | TechnoMagic | RPG)</p>
<p>VIP набор (HiTech | Magic | Pixelmon | TechnoMagic | RPG)</p>
<p>Использование расширенных флагов для VIP игроков</p> 
<p>+ привилегии доступные простым игрокам</p>
<hr>
					<h2>Флаги:</h2> 
<p>- ice-form (Формирование льда)</p>
<p>- ice-melt (Таяние льда)</p>
<p>- snow-fall (Выпадение снега)</p>
<p>- leaf-decay (Опадение листвы)</p>
<p>- ghast-fireball (Урон от гастов)</p>
<p>- creeper-explosion (Урон от крипперов)</p>
<p>+ флаги доступные простым игрокам</p>

					<h3>Цена: 140 руб/месяц</h3>
					<h3>380 руб/3 месяца</h3>
		
<a class="button" href="https://vk.com/im?sel=-180050120">Купить</a>

		</div>

			</div>
			<div class="col-lg-4">

<div class="content">
	<h1>Мастер</h1>
					<h2>Возможности:</h2> 	
<p>Регион 6х300к</p>
<p>Установка персонального времени на сервере)</p>
<p>Возможность исцелить себя командой</p>
<p>Возможность полетов на сервере</p>
<p>Возможность утолить голод командой</p>
<p>Возможность потушить себя командой</p>
<p>Возможность надеть блок на голову</p>
<p>Возможность быстрого перемещения компасом</p>
<p>Premium набор (HiTech | Magic | Pixelmon | TechnoMagic | RPG)</p>
<p>Возможность создания 5 приватных точек варпов</p>
<p>Возможность создания 1 публичной точки варпа</p>
<p>Использование расширенных флагов для Premium игроков</p>
<p>+ привилегии доступные VIP и простым игрокам</p>
<hr>

					<h2>Флаги:</h2> 
<p>- mob-spawning (Управление спавном мобов)</p>
<p>- deny-spawn (Управление спавном отдельных мобов)</p>
<p>- mob-damage (Урон от мобов в регионе)</p>
<p>- entry (Разрешено ли входить на регион)</p>
<p>- greeting (Сообщение при входе в регион)</p>
<p>- farewell (Сообщение при выходе из региона)</p>
<p>- notify-enter (Показывать сообщение при входе в регион)</p>
<p>- notify-leave (Показывать сообщение при выходе из региона)</p>
<p>- item-drop (Разрешить игрокам выбрасывать вещи)</p>
<p>+ флаги доступные VIP и простым игрокам</p>

					<h3>Цена: 240 руб/месяц</h3>
					<h3>650 руб/3 месяца</h3>
				<a class="button" href="https://vk.com/im?sel=-180050120">Купить</a>

		</div>

			</div>
			<div class="col-lg-4">

<div class="content">
	<h1>Главный инженер</h1>

                   <h2>Возможности:</h2>
<p>Регион 6х600к</p>
<p>Вас больше не кикает за AFK более 7 минут</p>
<p>Установка персональной погоды на сервере</p>
<p>Возможность использования режима бога</p>
<p>Возможность использования ночного видения</p>
<p>Возможность открытия виртуального верстака и эндерсундука </p>
<p>Возможность чинить инструменты и броню командой</p>
<p>Возможность телепортации по координатам</p>
<p>Deluxe набор (HiTech | Magic | Pixelmon | TechnoMagic | RPG)</p>
<p>Возможность создания 10 приватных точек варпов</p>
<p>Возможность создания 3 публичных точек варпов</p>
<p>Использование расширенных флагов для Deluxe игроков</p>
<p>+ привилегии доступные VIP, Premium и простым игрокам</p>
<hr>
					<h2>Флаги:</h2> 
<p>- invincible (Бессмертие в своем регионе)</p>
<p>- feed-max-hunger (До скольки увеличится голод)</p>
<p>- feed-min-hunger (Со скольки увеличивается голод)</p>
<p>+ флаги доступные VIP, Premium и простым игрокам</p>


					<h3>Цена: 480 руб/месяц</h3>
					<h3>1000 руб/3 месяца</h3>
	
<a class="button" href="https://vk.com/im?sel=-180050120">Купить</a>

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

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>