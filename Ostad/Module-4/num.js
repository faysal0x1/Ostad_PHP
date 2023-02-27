const sum = (...nums) => {
  return nums.reduce((total, current) => {
    return total + current;
  }, 0);
};

console.log(sum(1, 2, 3, 4)); // Output: 10
console.log(sum(1, 2, 3, 4, 5)); // Output: 15
console.log(sum(2)); // Output: 2
console.log(sum()); // Output: 0
