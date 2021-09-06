 //check if pass and confirm pass are equal
 
    function checkPasswordMatch() {
        var password = $("#password").val();
        var confirmPassword = $("#confirmPassword").val();
        if (password != confirmPassword){
			$("#error").css("color","red");
            $("#error").html("Passwords does not match!");
			$("#confirmPassword").val('');
		}
        else{
			$("#error").css("color","green");
		    $("#error").html("Passwords match.");}
    }

		
    $(document).ready(function () {
       $("#confirmPassword").blur(checkPasswordMatch);
    });

//only numbers for phone Number
$(document).ready(function(){
	$("#phone").keyup(function(e){
  if (/\D/g.test(this.value))
  {
    // Filter non-digits from input value.
    this.value = this.value.replace(/\D/g, '');
  }

});
});
	



