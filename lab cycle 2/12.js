const textchange = $("#textchange")
const textInput = $("input")
const changeButton = $("button")

$(document).ready(function () {
    changeButton.click(function () {
        textchange.html(textInput.val())
    })
})