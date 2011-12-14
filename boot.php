<?php

use phpml\lib\parser\Symbols,
    phpml\components\Label,
    phpml\components\Input,
    phpml\components\Div,
    phpml\lib\PHPML,
    phpml\lib\parser\Compiler,
    phpml\lib\parser\Parser,
    phpml\lib\parser\File,
    phpml\lib\parser\Scanner;

spl_autoload_register(function ($name) {
    require '../' . str_replace('\\', DIRECTORY_SEPARATOR, $name) . '.php';
});
    
try {

    $tree = PHPML::getInstance()->loadTemplate('tests/_files/first_page.pml');
    
    $label = new Label();
    $label->value = 'My Input:';
    $label->for = 'my-input';

    $input = new Input();
    $input->id = "my-input";

    $tree->getElementById('form-wrapper')
        ->addChild($label)
        ->addChild($input);
    
    $tree->getElementById('img')->src = 'https://www.google.com/logos/classicplus.png';
    
    echo $tree;
        
} catch (Exception $e) {
    echo $e->getMessage() . ' - ' . $e->getFile() . ':' . $e->getLine();
}
