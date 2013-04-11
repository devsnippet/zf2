<?php
/**
 * Description of newController
 *
 * @author AShvager
 * @data 11.04.2013
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
