<?php
$this->title = 'Магазин';
use app\components\widgets\MenuHomeCatWidget;
use app\components\widgets\CaruselWidget;
use app\modules\news\components\widgets\NewsWidget;
?>
<div class="forum-home">

    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <div class="alert alert-success">
            <?=Yii::$app->session->getFlash('success')?>
        </div>
    <?php endif;?>
    <?php if (Yii::$app->session->hasFlash('error')): ?>
        <div class="alert alert-danger">
            <?=Yii::$app->session->getFlash('error')?>
        </div>
    <?php endif;?>

    <div class="baner-form-wrap">
        <div class="baner-home">
            <div class="inner-baner">
                <div class="block-text block-t"><p>ТОВАРЫ ДЛЯ <br> РЕМОНТА</p></div>
                <img src="/image/b1.jpg" alt=""/>
            </div>
            <div class="inner-baner">
                <img src="/image/b2.jpg" alt=""/>
                <div class="block-text block-pr"><p>В РОЗНИЦУ<br>ПО ОПТОВЫМ <br>ЦЕНАМ</p></div>
            </div>
            <div class="inner-baner">
                <div class="block-text block-f"><p>«ФОРУМ-НОВОСИБИРСК»<br> ЭТО ИНТЕРНЕТ СУПЕРМАРКЕТ<br> ТОВАРОВ ДЛЯ РЕМОНТА И <br>СОПУТСВУЮЩИХ ТОВАРОВ</p></div>
                <img src="/image/b3.jpg" alt=""/>
            </div>
            <div class="inner-baner">
                <img src="/image/b4.jpg" alt=""/>
                <div class="block-text block-z"><p>ЗАКАЗЫВАЙТЕ ИЗ ДОМА И<br> ПОЛУЧАЙТЕ СВОЙ<br> ЗАКАЗ В ТЕЧЕНИИ СУТОК В<br> УДОБНОЕ ВРЕМЯ</p></div>
            </div>
        </div>
        <div class="form-home">
            <div class="block-form">
                <div class="ramka">
                    <h1>ИЩЕТЕ ЛУЧШЕЕ?</h1>
                    <p>Закажите консультацию у нас<br> и мы подберем для Вас лучшие<br> материалы для ремонта!</p>
                </div>
                <input type="text" class="home-input" name="name" value="" placeholder="Как Вас зовут?" />
                <input type="text" class="home-input" name="phone" value="" placeholder="Укажите ваш телефон?" />
                <div class="checkbox-modern">
                    <input type="checkbox" id="cd-checkbox-1" checked>
                    <label for="cd-checkbox-1">Нужна бесплатная консультация</label>
                </div>
                <button name="btn-cons" id="btn-cons" type="button">ЗАКАЗАТЬ КОНСУЛЬТАЦИЮ</button>
            </div>
        </div>
    </div>

    <div class="header-catalog-block">
        <div class="inner-block">
            <div class="inner-inner-block"><h1>ОНЛАЙН-КАТАЛОГ ТОВАРОВ ДЛЯ РЕМОНТА</h1></div>
        </div>
    </div>
    <div class="catalog-block">
        <div class="left-block">
            <?= MenuHomeCatWidget::widget(); ?>
        </div>
        <div class="right-block-pages">
            <div class="wrap-right-block">
                <div class="header-right-pages">Профессиональный<br> монтаж</div>
                <div class="item-right-pages">
                    <a href="#">УСТАНОВКА ТЕПЛОГО ПОЛА</a>
                    <p>от 5500 руб - 1 от дня</p>
                </div>
                <div class="item-right-pages">
                    <a href="#">УКЛАДКА НАПОЛЬНЫХ ПОКРЫТИЙ</a>
                    <p>от 2500 руб - 1 от дня</p>
                </div>
                <div class="item-right-pages">
                    <a href="#">УСТАНОВКА ДВЕРИ</a>
                    <p>от 5500 руб - 1 от дня</p>
                </div>
                <div class="item-right-pages">
                    <a href="#">УКЛАДКА КЕРАМОГРАНИТА</a>
                    <p>от 2500 руб - 1 от дня</p>
                </div>
                <div class="middle-header-right-block">Оперативная <br>доставка</div>
                <div class="item-right-pages">
                    <a href="#">УСТАНОВКА ДВЕРИ</a>
                    <p>от 5500 руб - 1 от дня</p>
                </div>
                <div class="item-right-pages">
                    <a href="#">УКЛАДКА КЕРАМОГРАНИТА</a>
                    <p>от 2500 руб - 1 от дня</p>
                </div>
            </div>
        </div>
        <div style="clear: both;"></div>
    </div>

    <?= CaruselWidget::widget(); ?>

    <div class="header-catalog-block">
        <div class="inner-block">
            <div class="inner-inner-block"><h1 style="color:#8d340e;">О КОМПАНИИ "ФОРУМ-НОВОСИБИРСК"</h1><p>10 лет успеха на рынке товаров для ремонта</p></div>
        </div>
    </div>
    <div class="banner-news">
        <div class="banner-home">
            <div class="wrap-img-banner"><img src="/image/banner.jpg" alt=""/><p>Компания «Форум-Новосибирск» занимается поставками товаров для ремонта с 2005 года. Вот уже более 5-и лет, как мы пополнили наш ассортимент напольными покрытиями — ламинатом, пробкой, паркетной доской, линолеумом.</p></div>
        </div>
        <div class="news-home">
            <?= NewsWidget::widget(['cat'=>1]); ?>

            <div class="news-block">
                <h1 class="news-pages">А знаете ли Вы?</h1>
                <div class="slider-news">
                    <div class="slide">
                        <div class="inner-news-block">
                            <a href="#" class="news-name">ОКОННАЯ ЗАМАЗКА</a>
                            <p>Для размягчения затвердевшей оконной замазки ее смазывают сметанообразной пастой из мыла и оставляют для размягчения на 2-3 часа </p>
                            <a href="#" class="view-news">подробнее</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="inner-news-block">
                            <a href="#" class="news-name">ОКОННАЯ ЗАМАЗКА</a>
                            <p>Для размягчения затвердевшей оконной замазки ее смазывают сметанообразной пастой из мыла и оставляют для размягчения на 2-3 часа </p>
                            <a href="#" class="view-news">подробнее</a>
                        </div>
                    </div>
                    <div class="slide">
                        <div class="inner-news-block">
                            <a href="#" class="news-name">ОКОННАЯ ЗАМАЗКА</a>
                            <p>Для размягчения затвердевшей оконной замазки ее смазывают сметанообразной пастой из мыла и оставляют для размягчения на 2-3 часа</p>
                            <a href="#" class="view-news">подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<? $this->registerJs("

    $(function(){
        var HI=$(\".inner-baner img\").height();
        $(\".block-text\").height(HI);
        $(\".form-home\").height(HI*2);
        $(window).resize(function(){
            HI=$(\".inner-baner img\").height();
            $(\".block-text\").height(HI);
            $(\".form-home\").height(HI*2);
        });



        $('.slider-news').bxSlider({
            slideWidth: 230,
            minSlides: 1,
            maxSlides: 1,
            moveSlides: 1,
            controls: false,

        });



    });

");?>
