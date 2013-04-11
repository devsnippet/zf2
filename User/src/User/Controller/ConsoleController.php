<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConsoleController
 *
 * @author AShvager
 */
namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
class ConsoleController extends AbstractActionController{
 //put your code here
 public function getVersionAction(){

  return  sprintf('version %4.2f',1.2);
 }
}

?>
