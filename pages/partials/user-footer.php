<script src="https://kit.fontawesome.com/8e4a683975.js" crossorigin="anonymous"></script>
<script>
  window.addEventListener("scroll", function() {
    var navbar = document.getElementById("navbar");
    if (window.scrollY > 50) {
      navbar.style.backgroundColor = "rgba(248, 252, 251, 1)"; // Warna transparan
      navbar.style.transform = "translateY(-10px)"; // Geser navbar ke atas
    } else {
      navbar.style.backgroundColor = "transparent";
      navbar.style.transform = "translateY(0)"; // Reset posisi navbar
    }
  });
</script>
</body>

</html>