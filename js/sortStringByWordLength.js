function sortStringByWordLength(str) {
    // Convert the string to an array of words
    const wordsArray = str.split(' ');

    // Sort the array by the length of each word
    wordsArray.sort((a, b) => a.length - b.length);

    // Join the sorted array back into a string
    const sortedString = wordsArray.join(' ');

    return sortedString;
}

// Example usage
const inputString = "Welcome to the interview";
const sortedString = sortStringByWordLength(inputString);
console.log(sortedString); // Output: "to the Welcome interview"
