// === Header === // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
document.getElementById("sidebarToggle").addEventListener("click", () => {
  document.querySelector(".offcanvas__area").classList.add("offcanvas-opened");
  document.querySelector(".body-overlay").classList.add("opened");
});

document.querySelector(".offcanvas__close-btn").addEventListener("click", () => {
  document.querySelector(".offcanvas__area").classList.remove("offcanvas-opened");
  document.querySelector(".body-overlay").classList.remove("opened");
});

// === Slider === // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
const aboutModalId = "aboutModalList-1";
const aboutBackdropId = "backdrop-about";
const aboutModal = document.getElementById(aboutModalId);
const aboutTrigger = document.getElementById("aboutTrigger");
const aboutCloseBtn = document.getElementById("aboutCloseBtn");

if (aboutTrigger && aboutModal && aboutCloseBtn) {
  // Öffnen
  aboutTrigger.addEventListener("click", () => {
    aboutModal.classList.add("show");
    aboutModal.style.display = "block";

    const backdrop = document.createElement("div");
    backdrop.className = "modal-backdrop fade show";
    backdrop.id = aboutBackdropId;
    document.body.appendChild(backdrop);

    document.body.classList.add("modal-open");

    // Klick auf Backdrop schließt auch das Modal
    backdrop.addEventListener("click", closeAboutModal);
  });

  // Schließen über Button
  aboutCloseBtn.addEventListener("click", closeAboutModal);

  // Schließen über Klick auf leeren Bereich
  aboutModal.addEventListener("click", (e) => {
    if (e.target === aboutModal) {
      closeAboutModal();
    }
  });

  function closeAboutModal() {
    aboutModal.classList.remove("show");
    aboutModal.style.display = "none";

    const backdrop = document.getElementById(aboutBackdropId);
    if (backdrop) backdrop.remove();

    document.body.classList.remove("modal-open");
  }
}

//swiper config
  document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll(".swiper-slide");
    let current = 0;

    // Erste Slide sichtbar machen
    slides[current].classList.add("active");

    setInterval(() => {
      // aktuelle Slide ausblenden
      slides[current].classList.remove("active");

      // zur nächsten wechseln
      current = (current + 1) % slides.length;

      // neue Slide einblenden
      slides[current].classList.add("active");
    }, 2000); // alle 2 Sekunden
  });

// === Service Modals === // --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
// Web-Entwicklung (Modal 1)
document.querySelector('[data-bs-target="#productModalList-1"]')?.addEventListener("click", () => {
  showModal("productModalList-1");
});
document.querySelector('#productModalList-1 .product__modal-close-btn')?.addEventListener("click", () => {
  hideModal("productModalList-1");
});

// PC-Montage (Modal 2)
document.querySelector('[data-bs-target="#productModalList-2"]')?.addEventListener("click", () => {
  showModal("productModalList-2");
});
document.querySelector('#productModalList-2 .product__modal-close-btn')?.addEventListener("click", () => {
  hideModal("productModalList-2");
});

// Mobile Apps (Modal 3)
document.querySelector('[data-bs-target="#productModalList-3"]')?.addEventListener("click", () => {
  showModal("productModalList-3");
});
document.querySelector('#productModalList-3 .product__modal-close-btn')?.addEventListener("click", () => {
  hideModal("productModalList-3");
});

// === Modal Utilities ===
function showModal(id) {
  const modal = document.getElementById(id);
  if (!modal) return;
  modal.classList.add("show");
  modal.style.display = "block";

  const backdrop = document.createElement("div");
  backdrop.className = "modal-backdrop fade show";
  backdrop.id = `backdrop-${id}`;
  document.body.appendChild(backdrop);

  document.body.classList.add("modal-open");

  backdrop.addEventListener("click", () => hideModal(id));
}

function hideModal(id) {
  const modal = document.getElementById(id);
  if (!modal) return;
  modal.classList.remove("show");
  modal.style.display = "none";

  const backdrop = document.getElementById(`backdrop-${id}`);
  if (backdrop) backdrop.remove();

  document.body.classList.remove("modal-open");
}


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


// === Back to Top Button === //  --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
const backToTopBtn = document.getElementById("back_to_top");

// Beim Klick zurück nach oben scrollen
backToTopBtn.addEventListener("click", () => {
  console.log('roman');
  window.scrollTo({ top: 0, behavior: "smooth" });
});

// Optional: Button nur einblenden, wenn man etwas runtergescrollt ist
window.addEventListener("scroll", () => {
  if (window.scrollY > 300) {
    backToTopBtn.parentElement.style.display = "block";
  } else {
    backToTopBtn.parentElement.style.display = "none";
  }
});
