function detect_mobile() {
	if(window.innerWidth >= 768) {
		for(var i=0;i<document.getElementsByClassName('pipes').length;i++){document.getElementsByClassName('pipes')[i].style.display='inherit';}	
	} else{
		for(var i=0;i<document.getElementsByClassName('pipes').length;i++){document.getElementsByClassName('pipes')[i].style.display='none';}
	}
}

function doOnOrientationChange()
  {
    switch(window.orientation) 
    {  
      case -90:
      case 90:
        detect_mobile();
        break; 
      default:
        detect_mobile();
        break; 
    }
  }

  window.addEventListener('orientationchange', doOnOrientationChange);

var addEvent = function(object, type, callback) {
    if (object == null || typeof(object) == 'undefined') return;
    if (object.addEventListener) {
        object.addEventListener(type, callback, false);
    } else if (object.attachEvent) {
        object.attachEvent("on" + type, callback);
    } else {
        object["on"+type] = callback;
    }
};

addEvent(window, "resize", detect_mobile);