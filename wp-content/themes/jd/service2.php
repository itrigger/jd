<?php
/*
Template Name: Расторгнуть договор аренды
*/

get_header();
?>

    <div class="wrapper">

        <div class="service-header-block service-block_2">
            <div class="in">
                <h1>Требуется срочно
                    <span>расторгнуть договор</span>
                    <span>аренды?</span></h1>
                <p>Выведем вагон из аренды менее чем за 3 суток,
                    формы  документов предоставим.</p>

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
                    Оформим документацию
                    согласно установленным
                    нормам
                </div>
                <div class="steps-block__step step__step2 w20">
                    Направим запрос в Росжелдор
                </div>
                <div class="steps-block__step step__step3 w20">
                    Проследим за сохранностью
                    данных на каждом этапе
                    документооборота
                </div>
                <div class="steps-block__step step__step4 w20">
                    Обеспечим полную
                    конфиденциальность
                </div>
                <div class="steps-block__step step__step5 w20">
                    Развернуто ответим на любые
                    ваши вопросы
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
                                <p>После обращения компании «ЖД Учет», ответ из Росжелдор приходит в течение 1-2 суток.</p>
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