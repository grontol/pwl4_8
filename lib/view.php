<?php 

class View {
	private static $view_dir = 'views/';
	public $data;
	
	public static function getView($view_name, $var) {
		$data = $var;
		return $view_name;
	}
}