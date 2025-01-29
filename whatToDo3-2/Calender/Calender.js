daysInMonth = Array.from(document.getElementsByClassName("dayInMonth"))

daysInMonth.forEach((dayInMonth) => {
  dayInMonth.addEventListener("click", (e) => {
    console.log(e.target.innerText + " is the day you have chosen")
    // if this day contains notes or tasks, show them
    // if not then tell the user and then ask if they would like to add a task
  })
})
