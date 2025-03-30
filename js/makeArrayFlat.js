function makeArrayFlat(arr) {
    return arr.flat(Infinity);
}

function flattenArray(arr) {
    let flatArr = [];

    function flatten(element) {
        if (Array.isArray(element)) {
            for(let item of element) {
                flatten(item);
            }
        } else {
            flatArr.push(element);
        }
    }

    flatten(arr);
    return flatArr;
}

let a = [1,2,3,4,5,6,7,[8,9,0,10,11,12,[13,14,15,16]]];
let flatArr = flattenArray(a);
console.log(flatArr);