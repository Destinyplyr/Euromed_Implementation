function showFrame() 
{ 

	var x = document.getElementById("myFrame");
	// document.body.style.opacity = 0.52;
	// x.style.display = 'block';
	// Get the modal
	var modal = document.getElementById('myModal');
	var modalImg = document.getElementById("myFrame");
	var captionText = document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src = "../html_scripts/info.html";
    modalImg.width = "500px";
    modalImg.height = "500px";

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	    modal.style.display = "none";
	}

}


function showLogin()
{
	// Get the modal
	var modal = document.getElementById('myModal');
	var modalImg = document.getElementById("myFrame");
	var captionText = document.getElementById("caption");

    modal.style.display = "block";
    modalImg.src = "../php_scripts/loginTest.php";
    modalImg.width = "500px";
    modalImg.height = "500px";

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() { 
	    modal.style.display = "none";
	}
}



function showLogout()
{
	var r = confirm("Do you really want to log out?");
    if (r) {
       window.location.href = 'logout.php'
    }

}