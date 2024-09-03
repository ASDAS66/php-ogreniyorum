<?php
//veri tipleri ve diziler öğrenildi
    const title = "POPÜLER KURSLAR";

    $kategoriler = array("programlama", "web geliştirme"," veri analizi","ofis uygulamaları");
   //kategoriler alfabetik sıralanır.
    sort($kategoriler);

    $kurslar=array(
        "1"=> array(
            "baslik"=> "Nodejs Kursu",
            "altbaslik"=>"Sıfırdan ileri seviye node.js i...",
            "resim"=>"node.jpg",
            "yayinTarihi"=>"01.01.2023",
            "yorumSayisi"=>"100",
            "begeniSayisi"=> "300"
        ),
        "2"=> array(
            "baslik"=> "php Kursu",
            "altbaslik"=>"Sıfırdan ileri seviye php prog...",
            "resim"=>"php.jpg",
            "yayinTarihi"=>"03.03.2023",
            "yorumSayisi"=>"200",
            "begeniSayisi"=> "400"
        ),
        "3"=> array(
            "baslik"=> "Python Kursu",
            "altbaslik"=>"Sıfırdan ileri seviye python i...",
            "resim"=>"python.jpg",
            "yayinTarihi"=>"02.02.2023",
            "yorumSayisi"=>"300",
            "begeniSayisi"=> "500"
        ),
    );

    $kurs1_alttbaslik = ucfirst(strtolower($kurslar["1"]["altbaslik"]));
    $kurs2_alttbaslik = ucfirst(strtolower($kurslar["2"]["altbaslik"]));
    $kurs3_alttbaslik = ucfirst(strtolower($kurslar["3"]["altbaslik"]));

    //belli bir aralıktan sonrasına ... koyar
    $kurs1_altBaslik = substr($kurslar["1"]["altbaslik"],0,30)."...";
    $kurs2_altBaslik = substr($kurslar["2"]["altbaslik"],0,30)."...";
    $kurs3_altBaslik = substr($kurslar["3"]["altbaslik"],0,30)."...";

    //kursların baslık bilgileriyle url oluşturur
    $kurs1_url = str_replace( [" ","ğ","ü","ş","ö","ç","ı","."] , ["-","g","u","s","o","c","i",""] , strtolower( $kurslar["1"]["baslik"] ));
    $kurs2_url = str_replace( [" ","ğ","ü","ş","ö","ç","ı","."] , ["-","g","u","s","o","c","i",""] , strtolower( $kurslar["2"]["baslik"] ));
    $kurs3_url = str_replace( [" ","ğ","ü","ş","ö","ç","ı","."] , ["-","g","u","s","o","c","i",""] , strtolower( $kurslar["3"]["baslik"] ));

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
    <div class="row">
        <div class="col-3">
        <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[0];?></a>
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1];?></a>
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2];?></a>
            <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2];?></a>
        </div>
        </div>
        <div class="col-9">
        <h1 class="mb-3"> <?php echo title; ?></h1>
        <p class="lead">
            <?php echo count($kategoriler)?> Kategoride <?php echo count($kurslar)?> video listelenmiştir
        </p>
        <!--CARD 1-->
        <div class="card mb-3">
            <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["1"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url;?>" ><?php echo $kurslar["1"]["baslik"];?></a>
                        </h5>
                        <h3 class="card-title"><?php echo $kurslar["1"]["altbaslik"];?></h3>
                        <p class="card-text">Node.js kursu, JavaScript programlama dilini kullanarak sunucu tarafında güçlü, ölçeklenebilir ve yüksek performanslı uygulamalar geliştirmek isteyenler için tasarlanmıştır. Bu kurs, Node.js'in temel prensiplerinden başlayarak, asenkron programlama, Express.js ile web uygulamaları geliştirme, API oluşturma, veri tabanı entegrasyonu ve gerçek zamanlı uygulamalar oluşturma gibi ileri düzey konulara kadar geniş bir yelpazeyi kapsar. Kurs dâhilinde, gerçek dünya projeleriyle Node.js'in gücünü deneyimleyerek, modern web geliştirme dünyasında aranan bir backend geliştirici olmanız için gereken tüm becerileri edineceksiniz.
                        </p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                               Beğeni: <?php echo $kurslar["1"]["begeniSayisi"]; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurslar["1"]["yorumSayisi"]; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <!--CARD 2-->
        <div class="card mb-3">
            <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["2"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs2_url;?>" ><?php echo $kurslar["2"]["baslik"];?></a>
                        </h5>
                        <h3 class="card-title"><?php echo $kurslar["2"]["altbaslik"];?></h3>
                        <p class="card-text">PHP kursu, web geliştirme alanında dinamik ve etkileşimli web siteleri oluşturmak için gerekli olan PHP programlama dilini öğrenmenizi sağlar. Temel syntax tan veri tabanı bağlantılarına kadar geniş bir konuyu kapsar, gerçek dünya projeleri ile uygulamalı beceriler kazandırır ve profesyonel web geliştiricisi olmanız için güçlü bir temel sunar.</p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                               Beğeni: <?php echo $kurslar["2"]["begeniSayisi"]; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurslar["2"]["yorumSayisi"]; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        <!--CARD 3-->
        <div class="card mb-3">
            <div class="row">
                <div class="col-4">
                    <img src="img/<?php echo $kurslar["3"]["resim"]; ?>" alt="" class="img-fluid rounded-start">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs3_url;?>" ><?php echo $kurslar["3"]["baslik"];?></a>
                        </h5>
                        <h3 class="card-title"><?php echo $kurslar["3"]["altbaslik"];?></h3>
                        <p class="card-text">Python kursu, basit ve okunabilir sözdizimi ile güçlü bir programlama dili olan Pythonu öğretir. Veri analizi, web geliştirme, yapay zeka ve otomasyon gibi geniş uygulama alanlarını kapsar. Temel programlama becerilerinden ileri düzey konulara kadar kapsamlı bilgi sağlar ve gerçek dünya projeleri ile uygulamalı deneyim kazandırır.</p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                               Beğeni: <?php echo $kurslar["3"]["begeniSayisi"]; ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                               Yorum: <?php echo $kurslar["3"]["yorumSayisi"]; ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>


        </div>
    </div>
        
      
    </div>
</body>
</html>