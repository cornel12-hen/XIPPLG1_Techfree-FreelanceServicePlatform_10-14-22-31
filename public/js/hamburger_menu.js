document.getElementById("hamburger").addEventListener("click", function () {
  const menu = document.getElementById("mobile-menu");
  menu.classList.toggle("translate-x-full");
  menu.classList.toggle("translate-x-0");
});

document.addEventListener("click", function (event) {
  const menu = document.getElementById("mobile-menu");
  const hamburger = document.getElementById("hamburger");
  const isClickInsideMenu = menu.contains(event.target);
  const isClickInsideHamburger = hamburger.contains(event.target);

  if (!isClickInsideMenu && !isClickInsideHamburger) {
    menu.classList.add("translate-x-full");
    menu.classList.remove("translate-x-0");
  }
});
