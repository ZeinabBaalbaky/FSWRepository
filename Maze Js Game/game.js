
	var isStarted = false;
    var isInRoad = false;

window.onload = function () {

    var lost = false;
    document.getElementById("score").innerHTML = "0";
    var boundaries = document.getElementsByClassName("boundary");
	document.getElementById("status").innerHTML = "";
    /*start */
    document.getElementById("start").addEventListener("mouseover", function () {
        document.getElementById("status").textContent = "";
        isStarted = true;
        isInRoad = true;
        for (var i = 0; i < boundaries.length; i++) { 
		boundaries[i].style.backgroundColor = "#EEEEEE"; 
		}

    })


   document.getElementById("game").addEventListener("mouseleave", function () {
        isInRoad = false;

    });

    for (var i = 0; i < boundaries.length; i++)
        boundaries[i].addEventListener("mouseover", function (event) {
            if (isStarted) {
				 for (var i = 0; i < boundaries.length; i++){
					 boundaries[i].style.backgroundColor = "#FF0000";
					 document.getElementById("score").style.backgroundColor ="#EEEEEE";
					 }
                document.getElementById("status").textContent = "You lost";
						var score = Number(document.getElementById("score").innerHTML);
		       document.getElementById("score").textContent = parseInt(document.getElementById("score").textContent) - 10;
                isStarted = false;
				lost = true;
			
            }
        });
		
		if(lost == true){

				alert(lost);
			
		}



    /*end */
    document.getElementById("end").addEventListener("mouseover", function () {
        if (isStarted) {
            if (isInRoad) { document.getElementById("status").textContent = "You won";
			               
					        var score = Number(document.getElementById("score").innerHTML);
				            score = Number(score) + Number(5 ) ;
				            document.getElementById("score").textContent = score;
			                
			}
            else {
                document.getElementById("status").textContent = "Don't Try to reach the end by cheating!";
												var score = Number(document.getElementById("score").innerHTML);
				document.getElementById("score").textContent = parseInt(document.getElementById("score").textContent) - 10;
                isStarted = false;
            }
        }
        isStarted = false;
    });
}