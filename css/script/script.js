cons date = new Date();

const renderCalender = () => {
  date.setDate(1);

  const monthDays= document.querySelector(".dys");

  const lastDay = new Date(
    date.getFullYear(),
    date.getMonth()+ 1,
    0
  ).getDate();

}
