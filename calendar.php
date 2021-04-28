<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="calendar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap">
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
  height: 100%;
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
.wkdys{
  width: 100%;
  height: 5rem;
  padding: 0 0.4rem;
  align-items: center;
  display:flex;
}
.wkdys div{
  font-weight: 400;
  font-size: 1.5rem;
}

</style>
</head>
<body>
<div class="container">
  <div class="calendar">
    <div class="month">
      <i class="fas fa-angle-left prev"></i>
      <div class="date">
        <h1> May</h1>
        <p> Fri May 7, 2021</p>
      </div>
      <i class="fas fa-angle-right next"></i>
    </div>
    <div class="wkdys">
      <div>Sun</div>
      <div>Mon</div>
      <div>Tues</div>
      <div>Wed</div>
      <div>Thurs</div>
      <div>Fri</div>
      <div>Sat</div>
    </div>
    <div class="days">
      <div class="PrevDt">6</div>
      <div class="PrevDt">7</div>
      <div class="PrevDt">8</div>
      <div class="PrevDt">9</div>
      <div class="PrevDt">10</div>
      <div class="PrevDt">11</div>
      <div class="PrevDt">12</div>
      <div class="PrevDt">14</div>
      <div class="PrevDt">15</div>
      <div class="PrevDt">16</div>
      <div class="PrevDt">17</div>
      <div class="PrevDt">18</div>
      <div class="PrevDt">19</div>
      <div class="PrevDt">20</div>
      <div class="PrevDt">21</div>
      <div class="PrevDt">22</div>
      <div class="PrevDt">23</div>
      <div class="PrevDt">24</div>
      <div class="PrevDt">25</div>
      <div class="PrevDt">26</div>
      <div class="PrevDt">27</div>
      <div class="PrevDt">28</div>
      <div class="PrevDt">29</div>
      <div class="PrevDt">30</div>
      <div class="PrevDt">31</div>
      <div>1</div>
      <div>2</div>
      <div>3</div>
      <div>4</div>
      <div>5</div>
      <div>6</div>
      <div>7</div>
      <div>8</div>
      <div>9</div>
      <div>10</div>
      <div>11</div>
      <div>12</div>
      <div>13</div>
      <div>14</div>
      <div>15</div>
      <div>16</div>
      <div>17</div>
      <div>18</div>
      <div>19</div>
      <div>20</div>
      <div>21</div>
      <div>22</div>
      <div>23</div>
      <div>24</div>
      <div>25</div>
      <div>26</div>
      <div>27</div>
      <div>28</div>
      <div>29</div>
      <div>30</div>
      <div class="NextDt">1</div>
      <div class="NextDt">2</div>
      <div class="NextDt">3</div>
      <div class="NextDt">4</div>
      <div class="NextDt">5</div>
      <div class="NextDt">6</div>
      <div class="NextDt">1</div>
      <div class="NextDt">1</div>
      <div class="NextDt">1</div>
      <div class="NextDt">1</div>
      <div class="NextDt">1</div>
      <div class="NextDt">1</div>
    </div>
  </div>
</div>

<script src="script.js"></script>
</body>
</html>
