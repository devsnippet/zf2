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
 public function getParamAction(){
  $request = $this->getRequest();
  $ver =$request->getParam('version');
  //print_r($request);
  return  sprintf('version %4.2f',$ver);
 }
}

?>
