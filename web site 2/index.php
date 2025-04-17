<!DOCTYPE html>
<html lang="tr">
<head>
    
    <meta charset="UTF-8">
    <title>Falcı Web Sitesi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://kit.fontawesome.com/c20485228a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Delius&display=swap" rel="stylesheet">


<link rel="stylesheet" href="owl/owl.carousel.min.css">
<link rel="stylesheet" href="owl/owl.theme.default.min.css">


</head>
<body> 

    <section id="menu"> 
        <div id="logo">Gizemli Falcı</div>
        <nav>
            <a href=""><i class="fa-solid fa-house ikon "></i>Anasayfa</a>
            <a href="#hakkımızda"><i class="fa-solid fa-info ikon"></i>Hakkımızda</a>
            <a href="#fal-türleri">Fal Türleri</a>
            <a href="#randevu-al"><i class="fa-solid fa-calendar-days" style="margin-right: 8px;"></i>Randevu Al</a>
            
        </nav>
    </section>

    <section id="anasayfa">
        <div id="black">

        </div>

        <div id="icerik">
                <h2>Gizemli Falcı</h2>
                <hr width="300 aling=left">
                <p>Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.
                     Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini
                      alarak karıştırdığı 1500'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. Beşyüz yıl boyunca varlığını sürdürmekle kalmamış,
                       aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. 1960'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda
                        Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.
                    </p>

        </div>

    </section> 

    <section id="hakkımızda">
        <h3>Hakkımızda</h3>

        <div class="container">
            <div id="sol">
                <h5 id="h5sol">Lorem Ipsum, dizgi ve baskı endüstrisinde
                     kullanılan mıgır metinlerdir.
                </h5>
            </div>

            <div id="sag">
                <span>L</span>
                <p id="psag">orem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak 
                </p>
            </div>

            <img src="img/about.jpg" alt=""
            class="img-fluid mt100">

            <p id="pson">Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı</p> 

        </div>

    </section>

    <section id="fal-türleri">
        <div class="container">

            <h3>Fal Türleri</h3>

            <div class="owl-carousel owl-theme">

               <div class="card item" data-merge="1.5" >
                <img src="img/tarot.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">TAROT FALI</h5>
                <p class="cardp">Kartlarla bakılan en popüler faldır.
                Sorulara cevap bulmak, geleceği görmek veya rehberlik almak için kullanılır.
                </p>
               </div> 
               
               <div class="card item" data-merge="1.5">
                <img src="img/kahve.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">KAHVE FALI</h5>
                <p class="cardp">Kahve içildikten sonra fincanda oluşan şekiller yorumlanır.

                    Genellikle geçmiş, şimdiki zaman ve gelecekle ilgili ipuçları verir.
                </p>
               </div> 


               <div class="card item" data-merge="1.5">
                <img src="img/elfalı.jpg" alt="" class="img-fluid">
                <h5 class="baslikcard">EL FALI (PALMİSTRY)</h5>
                <p class="cardp">Elin şekli, çizgileri ve parmak yapısı analiz edilir.

                    Kişinin karakteri ve gelecekteki olaylar hakkında bilgi verir.
                </p>
               </div> 


            </div>

        </div>

    </section>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

    <script src="owl/owl.carousel.min.js"></script>

    <script src="owl/script.js"></script>

    <section id="randevu-al">
        <div class="container">
            <h3 id="h3randevu-al">RANDEVU AL</h3>

            <form action="index.php" method="post">
            <div id="randevu-al-opak">
                <div id="formgroup">
                    <div id="solform">
                        <input type="text" name="isim" placeholder="Ad-Soyad"  class="form-control">
                        <input type="text" name="tel" placeholder="Telefon Numarası" required class="form-control">
                    </div>
                
                        <div id="sagform">
                            <input type="email" name="mail" placeholder="Email Adresiniz" required class="form-control">
                            <select id="fortune" name="fortune" required class="form-control">
                                <option value="" disabled selected>Seçiniz...</option>
                                <option value="Tarot Falı">Tarot Falı</option>
                                <option value="Kahve Falı">Kahve Falı</option>
                                <option value="El Falı">El Falı</option>
                                <option value="Astroloji Yorumu">Astroloji Yorumu</option>
                            </select>
                        </div>
                
                        <textarea name="mesaj" id="" cols="30" placeholder="Mesaj Giriniz" rows="10" class="form-control"></textarea>
                        <input type="submit" value="Randevu Al">        
                </div>
            </form>
                <div id="adres">

                    <h4 id="adresbaslik">Adres : </h4>
                    <p class="adresp">Kıbrıs/Girne</p>
                    <p class="adresp">Mersin Caddesi</p>
                    <p class="adresp">S.Kanat Sokak No:123</p>
                    <p class="adresp">0212 376 77 77</p>
                    <p class="adresp">gizemlifalci@gmail.com</p>


                </div>
            </div>

            <footer>

                <div id="copyrigth">&copy; 2025 Gizemli Falcı. Tüm hakları saklıdır.</div>
            
                <div id="socialfooter">

                    <a href="#"><i class="fab fa-facebook-f social"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g social"></i></a>
                    <a href="#"><i class="fab fa-twitter social"></i></a>
                </div>

                <a href="#menu"><i class="fas fa-angle-up" id="up"></i></a>
            </footer>

        </div>

    </section>



    

</body>

</html>



<?php

include("baglanti.php");


if (isset($_POST["isim"], $_POST["tel"], $_POST["mail"], $_POST["fortune"], $_POST["mesaj"])) {
    
    $adsoyad = $_POST["isim"];
    $telefon = $_POST["tel"];
    $email = $_POST["mail"];
    $fortune = $_POST["fortune"];
    $mesaj = $_POST["mesaj"];
    
    // E-posta formatı kontrolü
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Geçersiz e-posta adresi!')</script>";
        exit; // Hatalı e-posta formatı olduğunda işlem durdurulur
    }
   

    // XSS Koruması: Kullanıcı verisini güvenli hale getirme
    $adsoyad = htmlspecialchars($adsoyad, ENT_QUOTES, 'UTF-8');
    $telefon = htmlspecialchars($telefon, ENT_QUOTES, 'UTF-8');
    $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
    $fortune = htmlspecialchars($fortune, ENT_QUOTES, 'UTF-8');
    $mesaj = htmlspecialchars($mesaj, ENT_QUOTES, 'UTF-8');
    
    // Veritabanına veri ekleme
    $stmt = $baglan->prepare("INSERT INTO randevu (adsoyad, telefon, email, falturu, mesaj) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $adsoyad, $telefon, $email, $fortune, $mesaj);
    
    if ($stmt->execute()) {
        echo "<script>alert('Mesajınız başarıyla gönderilmiştir.')</script>";
    } else {
        echo "<script>alert('Bir hata oluştu: " . $stmt->error . "')</script>";
    }

    $stmt->close();
}
?>
