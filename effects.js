console.log("JS Loaded");

var min, stops, delay, train, message;

min = setDelay || false;
stops = stops || false;
min = 5 * Math.round(min/5);
delay = document.getElementById("delay");
train = document.getElementById("type");
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


