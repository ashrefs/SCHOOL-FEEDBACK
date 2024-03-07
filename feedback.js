//get feedback information starting
function addtable(){
  let names = document.getElementById("name")
  let departments = document.getElementById("department")
  let regnos = document.getElementById("regno")
  let emails = document.getElementById("email")
  let feedbacks = document.getElementById("feedback")

  let tname = document.getElementById("tn")
  let tdepartment = document.getElementById("td")
  let treg = document.getElementById("tr")
  let temail = document.getElementById("te")
  let tfeedback = document.getElementById("tf")

  tname.textContent = names.value
  tdepartment.textContent = departments.value
  treg.textContent = regnos.value
  temail.textContent = emails.value
  tfeedback.textContent = feedbacks.value
  

  alert(" THANKS FOR YOUR FEEDBACK..!")
}
//get feedback information ending 



