function login (){
const username = document.getElementById("userid").value
const password = document.getElementById("password").value
if(username==="ashref" & password==="2310"){
    alert("Welcome admin")
    window.document.location.href="home.html";
}
else{
    alert("Wrong user name (or) password please try again")
}
}