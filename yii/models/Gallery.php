<?php

namespace app\models;

use yii\base\Model;

class Gallery extends Model
{
    /**
     * @inheritdoc
     */
   

    /**
     * @inheritdoc
     */
    public static function getImages()
    {	
		$content=file_get_contents('https://api.vk.com/method/photos.get?owner_id=222121190&album_id=178947892&photo_sizes=1');
		$content=json_decode($content);
		
        return [           
            'content' => $content,            
            'title' => 'Фотогалерея работ по маникюру и педикюру',
			'header' => 'Галерея работ',
            'description' => 'Галерея фотографий с примерами маникюра, педикюра, покрытия шеллаком (гель-лаком), френчем (французским маникюром) и наращивания ногтей',
            'keywords' => 'Маникюр, педикюр, фотографии, фотогалерея, примеры, работ',           
        ];
    }
}
