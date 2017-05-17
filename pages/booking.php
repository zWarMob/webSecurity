<?php

include('../templates/mStart.php');

include('../templates/header.php');
?>

<div id="content" class="f-row-c">
<div class="calendar m-r-20">
  <div class="month">      
    <ul>
      <li class="prev">&#10094;</li>
      <li class="next">&#10095;</li>
      <li style="text-align:center">
        August<br>
        <span style="font-size:18px">2016</span>
      </li>
    </ul>
  </div>

  <ul class="weekdays">
    <li>Mo</li>
    <li>Tu</li>
    <li>We</li>
    <li>Th</li>
    <li>Fr</li>
    <li>Sa</li>
    <li>Su</li>
  </ul>

  <ul class="days">  
    <li>1</li>
    <li>2</li>
    <li>3</li>
    <li>4</li>
    <li>5</li>
    <li>6</li>
    <li>7</li>
    <li>8</li>
    <li>9</li>
    <li><span class="free">10</span></li>
    <li>11</li>
    <li>12</li>
    <li>13</li>
    <li><span class="free">14</span></li>
    <li><span class="free">15</span></li>
    <li><span class="free picked">16</span></li>
    <li><span class="free">17</span></li>
    <li>18</li>
    <li>19</li>
    <li>20</li>
    <li>21</li>
    <li>22</li>
    <li>23</li>
    <li>24</li>
    <li>25</li>
    <li>26</li>
    <li>27</li>
    <li>28</li>
    <li>29</li>
    <li>30</li>
    <li>31</li>
  </ul>
</div>
<div class="productConfirmation w-250 m-r-20 bg-dbdbdb">
  <br>
  <div class="line m-l-15 fw-bold fs-16px">products:</div>
  <div class="line m-r-20 m-l-15">
    <span class="pos-rel bg-dbdbdb zi-1">1 day (drill 200w bosh)</span>
    <span class="fl-r pos-rel bg-dbdbdb zi-1"> <span class="fw-bold">x</span> 20$</span>
    <span class="dotsExtended pos-abs zi-0">....................................</span>
  </div>
  <br><br>
  <div class="line m-r-20 m-l-15">.
    <span class="dotsExtended pos-abs zi-0">---------------------------------------------------------</span>
  </div>
  <br>
  <div class="total">
    Price : <span class="fl-r">20$</span><br>
    +20% VAT : <span class="fl-r">4$</span><br>
    TOTAL : <span class="fl-r">24$</span> 
  </div>
  <button class="fl-r m-r-20 w-100 m-t-10 fs-20px btn btn-success">Book</button>
</div>
<div class="product w-600">
  <div class="item clearfix bg-dbdbdb p-10">
    <div class="itemSpec w-300 fl-l m-r-20">
      <img class="img-max-300" src="https://upload.wikimedia.org/wikipedia/commons/8/88/LargeDrill.jpg">
      <div>
        <h2 class="fl-l fs-24px">drill 200w bosh</h2>
        <h2 class="fl-r fs-24px fw-normal"><span class="">20$</span>/day</h2>
      </div>
      <h3 class="fs-16px fw-bold">Højskolevej 26, København NV 2400 <i class='fa fa-map-marker' aria-hidden='true'></i></h3>
      <div>The drill is bla bla bla, very good, lorem ipsum dolorem sit wwwwwwwwwwwwwwwwwwwww</div>
    </div>
    <div class="personSpec fl-l f-cl-c">
      <img class="img-s-75" src="https://d30y9cdsu7xlg0.cloudfront.net/png/15724-200.png">
      <div class="personName">
        <h3 class="fl-l">Petyo Zhechev</h3>
        <img class="img-s-20 fl-l" src="http://www.gabbatracklistworld.com/img/online.png"> 
      </div>
      <div class='f-c m-0'>
                    <i class='fa fa-star fa-2 fa-star2' aria-hidden='true'></i>
                    <i class='fa fa-star fa-star2 fa-2' aria-hidden='true'></i>
                    <i class='fa fa-star fa-star2 fa-2' aria-hidden='true'></i>
                    <i class='fa fa-star fa-star2 fa-2' aria-hidden='true'></i>
                    <i class='fa fa-star-o fa-star-o2' aria-hidden='true'></i>
                </div>
                <div class="fbConfirmed">
                    <i class='fa fa-check-square-o' aria-hidden='true'></i>Facebook godkendt
                </div>
                <div class="phoneConfirmed">
                    <i class='fa fa-check-square-o' aria-hidden='true'></i>Mobilnr. verificeret
                </div>
                <div>
                  Tlf. og e-mail vises <br>efter bekræftet booking.
                </div>

    </div>
  </div>  
</div>
</div>

<?php

include('../templates/footer.php');

include('../templates/mEnd.php');

?>