<?php


class PageController extends Zend_Controller_Action{
	
	public function pageAction()
	{
		$this->view->toto = 'page';
		
	}
	
	
}