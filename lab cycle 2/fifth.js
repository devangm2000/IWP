const changeImg = document.querySelector("#changeBg")
const container = document.querySelector("#container")
changeImg.addEventListener("click", function () {
    container.classList.add("newBg")
})

const left = document.querySelector("#left")
const right = document.querySelector("#right")
const background = document.querySelector("#background")
const img = document.querySelector("img")
left.addEventListener("click", function () {
    img.classList.remove("background")
    img.classList.remove("right")
    img.classList.add("left")
})
right.addEventListener("click", function () {
    img.classList.remove("left")
    img.classList.remove("background")
    img.classList.add("right")
})
background.addEventListener("click", function () {
    img.classList.remove("right")
    img.classList.remove("left")
    img.classList.add("background")
})

const edittextbtn = document.querySelector("#edittextbtn")
const textfield = document.querySelector("#edittext")

edittextbtn.addEventListener("click", function () {
    const textinput = document.querySelector("#textinput").value
    textfield.innerHTML = textinput;
})

const fontsize = document.querySelector("#fontsize")
const header = document.querySelector("#header")
fontsize.addEventListener("change", function () {
    header.style.fontSize = (this.value)
})
const fontcolour = document.querySelector("#fontcolour")
fontcolour.addEventListener("change", function () {
    header.style.color = (this.value)
})