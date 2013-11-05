<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Main</title>
<meta charset="utf-8">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slyder.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/registrate.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/usersForm.css" type="text/css" media="all">

<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.css" type="text/css" media="all">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-responsive.min.css" type="text/css" media="all">

<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.5.2.js" ></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/cufon-replace.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/slyder.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/registrateForm.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/myscripts.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/menuMain.js" ></script>

<script type="text/javascript">
   $(document).ready(function(){

  $(".navDirectory").mouseenter( function () {
    $(this).find(".sub-nav").slideDown(500, "easeOutElastic");
  });
  
  $(".navDirectory").mouseleave( function () {
      $(this).find(".sub-nav").slideUp(500);
  });
});    
</script>


</head>

    <body id="page3">
        <div class="body1">
            <div class="main">
                <header>
                    <div class="wrapper">
                        <nav>
                            <ul id="menu">
                                <li class="navDirectory"><a href="#">Головна</a>
                                    <ul id="navigation-option" class="sub-nav">
                                        <li class="nav-dir"><a href="#">One</a></li>
                                        <li class="nav-dir"><a href="#">Two</a></li>
                                        <li class="nav-dir"><a href="#">Three</a></li>
                                        <li class="nav-dir"><a href="#">Four</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Програми</a></li>
                                <li><a href="#">Адміністрація</a></li>
                                <li class="end"><a href="#">Контакти</a></li>
                            </ul>
                        </nav>
                        <ul id="icons">
                            <li><a href="#"><img src="images/icons1.jpg" alt=""></a></li>
                            <li><a href="#"><img src="images/icons2.jpg" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="wrapper">
                        <h1><a href="index.html" id="logo">Learn Center</a></h1>
                    </div>
                    <div id="slogan">
                        Ми Відкриваємо Нові <span>можливості у навчанні </span>
                    </div>
                </header>
            </div>
        </div>
    
        <div class="body2">
                <div class="main">
                <section id="content">
                    
                <!--Input page index  -->
                <?php echo $content; ?>
            
                </section>
                <footer>
                    <div class="wrapper">
                        <div class="pad1">
                            <div class="pad_left1">
                                <div class="wrapper">
                                    <article class="col_1">
                                        <h3>Наша Адреса:</h3>
                                        <p class="col_address"><strong>Країна:<br>
                                                Місто:<br>
                                                Адреса:<br>
                                                Email:</strong></p>
                                        <p>Україна<br>
                                                Київ<br>
                                                #<br>
                                                <a href="mailto:">#</a></p>
                                    </article>
                                    <article class="col_2 pad_left2">
                                        <h3>Приєднатися:</h3>
                                        <ul class="list2">
                                            <li><a href="#">Зареєструватися</a></li>
                                            <li><a href="#">Форум</a></li>
                                            <li><a href="#">Отзиви</a></li>
                                        </ul>
                                    </article>
                                    <article class="col_3 pad_left2">
                                        <h3></h3>
                                        <ul class="list2">

                                        </ul>
                                    </article>
                                    <article class="col_4 pad_left2">
                                        <!--<h3>Пошук:</h3>
                                        <form id="newsletter" method="post">
                                            <div class="wrapper">
                                                <div class="bg"><input type="text"></div>
                                            </div>
                                            <a href="#" class="button" onclick="document.getElementById('newsletter').submit();"><span><span><strong>ок</strong></span></span></a>
                                        </form>-->
                                    </article>
                                </div>
                                <div class="wrapper">
                                    <article class="call">
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
            </footer>
		</div>
	</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
			
			