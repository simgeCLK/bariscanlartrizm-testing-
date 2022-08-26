<!DOCTYPE html>
<html lang="tr">
<head>
  <title>barışcanlar bilet al</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="~/FrontEndJS/jquery-ui-datepicker.min.js"></script>
<script src="~/FrontEndJS/datepicker-tr.js"></script>    
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
        
<body >
<style>    
@media only screen and (min-width: 600px) {
  #picture img {
    width: 100%;
    height: 480px !important;
  }
}

@media screen and (max-height: 600px) {
  .sidenav {
    padding-top: 15px;
  }
  .sidenav a {
    font-size: 18px;
  }
}

}
@keyframes scale {
  100% {
    transform: scale(1);
  }
}
@keyframes fade-in {
  100% {
    opacity: 1;
    filter: blur(0);
  }
}
#picture img {
  position: relative;
  width: 100%;
  height: 550px;
  display: block;
  margin: auto;
}
.Btitle {
  font-size: 26px;
  cursor: pointer;
  color: white;
  margin-left: 10px;
}
#category {
  font-size: 18px;
  margin-top: 24px;
}
.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(21 100 185 / 70%);
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}
.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 19px;
  color: #bfcee1;
  display: block;
  transition: 0.3s;
}
.sidenav a:hover {
  color: #f1f1f1;
}
.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}
.box {
  width: 700px;
  height: 50px;
}
.yellow {
  position: absolute;
  top: 40%;
  left: 20%;
  transform: translate(-50%, -50%);
  display: none;
  font-size: 50px;
}
body {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}
@media (max-width: 992px){
.ifrmtopdiv {
    padding: 0px;   
}
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab {
  float: left;
  border: 1px solid #ccc;
  background-color: #00409c;
  width: 22%;
  height: 245px;
  border-radius: 5px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: #0071ef;
  padding: 18px 30px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
  border-radius: 5px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #b2d3f3;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #bad5ec;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 78%;
  border-left: none;
  height: 245px;
  background-color:#ecf0f3;
  border-radius: 5px;
}
.button1{
  float:right;
}
.under{
  margin-top: 12px;
}
}
.ifrmtopdiv {
    background-color: #fcfcfc;
    height: 275px;
    position: relative;
    margin-top:315px;
    width: 66%;
    margin-left:240px;
    border-radius: 5px;
}

body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #00409c;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color:#b2d3f3;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color:  #bad5ec;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 24px 10px;
  border: 1px solid #ccc ;
  border-top: none;
  background-color:#ecf0f3;
}

/* Style the close button */
.topright {
  float: right;
  cursor: pointer;
  font-size: 28px;
}

.topright:hover {color: red;}

#mySelect{
  margin-left:50px;
  padding-top: 13px;
  padding-right: 65px;
}
.topic{
  margin-bottom: -12px;
  padding-left: 55px;
  font-size: 14px;
  font-family: Tahoma, sans-serif;

}
.button1{
  border-radius:12px;
  background-color:white;
  padding: 8px;
  padding-left: 12px;
  padding-right: 12px;
  margin-left: 65px;
  margin-top: 19px;
  background-color:#bad5ec;
}
.under{
  float:left;
}
.button2{
  float:right;
  margin-top: -50px;
  margin-right: 98px;
  padding-left: 80px;
  padding-right: 80px;
  border-radius: 12px;
  background-color:#bad5ec;
}
</style>
<div class="carousel-inner">
    <div class="carousel-item active" id="picture" >
    <img src="https://bilimgenc.tubitak.gov.tr/sites/default/files/ucak_ucmak.jpg">
   
  <nav class="fixed-top" id="nav" style="height:75px;margin-top:-2px;" >
    <ul class=" sticky-top">
    <div id="YanMenu" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">
         &times;</a>
      <a href="#">fotoğraf galerisi</a>
      <a href="#">baraj prosedürü </a>
      <a href="#">belgelerimiz</a>
      <a href="#">hava durumu</a>
      <a href="#">yol durumu </a>
      <a href="#">mesafeler </a>
    </div>
    <li class="row" id="category" >
      <a class="col-sm"  href="#">
      <p class="Btitle" id="title" onclick="openNav()">
      &#9776; BARIŞCANLAR TURİZM  </p> </a>
      <div class="col-sm-1">
      <div class="btn-group">
      <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">kurumsal</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">hakkımızda</a>
        <a class="dropdown-item" href="#">belgelerimiz</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2" >
      <div class="btn-group">
      <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">bilgi merkezi</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">barışcanlar mobil</a>
        <a class="dropdown-item" href="#">kişisel verilerin korunması hakkında</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
      <div class="btn-group">
      <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">rezervasyon işlemler</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">online rezervasyon</a>
        <a class="dropdown-item" href="#">rezervasyon iptali</a>
        <a class="dropdown-item" href="#">rezervasyonu sefere bağlama</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2"> 
      <div class="btn-group">
      <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">bilet işlemleri</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">e-bilet sorgulama</a>
        <a class="dropdown-item" href="#">bileti açığa alma</a>
        <a class="dropdown-item" href="#">açık bileti sefere bağlama</a>
          </div>
        </div>
      </div>
      <div class="col-sm-2">
      <div class="btn-group">
      <button type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown">iletişim</button>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#">merkezimiz</a>
        <a class="dropdown-item" href="#">şubelerimiz</a>
          </div>
        </div>
      </div>
</ul>
</nav>
</div>
<div class="ifrmtopdiv">
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'OnlineBilet')" id="defaultOpen">Online Bilet</button>
  <button class="tablinks" onclick="openCity(event, 'PNR')">PNR Ara</button>
  <button class="tablinks" onclick="openCity(event, 'Üye')">Üye Girişi</button>
  <button class="tablinks" onclick="openCity(event, 'MüşteriH')">Müşteri Hizmetleri</button>
</div>

<div id="OnlineBilet" class="tabcontent">
 <span class="topic">Tarih</span><br>
 <span id="mySelect"><input class="Tarih text-box single-line" data-val="true" data-val-date="The field Tarih must be a date." data-val-required="Tarih alanı gereklidir." id="Tarih" name="Tarih" type="datetime" value=""></span>
<p id="demo"></p>
<div class="under">
<span class="topic">nereden</span><br>
<select id="mySelect" onchange="myFunction()">
  <option value="Havaalanı">İzmir Havaalanı A.</option>
  <option value="Akbük">Akbük</option>
  <option value="Didim">Didim</option>
  <option value="Söke">Söke</option>
</select>
</div>
<div class="under">
<span class="topic">nereye</span><br>
<select id="mySelect" onchange="myFunction()">
  <option value="Akbük">Akbük</option>
  <option value="Bodrum">Bodrum Havaalanı</option>
  <option value="didim">Didim</option>
  <option value="havaalanı">İzmir Havaalanı</option>
  <option value="söke">Söke</option>
</select>
</div>
<button herf="#" class="button1"> Sefer Ara </button>
</div>

<div id="PNR" class="tabcontent">
<span class="topic">PNR No</span><br>
<input id="mySelect" onchange="myFunction()">
  <option value="Audi"></option>
</input>
<p id="demo"></p>
<span class="topic">Ad Soyad veya Tel. No</span><br>
<input id="mySelect" onchange="myFunction()">
  <option value="Audi"></option>
</input>
<button class="button2"> Ara </button>
</div>

<div id="Üye" class="tabcontent">
<div  class="button3"> <button> Üye girişi </button></div>
<div class="üye">
  <p>E-posta<input></input></p><br>
 <p>Parola<input></input></p> 
</div>
</div>
<div id="MüşteriH" class="tabcontent">
<select id="mySelect" onchange="myFunction()">
  <option value="Audi">Audi</option>
  <option value="BMW">BMW</option>
  <option value="Mercedes">Mercedes</option>
  <option value="Volvo">Volvo</option>
</select>
<p id="demo"></p>
</div>

</div>


<script>
function openNav() {
  document.getElementById("YanMenu").style.width = "250px";
}

function closeNav() {
  document.getElementById("YanMenu").style.width = "0";
}
function initialSetup() {
  if (document.getElementById("yellow") != null) {
    setTimeout(function() {
      document.getElementById('yellow').style.display = 'block';
    }, 1000);
  }
}

initialSetup();

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();

function myFunction() {
  var x = document.getElementById("mySelect").value;
  document.getElementById("demo").innerHTML = "You selected: " + x;
}

$(document).ready (function(){
        $('#Tarih').datepicker(
               {
                   format: "dd/mm/yyyy",                 
                   language:'tr',               
                   startDate: new Date()

               }).on('dp.change', function (e) {
                   $("#Tarih").datepicker('destroy').datepicker($.datepicker.regional['tr']);
                   $(this).data('DateTimePicker').hide();
               });
               $(".button3").click(function(){
                $(".üye").slideToggle("slow");
               });
});     

      
</script>

</body>
</html>