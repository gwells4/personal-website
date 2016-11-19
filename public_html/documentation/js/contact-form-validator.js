$(document).ready(

	function(){

		/* begin validation*/
		$("#contact-form").validate({

			// setup handling of form errors
			debug: true,
			errorClass: "alert alert-danger",
			errorLabelContainer: "#output-area",
			errorElement: "div",

			// rules define what is good/bad input
			// each rule starts with the form input element's NAME attribute
			rules: {
				name: {
					required: true
				},
				email: {
					email: true,
					required: true
				},
				subject: {
					required: true
				},
				message: {
					required: true,
					maxlength: 2000
				}
			},

			// error messages to display to the end user
			messages: {
				name: {
					required: "Please enter your name."
				},
				email: {
					email: "Please enter a valid email address.",
					required: "Please enter a valid email address."
				},
				subject: {
					required: "Please enter a subject."
				},
				message: {
					required: "Please enter a message.",
					maxlength: "2000 characters max."
				}
			},

			submitHandler: function(form) {
				$("#contact-form").ajaxSubmit({
					type: "POST",
					url: $("#contact-form").attr("action"),

					success: function(ajaxOutput) {
						// clear the output area's formatting
						$("#output-area").css("display", "");

						// write the server's reply to the output area
						$("#output-area").html(ajaxOutput);

						// reset the form if it was successful
						if($(".alert-success").length >= 1) {
							$("#contact-form")[0].reset();
							$("#captcha").attr("src", "securimage/securimage_show.php?" + Math.random());
						}
					}
				})
			}

		});/* end validate function */

	}

);/*end document.ready()*/


function loadNewCaptcha() {
	document.getElementById("captcha").src = "securimage/securimage_show.php?" + Math.random();
}


// $(document).ready(function(){
//
// 	$("input[type='reset']").click( function(event){
//
// 		alert("before reset: ");
// 		// executes before the form has been reset
//
// 		event.preventDefault();
// 		// stops the form from resetting after this function
//
// 		$("#contact-form")[0].reset();
// 		// resets the form before continuing the function
//
// 		alert("after reset: ");
// 		// executes after the form has been reset
//
// 	});​
//
// });/*end document.ready()*/