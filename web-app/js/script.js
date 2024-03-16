const headerDropdownTrigger = document.querySelector(".header-dropdown-trigger");
const headerDropdown = document.querySelector(".header-dropdown");
const approveButtons = document.querySelectorAll(".button--approve");
const denyButtons = document.querySelectorAll(".button--deny");
const commentTriggers = document.querySelectorAll(".comment-trigger");
const flagButtons = document.querySelectorAll(".button--flag");
const confirmButtons = document.querySelectorAll(".button--confirm");
const cancelButton = document.querySelectorAll(".button.cancel");

headerDropdownTrigger.addEventListener("click", (e) => {
  e.currentTarget.classList.toggle("active");
  headerDropdown.classList.toggle("expand");
});

headerDropdown.querySelectorAll("li").forEach((element) => {
  element.addEventListener("click", () => {
    headerDropdownTrigger.classList.remove("active");
    headerDropdown.classList.remove("expand");
  });
});

approveButtons.forEach((element) => {
  element.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle("active");
    e.currentTarget.parentNode.querySelector('.button--deny').classList.remove("active");
  });
});

denyButtons.forEach((element) => {
  element.addEventListener("click", (e) => {
    e.currentTarget.classList.toggle("active");
    e.currentTarget.parentNode.querySelector('.button--approve').classList.remove("active");
  });
});

commentTriggers.forEach((element) => {
  element.addEventListener("click", (e) => {
    e.currentTarget.parentNode.parentNode.classList.toggle("post--commenting");
  });
});

flagButtons.forEach((element) => {
  element.addEventListener("click", (e) => {
    e.currentTarget.parentNode.parentNode.classList.toggle("post--commenting");
  });
});

confirmButtons.forEach((element) => {
  element.addEventListener("click", (e) => {
    e.currentTarget.closest('.post').classList.toggle("post--commenting");
  });
});

cancelButton.forEach((element) => {
  element.addEventListener("click", (e) => {
    e.currentTarget.closest('.post').classList.toggle("post--commenting");
  });
});


// document.querySelector(".header-dropdown-trigger").addEventListener("click", function(e) {
//   e.currentTarget.classList.toggle("active");
//   document.querySelector(".header-dropdown").classList.toggle("expand");
// });
//
// document.querySelectorAll(".header-dropdown li").forEach(function(element) {
//   element.addEventListener("click", function(e) {
//     document.querySelector(".header-dropdown-trigger").classList.remove("active");
//     document.querySelector(".header-dropdown").classList.remove("expand");
//   });
// });
//
// document.querySelectorAll(".button--approve").forEach(function(element) {
//   element.addEventListener("click", function(e) {
//     e.currentTarget.classList.toggle("active");
//     e.currentTarget.parentNode.querySelector('.button--deny').classList.remove("active");
//   });
// });
//
// document.querySelectorAll(".button--deny").forEach(function(element) {
//   element.addEventListener("click", function(e) {
//     e.currentTarget.classList.toggle("active");
//     e.currentTarget.parentNode.querySelector('.button--approve').classList.remove("active");
//   });
// });
//
// document.querySelectorAll(".comment-trigger").forEach(function(element) {
//   element.addEventListener("click", function(e) {
//     e.currentTarget.parentNode.parentNode.classList.toggle("post--commenting");
//   });
// });
//
// document.querySelectorAll(".button--flag").forEach(function(element) {
//   element.addEventListener("click", function(e) {
//     e.currentTarget.parentNode.parentNode.classList.toggle("post--commenting");
//   });
// });
//
// document.querySelectorAll(".button--confirm").forEach(function(element) {
//   element.addEventListener("click", function(e) {
//     e.currentTarget.parentNode.parentNode.parentNode.parentNode.parentNode.classList.toggle("post--commenting");
//   });
// });
//
// document.querySelectorAll(".button.cancel").forEach(function(element) {
//   element.addEventListener("click", function(e) {
//     e.currentTarget.parentNode.parentNode.parentNode.parentNode.parentNode.classList.toggle("post--commenting");
//   });
// });


