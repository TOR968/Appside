<!DOCTYPE html>
<html lang="ru">
<!-- Общее Дело -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Твой последний шанс всё изменить! </title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&amp;subset=cyrillic,cyrillic-ext" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/bootstrap-grid.css">
    <link rel="stylesheet" href="./css/main.min.css">
    <link rel="stylesheet" href="./css/main.scss">
    <link rel="stylesheet" href="./css/loader.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <script src="js/hls.js"></script>
</head>

<body class="main-body">
    <style>
        .offer_row input {
            display: inline-block;
            width: auto;
            float: left;
            margin: 0;
            margin-right: 5px;
            width: auto !important;
            height: auto !important;
        }

        .offer_row span {
            font-size: 11px;
            line-height: 14px;
            font-family: sans-serif;
            color: #333;
            position: relative;
            top: -1px;
            display: block;
        }

        .offer_row {
            max-width: 400px;
            text-align: left;
            position: relative;
            margin-top: 15px;
            padding: 5px;
            background-color: rgba(0, 0, 0, .5);
            border-radius: 5px;
        }

        .flex_form_wr .button {
            justify-content: center;
        }
    </style>
    <div class="loader">
        <div class="lds-ring">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <div class="modal_wr">
        <div class="closing"></div>
        <div class="modal_close_wr">
            <a href="#" class="close"></a>
            <div class="modal_cont">
                <div class="modal__close">
                    <a href="#"></a>
                </div>
                <div class="modal__title">
                    Начните получать от 2500 у.е. в месяц!
                    <br>
                </div>
                <div class="modal__form">
                    <div class="modal__signature">

                    </div>
                    <div class="modal__form_title">
                        Пройдите регистрацию и получите бесплатный доступ к программе!
                    </div>
                    <form  action="registration.php" method="post">
                        <!-- Hidden Required Fields -->
                        <input type="hidden" name="project_name" value="Appside-test">
                        <input type="hidden" name="admin_email" value="bawofib291@noobf.com">
                        <input type="hidden" name="form_subject" value="Form Subject2">
                        <!-- END Hidden Required Fields -->
                        <input type="hidden" name="_ref" value="https://twowords.info/">
                        <input type="hidden" name="_click" value="811e45e5-10e8-44f3-b332-0e24989eb270">
                        <div class="main__form_field modal__form_field">
                            <i class="fas fa-user-circle"></i>
                            <input type="text" placeholder="Ваше имя" id="name_modal" name="username">
                        </div>
                        <div class="main__form_field modal__form_field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="Ваш актуальный e-mail" id="email_modal" name="email" required>
                        </div>
                        <div class="header__button">
                            <button>
                                Получить доступ
                            </button>
                            <div class="col-xs-12 offer_row" style="background-color: #fff;">
                                <input type="checkbox" name="oferta" checked="">
                                <span>Я согласен на обработку персональных данных и получение
                                    рекламных материалов, и я согласен с <a href="/policy.html" target="_blank">публичной офертой</a> </span>
                            </div>
                        </div>
                </div>
                </form>
                <div class="modal__form_items flex">
                    <img src="img/reg-footer-item-one.png" alt="">
                    <img src="img/reg-footer-item-two.png" alt="">
                    <img src="img/reg-footer-item-three.png" alt="">
                    <img src="img/reg-footer-item-four.png" alt="">
                    <img src="img/reg-footer-item-five.png" alt="">
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="main_stat">
        <div class="main_stat_block online">
            <div class="num">
                127 </div>
            <div class="text">
                <span>Смотрят</span> страницу
            </div>
        </div>
        <div class="main_stat_block lasts">
            <div class="num">
                29 </div>
            <div class="text">
                осталось
                <span>мест</span>
            </div>
        </div>
    </div>

    <div class="main_logo">
        <a href="#">
            <img src="img/main-logo.png" alt="Общее дело">
        </a>
    </div>

    <div class="container">
        <h1> Уникальное новшество от программистов, благодаря которому обычные русские работяги получают дополнительно от 60.000 рублей в месяц, уделяя всего 15 минут в день! Посмотрите видео, пройдите бесплатную регистрацию и получите свою первую выплату
            уже завтра.</h1>

        <div class="main_player">
            <!-- //player('HbfKnXamK_Q'); -->

            <style>
                .embed-responsive .volume {
                    position: absolute;
                    /* padding: 20 40px; */
                    width: 160px;
                    height: 140px;
                    top: calc(50% - 70px);
                    left: calc(50% - 80px);
                    z-index: 1;
                    background: rgba(0, 0, 0, .5);
                    border-radius: 5px;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    cursor: pointer;
                    animation: pulse 1s linear infinite;
                }

                .embed-responsive .volume p {
                    color: #fff;
                    font-weight: bold;
                    font-size: 18px;
                }

                .embed-responsive .volume i {
                    color: #fff;
                }

                @keyframes pulse {
                    0% {
                        transform: scale(1, 1);
                    }
                    50% {
                        transform: scale(1.1, 1.1);
                    }
                    100% {
                        transform: scale(1, 1);
                    }
                }
            </style>
            <div class="embed-responsive embed-responsive-16by9">
                <div class="volume" onclick="document.querySelector('video').muted = false; this.style.display = 'none'">
                    <i class="fas fa-5x fa-volume-up unmute-btn"></i>
                    <p>Включить звук</p>
                </div>
                <video id="video" width="620" height="370" oncontextmenu="return false;" autoplay muted controls=true>
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>

        <div class="flex_form_wr">
            <form class="flex_form container" action="registration.php" method="post">
                <!-- Hidden Required Fields -->
                <input type="hidden" name="project_name" value="Appside-test">
                <input type="hidden" name="admin_email" value="bawofib291@noobf.com">
                <input type="hidden" name="form_subject" value="Form Subject1">
                <!-- END Hidden Required Fields -->
                <input type="hidden" name="_ref" value="https://twowords.info/">
                <input type="hidden" name="_click" value="811e45e5-10e8-44f3-b332-0e24989eb270">
                <div class="row inputs">
                    <div class="col-md-6">
                        <i class="fas fa-user-circle"></i>
                        <input type="text" name="username" placeholder="Ваше имя">
                    </div>
                    <div class="col-md-6">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Ваш актуальный e-mail" required>
                    </div>
                </div>
                <div class="row button">
                    <div class="col-md-12">
                        <button class="button_yes">
                            Пройти БЕСПЛАТНУЮ регистрацию!
                        </button>
                    </div>
                    <div class="col-xs-12 offer_row" style="margin-top: 20px">
                        <input type="checkbox" name="oferta" checked="">
                        <span style="color: #fff;">Я согласен на обработку персональных данных и получение рекламных материалов, и я согласен
                            с  <a href="/policy.html" target="_blank">публичной офертой</a></span>
                    </div>
                </div>

            </form>
            <div class="logos_wr">
                <ul class="flex_list">
                    <li><img src="img/main-footer-item-one.png" alt=""> </li>
                    <li><img src="img/main-footer-item-two.png" alt=""> </li>
                    <li><img src="img/main-footer-item-three.png" alt=""> </li>
                    <li><img src="img/main-footer-item-four.png" alt=""> </li>
                    <li><img src="img/main-footer-item-five.png" alt=""> </li>
                </ul>
            </div>
        </div>
    </div>

    <footer id="footer">
        <div class="container">
            <ul class="menu_footer">
                <li><a href="policy.html">Политика конфиденциальности</a></li>
                <li><a href="agreement.html">Пользовательское соглашение</a></li>
            </ul>
            <div class="copyright">Copyright © 2021 – Общее дело</div>
        </div>
    </footer>


    <script>
        var video = document.getElementById('video');
        var videoSrc = 'video/i/video.m3u8';
        if (Hls.isSupported()) {
            var hls = new Hls();
            hls.loadSource(videoSrc);
            hls.attachMedia(video);
            hls.on(Hls.Events.MANIFEST_PARSED, function() {
                video.play();
            });
        } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
            video.src = videoSrc;
            video.addEventListener('loadedmetadata', function() {
                video.play();
            });
        }
    </script>
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        $("body").on('submit', 'form', function() {
            $(".loader").addClass("active");
        });
    </script>

    <style>
        body.unavailable {
            pointer-events: none;
            opacity: 0.5;
        }
    </style>
    <script>
        document.querySelectorAll('form').forEach(function(el) {
            el.addEventListener('submit', function() {
                document.querySelector('body').classList.add("unavailable");
            });
        });
    </script>
</body>

</html>