<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Регистрация - Общее дело</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700&amp;subset=cyrillic,cyrillic-ext"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/loader.css">
    <script src="js/hls.js"></script>
        </head>

<body class="reg-body">
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
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
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
                    Сегодня вам выпал счастливый шанс. Не упустите его!
                    <br>
                </div>
                <div class="modal__form">
                    <div class="modal__signature">
                        Получите мгновенный доступ к программе «Общее дело». <br /> Ваша прибыль составит <span>€15 004
                            071</span>
                    </div>
                    <div class="modal__form_title caps">
                        Создайте аккаунт в «Общем деле» прямо сейчас
                    </div>
                    <form enctype="multipart/form-data" id="form" onsubmit="send(event, 'send.php')" class="neo_form" >
<!-- <input type="hidden" name="_ref" value="https://twowords.info/registration.php">
<input type="hidden" name="_click" value="f4602cbf-9e8f-4d41-9923-1b8266f56f7c"> -->
                        <div class="main__form_field modal__form_field">
                            <i class="fas fa-user-circle"></i>
                            <input type="text" placeholder="Ваше имя" id="lastname_modal" name="firstname" required
                                value="fsdfsdfsdf">
                        </div>
                        <div class="main__form_field modal__form_field">
                            <i class="fas fa-user-circle"></i>
                            <input type="text" placeholder="Фамилия" id="LastName_modal" name="lastname" required>
                        </div>
                        <div class="main__form_field modal__form_field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" placeholder="E-mail" id="Email_modal" name="email" required
                                value="fsdfsdfsdf@asdd.com">
                        </div>
                        <div class="main__form_field modal__form_field">
                            <div class="form-group">
                                <div class="codeWrapper">
                                    <input type="tel" pattern="[0-9]{5}[-][0-9]{7}[-][0-9]{1}"  title="Не правильный формат" minlength="7" class="form-control js-phone"
                                        id="phone" name="phone_number" placeholder="Телефон" required>
                                </div>
                            </div>
                        </div>
                        <div class="header__button">
                            <button type="submit">
                                Получить доступ
                            </button>
                            <div class="col-xs-12 offer_row" style="background-color: #fff;">
                                <input type="checkbox" name="oferta" checked="">
                                <span>Я согласен на обработку персональных данных и получение
                                    рекламных материалов, и я согласен с <a href="/policy.html" target="_blank">публичной офертой</a> </span>
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
                134            </div>
            <div class="text">
                <span>Смотрят</span>
                страницу
            </div>
        </div>
        <div class="main_stat_block lasts">
            <div class="num">
                21            </div>
            <div class="text">
                осталось
                <span>мест</span>
            </div>
        </div>
    </div>

    <div class="main_logo">
        <a href="/">
            <img src="img/main-logo.png" alt="Общее дело">
        </a>
    </div>

    <div class="reg-body__cont">
        <div class="reg-body__cont-wr">
            <div class="container">
                <div class="row small-wr">

                    <div class="main_player">
                        <!-- player('xOBhN-SpBec', 'false', 'maxres'); -->
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
                            <div class="volume"
                                onclick="document.querySelector('video').muted = false; this.style.display = 'none'">
                                <i class="fas fa-5x fa-volume-up unmute-btn"></i>
                                <p>Включить звук</p>
                            </div>
                            <video id="video" width="620" height="370" oncontextmenu="return false;" autoplay muted
                                controls=true>
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>

                    <div class="reg-body__step-two">
                        <div class="title"><span>1 ШАГ:</span> Регистрация нового пользователя «Общего дела».</div>


                        <div class="flex_form_wr">
                            <form  enctype="multipart/form-data" id="form" onsubmit="send(event, 'send.php')" class="flex_form container neo_form" >
<!-- <input type="hidden" name="_ref" value="https://twowords.info/registration.php">
<input type="hidden" name="_click" value="f4602cbf-9e8f-4d41-9923-1b8266f56f7c"> -->
                                                                <div class="row inputs">
                                    <div class="col-md-6">
                                        <i class="fas fa-user-circle"></i>
                                        <input type="text" name="firstname" placeholder="Ваше имя" id="FirstName_main"
                                            value="fsdfsdfsdf" required>
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fas fa-user-circle"></i>
                                        <input type="text" placeholder="Фамилия" id="LastName_main" name="lastname"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <i class="fas fa-envelope"></i>
                                        <input type="email" placeholder="E-mail" id="Email_main" name="email" required
                                            value="fsdfsdfsdf@asdd.com">
                                    </div>
                                    <div class="col-md-6">
                                        <div class="codeWrapper">
                                            <input type="tel" pattern="[0-9]{5}[-][0-9]{7}[-][0-9]{1}" title="Не правильный формат" minlength="7"
                                                class="form-control js-phone" id="phone" name="phone_number"
                                                placeholder="Телефон" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row button">
                                    <div class="col-md-12">
                                        <button class="button_yes">
                                            Хочу доступ к «Общему делу»
                                        </button>
                                    </div>
                                    <div class="col-xs-12 offer_row">
                                        <input type="checkbox" name="oferta" checked="">
                                        <span style="color: #fff;">Я согласен на обработку персональных данных и
                                            получение рекламных материалов, и я согласен
                                            с <a href="/policy.html" target="_blank">публичной офертой</a></span>
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
                </div>
            </div>
        </div>
        <div class="reg-body__steps">
            <div class="container">
                <ul class="row">
                    <li class="col-md-3">Пройдите регистрацию</li>
                    <li class="col-md-3 active">Создайте аккаунт</li>
                    <li class="col-md-3">Получите доступ к программе</li>
                    <li class="col-md-3">Вы в деле</li>
                </ul>
            </div>
        </div>
    </div>

    <section class="done">
        <div class="container">
            <h2>Отлично! Вы справились!</h2>
            <div class="done_block">
                <div class="done_block__title">
                    Добро пожаловать в «Общее дело».
                </div>
                <div class="done_block__reviews">
                    <div class="done_block__reviews_title">
                        Реальные отзывы от пользователей программы «Общее дело»:
                    </div>
                    <div class="done_block__reviews_items">
                        <ul class="review">
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="how">
        <div class="container">
            <h2>Как это всё работает</h2>
            <div class="how__player">
                
            </div>
        </div>
    </section>

    <section class="faq">
        <div class="container">
            <h2>Помощь и поддержка</h2>
            <h3>Мы ответим на ваши вопросы и поможем заработать деньги</h3>
            <ul class="faq__items">
                <li class="faq__item">
                    <div class="faq__item_title">Что такое «Общее дело»?</div>
                    <p class="faq__item_cont">
                        «Общее дело» – это программа, которая взаимодействует с рынком торговли валютами. Программа
                        абсолютно бесплатна, 100% эффективна и полностью автоматизирована. В автоматическом режиме она
                        анализирует текущую ситуацию на рынке и выбирает для вас выигрышные сделки. «Общее дело» создана
                        экспертами и постоянно улучшается – мы не останавливаемся на достигнутом.
                    </p>
                </li>
                <li class="faq__item">
                    <div class="faq__item_title">Сколько я буду зарабатывать с «Общим делом»?</div>
                    <p class="faq__item_cont">
                        Формально верхней планки нет — вы можете заработать столько, сколько захотите. Размер заработка
                        зависит только от суммы, которую вы готовы внести на свой торговый счёт.<br /><br />
                        Как правило, на начальном этапе наши пользователи выбирают пополнение счёта на сумму $250.
                        Пополнив счёт на $250, вы сможете рассчитывать на ежедневный заработок в размере $5 000. Если вы
                        внесете $1 000, это автоматически увеличит ваш ежедневный заработок в 4 раза — до $20 000 – 22
                        000.
                    </p>
                </li>
                <li class="faq__item">
                    <div class="faq__item_title">Почему я должен вносить какие-то деньги, если всё бесплатно?</div>
                    <p class="faq__item_cont">
                        Представьте, что у вас в руках пульт от телевизора. Если вы не вставите в него батарейки, он не
                        будет переключать каналы. Деньги необходимы, чтобы делать деньги. Не беспокойтесь: ваши деньги
                        останутся вашими — вы сможете вернуть их на свой банковский счёт в любой момент, причём,
                        значительно приумножив.
                    </p>
                </li>
                <li class="faq__item">
                    <div class="faq__item_title">Как начать зарабатывать?</div>
                    <p class="faq__item_cont">
                        Есть несколько простых шагов, которые нужно сделать, прежде чем начать зарабатывать деньги. 1
                        шаг: посмотрите видео и зарегистрируйтесь, чтобы получить доступ к "Общему делу"! 2 шаг:
                        Создайте учетную запись (аккаунт) у нашего рекомендуемого брокера, чтобы Вы смогли торговать. 3
                        шаг: Внесите деньги на свой счет. 4 шаг: Начните зарабатывать деньги прямо сейчас! Прямо в
                        первый день!
                    </p>
                </li>
                <li class="faq__item">
                    <div class="faq__item_title">Каков размер минимального депозита?</div>
                    <p class="faq__item_cont">
                        Размер минимального взноса на депозит — $250. Но мы рекомендуем внести большую сумму для того,
                        чтобы сразу начать получать максимальную прибыль. Оптимальный размер первого пополнения — $500.
                        Внесённую сумму вы заработаете уже в первые часы после активации программы — вы ничем не
                        рискуете.
                    </p>
                </li>
                <li class="faq__item">
                    <div class="faq__item_title">Нужны ли для регистрации данные моей банковской карты или иного счёта?
                    </div>
                    <p class="faq__item_cont">
                        Нет, не нужны. Вы не оплачиваете доступ к «Общему делу» — программа бесплатна. Никакой
                        информации о дебетовых и кредитных картах, а также электронных кошельках и прочих платежных
                        средствах вводить не требуется.<br /><br />
                        После регистрации и загрузки программы вы получите доступ к полностью защищенному личному
                        кабинету. Далее мы порекомендуем вам проверенного брокера, после чего вы внесёте выбранную вами
                        сумму на депозит. Это необходимо для того, чтобы включиться в торговлю. Это ваш счёт и ваши
                        деньги, которые вы в любой момент сможете вывести из оборота.
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <section class="form-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="form">
                        <h5 class="title">
                            1 ШАГ: Создайте учётную запись в «Общем деле».
                        </h5>
                        <form   enctype="multipart/form-data" id="form" onsubmit="send(event, 'send.php')" class="form_flex neo_form" >
                                                        <div class="form_flex__field">
                                <i class="fas fa-user-circle"></i>
                                <input type="text" placeholder="Ваше имя" id="FirstName_sec" name="firstname"
                                    required="" value="fsdfsdfsdf">
                            </div>
                            <div class="form_flex__field">
                                <i class="fas fa-user-circle"></i>
                                <input type="text" placeholder="Фамилия" id="LastName_sec" name="lastname" required="">
                            </div>
                            <div class="form_flex__field">
                                <i class="fas fa-envelope"></i>
                                <input type="email" placeholder="E-mail" id="Email_sec" name="email" required=""
                                    value="fsdfsdfsdf@asdd.com">
                            </div>
                            <div class="form_flex__field">
                                <div class="codeWrapper">
                                    <input class="" name="text" type="tel" placeholder="Номер телефона" pattern="[0-9]{5}[-][0-9]{7}[-][0-9]{1}"  title="Не правильный формат"
                                        minlength="7" id="PhoneNumber_sec" name="phone_number" required>
                                </div>
                            </div>
                            <div class="form_flex__submit">
                                <button class="submit">Получить доступ к программе «Общее дело»</button>
                                <div class="col-xs-12 offer_row" style="background-color: #1EACF5;">
                                    <input type="checkbox" name="oferta" checked="">
                                    <span>Я согласен на обработку персональных данных и получение
                                        рекламных материалов, и я согласен с <a href="/policy.html" target="_blank">публичной офертой</a> </span>
                                </div>
                            </div>
                        </form>
                        <h5 class="subtitle caps">
                            Зарегистрируйтесь,<br /> чтобы начать зарабатывать уже сейчас!
                        </h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Личная помощь основателя и круглосуточная поддержка команды:</h5>
                    Мы обеспечили круглосуточную поддержку пользователей «Общего дела». Вы получите необходимую помощь в
                    любое время суток. Чтобы обратиться к эксперту, активируйте чат, находящийся справа внизу
                    страницы.<br /><br />

                    Внимание! Чат доступен только зарегистрированным пользователям.
                </div>
            </div>
        </div>
    </section>


    <div class="up_footer">
        <div class="container">
            <div class="row">
                <div class="logos_check">
                    <img src="img/reg-footer-item-one.png">
                    <img src="img/reg-footer-item-two.png">
                    <img src="img/reg-footer-item-three.png">
                    <img src="img/reg-footer-item-four.png">
                    <img src="img/reg-footer-item-five.png">
                </div>
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
    var videoSrc = 'video/r/video.m3u8';
    if (Hls.isSupported()) {
        var hls = new Hls();
        hls.loadSource(videoSrc);
        hls.attachMedia(video);
        hls.on(Hls.Events.MANIFEST_PARSED, function() {
        video.play();
        });
    }
    else if (video.canPlayType('application/vnd.apple.mpegurl')) {
        video.src = videoSrc;
        video.addEventListener('loadedmetadata', function() {
        video.play();
        });
    }
    </script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- <script src="js/req.js"></script> -->




    <script>
        $(function () {
            $.exitIntent('enable');
            $(document).bind('exitintent', function () {
                $("#modal-one").fadeIn();
            });
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function () {
            if (!getCookie('goyoutube')) {
                setCookie("goyoutube", "true", {
                    expires: (new Date(new Date().getTime() + 864000000)),
                    path: '/'
                });
            } else {
                $('.yt_over').css('background-image', 'url()');
            }
        });
    </script>

<link rel="stylesheet" href="./build/css/intlTelInput.min.css">
<script type="text/javascript" src="build/js/intlTelInput-jquery.min.js"></script>
<script type="text/javascript" src="build/js/intlTelInput.min.js"></script>
    <style>
        .iti.iti--allow-dropdown.iti--separate-dial-code {
            width: 100%;
        }

        .iti__country-name,
        .iti__selected-dial-code {
            color: #000;
        }
		 .offer_row{
            margin-top: 15px
        }
    </style>
    <script>
        $("input[type=tel]").intlTelInput({
            autoFormat: true,
            autoPlaceholder: "aggressive",
            defaultCountry: "auto",
            initialCountry: "auto",
            separateDialCode: true,
            geoIpLookup: function(success, failure) {
                $.get("//twowords.info/api/getLocation.me", function() {}, "json").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "ru";
                success(countryCode);
                });
            },
            nationalMode: true,
            hiddenInput: 'phone',
            numberType: "MOBILE",
            utilsScript: "build/js/utils.js",
        });
    </script>


    <script>
    $("body").on('submit', 'form', function(){
        $(".loader").addClass("active");
    });
    </script>

<style>
    body.unavailable {
        pointer-events:none;
        opacity:0.5;
    }
</style>
<script>
    document.querySelectorAll('form').forEach(function(el) {
        el.addEventListener('submit', function() {
            document.querySelector('body').classList.add("unavailable");
        });
    });
</script>
<script>

// Отправка данных на сервер
function send(event, php){
// console.log("Отправка запроса");
event.preventDefault ? event.preventDefault() : event.returnValue = false;
var req = new XMLHttpRequest();
req.open('POST', php, true);
req.onload = function() {
	if (req.status >= 200 && req.status < 400) {
	json = JSON.parse(this.response);
    setTimeout(function(){
      window.location.href = 'https://appside-test.herokuapp.com/thanks.php';
    }, 1000);
    } else {alert("Ошибка сервера. Номер: "+req.status);}}; 

// Если не удалось отправить запрос. Стоит блок на хостинге
req.onerror = function() {alert("Ошибка отправки запроса");};
req.send(new FormData(event.target));
}
</script>
</body>

</html>