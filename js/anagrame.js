function areAnagrams(str1, str2) {
    // Normalize
    const normalize = (str) => {
        return str.replace(/[^a-b0-9]/gi, '').toLowerCase();
    }

    const sortedStr1 = normalize(str1).split('').sort().join('');
    const sortedStr2 = normalize(str2).split('').sort().join('');

    return sortedStr1 === sortedStr2;
}

// Example usage
console.log(areAnagrams('listen', 'silent')); // true
console.log(areAnagrams('hello', 'world'));   // false
console.log(areAnagrams('anagram', 'nagaram')); // true
console.log(areAnagrams('Dormitory', 'dirty room')); // true