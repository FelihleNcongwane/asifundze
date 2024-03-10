<?php
include '../config/core.php';
session_start();
check_login();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../style/style2.css">
    <link rel="stylesheet" href="../style/dashboard.css">
    <link rel="stylesheet" href="../style/allcourses.css">
    <link rel="shortcut icon" href="../images/z2.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Serif&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>

<body>
<div class="container1">
    <div class="one left">
        <a href="../index.html"><div class="brand"><h4 class="h4">asifundze</h4></div></a>

        <ul>
            <a href="dashboard.html"><li class="left-section selection"><img class="blue" src="../icons/home.svg">Dashboard</li></a>
            <a href="mycourses.html"><li class="left-section"><img src="../icons/menubook.svg">My Courses</li></a>
            <a href="allcourses.html"><li class="left-section"><img src="../icons/librarybooks.svg">All Courses</li></a>
            <a href="search.html"><li class="left-section"><img src="../icons/search.svg">Search List</li></a>
            <a href="editdetails.html"><li class="left-section"><img src="../icons/editn.svg">Edit Profile</li></a>
            <a href="logout.html"><li class="left-section Settings"><img src="../icons/logout.svg">Log Out</li></a>
        </ul>
    </div>
    <div class="one center overall">
        <div class="topnot">
            <div class="flex2">
                <img class='logo2' src='../images/morning.png'><h1 class='greet'>Good Day</h1>
            </div>

            <div class="tip"><?php echo $_SESSION['first_name']. ' '. $_SESSION['last_name']?>,
                <div class="tip2">Welcome to Asifundze, it's time to learn.</div>
            </div>
        </div>

        <div class='dashcontent'>
            <h5 class='lst_read_content'>
                <img src='../images/read.png' class='read' alt=''>
                <span class='lst_read_content_text'>
                    <span>
                        <span class='ferf'>HTML Basics 101: INTRODUCTION TO HTML</span><br/><br/>
                        <span class='ferf'>Beginner Level</span>
                    </span>
                </span>
                <span class='lst_read_content_text'>
                    <span class='links_to_text'><a href='./link.html?aq=$codeinsmall'>Continue Reading</a></span>
                </span>
            </h5>
        </div>

        <div class='dashcontent'>
            <h5 class='lst_read_content'>
                <img src='../images/test.png' class='read' alt=''>
                <span class='lst_read_content_text'><span><span class='ferf'>HTML Basics 101: INTRODUCTION TO HTML</span><br/><br/><span class='ferf'></span></span>
                </span>
                </span>
                <span class='lstq'><span class='gng'>Score: 9/10</span><img src='../images/pass.png' class='read' alt=''></span>
            </h5>
        </div>
    </div>


    <div class="one right">
        <div class="calendar"></div>
        <body onload="displayRandomQuote()">
        <div class="quotes" id="quote-container">
            <p id="quote-text"></p>
            <p id="quote-author"></p>
        </div>
        </body>
        <style>

            .quotes{
                margin-top: 60vh;
                padding: 2rem;
                font-weight: 600;
                font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
                opacity: 70%;
            }
        </style>

        <script>
          function CalendarControl() {
            const calendar = new Date();
            const calendarControl = {
              localDate: new Date(),
              prevMonthLastDate: null,
              calWeekDays: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
              calMonthName: [
                "Jan",
                "Feb",
                "Mar",
                "Apr",
                "May",
                "Jun",
                "Jul",
                "Aug",
                "Sep",
                "Oct",
                "Nov",
                "Dec"
              ],
              daysInMonth: function (month, year) {
                return new Date(year, month, 0).getDate();
              },
              firstDay: function () {
                return new Date(calendar.getFullYear(), calendar.getMonth(), 1);
              },
              lastDay: function () {
                return new Date(calendar.getFullYear(), calendar.getMonth() + 1, 0);
              },
              firstDayNumber: function () {
                return calendarControl.firstDay().getDay() + 1;
              },
              lastDayNumber: function () {
                return calendarControl.lastDay().getDay() + 1;
              },
              getPreviousMonthLastDate: function () {
                let lastDate = new Date(
                  calendar.getFullYear(),
                  calendar.getMonth(),
                  0
                ).getDate();
                return lastDate;
              },
              navigateToPreviousMonth: function () {
                calendar.setMonth(calendar.getMonth() - 1);
                calendarControl.attachEventsOnNextPrev();
              },
              navigateToNextMonth: function () {
                calendar.setMonth(calendar.getMonth() + 1);
                calendarControl.attachEventsOnNextPrev();
              },
              navigateToCurrentMonth: function () {
                let currentMonth = calendarControl.localDate.getMonth();
                let currentYear = calendarControl.localDate.getFullYear();
                calendar.setMonth(currentMonth);
                calendar.setYear(currentYear);
                calendarControl.attachEventsOnNextPrev();
              },
              displayYear: function () {
                let yearLabel = document.querySelector(".calendar .calendar-year-label");
                yearLabel.innerHTML = calendar.getFullYear();
              },
              displayMonth: function () {
                let monthLabel = document.querySelector(
                  ".calendar .calendar-month-label"
                );
                monthLabel.innerHTML = calendarControl.calMonthName[calendar.getMonth()];
              },
              selectDate: function (e) {
                console.log(
                  `${e.target.textContent} ${
                    calendarControl.calMonthName[calendar.getMonth()]
                  } ${calendar.getFullYear()}`
                );
              },
              plotSelectors: function () {
                document.querySelector(
                  ".calendar"
                ).innerHTML += `<div class="calendar-inner"><div class="calendar-controls">
                  <div class="calendar-prev"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M88.2 3.8L35.8 56.23 28 64l7.8 7.78 52.4 52.4 9.78-7.76L45.58 64l52.4-52.4z"/></svg></a></div>
                  <div class="calendar-year-month">
                  <div class="calendar-month-label"></div>
                  <div>-</div>
                  <div class="calendar-year-label"></div>
                  </div>
                  <div class="calendar-next"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="128" height="128" viewBox="0 0 128 128"><path fill="#666" d="M38.8 124.2l52.4-52.42L99 64l-7.77-7.78-52.4-52.4-9.8 7.77L81.44 64 29 116.42z"/></svg></a></div>
                  </div>
                  <div class="calendar-today-date">
                  <div id="calendar1">
                    <p id="date"></p>
                    <p id="time"></p>
                  </div>
                  </div>
                  <div class="calendar-body"></div></div>`;
              },
              plotDayNames: function () {
                for (let i = 0; i < calendarControl.calWeekDays.length; i++) {
                  document.querySelector(
                    ".calendar .calendar-body"
                  ).innerHTML += `<div>${calendarControl.calWeekDays[i]}</div>`;
                }
              },
              plotDates: function () {
                document.querySelector(".calendar .calendar-body").innerHTML = "";
                calendarControl.plotDayNames();
                calendarControl.displayMonth();
                calendarControl.displayYear();
                let count = 1;
                let prevDateCount = 0;

                calendarControl.prevMonthLastDate = calendarControl.getPreviousMonthLastDate();
                let prevMonthDatesArray = [];
                let calendarDays = calendarControl.daysInMonth(
                  calendar.getMonth() + 1,
                  calendar.getFullYear()
                );
                // dates of current month
                for (let i = 1; i < calendarDays; i++) {
                  if (i < calendarControl.firstDayNumber()) {
                    prevDateCount += 1;
                    document.querySelector(
                      ".calendar .calendar-body"
                    ).innerHTML += `<div class="prev-dates"></div>`;
                    prevMonthDatesArray.push(calendarControl.prevMonthLastDate--);
                  } else {
                    document.querySelector(
                      ".calendar .calendar-body"
                    ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                  }
                }
                //remaining dates after month dates
                for (let j = 0; j < prevDateCount + 1; j++) {
                  document.querySelector(
                    ".calendar .calendar-body"
                  ).innerHTML += `<div class="number-item" data-num=${count}><a class="dateNumber" href="#">${count++}</a></div>`;
                }
                calendarControl.highlightToday();
                calendarControl.plotPrevMonthDates(prevMonthDatesArray);
                calendarControl.plotNextMonthDates();
              },
              attachEvents: function () {
                let prevBtn = document.querySelector(".calendar .calendar-prev a");
                let nextBtn = document.querySelector(".calendar .calendar-next a");
                let todayDate = document.querySelector(".calendar .calendar-today-date");
                let dateNumber = document.querySelectorAll(".calendar .dateNumber");
                prevBtn.addEventListener(
                  "click",
                  calendarControl.navigateToPreviousMonth
                );
                nextBtn.addEventListener("click", calendarControl.navigateToNextMonth);
                todayDate.addEventListener(
                  "click",
                  calendarControl.navigateToCurrentMonth
                );
                for (var i = 0; i < dateNumber.length; i++) {
                    dateNumber[i].addEventListener(
                      "click",
                      calendarControl.selectDate,
                      false
                    );
                }
              },
              highlightToday: function () {
                let currentMonth = calendarControl.localDate.getMonth() + 1;
                let changedMonth = calendar.getMonth() + 1;
                let currentYear = calendarControl.localDate.getFullYear();
                let changedYear = calendar.getFullYear();
                if (
                  currentYear === changedYear &&
                  currentMonth === changedMonth &&
                  document.querySelectorAll(".number-item")
                ) {
                  document
                    .querySelectorAll(".number-item")
                    [calendar.getDate() - 1].classList.add("calendar-today");
                }
              },
              plotPrevMonthDates: function(dates){
                dates.reverse();
                for(let i=0;i<dates.length;i++) {
                    if(document.querySelectorAll(".prev-dates")) {
                        document.querySelectorAll(".prev-dates")[i].textContent = dates[i];
                    }
                }
              },
              plotNextMonthDates: function(){
               let childElemCount = document.querySelector('.calendar-body').childElementCount;
               //7 lines
               if(childElemCount > 42 ) {
                   let diff = 49 - childElemCount;
                   calendarControl.loopThroughNextDays(diff);
               }

               //6 lines
               if(childElemCount > 35 && childElemCount <= 42 ) {
                let diff = 42 - childElemCount;
                calendarControl.loopThroughNextDays(42 - childElemCount);
               }

              },
              loopThroughNextDays: function(count) {
                if(count > 0) {
                    for(let i=1;i<=count;i++) {
                        document.querySelector('.calendar-body').innerHTML += `<div class="next-dates">${i}</div>`;
                    }
                }
              },
              attachEventsOnNextPrev: function () {
                calendarControl.plotDates();
                calendarControl.attachEvents();
              },
              init: function () {
                calendarControl.plotSelectors();
                calendarControl.plotDates();
                calendarControl.attachEvents();
              }
            };
            calendarControl.init();
          }

          const calendarControl = new CalendarControl();
</script>






        <style>
              #calendar1 {
                padding: 0rem 3rem 0 3rem;
                font-family: Georgia, 'Times New Roman', Times, serif;
              text-align: center;
              color: black;
              background-color: white;
              font-weight: bolder
            }
        </style>

        <script>
          function displayDateTime() {
          var date = new Date();
          var dateString = date.toLocaleDateString();
          var timeString = date.toLocaleTimeString();
          document.getElementById("date").innerHTML = dateString;
          document.getElementById("time").innerHTML = timeString;
        }
        setInterval(displayDateTime, 1000);

        var quotes = [
              {
                quote: "The best way to predict the future is to create it.",
                author: "Abraham Lincoln"
              },
              {
                quote: "I have not failed. I've just found 10,000 ways that won't work.",
                author: "Thomas Edison"
              },
              {
                quote: "You miss 100% of the shots you don't take.",
                author: "Wayne Gretzky"
              },
              {
                quote: "Education is not the filling of a pail, but the lighting of a fire.",
                author: "William Butler Yeats"
              },
              {
                quote: "The best teacher is not the one who knows most but the one who is most capable of reducing knowledge to that simple compound of the obvious and wonderful.",
                author: "H.L. Mencken"
              },
              {
                quote: "The only way to do great work is to love what you do.",
                author: "Steve Jobs"
              },
              {
                quote: "An investment in knowledge pays the best interest.",
                author: "Benjamin Franklin"
              },
              {
                quote: "The purpose of education is to replace an empty mind with an open one.",
                author: "Malcolm Forbes"
              },
              {
                quote: "It is not that I’m so smart. But I stay with the questions much longer.",
                author: "Albert Einstein"
              },
              {
                quote: "The only person who is educated is the one who has learned how to learn and change.",
                author: "Carl Rogers"
              },
              {
                quote: "Learning is not attained by chance, it must be sought for with ardor and attended to with diligence.",
                author: "Abigail Adams"
              },
              {
                quote: "The more that you read, the more things you will know. The more that you learn, the more places you’ll go.",
                author: "Dr. Seuss"
              },
              {
                quote: "Education is not the learning of facts, it’s rather the training of the mind to think.",
                author: "Albert Einstein"
              },
              {
                quote: "The only real limitation on your abilities is the level of your desires. If you want it badly enough, there are no limits.",
                author: "Brian Tracy"
              },
              {
                quote: "The only thing that interferes with my learning is my education.",
                author: "Albert Einstein"
              },
              {
                quote: "Education is the most powerful weapon which you can use to change the world.",
                author: "Nelson Mandela"
              },
              {
                quote: "The best way to predict your future is to create it.",
                author: "Abraham Lincoln"
              },
              {
                quote: "The more that you study, the more you will learn. The more that you learn, the more places you’ll go.",
                author: "Dr. Seuss"
              },
              {
                quote: "The greatest glory in living lies not in never falling, but in rising every time we fall.",
                author: "Nelson Mandela"
              },
              {
                quote: "The function of education is to teach one to think intensively and to think critically. Intelligence plus character – that is the goal of true education.",
                author: "Martin Luther King Jr."
              }

            ];
            function displayRandomQuote() {
              var randomIndex = javascript.floor(javascript.random() * quotes.length);
              var selectedQuote = quotes[randomIndex];
              var quoteText = document.getElementById("quote-text");
              var quoteAuthor = document.getElementById("quote-author");
              quoteText.innerHTML = selectedQuote.quote;
              quoteAuthor.innerHTML = selectedQuote.author;
            }
            setInterval(displayRandomQuote, 20000);
        </script>

        <style>
            @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;200;300;400;500;600;700&display=swap');

            :root {
                --calendar-bg-color: #262829;
                --calendar-font-color: #FFF;
                --weekdays-border-bottom-color: #404040;
                --calendar-date-hover-color: #505050;
                --calendar-current-date-color: #1b1f21;
                --calendar-today-color: linear-gradient(to bottom, #03a9f4, #2196f3);
                --calendar-today-innerborder-color: transparent;
                --calendar-nextprev-bg-color: transparent;
                --next-prev-arrow-color : #FFF;
                --calendar-border-radius: 16px;
                --calendar-prevnext-date-color: #484848
            }

            .calendar {
                font-family: 'Times New Roman', Times, serif;
                position: absolute;
                right: 0px;
                top: 0rem;
                width: 18vw;
                color: black;
                box-sizing: border-box;
                overflow: hidden;
                font-weight: normal;
            }
            .right{
              background-color: #0d5dd724;
            }
            .calendar-inner {
                padding: 1vw;
            }
            .calendar .calendar-inner .calendar-body {
                display: grid;
                grid-template-columns: repeat(7, 1fr);
                /* text-align: center; */
            }
            .calendar .calendar-inner .calendar-body div {
                padding: 1px;
                min-height: 10px;
                line-height: 20px;
                border: 1px solid transparent;
                margin: 6px 1px 0px;
            }
            @media (max-width: 400px) {
              .calendar{
                display: none;
              }
            }
            .calendar .calendar-inner .calendar-body div:nth-child(-n+7) {
                border: 1px solid transparent;
                border-bottom: 1px solid var(--weekdays-border-bottom-color);
            }

            .calendar .calendar-inner .calendar-body div:nth-child(-n+7):hover {
                border: 1px solid transparent;
                border-bottom: 1px solid var(--weekdays-border-bottom-color);
            }

            .calendar .calendar-inner .calendar-body div>a {
                color: black;
                text-decoration: none;
                display: flex;
                justify-content: center;
            }

            .calendar .calendar-inner .calendar-body div:hover {
                border: 1px solid var(--calendar-date-hover-color);
                border-radius: 4px;
            }

            .calendar .calendar-inner .calendar-body div.empty-dates:hover {
                border: 1px solid transparent;
            }

            .calendar .calendar-inner .calendar-controls {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
            }

            .calendar .calendar-inner .calendar-today-date {
                display: grid;
                text-align: center;
                cursor: pointer;
                margin: 3px 0px;
                background: white;
                padding: 8px 0px;
                border-radius: 10px;
                width: 80%;
                margin: auto;
            }

            .calendar .calendar-inner .calendar-controls .calendar-year-month {
                display: flex;
                min-width: 100px;
                justify-content: space-evenly;
                align-items: center;
            }

            .calendar .calendar-inner .calendar-controls .calendar-next {
                text-align: right;
            }

            .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-year-label,
            .calendar .calendar-inner .calendar-controls .calendar-year-month .calendar-month-label {
                font-weight: 500;
                font-size: 20px;
            }

            .calendar .calendar-inner .calendar-body .calendar-today {
                background: black;
                border-radius: 4px;
            }

            .calendar .calendar-inner .calendar-body .calendar-today:hover {
                border: 1px solid transparent;
            }

            .calendar .calendar-inner .calendar-body .calendar-today a {
                outline: 2px solid var(--calendar-today-innerborder-color);
                color: white;
                background-size: cover;

            }

            .calendar .calendar-inner .calendar-controls .calendar-next a,
            .calendar .calendar-inner .calendar-controls .calendar-prev a {
                color: green;
                font-family: arial, consolas, sans-serif;
                font-size: 26px;
                text-decoration: none;
                padding: 4px 12px;
                display: inline-block;
                background: transparent;
                margin: 10px 0 10px 0;
            }

            .calendar .calendar-inner .calendar-controls .calendar-next a svg,
            .calendar .calendar-inner .calendar-controls .calendar-prev a svg {
                height: 20px;
                width: 20px;
            }

            .calendar .calendar-inner .calendar-controls .calendar-next a svg path,
            .calendar .calendar-inner .calendar-controls .calendar-prev a svg path{
                fill: black;
            }

            .calendar .calendar-inner .calendar-body .prev-dates,
            .calendar .calendar-inner .calendar-body .next-dates {
                color: #9e9494;
            }

            .calendar .calendar-inner .calendar-body .prev-dates:hover,
            .calendar .calendar-inner .calendar-body .next-dates:hover {
              border: 1px solid transparent;
              pointer-events: none;
            }
            .container1 {
              grid-template-columns: 15vw 67vw 18vw;
            }
        </style>
    </div>
</div>
</body>
   

</html>



