const animate = () => {
	const spans = document.querySelectorAll(".animate");
	    spans.forEach(function (span, index) {
		    if(span.style.animation) {
			    span.style.animation = "";
		    } else {
		        span.style.animation = `animate 0.5s ease forwards ${index / 7 + 1.0}s`;
		    }
	    });
}

const showRegister = () => {
	const registerInfo = document.querySelectorAll(".register");
	const hideLogin = document.querySelectorAll(".initial");
	const formDiv = document.querySelector("#form");

	registerInfo.forEach(function(register) {
		if(!register.style.display) {
			register.style.display = "block";
		} 
	})

	hideLogin.forEach(function(hide) {
		hide.style.display = "none";
	})

	formDiv.style.height = "450px";

}

const hideRegister = () => {
	const removeRegister = document.querySelectorAll(".register");
	const showLogin = document.querySelectorAll(".initial");
	const formDiv = document.querySelector("#form");

	removeRegister.forEach(function(register) {
		if(register.style.display) {
			register.style.display = "";		
	    }
    })

    showLogin.forEach(function(hide) {
    	hide.style.display = "inline";
    })

    formDiv.style.height = "400px";
    
}


animate();
showRegister();
hideRegister();
