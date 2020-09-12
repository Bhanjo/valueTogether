//왼쪽 파트에 보여질 값
function showMain(){
    today = new Date(today.getFullYear(), today.getMonth(), today.getDate());
    console.log(today);
    var TodoYear = today.getFullYear();
    var TodoMonth = today.getMonth() + 1;
    var TodoDate = today.getDate();

    //서버에 보낼 값
    var mainTodayYear = document.querySelector('#main-year');
    var mainTodayMonth = document.querySelector('#main-month');
    var mainTodayDate = document.querySelector('#main-date');
    var mainTodayDay = document.querySelector('#main-day');
    
    //클라이언트에 보여질 값
    var showYear = document.querySelector('#show-main-year');
    var showMonth = document.querySelector('#show-main-month');
    var showDate = document.querySelector('#show-main-date');

    // var TodoYear = today.getFullYear();
    mainTodayYear.innerHTML = TodoYear;
    showYear.innerHTML = TodoYear;

    // var TodoMonth = today.getMonth() + 1;
    mainTodayMonth.innerHTML = TodoMonth;
    showMonth.innerHTML = TodoMonth;

    // var TodoDate = today.getDate();
    mainTodayDate.innerHTML = TodoDate;
    showDate.innerHTML = TodoDate;

    mainTodayDay.innerHTML = dayList[today.getDay()];
}

var clickedDate1 = document.getElementById(today.getDate());
clickedDate1.classList.add('active');
var prevBtn = document.getElementById('prev');
var nextBtn = document.getElementById('next');
prevBtn.addEventListener('click',prev);
nextBtn.addEventListener('click',next);
var tdGroup = [];
function clickStart(){
    for(let i = 1; i <= pageYear[first.getMonth()]; i++){
        tdGroup[i] = document.getElementById(i);
        tdGroup[i].addEventListener('click',changeToday);
    }
}
// 클릭이벤트가 처음 페이지 로드시 클릭 안되는 현상을 onload로 해결
window.onload = function() {
    clickStart();
}

function changeToday(e){
    for(let i = 1; i <= pageYear[first.getMonth()]; i++){
        if(tdGroup[i].classList.contains('active')){
            tdGroup[i].classList.remove('active');
        }
    }
    clickedDate1 = e.currentTarget;
    clickedDate1.classList.add('active');
    today = new Date(today.getFullYear(), today.getMonth(), clickedDate1.id);
    showMain();
    keyValue = today.getFullYear() + '' + today.getMonth()+ '' + today.getDate();
    reshowingList();
}