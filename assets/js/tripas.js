/* --------------------------------------------------------
     404 'Go Back' button
-------------------------------------------------------- */

function goBack() {
  window.history.back();
}

/* --------------------------------------------------------
     Change navbar color
-------------------------------------------------------- */

const header = document.querySelector("header");
const bannerSection = document.querySelector(".banner");

const bannerSectionOptions = {
     rootMargin: "-100px 0px 0px 0px"
};

const bannerSectionObserver = new IntersectionObserver(function(
     entries,
     bannerSectionObserver
   ) {
     entries.forEach(entry => {
       if (!entry.isIntersecting) {
         header.classList.add("nav-scrolled");
       } else {
         header.classList.remove("nav-scrolled");

       }
     });
   },
   bannerSectionOptions);

   bannerSectionObserver.observe(bannerSection);

/* --------------------------------------------------------
     Mobile nav - Width
-------------------------------------------------------- */

// function openNav() {
//   document.getElementById("myNav").style.width = "100%";
// }

// function closeNav() {
//   document.getElementById("myNav").style.width = "0%";
// }