/* JS document */

$(document).ready(function() {
	$("body").on("click","div.close",function(event) {
		event.stopPropagation();
		$("div#" + $(this).attr("targetclose")).css("display","none");
		if(false == checkForActiveModals()) {
			$("div#modalContent,div#modalOverlay").css("display","none");
		}
	})
})

function checkForActiveModals() {
	$("div#modalContent div").each(function() {
		if($(this).css("dislay") != "none") {
			console.log("active windows, keep open!");
			return true;
		}
	})
	console.log("no active windows, okay to close");
	return false;
}

function showLoginModal() {
	event.preventDefault();
	$("div#modalOverlay,div#modalContent,div#loginForm").css("display","block");
}