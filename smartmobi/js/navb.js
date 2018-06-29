{
	var nav=document.querySelectorAll('.nav-link span');

for(var i=0; i<nav.length; i++){
	nav[i].addEventListener('click',function () {

	var current =document.querySelector('.active');


	current.classList.remove("active");
		this.classList.add("active");
	});
	}
}