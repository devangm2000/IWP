const nooftickets = document.querySelector("#nooftickets").value
const submit = document.querySelector("#submit")
const submit = document.querySelector("#reset")
const source = document.querySelector("#source").value
const destination = document.querySelector("#destination").value
const train = document.querySelector("#train").value
const coach = document.querySelector("#coach").value
const date = document.querySelector("#date").value
const time = document.querySelector("#time").value
const gender = document.querySelector("#gender").value
const count = document.querySelector("#count").value
const answer = document.querySelector("#answer")

submit.addEventListener("click", function () {
    if (count > 20) {
        answer.innerHTML = "Yes Tickets available";
    } else {
        answer.innerHTML = "No Tickets available";
    }
})
var formData = new FormData(myForm);
reset.addEventListener("click", function () {
    formData.delete();
})
