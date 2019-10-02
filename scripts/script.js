
console.log("Labas");
$(document).ready(function(){
    $('.materialboxed').materialbox();
     $('.parallax').parallax();
     $('.sidenav').sidenav();
  });


$('input[type=radio]').change(function() {

	if (this.value =='batman') {

		alert("You're right!");
	}

	else {
		alert ('Not quite right, take a look at the "News" section ' );
		}

	});



