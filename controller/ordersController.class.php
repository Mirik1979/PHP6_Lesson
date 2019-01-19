<?php

class ordersController extends Controller
{
    public $view = 'orders';

    public function index() {    	
    	$this->view .= "/" . __FUNCTION__ . '.php';	
		echo $this->controller_view();		
    }
}
?>