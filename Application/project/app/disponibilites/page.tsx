import React, { useEffect, useCallback } from "react";
import "../styles/style-disponibilites.css";

const Page = () => {
  let month = new Date().getMonth();
  let year = new Date().getFullYear();
  let calendar = [];
  let bookedDates = new Set();

  const setMonth = (newMonth) => {
    month = newMonth;
  };
  const setYear = (newYear) => {
    year = newYear;
  };
  const setCalendar = (newCalendar) => {
    calendar = newCalendar;
  };
  const setBookedDates = (newBookedDates) => {
    bookedDates = newBookedDates;
  };

  const convertToTwoDigits = (num) => (num < 10 ? `0${num}` : num.toString());

  const formatDate = (date) => {
    const day = date.getDate();
    const month = date.getMonth() + 1;
    const year = date.getFullYear();
    return `${year}-${convertToTwoDigits(month)}-${convertToTwoDigits(day)}`;
  };

  const getMonthName = (monthIndex) => {
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
  };

  const setCalendarNumbers = useCallback((year, month) => {
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
          date: formatDate(currentDate),
          isOtherMonth: currentMonth !== month,
        });
        currentDate.setDate(currentDate.getDate() + 1);
      }
      newCalendar.push(week);
    }

    setCalendar(newCalendar);
  }, []);

  const loadBookedDates = useCallback(async () => {
    try {
      const response = await fetch(
        "https://arthurcrochemore.github.io/Gite-de-l-Orme/book.json",
      );
      const json = await response.json();
      json.forEach((dateRange) =>
        markBookedDates(dateRange.start, dateRange.end),
      );
    } catch (error) {
      console.error("Failed to load booked dates:", error);
    }
  }, []);

  const markBookedDates = useCallback(
    (startDate, endDate) => {
      const start = new Date(startDate);
      const end = new Date(endDate);
      const newBookedDates = new Set(bookedDates);
      let currentDate = new Date(start);
      while (currentDate <= end) {
        newBookedDates.add(formatDate(currentDate));
        currentDate.setDate(currentDate.getDate() + 1);
      }
      setBookedDates(newBookedDates);
    },
    [bookedDates],
  );

  useEffect(() => {
    setCalendarNumbers(year, month);
    loadBookedDates();
  }, [month, year, setCalendarNumbers, loadBookedDates]);

  const handlePrevMonth = () => {
    setMonth((prevMonth) => {
      if (prevMonth === 0) {
        setYear((prevYear) => prevYear - 1);
        return 11;
      } else {
        return prevMonth - 1;
      }
    });
  };

  const handleNextMonth = () => {
    setMonth((prevMonth) => {
      if (prevMonth === 11) {
        setYear((prevYear) => prevYear + 1);
        return 0;
      } else {
        return prevMonth + 1;
      }
    });
  };

  return (
    <div id="main" className="main-centered">
      <h1 id="title">Disponibilites :</h1>
      <hr />
      <div id="calendar" className="container">
        <div id="calendar-table">
          <div id="date-title">
            <button onClick={handlePrevMonth}>&lt;</button>
            <h2 id="month">{getMonthName(month)}</h2>
            <h2 id="year">{year}</h2>
            <button onClick={handleNextMonth}>&gt;</button>
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

          {calendar.map((week, index) => (
            <ul key={index} id={`line-${index + 1}`} className="line">
              {week.map((day) => (
                <li
                  key={day.date}
                  id={day.date}
                  className={day.isOtherMonth ? "other-month" : ""}
                >
                  {day.day}
                </li>
              ))}
            </ul>
          ))}
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
};

export default Page;
