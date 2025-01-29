var menuItems = Array.from(document.getElementsByClassName("menuItem"))
const optionsBtn = document.querySelector(".optionsBtn")
const optionsMenu = document.querySelector(".optionsMenu")
const searchBtn = document.querySelector("#searchBtn")

searchBtn.addEventListener("click", () => {
  console.log('search for something')
  console.log(optionsMenu)
})


optionsBtn.addEventListener("click", () => {
  if(optionsMenu.classList.contains("active")){
    optionsMenu.classList.remove("active")
  } else {
     optionsMenu.classList.add("active")
  }
})

menuItems.forEach((menuItem) => {
  menuItem.addEventListener("click",(e) => {
    console.log(e.target)
  }) 
});
