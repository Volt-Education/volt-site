<?php
/*
Template Name: Мой кабинет
Template Post Type: post, page, product
*/

get_header(); 

global $user_ID;
 

if( !$user_ID ) {
	header('location:' . site_url() . '/wp-login.php');
	exit;
} else {
	$userdata = get_user_by( 'id', $user_ID );
}
?>

<div class="container">
	<div class="row"><div class="col" align="middle"><h2 class="text-muted">Ваш личный кабинет</h2></div></div>
	<hr class="lineStyle">

	<div class="row"><div class="col" align="middle"><h3 class="text-muted">Корзина товаров</h3></div></div>
	<hr class="lineStyle">


	<div class="row"><div class="col" align="middle"><h3 class="text-muted">Избранные статьи</h3></div></div>
	<hr class="lineStyle">


	<div class="row">
		<div class="col-6 col-md-4 col-lg-3 col-xl-2" style="padding: 3px;" align="middle"><button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#user_data_inf" aria-expanded="false" aria-controls="user_data_inf">МОЯ ИНФОРМАЦИЯ</button></div>
		<div class="col-6 col-md-4 col-lg-3 col-xl-2" style="padding: 3px;" align="middle"><button class="btn btn-warning" type="button" data-toggle="collapse" data-target="#user_data_c" aria-expanded="false" aria-controls="user_data_c">РЕДАКТИРОВАТЬ</button></div>
		<div class="col-12 col-md-4 col-lg-3 col-xl-2" style="padding: 3px;" align="middle"><a href="<?php echo wp_logout_url( home_url() ); ?>" title="Выход"><button class="btn btn-warning" type="button">ВЫХОД</button></a></div>
	</div>
	<div class="col-12 col-md-6">
		<div class="collapse" id="user_data_c">
		  <div class="card card-body">
			<form action="<?php echo get_stylesheet_directory_uri() ?>/profile-update.php" method="POST">
				<div class="row"><div class="col-12" align="middle">
					<input type="text" class="form-control" name="first_name" placeholder="Имя" value="<?php echo $userdata->first_name ?>" />
				</div></div><h6></h6>
				<div class="row"><div class="col-12" align="middle">
					<input type="text" class="form-control" name="last_name" placeholder="Фамилия" value="<?php echo $userdata->last_name ?>" />
				</div></div><h6></h6>
				<div class="row"><div class="col-12" align="middle">
					<input type="text" class="form-control" name="city" placeholder="Город" value="<?php echo get_user_meta($user_ID, 'city', true ) ?>" />
				</div></div><h6></h6>
				<div class="row"><div class="col-12" align="middle">
					<input type="email" class="form-control" name="email" placeholder="Email" value="<?php echo $userdata->user_email ?>" />
				</div></div><h6></h6>
			 
				<div class="row"><div class="col-12" align="middle">
					<input type="password" class="form-control" name="pwd1" placeholder="Старый пароль" />
				</div></div><h6></h6>
				<div class="row"><div class="col-12" align="middle">
					<input type="password" class="form-control" name="pwd2" placeholder="Новый пароль" />
				</div></div><h6></h6>
				<div class="row"><div class="col-12" align="middle">
					<input type="password" class="form-control" name="pwd3" placeholder="Повторите новый пароль" />
				</div></div><h6></h6>
				<button class="btn btn-warning">Сохранить</button>
			</form>
		  </div>
		</div>
	</div>
		<div class="col-12 col-md-6">
		<div class="collapse" id="user_data_inf">
		  <div class="card card-body">
			<p><h5>Немного позже здесь будет размещена информация о Вашем профиле</h5></p>
		  </div>
		</div>
	</div>
	<!--РЕЗУЛЬТАТ-->
			<?php
			// после сохранения профиля и смены пароля понадобятся уведомления
			// если уведомлений больше двух, то оптимальнее их будет вывести через switch
			if( isset($_GET['status']) ) :
				switch( $_GET['status'] ) :
					case 'ok':{
						echo '<div class="success"><h5 class="text-muted">Сохранено.</h5></div>';
						break;
					}
					case 'exist':{
						echo '<div class="error"><h5 class="text-muted">Пользователь с указанным email уже существует.</h5></div>';
						break;
					}
					case 'short':{
						echo '<div class="error"><h5 class="text-muted">Пароль слишком короткий.</h5></div>';
						break;
					}
					case 'mismatch':{
						echo '<div class="error"><h5 class="text-muted">Пароли не совпадают.</h5></div>';
						break;
					}
					case 'wrong':{
						echo '<div class="error"><h5 class="text-muted">Старый пароль неверен.</h5></div>';
						break;
					}
					case 'required':{
						echo '<div class="error"><h5 class="text-muted">Пожалуйста, заполните все обязательные поля.</h5></div>';
						break;
					}
				endswitch;
			endif;
			?>
</div>

<?php get_footer(); ?>