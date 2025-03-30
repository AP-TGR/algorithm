function countRepeatedCharacters(str) {
    let characterCount = {};
    str = str.toLowerCase(); // To make case insensitive
    console.log(str);


    for (let char of str) {
        if (characterCount[char]) {
            characterCount[char]++;
        } else {
            characterCount[char] = 1;
        }
    }

    // Skip this loop if you want to get all characters count
    // for (let char in characterCount) {
    //     if (characterCount[char] <= 1) {
    //         delete characterCount[char];
    //     }
    // }

    return characterCount;
}

let res = countRepeatedCharacters('Hello World!!');
console.log(res);