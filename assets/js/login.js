//USER LOGIN
$('#loginbtn').click(function(e){
	e.preventDefault();
var uname = $('#username').val();
var pass  = $('#password').val();

if($.trim(uname) == ''){
	$('#errstatus').html(' <div class="col-md-2 col-sm-2">'+
				                  '<span class="fa fa-exclamation-triangle fa-2x"></span></div>'+
				                  '<div class="col-md-10 col-sm-10">'+
				                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+
				                    '<p>Username is empty!</p>'+
				                  '</div>');
			$('#errstatus').fadeIn('fast');
			$('#username').focus();
} else if ($.trim(pass) == ''){
	$('#errstatus').html(' <div class="col-md-2 col-sm-2">'+
				                  '<span class="fa fa-exclamation-triangle fa-2x"></span></div>'+
				                  '<div class="col-md-10 col-sm-10">'+
				                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+
				                    '<p>Password is empty!</p>'+
				                  '</div>');
			$('#errstatus').fadeIn('fast');
			$('#password').focus();
} else{
$.ajax({
	url:  './login.php',
	type: 'POST',
	data: {'username':uname,'password':pass,'login':1},
	beforeSend: function(xhr){
		$('#loginbtn').val("Logging in . . .");
	}, success: function(data){
		if(data == 'Incorrect Username!'){
			$('#errstatus').html(' <div class="col-md-2 col-sm-2">'+
				                  '<span class="fa fa-exclamation-triangle fa-2x"></span></div>'+
				                  '<div class="col-md-10 col-sm-10">'+
				                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+
				                    '<p>' + data + '</p>'+
				                  '</div>');
			$('#errstatus').show();
			$('#loginbtn').val("LogIn");
			$('#username').focus();
		} else if(data == 'Incorrect Password!'){
			$('#errstatus').html(' <div class="col-md-2 col-sm-2">'+
				                  '<span class="fa fa-exclamation-triangle fa-2x"></span></div>'+
				                  '<div class="col-md-10 col-sm-10">'+
				                    '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>'+
				                    '<p>' + data + '</p>'+
				                  '</div>');
			$('#errstatus').show();
			$('#loginbtn').val("LogIn");
			$('#password').focus();
				} else {
					window.location.href="home.php";
				}
			}
		})
	}
})