// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}

function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}


// Script to show and hide user's content and book's content
function accordion(id1, id2) {

		w3_close();

    var x = document.getElementById(id1);
    if (x.style.display == "none") {
        x.style.display = "block";
    }

		var y = document.getElementById(id2);
		if (y.style.display == "block") {
        y.style.display = "none";
    }
}

// Script to show and hide div seacch
function accordionSearch(id){
	var x = document.getElementById(id);
	if(x.style.display == "none"){
		x.style.display = "block";
	} else {
		x.style.display = "none";
	}
}
