function findNonRepetativeChar(str) {
    let characterCount = {};
    str = str.toLowerCase(); // To make case insensitive
    for(let char of str) {
        if (characterCount[char]) {
            characterCount[char]++
        } else {
            characterCount[char] = 1;
        }
    }

    // Loop through count object to get no repetative character
    for(let char in characterCount) {
        if (characterCount[char] == 1) {
            return char; // return first non repetative character
        }
    }
    return null;
}

findNonRepetativeChar("hello"); // This means remove duplicate

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