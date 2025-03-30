function removeDuplicates(arr) {
    return [...new Set(arr)];
  }
  
  const array = [1, 2, 2, 3, 4, 4, 5];
  const uniqueArray = removeDuplicates(array);
  
  console.log(uniqueArray); // Output: [1, 2, 3, 4, 5]

  
//   function removeDuplicates(arr) {
//     return arr.filter((item, index) => arr.indexOf(item) === index);
//   }
  
//   const array = [1, 2, 2, 3, 4, 4, 5, 1];
//   const uniqueArray = removeDuplicates(array);
  
//   console.log(uniqueArray); // Output: [1, 2, 3, 4, 5]

const str = "hello";

function removeDuploicateChar(str) {
    return [...(new Set(str))].join('');
}

function removeDuplicateChar(str) {
    const arr = [...str];
    return arr.filter((item, index) => arr.indexOf(item) === index).join('');
}

const str2 = removeDuploicateChar(str);
console.log(str2);

const str3 = removeDuplicateChar(str);
console.log(str3);
  