<?php
class ordersModel extends Model
{
	public $title;
	
	function __construct()
	{
		parent::__Construct();
		$this->title .= "Заказы";
	}

	public function index($data = NULL, $deep = 0)
	{
		$result = db::getInstance()->Select('select * from orders');	
		return $result;	
	}
}
?>