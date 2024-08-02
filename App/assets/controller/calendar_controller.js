function convertToTwoDigits(num) {
  // Convert the number to a string
  let numStr = num.toString();

  // Add a leading zero if the number is less than 10
  if (num < 10) {
    numStr = "0" + numStr;
  }

  return numStr;
}

function formatDate(date) {
  const day = date.getDate();
  const month = date.getMonth() + 1;
  const year = date.getFullYear();

  return `${year}-` + convertToTwoDigits(month) + `-` + convertToTwoDigits(day);
}

function getDate(str) {
  const date = new Date();

  return date;
}

function getMonthName(monthIndex) {
  const monthNames = [
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre",
  ];
  return monthNames[monthIndex];
}

function setCalendarNumbers(year, month) {
  const daysInMonth = new Date(year, month + 1, 0).getDate(); // Get total days in the current month
  const firstDayIndex = (new Date(year, month, 1).getDay() + 6) % 7; // Get the first day of the current month adjusted for Monday start
  const prevMonthDays = new Date(year, month, 0).getDate(); // Get total days in the previous month

  // Update month and year in the date-title section
  const monthElement = document.getElementById("month");
  const yearElement = document.getElementById("year");
  monthElement.textContent = getMonthName(month); // Function to get month name from an array
  yearElement.textContent = year.toString();

  let currentDate = new Date(year, month, 1); // Start with the first day of the current month
  currentDate.setDate(currentDate.getDate() - firstDayIndex); // Adjust to the start of the calendar display

  for (let i = 1; i <= 6; i++) {
    // Adjusted to 6 lines to handle any month
    const lineId = `line-${i}`;
    const lineElement = document.getElementById(lineId);

    if (lineElement) {
      lineElement.innerHTML = ""; // Clear existing content if any

      for (let j = 0; j < 7; j++) {
        // Each line has 7 days (one week)
        const li = document.createElement("li");
        const day = currentDate.getDate();
        const currentMonth = currentDate.getMonth();
        const currentYear = currentDate.getFullYear();

        li.textContent = day;

        li.id = formatDate(currentDate);
        if (currentMonth != month) {
          li.classList.add("other-month");
        }

        lineElement.appendChild(li);
        currentDate.setDate(currentDate.getDate() + 1); // Move to the next day
      }
    }
  }
}

async function loadBookedDates() {
  try {
    const requestURL =
      "https://arthurcrochemore.github.io/Gite-de-l-Orme/book.json";
    const request = new Request(requestURL);
    const response = await fetch(request);

    const json = await response.json();

    json.forEach((dateRange) => {
      markBookedDates(dateRange.start, dateRange.end);
    });
  } catch (error) {
    console.error("Failed to load booked dates:", error);
  }
}

function markBookedDates(startDate, endDate) {
  const start = new Date(startDate);
  const end = new Date(endDate);

  // Loop through each date and mark it as booked
  const currentDate = new Date(start);
  while (currentDate <= end) {
    // Format the ID the same way as it's set in setCalendarNumbers
    const elementId = formatDate(currentDate);

    // Find the element with the ID
    const element = document.getElementById(elementId);
    if (element) {
      element.classList.add("booked");
    }

    // Move to the next day
    currentDate.setDate(currentDate.getDate() + 1);
  }
}

document.addEventListener("DOMContentLoaded", function () {
  const currentDate = new Date();
  let month = currentDate.getMonth();
  let year = currentDate.getFullYear();

  setCalendarNumbers(year, month);
  loadBookedDates();

  document.getElementById("prev-month").addEventListener("click", function () {
    if (month === 0) {
      month = 11;
      year -= 1;
    } else {
      month -= 1;
    }
    setCalendarNumbers(year, month);
    loadBookedDates();
  });

  document.getElementById("next-month").addEventListener("click", function () {
    if (month === 11) {
      month = 0;
      year += 1;
    } else {
      month += 1;
    }
    setCalendarNumbers(year, month);
    loadBookedDates();
  });
});
