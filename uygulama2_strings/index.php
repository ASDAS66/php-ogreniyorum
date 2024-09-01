<?php

    const title = "POPÜLER KURSLAR";
    $kurs1_baslik="Node.js Kursu";
    $kurs1_altBaslik="Sıfırdan ileri seviye Node.js ile web geliştirme";
    $kurs1_resim="node.jpg";
    $kurs1_yayinTarihi="01.01.2023";
    $kurs1_yorumSayisi= "100";
    $kurs1_begeniSayisi= "300";

    $kurs2_baslik= "PHP Kursu";
	$kurs2_altBaslik= "Sıfırdan ileri seviye PHP prrogramlama";
	$kurs2_resim = "php.JPG";
	$kurs2_yayinTarihi="03.03.2023";
	$kurs2_yorumSayisi= "200";
	$kurs2_begeniSayisi= "400";

    $kurs3_baslik= "python Kursu";
	$kurs3_altBaslik="Sıfırdan ileri seviye python ile web geliştirme";
	$kurs3_resim= "python.jpg";
	$kurs3_yayinTarihi= "05.05.2023";
	$kurs3_yorumSayisi= "300";
	$kurs3_begeniSayisi= "500";

    $kurs1_baslik = ucfirst(strtolower($kurs1_baslik));
    $kurs2_baslik = ucfirst(strtolower($kurs1_baslik));
    $kurs3_baslik = ucfirst(strtolower($kurs1_baslik));

    //belli bir aralıktan sonrasına ... koyar
    $kurs1_altBaslik = substr($kurs1_altBaslik,0,50)."...";
    $kurs2_altBaslik = substr($kurs1_altBaslik,0,50)."...";
    $kurs3_altBaslik = substr($kurs1_altBaslik,0,50)."...";

    //kursların baslık bilgileriyle url oluşturur
    $kurs1_url = str_replace( [" ","ğ","ü","ş","ö","ç","ı","."] , ["-","g","u","s","o","c","i",""] , strtolower( $kurs1_baslik ));
    $kurs2_url = str_replace( [" ","ğ","ü","ş","ö","ç","ı","."] , ["-","g","u","s","o","c","i",""] , strtolower( $kurs2_baslik ));
    $kurs3_url = str_replace( [" ","ğ","ü","ş","ö","ç","ı","."] , ["-","g","u","s","o","c","i",""] , strtolower( $kurs3_baslik ));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <div class="container my-3">
        <h1 class="mb-3"> <?php echo title; ?></h1>
        <!--CARD 1-->
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim;?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url;?>" ><?php echo $kurs1_baslik;?></a>
                        </h5>
                        <h3 class="card-title"><?php echo $kurs1_altBaslik;?></h3>
                        <p class="card-text">Node.js kursu, JavaScript programlama dilini kullanarak sunucu tarafında güçlü, ölçeklenebilir ve yüksek performanslı uygulamalar geliştirmek isteyenler için tasarlanmıştır. Bu kurs, Node.js'in temel prensiplerinden başlayarak, asenkron programlama, Express.js ile web uygulamaları geliştirme, API oluşturma, veri tabanı entegrasyonu ve gerçek zamanlı uygulamalar oluşturma gibi ileri düzey konulara kadar geniş bir yelpazeyi kapsar. Kurs dâhilinde, gerçek dünya projeleriyle Node.js'in gücünü deneyimleyerek, modern web geliştirme dünyasında aranan bir backend geliştirici olmanız için gereken tüm becerileri edineceksiniz.
                        </p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                               Beğeni: <?php echo $kurs1_begeniSayisi; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurs1_yorumSayisi; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>

        <!--CARD 2-->
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/php.jpg" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                    <h5 class="card-title">
                            <a href="<?php echo $kurs2_url;?>" ><?php echo $kurs2_baslik;?></a>
                        </h5>
                        <h3 class="card-title"><?php echo $kurs2_altBaslik;?></h3>
                        <p class="card-text">PHP kursu, web geliştirme alanında dinamik ve 
                            etkileşimli web siteleri oluşturmak için gerekli olan PHP programlama 
                            dilini öğrenmenizi sağlar. Temel syntax tan veri tabanı bağlantılarına
                            kadar geniş bir konuyu kapsar, gerçek dünya projeleri ile uygulamalı beceriler 
                            kazandırır ve profesyonel web geliştiricisi olmanız için güçlü bir temel sunar.
                        </p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                               Beğeni: <?php echo $kurs2_begeniSayisi; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurs2_yorumSayisi; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>

        <!--CARD 3-->
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/python.jpg" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs2_url;?>" ><?php echo $kurs2_baslik;?></a>
                        </h5>
                        <h3 class="card-title"><?php echo $kurs3_altBaslik;?></h3>
                        <p class="card-text">Python kursu, basit ve okunabilir sözdizimi ile güçlü
                         bir programlama dili olan Pythonu öğretir. Veri analizi, web geliştirme, 
                         yapay zeka ve otomasyon gibi geniş uygulama alanlarını kapsar. Temel programlama
                          becerilerinden ileri düzey konulara kadar kapsamlı bilgi sağlar ve gerçek dünya projeleri
                           ile uygulamalı deneyim kazandırır.
                        </p>
                        <p >
                            <span class="badge rounded-pill text-bg-primary">
                               Beğeni: <?php echo $kurs3_begeniSayisi; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurs3_yorumSayisi ;?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>