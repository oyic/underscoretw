<?php 

namespace Oyic\Fields;
use StoutLogic\AcfBuilder\FieldsBuilder;

use Oyic\Fields\Reusables\Backgrounds;  

class Hero {
    public static function getFields() {
        $hero = new FieldsBuilder('hero');
        
        $hero
            ->addTab('Content')
            ->addWysiwyg('Text', [
                'media_upload' => false,
                'toolbar' => 'basic',
                'wrapper' => ['width' => '50']
            ])
            ->addImage('Image',['wrapper' => ['width' => '50'],'return_format' => 'id'])
            ->addLink('Button Link')
            ->addTab('Background')
            ->addFields(Backgrounds::getFields());
            
        return $hero;
    }
}
