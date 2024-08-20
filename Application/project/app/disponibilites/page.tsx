import React from "react";
import "../styles/style-disponibilites.css";

class Page extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      month: new Date().getMonth(),
      year: new Date().getFullYear(),
    };
  }

  convertToTwoDigits(num) {
    return num < 10 ? `0${num}` : num.toString();
  }

  formatDate(date) {
    const day = date.getDate();
    const month = date.getMonth() + 1;
    const year = date.getFullYear();
    return `${year}-${this.convertToTwoDigits(month)}-${this.convertToTwoDigits(day)}`;
  }

  getMonthName(monthIndex) {
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

  setCalendarNumbers(year, month) {
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    const firstDayIndex = (new Date(year, month, 1).getDay() + 6) % 7;

    const newCalendar = [];
    let currentDate = new Date(year, month, 1);
    currentDate.setDate(currentDate.getDate() - firstDayIndex);

    for (let i = 0; i < 6; i++) {
      const week = [];
      for (let j = 0; j < 7; j++) {
        const day = currentDate.getDate();
        const currentMonth = currentDate.getMonth();
        week.push({
          day,
          date: this.formatDate(currentDate),
          isOtherMonth: currentMonth !== month,
        });
        currentDate.setDate(currentDate.getDate() + 1);
      }
      newCalendar.push(week);
    }

    this.updateCalendar(newCalendar);
  }

  async loadBookedDates() {
    try {
      const response = await fetch(
        "https://arthurcrochemore.github.io/Gite-de-l-Orme/book.json",
      );
      const json = await response.json();
      json.forEach((dateRange) =>
        this.markBookedDates(dateRange.start, dateRange.end),
      );
    } catch (error) {
      console.error("Failed to load booked dates:", error);
    }
  }

  markBookedDates(startDate, endDate) {
    const start = new Date(startDate);
    const end = new Date(endDate);
    const bookedDates = new Set();
    let currentDate = new Date(start);
    while (currentDate <= end) {
      bookedDates.add(this.formatDate(currentDate));
      currentDate.setDate(currentDate.getDate() + 1);
    }
    this.updateBookedDates(bookedDates);
  }

  updateCalendar(calendar) {
    for (let i = 1; i <= 6; i++) {
      const lineElement = document.getElementById(`line-${i}`);
      if (lineElement) {
        lineElement.innerHTML = "";
        calendar[i - 1].forEach((day) => {
          const li = document.createElement("li");
          li.textContent = day.day;
          li.id = day.date;
          if (day.isOtherMonth) li.classList.add("other-month");
          lineElement.appendChild(li);
        });
      }
    }
  }

  updateBookedDates(bookedDates) {
    bookedDates.forEach((date) => {
      const element = document.getElementById(date);
      if (element) {
        element.classList.add("booked");
      }
    });
  }

  handlePrevMonth = () => {
    this.setState(
      (prevState) => {
        let { month, year } = prevState;
        if (month === 0) {
          month = 11;
          year -= 1;
        } else {
          month -= 1;
        }
        return { month, year };
      },
      () => {
        this.setCalendarNumbers(this.state.year, this.state.month);
        this.loadBookedDates();
      },
    );
  };

  handleNextMonth = () => {
    this.setState(
      (prevState) => {
        let { month, year } = prevState;
        if (month === 11) {
          month = 0;
          year += 1;
        } else {
          month += 1;
        }
        return { month, year };
      },
      () => {
        this.setCalendarNumbers(this.state.year, this.state.month);
        this.loadBookedDates();
      },
    );
  };

  componentDidMount() {
    this.setCalendarNumbers(this.state.year, this.state.month);
    this.loadBookedDates();
  }

  render() {
    return (
      <div id="main" className="main-centered">
        <h1 id="title">Disponibilites :</h1>
        <hr />
        <div id="calendar" className="container">
          <div id="calendar-table">
            <div id="date-title">
              <button onClick={this.handlePrevMonth}>&lt;</button>
              <h2 id="month">{this.getMonthName(this.state.month)}</h2>
              <h2 id="year">{this.state.year}</h2>
              <button onClick={this.handleNextMonth}>&gt;</button>
            </div>

            <ul id="week-days">
              <li>Lundi</li>
              <li>Mardi</li>
              <li>Mercredi</li>
              <li>Jeudi</li>
              <li>Vendredi</li>
              <li>Samedi</li>
              <li>Dimanche</li>
            </ul>

            <ul id="line-1" className="line"></ul>
            <ul id="line-2" className="line"></ul>
            <ul id="line-3" className="line"></ul>
            <ul id="line-4" className="line"></ul>
            <ul id="line-5" className="line"></ul>
            <ul id="line-6" className="line"></ul>
          </div>

          <div id="calendar-legend">
            <h3>Légende :</h3>
            <ul id="line-example" className="line">
              <li className="legend-item booked">Réservé</li>
              <li className="legend-item free">Libre</li>
            </ul>
          </div>
        </div>
      </div>
    );
  }
}

export default Page;
