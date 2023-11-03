const bookCon = document.getElementById("bookContainer");
let bookConWidth = bookCon.offsetWidth;
const imgCon = document.getElementById("imgContainer");
let imgConWidth = imgCon.offsetWidth;
let calcTranslateXLeft = 0; // Inisialisasi dengan 0
const imgConCls = document.getElementsByClassName("image-container");
const prevBtn = document.getElementById("prevBtn");
const nextBtn = document.getElementById("nextBtn");
let count = 0; // Inisialisasi dengan 0

function getNextSlide() {
  calcTranslateXLeft = calcTranslateXLeft - (imgConCls[0].offsetWidth + 90);
  if (calcTranslateXLeft <= 0) {
    imgCon.style.transform = "translateX(" + calcTranslateXLeft + "px)";
    count++;
    prevBtn.removeAttribute("disabled"); // Aktifkan tombol "prev"
  }
  if (count == imgConCls.length - 1) {
    nextBtn.setAttribute("disabled", ""); // Nonaktifkan tombol "next" saat mencapai slide terakhir
  }
}

function getPrevSlide() {
  calcTranslateXLeft = calcTranslateXLeft + imgConCls[0].offsetWidth + 90;
  if (calcTranslateXLeft <= 0) {
    imgCon.style.transform = "translateX(" + calcTranslateXLeft + "px)";
    count--;
    nextBtn.removeAttribute("disabled"); // Aktifkan tombol "next"
  }
  if (count == 0) {
    prevBtn.setAttribute("disabled", ""); // Nonaktifkan tombol "prev" saat mencapai slide pertama
  }
}
