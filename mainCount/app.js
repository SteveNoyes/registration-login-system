// Main count can't be more than 14 total 
let mainCount = document.getElementById('mainCount').innerHTML;
console.log(mainCount);

// let add = document.querySelector(".add");
// let subtract = document.querySelector(".subtract");

// add.addEventListener("click", function () {
//   let output = document.querySelector(".output");
//   let result = Number(output.innerText) + 1;
//   if (result >= 14) {
//     result = 14;
//   } else {
//     mainCount++;
//   }
//   output.innerText = result;
//   console.log(mainCount);
// });

// subtract.addEventListener("click", function () {
//   let output = document.querySelector(".output");
//   let result = Number(output.innerText) - 1;
//   if (mainCount <= 0) {
//     mainCount = 0;
//   } else {
//     mainCount--;
//   }
//   if (result < 0) {
//     result = 0;
//   }
//   output.innerText = result;
//   console.log(mainCount);
// });

// var qtyHolders = document.querySelectorAll(".qty-holder");
var qtyDecs = document.querySelectorAll(".qty-dec");
var qtyIncs = document.querySelectorAll(".qty-inc");

qtyDecs.forEach((qtyDec) => {
  qtyDec.addEventListener("click",function(e){
    if(e.target.nextElementSibling.value > 0){
      e.target.nextElementSibling.value--;
    } else {
      // delete the item, etc
    }
  })
})
qtyIncs.forEach((qtyDec) => {
  qtyDec.addEventListener("click",function(e){
    // e.target.previousElementSibling.value++;
    if(e.target.previousElementSibling.value < 14){
      e.target.previousElementSibling.value++;
    } else {
      // delete the item, etc
      console.log('max');
    }
  })
}) 