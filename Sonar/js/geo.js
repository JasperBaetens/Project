
var c = 0;
var t;
var timer_is_on = 0;
var doTimer = document.getElementById("doTimer");
var stopCount = document.getElementById("stopCount");
var vid = document.getElementById("myAudio");

navigator.geolocation.watchPosition(
    positionSucces,
    positionError,
    {
        enableHighAccuracy:true,
        maximumAge:30000,
        timeout:10000
    }
);

function distance(lat1, lon1, lat2, lon2) {
  var R = 6371;
  var a = 
     0.5 - Math.cos((lat2 - lat1) * Math.PI / 180)/2 + 
     Math.cos(lat1 * Math.PI / 180) * Math.cos(lat2 * Math.PI / 180) * 
     (1 - Math.cos((lon2 - lon1) * Math.PI / 180))/2;

  return R * 2 * Math.asin(Math.sqrt(a));
}

/** Converts numeric degrees to radians */
if (typeof(Number.prototype.toRad) === "undefined") {
    Number.prototype.toRad = function() {
        return this * Math.PI / 180;
    }
}

    var destinationLongitude = document.getElementById('longit').value;
    console.log('destinationLongitude: ' + destinationLongitude);
    var destinationLatitude = document.getElementById('latit').value;
    console.log('destinationLatitude: ' + destinationlatitude);
    var destinationRadius = document.getElementById('rad').value;
    console.log('destinationRadius: ' + destinationRadius);

function positionSucces(position) {
    
    var longitude = position.coords.longitude;
    console.log('longitude: ' + longitude);
    var latitude = position.coords.latitude;
    console.log('latitude: ' + longitude);
    var hideDistance = distance(longitude, latitude, destinationLongitude, destinationLatitude)*1000;
    console.log('distance: ' + hideDistance);

    var currentInterval = 1000+(hideDistance/destinationRadius)*2000;

    console.log('interval: 'currentInterval);
    timedCount(currentInterval);
    
    document.getElementById('long-4').value = longitude;
    document.getElementById('lat-4').value = latitude;
}


function positionError(position){

}


function timedCount(currentInterval) {
    //console.log(currentInterval);
    if(vid){
    setInterval(function(){ vid.play(); }, currentInterval);
    }
    //t = setTimeout("timedCount(currentInterval)", currentInterval);

}

document.getElementById("doTimer").onclick = function () {
    console.log('check');
    if (!timer_is_on) {
        timer_is_on = 1;
        timedCount();
    }
}

/*stopCount.onclick = function () {
    clearTimeout(t);
    timer_is_on = 0;
}*/