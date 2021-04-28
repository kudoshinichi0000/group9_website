cons date = new Date();

const renderCalender = () => {
  date.setDate(1);

  const monthDays= document.querySelector(".dys");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth()+ 1,
    0
  ).getDate();

const prevLastDay = new Date(
  date.getFullYear(),
  date.getMonth(),
  0
).getDate();

const nextDays = 7 - lastDayIndex - 1;

const months =[
  "January",
  "February"
]
}
