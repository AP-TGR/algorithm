// function findIndexWithCapitalLetter(str) {
//     const arr = str.split('');
//     return arr.findIndex(char => /[A-Z]/.test(char));
// }

function findIndexWithCapitalLetter(str) {
    const arr = [...str];//str.split('');
    let keys = [];
    arr.forEach((val, key) => {
        if(/[A-Z0-9a-z\s]/.test(val)) {
            keys.push(key);
        }
    });
    return keys;
}

const indexes = findIndexWithCapitalLetter('A4mit Pandey3');
console.log(indexes);

// function findIndexWithCapitalLetter(arr) {
//   return arr.findIndex(str => /[A-Z]/.test(str));
// }

// Example usage
// const strings = ["hello", "world", "ThisIsAString", "example"];
// const index = findIndexWithCapitalLetter(strings);

// console.log(index, '----'); // Output: 2
