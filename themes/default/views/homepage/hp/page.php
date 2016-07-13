<?php
/** @var Page $page */

if ($page->layout) {
    $this->layout = "//layouts/{$page->layout}";
}

$this->title = $page->title;
$this->breadcrumbs = [
    Yii::t('HomepageModule.homepage', 'Pages'),
    $page->title
];
$this->description = !empty($page->description) ? $page->description : Yii::app()->getModule('yupe')->siteDescription;
$this->keywords = !empty($page->keywords) ? $page->keywords : Yii::app()->getModule('yupe')->siteKeyWords
?>

<?php $this->widget('application.modules.slide.widgets.SlideWidget', []); ?>

<div class="banner1">
    <div class="row">
        <div class="grid_4">
            <div class="box1 first wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                <div class="label">
                    <img src="themes/default/web/images/page1_img1.png" alt="">
                </div>
                <h2>Bed &amp; Breakfast</h2>
                                        <span class="heading"><a
                                                href="/#">Lorem ipsum dolor sit amet, csec</a></span>
                <p>Lorem ipsum dolor sit amet, conc tetu
                    er adipi scing. Praesent vestibuum mol</p>
            </div>
        </div>

        <div class="grid_4">
            <div class="box1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                <div class="label">
                    <img src="themes/default/web/images/page1_img2.png" alt="">
                </div>
                <h2>hotel history</h2>
                                        <span class="heading"><a
                                                href="/#">ipsum dolor sit amet, csec tetuer</a></span>
                <p>Praesent vestibuum molestie lacuiirhs. Aenean non ummy hendreriauris.
                    Phasellllus porta.</p>
            </div>
        </div>

        <div class="grid_4">
            <div class="box1 last wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: none;">
                <div class="label">
                    <img src="themes/default/web/images/page1_img3.png" alt="">
                </div>
                <h2>rooms &amp; suites</h2>
                                        <span class="heading"><a
                                                href="/#">csec tetuer adipi scing Praesent vib</a></span>
                <p>Aenean non ummy hendreriauris. Phasellllus porta. Fusce suscipit varius mium
                    sociis totdnat.</p>
            </div>
        </div>
    </div>
</div>
<div class="wrapper1">
    <div class="row">
        <div class="grid_4">
            <div class="heading1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                <h2>Why choose us?</h2>
            </div>
            <div class="box2">
                <ul class="list1">
                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.1s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                        <a href="/#">Lorem
                            ipsum dolorconsec teer.</a>
                        <p>Lorem ipsum dolor sit amet, consec tetuer adicing. Praesent vestibu
                            lum molestie lacuiirhs non.</p>
                    </li>

                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                        <a href="/#">adipiscing.
                            Prsent vestibulum m.</a>
                        <p>Ipsum dolor sit amet, consec tadipiscing. Praes
                            ent vestibu lum molestie lacuenean non.</p>
                    </li>

                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.3s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: none;">
                        <a href="/#">Prsent
                            vestibulum molestie lac.</a>
                        <p>Sit amet, consec tetuer acing. Praesent vestibu lum molestie
                            lacuiirhs. Aenean non. ummy hendreriauris.</p>
                    </li>

                    <li class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.4s"
                        style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: none;">
                        <a href="/#">vestibulum
                            molestie lacuiirhs. Aeneon my .</a>
                        <p>Praesent vestibu lum molestie lacuiirhsean non.
                            ummy hendreriauris. Phasellllus. porta. Fusce suscipit.</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="grid_8">
            <div class="heading1 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.1s"
                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                <h2>Services</h2>
            </div>
            <div class="box3-wrapper1">
                <p class="wow fadeIn" data-wow-duration="1s" data-wow-delay="0.1s"
                   style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                    Lorem ipsum dolor sit amet, consec teer adipiscing. Prsent vestibulum
                    molestie la my hendrerit. mauris hasellllus. Porta. Fusce suscipit varius
                    mium sociis totdjque penat magnis.</p>
                <div class="row">
                    <div class="grid_2">
                        <div class="box3 maxheight wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0.1s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none; height: 259px;">
                            <div class="box_inner">
                                <img src="themes/default/web/images/page1_img4.png" alt="">
                                <h3>
                                    <a href="/#">lorem
                                        ipsum</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consec tetuer adipi scing.
                                    Praesent vestibu</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid_2">
                        <div class="box3 maxheight wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0.2s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none; height: 259px;">
                            <div class="box_inner">
                                <img src="themes/default/web/images/page1_img5.png" alt="">
                                <h3>
                                    <a href="/#">dolor
                                        set amet</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consec tetuer adipi scing.
                                    Praesent vestibu</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid_2">
                        <div class="box3 maxheight wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0.3s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: none; height: 259px;">
                            <div class="box_inner">
                                <img src="themes/default/web/images/page1_img6.png" alt="">
                                <h3>
                                    <a href="/#">Adipiscing
                                        present</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consec tetuer adipi scing.
                                    Praesent vestibu</p>
                            </div>
                        </div>
                    </div>
                    <div class="grid_2">
                        <div class="box3 maxheight wow fadeInUp" data-wow-duration="1s"
                             data-wow-delay="0.4s"
                             style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: none; height: 259px;">
                            <div class="box_inner">
                                <img src="themes/default/web/images/page1_img7.png" alt="">
                                <h3>
                                    <a href="/#">Vestibulum
                                        molest</a>
                                </h3>
                                <p>Lorem ipsum dolor sit amet, consec tetuer adipi scing.
                                    Praesent vestibu</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr class="hr1">
    <div class="row">
        <div class="grid_12">
            <div class="row">
                <div class="grid_3">
                    <div class="heading1 wow fadeInDown" data-wow-duration="1s"
                         data-wow-delay="0.1s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                        <h2>Latest news</h2>
                    </div>
                    <div class="post1-wrapper1 maxheight1" style="height: 367px;">
                        <div class="box_inner">
                            <div class="post1 wow fadeInUp" data-wow-duration="1s"
                                 data-wow-delay="0.1s"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                                <time datetime="2014-01-01">20.09.2013</time>
                                <h4>
                                    <a href="/#">Lorem
                                        ipsum dolor sit amet, consec teer adipiscing. Prsent
                                        vestibulum.</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consec tetuer adipi scing.
                                    Praesent vestibu. lum molestie lacuiirhs. Aenean non ummy
                                    hendreriauris. Phasellllus.</p>
                            </div>

                            <div class="post1 wow fadeInUp" data-wow-duration="1s"
                                 data-wow-delay="0.2s"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                                <time datetime="2014-01-01">09.09.2013</time>
                                <h4>
                                    <a href="/#">Lorem
                                        ipsum dolor sit amet, consec teer adipiscing. Prsent
                                        vestibulum.</a>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consec tetuer adipi scing.
                                    Praesent vestibu. lum molestie lacuiirhs. Aenean non ummy
                                    hendreriauris. Phasellllus.</p>
                            </div>

                            <a class="btn-default"
                               href="/#">подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="grid_4 preffix_1">
                    <div class="heading1 wow fadeInDown" data-wow-duration="1s"
                         data-wow-delay="0.1s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                        <h2>Welcome</h2>
                    </div>
                    <div class="box4-wrapper1 maxheight1" style="height: 367px;">
                        <div class="box_inner">
                            <div class="box4">
                                <h6 class="wow fadeInDown" data-wow-duration="1s"
                                    data-wow-delay="0.1s"
                                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                                    Mountain vacation for
                                    the whole family. A
                                    combination of sport and cozy resort!</h6>
                                <h5 class="wow fadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.1s"
                                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                                    <a href="/#">Lorem
                                        ipsum dolor sit amet, consec teer adipiscing. Prsent
                                        vestibulum molestie lacuiirhs. Aeneon my . Phasellllus.
                                        porta. Fusce suscipit varius mium sociis.</a>
                                </h5>
                                <p class="wow fadeInUp" data-wow-duration="1s"
                                   data-wow-delay="0.2s"
                                   style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                                    Lorem ipsum dolor sit amet, consec tetuer adipiscing.
                                    Praesent vestibu lum molestie lacuiirhs. Aenean non ummy
                                    hendreriauris. Phasellllus. porta. Fusce suscipit varius
                                    mium sociis totdnatibus et magis dis parturient montes,
                                    nascetur ridiculus mus. Nulla dui.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid_3 preffix_1">
                    <div class="heading1 wow fadeInDown" data-wow-duration="1s"
                         data-wow-delay="0.1s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                        <h2>Activities</h2>
                    </div>
                    <div class="box5-wrapper1 maxheight1" style="height: 367px;">
                        <div class="box_inner">
                            <h5>Lorem ipsum dolor sit amet, consec teer adipiscing. Prsent
                                vestibulum mo.</h5>
                            <div class="box5 wow fadeInUp" data-wow-duration="1s"
                                 data-wow-delay="0.1s"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: none;">
                                <div class="row">
                                    <div class="grid_1">
                                        <img src="themes/default/web/images/page1_img8.png" alt="">
                                    </div>
                                    <div class="grid_2">
                                                                <span class="h7"><a
                                                                        href="/#">Lorem ipsum dolor</a></span>
                                        <p>Consec tetuer adipiscing. Praesent vestibu.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="box5 wow fadeInUp" data-wow-duration="1s"
                                 data-wow-delay="0.2s"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: none;">
                                <div class="row">
                                    <div class="grid_1">
                                        <img src="themes/default/web/images/page1_img9.png" alt="">
                                    </div>
                                    <div class="grid_2">
                                                                <span class="h7"><a
                                                                        href="/#">Nulla facilisi</a></span>
                                        <p>Consec tetuer adipiscing. Praesent vestibu.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="box5 wow fadeInUp" data-wow-duration="1s"
                                 data-wow-delay="0.3s"
                                 style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: none;">
                                <div class="row">
                                    <div class="grid_1">
                                        <img src="themes/default/web/images/page1_img10.png" alt="">
                                    </div>
                                    <div class="grid_2">
                                                                <span class="h7"><a
                                                                        href="/#">Aenean nec eros</a></span>
                                        <p>Consec tetuer adipiscing. Praesent vestibu.</p>
                                    </div>
                                </div>
                            </div>

                            <a class="btn-default wow fadeInUp" data-wow-duration="1s"
                               data-wow-delay="0.4s"
                               href="/#"
                               style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: none;">подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
