<?php

class viewModel{
	public function __constract(){
	}
	
	public function getView($pagename='', $rows=array()){
		include $pagename;
	
	}
	
}
?>