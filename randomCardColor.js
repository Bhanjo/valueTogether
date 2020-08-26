/*
    랜덤으로 카드컬러 입혀주는 코드(보류)

    문제점
    같은 id로 js를 실행하면 맨 앞 카드 하나밖에 적용이 안됨
    for문을 이용해 개별로 적용하려 했지만 적용안됨 연구 필요
    결국은 노가다로 id를 하나하나 만들고 하나하나 적용시키게됨

    문제점2
    랜덤 컬러에서 만약 0x0nnnnn와 같이 앞에가 0일시 0이 표시되지 않음
    ex : 0x0fffff이면 출력은 0xfffff로 된다
    근본적 수정은안하고 css를 이용해 기본값을 주어 위와같은 에러가 뜨면 css값을 적용하게 했음
*/
const fickColor1 = document.getElementById("paintCardColor1");
const fickColor2 = document.getElementById("paintCardColor2");
const fickColor3 = document.getElementById("paintCardColor3");
const fickColor4 = document.getElementById("paintCardColor4");
const fickColor5 = document.getElementById("paintCardColor5");
const fickColor6 = document.getElementById("paintCardColor6");
const fickColor7 = document.getElementById("paintCardColor7");
const fickColor8 = document.getElementById("paintCardColor8");

function fickColor() {
    const color = Math.round(Math.random() * 0xffffff).toString(16); //0~ffffff랜덤생성
    const colorCode = "#" + color;
    return colorCode;
}

function randomColor1() {
    fickColor1.style.background = fickColor();
}
function randomColor2() {
    fickColor2.style.background = fickColor();
}
function randomColor3() {
    fickColor3.style.background = fickColor();
}
function randomColor4() {
    fickColor4.style.background = fickColor();
}
function randomColor5() {
    fickColor5.style.background = fickColor();
}
function randomColor6() {
    fickColor6.style.background = fickColor();
}
function randomColor7() {
    fickColor7.style.background = fickColor();
}
function randomColor8() {
    fickColor8.style.background = fickColor();
}

function init() {
    randomColor1();
    randomColor2();
    randomColor3();
    randomColor4();
    randomColor5();
    randomColor6();
    randomColor7();
    randomColor8();
}
init();