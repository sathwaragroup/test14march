<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Custom Calendar</title>
  
  <style type="text/css">
    body {
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  margin: 0;
  background-color: #f0f0f0;
}

#calendar {
  width: 100%;
  max-width: 600px;
  background-color: white;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.calendar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 20px;
}

#calendarMonthYear {
  font-size: 1.5em;
}

button {
  padding: 5px 10px;
  font-size: 1em;
  cursor: pointer;
  border: 1px solid #ccc;
  background-color: #fff;
  border-radius: 4px;
}

button:hover {
  background-color: #f0f0f0;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  text-align: center;
  padding: 10px;
  width: 14.28%;
}

td {
  cursor: pointer;
}

td:hover {
  background-color: #f0f0f0;
}

.event {
  background-color: #ffeb3b;
  padding: 2px;
  border-radius: 4px;
  font-size: 0.8em;
}

  </style>
</head>
<body>
  <div id="calendar">
    <div class="calendar-header">
      <button id="prevMonth">Prev</button>
      <h2 id="calendarMonthYear"></h2>
      <button id="nextMonth">Next</button>
    </div>
    <table id="calendarTable">
      <thead>
        <tr>
          <th>Sun</th>
          <th>Mon</th>
          <th>Tue</th>
          <th>Wed</th>
          <th>Thu</th>
          <th>Fri</th>
          <th>Sat</th>
        </tr>
      </thead>
      <tbody></tbody>
    </table>
  </div>
  <script >
    const calendarTable = document.querySelector("#calendarTable tbody");
const monthYearDisplay = document.getElementById("calendarMonthYear");
const prevMonthButton = document.getElementById("prevMonth");
const nextMonthButton = document.getElementById("nextMonth");

let currentDate = new Date();

function renderCalendar(date) {
  const month = date.getMonth();
  const year = date.getFullYear();

  // Set the header to show the current month and year
  monthYearDisplay.textContent = `${date.toLocaleString("default", { month: "long" })} ${year}`;

  // Get the first day of the month and number of days in the month
  const firstDayOfMonth = new Date(year, month, 1);
  const lastDayOfMonth = new Date(year, month + 1, 0);
  const totalDaysInMonth = lastDayOfMonth.getDate();
  const firstDayOfWeek = firstDayOfMonth.getDay();

  // Clear the previous calendar
  calendarTable.innerHTML = "";

  // Create empty cells for the previous month (if any) and the current month
  let dayCounter = 1;

  // Fill the calendar with the correct days
  for (let row = 0; row < 6; row++) {
    const rowElement = document.createElement("tr");

    for (let col = 0; col < 7; col++) {
      const cellElement = document.createElement("td");

      // Add empty cells before the start of the month
      if (row === 0 && col < firstDayOfWeek) {
        rowElement.appendChild(cellElement);
      }
      // Fill cells with dates
      else if (dayCounter <= totalDaysInMonth) {
        cellElement.textContent = dayCounter;
        cellElement.addEventListener("click", () => alert(`You clicked on ${dayCounter} ${month + 1}/${year}`));
        rowElement.appendChild(cellElement);
        dayCounter++;
      }
    }

    calendarTable.appendChild(rowElement);
  }
}

function goToPrevMonth() {
  currentDate.setMonth(currentDate.getMonth() - 1);
  renderCalendar(currentDate);
}

function goToNextMonth() {
  currentDate.setMonth(currentDate.getMonth() + 1);
  renderCalendar(currentDate);
}

prevMonthButton.addEventListener("click", goToPrevMonth);
nextMonthButton.addEventListener("click", goToNextMonth);

// Initial render
renderCalendar(currentDate);



  </script>
</body>
</html>
