const logo = document.getElementById(".jsGoHoem");

function myHome() { //로고클릭 이벤트 처리
    const openHome = window.open("index.html");
}

function clickLogo() { //로고클릭 이벤트
    logo.addEventListener("click", myHome);
}

function init() {
    clickLogo();
}
init();