<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Clients\Controller\Index' => 'Clients\Controller\IndexController',
        ),
    ),
    'router' => array(
        'routes' => array(
            'clients' => array(
                'type' => 'segment',
                'options' => array(
                    'route' => '/clients[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Clients\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);
