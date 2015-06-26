<?php
use app\assets\GalleryAsset;
GalleryAsset::register($this);

$this->registerJs("
	$(document).ready(function(){
	$().piroBox({
      my_speed: 300, //animation speed
      bg_alpha: 0.5, //background opacity
      slideShow : 'true', // true == slideshow on, false == slideshow off
      slideSpeed : 3, //slideshow
      close_all : '.piro_close' // add class .piro_overlay(with comma)if you want overlay click close piroBox
      });
	});
", 1);

/* @var $this yii\web\View */
$this->title = $model['title'];
$this->registerMetaTag([
    'name' => 'description',
    'content' => $model['description']
	]);
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => $model['keywords']
	]);
?>

<div class="row">
	<div class="col-xs-12 col-md-12">
	 <h1><span style="color:#FEA100"><?= $model['header'] ?> </span></h1>
		<div style="text-align: justify; padding-left: 0px; padding-right: 0px; padding-top: 0px; font-size: medium; color: #eed081;">
		<table align="center" cellpadding="0" cellspacing="0" style="width: 850px">
		<?php
		$content='';
		$cnt=0;
		foreach ($model['content']->response as $item)
			{
			//var_dump($item);
			if ($cnt==0) {$content.='<tr>
			';}
			$content.='<td align="center"><a href="';
			$content.=$item->sizes[2]->src;			
			$content.='" class="pirobox_work1" title="Фото из галереи работ 1"><img style="padding:5px; height:150px; " src="';
			$content.=$item->sizes[2]->src;
			$content.='" /></a></td>
			';
			$cnt++;
			if ($cnt==4) {$cnt=0; $content.='</tr>
			';}
			}
		echo $content;
		?> 
		</table>
		<br>
		</div>
	</div>
</div>