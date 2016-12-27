<?php get_header(); ?>

    <section id="pagination">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center title">
                    <h1><span>Ok</span>ey <span>prog</span>раммист</h1>
                    <h2>Добрый день!<br>
                        <span>Меня зовут Дмитрий. Я техник-программист.</span></h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Мои работы</h3>
                </div>
                <div class="col-md-12 text-center">
                    <h2>WordPress</h2>
                </div>
                <div class="col-md-4">
                    <a class="btn fancybox" rel=group href="#">
                        <img src="#" alt="">
                    </a>
                </div>

                <div class="col-md-12">
                    <p>
                        yii2 Framework: <br>
                        http://bsk-travel.by/<br>

                        WordPress:<br>
                        http://maxmagic.org/<br>
                        http://bellombard.by/<br>
                        http://www.aliansplast.by/<br>
                        http://easy.napervoy.ru/ - заказчик не заполнил контент.<br>
                        <br>
                        Редизайн, Мобильная адаптация:<br>
                        http://stalkernlp.by/<br>
                        <br>
                        Модули:<br>
                        http://vmk-club.napervoy.ru/culinary-battle/<br>
                        http://vmk-club.napervoy.ru/recipe-month/<br>
                        <br>
                        Лендинги:<br>
                        http://remont-bytovoi-tehniki-msk.ru/<br>
                        http://voloho.by/<br>
                        http://pokernadzor.com/<br>
                        <br>
                        На доработке со стороны клиента:<br>
                        http://physics.knowledgeland.ru/<br>
                        http://speakandtravel.ru/wedding/<br>
                        http://chertanovoservice.ru/<br>
                        Другое:
                        http://www.timex.ru/press-tsentr/<br>
                        http://casinovplus.com/<br>
                    </p>
                </div>
            </div>
        </div>
    </section>
<?php the_post(); ?>
<?php the_content(); ?>
<?php get_footer(); ?>