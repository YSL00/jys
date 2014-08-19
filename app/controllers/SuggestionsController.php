<?php

class SuggestionsController extends BaseController{
	
	public function get_suggestions(){
		$comments = Comment::all();
		return View::make('suggestions')->with('comments', $comments);
	}

	public function post_comment(){

		if(isset($_POST['name']) && isset($_POST['comment'])){
			$name = htmlspecialchars($_POST['name']);
			$comment = htmlspecialchars($_POST['comment']);

			// Inserting into database, Comments table
			$commentObj = new Comment;
			$commentObj->comment_user = $name;
			$commentObj->comment_content = $comment;
			$commentObj->approved = 1;
			$commentObj->save();

			echo json_encode(array('success' => 'true', 'name' => "$name", 'comment' => "$comment"));
		}else{
			echo json_encode(array('success' => 'false'));
		}
	}
}