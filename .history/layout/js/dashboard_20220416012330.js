const my_body=document.querySelector("body");
  mode_toggle=my_body.querySelector(".mode-toggle");
  sidebar=my_body.querySelector("ul");
  sidebar_toggle=my_body.querySelector(".sidebar-toggle");
  mode_toggle.addEventListener("click",()=>{
    my_body.classList.toggle("Dark");
});

sidebar_toggle.addEventListener("click",()=>{
  sidebar.classList.toggle("close");
});






