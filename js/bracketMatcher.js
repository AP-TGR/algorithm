function bracketMatcher(str) {
    let openingBracket = 0;

    for (let char of str) {
        if (char === '(') {
            openingBracket++;
        } else if (char === ')') {
            if (openingBracket <= 0) {
                return 0; // closing bracket found withput opening bracket
            }
            openingBracket--;
        }
    }
    return openingBracket === 0 ? 1 : 0;
}

const res = bracketMatcher('(abc)()');
console.log(res);