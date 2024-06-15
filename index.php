<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calendar</title>
  </head>
  <body>
    <div id="calendar"></div>

    <script>
      function getDayInMonth(month, year) {
        return new Date(year, month, 0).getDate();
      }

      function createCalendar(month, year) {
        const calendar = document.querySelector("#calendar");
        calendar.innerHTML = "";
        let date = 1;
        const DayInMonth = getDayInMonth(month + 1, year);
        for (let i = 0; i < 6; i++) {
          let week = document.createElement("tr");
          for (let j = 0; j < 7; j++) {
            if (i === 0 && j < new Date(year, month, 1).getDay()) {
              let day = document.createElement("td");
              week.appendChild(day);
            } else if (date <= DayInMonth) {
              let day = document.createElement("td");
              day.innerText = date;
              week.appendChild(day);
              date++;
            } else {
              let day = document.createElement("td");
              week.appendChild(day);
            }
          }
          calendar.appendChild(week);
        }
      }

      const currentDate = new Date();
      createCalendar(currentDate.getMonth(), currentDate.getFullYear());
    </script>
  </body>
</html>
