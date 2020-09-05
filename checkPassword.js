const password = document.getElementById("pwdCheck");
const passwordRe = document.getElementById("pwdCheckRe");
const passCheck = document.getElementById("passPw");
const visibleButton = document.getElementById("activeButton");

function checkPw() {
    if(password.value != passwordRe.value) {
        passCheck.innerHTML='비밀번호가 불일치합니다';
        passCheck.style.color='red';
        visibleButton.style.visibility='hidden';
    } else if(password.value == passwordRe.value) {
        passCheck.innerHTML='비밀번호가 일치합니다';
        passCheck.style.color='black';
        visibleButton.style.visibility='visible';
    }
}