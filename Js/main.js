// form validation sign up

let formSignUp = document.getElementById("signup");
let error = document.querySelectorAll(".valid");
let validNam = false;
let validPas = false;
let validCon = false;


function validName(Name){
    let userNameReg = /^([A-Za-z]{3,8})$/;
    if(userNameReg.test(Name)){
        error[0].innerHTML = "";
        document.getElementById("username").classList.remove("border-danger");
        validNam = true;
    }
    else{
        error[0].innerHTML = "username not valid";
        document.getElementById("username").classList.add("border-danger");
        validNam = false;
    }
}

function validPass(Pass){
    let passReg = /^([A-Za-z0-9]{6,16})$/;
    if(passReg.test(Pass)){
        error[1].innerHTML = "";
        document.getElementById("pass").classList.remove("border-danger");
        validPas = true;
    }
    else{     
        error[1].innerHTML = "password not valid";
        document.getElementById("pass").classList.add("border-danger");
        validPas = false;
    }
}

function validConPass(pass,conPass){
    if(!(pass == conPass)){
        error[2].innerHTML = "confirm password not valid";
        document.getElementById("conpass").classList.add("border-danger");
        validCon = false;
    }
    else{
        error[2].innerHTML = "";
        document.getElementById("conpass").classList.remove("border-danger");
        validCon = true;
    }
}

formSignUp.addEventListener("input",function(){
    let userName = formSignUp.username.value;
    let pass = formSignUp.pass.value;
    let conPass = formSignUp.conPass.value;
    validName(userName);
    validPass(pass);
    validConPass(pass,conPass);
});

formSignUp.addEventListener("submit",(e)=>{
    let userName = formSignUp.username.value;
    let pass = formSignUp.pass.value;
    let conPass = formSignUp.conPass.value;
    if(validNam == true && validPas == true && validCon == true){ 
    }
    else{
        e.preventDefault();
    }
})

