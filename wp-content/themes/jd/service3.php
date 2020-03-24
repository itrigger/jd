<?php
/*
Template Name: Вводите вагоны в работу
*/

get_header();
?>

    <div class="wrapper">

        <div class="service-header-block service-block_3">
            <div class="in">
                <h1>Вводите пассажир<i class="del">-</i><span>ские вагоны в работу?</span></h1>
                <p>Необходимо провести регистрацию или
                    изменить информацию в базе данных о уже
                    зарегистрированных вагонах?</p>

            </div>
        </div>

        <div class="in-content">
            <div class="pattern-block service-page__pattern-block">
                <div class="pattern-block__in">
                    <div class="pattern-form">
                        <header class="pattern-block__header">Получите на почту коммерческое предложение без
                            звонка
                        </header>
                        <div class="flex-wrap">
                            <div class="form">
                                <div class="form-input">
                                    <input type="text" placeholder="Имя"/>
                                </div>
                                <div class="form-input">
                                    <input type="text" placeholder="Телефон"/>
                                </div>
                                <div class="form-input">
                                    <input type="text" placeholder="Email"/>
                                </div>
                                <div class="form-input">
                                    <input type="submit" value="Отправить заявку"/>
                                </div>
                            </div>
                            <div class="label-conf">Все данные защищены <span>и не передаются третьим лицам</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="steps-block">
                <div class="steps-block__step step__step1 w20">
                    Оперативно согласуем
                    заявку на регистрацию
                    вагонов в отделении
                    дороги приписки
                </div>
                <div class="steps-block__step step__step2 w20">
                    Передадим согласованную
                    заявку в Росжелдор
                    с получением ответа
                    за 1-3 дня
                </div>
                <div class="steps-block__step step__step3 w20">
                    Подготовим и направим
                    запрос для введения
                    и корректировки
                    информации в АСУ ПВ
                </div>
                <div class="steps-block__step step__step4 w20">
                    Позаботимся о 100%-ной
                    безопасности передачи
                    данных
                </div>
                <div class="steps-block__step step__step5 w20">
                    Гарантируем полную
                    конфиденциальность
                </div>
            </div>

            <div class="owl-block">
                <h3>Кто успешно работает с ЖД Учет</h3>

                <div class="owl-carousel">
                    <div style="width: 147px"><img src="/wp-content/themes/jd/assets/images/logos-02.jpg" width="147"
                                                   height="24" alt=""></div>
                    <div style="width: 116px"><img src="/wp-content/themes/jd/assets/images/logos-03.jpg" width="116"
                                                   height="55" alt=""></div>
                    <div style="width: 197px"><img src="/wp-content/themes/jd/assets/images/logos-04.jpg" width="197"
                                                   height="48" alt=""></div>
                    <div style="width: 120px"><img src="/wp-content/themes/jd/assets/images/logos-05.jpg" width="120"
                                                   height="72" alt=""></div>
                    <div style="width: 77px"><img src="/wp-content/themes/jd/assets/images/logos-06.jpg" width="77"
                                                  height="79" alt=""></div>
                    <div style="width: 219px"><img src="/wp-content/themes/jd/assets/images/logos-07.jpg" width="219"
                                                   height="36" alt=""></div>
                    <div style="width: 173px"><img src="/wp-content/themes/jd/assets/images/logos-08.jpg" width="173"
                                                   height="34" alt=""></div>
                    <div style="width: 195px"><img src="/wp-content/themes/jd/assets/images/logos-09.jpg" width="195"
                                                   height="38" alt=""></div>
                    <div style="width: 207px"><img src="/wp-content/themes/jd/assets/images/logos-10.jpg" width="207"
                                                   height="58" alt=""></div>
                    <div style="width: 136px"><img src="/wp-content/themes/jd/assets/images/logos-11.jpg" width="136"
                                                   height="64" alt=""></div>
                </div>
            </div>
            <script>
                jQuery(document).ready(function () {
                    jQuery(".owl-carousel").owlCarousel({
                        loop: true,
                        margin: 45,
                        responsiveClass: true,
                        autoWidth: true,
                        autoplay: true,
                        autoplayTimeout: 3000,
                        autoplayHoverPause: true,
                        responsive: {
                            0: {items: 2},
                            600: {items: 4},
                            1000: {items: 6}
                        }
                    });
                });
            </script>
            <div class="pattern-block pattern-block__service-pattern2">
                <div class="pattern-block__in">
                    <div class="quote-block">
                        <div class="flex-wrap">
                            <div class="quote-block__title">
                                <div class="name">Николай Казанцев</div>
                                <div class="title">ЖД Учет</div>
                                <div class="social-links">
                                    <a href="#" class="vk"></a>
                                    <a href="#" class="fb"></a>
                                    <a href="#" class="ig"></a>
                                </div>
                            </div>
                            <div class="quote-block__image"></div>
                            <div class="quote-block__quote">
                                <p>Проводим полный спектр действий для оперативной регистрации вагонов пассажирского
                                    типа по-любому поводу: при покупке, при переоборудовании, при смене собственника,
                                    при изменении банковских или почтовых реквизитов собственника, а также для снятия с
                                    учета номеров.</p>

                                <p>Возниклы вопросы? Подробно на них ответим и порекомендуем лучший способ решения.</p>
                                <div class="btn btn-yellow">Получить консультацию</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

<?php
get_footer();