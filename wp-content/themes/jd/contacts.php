<?php
/*
Template Name: Контакты
*/

get_header();
?>

    <div class="wrapper">

        <div class="in-content">

            <h1>Свяжитесь с нами</h1>

            <h4 class="header_maxwidth70">Подробно ответим на все ваши вопросы и порекомендуем
                лучший способ решения.</h4>

            <div class="contact-line">
                <div class="flex-wrap header-footer-group__flex-wrap">
                    <div class="foot-block foot-block__1">
                        <div class="foot-block__header">
                            Адрес
                        </div>
                        <div class="foot-block__desc">
                            105064, г.&nbsp;Москва, Басманный&nbsp;тупик д.6А, строение&nbsp;1, офис&nbsp;11
                        </div>
                    </div>
                    <div class="foot-block foot-block__2">
                        <div class="foot-block__header">Email, телефон</div>
                        <div class="flex-wrap">
                            <div class="foot-block__contact foot-block__contact-if">
                                <a href="mailto:info@rvgn.ru">info@rvgn.ru</a>
                            </div>
                            <div class="foot-block__contact foot-block__contact-if">
                                +7 495 369 21 33
                            </div>
                        </div>
                    </div>
                    <div class="foot-block foot-block__3">
                        <div class="foot-block__header">Мы в соцсетях</div>
                        <div class="foot-block__social">
                            <div class="social-links">
                                <a href="#" class="vk"></a>
                                <a href="#" class="fb"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="button-group">
                <a href="#" class="btn btn-yellow">Коммерческое предложение</a>
                <a href="#" class="btn btn-alpha">Узнать дату последней регистрации вагонов</a>
            </div>

            <div class="map">
                <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Af1381e2cb3858b023e074cef51bacc13016003f77326471f72a39a70011fd006&amp;source=constructor" width="100%" height="470" frameborder="0"></iframe>
            </div>

            <div class="contact-form-block">
                <div class="form">
                    <h4>Задать вопрос</h4>
                    <form action="">
                        <div class="form_w">
                            <div class="form-input w50"><input type="text" placeholder="Имя"/></div>
                            <div class="form-input w50"><input type="text" placeholder="Email или телефон"/></div>
                            <div class="form-input w100"><textarea placeholder="Вопрос"></textarea></div>
                        </div>
                        <div class="submit_w">
                            <input type="submit" value="Отправить" class="btn btn-solid"/>
                        </div>
                        <div class="hint_w">
                            <div class="label-conf">Все данные защищены <span>и не передаются третьим лицам</span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <br>
        </div>

    </div>

<?php
get_footer();