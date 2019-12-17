/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction_st() {
	document.getElementById("myDropdownst",).classList.toggle("show1");
}

function myFunction_mt() {
	document.getElementById("myDropdownmt",).classList.toggle("show2");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event)
{
	if (!event.target.matches('.dropbtn')) {
		var dropdowns = document.getElementsByClassName("dropdown-content");
		var i;
		for (i = 0; i < dropdowns.length; i++) {
			var openDropdown = dropdowns[i];
			if (openDropdown.classList.contains('show1' || 'show2')) {
				openDropdown.classList.remove('show1'|| 'show2');
			}
		}
	}
};