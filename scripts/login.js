document.getElementById('signup-button').onclick = signup;
function signup(){
    document.getElementById('signup').style = "display:flex;"
}
document.getElementById('signup').onclick = function(e){
    if(!document.getElementById('signup-modal').contains(e.target)){
        document.getElementById('signup').style = "display:none;"
    }
}
document.getElementById('login-button').onclick = login;
function login(){
    document.getElementById('login').style = "display:flex;"
}
document.getElementById('login').onclick = function(e){
    if(!document.getElementById('login-modal').contains(e.target)){
        document.getElementById('login').style = "display:none;"
    }
}