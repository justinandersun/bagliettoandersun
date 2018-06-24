$(document).ready(function(){
	$(".user-account-details").hide();
    $(".user-account").hover(function(){
        $(".user-account-details").toggle(300);
    });
});