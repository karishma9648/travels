
    const toggle = document.querySelector(".menu-toggle");
    const nav = document.querySelector(".nav-links");
    const navbar = document.querySelector(".navbar");

    // Mobile menu
    toggle.onclick = () => {
        nav.classList.toggle("active");
    }

    // Scroll effect
    window.addEventListener("scroll", () => {
        if (window.scrollY > 50) {
            navbar.classList.add("scrolled");
        } else {
            navbar.classList.remove("scrolled");
        }
    });
const dropdowns = document.querySelectorAll(".dropdown");

dropdowns.forEach(drop => {
    const input = drop.querySelector(".dropdown-input");
    const menu = drop.querySelector(".dropdown-menu");
    const items = menu.querySelectorAll("li");

    // show dropdown on focus
    input.addEventListener("focus", () => {
        closeAll();
        menu.style.display = "block";
    });

    // filter items
    input.addEventListener("input", () => {
        const value = input.value.toLowerCase();

        items.forEach(item => {
            item.style.display = item.innerText.toLowerCase().includes(value)
                ? "block"
                : "none";
        });
    });

    // select value
    items.forEach(item => {
        item.addEventListener("click", () => {
            input.value = item.innerText;
            menu.style.display = "none";
        });
    });
});

// close all dropdowns
function closeAll() {
    document.querySelectorAll(".dropdown-menu").forEach(menu => {
        menu.style.display = "none";
    });
}

// click outside close
document.addEventListener("click", (e) => {
    if (!e.target.closest(".dropdown")) {
        closeAll();
    }
});

function openModal() {
  document.getElementById("carModal").style.display = "flex";
}

function closeModal() {
  document.getElementById("carModal").style.display = "none";
}

window.onclick = function(e) {
  let modal = document.getElementById("carModal");
  if (e.target === modal) {
    modal.style.display = "none";
  }
}


