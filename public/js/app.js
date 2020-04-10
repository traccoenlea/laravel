$(document).ready(function() {
	$("#search").submit(function(e) {
     e.preventDefault();
     if(e.target.elements[0].value.length > 0 )
     	window.location.href="/search/"+e.target.elements[0].value;
 })
});