
// === CONTACT FORM === // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
const contactForm = document.getElementById("contact-form");

if (contactForm) {
  contactForm.addEventListener("submit", function (e) {
    e.preventDefault(); // Seite nicht neuladen

    const formData = new FormData(this);

    fetch("/formatiker_php/mail/send-mail.php", {
      method: "POST",
      body: formData
    })
      .then((res) => res.text())
      .then((data) => {
        document.querySelector(".ajax-response").textContent = data;
      })
      .catch(() => {
        document.querySelector(".ajax-response").textContent = "Fehler beim Senden.";
      });
  });
}