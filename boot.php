<?php

<<<<<<< HEAD
use phpml\lib\parser\Symbols,
    phpml\components\Label,
    phpml\components\Input,
    phpml\components\Div,
    phpml\lib\PHPML,
    phpml\lib\parser\Compiler,
    phpml\lib\parser\Parser,
    phpml\lib\parser\File,
    phpml\lib\parser\Scanner;
=======
set_include_path(__DIR__ . DIRECTORY_SEPARATOR . 'lib' . PATH_SEPARATOR . get_include_path());
>>>>>>> upstream/master

spl_autoload_register(function($className) {
    $fileParts = explode('\\', ltrim($className, '\\'));

    if (false !== strpos(end($fileParts), '_'))
        array_splice($fileParts, -1, 1, explode('_', current($fileParts)));

    require implode(DIRECTORY_SEPARATOR, $fileParts) . '.php';
});

try {

    $tree = PHPML\PHPML::getInstance()->loadTemplate('tests/_files/first_page.pml');
    
<<<<<<< HEAD
    $label = new Label();
    $label->value = 'My Input:';
    $label->for = 'my-input';

    $input = new Input();
    $input->id = "my-input";

    $tree->getElementById('form-wrapper')
        ->addChild($label)
        ->addChild($input);
    
=======
    $label = new PHPML\Components\Label();
    $label->value = 'Thiago';
    $tree->getElementById('ha')->addChild($label);
>>>>>>> upstream/master
    $tree->getElementById('img')->src = 'https://www.google.com/logos/classicplus.png';
    
    echo $tree;
        
} catch (Exception $e) {
    echo $e->getMessage() . ' - ' . $e->getFile() . ':' . $e->getLine();
}
