<?php
return array(
    'acl' => array(
        'roles' => array(
            'guest'   => null,
            'member'  => 'guest'
        ),
        'resources' => array(
            'allow' => array(
                //'user' => array(
              'User\Controller\User'=>array(
                    'login' => 'guest',
                    'all'   => 'member'
                ),
              'Clients\Controller\Index'=>array(
                'index'=>'guest',
                'search'=>'guest',
                'add'=>'member'
              ),
              'Debitors\Controller\Index'=>array(
                'search'=>'guest'

              )

            )
        )
    )
);