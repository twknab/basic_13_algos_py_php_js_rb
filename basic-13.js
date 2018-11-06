// 1
function print1To255(){
  for (let i = 1; i <= 255; i++) {
    console.log(i);
  }
}
print1To255();

// 2
function printIntsAndSum(){
  let sum = 0;
  for (let i = 0; i <= 255; i++) {
    sum += i;
    console.log(i);
    console.log(sum);
  }
}
printIntsAndSum();

// 3
function findAndPrintMax(arr) {
  let max = arr[0];
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > max) {
      max = arr[i];
    }
  }
  console.log(max);
}
findAndPrintMax([1,2,3,4,5]);

// 4
function arrayWithOdds(){
  let odds = [];
  for (let i = 1; i <= 255; i++) {
    if (i % 2 == 1) {
      odds.push(i);
    }
  }
  console.log(odds);
}
arrayWithOdds();

// 5
function greater_than_y(arr, y) {
  let count = 0;
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > y) {
      count++;
    }
  }
  console.log(count);
}
greater_than_y([1,2,3,4,5], 3);

function minMaxAvg(arr) {
  let min = arr[0],
    max = arr[0],
    sum = 0;
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] > max) {
      max = arr[i];
    }
    if (arr[i] < min) {
      min = arr[i];
    }
    sum += arr[i];
  }
  let avg = sum / arr.length;
  console.log(min, max, avg);
}
minMaxAvg([1,2,3,4,5]);

// 7
function swapStringForArrayNegativeValues(arr) {
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] < 0) {
      arr[i] = "Dojo";
    }
  }
  console.log(arr);
}
swapStringForArrayNegativeValues([-1,2,3,4,5]);

// 8
function printOdds1To255(){
  for (let i = 0; i <= 255; i++) {
    if (i % 2 == 1) console.log(i);
  }
}
printOdds1To255();

// 9 
function iterateAndPrintArray(arr) {
  for (let i = 0; i < arr.length; i++) {
    console.log(arr[i]);
  }
}
iterateAndPrintArray([1,2,3,4,5]);

// 10
function getAndPrintAverage(arr) {
  let sum = 0;
  for (let i = 0; i < arr.length; i++) {
    sum += arr[i];
  }
  console.log(sum/arr.length);
}
getAndPrintAverage([1,2,3,4,5]);

// 12
function zeroOutNegativeNumbers(arr) {
  for (let i = 0; i < arr.length; i++) {
    if (arr[i] < 0) {
      arr[i] = 0;
    }
  }
  console.log(arr);
  return arr;
}
zeroOutNegativeNumbers([1,2,3,4,-1]);

// 13
function shiftArrayValues(arr) {
  for (let i = 0; i < arr.length; i++) {
    arr[i] = arr[i + 1];
  }
  arr[arr.length-1] = 0;
  console.log(arr);
  return arr;
}
shiftArrayValues([1,2,3,4,5]);