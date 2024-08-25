<?php
    $kurs1_başlik="Node.js Kursu";
    $kurs1_altBaslik="Sıfırdan ileri seviye Node.js ile web geliştirme";
    $kurs1_resim="node.jpg";
    $kurs1_yayinTarihi="01.01.2023";
    $kurs1_yorumSayisi= "100";
    $kurs1_begeniSayisi= "300";

    $kurs2_başlik= "PHP Kursu";
	$kurs2_altBaslik= "Sıfırdan ileri seviye PHP prrogramlama";
	$kurs2_resim = "php.jpg";
	$kurs2_yayinTarihi="03.03.2023";
	$kurs2_yorumSayisi= "200";
	$kurs2_begeniSayisi= "400";

    $kurs3_başlik= "python Kursu";
	$kurs3_altBaslik="Sıfırdan ileri seviye python ile web geliştirme";
	$kurs3_resim= "3.jpg";
	$kurs3_yayinTarihi= "05.05.2023";
	$kurs3_yorumSayisi= "300";
	$kurs3_begeniSayisi= "500";


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-utilities.rtl.min.css"/>
    <title>Document</title>
</head>
<body>
    <div class="container my-3">

        <!--CARD 1-->
        <div class="card mb-3">
            <div class="row">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resim?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $kurs1_başlik?></h5>
                        <h3 class="card-title"><?php echo $kurs1_altBaslik?></h3>
                        <p class="card-text">Node.js kursu, sunucu tarafında JavaScript kullanarak yüksek performanslı ve ölçeklenebilir uygulamalar geliştirmeyi öğretir. Olay bazlı mimarisi ve geniş modül ekosistemiyle, gerçek zamanlı web uygulamaları, API'ler ve mikro hizmetler oluşturmanıza olanak tanır. Modern web geliştirme becerilerinizi güçlendirir.</p>
                        <p >
                            <span class="badge rounded-pill text-bg-primary">
                               Beğeni: <?php echo $kurs1_begeniSayisi ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurs1_yorumSayisi ?>
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
                    <h5 class="card-title"><?php echo $kurs2_başlik?></h5>
                        <h3 class="card-title"><?php echo $kurs2_altBaslik?></h3>
                        <p class="card-text">PHP kursu, web geliştirme alanında dinamik ve etkileşimli web siteleri oluşturmak için gerekli olan PHP programlama dilini öğrenmenizi sağlar. Temel syntax'tan veri tabanı bağlantılarına kadar geniş bir konuyu kapsar, gerçek dünya projeleri ile uygulamalı beceriler kazandırır ve profesyonel web geliştiricisi olmanız için güçlü bir temel sunar.</p>
                        <p >
                            <span class="badge rounded-pill text-bg-primary">
                               Beğeni: <?php echo $kurs2_begeniSayisi ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurs2_yorumSayisi ?>
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
                    <h5 class="card-title"><?php echo $kurs3_başlik?></h5>
                        <h3 class="card-title"><?php echo $kurs3_altBaslik?></h3>
                        <p class="card-text">Python kursu, basit ve okunabilir sözdizimi ile güçlü bir programlama dili olan Python'u öğretir. Veri analizi, web geliştirme, yapay zeka ve otomasyon gibi geniş uygulama alanlarını kapsar. Temel programlama becerilerinden ileri düzey konulara kadar kapsamlı bilgi sağlar ve gerçek dünya projeleri ile uygulamalı deneyim kazandırır.</p>
                        <p >
                            <span class="badge rounded-pill text-bg-primary">
                               Beğeni: <?php echo $kurs3_begeniSayisi ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurs3_yorumSayisi ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>