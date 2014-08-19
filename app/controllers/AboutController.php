<?php

class AboutController extends BaseController{

	public function get_about(){
		return View::make('about');
	}


}