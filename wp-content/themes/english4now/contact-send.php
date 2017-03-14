<?php
/*
Template Name: Контакты
*/
get_header(); ?>
<section class="top-page clearfix">
    <div class="container">
        <h1 class="header-page">Наши <span>контакты</span></h1>
        <p class="slogan-page"><span>Свяжитесь с нами. Мы всегда рады любым вопросам, и с удовольствием на них ответим.</span></p>
    </div>
</section>

<section class="contacts">
    <div class="container">
        <div class="col-lg-4 col-md-4 col-sm-4">
            <div class="contacts-info">
                <ul class="clearfix">
                    <li><p>Address:</p>
                        <p><span>ООО"Английский сейчас"</span> <br/>
                            Полимерная улица, <br/> д. 8 оф.309<br/> г. Москва, ВАО </p>
                    </li>
                    <li><p>Phone:</p>
                        <p>+7(499) 348-13-28</p>
                    </li>
                    <li><p>Email:</p>
                        <p>info@english4now.com</p>
                    </li>
                    <li><p>Skype:</p>
                        <p>english4now.com</p>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-lg-8 col-md-8 col-sm-8">
		   
            <div class="wrap-form" id="contact-form">
                <form class="form-contact" action="<?php echo get_template_directory_uri(); ?>/feedback-contact.php" method="POST" name="form-contact">
                    <fieldset>
                            <div class="wrap-form-name col-lg-6">
                                <input  type="text" placeholder="Имя" name="fio" required="required" data-validation-required-message="Пожалуйста, введите свое имя" />
                            </div>

                            <div class="wrap-form-email col-lg-6">
                                <input type="email" placeholder="Email" name="mail" required="required" data-validation-required-message="Пожалуйста, введите свой Email" />
                            </div>
                            <div class="wrap-form-subject col-lg-12">
                                <input type="text" placeholder="Тема" name="theme" required="required" data-validation-required-message="Пожалуйста, введите тему сообщения" />
                            </div>
                            <div class="wrap-form-message col-lg-12">
                                <textarea cols="30" rows="8" placeholder="Ваше сообщение" required="required" name="text" data-validation-required-message="Пожалуйста, введите текст сообщения" ></textarea>
                            </div>
                    </fieldset>
                    <footer>
                        <input class="btn-submit" type="submit"/>
                    </footer>
                </form>
            </div>
        </div>
    </div>
        
    <section class="add-info">
        <div class="container">
            <p>Если вас заинтересовали наши уроки английского по Скайпу – напишите или позвоните нам. С курсами школы English for Now вы откроете для себя новый мир. Для того чтобы решить стоит ли действительно начинать наши уроки английского по Скайпу, вы можете попробовать бесплатный урок. Закажите его, заполнив форму на сайте и наш менеджер свяжется с вами.</p>
            <p>Как мы уже и говорили, особенностью данных курсов есть то, что уроки английского по Скайпу дают возможность провести занятия по исключительно индивидуальной схеме. А как известно, индивидуальные занятия – наиболее продуктивны.</p>
            <p>Вы можете оговаривать нужные моменты и детали с вашим преподавателем, уделять больше времени вопросам грамматики или лексики. Также вы можете корректировать дни и время проведения занятий, что также немаловажно в процессе обучения.</p>
            <p>Уроки английского по Скайпу – это то, что сэкономит ваше время и деньги. Стоит только включить компьютер и запустить программу Скайп.</p>
            <p>Учить английский со школой English for Now – просто и легко!</p>
        </div>
    </section>
</section>










<?php get_footer(); ?>


