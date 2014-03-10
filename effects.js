console.log("JS Loaded");

var min, stops, delay, train, message, stopsMessage;

min = setDelay || false;
stops = stops || false;
min = 5 * Math.round(min/5);
delay = document.getElementById("delay");
train = document.getElementById("type");
stopsMessage = document.getElementById("stops");
message = "";

function toggleDelay() {
    if(delay.style.display == "none") {
        delay.style.display = "block";
        train.style.display = "none";
    } else {
        delay.style.display = "none";
        train.style.display = "block";
    }
}


if(stops) {
    if(stops.length <= 1) {
        stopsMessage.innerText = "via " + stops[0];
    } else {
        stopsMessage.innerText = "via ";
        for(var i = 0; i < stops.length; i++) {
            stopsMessage.innerText += stops[i];
            if(i == stops.length - 1) {
                stopsMessage.innerText += "en ";
            } else {
                stopsMessage.innerText += ", ";
            }
        }
    }
} else {
    stopsMessage.innerText = "";
}

if(min && min > 3) {
    console.log("Delay is true", min);
    message = "+" + min + " minuten";
    delay.innerText = message;
    toggleDelay();
    setInterval(function() {
        toggleDelay();
    }, 5000);
}

console.log(stops);


