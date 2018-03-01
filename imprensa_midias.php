<?php include('header.php'); ?>

    <section id="videos">
        <div class="container">
            <h2 class="titulo">Vídeos</h2>

            <div class="row">
                <div class="col-md-6">
                    <div class="area-video">
                        <video width="550" controls="">
                            <source src="assets/videos/video-01.MP4" type="video/mp4">
                            Your browser does not support HTML5 video.
                        </video>
                    </div>
                </div>
                <div class="col-md-6">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/w_2Yu8Ywg2U"
                            frameborder="0" allowfullscreen class="video"></iframe>
                    <div class="row hidden">
                        <div class="col-md-6">
                            <div class="mini-video">
                                <iframe width="100%" height="151" src="https://www.youtube.com/embed/w_2Yu8Ywg2U"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mini-video">
                                <iframe width="100%" height="151" src="https://www.youtube.com/embed/w_2Yu8Ywg2U"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>

                    <div class="row hidden">
                        <div class="col-md-6">
                            <div class="mini-video">
                                <iframe width="100%" height="151" src="https://www.youtube.com/embed/w_2Yu8Ywg2U"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mini-video">
                                <iframe width="100%" height="151" src="https://www.youtube.com/embed/w_2Yu8Ywg2U"
                                        frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="galeria" class="hidden">
        <div class="container">
            <h2 class="titulo">Fotos</h2>

            <div class="row">
                <div class="col-md-7">
                    <div class="area-imagem"><img src="./assets/images/img-galeria.jpg" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mini-imagem"><img src="./assets/images/img-galeria.jpg" alt=""
                                                          class="img-responsive"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mini-imagem"><img src="./assets/images/img-galeria.jpg" alt=""
                                                          class="img-responsive"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mini-imagem"><img src="./assets/images/img-galeria.jpg" alt=""
                                                          class="img-responsive"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mini-imagem"><img src="./assets/images/img-galeria.jpg" alt=""
                                                          class="img-responsive"></div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mini-imagem"><img src="./assets/images/img-galeria.jpg" alt=""
                                                          class="img-responsive"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mini-imagem"><img src="./assets/images/img-galeria.jpg" alt=""
                                                          class="img-responsive"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="noticias">
        <div class="container">
            <h2 class="titulo">Mídias e Notícias</h2>

            <div class="row">
                <div class="col-md-8">
                    <!-- LightWidget WIDGET -->
<!--                    <script src="//lightwidget.com/widgets/lightwidget.js"></script><iframe src="//lightwidget.com/widgets/f4755af73263510682ffa3c9db52a3f9.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0; overflow: hidden;"></iframe>-->
                    <!-- SnapWidget -->
                    <script src="https://snapwidget.com/js/snapwidget.js"></script>
                    <iframe src="https://snapwidget.com/embed/466228" class="snapwidget-widget" allowTransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden; width:100%; "></iframe>

                    <?php
                    function generate_sig($endpoint, $params, $secret)
                    {
                        $sig = $endpoint;
                        ksort($params);
                        foreach ($params as $key => $val) {
                            $sig .= "|$key=$val";
                        }
                        return hash_hmac('sha256', $sig, $secret, false);
                    }

                    $endpoint = 'https://api.instagram.com/v1/media/657988443280050001_25025320';

                    $params = array(
                        'access_token' => 'fb2e77d.47a0479900504cb3ab4a1f626d174d2d',
                        'count' => 10,
                    );
                    $secret = '6dc1787668c64c939929c17683d7cb74';

                    $sig = generate_sig($endpoint, $params, $secret);

                    //echo $sig . "<br>";

                    ?>

                </div>
                <div class="col-md-4">
                    <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fideprojetossociais%2F&tabs=timeline&width=340&height=750&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId=276557182361962"
                            width="340" height="750" style="border:none;overflow:hidden" scrolling="no" frameborder="0"
                            allowTransparency="true"></iframe>
                </div>
            </div>
        </div>
    </section>




<?php include('footer.php'); ?>