<?php 

namespace Oyic;
use StoutLogic\AcfBuilder\FieldsBuilder;
use Oyic\Fields\Hero;


class Components {
    private $components;
    
    public function __construct() {
        $this->components = new FieldsBuilder('Components');
        $this->registerPageFields();
    }

    private function registerPageFields() {
        $this->components
            ->addFlexibleContent('components')

                ->addLayout('hero', ['label' => 'Hero'])
                    ->addFields(Hero::getFields())
                
            ->setLocation('post_type', '==', 'page');
            
        add_action('acf/init', function() {
            acf_add_local_field_group($this->components->build());
        });
    }
}

// Initialize
new Components();
