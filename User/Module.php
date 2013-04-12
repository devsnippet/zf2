<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace User;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Mvc\ModuleRouteListener;
use Zend\ModuleManager\ModuleManagerInterface;
use Zend\Authentication\AuthenticationService;
//use Zend\Authentication\Adapter\AdapterInterface;
use User\Services\Authentication as AuthServ;
use Zend\Console\Adapter\AdapterInterface as Console;
use Zend\ModuleManager\Feature\ConsoleUsageProviderInterface;
use Zend\ModuleManager\Feature\ConsoleBannerProviderInterface;

class Module implements AutoloaderProviderInterface, ConsoleUsageProviderInterface, ConsoleBannerProviderInterface {

 public function getAutoloaderConfig() {
  return array(
    'Zend\Loader\ClassMapAutoloader' => array(__DIR__ . '/autoload_classmap.php',),
    'Zend\Loader\StandardAutoloader' => array(
      'namespaces' => array(
        __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
      ),
    ),
  );
 }

 /**
  * Init function
  *
  * @return void
  */
//    public function init()    {
 //// Attach Event to EventManager
 //$events = StaticEventManager::getInstance();
 //$events->attach('Zend\Mvc\Controller\ActionController', 'dispatch', array($this, 'mvcPreDispatch'), 100); //@todo - Go directly to User\Event\Authentication
 //$eventManager = $manager->getEventManager();
 //$eventManager->attach(ModuleEvent::EVENT_LOAD_MODULES_POST,array($this, 'mvcPreDispatch'), -1100 );
//    }

 public function init(ModuleManagerInterface $moduleManager) {
  $sharedManager = $moduleManager->getEventManager()->getSharedManager();
  $sharedManager->attach('Zend\Mvc\Application', 'dispatch', array($this, 'mvcPreDispatch'), 100);
 }

 public function mvcPreDispatch($event) {
  $di = $event->getTarget()->getServiceManager();
  $auth = $di->get('User\Event\Authentication');
  return $auth->preDispatch($event);
 }

 public function getConfig() {
  return include __DIR__ . '/config/module.config.php';
 }

 public function onBootstrap($e) {
  // You may not need to do this if you're doing it elsewhere in your
  // application
  //$eventManager        = $e->getApplication()->getEventManager();
  //$moduleRouteListener = new ModuleRouteListener();
  //$moduleRouteListener->attach($eventManager);
  //$app    = $e->getTarget();
  //$events = $app->getEventManager();
  //$events->attach('dispatch', array($this, 'mvcPreDispatch'), -100);
 }

 /**
  * MVC preDispatch Event
  *
  * @param $event
  * @return mixed
  */
 /*    public function mvcPreDispatch($event) {
   $di = $event->getTarget()->getLocator();
   $auth = $di->get('User\Event\Authentication');

   return $auth->preDispatch($event);
   }
  */

 public function getViewHelperConfig() {
  return array(
    'invokables' => array(
    //    'NewsTime'        => 'News\View\Helper\TTime',
    ),
  );
 }

 public function getServiceConfig() {
  return array(
    /*       'initializers' => array(
      function ($instance, $sm) {
      if ($instance instanceof \Zend\Db\Adapter\AdapterAwareInterface) {
      //$instance->setDbAdapter($sm->get('ZDBA'));

      }
      }
      ), */
    'factories' => array(
      // 'BlankDB'      => function($sm) { return $bdb= new Model\BlankDB(); },
      // 'ModelUtils'   => function($sm) { return $mu = new Model\ModelUtils();},
      /*          'MClients'    => function($sm) {
        $mc=new Model\ModelClients();
        $mc->setDbAdapter($sm->get('ZDBA'));
        return $mc;
        } */
      'AuthService' => function($sm) {
       //$dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
       //$dbTableAuthAdapter = new DbTableAuthAdapter($dbAdapter, 'users', 'user_name', 'pass_word', 'MD5(?)');
       //$authService = new AuthenticationService();
       //$authService = new AuthenticationService();
       //$authService->setAdapter($dbTableAuthAdapter);
       //$authService->setAdapter($sm->get('ZDBA'));
       $authService = new AuthServ();
       //$authService->setAdapter(auth);
       //$authService->setStorage($sm->get('SanAuth\Model\MyAuthStorage'));

       return $authService;
      },
    ),
    'invokables' => array(
    //   'Application\Model\ModelNews'=>'ModelNews'
    )
  );
 }

 public function getConsoleBanner(Console $console) {
  return 'User Module';
 }

 public function getConsoleUsage(Console $console) {
  //description command
  return array(
    'user --vesion' => 'Get current version',
    'user -d' => 'debug session',
  );
 }

}
