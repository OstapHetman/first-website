$(document).ready(function() {

	$("#contact-us").submit(function() {
		$.ajax({
			type: "POST",
			url: "mail.php",
			data: $(this).serialize()
		}).done(function() {
			$(this).find("input").val("");
			alert("Thanks for filling out our form!We will look over your message and get back to you by tomorrow.");
			$("#form").trigger("reset");
		});
		return false;
	});
	
});