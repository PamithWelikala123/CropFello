 //object.addEventListener("mouseover", function_name);
 document.getElementById('profile').addEventListener("mouseover", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});
// document.getElementById('profile').addEventListener("click", function() {
// 	document.querySelector('.bg-modal').style.display = "flex";
// });
document.addEventListener("click", function()  {
	document.querySelector('.bg-modal').style.display = "none";
});