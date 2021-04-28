<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
*{
  margin:0;
  padding:0;
  box-sizing: border-box;
  font-family:"Quicksand", sans-serif;

}
html{
  font-size: 62.5%;
}
.container{
  width: 100%;
  height: 100vh;
  color: white;
  display: flex;
  background-color: #12121f;
  justify-content: center;
  align-items:center;
}
.calendar{
  width: 45rem;
  height: 52rem;
  background-color: #222227;;
  background-shadow: 0 0.5rem 3rem rgba(0, 0, 0, 4);

}
.month{
  width: 100%;
  height: 12rem;
  background-color: #167e56;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 0 2rem;
  text-align: center;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
}
.month i{
  font-size: 2.5rem;
  cursor: pointer;
}
.month h1{
  font-size: 3rem;
  font-weight: 400;
  text-transform:  uppercase;
  letter-spacing: 0.2rem;
  margin-bottom: 1rem;
}
.month p{
  font-size: 1.6em;
}
.weekdays{
  width: 100%;
  height: 5rem;
  padding: 0 0.4rem;
  align-items: center;
  display:flex;
}
.weekdays div{
  font-weight: 400;
  font-size: 1.5rem;
  letter-spacing: 0.1rem;
  width: calc(44.2rem/7);
  display:flex;
  justify-content: center;
  align-items: center;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
}
.days{
  display: flex;
  flex-wrap: wrap;
  width: 100%;
  padding: 0.2rem;
}
.days div{
  margin: 0.3rem;
  font-size: 1.4rem;
  width: calc(40.2rem / 7);
  height: 5rem;
  display: flex;
  justify-content: center;
  align-items: center;
  text-shadow: 0 0.3rem 0.5rem rgba(0, 0, 0, 0.5);
  transition: background-color 0.2s;
}
.days div:hover:not(.today){
  background-color: #262626;
  border: 0.2rem solid #feab02;
  cursor: pointer;
}
.prev-date,
.next-date{
  opacity:0.4;
}
.today{
  background-color: #167e56;
}

</style>
</head>
<body>
<div class="container">
  <div class="calendar">
    <div class="month">
      <i class="fas fa-angle-left prev"></i>
      <div class="date">
        <h1></h1>
        <p></p>
      </div>
      <i class="fas fa-angle-right next"></i>
    </div>
    <div class="weekdays">
      <div>Sun</div>
      <div>Mon</div>
      <div>Tues</div>
      <div>Wed</div>
      <div>Thurs</div>
      <div>Fri</div>
      <div>Sat</div>
    </div>
    <div class="days">
    </div>
  </div>
</div>
<script src="css/script/script.js"></script>
</body>

</html>
