// Global Counter
// Can't go over 14

let counter = 0;

// Local Counters for Each Prize

let localCounter1 = 0;
let localCounter2 = 0;

// First Prize

function inc0() {
  if(counter >= 0 && counter < 14) {
    counter++;
    localCounter1++;
  }
  document.getElementById('counter0').innerHTML = localCounter1;
  document.getElementById('prizeOne').value = localCounter1;

  document.getElementById('mainCount').innerHTML = counter;
  document.getElementById('p1local').innerHTML = localCounter1;
}

function dec0() {
  if(counter > 0 && counter <= 14) {
    counter--;
    localCounter1--;
  }
  document.getElementById('counter0').innerHTML = localCounter1;
  document.getElementById("prizeOne").value = localCounter1;

  document.getElementById('mainCount').innerHTML = counter;
  document.getElementById('p1local').innerHTML = localCounter1;
}

// Second Prize

function inc1() {
  if(counter >= 0 && counter < 14) {
    counter++;
    localCounter2++;
  }
  document.getElementById('counter2').innerHTML = localCounter2;
  document.getElementById("prizeTwo").value = localCounter2;

  document.getElementById('mainCount').innerHTML = counter;
  document.getElementById('p2local').innerHTML = localCounter2;
}

function dec1() {
  if(counter > 0 && counter <= 14) {
    counter--;
    localCounter2--;
  }
  document.getElementById('counter2').innerHTML = localCounter2;
  document.getElementById("prizeTwo").value = localCounter2;

  document.getElementById('mainCount').innerHTML = counter;
  document.getElementById('p2local').innerHTML = localCounter2;
}