/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
  }
  
  /* When the user clicks on the button,toggle between hiding and showing the dropdown content */
  function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
  }
  
  function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
      txtValue = a[i].textContent || a[i].innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        a[i].style.display = "";
      } else {
        a[i].style.display = "none";
      }
    }
  }
  
  
  //-----------------------------slides-----------------------------------------------------------------------//
  document.addEventListener('DOMContentLoaded', function(){
  
  var slideImages = document.querySelectorAll('.slide'),
      dirRight = document.getElementById('dir-control-right'),
      dirLeft = document.getElementById('dir-control-left'),
      current = 0;
  //if javascript is on apply styling
  function jsActive(){
      for(var i = 0; i < slideImages.length; i++){
          slideImages[i].classList.add('slider-active');
      }  
  }
  // Clear images
  function reset(){
      for(var i = 0; i < slideImages.length; i++){
          slideImages[i].classList.remove('slide-is-active');
      }
  }
  //init slider
  function startSlide(){
      reset();
      slideImages[0].classList.add('slide-is-active');
      setTimeout(function() {
          for(var i = 0; i < slideImages.length; i++){
              slideImages[i].classList.add('slide-transition');
          }
      }, 20);
          
  
  }
  
  //slide lft
  function slideLeft(){
      reset();
      slideImages[current - 1].classList.add('slide-is-active');
      current--;
  }
  //slide right
  function slideRight(){
      reset();
      slideImages[current + 1].classList.add('slide-is-active');
      current++;
  }
  
  dirLeft.addEventListener('click', function(){
      if(current === 0){
          current = slideImages.length;
      }
      slideLeft();
  })
  
  dirRight.addEventListener('click', function(){
      if(current === slideImages.length-1){
          current = -1;
      }
      slideRight();
  })
  //apply styling
  jsActive();
  startSlide();
  
  
  });
  //-----------------------------slides------------=-------------------------------------------------------------------------------//
  
  
  
  
  
  