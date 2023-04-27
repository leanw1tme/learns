hello.on('auth.login', function(auth) {
	console.log(auth);
	$('#limesurvey').css('{visibility: "hidden"}');
	$('#limesurvey').before('<div class="col-sm-12 text-center"><i class="fa fa-cog fa-spin fa-3x fa-fw"></i></div>');
	// Call user information, for the given network
	hello(auth.network).api('me').then(function(r) {
		console.log(r);
		// Inject it into the container
		$('#register_firstname').val(r.first_name);
		$('#register_lastname').val(r.last_name);
		$('#register_email').val(r.email);
		$('#limesurvey').append('<input type="hidden" name="social_media_login" value="'+auth.network+'" />');
		$('#limesurvey').append('<input type="hidden" name="social_media_login_key" value="'+auth.authResponse.access_token+'" />');
		$('#limesurvey').trigger('submit');
	});
});
