/*
    랜덤으로 카드컬러 입혀주는 코드
*/
function selectColor() {
    const color = Math.round(Math.random() * 0xffffff).toString(16); //0~ffffff랜덤생성
    const colorCode = color;
    return colorCode;
}

function randomColor() {
    const fickColor = new Array(8);
    const arrNum = new Array(8);
    for(let i = 1; i < 9; i++) {
        fickColor[i] = document.getElementById("paintCardColor"+i);
        arrNum[i] = selectColor();
        fickColor[i].style.background = "#" + arrNum[i];
    }
}

function init() {
    randomColor();
}
init();