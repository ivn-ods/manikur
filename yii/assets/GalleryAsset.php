<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class GalleryAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/pirobox/demo1/style.css',
    ];
    public $js = [
		'js/jquery.min.js',
		'js/pirobox.js',
		
    ];
    public $depends = [
        
    ];
	public $jsOptions = [ 'position' => \yii\web\View::POS_HEAD ];
}
