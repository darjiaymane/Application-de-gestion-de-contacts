let flnameRegex =  /^[a-zA-Z]/;
let usernameRegex =/^\w{3,15}$/;
let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?![.\n])(?=.{8,})/;
let phoneRegex =/^\d/;
let emailRegex = /^[a-zA-Z][A-Za-z0-9-_.]+@(gmail|outlook|yahoo).(com|fr|net)/;



function validate(e){

    let fname = document.forms['signup']['fname'].value;
    let lname = document.forms['signup']['lname'].value;
    let username = document.forms['signup']['username'].value;
    let password = document.forms['signup']['password'].value;
    let passwordConfirm = document.forms['signup']['passwordConfirm'].value;

    let fnameError = document.getElementById('fnameError');
    let lnameError = document.getElementById('lnameError');
    let usernameError = document.getElementById('usernameError');
    let passConfirmError = document.getElementById('passwordConfirmError');
    let passError = document.getElementById('passwordError');


    if (fname == ""){
        fnameError.innerText = "Please enter your First Name";
        e.preventDefault();
    }
    else if (!flnameRegex.test(fname) ){
        fnameError.innerText = "First name is not valide";
        e.preventDefault();
    }

    if (lname == ""){
        lnameError.innerText = "Please enter your Last Name";
        e.preventDefault();
    }
    else if (!flnameRegex.test(lname) ){
        lnameError.innerText = "Last name is not valide";
        e.preventDefault();
    }

    if (username == ""){
        usernameError.innerText = "Please enter your Username";
        e.preventDefault();
    }
    else if (!usernameRegex.test(username) ){
        usernameError.innerHTML = "Username must be between 3 and 15 characters,and accepts just letters and digits";
        e.preventDefault();
    }


    if (password == ""){
        passError.innerText = "Please enter your password   ";
        e.preventDefault();
    }
    else if (!passwordRegex.test(password) ){
        passError.innerHTML = "Password must have at least <ul><li class=\"text-warning\">One special character !@#$%/\|^&\*</li><li class=\"text-warning\">One digit(0-9)</li><li class=\"text-warning\">One uppercase (A-Z)</li><li class=\"text-warning\">One lowercase(a-z)</li>";
        e.preventDefault();
    }


    if (passwordConfirm == ""){
        passConfirmError.innerText = "Please confirm your password";
        e.preventDefault();
    }
    else if (passwordConfirm != password){
        passConfirmError.innerText = "Passwords are not the same";
        e.preventDefault();
    }


}
let sub = document.getElementById('submit');
sub.addEventListener('click',(e)=>{
    let name = add.name.value;
    let phone = add.phone.value;
    let email = add.email.value;
    let address = add.address.value;


    let msgName = document.getElementById('msgName');
    let msgPhone = document.getElementById('msgPhone');
    let msgEmail = document.getElementById('msgEmail');
    let msgAddress = document.getElementById('msgAddress');

    if (name == ""){
        msgName.innerText = "Please enter the contact name   ";
        e.preventDefault();

    }
    else if (!flnameRegex.test(name) ){
        msgName.innerText = "Contact name is not valide";
        e.preventDefault();

    }

    if (phone == ""){
        msgPhone.innerText = "Please enter the contact Phone   ";
        e.preventDefault();

    }
    else if (!phoneRegex.test(phone) ){
        msgPhone.innerText = "This field accepts only digits [0-9]";
        e.preventDefault();

    }

    if (email == ""){
        msgEmail.innerText = "Please enter the contact Email   ";
        e.preventDefault();

    }
    else if (!emailRegex.test(email) ){
        msgEmail.innerText = "email format must be example@compte.com";
        e.preventDefault();

    }

    if(address == ""){
        msgAddress.innerText = "Please enter the contact address"
    }
})
