<?php
class Users extends \Phalcon\Mvc\Model
{
public function getItems(){
	$items = array(
			"name 1",
			"name 2",
			"name 3"
);
return $items;
}

public function getMonth(){
	$months = array("อาทิตย์","จันทร์","อังคาร");
	return $months;
}

}