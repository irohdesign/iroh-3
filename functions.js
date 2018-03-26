var form = document.getElementById('exp-form');
		  form.onsubmit = function(event) {
			event.preventDefault();

			
			var rawData = form.stringTheory.value;
			var stringTheory = rawData.toLowerCase();
						
			var result = document.getElementById("result");
			
			if(stringTheory === "beginner") {
				document.getElementById("beginner").style.display = "block";
				document.getElementById("experienced").style.display = "none";
				document.getElementById("rock").style.display = "none";
				document.getElementById("jazz").style.display = "none";
				document.getElementById("blues").style.display = "none";
				document.getElementById("metal").style.display = "none";
			} else if(stringTheory === "experienced") {
				document.getElementById("beginner").style.display = "none";
				document.getElementById("experienced").style.display = "block";
				document.getElementById("rock").style.display = "none";
				document.getElementById("jazz").style.display = "none";
				document.getElementById("blues").style.display = "none";
				document.getElementById("metal").style.display = "none";
			} else if(stringTheory === "rock") {
				document.getElementById("beginner").style.display = "none";
				document.getElementById("experienced").style.display = "none";
				document.getElementById("rock").style.display = "block";
				document.getElementById("jazz").style.display = "none";
				document.getElementById("blues").style.display = "none";
				document.getElementById("metal").style.display = "none";
			} else if(stringTheory === "jazz") {
				document.getElementById("beginner").style.display = "none";
				document.getElementById("experienced").style.display = "none";
				document.getElementById("rock").style.display = "none";
				document.getElementById("jazz").style.display = "block";
				document.getElementById("blues").style.display = "none";
				document.getElementById("metal").style.display = "none";
			} else if(stringTheory === "blues") {
				document.getElementById("beginner").style.display = "none";
				document.getElementById("experienced").style.display = "none";
				document.getElementById("rock").style.display = "none";
				document.getElementById("jazz").style.display = "none";
				document.getElementById("blues").style.display = "block";
				document.getElementById("metal").style.display = "none";
			} else if(stringTheory === "metal") {
				document.getElementById("beginner").style.display = "none";
				document.getElementById("experienced").style.display = "none";
				document.getElementById("rock").style.display = "none";
				document.getElementById("jazz").style.display = "none";
				document.getElementById("blues").style.display = "none";
				document.getElementById("metal").style.display = "block";
			} else {
				window.alert("You need to enter one of these options: Beginner, Experienced, Rock, Jazz, Blues or Metal");
			}
			
			document.getElementById('exp-form').reset();
			
			};