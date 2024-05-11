
//Making mobile nav button works when clicked
const navBar = document.querySelector(".nav");
const btnNavEl = document.querySelector(".btn-mobile-nav");
const iconNavEl = document.querySelector(".icon-mobile-nav");
const windowWidth = window.innerWidth;

let mobileNavClicked = false;

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
