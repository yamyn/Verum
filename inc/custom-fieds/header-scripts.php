<?php
use Carbon_Fields\Container;
use Carbon_Fields\Field;
 
Container::make( 'theme_options', 'Мои настройки темы' )
->set_icon('dashicons-admin-tools')
        ->add_fields(array(
                 Field::make('header_scripts', 'crb_header_script'),
                         Field::make('footer_scripts', 'crb_footer_script'),
                         Field::make( 'rich_text', 'crb_footer_copyright', 'Copyright' ),
                     Field::make( 'rich_text', 'crb_footer_description', 'Описание сайта на главной странице' ),
        ));
 
?>