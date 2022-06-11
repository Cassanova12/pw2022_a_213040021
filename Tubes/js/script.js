// mengambil elemen - elemen yang dibutuhkan
var keyword = document.getElementById("keyword");
var tombilCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

// menambahkan event ketika keyword diketik
keyword.addEventListener("keyup", function () {
  // buat object AJAX
  var xhr = new XMLHttpRequest();

  // check kesiapan AJAX
  xhr.onreadystatechange = function () {
    if (xhr.readyState == 4 && xhr.status == 200) {
      container.innerHTML = xhr.responseText;
    }
  };

  // eksekusi ajax
  xhr.open("GET", "ajax/hewan.php?keyword=" + keyword.value, true);
  xhr.send();
});
