$(document).ready(function(){
	
	/*
	|	Click Listener for "Post My Comment" Button on Suggestion Box Page
	*/
	$(document).on('click', '#submitCommentBtn', function(e){
		
		e.preventDefault();
		$('#processSpinner').css('visibility', 'visible');

		$('form#suggestionForm').validate({
			rules		: {
				name 	: "required",
				comment : "required"
			},
			messages	: {
				name	: "Please enter your name",
				comment : "Please Leave a comment"
			}
		});

		if(!($('form#suggestionForm').valid())){
			$('#processSpinner').css('visibility', 'hidden');
			return;
		}

		var formData = $('form#suggestionForm').serialize();
		
		$.ajax({
			'url' 		: '/submitComment',
			'method'	: 'POST',
			'data'		: formData,
			'dataType'	: 'json',
			'success'	: function(data){
				if(data.success == "true"){
					$('div#noIdeas').remove();
					var newComment = $('<div></div>').attr('id', 'comment');
					$('<p></p>').text(data.comment).attr('class', 'speech speechComment').appendTo(newComment);
					$(newComment).appendTo('div#suggestion-right');
					$('input#name').val('');
					$('textarea#comment').val('');
					$('#processSpinner').css('visibility', 'hidden');
				} else{

					// Do something when there's server response is 'success' => 'false'

				}
			},
		});
	});

	/*
	|	Click Listener for "Send" Button on Contact Me Page
	*/
	$(document).on('click', '#contactSubmitBtn', function(e){
		
		e.preventDefault();
		$('#processSpinner').css('visibility', 'visible');

		var timeoutFunc = setTimeout(function(){
			$('p#noticeMessage').remove();
			var noticeMessage = $('<p></p>').attr('id', 'noticeMessage');
			$(noticeMessage).text('There is a problem sending email. Please try again later').appendTo('div#noticeArea');
			$('#processSpinner').css('visibility', 'hidden');	
		}, 10000);

		$('form#contactForm').validate({
			rules		: {
				subject	: "required",
				name	: "required",
				email	: "required",
				message	: "required"
			},
			messages	: {
				subject	: "Please enter email subject",
				name	: "Please enter your name",
				email	: "Please enter your contact email",
				message	: "Please leave a message"
			}
		});

		if(!($('form#contactForm').valid())){
			$('#processSpinner').css('visibility', 'hidden');
			return;
		}

		var formData = $('form#contactForm').serialize();

		$.ajax({
			'url' 		: '/submitContact',
			'method'	: 'POST',
			'data'		: formData,
			'dataType'	: 'json',
			'success'	: function(data){
				if(data.success == "true"){
					$('p#noticeMessage').remove();
					var noticeMessage = $('<p></p>').attr('id', 'noticeMessage');
					$(noticeMessage).text(data.message).appendTo('div#noticeArea');
					$('#processSpinner').css('visibility', 'hidden');
				} else{
					$('p#noticeMessage').remove();
					var noticeMessage = $('<p></p>').attr('id', 'noticeMessage');
					$(noticeMessage).text(data.message).appendTo('div#noticeArea');
					$('#processSpinner').css('visibility', 'hidden');
				}
			},
		});
	});
});