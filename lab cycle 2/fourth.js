let n = parseInt(prompt("Enter the number"));
let r = n % 10;
let q = Math.floor(n / 10);
sum = q ** 2 + r ** 2;
// console.log(r);
// console.log(q);
// console.log(sum);
while (n) {
    if (sum !== 1) {
        r = sum % 10;
        q = Math.floor(sum / 10);
        sum = q ** 2 + r ** 2;
    }
    else {
        break;
    }

}
if (sum === 1) {
    console.log(`${n} is the happy number`);
}
else {
    console.log(`${n} is not the happy number`);
}
