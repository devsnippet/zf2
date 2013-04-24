<?php

namespace Checkuser;

use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\Console\Adapter\AdapterInterface as Console;

class Module implements AutoloaderProviderInterface {

 public function getAutoloaderConfig() {
  return array(
    'Zend\Loader\ClassMapAutoloader' => array(__DIR__ . '/autoload_classmap.php',),
    'Zend\Loader\StandardAutoloader' => array('namespaces' => array(__NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,),),
  );
 }

 public function getConfig() {
  return include __DIR__ . '/config/module.config.php';
 }

 public function getViewHelperConfig() {
  return array(
    'invokables' => array(
    //    'NewsTime'        => 'News\View\Helper\TTime',
    ),
  );
 }

 public function getServiceConfig() {
  return array(
    'invokables' => array(
    )
  );
 }

 public function getConsoleBanner(Console $console) {
  return 'CheckUser Module';
 }

 public function getConsoleUsage(Console $console) {
  //description command
  return array(
    'checkuser --vesion' => 'Get current version',
    'checkuser -d' => 'debug session',
  );
 }

}
