<?php

class ContactController extends BaseController{
	
	public function contact(){

		return View::make('contact');
	}

	public function sendEmail(){
		$data = Input::all();

		// Temporarily storing the Contact Message due to a bug in the framework
		$message = htmlspecialchars($data['contactMessage']);
		foreach($data as &$key){
			$key = htmlspecialchars($key);
		}
		// Reassigning contactMessage
		$data['contactMessage'] = $message;

		/*
		|	Laravel Built In Form Validation
		*/
		$rules = array(
		 	'subject' => 'required',
			'name' => 'required',
			'email' => 'required | email',
			'contactMessage' => 'required',
		);
		
		$validator = Validator::make($data, $rules);
		
		if($validator->fails()){
		 	echo json_encode(array(	'success' => 'false',
		 							'message' => 'Please check your input fields'));
		 	return;
		}

		Mail::send('emails.contactEmail', $data, function($message){
			$message->to('jy.622@hotmail.com', 'YSL')->subject('Contact Email from Website');
		});
		
		echo json_encode(array('success' => 'true',
		   					'message' => 'Email has been Sent'));		
	}
}