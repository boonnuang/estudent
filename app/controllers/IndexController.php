<?php
class IndexController extends \Phalcon\Mvc\Controller
{
    public function indexAction()
    {
    	$user = new Users();
    	$this->view->name = "Good morning";
    	$this->view->items = $user->getItems();
    	$this->view->months = $user->getMonth();
    }

}