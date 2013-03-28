<?php
return array(
'navigation' => array(
    'default'=>array(
	     array(
         'label' => 'Клиенты',
         'route' => 'clients',
         'action'=> 'index',
         'pages' => array(
                     array(
                         'label' => 'Добавить клиента',
                         'route' => 'clients',
                         'action'=> 'add'
                     ),
                     array(
                         'label' => 'Найти клиента',
                         'route' => 'clients',
                         'action'=> 'search'
                     ),
       ),

/*	array(
         'label' => 'Виды отдыха',
         'route' => 'rest',
        ),
	array(
         'label' => 'Страны',
         'route' => 'country',
        ),
	array(
         'label' => 'Подобрать тур',
         'route' => 'tour',
         'action'=> 'get',
        ),
	array(
         'label' => 'Сформировать тур',
         'route' => 'tour',
         'action'=> 'build',
        ),
	array(
         'label' => 'АВИАБИЛЕТЫ',
         'route' => 'aviaticket',
        ),
	array(
         'label' => 'Страхование',
         'route' => 'company',
         'action'=> 'insurance'
        ),
	array(
         'label' => 'Новости',
         'route' => 'news',
        ),
	array(
         'label' => 'Личный кабинет',
         'route' => 'client',
        ),
	array(
         'label' => 'О компании',
         'route' => 'company',
         'action'=> 'about',
        ),
	array(
         'label' => 'Контакты',
         'route' => 'company',
         'action'=> 'contacts'
        )
*/
    ),
      	array(
         'label' => 'Дебиторы',
         'route' => 'debitors',
         'action'=> 'search'
  ),

)));
