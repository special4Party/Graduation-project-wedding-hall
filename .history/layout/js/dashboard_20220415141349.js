const my_body=document.querySelector("body");
  mode_toggle=my_body.querySelector(".mode-toggle");
  sidebar=my_body.querySelector("nav");
  sidebar_toggle=my_body.querySelector(".sidebar-toggle");
  mode_toggle.addEventListener("click",()=>{
    my_body.classList.toggle("Dark");
});

sidebar.addEventListener("click",()=>{
  sidebar_toggle.classList.toggle("close");
});






