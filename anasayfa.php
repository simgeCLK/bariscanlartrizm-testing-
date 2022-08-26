<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<body >

<div class="carousel-inner">
    <div class="carousel-item active" id="picture" >
    <img src="https://bilimgenc.tubitak.gov.tr/sites/default/files/ucak_ucmak.jpg">
      <h1>
      <span>HER</span>
      <span>YERDE</span>
      <span>VE</span>
      <span>HER</span>
      <span>ZAMAN</span>
      <span>YANINIZDA...</span>
         </h1>
      <h2>
      <span>HAVAALANI</span>
      <span>TRANSFERLERİNDE</span>
      <span>DOĞRU</span>
      <span>ADRESS</span>
      <span>BARIŞCANLAR</span>
      <span>TURİZM</span>
      </h2>
    </div>
   
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

<ul class="d-flex"  >  
  <a class="kutu1" href="#"><p>SEFERLERİMİZ</p>
                       <p>sefer düzenlediğimiz güzergah,saat,fiyat ve otobüs özelliklerini detaylı bir şekilde inceleyebilirsiniz.</p>
                       </a>
  <a class="kutu2" herf="#"> <p>FİLOMUZ</p>
                      <p>filomuzda bulunan tüm araçlarımızın iletişim bilgilerine ulaşabilirsiniz</p>
                       </a>
  <a class="kutu3" herf="#"><p>İŞLEMLERİM</p>
                     <p>Almış olduğunuz biletlerin ve yaptığınız tüm işlem geçmişine buradan ulaşabilirisiniz.</p>
                     </a>
  <a class="kutu4"herf="#"><p>LOKASYONLAR</p>
                    <p>İzmir,Söke,Didim,Akbük</p>
                     </a>
</ul>

<div class="cardbottom">
  <h4 style="color:white;">LOKASYONLAR</h4>
  <div class="cardtop">
    <div id="demo" class="carousel slide" data-ride="carousel">
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        </ul>
    <div class="carousel-inner" id="pic">
      <div class="carousel-item active">
      <img src="https://mediaim.expedia.com/destination/1/6d72c6c95134bc7a878d5ba18b7c527a.jpg?impolicy=fcrop&w=536&h=384&q=high">
      </div>
      <div class="carousel-item">
      <img src="https://ak-d.tripcdn.com/images/100u14000000w6ejwFDE1_C_405_455_Q70.jpg_.webp?proc=source%2Ftrip" >
      </div>
      <div class="carousel-item">
      <img src="https://gezicini.com/wp-content/uploads/2019/08/akbuk111.jpg">
      </div>
      </div>
    </div>
  </div>
</div>
<div  id="görünür" >İZMİR,SÖKE,AKBÜK,DİDİM </div>
<div  id="graf" >Bu şehirlerdeki şubelerimiz ve seferlerimizle yanınızdayız. </div>

<div class="container-fluid" id="container"> 
<p >TÜM İŞLEMLERİNİZ ONLİNE.. </P>
<a href="sayfa1.php"><button >BİLET AL</button></a>
</div>
<div>
<div class="container d-flex " style="margin-left:80px;">
  <div class="card" style="width:400px;margin-top:70px;margin-right:90px;">
    <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu0ij3PD-HeMK2qJZ8J9kaCgx9lKylv1GdnQ&usqp=CAU" style="width:100%">
  </div>
  <div class="card" style="width:400px;margin-top:70px;">
    <img class="card-img-top" src="https://img3.travelagenciesfinder.com/888/696/2414211118886967.jpg" style="width:100%;height:550px;">
  </div>
</div>

<div class="row  d-flex justify-content-center mt-5 mb-5" id="footer">
    <div class="col-3 d-flex justify-content-center align-items-center flex-column">
        <p>LOCATION</p>
        <p>Altınkum Mah. Karakol Cad. No:9/B Didim/AYDIN/TÜRKİYE</p>
    
        <p>İZMİR/TURKEY</p>
    </div>
    <div class="col-3 d-flex justify-content-center align-items-center flex-column">
        <p>SOCIAL MEDIA</p>
        <div>
            <a href="http://twitter.com/bjk" target="_blank" style="color: black;"><i class="bi-twitter"></i></a><p>twitter</p>
            <a href="http://facebook.com/bjk" target="_blank" style="color: black;"  ><i class="bi-facebook"></i></a><p>facebook</p>
            <a href="http://instagram.com/bjk" target="_blank" style="color: black;"  ><i class="bi-instagram"></i></a><p>instagram</p>
        </div>
        
    </div>
    <div class="col-3 d-flex justify-content-center align-items-center flex-column">
        <p>ABOUT</p>
        <p>  Rezervasyon No: 0090 256 813 62 22
                           0090 256 813 24 62
                           0090 530 062 16 86</p>
        <p>   WhatsApp Hattı: 0090 530 062 16 87</p>
 
        <p>Ücretsiz Danışma Hattı: 0090 850 209 9 424
          info@bariscanlarturizm.com.tr</p>
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

$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll > 100){
      $('#nav').css('background-color', 'white');
      $('#title').css('color','#007bff');
    } else {
      $('#nav').css('background-color', '#00297b');
      $('#title').css('color','white');
    }
    if(scroll> 1000){
      $('#görünür').css('color','black');
    }else{
      $('#görünür').css('color','white');
    }
    if(scroll> 1160){
      $('#graf').css('color','black');
    }else{
      $('#graf').css('color','white');
    }
  });

</script>
 

</body>
</html>