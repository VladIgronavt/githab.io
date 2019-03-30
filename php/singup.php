<?php
require "db.php";

$data = $_POST;
if(isset($data['click_login'])){
  $_SESSION['true_false']=none;
}

if(isset($data['do_singup'])){
	//рег

$errors = array();
if(trim($data['login']) == '')
{
$errors[] = 'Введите логин!';
}
if(trim($data['email']) == '')
{
$errors[] = 'Введите Email!';
}
if($data['password'] == '')
{
$errors[] = 'Введите пароль!';
}
if($data['password_2'] != $data['password'])
{
$errors[] = 'Повторный пароль введен не верно!';
}
if(R::count('users', "login = ?", array($data['login'])) > 0)
{
$errors[] = 'Пользователь с таким логином существует!';
}
if(R::count('users', "email = ?", array($data['email'])) > 0)
{
$errors[] = 'Пользователь с таким Email существует!';
}


if(empty($errors))
{
  $user = R::dispense('users');
  $user->login = $data['login'];
  $user->email = $data['email'];
  $user->password = md5($data['password']);
  $user->name = $data['name'];
  $user->surname = $data['surname'];
  $user->ip = $_SERVER['REMOTE_ADDR'];
  
  R::store($user);
 
}

}

?>
	<script type="text/javascript">
window.location = "/register.php"
</script>