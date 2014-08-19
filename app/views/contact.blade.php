@extends('layout')
@section('content')

<div class="text-center">
	<h1>Leave a Message?</h1>
	<p>Send me an email below:</p>

	<div id="noticeArea">
	</div>
</div>

{{ Form::open(array('route' => 'post_contact', 'id' => 'contactForm' ,'class' => 'form center-form')) }}
<div class="form-group">
	{{ Form::label('Subject') }}
	{{ Form::text('subject', null, ['id' => 'mailsubject', 'class' => 'form-control', 'placeholder' => 'Subject']) }}
</div>

<div class="form-group">
	{{Form::label('Name')}}
	{{Form::text('name', null, ['id' => 'mailname', 'class' => 'form-control', 'placeholder' => 'Your Name'])}}
</div>

<div class="form-group">
	{{Form::label('Email')}}
	{{Form::text('email', null, ['id' => 'mailemail', 'class' => 'form-control', 'placeholder' => 'Your Email Address'])}}
</div>

<div class="form-group">
	{{ Form::label('Message') }}
	{{ Form::textarea('contactMessage', null, ['id' => 'emailmessage','class' => 'form-control','placeholder' => "Leave a message"]) }}
</div>

{{ Form::submit('Send', ['id' => 'contactSubmitBtn', 'class'=>'btn btn-primary']) }}
<i id="processSpinner" class="fa fa-circle-o-notch fa-spin fa-2x"></i>
{{ Form::close() }}



@stop