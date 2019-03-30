<?php  
require "db.php";
$data = $_POST;

if(isset($data['do_reviews'])){


$reviews = R::dispense('reviews');
$reviews->email = $_SESSION['logged_user']->email;
$reviews->login = $_SESSION['logged_user']->login;
  $reviews->topic = $data['topic'];
  $reviews->text = $data['text'];
 $reviews->date = date("d.m.y");

  R::store($reviews);
}
?>

<script type="text/javascript">
window.location = "/"
</script>