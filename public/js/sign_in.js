document.getElementById("loginForm").addEventListener("submit", function (event) {
  event.preventDefault();

  const correctEmail = "Techfree@gmail.com";
  const correctPassword = "Techfree123";

  const inputEmail = document.getElementById("email").value;
  const inputPassword = document.getElementById("password").value;

  if (inputEmail === correctEmail && inputPassword === correctPassword) {
    alert("Login Berhasil");
    window.location.href = "index.html";
  } else {
    alert("Email atau Password salah");
  }
});
