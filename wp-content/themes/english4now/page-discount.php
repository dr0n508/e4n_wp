<?php
/*
Template Name: Шаблон - Акция
*/

get_header(); ?>

<section class="top-page clearfix">
    <div class="container">
        <h1 class="header-page">Постоянные <span>скидки и акции</span></h1>
        <p class="slogan-page"><span>Скидки и акции на обучение в онлайн школе английсого по скайпу English4now</span></p>
    </div>
</section>

<section class="sale">
    <div class="container">
        <ul class="list-sale">
            <li class="sale-item paragraph-page">
                <div class="sale-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-sale/percentage.png" alt="persent sale">
                </div>
                <div class="sale-description">
                    <h2>Система скидок.</h2>
                    <p>Оплачивать обучение сразу по несколько занятий не только удобно но и выгодно.</p>
                    <ul>
                        <li><span class="sale-text">Скидка 3%</span> при разовой оплате пакета из <span class="sale-text">8 занятий</span></li>
                        <li><span class="sale-text">Скидка 5%</span> при разовой оплате пакета из <span class="sale-text">12 занятий</span></li>
                        <li><span class="sale-text">Скидка 8%</span> при разовой оплате пакета из <span class="sale-text">24 занятий</span></li>
                        <li><span class="sale-text">Скидка 10%</span> при разовой оплате пакета из <span class="sale-text">48 занятий</span></li>
                    </ul>
                </div>
            </li>

            <li class="sale-item paragraph-page">
                <div class="sale-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-sale/team.png" alt="persent sale">
                </div>
                <div class="sale-description">
                    <h2>"Семейная" она же "Корпоративная" акция.</h2>
                    <p>Если в вашей семье или компании обучаются одновременно <span class="sale-text">2 и более</span> человек, то каждый 11й урок
                        для каждого члена вашей семьи или компании будет <span class="sale-text">бесплатным.</span></p>
                </div>
            </li>
            <li class="sale-item paragraph-page">
                <div class="sale-icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-sale/like.png" alt="recommendation sale">
                </div>
                <div class="sale-description">
                    <h2>Бонус за рекомендацию:</h2>
                    <p>В размере 1 бесплатного урока полагается рекомендателю при условии что человек, пришедший по его совету, начнет обучение в нашей онлайн школе английского.</p>
                </div>
            </li>
        </ul>
    </div>
</section>





<?php get_footer(); ?>


