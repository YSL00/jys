@extends('layout')
@section('content')

<div id="suggestionContent" class="row">
	
	<!-- Left Column -->
	<div id="suggestion-left" class="col-sm-6 suggestionColumns">
		<h1>Got An Idea On How This Site Can Improve?</h1>
		<p>Leave a comment below</p>

		{{ Form::open(array('route' => 'post_comment', 'id' => 'suggestionForm')) }}
			<div class="form-group">
				<label for="name">Your Name:</label>
				<input type="text" name="name" class="form-control" placeholder="Please enter your name">
			</div>
			<div class="form-group">
				<label for="name">Your Suggestions:</label>
				<textarea type="text" name="comment" class="form-control" placeholder="Leave a comment" rows="5"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" value="Post My Comment" id="submitCommentBtn" class="btn btn-primary">
				<i id="processSpinner" class="fa fa-circle-o-notch fa-spin fa-2x"></i>
			</div>
		{{ Form::close()}}
	</div>

	<!-- Right Column -->
	<div id="suggestion-right" class="col-sm-6 suggestionColumns center-form">
		<h1>Idea Box</h1>

		@if($comments->isEmpty())
			<div id="noIdeas">
				<p>There are no Suggestions yet</p>
			</div>
		@else
			@foreach($comments as $comment)
				<div>
					<p class="speech speechComment">{{$comment->comment_content}}</p>
				</div>
			@endforeach
		@endif

	</div>
</div>

@stop