<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</section><!-- #section blog -->

<footer class="main-footer">
    <div class="container">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer") ) : ?>
        <?php endif; ?>
    </div>
    <!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33295048 = new Ya.Metrika({
                    id:33295048,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33295048" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67859878-1', 'auto');
  ga('send', 'pageview');

</script>
    <div class="footer-bottom">

        <p class="copyright">Copyright © 2017 english4now.com. All rights reserved.</p>

    </div>


</footer>

<!--------------------modal-windows------------------------>

<!-- Modal заказа урока -->
<div class="modal fade" id="order-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?php echo get_template_directory_uri(); ?>/feedback-free.php" class="form-free-lesson center-block" method="POST">
                    <div class="wrapper-form">
                        <header class="header-form">Заказ бесплатного урока</header>
                        <input type="text" placeholder="Имя" name="fio" required="required" data-validation-required-message="Пожалуйста, введите свое имя" />
                        <input type="text" placeholder="Skype" name="skype" required="required" data-validation-required-message="Пожалуйста, введите свой Skype"/>
                        <input type="tel" placeholder="Телефон (в межд.формате)" name="tel" required="required" data-validation-required-message="Пожалуйста, введите свой телефон" />
                        <input type="email" placeholder="Email" name="mail" required="required" data-validation-required-message="Пожалуйста, введите свою почту" />
                        <input type="submit" onclick="yaCounter33295048.reachGoal('ORDER'); return true;" class="submit-form" value="Отправить заявку"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal заказа звонка-->
<div class="modal fade" id="order-call" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <form action="<?php echo get_template_directory_uri(); ?>/feedback-call.php" class="free-call center-block" method="POST">
                    <div class="wrapper-form">
                        <header class="header-form">Заказ звонка</header>
                        <input type="text" placeholder="Имя" name="fio" required="required" data-validation-required-message="Пожалуйста, введите свое имя" />
                        <input type="tel" placeholder="Телефон (в международном формате)" name="tel" required="required" data-validation-required-message="Пожалуйста, введите свой телефон" />

                        <input type="submit" class="submit-form" value="Заказать звонок"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

    <!--OWL-->


    <!--  jQuery 1.7+  -->
<!--    <script src="--><?php //echo get_template_directory_uri(); ?><!--/js/jquery-1.9.1.min.js"></script>-->
    <!-- Include js plugin -->
<!--    <script src="--><?php //echo get_template_directory_uri(); ?><!--/js/owl.carousel.js"></script>-->
    <!--OWL-->

    <script src="<?php echo get_template_directory_uri(); ?>/js/headhesive.min.js"></script>
   

    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery.scrollUp.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/headhesive.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-imagefill.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/npm.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/blog.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/fancybox/jquery.fancybox.js"></script>
       
    
       
    
    
    

	<?php wp_footer(); ?>
</body>
</html>
