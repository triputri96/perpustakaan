const bookContainer = document.getElementById("bookContainer")
let bookConWidth = bookContainer.offsetWidth
const imgContent = document.getElementById("imgContent")
const imgContainer = document.getElementById("imgContainer")
let imgConWidth = imgContent.offsetWidth
console.log(imgConWidth);
function getNextSlide() {
    imgContainer.style.marginLeft -= imgConWidth;
    console.log(imgContainer.style.marginLeft)
}