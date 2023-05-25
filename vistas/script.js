document.addEventListener("click", function (event) {
  if (event.target.classList.contains("ver")) {
    const element = event.target.parentElement.parentElement;
    const src = element.getAttribute("loc");
    var iframe = document.getElementById("miIframe");
    iframe.setAttribute("src", src);
  }
});
