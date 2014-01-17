<?php

//UPDATE, IT'S NOT THERE ANYMORE

class AlbumView{

	//show header
	public function showHeader($pageTitle = '') {
			include 'views/header.inc';
	}
	//show footer
	public function showFooter(){
			include "views/footer.inc";
	}
	//show employees
	public function showUsers($rows){
			include "views/lastUser.inc";
	}
	//show details
	public function showDetails($rows){
			include "views/details.inc";
	}
	
}