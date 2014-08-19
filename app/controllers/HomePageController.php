<?php

class HomePageController extends BaseController{
	
	public function home(){
		return View::make('home');
	}

}