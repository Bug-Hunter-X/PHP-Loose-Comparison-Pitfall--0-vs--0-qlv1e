function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This function will return false when both are 0, even though they are equal
var result = foo(0, -0);
console.log(result); // Output: false