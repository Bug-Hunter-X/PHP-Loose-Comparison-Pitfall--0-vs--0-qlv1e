function foo(a, b) {
  if (a === b) {
    return true; 
  }
  return false;
}

//This function will return true because now we are using strict comparison
var result = foo(0, -0);
console.log(result); // Output: true