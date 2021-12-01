var slideshows = document.querySelectorAll('[data-component="slideshow"]');
  
  
  slideshows.forEach(initSlideShow);

  function initSlideShow(slideshow) {

    var slides = document.querySelectorAll(`#${slideshow.id} [role="list"] .slide`);

    var index = 0, time = 2000;
    slides[index].classList.add('active');  
    
    setInterval( () => {
      slides[index].classList.remove('active');
      
      index++;
      
      if (index === slides.length) index = 0; 
      
      slides[index].classList.add('active');

    }, time);
  }
  
  
  function confirm(x) {
	if(x==1)
	{
		alert ("Vote for performer 01?");
	}
	else if(x==2)
	{
		alert ("Vote for performer 02?");
	}
	else if((x==3)||(x==4)||(x==5))
	{
		alert ("Your can't vote for this round yet.Wait until the round starts");
	}
	
  }
  
 var slideIndex = 0;
      showSlides();
      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for(i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if(slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000);
      }

function selection(x){
	if (x==1){
		document.getElementById("final").innerHTML=document.getElementById("down1").innerHTML;
	}
	else if (x==2){
		document.getElementById("final").innerHTML=document.getElementById("down2").innerHTML;
	}	
	else if (x==3){
		document.getElementById("final").innerHTML=document.getElementById("down3").innerHTML;
	}
	else if (x==4){
		document.getElementById("final").innerHTML=document.getElementById("down4").innerHTML;
	}
	else if (x==5){
		document.getElementById("final").innerHTML=document.getElementById("down5").innerHTML;
	}
}
