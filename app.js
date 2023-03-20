// Global Counter

let counter = 0;

// Local Counters for Each Prize

let localCounter0 = 0;
let localCounter1 = 0;

// First Prize

function inc0() {
  if(counter >= 0 && counter < 14) {
    counter++;
    localCounter0++;
  }
  document.getElementById('counter0').innerHTML = localCounter0;
}

function dec0() {
  if(counter > 0 && counter <= 14) {
    counter--;
    localCounter0--;
  }
  document.getElementById('counter0').innerHTML = localCounter0;
}


// Second Prize

function inc1() {
  if(counter >= 0 && counter < 14) {
    counter++;
    localCounter1++;
  }
  document.getElementById('counter1').innerHTML = localCounter1;
}

function dec1() {
  if(counter > 0 && counter <= 14) {
    counter--;
    localCounter1--;
  }
  document.getElementById('counter1').innerHTML = localCounter1;
}