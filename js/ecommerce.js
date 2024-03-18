// Toggle Class Active untuk humberger menu
const navbarNav = document.querySelector(".navbar-nav");

// Ketika Hamburger Menu di Klik
document.querySelector("#hamburger-menu").onclick = () => {
  navbarNav.classList.toggle("active");
};
//Toogle Class Active untuk Search-form
const searchForm = document.querySelector(".search-form");
//untuk mengambil class diawali titik (.) jika id diawali dengan pagar (#)
//dibawah ini kita ambil searchbox untuk inputannya
const searchBox = document.querySelector("#search-box");
//dibawah ini artinya adalah javascript tolong carikan saya elemen yang nama idnya search-button
//ketika diklik jalankan sebuah fungsi () kita pakai arrow fungstion (=>) {} didalam kurung kurawa
//kita tooglle dulu class activenya seperti navbar diatas
document.querySelector("#search-button").onclick = (e) => {
  searchForm.classList.toggle("active");
  //toogle ini untuk menambahkan class active ketika belum ada tapi klo udh ada class activenya diklik lagi maka class active nya hilang
  //nah diatas gunanya apa nih searchBox kan yg kita butuh cuma searchForm? tdi kita tambah searchBox
  //supaya ketika saya klik ikon search otomatis input search nya langsung aktif tinggal klik aja ketikan katanya
  //sehingga kita haurs gini sprti yg dibawah
  searchBox.focus();
  //bikin agar inputnya focus tinggal diklik aja
  //nah setelah itu saya ingin ketika searchnya diklik di halaman selain home tidak otomatis naik ekatas home melainkan
  //tetap diam saja dan tidak ketas otomatis namun ini terjadi kenapa?
  //karena inget yg kita klik adalah tag a yg mengarah pada '#' klo kita ngarahin ke tanda pagar
  //artinya dia akan pindah ke halaman yang sama bagian paling atas seperti yg dijelaskan diatas
  //nah gimana caranya supya tag a nya ga jalan yg jalan cuma kolom search nya aja
  //yaitu kita harus matiin aksi defaultnya caranya kita kasih sebuah parameter di #searc-button nya pada onclik()
  //didalam kurung itu kasih event atau e aja boleh lalu ketik selanjutnya
  e.preventDefault();
  //ini agar aksi defaultnya tdak dilakukan ini biasa kita pke submit form atau pindah ke sbuah link tpi ngga mau kita lakukan
};
//Toogle class active untuk shopping cart
const shoppingCart = document.querySelector(".shopping-cart");
document.querySelector("#shopping-cart-button").onclick = (e) => {
  shoppingCart.classList.toggle("active");
  e.preventDefault();
};

// Klik di Luar Sidebar Untuk Menghilangkan Nav
const hm = document.querySelector("#hamburger-menu");
const sb = document.querySelector("#search-button");
const sc = document.querySelector("#shopping-cart-button");
// diatas Ketika di KLik Ngasih Event Klik pada saat kita klik mousenya
// jadi nanti akan kita tangkap ketika mousenya di klik diluar sidebar selain hamburger dan navbar maka akan langsung hilang
document.addEventListener("click", function (e) {
  if (!hm.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
  if (!sb.contains(e.target) && !searchForm.contains(e.target)) {
    searchForm.classList.remove("active");
  }
  if (!sc.contains(e.target) && !shoppingCart.contains(e.target)) {
    shoppingCart.classList.remove("active");
  }
});
//modal Box
const itemDetailModal = document.querySelector("#item-detail-modal");

const itemDetailButtons = document.querySelectorAll(".item-detail-button");

itemDetailButtons.forEach((btn) => {
  btn.onclick = (e) => {
    itemDetailModal.style.display ="flex";
    e.preventDefault();
  };
});

// klik tombol close modal
document.querySelector(".modal .close-icon").onclick = (e) => {
  itemDetailModal.style.display = "none";
  e.preventDefault();
};
//klik diluar modal
// jadi ketika kita klik manapun jadi kita bisa
window.onclick = (e) => {
  if (e.target === itemDetailModal) {
    itemDetailModal.style.display = "none";
  }
};
