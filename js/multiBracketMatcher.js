function multiBracketMatcher(str) {
    const stack = [];
    const bracketMap = {
        '(' : ')',
        '{' : '}',
        '[' : ']',
    }

    for (let char of str) {
        // For opening brackets
        if (bracketMap[char]) {
            stack.push(char);
        }
        // FOr closing brackets
        else if (Object.values(bracketMap).includes(char)) {
            if (stack.length === 0 || (bracketMap[stack.pop()] !== char)) {
                return 0; // Closing bracket match not found
            }
        }
    }
    return stack.length === 0 ? 1 : 0;
}

// Example usage:
console.log(multiBracketMatcher("(abc){}[]"));              // Output: 1
console.log(multiBracketMatcher("{[(abc)]}"));              // Output: 1
console.log(multiBracketMatcher("{[abc](})"));              // Output: 0
console.log(multiBracketMatcher("(({})"));                  // Output: 0
console.log(multiBracketMatcher("({abc(def)pqr}qwe)"));     // Output: 1