<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="idx-calendar">
 <div id="calendar-control">
  <div id="monthNow">Januari 2014</div>
  <div id="nextMonth"></div>
  <div id="prevMonth"></div>
 </div>
 <div id="dayNames">
  <ul>
   <li>Minggu</li>
   <li>Senin</li>
   <li>Selasa</li>
   <li>Rabu</li>
   <li>Kamis</li>
   <li>Jum'at</li>
   <li>Sabtu</li>
  </ul>
 </div>
 <div id="daysNum">
 </div>
</div>
1.
2.
3.
4.
5.
6.
7.
8.
9.
10.
11.
12.
13.
14.
15.
16.
17.
18.
19.
20.
21.
Untuk nama hari diatas bisa anda ganti dengan bahasa inggis atau yang lainya yang anda suka, setelah selesai dengan kode HTML nya kita lanjut dengan code css untuk membentuk betuk rupa kalendernya.

#idx-calendar {
    margin: 0 auto;
    max-width: 500px;
    text-align: center;
    width: 100%;
} 
#idx-calendar div > ul {
    list-style: none ;
    background-color: #333333;
    margin: 0;
    padding: 0 10px;
}
#idx-calendar #dayNames > ul {
    background-color: #232323;
}
#idx-calendar ul li {
    color: #FFFFFF;
    float: left;
    font-family: Tahoma;
    font-weight: inherit;
}
#dayNames ul li {
    font-weight: bold;
    margin: 2% 0;
    padding: 3% 0;
    width: 14.2857%;
}
#daysNum ul li:hover {
    background-color: #232323;
}
#daysNum ul li {
    padding: 2.5% 0;
    width: 14.2857%;
}
#dayNames,#daysNum {
    clear: both;
    width: 100%;
}
#dayNames:after,#daysNum:after,#idx-calendar div > ul:after  {
    content: "";
    display: table;
    clear: both;
}
#idx-calendar div > ul li:first-child {
    color: #F05558;
    font-weight: bold;
}
#idx-calendar li.dayNow {
    color: #0084B4 !important;
    font-weight: bold;
    background-color: #232323;
    position: relative;
    z-index: 2;
}
.monthNow {
    color: #0084B4;
    font-family: arial;
    font-size: 40px;
    text-align: left;
}
#monthNow {
    background-color:#4188D0;
    font-family: verdana;
    font-weight: bold;
    color: #FFFFFF;
    padding: 20px;
    text-transform: uppercase;
}
#calendar-control {
    position: relative;
}
#nextMonth, #prevMonth {
    transition:0.5s;
    background-color: #232323;
    color: #FFFFFF;
    font-family: verdana;
    height: 100%;
    position: absolute;
    right: 0;
    text-transform: uppercase;
    top: 0;
    width: 60px;
}
#prevMonth{
    left: 0;            
}
#prevMonth:before, #nextMonth:before {
    background-color: #4188D0;
    border-radius: 50%;
    transition:0.5s;
    border-right: 1px solid #FFFFFF;
    border-top: 1px solid #FFFFFF;
    content: "";
    display: block;
    height: 20px;
    left: 20px;
    position: relative;
    top: 18px;
    transform: rotate(45deg);
    width: 20px;
}
#prevMonth:before{
    transform: rotate(-135deg);
}
#nextMonth:hover, #prevMonth:hover{
    background-color: transparent;
}
#nextMonth:hover:before, #prevMonth:hover:before{
    border-radius: 0%;
}
</body>
</html>