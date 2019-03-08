/* script by kodingmadesimple.com */
/*
$('document').ready(function() {
	$('#studentid').on('focus', function () {
		$('#studentid').removeClass('error');
	});

	$('#studentid').on('blur', function () {
		if ($('#studentid').val() == '') {
			$('#studentid').addClass('error');
		}
	});

	$('#password').on('focus', function () {
		$('#password').removeClass('error');
	});

	$('#password').on('blur', function () {
		if ($('#password').val() == '') {
			$('#password').addClass('error');
		}
	});

	$('form#login-form').on('login', function (e) {
			e.preventDefault();
			$('#err-msg').html('');
			var err = false;
			if ($('#studentid').val() == '') {
				$('#studentid').addClass('error');
				err = true;
			}
			if ($('#password').val() == '') {
				$('#password').addClass('error');
				err = true;
			}
			if (err == true) {
				return false;
			}

			$.ajax({
			type: 'POST',
			url: 'login.php',
			data: $('form#login-form').serialize() + '&' + $('#login').attr('name') + '=' + $('#login').val(),
			success: function(status){
				if (status == true) {
					console.log("working");
					('#login').val('Signing in...');
					setTimeout('window.location.href = "register.php";' , 3000);
				} else  { 
				console.log("not working");
					$('#err-msg').html('<div class="alert alert-danger text-center">Invalid student ID or password!</div>');
					$('#studentid').val('');
					$('#password').val('');
				} 
			} 
		}); 
	});
});


