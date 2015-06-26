<?php
/* @var $this yii\web\View */
$this->title = $model->title;
$this->registerMetaTag([
    'name' => 'description',
    'content' => $model->description
	]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $model->keywords
	]);
?>

<div class="row">
	<div class="col-xs-12 col-md-12">
	 <h1><span style="color:#FEA100"><?= $model->header ?> </span></h1>
		<div class="row" style="padding-left:7%; padding-right:7%; padding-top:1%; padding-bottom:1%; font-size: medium; color: #eed081;">	
		<?= $model->content ?> 
		</div>	
	</div>
</div>