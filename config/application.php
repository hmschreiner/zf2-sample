<?php

return array(
    'modules' => array(
        'Install',
    ),
    'module_listener_options' => array(
        'module_paths' => array(
            './application/module'
        ),
        'config_glob_paths' => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
    ),
);
