@extends('layout')
@section('content')

<div class="row homeRow">
	<div class="col-sm-12">
		<h1 id="homeTitle">Jacky Yuen's Space</h1>
	</div>
</div>

<div class="row homeRow text-center">
	<div class="col-sm-4">
		<a href="{{URL::route('get_about')}}">
			<i class="fa fa-smile-o fa-5x"></i>
			<h4>About Me</h4>
			<p class="homeDesc">
				Some info about me.
			</p>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="{{URL::route('get_suggestions')}}">
			<i class="fa fa-comment-o fa-5x"></i>
			<h4>Suggestion Box</h4>
			<p class="homeDesc">
				Have an idea about my site that you want to share? Leave a comment here!!
			</p>
		</a>
	</div>
	<div class="col-sm-4">
		<a href="{{URL::route('get_contact')}}">
			<i class="fa fa-envelope-o fa-5x"></i>
			<h4>Contact Me</h4>
			<p class="homeDesc">
				Want to send me an email instead? Come right in! 
			</p>
		</a>
	</div>
</div>



@stop
