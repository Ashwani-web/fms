$(document).ready(function () {
	$(".navbar-expand-lg .navbar-nav .drop-btn").hover(navshow);
	$(".navbar-expand-lg .navbar-nav .drop-btn").mouseleave(navhide);
	$(".navbar-expand-lg .navbar-nav .sub-drop-btn").hover(navshow2);
	$(".navbar-expand-lg .navbar-nav .sub-drop-btn").mouseleave(navhide2);
	$(".navbar-expand-lg .navbar-nav .drop-btn-mob").click(mob_navshow);
	$(".navbar-expand-lg .navbar-nav .back-btn").click(mob_navhide);
	$(".navbar-expand-lg .navbar-nav .sub-drop-btn-mob").click(mobsub_navshow);
	$(".navbar-expand-lg .navbar-nav .back-btn-sub-sub").click(mobsub_navhide);
	$(".navbar-toggler").click(all_remove);
	
})



function navshow() {
	if ($(window).width() > 769) {
		$(this).children(".dropdown-nav").removeClass("d-none")
		$(this).children(".dropdown-nav").addClass("d-block")
	}
}

function navshow2() {
	if ($(window).width() > 769) {
		$(this).children(".sub-dropdown-nav").removeClass("d-none")
		$(this).children(".sub-dropdown-nav").addClass("d-block")
	}
}

function navhide() {
	if ($(window).width() > 769) {
		$(this).children(".dropdown-nav").removeClass("d-block")
		$(this).children(".dropdown-nav").addClass("d-none")
	}
}

function navhide2() {
	if ($(window).width() > 769) {
		$(this).children(".sub-dropdown-nav").removeClass("d-block")
		$(this).children(".sub-dropdown-nav").addClass("d-none")
	}
}

function mob_navshow(){
	if($(window).width() < 769){
		$(this).siblings(".dropdown-nav").addClass("show");
	}
}

function mobsub_navshow(){
	if($(window).width()< 769){
		$(this).siblings(".sub-dropdown-nav").addClass("show");
		$(this).siblings(".sub-dropdown-nav").removeClass("d-none");		
	}
}

function mob_navhide(){
	if($(window).width() < 769){
		$(".dropdown-nav").removeClass("show");
	}
}

function mobsub_navhide(){
	if($(window).width()< 769){
		$(this).parent().parent().removeClass("show");
		$(this).parent().parent().addClass("d-none");		
	}
}

function all_remove(){
	if($(window).width() < 769){
		$(".dropdown-nav").removeClass("show");
		$(".sub-dropdown-nav").addClass("d-none");
		$(".sub-dropdown-nav").removeClass("show");
	}
}