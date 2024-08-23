"use client";
import React, { useState, useEffect } from "react";
import "../styles/style-disponibilites.css";

async function getReservations() {
  const reservations = await fetch("http://127.0.0.1:3000/reservations.json", {
    cache: "no-store",
  });

  const data = await reservations.json();
  return data as any[];
}

function getCurrentDate() {
  return new Date();
}

function getDaysInMonth(month, year) {
  return new Date(year, month, 0).getDate();
}

function getStartDayOfMonth(month, year) {
  return (new Date(year, month, 1).getDay() + 6) % 7;
}

function isDayReserved(day, reservations) {
  const currentDate = new Date(day.date); // Assuming day.date is a Date object

  return reservations.some((reservation) => {
    const startDate = new Date(reservation.start);
    const endDate = new Date(reservation.end);
    endDate.setDate(endDate.getDate() + 1);

    // Ensure that the reservation covers the current date
    return startDate < currentDate && endDate > currentDate;
  });
}

// Function to get the weeks of a month
function getWeeks(month, year, reservations) {
  const daysInMonth = getDaysInMonth(month, year);
  const daysInPreviousMonth = getDaysInMonth(
    (month + 11) % 12,
    year - (month === 0 ? 1 : 0),
  );
  const startDay = getStartDayOfMonth(month, year);
  const weeks = [];

  let day = 1 - startDay;
  for (let i = 0; i < 6; i++) {
    const week = [];
    for (let j = 0; j < 7; j++) {
      let currentDay;
      const currentDate = new Date(year, month, day);
      if (day > 0 && day <= daysInMonth) {
        currentDay = {
          date: new Date(year, month, day),
          isCurrentMonth: true,
          dayNumber: day,
          isReserved: isDayReserved({ date: currentDate }, reservations),
        };
      } else if (day <= 0) {
        currentDay = {
          date: new Date(year, month - 1, daysInPreviousMonth + day),
          isCurrentMonth: false,
          dayNumber: daysInPreviousMonth + day,
          isReserved: false,
        };
      } else {
        currentDay = {
          date: new Date(year, month + 1, day - daysInMonth),
          isCurrentMonth: false,
          dayNumber: day - daysInMonth,
          isReserved: false,
        };
      }
      week.push(currentDay);
      day++;
    }
    weeks.push(week);
  }

  return weeks;
}

// Function to get the formatted date string
function getDateFormat(date) {
  const months = [
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
  return `${months[date.getMonth()]} ${date.getFullYear()}`;
}

export default function Page() {
  const [currentDate, setCurrentDate] = useState(new Date());
  const [weeks, setWeeks] = useState([]);
  const [reservations, setReservations] = useState([]);

  // Fetch reservations and update state
  useEffect(() => {
    const fetchReservations = async () => {
      const data = await getReservations();
      setReservations(data);
      setWeeks(
        getWeeks(currentDate.getMonth(), currentDate.getFullYear(), data),
      );
    };

    fetchReservations();
  }, []);

  // Update weeks when currentDate or reservations change
  useEffect(() => {
    setWeeks(
      getWeeks(currentDate.getMonth(), currentDate.getFullYear(), reservations),
    );
  }, [currentDate, reservations]);

  const handlePrevMonth = () => {
    const newDate = new Date(
      currentDate.getFullYear(),
      currentDate.getMonth() - 1,
      1,
    );
    setCurrentDate(newDate);
  };

  const handleNextMonth = () => {
    const newDate = new Date(
      currentDate.getFullYear(),
      currentDate.getMonth() + 1,
      1,
    );
    setCurrentDate(newDate);
  };

  return (
    <div id="main" className="main-centered">
      <h1 id="title">Disponibilités :</h1>
      <hr />
      <div id="calendar" className="container">
        <div id="calendar-table">
          <div id="date-title">
            <button onClick={handlePrevMonth}>&lt;</button>
            <span>{getDateFormat(currentDate)}</span>
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
          {weeks.map((week, weekIndex) => (
            <ul key={weekIndex} className="week">
              {week.map((currentDay, dayIndex) => (
                <li
                  key={dayIndex}
                  id={`day-${weekIndex}-${dayIndex}`}
                  className={`day ${currentDay.isCurrentMonth ? "current-month" : "other-month"} ${currentDay.isReserved ? "booked" : ""}`}
                >
                  {currentDay.dayNumber}
                </li>
              ))}
            </ul>
          ))}
        </div>
      </div>
    </div>
  );
}
