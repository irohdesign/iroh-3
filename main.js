$(document).ready(function(){
    $("#outlineTrig").click(function(){
        $(".drop-content").slideToggle("slow");
    });
});

var form = document.getElementById('exp-form');

		  form.onsubmit = function(event) {
			event.preventDefault();
			
			var yearsData = form.years.value;
			
			var genreData = document.getElementById("genre").value; 
			
			if(0 <= yearsData <= 2) {
				document.getElementById("beginner").style.display = "block";
				document.getElementById("experienced").style.display = "none";
				document.getElementById("rock").style.display = "none";
				document.getElementById("jazz").style.display = "none";
				document.getElementById("blues").style.display = "none";
				document.getElementById("metal").style.display = "none";
			}
			
			if (yearsData >= 3) {
				document.getElementById("beginner").style.display = "none";
				document.getElementById("experienced").style.display = "block";
				document.getElementById("rock").style.display = "none";
				document.getElementById("jazz").style.display = "none";
				document.getElementById("blues").style.display = "none";
				document.getElementById("metal").style.display = "none";
			}
			
			if (genreData === "rock") {
					document.getElementById("beginner").style.display = "none";
					document.getElementById("experienced").style.display = "none";
					document.getElementById("rock").style.display = "block";
					document.getElementById("jazz").style.display = "none";
					document.getElementById("blues").style.display = "none";
					document.getElementById("metal").style.display = "none";
			} else if(genreData === "jazz") {
					document.getElementById("beginner").style.display = "none";
					document.getElementById("experienced").style.display = "none";
					document.getElementById("rock").style.display = "none";
					document.getElementById("jazz").style.display = "block";
					document.getElementById("blues").style.display = "none";
					document.getElementById("metal").style.display = "none";
			} else if(genreData === "blues") {
					document.getElementById("beginner").style.display = "none";
					document.getElementById("experienced").style.display = "none";
					document.getElementById("rock").style.display = "none";
					document.getElementById("jazz").style.display = "none";
					document.getElementById("blues").style.display = "block";
					document.getElementById("metal").style.display = "none";
			} else if(genreData === "metal") {
					document.getElementById("beginner").style.display = "none";
					document.getElementById("experienced").style.display = "none";
					document.getElementById("rock").style.display = "none";
					document.getElementById("jazz").style.display = "none";
					document.getElementById("blues").style.display = "none";
					document.getElementById("metal").style.display = "block";
			}

			
			document.getElementById('exp-form').reset();
			
			};
			
