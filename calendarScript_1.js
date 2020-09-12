//캘린더 기본 정보 출력
var currentTitle = document.getElementById('current-year-month');
var calendarBody = document.getElementById('calendar-body');
var today = new Date();
var first = new Date(today.getFullYear(), today.getMonth(),1);
var dayList = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
var monthList = ['January','February','March','April','May','June','July','August','September','October','November','December'];
var leapYear=[31,29,31,30,31,30,31,31,30,31,30,31];
var notLeapYear=[31,28,31,30,31,30,31,31,30,31,30,31];
var pageFirst = first;
var pageYear;

if(first.getFullYear() % 4 === 0){
    pageYear = leapYear;
}else{
    pageYear = notLeapYear;
}

function showCalendar(){
    let monthCnt = 100;
    let cnt = 1;
    for(var i = 0; i < 6; i++){
        var $tr = document.createElement('tr');
        $tr.setAttribute('id', monthCnt);   
        for(var j = 0; j < 7; j++){
            if((i === 0 && j < first.getDay()) || cnt > pageYear[first.getMonth()]){
                var $td = document.createElement('td');
                $tr.appendChild($td);     
            }else{
                var $td = document.createElement('td');
                $td.textContent = cnt;
                $td.setAttribute('id', cnt);                
                $tr.appendChild($td);
                cnt++;
            }
        }
        monthCnt++;
        calendarBody.appendChild($tr);
    }
    //처음 로드시 캘린더 타이틀이 안보이는 문제 해결
    currentTitle.innerHTML = monthList[first.getMonth()] + '&nbsp;&nbsp;&nbsp;&nbsp;'+ first.getFullYear();

    //===============처음 로드시 왼쪽에 날짜가 안보이는 문제 해결(calendarScript_3펑션을 로드해도 안됨)
    today = new Date(today.getFullYear(), today.getMonth(), today.getDate());
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
    //================================================
}
showCalendar();

function removeCalendar(){
    let catchTr = 100;
    for(var i = 100; i< 106; i++){
        var $tr = document.getElementById(catchTr);
        $tr.remove();
        catchTr++;
    }
}