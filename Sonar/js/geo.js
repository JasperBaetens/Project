
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

function distance(lon1, lat1, lon2, lat2) {
    var R = 6371; // Radius of the earth in km
    var dLat = (lat2-lat1).toRad();  // Javascript functions in radians
    var dLon = (lon2-lon1).toRad();
    var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
        Math.cos(lat1.toRad()) * Math.cos(lat2.toRad()) *
        Math.sin(dLon/2) * Math.sin(dLon/2);
    var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
    var d = R * c; // Distance in km
    return d;
}

/** Converts numeric degrees to radians */
if (typeof(Number.prototype.toRad) === "undefined") {
    Number.prototype.toRad = function() {
        return this * Math.PI / 180;
    }
}

    var destinationLongitude = document.getElementById('longit').value;
    var destinationLatitude = document.getElementById('latit').value;
    var destinationRadius = document.getElementById('rad').value;

function positionSucces(position) {
    
    var longitude = position.coords.longitude;
    var latitude = position.coords.latitude;
    var hideDistance = distance(longitude, latitude, destinationLongitude, destinationLatitude);
    console.log(hideDistance);

    currentInterval = 1000+(hideDistance/destinationRadius)*1000;

    console.log(currentInterval);
                
 

}

function positionError(position){

}


function timedCount() {
    console.log('test');

    vid.play();

    t = setTimeout("timedCount()", currentInterval);

}

document.getElementById("doTimer").onclick = function () {
    console.log('check');
    if (!timer_is_on) {
        timer_is_on = 1;
        timedCount();
    }
}

stopCount.onclick = function () {
    clearTimeout(t);
    timer_is_on = 0;
}