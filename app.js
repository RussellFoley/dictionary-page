$(function() {
    // Get the form.
    var form = $('#ajax-contact');

    // Get the messages div.
    var formMessages = $('#form-messages');

    $(form).submit(function(event) {
	// Stop browser from submitting the form
	event.preventDefault();

    //Serialise form data
	var formData = $(form).serialize();

	// Submit the form using AJAX
	$.ajax({
		type: 'POST',
		url: $(form).attr('action'),
		data: formData
	}).done(function(response) {
		//set the message text
		formMessages.html(response);

		// CLear the form

		$('#first-name').val('');
		$('#last-name').val('');
		$('#email').val('');
		$('#message').val('');
		$('#human').val('');
	}).fail(function(data) {
		//formMessages div 'error' class SKIPPING THIS

		// Set the message text
		if (data.responseText !== '') {
			$(formMessages).html(data.responseText);
		}else{
			//HARD CODED ENGLISH MESSAGE HERE
			$(formMessages).text('Oops! An error occured and your message could not be sent');
		}
	})
});
});