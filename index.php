<!DOCTYPE html>
<?php 
include('admin/consultas.php');
$spon = obtieneSponActivos();
$news = obtieneNews();
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TNT</title>

    <!-- Bootstrap CSS -->
    <link href="utilidades/boot/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="utilidades/popover/css/jquery.webui-popover.min.css">

    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"><img src="img/logo.png" alt="Logo TNT" width="80px"></a>
            </div>

            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a class="page-scroll" href="#top">Home</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#program">Program</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#participants">Participants</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#news">News</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#sponsors">Sponsors</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Home Section -->
    <section id="top" class="top-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>TNT</h1>
                    <span id="segundo">Lighting detectives México D.F.</span>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="news-section">
        <div class="container">
            <div id="tituloNews" id="col-lg-4"><h1>News</h1></div>
            <div class="row">
                <div class="col-lg-12">

                    <!-- /Carousel -->
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">
                            
                            <?php
                                $i = 1;
                                $inicio = 1;
                                $fin = 2; 
                                foreach ($news as $new) {

                                    if($i == $inicio){
                                    ?>
                                        <div class="item <?php if($i == 1){ echo "active";} ?>">
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="thumbnail">
                                                        <img src="img/news/<?php echo $new['img_news']; ?>" width="400px">
                                                            <h3><?php echo $new['titulo']; ?></h3>
                                                            <span id="icono" class="glyphicon glyphicon-calendar"><?php echo $new['fechanews'];?></span>
                                                            <?php

                                                                if(strlen($new['info']) > 350){

                                                                    $texto = substr($new['info'], 0, 350);
                                                                    $textoCom = substr($new['info'], 350);
                                                                ?>

                                                                    <p><?php echo $texto;?> VER MAS</p>
                                                                
                                                                <?php

                                                                }else{

                                                                    $texto = $new['info'];
                                                                
                                                                ?>
                                                                
                                                                    <p><?php echo $texto;?></p>
                                                                
                                                                <?php
                                                                }
                                                                $i++;
                                                                $inicio = $inicio + 2;
                                                            ?>   
                                                    </div>
                                                </div>

                                    <?php
                                    }elseif ($i == $fin) {
                                    ?>  
                                                <div class="col-sm-6 col-md-6">
                                                    <div class="thumbnail">
                                                        <img src="img/news/<?php echo $new['img_news']; ?>" width="400px">
                                                            <h3><?php echo $new['titulo']; ?></h3>
                                                            <span id="icono" class="glyphicon glyphicon-calendar"><?php echo $new['fechanews'];?></span>
                                                            <?php

                                                                if(strlen($new['info']) > 350){

                                                                    $texto = substr($new['info'], 0, 350);
                                                                    $textoCom = substr($new['info'], 350);
                                                                ?>

                                                                    <p><?php echo $texto;?> VER MAS</p>
                                                                
                                                                <?php

                                                                }else{

                                                                    $texto = $new['info'];
                                                                
                                                                ?>
                                                                
                                                                    <p><?php echo $texto;?></p>
                                                                
                                                                <?php
                                                                }
                                                                $i++;
                                                                $fin = $fin + 2;
                                                            ?>   
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                }

                                if(($i-1)%2 != 0){
                                ?>
                                            </div>
                                        </div>    
                                <?php
                                }
                            ?>

                        </div>

                        <!-- Controls -->
                        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>

                    </div>
                    <!-- /Carousel -->

                </div>
            </div>
        </div>
    </section>

    <!-- Sponsors Section -->
    <section id="sponsors" class="sponsors-section">
        <div class="container">
                <div id="tituloSponsors" id="col-lg-4"><h1>Sponsors<?php echo $i;?></h1></div>
                <div class="col-lg-12">
                    
                    <?php
                        $i = 1;
                        $inicio = 1;
                        $fin = 3; 
                        foreach ($spon as $sp) {

                                if($inicio == $i){

                                    echo '<div class="row"><div class="col-lg-4"><img src="img/spon/'.$sp['img_spo'].'" class="img-responsive" alt=""><p></p></div>';
                                    $inicio = $inicio + 3;
                                    $i++;

                                }elseif ($fin == $i){
                                    
                                    echo '<div class="col-lg-4"><img src="img/spon/'.$sp['img_spo'].'" class="img-responsive" alt=""><p></p></div></div>';
                                    $fin = $fin + 3;
                                    $i++;

                                }else{

                                    echo '<div class="col-lg-4"><img src="img/spon/'.$sp['img_spo'].'" class="img-responsive" alt=""><p></p></div>';
                                    $i++;
                                }
                        }

                        if($i % 3 != 0){

                            echo '</div>';
                        }
                    ?>
                    
                    <!--

                    <div class="row">
                        <div class="col-lg-4">
                            <img src="img/300x100.png" class="img-responsive" alt="">
                            <p></p>
                        </div>
                        <div class="col-lg-4">
                            <img src="img/300x100.png" class="img-responsive" alt="">
                            <p></p>
                        </div>
                        <div class="col-lg-4">
                            <img src="img/300x100.png" class="img-responsive" alt="">
                            <p></p>
                        </div>    
                    </div>

                    -->

                </div> 
                <div class="col-lg-12">
                        <div class="col-lg-3">
                            <img src="img/300x100.png" class="img-responsive" alt="">
                            <p></p>
                        </div>
                        <div class="col-lg-3">
                            <img src="img/300x100.png" class="img-responsive" alt="">
                            <p></p>
                        </div>
                        <div class="col-lg-3">
                            <img src="img/300x100.png" class="img-responsive" alt="">
                            <p></p>
                        </div> 
                        <div class="col-lg-3">
                            <img src="img/300x100.png" class="img-responsive" alt="">
                            <p></p>
                        </div>    
                    </div>
                </div>                    
        </div>
    </section>

    <!-- Program Section 
    <section id="program" class="program-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Program Section</h1>
                </div>
            </div>
        </div>
    </section>
    -->

    <!-- Participants Section -->
    <section id="participants" class="participants-section">
        <div class="container">
                <div class="col-lg-3">
                    <a id="popover" href="#" class="show-pop btn  right" data-title="Titfgghfghgfle" data-content="Contfghfgdhhgfgfhdents..." data-placement="right"><img src="img/parti/steve.jpg" alt="" class="img-responsive"></a> 
                </div>
                <div class="col-lg-3">
                    <img src="img/parti/steve.jpg" alt="" class="img-responsive"> 
                </div>
                <div class="col-lg-3">
                    <img src="img/parti/steve.jpg" alt="" class="img-responsive"> 
                </div>
                <div class="col-lg-3">
                    <img src="img/parti/steve.jpg" alt="" class="img-responsive"> 
                </div>
        </div>
    </section>

    <!-- jQuery -->
    <script src="utilidades/jquery/jquery.js"></script>

    <!-- Bootstrap JS -->
    <script src="utilidades/boot/js/bootstrap.min.js"></script>
        
    <script src="utilidades/popover/js/jquery.webui-popover.min.js"></script> 

    <!-- Scrolling Js -->
    <script src="utilidades/boot/js/jquery.easing.min.js"></script>
    <script src="js/menu.js"></script>

    <script>

        $('a#popover').webuiPopover({

            multi:false,
            closeable:true,
            arrow:true
        });

    </script>

</body>

</html>
