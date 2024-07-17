function formatDate(date) {
  const day = date.getDate();
  const month = date.getMonth() + 1; // Les mois commencent à 0 en JS
  const year = date.getFullYear();

  return `${year}-${month}-${day}`;
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

  let dayCounter = 1;
  let nextMonthDayCounter = 1;

  for (let i = 1; i <= 6; i++) {
    // Adjusted to 6 lines to handle any month
    const lineId = `line-${i}`;
    const lineElement = document.getElementById(lineId);

    if (lineElement) {
      lineElement.innerHTML = ""; // Clear existing content if any

      for (let j = 0; j < 7; j++) {
        // Each line has 7 days (one week)
        const li = document.createElement("li");

        // Check if the day belongs to the previous month
        if (i === 1 && j < firstDayIndex) {
          let day = prevMonthDays - firstDayIndex + j + 1;

          li.textContent = day;
          li.classList.add("other-month");
          li.classList.add(`${year}-${month === 0 ? 12 : month}-${day}`);
        }
        // Check if the day belongs to the current month
        else if (dayCounter <= daysInMonth) {
          let day = dayCounter++;

          li.textContent = day;
          li.classList.add(`${year}-${month + 1}-${day}`);
        }
        // Remaining days belong to the next month
        else {
          let day = nextMonthDayCounter++;

          li.textContent = day;
          li.classList.add("other-month");
          li.classList.add(`${year}-${month + 2}-${day}`);
        }

        lineElement.appendChild(li);
      }
    }
  }
}

function loadBookedDates() {
  //const bookedDatesFile = "book.json";

  /*fetch(bookedDatesFile)
    .then((response) => response.json())
    .then((data) => {
      // Process the booked dates from JSON data
      data.forEach((dateRange) => {
        markBookedDates(dateRange.start, dateRange.end);
      });
    })
    .catch((error) => console.error("Error fetching booked dates:", error));*/
  const bookedDates = [
    {
      start: "2024-07-01",
      end: "2024-07-13",
    },
    {
      start: "2024-07-17",
      end: "2024-07-21",
    },
    {
      start: "2024-07-27",
      end: "2024-07-01",
    },
  ];

  bookedDates.forEach((dateRange) => {
    markBookedDates(dateRange.start, dateRange.end);
  });
}

function markBookedDates(startDate, endDate) {
  const start = new Date(startDate);
  const end = new Date(endDate);

  console.log(start + " - " + end);

  // Loop through each date and mark it as booked
  const currentDate = new Date(start);
  while (currentDate <= end) {
    const day = currentDate.getDate();
    const month = currentDate.getMonth() + 1; // Les mois commencent à 0 en JS
    const year = currentDate.getFullYear();

    // Format the ID the same way as it's set in setCalendarNumbers
    const elementId = `${year}-${month}-${day}`;

    // Find the element with the ID
    const element = document.querySelector(`.${elementId}`);
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
