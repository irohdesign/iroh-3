var form = document.getElementById('exp-form');
		  form.onsubmit = function(event) {
			event.preventDefault();
			console.log(form.experience.value); 
			
			var experience = form.experience.value;
						
			var result = document.getElementById("result");
			
			if(experience === "beginner") {
				result.innerHTML = "You should buy light gauge strings";
			} else if(experience === "intermediate") {
				result.innerHTML = "You should buy medium gauge strings";
			} else if(experience === "expert") {
				result.innerHTML = "You should buy heavy gauge strings";
			} else {
				window.alert("you need to pick one of the three options");
			}
			
			};