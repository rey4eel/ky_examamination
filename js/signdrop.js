var x = document.cookie.replace(/(?:(?:^|.*;\s*)status\s*\=\s*([^;]*).*$)|^.*$/, "$1");

$(document).ready(function () {
	if (x ==='show')
	{
		alert('Password or email not correct')
	}
	$('#exampleModal').modal(x);

});
