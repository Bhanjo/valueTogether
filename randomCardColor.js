/*
    랜덤으로 카드컬러 입혀주는 코드(보류)

    문제점
    같은 id로 js를 실행하면 맨 앞 카드 하나밖에 적용이 안됨
    for문을 이용해 개별로 적용하려 했지만 적용안됨 연구 필요
    결국은 노가다로 id를 하나하나 만들고 하나하나 적용시키게됨
    해결 : 배열을 만들어서

    문제점2
    랜덤 컬러에서 만약 0x0nnnnn와 같이 앞에가 0일시 0이 표시되지 않음
    ex : 0x0fffff이면 출력은 0xfffff로 된다
    근본적 수정은안하고 css를 이용해 기본값을 주어 위와같은 에러가 뜨면 css값을 적용하게 했음
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