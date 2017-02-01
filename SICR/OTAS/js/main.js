function detect_mobile() {
	if(window.innerWidth >= 768) {
		for(var i=0;i<document.getElementsByClassName('pipes').length;i++){document.getElementsByClassName('pipes')[i].style.display='inherit';}	
	}
}

function doOnOrientationChange()
  {
    switch(window.orientation) 
    {  
      case -90:
      case 90:
        detect_mobile()
        break; 
      default:
        detect_mobile()
        break; 
    }
  }

  window.addEventListener('orientationchange', doOnOrientationChange);

  // Initial execution if needed
  doOnOrientationChange();