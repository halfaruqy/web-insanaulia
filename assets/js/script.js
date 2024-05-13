
//Making mobile nav button works when clicked
const yearEl = document.querySelector("#year-now");
const navBar = document.querySelector(".nav");
const btnNavEl = document.querySelector(".btn-mobile-nav");
const iconNavEl = document.querySelector(".icon-mobile-nav");
const windowWidth = window.innerWidth;

let mobileNavClicked = false;
const currentYear = new Date().getFullYear();
yearEl.textContent = currentYear

///////////////////////////////////////////////////////////
// Smooth scrolling animation

const allLinks = document.querySelectorAll("a:link");

allLinks.forEach(function (link) {
  link.addEventListener("click", function (e) {
    e.preventDefault();
    const href = link.getAttribute("href");

    // Scroll back to top
    if (href === "#")
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });

    // Scroll to other links
    if (href !== "#" && href.startsWith("#")) {
      const sectionEl = document.querySelector(href);
      sectionEl.scrollIntoView({block: "center", behavior: "smooth" });
    }

  });
});

const addNavClickedClass = [
  "before:-top-1/2",
  "before:rotate-45",
  "after:top-1/2",
  "after:-rotate-45",
];
const removeNavClickedClass = ["after:top-2", "before:-top-2", "h-[3px]"];

const addShowMobileNavClass = [
  "w-full",
  "-translate-x-0",
  "opacity-1",
  "pointer-events-auto",
  "visible",
  "backdrop-blur-md",
  "bg-white/60",
];
const removeShowMobileClass = [
  "w-0",
  "-translate-x-full",
  "opacity-0",
  "pointer-events-none",
  "invisible",
];

btnNavEl.addEventListener("click", () => {
  mobileNavClicked = !mobileNavClicked;
  if (mobileNavClicked === true) {
    iconNavEl.classList.add(...addNavClickedClass);
    iconNavEl.classList.remove(...removeNavClickedClass);
    navBar.classList.add(...addShowMobileNavClass);
    navBar.classList.remove(...removeShowMobileClass);
  } else {
    iconNavEl.classList.remove(...addNavClickedClass);
    iconNavEl.classList.add(...removeNavClickedClass);
    navBar.classList.add(...removeShowMobileClass);
    navBar.classList.remove(...addShowMobileNavClass);
  }
});
