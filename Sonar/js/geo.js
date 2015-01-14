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

function interval(func, wait, times){
    var interv = function(w, t){
        return function(){
            if(typeof t === "undefined" || t-- > 0){
                setTimeout(interv, w);
                try{
                    func.call(null);
                }
                catch(e){
                    t = 0;
                    throw e.toString();
                }
            }
        };
    }(wait, times);

    setTimeout(interv, wait);
};

function positionSucces(position) {
    var longitude = position.coords.longitude;
    var latitude = position.coords.latitude;
    var hideDistance = distance(longitude, latitude, 4.388853699999999, 51.0925936)
    console.log(hideDistance);

    var vid = document.getElementById("myAudio");
    var width = 0.1;

    (function playSound() {

        currentInterval = (hideDistance/width)*1000;
        vid.play();
        setTimeout(playSound, currentInterval)

    })();

    document.getElementById("lat").innerHTML = latitude;
    document.getElementById("long").innerHTML = longitude;
    document.getElementById("distance").innerHTML = hideDistance;
    document.getElementById("speed").innerHTML = currentInterval;
    var refresh = document.getElementById("refresh");
    refresh.onclick=function(){
        location.reload();
    }
}

function positionError(position){

}









