<?php
require "db.php";

$data = $_POST;
if(isset($data['click_reg'])){
	$_SESSION['true_false']=none;
}
if(isset($data['do_login'])){

 $errors = array();
 $user = R::findOne('users', 'login = ?', array($data['login']));

if($user){
if(md5($data['password'], $user->password)){
	$_SESSION['logged_user'] = $user;
}
else{
	$errors[] = 'Не верно введен пароль';
}
}
else{
	$errors[] = 'Пользователь с таким number не найден';
}
if(! empty($errors))
{

}
}
?>


<?php if( isset($_SESSION['logged_user'])) : ?>
	<script type="text/javascript">
window.location = "/index.php"
</script>
<?php else : ?>
	<script type="text/javascript">
window.location = "/register.php"
</script>
<?php endif; ?>

