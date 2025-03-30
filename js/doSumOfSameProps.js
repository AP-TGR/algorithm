function doSumOfSameProp(arr) {
    let res = arr.reduce((acc, obj) => {
        for (let key in obj) {
            console.log(key, obj[key], acc[key]);
            acc[key] = (acc[key] || 0) + obj[key];
        }
        return acc; // Return the updated accumulator
    }, {});

    return res;
}

let arr = [{ a: 2 }, { a: 2 }, { b: 1 }, { b: 9 }, { c: 3 }, { c: 4 }];
let res = doSumOfSameProp(arr);
console.log(res);