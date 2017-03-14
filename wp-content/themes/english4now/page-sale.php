<?php
/*
Template Name: Шаблон - Оплата
*/

get_header(); ?>

<section class="top-page clearfix">
    <div class="container">
        <h1 class="header-page">Стоимость и <span>оплата</span></h1>
        <p class="slogan-page"><span>Доступные цены, возможность оплаты от одного урока, и гибкая система скидок.</span></p>
    </div>
</section>
<section class="price-pay">
    <div class="container">
        <p class="paragraph-page">Гибкая ценовая политика школы English for Now разработана специально чтобы удовлетворять любым требованиям. Вы можете оплатить каждый урок по отдельности, либо заплатить сразу за несколько занятий, и сэкономить при этом.</p>

        <section class="pay">
        <div class="container">
        <div class="russian-teacher-pay col-lg-4 col-md-4 col-sm-12">
            <header>Русскоязычные преподаватели</header>

            <p class="manual-pay">Выберите количество занятий которые хотите оплатить:</p>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#ru1" aria-controls="ru1" role="tab" data-toggle="tab"><div class="number-lesson">1</div></a></li>
                    <li role="presentation"><a href="#ru2" aria-controls="ru2" role="tab" data-toggle="tab"><div class="number-lesson">2</div></a></li>
                    <li role="presentation"><a href="#ru4" aria-controls="ru4" role="tab" data-toggle="tab"><div class="number-lesson">4</div></a></li>
                    <li role="presentation" class="active"><a href="#ru8" aria-controls="ru8" role="tab" data-toggle="tab"><div class="number-lesson">8</div></a></li>
                    <li role="presentation"><a href="#ru12" aria-controls="ru12" role="tab" data-toggle="tab"><div class="number-lesson">12</div></a></li>
                    <li role="presentation"><a href="#ru24" aria-controls="ru24" role="tab" data-toggle="tab"><div class="number-lesson">24</div></a></li>
                    <li role="presentation"><a href="#ru48" aria-controls="ru48" role="tab" data-toggle="tab"><div class="number-lesson">48</div></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="ru1">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>1 занятие
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0011.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 450р.</div>
                            <div class="sale-lesson"><span>Скидка</span> -</div>
                            <div class="sum-lesson"><span>Сумма</span> 450р.</div>
                            <div class="get-lesson">

                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="450" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 1 занятие" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ru2">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>2 занятия
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0011.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 450р.</div>
                            <div class="sale-lesson"><span>Скидка</span> -</div>
                            <div class="sum-lesson"><span>Сумма</span> 900р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="900" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 2 занятия" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ru4">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>4 занятия
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0011.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 450р.</div>
                            <div class="sale-lesson"><span>Скидка</span> -</div>
                            <div class="sum-lesson"><span>Сумма</span> 1 800р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="1800" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 4 занятия" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="ru8">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>8 занятий
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0021.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 437р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 3%</div>
                            <div class="sum-lesson"><span>Сумма</span> 3 492р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="3492" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 8 занятий" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ru12">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>12 занятий
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0031.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 428р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 5%</div>
                            <div class="sum-lesson"><span>Сумма</span> 5 130р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="5130" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 12 занятий" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ru24">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>24 занятия
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0031.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 414р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 8%</div>
                            <div class="sum-lesson"><span>Сумма</span> 9 936р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="9936" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 24 занятия" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="ru48">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>48 занятий
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0041.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 405р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 10%</div>
                            <div class="sum-lesson"><span>Сумма</span> 19 440р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="19440" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 48 занятий" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="exam-pay col-lg4 col-md-4 col-sm-12">
            <header>Подготовка к экзаменам</header>

            <p class="manual-pay">Выберите количество занятий которые хотите оплатить:</p>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#exam1" aria-controls="exam1" role="tab" data-toggle="tab"><div class="number-lesson">1</div></a></li>
                    <li role="presentation"><a href="#exam2" aria-controls="exam2" role="tab" data-toggle="tab"><div class="number-lesson">2</div></a></li>
                    <li role="presentation"><a href="#exam4" aria-controls="exam4" role="tab" data-toggle="tab"><div class="number-lesson">4</div></a></li>
                    <li role="presentation" class="active"><a href="#exam8" aria-controls="ru8" role="tab" data-toggle="tab"><div class="number-lesson">8</div></a></li>
                    <li role="presentation"><a href="#exam12" aria-controls="exam12" role="tab" data-toggle="tab"><div class="number-lesson">12</div></a></li>
                    <li role="presentation"><a href="#exam24" aria-controls="exam24" role="tab" data-toggle="tab"><div class="number-lesson">24</div></a></li>
                    <li role="presentation"><a href="#exam48" aria-controls="exam48" role="tab" data-toggle="tab"><div class="number-lesson">48</div></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="exam1">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>1 занятие
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0011.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 550р.</div>
                            <div class="sale-lesson"><span>Скидка</span> -</div>
                            <div class="sum-lesson"><span>Сумма</span> 550р.</div>
                            <div class="get-lesson">

                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="550" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 1 занятие" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>

                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="exam2">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>2 занятия
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0011.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 550р.</div>
                            <div class="sale-lesson"><span>Скидка</span> -</div>
                            <div class="sum-lesson"><span>Сумма</span> 1100р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="1100" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 2 занятия" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="exam4">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>4 занятия
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0011.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 550р.</div>
                            <div class="sale-lesson"><span>Скидка</span> -</div>
                            <div class="sum-lesson"><span>Сумма</span> 2 200р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="2200" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 4 занятия" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="exam8">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>8 занятий
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0021.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 533,5р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 3%</div>
                            <div class="sum-lesson"><span>Сумма</span> 4 268р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="4268" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 8 занятий" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="exam12">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>12 занятий
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0031.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 522,5р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 5%</div>
                            <div class="sum-lesson"><span>Сумма</span> 6 270р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="6270" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 12 занятий" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="exam24">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>24 занятия
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0031.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 506р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 8%</div>
                            <div class="sum-lesson"><span>Сумма</span> 12 144р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="12144" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 24 занятия" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="exam48">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>48 занятий
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0041.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 495р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 10%</div>
                            <div class="sum-lesson"><span>Сумма</span> 23 760р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="23760" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 48 занятий" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="native-teacher-pay col-lg-4 col-md-4 col-sm-12">
            <header>Носители языка</header>

            <p class="manual-pay">Выберите количество занятий которые хотите оплатить:</p>
            <div>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation"><a href="#native1" aria-controls="native1" role="tab" data-toggle="tab"><div class="number-lesson">1</div></a></li>
                    <li role="presentation"><a href="#native2" aria-controls="native2" role="tab" data-toggle="tab"><div class="number-lesson">2</div></a></li>
                    <li role="presentation"><a href="#native4" aria-controls="native4" role="tab" data-toggle="tab"><div class="number-lesson">4</div></a></li>
                    <li role="presentation" class="active"><a href="#native8" aria-controls="native8" role="tab" data-toggle="tab"><div class="number-lesson">8</div></a></li>
                    <li role="presentation"><a href="#native12" aria-controls="native12" role="tab" data-toggle="tab"><div class="number-lesson">12</div></a></li>
                    <li role="presentation"><a href="#native24" aria-controls="native24" role="tab" data-toggle="tab"><div class="number-lesson">24</div></a></li>
                    <li role="presentation"><a href="#native48" aria-controls="native48" role="tab" data-toggle="tab"><div class="number-lesson">48</div></a></li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane" id="native1">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>1 занятие
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0011.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 950р.</div>
                            <div class="sale-lesson"><span>Скидка</span> -</div>
                            <div class="sum-lesson"><span>Сумма</span> 950р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="950" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 1 занятие" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="native2">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>2 занятия
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0011.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 950р.</div>
                            <div class="sale-lesson"><span>Скидка</span> -</div>
                            <div class="sum-lesson"><span>Сумма</span> 1900р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="1900" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 2 занятия" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="native4">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>4 занятия
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0011.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 950р.</div>
                            <div class="sale-lesson"><span>Скидка</span> -</div>
                            <div class="sum-lesson"><span>Сумма</span> 3 800р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="3800" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 4 занятия" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane active" id="native8">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>8 занятий
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0021.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 921.5р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 3%</div>
                            <div class="sum-lesson"><span>Сумма</span> 7 372р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="7372" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 8 занятий" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="native12">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>12 занятий
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0031.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 902.5р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 5%</div>
                            <div class="sum-lesson"><span>Сумма</span> 10 830р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="10830" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 12 занятий" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="native24">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>24 занятия
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0031.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 874р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 8%</div>
                            <div class="sum-lesson"><span>Сумма</span> 20 976р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="20976" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 24 занятия" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="native48">
                        <div class="price-table clearfix">
                            <div class="amount-lesson">
                                <span></span>48 занятий
                                <img class="img-responsive img-circle" src="<?php echo get_template_directory_uri(); ?>/img/stack/stack0041.jpg" alt=""/>
                            </div>
                            <div class="price-lesson"><span>Цена одного занятия</span> 855р.</div>
                            <div class="sale-lesson"><span>Скидка</span> 10%</div>
                            <div class="sum-lesson"><span>Сумма</span> 41 040р.</div>
                            <div class="get-lesson">
                                <form id="payment" action="https://sci.interkassa.com/" enctype="utf-8" method="post" name="payment" class="btn-red"><input name="ik_co_id" value="540499a2bf4efc4546a1877e" type="hidden" /> <input name="ik_pm_no" value="4233" type="hidden" /> <input name="ik_am" value="41040" type="hidden" /> <input name="ik_cur" value="RUB" type="hidden" /> <input name="ik_desc" value="Оплата за 48 занятий" type="hidden" />
                                    <button type="submit">оплатить</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </section>
        <section>
            <div class="container">
                <div class="call-to-action">
                    <p><span>Сомневаетесь?</span> Закажите <span>бесплатный пробный урок</span> и все ваши сомнения исчезнут.</p>
                    <p class="btn-red"><a href="#" data-toggle="modal" data-target="#order-form" >Заказать</a></p>
                </div>
            </div>
        </section>
        <section class="payment">
            <div class="container">
                <h2>Системы оплаты:</h2>
                <p class="paragraph-page">Вы можете расплатиться любым привычным для вас способом, включая электронные платежи. Нет никакой надобности идти в банк и стоять в очереди в кассу. Вместо этого можно оплатить занятия через Интернет, пополнив свой счет при помощи платежного терминала, расположенного в ближайшем магазине. Это быстро и удобно.</p>
                <ul class="clearfix payment-system">
                    <li class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-1 col-sm-2 col-sm-offset-1"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-system/sberonline_icon.png" alt=""/></li>
                    <li class="col-lg-2 col-md-2 col-sm-2"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-system/w1_icon.png" alt=""/></li>
                    <li class="col-lg-2 col-md-2 col-sm-2"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-system/liqpay_icon.png" alt=""/></li>
                    <li class="col-lg-2 col-md-2 col-sm-2"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-system/mastercard_icon.png" alt=""/></li>
                    <li class="col-lg-2 col-md-2 col-sm-2"><img src="<?php echo get_template_directory_uri(); ?>/img/payment-system/visa_icon.png" alt=""/></li>
                </ul>
                <p class="paragraph-page">Также доступны более 20 других удобных способов оплаты.</p>
            </div>
        </section>
    </div>
</section>





<?php get_footer(); ?>


