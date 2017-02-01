function detect_mobile() {
	if(window.innerWidth >= 768) {
		for(var i=0;i<document.getElementsByClassName('pipes').length;i++){document.getElementsByClassName('pipes')[i].style.display='inherit';}	
	} else{
		for(var i=0;i<document.getElementsByClassName('pipes').length;i++){document.getElementsByClassName('pipes')[i].style.display='none';}
	}
}

function detect_4k() {
	if(window.innerWidth >= 1584) {
		document.getElementById('spacing1').innerHTML='<br>';
	} else{
		document.getElementById('spacing1').innerHTML='';
	}
}


function doOnOrientationChange()
  {
    switch(window.orientation) 
    {  
      case -90:
      case 90:
        detect_mobile();
        detect_4k();
        break; 
      default:
        detect_mobile();
        detect_4k();
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

function detect_both(){
	detect_mobile();
	detect_4k();
}

addEvent(window, "resize", detect_both);
