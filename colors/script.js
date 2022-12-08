
function openContactForm(){
	/* First i need access to the whole section */
	let form = document.querySelector(".form-wrapper");
	/* Next i need the height of the form-wrapper element */
	let height = form.scrollHeight;
	/* Next i will assign to the max-height css property
	the height of the form-wrapper element */
	form.style.maxHeight = height + "px"; /* Don't forget the "px" */
	/*  
		And last we are going to scroll up the page to place
		our contact section into view.
		But we have to set a timer first to execute the command
		after our css transition is completed. That is after 0.3s.
	*/
	setTimeout(function(){
		form.scrollIntoView();
	}, 400); 
}

function hideForm(){
	let form = document.querySelector(".form-wrapper");
	form.style.maxHeight = "";
	/* Thats all */
} 