<!--HEADER-->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/all.css" >



	<script type="text/javascript">
	function wp_attempt_focus(){
	setTimeout( function(){ try{
	d = document.getElementById('user_login');
	d.focus();
	d.select();
	} catch(e){}
	}, 200);
	}

	wp_attempt_focus();
	if(typeof wpOnload=='function')wpOnload();
	</script>

	<script type="text/javascript">
	try{document.getElementById('user_login').focus();}catch(e){}
	if(typeof wpOnload=='function')wpOnload();
	</script>

</head>
<body>
<div class="wrapper">


<header>
	
	<div class="container">
		<div class="row">                    
			<div class="d-none d-md-block col-md-5 col-lg-4 col-xl-3" align="right">
				<div  class="vline-r">
		            <a class="ULH" title="facebook" href="https://www.facebook.com/volteducation">
			    		<i class="fab fa-facebook1-f"></i>
			    	</a>
			    	<a class="ULH" title="vkontakte" href="https://vk.com/volt_edu">
			    		<i class="fab fa-vk1"></i>
			    	</a>
			    	<a class="ULH" title="instagram" href="https://www.instagram.com/volt_edu/">
			    		<i class="fab fa-instagram1"></i>
			    	</a>
			    	<a class="ULH" title="pinterest" href="https://www.pinterest.com/volt_education">
			    		<i class="fab fa-pinterest1-p"></i>
			    	</a>
			    	<a class="ULH" title="youtube" href="https://www.youtube.com/channel/UCJGbV62xyeeND3HAnrip_wQ">
			    		<i class="fab fa-youtube1"></i>
					</a>
					<a class="ULH" title="twitter" href="https://twitter.com/Volt_Edu_Center">
						<i class="fab fa-twitter1"></i>
					</a>					
				</div>
			</div>

			<div class="col-8 col-md-5 col-lg-6 col-xl-7" align="middle">
				<div class="row">
					<div class="d-none d-xl-block col-xl-7" align="middle"> <h4 class="text-muted">ОБРАЗОВАТЕЛЬНЫЙ ЦЕНТР</h2> </div>			
					<div class="cool-12 col-xl-5" align="middle"> <h4 class="text-muted">VOLT EDUCATION</h2>        </div>
				</div>
			</div>
			<div class="col-4 col-md-2 col-lg-2 col-xl-2" align="middle">
				<div  class="vline-l">

					<?php
					if (is_user_logged_in()) {
					    ?>
					    <a href="http://localhost/wordpress/index/user_page/"> <button type="button" class="btn btn-warning">КАБИНЕТ </button> </a>
					    <?php
					} else {
					    ?>
					    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#enter">ВОЙТИ </button>
					    <?php
					}
					?>

					<!-- Modal -->
					<div class="modal fade" id="enter" tabindex="-1" role="dialog" aria-labelledby="enterLabel" aria-hidden="false">
					  <div class="modal-dialog modal-dialog-centered" role="document" >
					    <div class="modal-content">
					      <div class="modal-header">
					      	<img class="modal-title" src="<?php bloginfo('template_directory') ?>/img/logo_reg.png" alt="logo">
					      </div>

					      <div class="modal-body">	
							<ul class="nav nav-pills mb-3"  id="pills-tab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="pills-enter-tab" data-toggle="pill" href="#pills-enter" role="tab" aria-controls="pills-enter" aria-selected="true">ВХОД </a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="pills-regist-tab" data-toggle="pill" href="#pills-regist" role="tab" aria-controls="pills-regist" aria-selected="false"> РЕГИСТРАЦИЯ </a>
							  </li>
							</ul>
							<div class="tab-content" id="pills-tabContent">
							  <div class="tab-pane  show active" id="pills-enter" role="tabpanel" aria-labelledby="pills-enter-tab">
								<div id="login">

							  	<form name="loginform" id="loginform" action="http://localhost/wordpress/wp-login.php" method="post">
								  <div class="form-row align-items-left">
								    <div class="col-6">
								      <label class="sr-only" for="user_login">ЭЛ-ПОЧТА</label>
								      <input type="text" class="form-control mb-2" name="log" id="user_login"  placeholder="E-mail/Никнейм">
								    </div>
								    <div class="col-6">
								      <label class="sr-only" for="user_pass">ПАРОЛЬ</label>
								      <div class="input-group mb-2">
								        <div class="input-group-prepend">
								          <div class="input-group-text">
											C
								          </div>
								        </div>
								        <input type="password" class="form-control" name="pwd" id="user_pass"  placeholder="Пароль">
								      </div> 
								    </div>
								    <div class="col-6 col-md-8" align="left">
										<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Запомнить меня</label></p>
									</div>
								    <div class="col-6 col-md-4" align="right">
								    	<p class="submit">
											<button type="submit" name="wp-submit" id="wp-submit" class="btn btn-warning mb-2">ВОЙТИ</button>
								      		<input type="hidden" name="redirect_to" value="http://localhost/wordpress/" />
											<input type="hidden" name="testcookie" value="1">
								    	</p>
								    </div>
					      			<div class="col-4 col-md-6" align="left"> <h6 align="left" class="text-muted">Войти через:</h6>	</div>	
									<div class="col-8 col-md-6" align="middle">
										<i class="fab fa-google"></i>
										<i class="fab fa-facebook1-f"></i> 
										<i class="fab fa-vk1"></i>	
									</div>
								  </div>
								</form>
								</div>
							  </div>
							  <div class="tab-pane " id="pills-regist" role="tabpanel" aria-labelledby="pills-regist-tab">
								<div id="login">
							  	<form name="registerform" id="registerform" action="http://localhost/wordpress/wp-login.php?action=register" method="post" novalidate="novalidate">
								  <div class="form-row align-items-left">
									<div class="col-6">
								      <label class="sr-only" for="user_login">НИКНЕЙМ</label>
								      <input name="user_login" type="text" class="form-control mb-2" id="user_login"  placeholder="Никнейм">
								    </div>
								    <div class="col-6">
								      <label class="sr-only" for="user_email">ЭЛ-ПОЧТА</label>
								      <input type="email" name="user_email" class="form-control mb-2" id="user_email"  placeholder="Адрес E-mail">
								    </div>

								    <div class="col-6 col-md-8" align="left">
								        <label class="form-check-label" for="autoSizingCheck">
								          Данные регистрации будут отправлены на Ваш e-mail
								        </label>
								    </div>
								    <div class="col-6 col-md-4" align="right">
										<input type="hidden" name="redirect_to"  />
								      	<button type="submit" name="wp-submit" id="wp-submit" class="btn btn-warning mb-2">ОТПРАВИТЬ</button>
								    </div>
								  </div>
								</form>
								</div>
							</div>
							</div>
					      </div>
					      <div class="modal-footer">
					      	<div class="container">
					      		<div class="row">
					      			<div class="col-12 col-sm-6" align="middle">
					      				<h6></h6>
										<a href="http://localhost/wordpress/wp-login.php?action=lostpassword"> <button type="button" class="btn btn-warning">ЗАБЫЛИ ПАРОЛЬ?</button> </a>
									</div>
									<div class="col-12 col-sm-6" align="middle">
										<h6></h6>		
						        		<button type="button" class="btn btn-warning" data-dismiss="modal">ОТМЕНА</button>
									</div>
					      		</div>
							</div>
					      </div>
					    </div>
					  </div>
					</div>






				</div>
			</div>
		</div>
	</div>		


	<div class="container">
		<hr class="lineStyle" align="middle"></hr>

		<nav class="navbar navbar-expand-lg navbar-light">
		  <a class="navbar-brand" href="http://localhost/wordpress/about_us/about_company/"><img src="<?php bloginfo('template_directory') ?>/img/logo.png" align="top"> </a>
	 		 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	   		 <span class="navbar-toggler-icon"></span>
	 		 </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto" align="bottom">
			    <li class="nav-item active">
			      <a class="nav-link" href="http://localhost/wordpress/index/">ГЛАВНАЯ <span class="sr-only">(current)</span></a>
			    </li>

			    <li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle" href="http://localhost/wordpress/education/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          ОБРАЗОВАТЕЛЬНЫЙ ЦЕНТР
		        	</a>
		       		 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		         	 <a class="dropdown-item"  href="http://localhost/wordpress/education/courses/">НАПРАВЛЕНИЯ </a>
		         	 <a class="dropdown-item" href="http://localhost/wordpress/education/branches/">ФИЛИАЛЫ</a>
		         	 <a class="dropdown-item" href="http://localhost/wordpress/education/promotions/">АКЦИИ</a>
		         	 <a class="dropdown-item" href="http://localhost/wordpress/education/schedule/">РАСПИСАНИЕ</a>
		         	 <a class="dropdown-item" href="http://localhost/wordpress/education/matherials/">УЧЕБНЫЕ МАТЕРИАЛЫ</a>
		          		<div class="dropdown-divider"></div>
		         	 <a class="dropdown-item" href="http://localhost/wordpress/vacant_positions">ВАКАНСИИ</a>
		        	</div>
		      	</li>

			    <li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle" href="http://localhost/wordpress/shop/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          МАГАЗИН
		        	</a>
		       		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		         		<a class="dropdown-item" href="http://localhost/wordpress/shop/kits/">НАБОРЫ          </a>
		         		<a class="dropdown-item" href="http://localhost/wordpress/shop/elements/">ЭЛЕМЕНТЫ        </a>
		         		<a class="dropdown-item" href="http://localhost/wordpress/shop/books/">УЧЕБНЫЕ ПОСОБИЯ </a>
		          		<div class="dropdown-divider"></div>
		         		<a class="dropdown-item" href="http://localhost/wordpress/shop/kits_support/">ЛИЧНЫЙ КАБИНЕТ  </a>
		        	</div>
		      	</li>

		      	<li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle" href="http://localhost/wordpress/about_us/" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          О НАС
		        	</a>
		       		 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		         	 <a class="dropdown-item" href="http://localhost/wordpress/about_us/about_company/">КОМПАНИЯ </a>
		         	 <a class="dropdown-item" href="http://localhost/wordpress/about_us/gallery">ГАЛЕРЕЯ</a>
		         	 <a class="dropdown-item" href="http://localhost/wordpress/about_us/team">КОМАНДА</a>
		         	 <a class="dropdown-item" href="http://localhost/wordpress/about_us/partners">ПАРТНЕРЫ</a>
		          		<div class="dropdown-divider"></div>
		         	 <a class="dropdown-item" href="http://localhost/wordpress/about_us/become_partner">ПРЕДЛОЖИТЬ СОТРУДНИЧЕСТВО</a>
		        	</div>
		      	</li>

			    <li class="nav-item">
			      <a class="nav-link" href="http://localhost/wordpress/blog/">БЛОГ</a>
			    </li>
			    <li class="nav-item">
			      <a class="nav-link" href="http://localhost/wordpress/contacts/">КОНТАКТЫ</a>
			    </li>
	  		</div>
		</nav>
		<hr class="lineStyle" align="middle"/>
	</div>

</header>