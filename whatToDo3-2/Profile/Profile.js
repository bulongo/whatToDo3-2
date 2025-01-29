const profileOptionBtns = Array.from(document.getElementsByClassName("profileOptionBtn"))
const options = document.querySelector(".options")

profileOptionBtns.forEach((profileOptionBtn) => {
  profileOptionBtn.addEventListener("click", (e) => {
    if(options.classList.contains("optionsActive")) {
      options.classList.remove("optionsActive")
    } else {
      options.classList.add("optionsActive")
    }
  })
})

