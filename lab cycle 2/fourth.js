let n = prompt("Enter the number");

let happyNumber = function (n, counter) {
    let result = false;
    if (counter < 10) {
        let array = n.toString().split("").map(n => n * n);
        let sum = array.reduce((a, b) => a + b, 0);

        if (sum === 1) {
            alert("Happy Number");
        }
        else {
            counter++;
            happyNumber(sum, counter)
        }
    }
    else {
        alert("Not a Happy Number");
    }
}
happyNumber(n, 0)