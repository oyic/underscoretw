<?php

namespace Oyic\Fields\Reusables;

use StoutLogic\AcfBuilder\FieldsBuilder;

class Backgrounds {
    public static function getFields() {
        $backgrounds = new FieldsBuilder('backgrounds');
        
        $backgrounds
         
            ->addImage('backround_image',['wrapper' => ['width' => '50'],'return_format' => 'id'])
            ->addColorPicker('backround_color',['wrapper' => ['width' => '50']]);

        return $backgrounds;
    }
}