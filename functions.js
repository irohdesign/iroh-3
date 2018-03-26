var form = document.getElementById('exp-form');
		  form.onsubmit = function(event) {
			event.preventDefault();
			console.log(form.stringTheory.value); 
			
			var stringTheory = form.stringTheory.value;
			
						
			var result = document.getElementById("result");
			
			if(stringTheory === "beginner") {
				document.getElementById("beginner").style.display = "block";
			} else if(stringTheory === "experienced") {
				document.getElementById("experienced").style.display = "block";
			} else if(stringTheory === "rock") {
				document.getElementById("rock").style.display = "block";
			} else if(stringTheory === "jazz") {
				document.getElementById("jazz").style.display = "block";
			} else if(stringTheory === "blues") {
				document.getElementById("blues").style.display = "block";
			} else if(stringTheory === "metal") {
				document.getElementById("metal").style.display = "block";
			} else {
				window.alert("You need to enter one of these options: Beginner, Experienced, Rock, Jazz, Blues or Metal");
			}
			
			document.getElementById('exp-form').reset();
			
			};