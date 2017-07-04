<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>




	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
						<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
						<div class="entry-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>

						
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta">
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php comments_template(); ?>
			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php
/*
Template Name: Главная шаблон
*/
get_header(); ?>
<!--    <section class="super-sale">-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="wrap-text">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/womens-day.png" alt="img">-->
<!--                    <h2>Дарим <span>8</span> уроков*</h2>-->
<!--                    <p class="second-title">к празднику весны</p>-->
<!--                    <p class="description-sale">* акция действует до 8 марта включительно, только для новых клиентов</p>-->
<!--                    <p class="description-sale">* оcтавь заявку в форме - пройди бесплатный первый урок - оплати 8 уроков - получи в подарок 8 уроков</p>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </section>-->
<section class="welcome">
    <div class="container">
        <div class="row">
            <section class="col-lg-8 col-md-8 col-sm-7 h1-slogan">
                <h1 class="main-h1">Изучение <br>английского языка <br>по скайпу</h1>
                <p class="main-slogan">Преодолей <span>языковой барьер</span><br>
                    в интересной обучающей форме <span>за 2 месяца!</span></p>
            </section>
           <form action="<?php echo get_template_directory_uri(); ?>/feedback-free.php" class="form-free-lesson col-lg-4 col-md-4 col-sm-5 center-block" method="POST">
                <div class="wrapper-form">
                    <header class="header-form">Закажите <span>бесплатный</span> урок уже сейчас</header>
                    <input type="text" placeholder="Имя" name="fio" required="required" data-validation-required-message="Пожалуйста, введите свое имя" />
                    <input type="text" placeholder="Skype" name="skype" required="required" data-validation-required-message="Пожалуйста, введите свой Skype" />
                    <input type="tel" placeholder="Телефон (в межд.формате)" name="tel" required="required" data-validation-required-message="Пожалуйста, введите свой телефон" />
                    <input type="email" placeholder="Email" name="mail" required="required" data-validation-required-message="Пожалуйста, введите свой Email" />
                    <input type="submit" onclick="yaCounter33295048.reachGoal('ORDER'); return true;" class="submit-form" value="Отправить заявку"/>
                </div>
           </form>
        </div>
    </div>
</section>





<!--<div class="youtube"-->
<!--     id="lR4tJr7sMPM"-->
<!--     data-params="modestbranding=1&showinfo=0&controls=0&vq=hd720"-->
<!--     style="width: 640px; height: 360px;">-->
<!--</div>-->


<!--------------------advantages SECTION------------------------>
<section id="advantages-skype" class="advantages">
        <div class="container">
            <h2 class="header-section">Почему английский по скайпу это <span>лучшее решение?</span></h2>
            <ul class="clearfix">
                <li class="col-lg-3 col-md-3 col-sm-6">
                    <div class="wrap-adw adw1">
                        <div class="arrow_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/comfortable.png" width="64" height="64" alt="ico"/>
                        </div>
                        <h3>Комфортное место</h3>
                        <p>Вы можете заниматься дома, в своем офисе, в отпуске - везде где есть интернет</p>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-6">
                    <div class="wrap-adw adw2">
                        <div class="arrow_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/calendar-icons.png" width="64" height="64" alt="ico"/>
                        </div>
                        <h3>Индивидуальное расписание</h3>
                        <p>График занятий вы составляете себе сами под свой образ и стиль жизни</p>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-6">
                    <div class="wrap-adw adw3">
                        <div class="arrow_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/money192.png" width="64" height="64" alt="ico"/>
                        </div>
                        <h3>Экономия времени</h3>
                        <p>Нет необходимости тратить время на поездки к репетитору или на курсы, один клик и вы на уроке</p>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-6">
                    <div class="wrap-adw adw4">
                        <div class="arrow_box">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/progress.png" width="64" height="64" alt="ico"/>
                        </div>
                        <h3>Реальный результат</h3>
                        <p>Занимаясь по скайпу вы используете все возможности и ресурсы интернета благодаря чему обучение происходит максимально эффективно.</p>
                    </div>
                </li>
            </ul>
    </div>
</section>


<!--------------------why-we SECTION------------------------>
<section class="why-we">
    <div class="container">
        <h2 class="header-section section-black">Почему вам <span>нужно учиться</span> в нашей школе?</h2>
        <section class="answer-why-we2">
            <div class="container">
                <ul class="why-part col-lg-6 col-md-6 col-sm-6">
                    <li class="col-lg-12">
                        <div class="wrap-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/Mind_gears_64.png"   width="64" height="64" alt="ico"/>
                        </div>
                            <p><span>Креативность, опытность</span> и профессионализм всего преподавательского состава</p>
                    </li>
                    <li class="col-lg-12">
                        <div class="wrap-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/Lightbulb_idea_64.png" width="64" height="64" alt="ico"/>
                        </div>
                        <p><span>Акцент на беглом разговорном</span>английском и доступной подаче сложной грамматики</p>
                    </li>
                    <li class="col-lg-12">
                        <div class="wrap-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/Free_sticker_64.png" width="64" height="64" alt="ico"/>
                        </div>
                        <p><span>Полностью бесплатные</span> учебные материалы</p>
                    </li>
                </ul>
                <ul class="why-part part2 col-lg-6 col-md-6 col-sm-6">
                    <li class="col-lg-12">
                        <div class="wrap-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/Graduate_certificate_64.png" width="64" height="64" alt="ico"/>
                        </div>
                        <p><span>Сертификат по окончанию курса</span> и после успешной сдачи теста</p>
                    </li>
                    <li class="col-lg-12">
                        <div class="wrap-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/Screen_player_64.png" width="64" height="64" alt="ico"/>
                        </div>
                        <p><span>Интерактивные уроки</span> с использованием видео- и аудиоматериалов, игр и активного общения</p>
                    </li>
                    <li class="col-lg-12">
                        <div class="wrap-img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icon_advantages/Number_and_database_64.png" width="64" height="64" alt="ico"/>
                        </div>
                        <p><span>Возможность оплаты от 1 урока</span> система скидок при оплате нескольких занятий.</p>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</section>



<!--------------------spent-lesson SECTION------------------------>
<section class="spent-lesson" id="spent-lesson">
    <div class="container">
        <div class="row">
            <h2 class="header-section">Как проходит <span>наш урок</span>?</h2>
            <p class="descr-lesson col-lg-6 col-md-6">Урок английского по Скайпу предусматривает постоянную разговорную практику, за счет этого все теоретические наработки становятся активными, что позволяет свободно говорить на английском, употребляя ранее выученные, доведенные до автоматизма конструкции.</p>
            <p class="descr-lesson col-lg-6 col-md-6">  Наши преподаватели создают наиболее благоприятные условия для того, чтобы урок английского по Скайпу был максимально продуктивным. Все для того, чтобы ученик преодолел языковой барьер, научился мыслить по -английски, мог перефразировать сложные предложения, находил синонимы, развивал разговорную речь. </p>
            <section class="col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                <h3><span>Принципы преподавания</span> наших учителей:</h3>
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <div class="rule-lesson">
                        <i class="fa fa-thumbs-up"></i>
                        <p><b>Мотивация</b>: пробудить и поддерживать интерес к обучению</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <div class="rule-lesson">
                        <i class="fa fa-comments"></i>
                        <p>Максимум <b>разговорной практики</b> каждый урок</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <div class="rule-lesson">
                        <i class="fa fa-exclamation"></i>
                        <p>Внимание к <b>вашим потребностям</b></p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <div class="rule-lesson">
                        <i class="fa fa-book"></i>
                        <p>Граматика в <b>простой и доступной</b> форме</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <div class="rule-lesson">
                        <i class="fa fa-pie-chart"></i>
                        <p>Тренинг <b>всех аспектов</b> языка: говорение, восприятие на слух, чтение и письмо.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-4">
                    <div class="rule-lesson">
                        <i class="fa fa-check-circle"></i>
                        <p><b>Регулярный контроль</b> знаний и повторение пройдённого материала</p>
                    </div>
                </div>
                </div>
            </section>
            <div class="col-lg-6 youtube-wrapper">
                <div class="row">


                    <h3><span>Пример урока</span> с нашим преподавателем</h3>
                    <div class="youtube"
                         id="k5qCD7cAVCo"
                         >
                    </div>
                </div>
<!--                <div class="embed-responsive embed-responsive-16by9">-->
<!--                    <iframe width="560" height="315" src="https://www.youtube.com/embed/k5qCD7cAVCo" frameborder="0" allowfullscreen></iframe>-->
<!--                </div>-->
            </div>
    </div>
    <div class="need-for-lesson visible-lg">
        <div class="container">
                <h4>Для проведения уроков необходимы:</h4>
                <ul>
                    <li>
                        <i class="fa fa-television"></i>
                        Компьютер c установленым Skype</li>
                    <li>
                        <i class="fa fa-chrome"></i>
                        Доступ в Internet
                    </li>
                    <li>
                        <i class="fa fa-video-camera"></i>
                        Веб-камера
                    </li>
                </ul>
        </div>
    </div>
    </div>
</section>


<section class="do-first-step hidden-xs">
    <div class="container clearfix">
        <p class="text-block">Попробуйте обучение по Skype
            на бесплатном вводном уроке,<br/>
            закажите прямо сейчас!</p>
        <p class="btn-red"><a href="#" data-toggle="modal" data-target="#order-form">Заказать</a></p>
    </div>
</section>




<!--------------------courses SECTION------------------------>
<section class="courses hidden-xs">
    <div class="container-fluid">
    <h2 class="header-section">Выберите <span>свой курс</span></h2>
        <ul class="new-course clearfix">
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="wrapper-new-course clearfix">
                    <div class="top" data-same-height="course" style="height: 155px;">
                        <h3><span>Базовый</span> английский</h3>
                        <p>Базовый курс английского по скайпу разработан для тех, кто собирается изучить English с нуля или после длительного перерыва. Курс способствует мгновенному усвоению материала и эффективному практическому его использованию.</p>
                    </div>
                    <div class="bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/courses/basic-slim.jpg" width="500" height="215" alt="Базовый английский"/>
                        <a class="more-course" href="<?php echo esc_url( home_url( '/' ) ); ?>kyrsu/kyrs-base-english/"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="wrapper-new-course clearfix">
                    <div class="top" data-same-height="course" style="height: 155px;">
                        <h3><span>Разговорный</span> английский</h3>
                        <p>Цели обучения подразумевают преодоление разговорного барьера, расширение словарного запаса, развитие навыков аудирования и углубление в грамматические тонкости английского языка.</p>
                    </div>
                    <div class="bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/courses/spoken-slim.jpg" width="500" height="215" alt="Базовый английский"/>
                        <a class="more-course" href="<?php echo esc_url( home_url( '/' ) ); ?>kyrsu/spoken-english/"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="wrapper-new-course clearfix">
                    <div class="top" data-same-height="course" style="height: 155px;">
                        <h3>Английский для <span>детей</span></h3>
                        <p>Курс предусматривает использование специальных коммуникативных методик, уроки сопровождаются лингвистическими играми и упражнениями, целью которых является развитие творческого потенциала ребенка и навыков свободного общения на английском.</p>
                    </div>
                    <div class="bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/courses/children-slim.jpg" width="500" height="215" alt="Базовый английский"/>
                        <a class="more-course" href="<?php echo esc_url( home_url( '/' ) ); ?>kyrsu/english-for-children/"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="wrapper-new-course clearfix">
                    <div class="top" data-same-height="course" style="height: 155px;">
                        <h3><span>Бизнес</span> английский</h3>
                        <p>Цель курса – изучить деловые коммуникативные техники вашей профессиональной направленности, расширить ваш деловой словарь, приобрести навыки, которые нужны для устной или письменной коммуникации с зарубежными партнерами.</p>
                    </div>
                    <div class="bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/courses/business-slim.jpg" width="500" height="215" alt="Базовый английский"/>
                        <a class="more-course" href="<?php echo esc_url( home_url( '/' ) ); ?>kyrsu/business-english/"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="wrapper-new-course clearfix">
                    <div class="top" data-same-height="course" style="height: 155px;">
                        <h3>Подготовка к <span>экзаменам</span></h3>
                        <p>Наши преподаватели готовят студентов к самым популярным зарубежным экзаменам, таким как: IELTS, CAE, TOEFL и кембриджским тестам на проверку степени общего English и деловой речи, курс предназначен как для взрослых так и для детей.</p>
                    </div>
                    <div class="bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/courses/exam-slim.jpg" width="500" height="215" alt="Базовый английский"/>
                        <a class="more-course" href="<?php echo esc_url( home_url( '/' ) ); ?>kyrsu/exam-english/"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </li>
            <li class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <div class="wrapper-new-course clearfix">
                    <div class="top" data-same-height="course" style="height: 155px;">
                        <h3>С <span>носителем</span> языка</h3>
                        <p>Курс - это отличная возможность для людей с базовым знанием английского существенно улучшить свою разговорную речь. Такой способ изучения способствует развитию навыков грамотно выражать свои мысли и на слух воспринимать живой английский язык.</p>
                    </div>
                    <div class="bottom">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/courses/native-slim.jpg" width="500" height="215" alt="Базовый английский"/>
                        <a class="more-course" href="<?php echo esc_url( home_url( '/' ) ); ?>kyrsu/native-english/"><i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</section>






    <!--------------------price SECTION------------------------>
    <section class="price">
        <div class="container">
            <h2 class="header-section section-black"><span>Стоимость уроков</span> английского языка по скайпу</h2>

            <div class="wrapper-text-section">
                <div class="row">
                    <div class="col-sm-6">
                        <img class="icon-flag" src="<?php echo get_template_directory_uri(); ?>/img/russia-flag.png" alt="russian teacher">
                        <p class="text-price-section">Занятие с русскоязычным преподавателем <br>от  <span> 405</span>руб/урок. <br> (длительность 45 минут)</p>
                    </div>
                    <div class="col-sm-6">
                        <img class="icon-flag" src="<?php echo get_template_directory_uri(); ?>/img/uk-flag.png" alt="native teacher">
                        <p class="text-price-section">Занятие с носителем языка <br>от  <span> 855</span>руб/урок. <br> (длительность 45 минут)</p>
                    </div>
                </div>

                <p class="text-price-section sale-text">Также есть система скидок при оплате от 8 уроков.</p>
            </div>



        <p class="btn-red"><a href="<?php echo esc_url( home_url( '/' ) ); ?>sale/">подробнее о ценах</a></p>
    </div>





</section>

<!--------------------start-study SECTION------------------------>
<section class="start-study hidden-xs">

        <div class="container">
            <h2 class="header-section">
                4 Простых шага <span>для начала</span> обучения:</h2>




            <ul class="steps">
                <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="wrap-step">
                        <h3 class="header-step">Заполни форму заказа бесплатного занятия</h3>
                        <div class="wrap-ico-step"><i class="fa fa-hand-pointer-o"></i></div>
                        <div class="text-step">Наш менеджер свяжется с вами в максимально короткое время для согласования времени проведения вводного урока.</div>
                        <div class="stage-step">a</div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="wrap-step">
                        <h3 class="header-step">Пройди с методистом вводный урок</h3>
                        <div class="wrap-ico-step"><i class="fa fa-user"></i></div>
                        <div class="text-step">На вводном уроке методист оценит уровень ваших знаний, расскажет об учебном процессе и ответит на все ваши вопроссы.</div>
                        <div class="stage-step">b</div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="wrap-step">
                        <h3 class="header-step">Пройди полноценое бесплатное занятие с преподавателем</h3>
                        <div class="wrap-ico-step"><i class="fa fa-graduation-cap"></i></div>
                        <div class="text-step">Первый бесплатный полноценный урок с вашим преподавателем.</div>
                        <div class="stage-step">c</div>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="wrap-step">
                        <h3 class="header-step">Получи скидку и приступи к обучению</h3>
                        <div class="wrap-ico-step"><i class="fa fa-credit-card"></i></div>
                        <div class="text-step">В нашей школе предусмотрена система скидок, в зависимости от количества проплаченных занятий.</div>
                        <div class="stage-step">d</div>
                    </div>
                </li>
            </ul>
        </div>

</section>


<section class="do-first-step">
        <div class="container clearfix">
            <p class="text-block">Сделай первый шаг - закажи бесплатный урок</p>
            <p class="free-lesson btn-red"><a href="#" data-toggle="modal" data-target="#order-form">Заказать</a></p>
        </div>
</section>




<!--------------------testimonials SECTION------------------------>
<section class="testimonials">

    <h2 class="header-section">Студенты <span>говорят о нас</span></h2>
    <div class="container">
        <div class="row">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/tatjanaKalcedanova.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Татьяна Калцеданова"/>
                        <div class="text-testimonials">
                            <p>Благодаря профессионализму моего преподавателя Анастасии, я не только начала лучше разбираться в грамматике английского языка, но и  улучшила свое произношение.
                                Такой формат обучения, стал для меня одним из лучших, так как занятия индивидуальны, что позволяет сразу разобрать  непонятные места и снять языковой барьер.</p>
                            <p class="name-client">Татьяна Калцеданова</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/sadovnikova.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Юлия Садовникова"/>
                        <div class="text-testimonials">
                            <p>
                                Большое человеческое спасибо онлайн школе English4now! За сильных и адекватных преподавателей и возможность заниматься по личному расписанию. В свое время я отказалась от оффлайн-репетитора в пользу онлайн-занятий и еще ни разу не пожалела. Главное - правильно выбрать школу и своего онлайн-наставника. Поверьте, это самое главное! Остальное пойдет как по маслу. Оксана (мой преподаватель из English4now), всегда (!) указывает на ошибки как грамматические, так и на произношение, индивидуально строит урок (видит, где её ученик «плавает» и не дотягивает, и исправляет это!). Плюс ко всему она чертовски обаятельна, и заражает любовью к английскому языку! English4now, не меняйтесь, пожалуйста! И берегите своих профессионалов! Ещё раз спасибо!
                            </p>
                            <p class="name-client">Юлия Садовникова</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/irinaErmolaeva.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Ирина Ермолаева"/>
                        <div class="text-testimonials">
                            <p>
                                На сегодняшний день идет третий месяц моих занятий-не так много, но уже и не мало. Хочется отметить, что занятия по скайпу, конечно, не заменяют общения в живую, но отлично экономят время, которого в больших городах очень не хватает.
                                Основная моя цель - свободно говорить на английском языке, читать, переводить научные статьи.
                                Лично для меня занятия по скайпу это - возможность составлять свой индивидуальный график, не тратить время на дорогу-до и после занятия, и, между прочим, также экономить материальные средства, ведь урок в "живую"-стоит гораздо дороже, ну и конечно индивидуальный подход-занятия проходят "один на один", всегда есть возможность уделить время какой-то конкретной теме, где есть пробелы и недопонимания.
                                Конкретно о занятиях с Юлией - интересно, грамматно, доступно, позитивно,  легко-непринужденно. Юлия использует в своей практике все возможное-картинки, видео, аудио-материалы, книги. Практически на каждом уроке мы ведем диалоги на английском языке на сводобные темы.
                                Появилась надежда, наконец, заговорить на английском-не заморачиваться в дальнейшем с общением в других странах, свободно читать на английском в интернете, переводить нужные статьи)))
                            </p>
                            <p class="name-client">Ирина Ермолаева</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/lalaManasan.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Лала Манасян"/>
                        <div class="text-testimonials">
                            <p>
                                Добрый день! Мне очень нравится заниматься с преподавателем Оксаной, на каждом занятии узнаю много нового. Умеет мотивировать, подбирает интересные темы для обсуждения, использует хорошие учебники и различные статьи. Все материалы подобраны для моего уровня знаний, интересов. Занятие обычно состоит из диалогов, пересказов прочитанных статей, их обсуждения, изучения новых слов и фраз. Спасибо!
                            </p>
                            <p class="name-client">Лала Манасян</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/andreyKravchenko.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Андрей Кравченко"/>
                        <div class="text-testimonials">
                            <p>
                                Оксана помогла мне расширить словарный запас. Я стал быстрее, чем раньше формировать предложения.
                                Я читаю адаптированные тексты вообще без нужды смотреть в словарь. Более сложные тексты я понимаю, догадываясь по смыслу,
                                т.к.потихоньку набиваю руку на переводах. Я довольно легко и быстро могу переводить фразу с русского на английский,
                                если конечно в них нет каких-то редких слов. Если мне дать достаточно времени, то я грамматически правильно составяю
                                предложения. Либо, если я допустил ошибку, я исправлюсь, либо пойму в чем ошибка, если меня исправят. Русскоязычных преподавателей и
                                носителей я понимаю практически всегда без просьбы повторить предложение.
                            </p>
                            <p class="name-client">Андрей Кравченко</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/ekaterinagerber.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Екатерина Гербер"/>
                        <div class="text-testimonials">
                            <p>
                                Со школой English4now познакомилась полгода назад. Сразу понравилось внимательное отношение ко мне, как к клиенту. Со мной быстро связались, учитывая мои цели и интересы, подобрали для меня преподавателя. Я занимаюсь с Ириной Макленнан и очень довольна уроками, где я, само собой, решаю грамматические задачи,  узнаю новые полезные слова, выполняю интересные упражнения. Но самое важное и увлекательное – это полное погружение в английский язык. В течение всего занятия я слышу только английскую речь и говорю только на английском. Такие систематические занятия помогли мне снять языковой барьер, сейчас я намного свободнее выражаю свои мысли, понимаю и общаюсь с носителями английского языка.
                            </p>
                            <p class="name-client">Екатерина Гербер</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/vorobjovalex.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Александр Воробьев"/>
                        <div class="text-testimonials">
                            <p>
                                В школе English4now сразу понравилось внимательное отношение ко мне, как к клиенту. Со мной быстро связались, учитывая мои цели и интересы, подобрали для меня преподавателя. Я занимаюсь с Анной, а это было очень не просто. Я инвалид 1гр. у  меня церебральный паралич.
                                Я очень доволен уроками, где я, сам собой, решаю грамматические задачи,  узнаю новые полезные слова, выполняю интересные упражнения. Но самое важное и увлекательное – это полное погружение в английский язык. В течение всего занятия я слышу только английскую речь и говорю только на английском. Такие систематические занятия помогли мне снять языковой барьер, сейчас я намного свободнее выражаю свои мысли, понимаю и общаюсь с носителями английского языка.

                            </p>
                            <p class="name-client">Александр Воробьев</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/moseychyk.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Андрей Мосейчук"/>
                        <div class="text-testimonials">
                            <p>
                                Уважаемые работники English4now, выражаю Вам свою благодарность за успешное продвижение на рынке в области оказания услуг по преподаванию иностранных языков. Ваш сайт очень информативен, имеет свободный доступ, популярен и необходим. Ваш коллектив всегда отзывчив и внимателен. Особо хочу отметить преподавателя иностранных языков Оксану. Прекрасный человек , талантлива , интересна , обладает уникальным подходом к каждому ученику ( занимаемся у неё в кол-ве трёх человек), отзывчива , корректна, и всегда умеет зажечь в ученике искорку необходимости любить и разговаривать на языках других стран. С  уважением Андрей М.
                            </p>
                            <p class="name-client">Андрей Мосейчук</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/ksenia.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Ксения Романова"/>
                        <div class="text-testimonials">
                            <p>
                                Хочу поблагодарить школу за занятия! Мне удалось заниматься с Евгенией и, если она вернётся к преподаванию, я буду очень рада встрече с ней! Она может поддержать любую тему, всем интересуется и, самое главное, что когда я вот так прыгаю с темы на тему, забывая специфическую лексику, она всегда может подсказать нужное слово, и потом, на следующем занятии мы обязательно повторим новые слова несколько раз разными способами. Теперь я занимаюсь с Оксаной. Она всегда выслушивает мои пространные речи, задаёт наводящие вопросы, всегда задаёт домашнее задание. Всегда спрашивает обратную связь после урока, что улучшить, что изменить, что понравилось, что более интересно и корректирует следующие занятия в связи с моими пожеланиями. Если говорить об общих принципах, которые я имею счастье наблюдать в преподавании обеих моих дорогих учительниц, то это, в первую очередь, развитие разговорных навыков и ненавязчивое включение грамматики в канву урока. Спасибо им большое за то, что у меня пропал разговорный барьер и теперь хочется учить все новые и новые слова, чтобы использовать их в беседе с иностранцами и избегать соблазна обходиться простыми фразами!!!
                            </p>
                            <p class="name-client">Ксения Романова</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/elena_barsukova.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Елена Барсукова"/>
                        <div class="text-testimonials">
                            <p>
                                Я очень довольна занятиями английским по скайпу.
                                Мне нравится, что English4now учитывает пожелания своих студентов. Не просто изучение какого-то курса английского, а его изучение с учетом конкретной задачи учащегося в данный момент. Мне удалось подтянуть свой разговорный английский за 3 недели перед поездкой на международную конференцию. Я чувствовала себя на этот раз более свободно, похоже, мы с носителями языка лучше понимали друг друга. Эти занятия очень комфортны благодаря индивидуальному расписанию, а с моим преподавателем Анной, мне кажется, мы понимаем друг друга буквально с полуслова. Благодаря Ане я за короткий срок узнала очень много о языке и грамматике, а также новые, интересные и полезные для меня сайты в интернете. Я никогда раньше не успевала так много повторить. Рекомендую эти уроки, особенно тем, кто много раз в жизни начинал изучать английский и снова бросал по разным причинам. Спасибо огромное. Надеюсь, и дальше English4now будет мне помогать улучшать мой английский. Теперь я буду заниматься с еще большим настроением и удовольствием. Я поверила, что "Английский - это не трудно. Трудный кто-то внутри меня".
                            </p>
                            <p class="name-client">Елена Барсукова</p>
                        </div>
                    </div>
                </div>


                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/olga-iskandirova_.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Ольга Искандирова"/>
                        <div class="text-testimonials">
                            <p>
                                Думаю, что многие понимают, что без практики языка навык теряется, даже если вы его учили в школе, в институте, на курсах. Так и было со мной. Постоянной практики у меня не было, а  разговорный язык  требовался лишь иногда – в путешествиях, в командировках, в общении с коллегами – но все равно хотелось уметь общаться и правильно высказывать свои мысли. Так я решила, что буду брать уроки on-line. В школе English4now я  занимаюсь уже около полугода,  с преподавателем Анной. Для поддержания навыка английский по Skype это лучший вариант: вы не тратите время на дорогу до преподавателя, занимаетесь в удобное для вас время и в удобном месте, не подстраиваетесь под группу – с вами работают индивидуально. Самое главное,  что произошло за время занятий – это то, что исчез барьер и я могу общаться. Отдельно хочется отметить профессионализм и гибкость преподавателя, что для меня особенно важно именно сейчас, так как недавно я стала мамой.
                            </p>
                            <p class="name-client">Ольга Искандирова</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/dmitriy-samriy.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Дмитрий Замрий"/>
                        <div class="text-testimonials">
                            <p>
                                В школе English4now учитываются все пожелания студентов, что позволяет делать программы очень гибкими и разнообразными, сохраняя при этом высокий уровень подаваемого материала. Постоянное чередование увлекательных игр, просмотра короткометражных фильмов, прослушивания интервью, просмотра презентаций, а так же постоянное общение на английском – это именно то, что мне нужно для эффективного обучения. Еще хочу обратить внимание на такой важный аспект в процессе обучения, как мотивация студентов. Ведь все мы понимаем, что настоящий преподаватель не просто учит, а прививает любовь к своему предмету и мотивирует. В этом плане я так же удовлетворен на 100%. Спасибо вам.
                            </p>
                            <p class="name-client">Дмитрий Замрий</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/inna-baranchuk.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Инна Баранчук"/>
                        <div class="text-testimonials">
                            <p>
                                Английский со школы знала неплохо, но всегда хотелось улучшить свои знания. Сейчас он мне просто необходим для работы, но, к сожалению, не хватает времени для посещения стационарных занятий. Отличным решением стали онлайн уроки в школе Eglish4now. Школа действительно очень хорошая. Преподаватели – квалифицированные и опытные люди. На занятиях всегда интересно и весело. А главное, что спустя 2 месяца я начала понимать, что уже не боюсь общаться на английском языке. Спасибо преподавателям школы English4now за профессионализм и старание!
                            </p>
                            <p class="name-client">Инна Баранчук</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/nastja-ilchenko.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Настя Ильченко"/>
                        <div class="text-testimonials">
                            <p>
                                Решила заниматься в школе, чтобы повысить уровень бизнес английского. На данный момент гораздо лучше стала понимать носителей языка, без труда и заминок поддерживаю разговор на любые темы: политика, экономика, технологии. Также значительно улучшила свой стиль написания деловых писем, которые без помощи переводчика легко наполняю интересными словосочетаниями и конструкциями. Занятия проходят в веселой непринужденной атмосфере, в виде игр, ассоциаций и диалогов, что способствует быстрому и легкому усвоению материала. Планирую продолжать занятия. Спасибо)
                            </p>
                            <p class="name-client">Настя Ильченко</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/ulia-fomenko.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Юля Фоменко"/>
                        <div class="text-testimonials">
                            <p>
                                Пользуясь случаем, хочу поблагодарить учителей и менеджеров школы … Благодаря им, особенно моему преподавателю Анне , за пару месяцев я значительно улучшила уровень владения английским языкам, теперь без труда самостоятельно веду переписку с зарубежными деловыми партнерами. Раньше мне всегда требовалась помощь коллег, знающих английский. Спасибо Вам огромное! Я и дальше буду у Вас заниматься, ведь нет предела совершенству.
                            </p>
                            <p class="name-client">Юля Фоменко</p>
                        </div>
                    </div>
                </div>

                <div class="item clearfix">
                    <div class="wrap-testimonials">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/review/nadezda-belebey.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Надежда Бэлэбэу"/>
                        <div class="text-testimonials">
                            <p>
                                Школа достаточно интересная, в основном все зависит от студента. Цены на обучение доступные! Нормальная школа для тех, кто настроен выучить язык и знает зачем ему это нужно. Мотивация это самое главное.
                            </p>
                            <p class="name-client">Надежда Бэлэбэу</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        </div>
    </div>





    <!--<div class="container-fluid">-->
<!--    <div id="testimonials-carousel" class="owl-carousel owl-theme">-->
<!--    <div class="item">-->
<!--        <div class="wrap-testimonial clearfix">-->
<!--            <div class="wrap-photo-client">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/tatjanaKalcedanova.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Татьяна Калцеданова"/>-->
<!--            </div>-->
<!--            <div class="wrap-text-testimonial">-->
<!--                <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />Большое спасибо администраторам и преподавателям школы English4now за возможность заниматься английским языком по Skype ,не выходя из дома, в любое  время , в любой день недели , что с моей загруженностью на работе  и отсутствием свободного времени  - огромное счастье.-->
<!--                        Благодаря профессионализму моего преподавателя Анастасии, я не только начала лучше разбираться в грамматике английского языка, но и  улучшила свое произношение.-->
<!--                        Такой формат обучения, стал для меня одним из лучших, так как занятия индивидуальны, что позволяет сразу разобрать  непонятные места и снять языковой барьер.</p></blockquote>-->
<!--                <p class="name-client">Татьяна Калцеданова</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="item">-->
<!--        <div class="wrap-testimonial clearfix">-->
<!--            <div class="wrap-photo-client">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/sadovnikova.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Юлия Садовникова"/>-->
<!--            </div>-->
<!--            <div class="wrap-text-testimonial">-->
<!--                <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />-->
<!--                        Большое человеческое спасибо онлайн школе English4now! За сильных и адекватных преподавателей и возможность заниматься по личному расписанию. В свое время я отказалась от оффлайн-репетитора в пользу онлайн-занятий и еще ни разу не пожалела. Главное - правильно выбрать школу и своего онлайн-наставника. Поверьте, это самое главное! Остальное пойдет как по маслу. Оксана (мой преподаватель из English4now), всегда (!) указывает на ошибки как грамматические, так и на произношение, индивидуально строит урок (видит, где её ученик «плавает» и не дотягивает, и исправляет это!). Плюс ко всему она чертовски обаятельна, и заражает любовью к английскому языку! English4now, не меняйтесь, пожалуйста! И берегите своих профессионалов! Ещё раз спасибо!-->
<!---->
<!--                </p></blockquote>-->
<!--                <p class="name-client">Юлия Садовникова</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="item">-->
<!--        <div class="wrap-testimonial clearfix">-->
<!--            <div class="wrap-photo-client">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/irinaErmolaeva.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Ирина Ермолаева"/>-->
<!--            </div>-->
<!--            <div class="wrap-text-testimonial">-->
<!--                <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />-->
<!--                        Свои занятия по изучению английского языка по скайпу я начала в начале марта 2017г, стоит заметить не так давно. На сегодняшний день идет третий месяц моих занятий-не так много, но уже и не мало. Начало положено. Хочется отметить, что занятия по скайпу, конечно, не заменяют общения в живую, но отлично экономят время, которого в больших городах очень не хватает.-->
<!--                        Основная моя цель-свободно говорить на английском языке, читать, переводить научные статьи.-->
<!--                        Немного о преимуществах изучения английского языка по скайпу. Лично для меня это-возможность составлять свой индивидуальный график, возможность быть всегда на связи-в любое время дня, не тратить время на дорогу-до и после занятия, и, между прочим, также экономить материальные средства, ведь урок в "живую"-стоит гораздо дороже, ну и конечно индивидуальный подход-занятия проходят "один на один", всегда есть возможность уделить время какой-то конкретной теме, где есть пробелы и недопонимания.-->
<!--                        Конкретно о занятиях с Юлией - интересно, грамматно, доступно, позитивно,  легко-непринужденно. Юлия использует в своей практике все возможное-картинки, видео, аудио-материалы, книги. Практически на каждом уроке мы ведем диалоги на английском языке на сводобные темы. Всегда есть домашние задания, которых постоянно хочется все больше и больше.-->
<!--                        Занятия просто супер, планирую их продолжать. Появилась надежда, наконец, заговорить на английском-не заморачиваться в дальнейшем с общением в других странах, свободно читать на английском в интернете, переводить нужные статьи)))-->
<!--                    </p></blockquote>-->
<!--                <p class="name-client">Ирина Ермолаева</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="item">-->
<!--        <div class="wrap-testimonial clearfix">-->
<!--            <div class="wrap-photo-client">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/lalaManasan.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Лала Манасян"/>-->
<!--            </div>-->
<!--            <div class="wrap-text-testimonial">-->
<!--                <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />-->
<!--                        Добрый день! Мне очень нравится заниматься с преподавателем Оксаной, на каждом занятии узнаю много нового. Умеет мотивировать, подбирает интересные темы для обсуждения, использует хорошие учебники и различные статьи. Все материалы подобраны для моего уровня знаний, интересов. Занятие обычно состоит из диалогов, пересказов прочитанных статей, их обсуждения, изучения новых слов и фраз. Спасибо!-->
<!--                    </p></blockquote>-->
<!--                <p class="name-client">Лала Манасян</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--    <div class="item">-->
<!--        <div class="wrap-testimonial clearfix">-->
<!--            <div class="wrap-photo-client">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/andreyKravchenko.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Андрей Кравченко"/>-->
<!--            </div>-->
<!--            <div class="wrap-text-testimonial">-->
<!--                <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />-->
<!--                        Оксана помогла мне расширить словарный запас. Я стал быстрее, чем раньше формировать предложения.-->
<!--                        Я читаю адаптированные тексты вообще без нужды смотреть в словарь. Более сложные тексты я понимаю, догадываясь по смыслу,-->
<!--                        т.к.потихоньку набиваю руку на переводах. Я довольно легко и быстро могу переводить фразу с русского на английский,-->
<!--                        если конечно в них нет каких-то редких слов. Если мне дать достаточно времени, то я грамматически правильно составяю-->
<!--                        предложения. Либо, если я допустил ошибку, я исправлюсь, либо пойму в чем ошибка, если меня исправят. Русскоязычных преподавателей и-->
<!--                        носителей я понимаю практически всегда без просьбы повторить предложение.-->
<!--                    </p></blockquote>-->
<!--                <p class="name-client">Андрей Кравченко</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--	<div class="item">-->
<!--        <div class="wrap-testimonial clearfix">-->
<!--            <div class="wrap-photo-client">-->
<!--                <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/ekaterinagerber.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Екатерина Гербер"/>-->
<!--            </div>-->
<!--            <div class="wrap-text-testimonial">-->
<!--                <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />Со школой English4now познакомилась полгода назад. Сразу понравилось внимательное отношение ко мне, как к клиенту. Со мной быстро связались, учитывая мои цели и интересы, подобрали для меня преподавателя. Я занимаюсь с Ириной Макленнан и очень довольна уроками, где я, само собой, решаю грамматические задачи,  узнаю новые полезные слова, выполняю интересные упражнения. Но самое важное и увлекательное – это полное погружение в английский язык. В течение всего занятия я слышу только английскую речь и говорю только на английском. Такие систематические занятия помогли мне снять языковой барьер, сейчас я намного свободнее выражаю свои мысли, понимаю и общаюсь с носителями английского языка.</p></blockquote>-->
<!--                <p class="name-client">Екатерина Гербер</p>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->

<!--<div class="item">-->
<!--                <div class="wrap-testimonial clearfix">-->
<!--                    <div class="wrap-photo-client">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/vorobjovalex.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Александр Воробьев"/>-->
<!--                    </div>-->
<!--                    <div class="wrap-text-testimonial">-->
<!--                        <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />В школе English4now сразу понравилось внимательное отношение ко мне, как к клиенту. Со мной быстро связались, учитывая мои цели и интересы, подобрали для меня преподавателя. Я занимаюсь с Анной, а это было очень не просто. Я инвалид 1гр. у  меня церебральный паралич.-->
<!--Я очень доволен уроками, где я, сам собой, решаю грамматические задачи,  узнаю новые полезные слова, выполняю интересные упражнения. Но самое важное и увлекательное – это полное погружение в английский язык. В течение всего занятия я слышу только английскую речь и говорю только на английском. Такие систематические занятия помогли мне снять языковой барьер, сейчас я намного свободнее выражаю свои мысли, понимаю и общаюсь с носителями английского языка.</p></blockquote>-->
<!--                        <p class="name-client">Александр Воробьев</p>-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->


<!--	<div class="item">-->
<!--                <div class="wrap-testimonial clearfix">-->
<!--                    <div class="wrap-photo-client">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/moseychyk.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Андрей Мосейчук"/>-->
<!--                    </div>-->
<!--                    <div class="wrap-text-testimonial">-->
<!--                        <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />Уважаемые работники English4now, выражаю Вам свою благодарность за успешное продвижение на рынке в области оказания услуг по преподаванию иностранных языков. Ваш сайт очень информативен, имеет свободный доступ, популярен и необходим. Ваш коллектив всегда отзывчив и внимателен. Особо хочу отметить преподавателя иностранных языков Оксану. Прекрасный человек , талантлива , интересна , обладает уникальным подходом к каждому ученику ( занимаемся у неё в кол-ве трёх человек), отзывчива , корректна, и всегда умеет зажечь в ученике искорку необходимости любить и разговаривать на языках других стран. С  уважением Андрей М.</p></blockquote>-->
<!--                        <p class="name-client">Андрей Мосейчук</p>-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--		<div class="item">-->
<!--                <div class="wrap-testimonial clearfix">-->
<!--                    <div class="wrap-photo-client">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/ksenia.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Ксения Романова"/>-->
<!--                    </div>-->
<!--                    <div class="wrap-text-testimonial">-->
<!--                        <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />Хочу поблагодарить школу за занятия! Мне удалось заниматься с Евгенией и, если она вернётся к преподаванию, я буду очень рада встрече с ней! Она может поддержать любую тему, всем интересуется и, самое главное, что когда я вот так прыгаю с темы на тему, забывая специфическую лексику, она всегда может подсказать нужное слово, и потом, на следующем занятии мы обязательно повторим новые слова несколько раз разными способами. Теперь я занимаюсь с Оксаной. Она всегда выслушивает мои пространные речи, задаёт наводящие вопросы, всегда задаёт домашнее задание. Всегда спрашивает обратную связь после урока, что улучшить, что изменить, что понравилось, что более интересно и корректирует следующие занятия в связи с моими пожеланиями. Если говорить об общих принципах, которые я имею счастье наблюдать в преподавании обеих моих дорогих учительниц, то это, в первую очередь, развитие разговорных навыков и ненавязчивое включение грамматики в канву урока. Спасибо им большое за то, что у меня пропал разговорный барьер и теперь хочется учить все новые и новые слова, чтобы использовать их в беседе с иностранцами и избегать соблазна обходиться простыми фразами!!!</p></blockquote>-->
<!--                        <p class="name-client">Ксения Романова</p>-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            


<!--	    <div class="item">-->
<!--                <div class="wrap-testimonial clearfix">-->
<!--                    <div class="wrap-photo-client">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/olga-iskandirova_.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Ольга Искандирова"/>-->
<!--                    </div>-->
<!--                    <style type="text/css">-->
<!--                        .wrap-text-testimonial img{max-width: 62px !important;}-->
<!--                    </style>-->
<!--                    <div class="wrap-text-testimonial">-->
<!--                        <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />Думаю, что многие понимают, что без практики языка навык теряется, даже если вы его учили в школе, в институте, на курсах. Так и было со мной. Постоянной практики у меня не было, а  разговорный язык  требовался лишь иногда – в путешествиях, в командировках, в общении с коллегами – но все равно хотелось уметь общаться и правильно высказывать свои мысли. Так я решила, что буду брать уроки on-line. В школе English4now я  занимаюсь уже около полугода,  с преподавателем Анной. Для поддержания навыка английский по Skype это лучший вариант: вы не тратите время на дорогу до преподавателя, занимаетесь в удобное для вас время и в удобном месте, не подстраиваетесь под группу – с вами работают индивидуально. Самое главное,  что произошло за время занятий – это то, что исчез барьер и я могу общаться. Отдельно хочется отметить профессионализм и гибкость преподавателя, что для меня особенно важно именно сейчас, так как недавно я стала мамой.</p></blockquote>-->
<!--                        <p class="name-client">Ольга Искандирова</p>-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--<div class="item">-->
<!--                <div class="wrap-testimonial clearfix">-->
<!--                    <div class="wrap-photo-client">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/dmitriy-samriy.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Дмитрий Замрий"/>-->
<!--                    </div>-->
<!--                    <style type="text/css">-->
<!--                        .wrap-text-testimonial img{max-width: 62px !important;}-->
<!--                    </style>-->
<!--                    <div class="wrap-text-testimonial">-->
<!--                        <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />В школе English4now учитываются все пожелания студентов, что позволяет делать программы очень гибкими и разнообразными, сохраняя при этом высокий уровень подаваемого материала. Постоянное чередование увлекательных игр, просмотра короткометражных фильмов, прослушивания интервью, просмотра презентаций, а так же постоянное общение на английском – это именно то, что мне нужно для эффективного обучения. Еще хочу обратить внимание на такой важный аспект в процессе обучения, как мотивация студентов. Ведь все мы понимаем, что настоящий преподаватель не просто учит, а прививает любовь к своему предмету и мотивирует. В этом плане я так же удовлетворен на 100%. Спасибо вам.</p></blockquote>-->
<!--                        <p class="name-client">Дмитрий Замрий</p>-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="item">-->
<!--                <div class="wrap-testimonial clearfix">-->
<!--                    <div class="wrap-photo-client">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/inna-baranchuk.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Инна Баранчук"/>-->
<!--                    </div>-->
<!--                    <div class="wrap-text-testimonial">-->
<!--                        <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />Английский со школы знала неплохо, но всегда хотелось улучшить свои знания. Сейчас он мне просто необходим для работы, но, к сожалению, не хватает времени для посещения стационарных занятий. Отличным решением стали онлайн уроки в школе Eglish4now. Школа действительно очень хорошая. Преподаватели – квалифицированные и опытные люди. На занятиях всегда интересно и весело. А главное, что спустя 2 месяца я начала понимать, что уже не боюсь общаться на английском языке. Спасибо преподавателям школы English4now за профессионализм и старание!</p></blockquote>-->
<!--                        <p class="name-client">Инна Баранчук</p>-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="item">-->
<!--                <div class="wrap-testimonial clearfix">-->
<!--                    <div class="wrap-photo-client">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/nastja-ilchenko.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Настя Ильченко"/>-->
<!--                    </div>-->
<!--                    <div class="wrap-text-testimonial">-->
<!--                        <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />Решила заниматься в школе, чтобы повысить уровень бизнес английского. На данный момент гораздо лучше стала понимать носителей языка, без труда и заминок поддерживаю разговор на любые темы: политика, экономика, технологии. Также значительно улучшила свой стиль написания деловых писем, которые без помощи переводчика легко наполняю интересными словосочетаниями и конструкциями. Занятия проходят в веселой непринужденной атмосфере, в виде игр, ассоциаций и диалогов, что способствует быстрому и легкому усвоению материала. Планирую продолжать занятия. Спасибо)</p></blockquote>-->
<!--                        <p class="name-client">Настя Ильченко</p>-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="item">-->
<!--                <div class="wrap-testimonial clearfix">-->
<!--                    <div class="wrap-photo-client">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/ulia-fomenko.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Юля Фоменко"/>-->
<!--                    </div>-->
<!--                    <div class="wrap-text-testimonial">-->
<!--                        <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />Пользуясь случаем, хочу поблагодарить учителей и менеджеров школы … Благодаря им, особенно моему преподавателю Анне , за пару месяцев я значительно улучшила уровень владения английским языкам, теперь без труда самостоятельно веду переписку с зарубежными деловыми партнерами. Раньше мне всегда требовалась помощь коллег, знающих английский. Спасибо Вам огромное! Я и дальше буду у Вас заниматься, ведь нет предела совершенству.</p></blockquote>-->
<!--                        <p class="name-client">Юля Фоменко</p>-->
<!--                        -->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->


<!--            <div class="item">-->
<!--                <div class="wrap-testimonial clearfix">-->
<!--                    <div class="wrap-photo-client">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/img/review/nadezda-belebey.jpg" class="photo-client img-responsive img-circle" width="170" height="170" alt="Надежда Бэлэбэу"/>-->
<!--                    </div>-->
<!--                    <div class="wrap-text-testimonial">-->
<!--                        <blockquote class="text-testimonial"><p><img src="--><?php //echo get_template_directory_uri(); ?><!--/img/skobki.png" width="62px" height="53px" align="left" />Школа достаточно интересная, в основном все зависит от студента. Цены на обучение доступные! Нормальная школа для тех, кто настроен выучить язык и знает зачем ему это нужно. Мотивация это самое главное.</p></blockquote>-->
<!--                        <p class="name-client">Надежда Бэлэбэу</p>-->
<!--                        </div>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!---->
<!--    </div>-->
<!--</div>-->


</section>




<!--------------------faq SECTION------------------------>

<section id="faq" class="faq clearfix">
    <div class="container">
    <h2 class="header-section section-black">Часто задаваемые вопросы:</h2>

    <section class="faq-1 col-lg-6 col-md-6">
        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">На сколько эффективны занятия по Skype ?</span>
            </h3>
            <p class="answer">Занятия при помощи программы Скайп имеют такую же эффективность, как и «живые» индивидуальные занятия.  Помимо этого, занятия по скайпу имеют ряд преимуществ. В том числе то, что уроки проходят в комфортных условиях, и вы не тратите время на дорогу.</p>
        </div>

        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Эффективны ли занятия по Skype для детей?</span>
            </h3>
            <p class="answer">Здесь все очень индивидуально, и зависит от особенностей характера ребёнка. При личном общении проще удержать его внимание.  Хотя у нас с удовольствием и успешно обучаются дети разных возрастов. Наши опытные преподаватели составят персональный план занятий именно для вашего ребенка.  
</p>
        </div>

        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Кому подходят занятия по Skype ?</span>
            </h3>
            <p class="answer">Английский по Skype изучают в первую очередь люди с серьёзной мотивацией к учёбе. Благодаря индивидуальному подбору курса, уроки подойдут и деловым людям, и студентам, и молодым мамам. Всех их объединяет  стремление учиться в удобное время и комфортных условиях.</p>
        </div>

        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Как преподаватель на расстоянии объяснит мне как пишутся слова?</span>
            </h3>
            <p class="answer">В  Skype есть функция для передачи текстовых сообщений – «Чат», преподаватель просто напишет вам все необходимые слова. </p>
        </div>

        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Обязательно ли учить грамматику?</span>
            </h3>
            <p class="answer">Не обязательно, но желательно.  Ведь Вы хотите не просто бегло изъяснятся, а четко донести необходимую информацию. При составлении плана обучения наши преподаватели обязательно учтут ваши пожелания. В любом случае грамматика в нашей школе преподается в простой и доступной форме.</p>
        </div>

        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Можно ли при обучении уделять внимание конкретной теме: бизнес, наука, медицина и т.д.?</span>
            </h3>
            <p class="answer">Да. Если вам необходимо сделать акцент на специфической лексике определённой сферы, наши преподаватели  составят для вас специализированный курс. Кроме того, у нас есть отдельный бизнес-курс.</p>
        </div>
	<div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Есть ли у вас скидки на обучение?</span>
            </h3>
            <p class="answer">Да, у нас есть постоянные скидки от 3 до 10% при одновременной оплате за 8 и более уроков.</p>
        </div>
	<div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">
Можно ли оплачивать занятия поурочно?</span>
            </h3>
            <p class="answer">Да, вы можете платить за каждый урок отдельно, нет никакой необходимости оплачивать весь курс сразу.</p>
        </div>

    </section>
    <section class="faq-2 col-lg-6 col-md-6">
        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Какой преподаватель мне подойдет?</span>
            </h3>
            <p class="answer">После пробного урока с методистом, на котором мы проверим ваш уровень знаний, а также узнаем ваши цели и предпочтения, мы предложим вам наиболее подходящего преподавателя. Если по какой-либо причине этот преподаватель вам не подойдем – мы подберем вам другого.</p>
        </div>
        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Сколько длиться курс обучения?</span>
            </h3>
            <p class="answer">Каждая ступень обучения занимает приблизительно от 6 до 9 месяцев, зависимо от Вашего уровня знаний и времени, которым Вы располагаете. Также у нас существует интенсивный курс длительностью около 1 месяца.</p>
        </div>

        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Мне нужно только «разговориться», а не учиться по учебнику. Вы мне поможете?</span>
            </h3>
            <p class="answer">Конечно, наши преподаватели учитывают все пожелания наших учеников, построят обучение наиболее подходящим для вас образом. </p>
        </div>
        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Я не успеваю на урок, что делать?</span>
            </h3>
            <p class="answer">Предупредить своего преподавателя или методиста школы.</p>
        </div>
        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Я работаю посменно и не могу заниматься по фиксированному расписанию, как быть?</span>
            </h3>
            <p class="answer">В таком случае рекомендуем вам согласовывать график занятий с вашим преподавателем в начале каждой недели.</p>
        </div>

        <div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Можно ли заниматься без веб-камеры?</span>
            </h3>
            <p class="answer">Да, можно, но мы все же рекомендовали заниматься с использованием видео, таким образом создастся более тесный контакт и понимание между преподавателем и студентом.</p>
        </div>
	<div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Что значит вводный урок?</span>
            </h3>
            <p class="answer">Вводный урок проходит с методистом нашей школы и проводится бесплатно. Во время урока методист выяснит ваши цели обучения, пожелания к образовательному процессу, а также определит ваш текущий уровень знаний. Кроме того, первый урок с преподавателем также проводится бесплатно.</p>
        </div>
	<div class="wrapper-question">
            <h3 class="question clearfix">
                <span class="qw"><i class="fa fa-toggle-off"></i></span>
                <span class="qe">Если я не могу присутствовать на уроке, снимается ли оплата?</span>
            </h3>
            <p class="answer">Если вы заранее предупредите своего преподавателя об этом – оплата за пропущенный урок не снимается.</p>
        </div>

    </section>

    </div>


    <p class="question-phrase">Остались вопросы?</p>

    <p class="btn-red"><a href="<?php echo esc_url( home_url( '/' ) ); ?>contacts/">Задать менеджеру</a></p>



</section>

<!--------------------последние статии блога------------------------>

<section class="last-article hidden-xs">
    <h2 class="header-section">Популярные <span>статьи</span> блога</h2>


    <div class="container">
        <div class="row">
            <?php
            function filter_where($where = '') {
             $where .= " AND post_date > '" . date('Y-m-d', strtotime('-360 days')) . "'";
             return $where;
            }
            add_filter('posts_where', 'filter_where');
            $popular = new WP_query('orderby=comment_count&posts_per_page=3'); ?>
            <?php while ($popular->have_posts()) : $popular->the_post(); ?>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                <div class="wrapper-item">
                    <div class="wrap-img">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('mini', array()); ?></a>
                    </div>
                    <div class="wrapper-post">
                        <p class="date-post"><?php the_time('j F Y'); ?></p>
                        <h3 class="header-article"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <p class="tag"><?php echo the_category(); ?></p>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
                 


        </div>





        <p class="btn-red"><a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/">Еще статей!</a></p>

    </div>

</section>





<section class="do-first-step">
    <div class="container clearfix">
        <p class="text-block">Не теряй времени, <br/> получи свой бесплатный урок и наконец выучи язык!</p>
        <p class="free-lesson btn-red"><a href="#" data-toggle="modal" data-target="#order-form">Заказать</a></p>
    </div>
</section>



<!--------------------скайп это------------------------>

<section class="skype-education-description hidden-xs">
    <div class="container">
        <h4>Английский по скайпу</h4>
        <p>В наше время все более актуальным является знание иностранных языков, наибольшей популярностью пользуется, конечно же, английский, поскольку он считается международным. По этой же причине сегодня так востребовано обучение английскому по Скайпу - это один из самых удобных способов дистанционного обучения, который позволяет освоить язык в комфортной домашней обстановке. Практика показала, что интерактивное обучение английскому по Скайпу более эффективно, нежели распространенные, традиционные методы.</p>
        <p>Для обучения английскому по Скайпу нет никаких ограничений. Возраст? Уровень знаний? В нашей школе EnglishForNow предусмотрены самые разнообразные обучающие программы для людей с разными приоритетами и уровнем знаний английского. Школа EnglishForNow поможет вам подготовится к поступлению в ВУЗ, сдаче ЕГЭ или международных экзаменов IELTS и TOEFL.</p>
        <p>Если вам необходимо улучшить свой деловой английский, мы будем рады помочь и в этом. Для тех, кто уже имеет некоторые навыки общения, но хочет усовершенствовать их, EnglishForNow предоставляет возможность практиковать английский по Скайпу с носителем языка.</p>
        <p>Обучение английскому по Скайпу со школой EnglishForNow – просто и эффективно. Для начала обучения вам нужно сделать три простых шага:
        <ol>
            <li>Заказать бесплатный урок</li>
            <li>Заполнить простую форму на главной странице сайта</li>
            <li>Иметь установленный на компьютере Skype</li>
        </ol>
        <p>После пробного бесплатного урока вы сможете принять окончательное решение и оформить заявку на один из интересующих вас курсов.</p>
        <p>На сегодня для многих современных людей, обучение английскому по Скайпу является оптимальным вариантом для изучения иностранного языка. Постоянная нехватка времени и занятость все меньше и меньше позволяет посещать курсы в другой части города.</p>
        <p>В отличии от традиционных методов обучения, обучение английскому по Скайпу возможно в любом месте где есть доступ к интернету, будь то ваш дом, отель или кафе. Вы не привязаны к месту, или ко времени. Достаточно просто оговорить его с вашим преподавателем.</p>
        <p>Школа EnglishForNow не только поможет вам выучить английский, но и сделает вашу жизнь яркой и привлекательной</p>

    </div>
</section>

</div>
</div>






<?php get_footer(); ?>