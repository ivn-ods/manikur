<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
      <div class="container">
  <div class="bgrnd-1">
	<div class="row">	
	  <div class="col-xs-12 col-md-6  filled">
		<img style="padding-top: 15px;" src="<?= Yii::$app->homeUrl;?>img/logo_1.png" alt="" width="320" height="110" />
	  </div>
	  
	 
	  <div class="col-xs-6 col-md-3  bgrnd-2 "> 
		<span style="font-size: 15px; ">АДРЕС:
			г. Одесса, пр. Шевченко, угол пр.Гагарина
			email: elena@manikur.od.ua</span>	
	  </div>
	  <div class="col-xs-2 col-md-1   bgrnd-2 " style="padding-left:0px;"> 
			<span class="phone">
			Life </br>
			MTS  </br>
			Kyivstar
			</span>	  
	  </div>
	  <div class="col-xs-4 col-md-2   bgrnd-2 " style="padding-left:0px;"> 
		<span class="phone">
			<a href="tel:0930693676">(093) 069-36-76</a>
			<a href="tel:0661366768">(066) 136-67-68</a>
			<a href="tel:0685226858">(068) 522-68-58</a></span>	  
	  </div>
	</div>	
	</div>
	
<div class="row" style="padding-left:12px; padding-right:15px; padding-top:5px; padding-bottom:8px;">	
	<div class="col-xs-6 col-sm-4 col-md-2 usug_menu " >
	<ul><li><a class="usug_1" href="<?= Yii::$app->homeUrl; ?>manikyur">Маникюр</a></li></ul>
	</div>
	<div class="col-xs-6 col-sm-4 col-md-2 usug_menu ">
	<ul><li><a class="usug_2" href="<?= Yii::$app->homeUrl; ?>pedikyur">Педикюр</a></li></ul>
	</div>
	<div class="col-xs-6 col-sm-4 col-md-2 usug_menu ">
	<ul><li><a class="usug_3" href="<?= Yii::$app->homeUrl; ?>pokryitie-gel-lakom">Гель лак</a></li></ul>
	</div>
	<div class="col-xs-6 col-sm-4 col-md-2 usug_menu ">
	<ul><li><a class="usug_4" href="<?= Yii::$app->homeUrl; ?>rospis-nogtey">Роспись</a></li></ul>
	</div>
	<div class="col-xs-6 col-sm-4 col-md-2 usug_menu ">
	<ul><li><a class="usug_5" href="<?= Yii::$app->homeUrl; ?>sterilnost">Стерильность</a></ul>
	
	</div>
	<div class="col-xs-6 col-sm-4 col-md-2 usug_menu ">
	<ul><li><a class="usug_6" href="<?= Yii::$app->homeUrl; ?>obuchenie">Обучение</a></li></ul>
	</div>

	
</div>

<div class="row">
	<div class="col-xs-12 col-md-12 ">
	
	 <img class="img-responsive" src="<?= Yii::$app->homeUrl;?>img/central-logo.jpg" alt="central logo"> 
	
	</div>
	
</div>

<?= $content ?>


<div class="row">

	<div class="col-xs-12 col-md-12 footer" >
	 <img class="img-responsive ftimg" src="<?= Yii::$app->homeUrl;?>img/footer.jpg" alt="footer"> 
	</div>
	
	<div class="col-xs-2 col-sm-2 col-md-1 footer" style="margin-left:20px;">	 
		<a href="<?= Yii::$app->homeUrl; ?>">Главная</a> 
	</div>
	<div class="col-xs-2 col-sm-2 col-md-1 footer">	
		<a href="<?= Yii::$app->homeUrl; ?>uslugi">Услуги</a> 
	</div>
	<div class="col-xs-2 col-sm-2 col-md-1 footer">	
		<a href="<?= Yii::$app->homeUrl; ?>prajs">Прайс</a>
	</div>		
	<div class="col-xs-2 col-sm-2 col-md-1 footer">	
		<a href="<?= Yii::$app->homeUrl; ?>gallery">Фото</a> 
	</div>
	<div class="col-xs-2 col-sm-2 col-md-1 footer">	
		<a href="<?= Yii::$app->homeUrl; ?>kontakt">Контакты</a>		
	</div>
	<div class="col-xs-2 col-sm-2 col-md-7 footer">	
	</div>
	
</div>

<div class="row">
	<div class="col-xs-12 col-md-12 footer2" style="margin-left:20px;">
	<a href="http://vk.com/id222121190"><img style=": 0px none; padding-top: 0px;" title="vk" src="<?= Yii::$app->homeUrl; ?>img/v.png" alt="" width="22" height="22" /></a>
	<span style="font-size:large"> тел. </span>
	<a href="tel:0930693676">093-069-36-76</a>&nbsp; 
	<a href="tel:0661366768">066-136-67-68</a>&nbsp; 
	<a href="tel:0685226858">068-522-68-58</a>
	
	</div>
	
</div>

      
      
	</div> <!-- /container -->


<?php $this->endBody() ?>

<?php $this->endPage();?>
