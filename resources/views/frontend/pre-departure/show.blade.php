@extends('frontend.layouts.app')

@section('title','Asia Tours – Tailor-made Travel Experiences')
@section('meta_description','Discover tailor-made Asia tours, private trips and luxury travel experiences.')
@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700|Reenie+Beanie&display=swap" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/css/icon.css">
<link rel="stylesheet" type="text/css" href="/css/slick.css">
<link rel="stylesheet" type="text/css" href="/css/intlTelInput.css">
<link rel="stylesheet" type="text/css" href="/css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link rel="stylesheet" type="text/css" href="/css/custom.css?v=2.3">
@endsection

@section('content')
<section class="banner-top mg-bot-0 banner-small">
    <div class="bg-parallax bg-travel-guide"></div>
    <div class="wrap-title-banner-top-line">
        <h1 class="line">Pre-departure Information</h1>
        <p>Asia is our homeland. We’ll show you Asia, better than anyone else!</p>
    </div>
    <div id="booking-widget-homepage">
        <div class="form-banner-top">
            <div class="booking-step-where select-st1">
                <span class="text">
                    <i class="icon-font icon-destination"></i>
                    <b>Where you want to go</b>
                    <i class="icon-font select-arrow-thin"></i>
                </span>
                <ul class="value">
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Vietnam</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Cambodia</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Laos</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Myanmar</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Thailand</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Indonesia</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Malaysia</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Singapore</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Philippines</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>China</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Hong Kong</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Japan</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>South Korea</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Bhutan</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Nepal</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>India</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-destination"></i>
                            <b>Sri Lanka</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="booking-step-when select-st1">
                <span class="text">
                    <i class="icon-font image"></i>
                    <b>Experiences</b>
                    <i class="icon-font select-arrow-thin"></i>
                </span>
                <ul class="value">
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-cultural"></i>
                            <b>Culture & Highlights</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-cuisine"></i>
                            <b>Food & Local Life</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font icon-mountain"></i>
                            <b>Active & Nature</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-wellness-relaxation"></i>
                            <b>Beach & Relaxation</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-couple-honeymoon"></i>
                            <b>Couple & Honeymoon</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-family-holiday"></i>
                            <b>Family Holiday</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-luxury-hotels-resorts"></i>
                            <b>Luxury Hotels & Resorts</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-boutiquehotels"></i>
                            <b>Boutique Hotels</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <i class="icon-font ex-stardard-hotels"></i>
                            <b>Standard Hotels</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="booking-step-room booking-st1">
                <span class="text">
                    <b>
                        <i class="icon-font icon-users"></i>&nbsp;
                        <strong class="adult-number">2</strong>&nbsp;Adult(s),&nbsp;<strong class="child-number">0</strong>&nbsp;Children,&nbsp;<strong class="infant-number">0</strong>&nbsp;Infant
                    </b>
                    <i class="icon-font select-arrow-thin"></i>
                </span>
                <div class="value-2">
                    <div class="wrap-adult-number">
                        <button class="btn-down">-</button>
                        <span><strong class="adult-number">2</strong>&nbsp;Adult(>12)</span>
                        <button class="btn-up">+</button>
                        <input type="text" name="" value="2">
                    </div>
                    <div class="wrap-child-number">
                        <button class="btn-down btn-disabled">-</button>
                        <span><strong class="child-number">0</strong>&nbsp;Child(4-12)</span>
                        <button class="btn-up">+</button>
                        <input type="text" name="" value="0">
                    </div>
                    <div class="wrap-infant-number">
                        <button class="btn-down btn-disabled">-</button>
                        <span><strong class="infant-number">0</strong>&nbsp;Infant(<3)< /span>
                                <button class="btn-up">+</button>
                                <input type="text" name="" value="0">
                    </div>
                </div>
            </div>
            <div class="booking-step-promo select-st2">
                <span class="text">
                    <i class="icon-font price-tag"></i>
                    <b>Tour Class</b>
                    <i class="icon-font select-arrow-thin"></i>
                </span>
                <ul class="value">

                    <li>
                        <a href="javascript:" class="btn-value">
                            <b>Economy</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <b>Deluxe</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:" class="btn-value">
                            <b>Luxury</b>
                            <i class="icon-font checkmark"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="booking-step-submit">
                <button class="btn-st3 btn-create-trip">Customize Tours</button>
            </div>
        </div>
        <button class="btn-st3 btn-create-trip">Build Your Own Trip</button>
    </div>
</section>
<section class="travel-guide-container">
    <div class="container">
        <div class="wrap-blog-item-1">
            <nav class="blogs-tab">
                <ul>
                    <li>
                        <a href="https://www.asiatours.com/experiences/" title="Asia Tour Experiences">Unique Experiences</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/" title="Asia Travel Guide">Travel Blogs</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/pre-departure.html" title="Pre-departure to Asia" class="active">Pre-departure</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/pdf/visa-note-view.pdf" target="_blank" rel="nofollow">Visa Notes</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="wrap-blog-item-2">
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-vietnam.pdf" target="_blank" title="Pre-depature Vietnam">
                    <img src="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-vietnam.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-vietnam.pdf" target="_blank" title="Pre-depature Vietnam">Pre-depature Vietnam</a></h3>
                <div class="box-share">
                    <div class="desti">Vietnam</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Before starting a tour in Vietnam which is a country of timeless charm, home to an abundance of breathtaking mountains, secluded beaches and one of the best street food destinations in Asia, Asia Private Tours is proud to share this Vietnam pre-departure booklet which includes practical advice & culture information to help you prepare for a meaningful Vietnam Tour and enrich your travel experiences.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-vietnam.pdf" target="_blank" title="Pre-depature Vietnam">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-cambodia.pdf" target="_blank" title="Pre-depature Cambodia">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-cambodia.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-cambodia.pdf" target="_blank" title="Pre-depature Cambodia">Pre-depature Cambodia</a></h3>
                <div class="box-share">
                    <div class="desti">Cambodia</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Thank you for choosing Asia Private Tours for your journey. We're sure you will find Cambodia which is well-known for its UNESCO World Heritage-inscribed Angkor Wat Complex in Siem Reap as intriguing, captivating and beautiful as we do. To prepare for your dream Cambodian Tours ahead, please read this Cambodia pre-departure carefully before you travel to this region to have some practical advice and cultural information.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-cambodia.pdf" target="_blank" title="Pre-depature Cambodia">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-laos.pdf" target="_blank" title="Pre-depature Laos">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-laos.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-laos.pdf" target="_blank" title="Pre-depature Laos">Pre-depature Laos</a></h3>
                <div class="box-share">
                    <div class="desti">Laos</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Laos is a peaceful land-locked nation with many stunning natural forests and a fascinating Buddhist culture. Please read this Laos pre-departure guide which is created to offer you some essential information ranging from the Visa requirements, Laos weather to main transportation and much more before travelling to this laid-back country and have a deeper understanding of the rich culture and history of this region.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-laos.pdf" target="_blank" title="Pre-depature Laos">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-myanmar.pdf" target="_blank" title="Pre-depature Myanmar">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-myanmar.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-myanmar.pdf" target="_blank" title="Pre-depature Myanmar">Pre-depature Myanmar</a></h3>
                <div class="box-share">
                    <div class="desti">Myanmar</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Not long now until your dream Myanmar Tours which offer you a great chance to discover the most mysterious and undiscovered destinations in Asia, ranging from the spectacular natural scenery to the thousands of age-old temples and pagodas in Bagan. It's time to get prepared by spending time to read our Myanmar pre-departure guide to gain some essential information before travelling to this region.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-myanmar.pdf" target="_blank" title="Pre-depature Myanmar">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-thailand.pdf" target="_blank" title="Pre-depature Thailand">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-thailand.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-thailand.pdf" target="_blank" title="Pre-depature Thailand">Pre-depature Thailand</a></h3>
                <div class="box-share">
                    <div class="desti">Thailand</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Welcome you to "The Land Of Smiles" - Thailand, where is blessed with a rich historic culture, untouched and white sandy beaches, lively arts and friendly locals. To prepare for your dream Thailand Tours ahead, please carefully read this Thailand pre-departure guide. As you read, if any questions come to mind, feel free to contact our Asia Private Tours experts who are always happy and ready to help you.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-thailand.pdf" target="_blank" title="Pre-depature Thailand">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-indonesia.pdf" target="_blank" title="Pre-depature Indonesia">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-indonesia.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-indonesia.pdf" target="_blank" title="Pre-depature Indonesia">Pre-depature Indonesia</a></h3>
                <div class="box-share">
                    <div class="desti">Indonesia</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Whether you book a romantic Indonesia Honeymoon Tour or an Indonesia Nature and Wildlife Tour, Asia Private Tours wants to make sure you have real local experiences ranging from exploring the most well-known places in Bali Island to venturing to some of the most mystical forests in Borneo. Until then, we hope this Indonesia pre-departure booklet helps you make the best possible preparations for your dream Indonesia Tours.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-indonesia.pdf" target="_blank" title="Pre-depature Indonesia">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-malaysia.pdf" target="_blank" title="Pre-depature Malaysia">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-malaysia.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-malaysia.pdf" target="_blank" title="Pre-depature Malaysia">Pre-depature Malaysia</a></h3>
                <div class="box-share">
                    <div class="desti">Malaysia</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">So you've just booked the Malaysia Tour of a lifetime and probably have tons of questions before starting your trip to this amazing country, where is home to an abundance things to do and enjoy ranging from the lively city Kuala Lumpur to the best pristine beaches of Langkawi. Please have a read through all the practical advice in our Malaysia pre-departure booklet and start getting excited as it's not long until you'll be in paradise.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-malaysia.pdf" target="_blank" title="Pre-depature Malaysia">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-singapore.pdf" target="_blank" title="Pre-depature Singapore">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-singapore.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-singapore.pdf" target="_blank" title="Pre-depature Singapore">Pre-depature Singapore</a></h3>
                <div class="box-share">
                    <div class="desti">Singapore</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Singapore has something to offer everyone - from world-class shopping centres, delicious cuisine, vibrant nightlife and culture. To help you prepare your Singapore Trips and make the most of your time when travelling to this country, we are happy to provide with you this Singapore pre-departure booklet which includes a comprehensive guide to Singapore before starting your dream Singapore Tour with us.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-singapore.pdf" target="_blank" title="Pre-depature Singapore">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-philippines.pdf" target="_blank" title="Pre-depature Philippines">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-philippines.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-philippines.pdf" target="_blank" title="Pre-depature Philippines">Pre-depature Philippines</a></h3>
                <div class="box-share">
                    <div class="desti">Philippines</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Welcome to the Philippines, where is home to tons of pristine islands (e.g., El Nido, Coron, Boracay and Siargao), the breathtaking sights of the Ifugao Rice Terraces and natural places. Before starting your Philippines Tours with us, please read through our Philippines pre-departure guide which offers you a piece of background information and our suggestions to make your Philippines Tour the best it can be.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-philippines.pdf" target="_blank" title="Pre-depature Philippines">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-china.pdf" target="_blank" title="Pre-depature China">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-china.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-china.pdf" target="_blank" title="Pre-depature China">Pre-depature China</a></h3>
                <div class="box-share">
                    <div class="desti">China</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">If you are thinking about travelling to one of the largest countries in the world – China where owns abundant cultural, historical and natural attractions to explore and thrilling outdoor activities to experience, please take a look at our China Pre-departure booklet to make a good preparation and we hope, this information will help ease your mind before your dream China holiday.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-china.pdf" target="_blank" title="Pre-depature China">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-japan.pdf" target="_blank" title="Pre-depature Japan">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-japan.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-japan.pdf" target="_blank" title="Pre-depature Japan">Pre-depature Japan</a></h3>
                <div class="box-share">
                    <div class="desti">Japan</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Researching practical advice and useful information ahead of your trip is definitely a great way to make your jaunt smoother and more enjoyable. So if you’re preparing a dream journey in Japan, a captivating destination of unique culture and stunning nature, please take your time to read through our Japan pre-departure booklet which is specially designed to provide you with the most amazing trip ever.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-japan.pdf" target="_blank" title="Pre-depature Japan">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-bhutan.pdf" target="_blank" title="Pre-depature Bhutan">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-bhutan.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-bhutan.pdf" target="_blank" title="Pre-depature Bhutan">Pre-depature Bhutan</a></h3>
                <div class="box-share">
                    <div class="desti">Bhutan</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Welcome to one of the happiest countries in the world - Bhutan, where is home to an abundance of ancient monasteries, pristine nature, lush national parks and rich culture. Please take the time to read through our Bhutan pre-departure guide as it is designed to provide you with some helpful information in your preparation for a comfortable and enjoyable trip in the Himalayan Kingdom of Bhutan.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-bhutan.pdf" target="_blank" title="Pre-depature Bhutan">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-nepal.pdf" target="_blank" title="Pre-depature Nepal">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-nepal.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-nepal.pdf" target="_blank" title="Pre-depature Nepal">Pre-depature Nepal</a></h3>
                <div class="box-share">
                    <div class="desti">Nepal</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Thinking about travelling to one of the paradise countries in Asia – Nepal where combines Himalayan views, ancient temples, jungle wildlife and outdoor enthusiasts. Before heading to this beautiful country, please spend time to read through our Nepal Pre-departure booklet which has been prepared to help you get the most from your dream trip to Nepal.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-nepal.pdf" target="_blank" title="Pre-depature Nepal">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-india.pdf" target="_blank" title="Pre-depature India">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-india.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-india.pdf" target="_blank" title="Pre-depature India">Pre-depature India</a></h3>
                <div class="box-share">
                    <div class="desti">India</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">We understand that every traveller needs more than just luggage before embarking on an India journey. To ensure you have a wonderful trip to India with many unforgettable experiences, we have prepared this India Pre-departure booklet to help you prepare for it. Our Asia Tours Experts have made every effort to cover a great range of subjects that relate to preparing for a trip to India so please spend time to read through it to get the most from your dream trip to India.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-india.pdf" target="_blank" title="Pre-depature India">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-sri-lanka.pdf" target="_blank" title="Pre-depature Sri Lanka">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-sri-lanka.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-sri-lanka.pdf" target="_blank" title="Pre-depature Sri Lanka">Pre-depature Sri Lanka</a></h3>
                <div class="box-share">
                    <div class="desti">Sri Lanka</div>.
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">You have just booked the Sri Lanka trip of a lifetime and probably have plenty of questions before embarking on a Sri Lanka journey. This Sri Lanka pre-departure booklet is designed to answer your questions. Have a read through all the information and start getting excited as it’s not long until you’ll be in paradise. If there is anything else you would like to know, please don’t hesitate to get in touch with one of our Sri Lanka experts.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-sri-lanka.pdf" target="_blank" title="Pre-depature Sri Lanka">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-south-korea.pdf" target="_blank" title="Pre-depature South Korea">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-south-korea.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-south-korea.pdf" target="_blank" title="Pre-depature South Korea">Pre-depature South Korea</a></h3>
                <div class="box-share">
                    <div class="desti">South Korea</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">From stunning natural landscapes to the energetic pulse of modern cities, South Korea is a traveler's paradise, filled with countless unforgettable experiences... To help you prepare your trip and make the most of your time when you are in South Korea, we would like to give you this pre-departure document.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-south-korea.pdf" target="_blank" title="Pre-depature South Korea">continue reading...</a>
                </div>
            </div>
            <div class="main-posts">
                <a href="https://www.asiatours.com/pdf/pre-departure-hong-kong.pdf" target="_blank" title="Pre-depature Hong Kong">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/background/bg-hong-kong.jpg" />
                </a>
                <h3><a href="https://www.asiatours.com/pdf/pre-departure-hong-kong.pdf" target="_blank" title="Pre-depature Hong Kong">Pre-depature Hong Kong</a></h3>
                <div class="box-share">
                    <div class="desti">Hong Kong</div>
                    <a rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://www.asiatours.com/pre-departure.html&t=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Facebook"><i class="icon-font facebook-square-brands"></i></a> <a rel="nofollow" href="https://twitter.com/share?url=https://www.asiatours.com/pre-departure.html&text=" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Twitter"><i class="icon-font twitter-brands"></i></a> <a rel="nofollow" href="https://www.instagram.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;" target="_blank" title="Share on Instagram"><i class="icon-font instagram-brands"></i></a>
                </div>
                <p class="paragraph">Hong Kong is a must-visit destination for any traveler seeking a touch of cultural diversity. From exploring the iconic Victoria Peak to indulging in world-class cuisine, there's something for everyone to experience in this cosmopolitan city... To help you prepare your trip and make the most of your time when you are in Hong Kong, we would like to give you this pre-departure document.</p>
                <div class="box-button">
                    <a class="btn-st2" href="https://www.asiatours.com/pdf/pre-departure-hong-kong.pdf" target="_blank" title="Pre-depature Hong Kong">continue reading...</a>
                </div>
            </div>
        </div>
        <div class="wrap-blog-item-3 sticky-box">
            <div class="box-blog blog-des-list">
                <a href="javascript:;">
                    <span>Destinations</span>
                    <i>&raquo;</i>
                </a>
                <ul>
                    <li>
                        <a href="https://www.asiatours.com/blog/" title="Asia Travel Guide & Blog">Asia(172)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/vietnam/" title="Vietnam Travel Guide & Blog">Vietnam(37)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/cambodia/" title="Cambodia Travel Guide & Blog">Cambodia(18)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/laos/" title="Laos Travel Guide & Blog">Laos(3)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/myanmar/" title="Myanmar Travel Guide & Blog">Myanmar(17)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/thailand/" title="Thailand Travel Guide & Blog">Thailand(21)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/indonesia/" title="Indonesia Travel Guide & Blog">Indonesia(11)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/malaysia/" title="Malaysia Travel Guide & Blog">Malaysia(14)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/singapore/" title="Singapore Travel Guide & Blog">Singapore(6)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/philippines/" title="Philippines Travel Guide & Blog">Philippines(11)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/china/" title="China Travel Guide & Blog">China(6)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/hong-kong/" title="Hong-kong Travel Guide & Blog">Hong Kong(2)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/japan/" title="Japan Travel Guide & Blog">Japan(9)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/south-korea/" title="South-korea Travel Guide & Blog">South Korea(4)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/bhutan/" title="Bhutan Travel Guide & Blog">Bhutan(5)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/nepal/" title="Nepal Travel Guide & Blog">Nepal(4)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/india/" title="India Travel Guide & Blog">India(5)</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/blog/sri-lanka/" title="Sri-lanka Travel Guide & Blog">Sri Lanka(6)</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="wrap-blog-item-4">
            <div class="box-blog blog-userful">
                <a href="javascript:;">
                    <span>Useful Info</span>
                </a>
                <ul>
                    <li>
                        <a href="https://www.asiatours.com/pre-departure.html" title="Pre-departures Asia">Pre-departures</a>
                    </li>
                    <li>
                        <a href="https://www.asiatours.com/experiences/" title="Asia Tour Experiences">Unique Experiences</a>
                    </li>
                </ul>
            </div>
            <div class="box-blog blog-social-list">
                <a href="javascript:;">
                    <span>Let's get social</span>
                </a>
                <ul>
                    <li>
                        <a href="javascript:;"><i class="icon-font twitter-brands"></i></a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="icon-font facebook-square-brands"></i></a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="icon-font instagram-brands"></i></a>
                    </li>
                </ul>
            </div>
            <div class="recent-posts">
                <a href="javascript:;">
                    <span>Recent posts</span>
                </a>
                <div class="box-blog-flex">
                    <div class="row">
                        <div class="col-xlg-6 col-xsm-12">
                            <a href="https://www.asiatours.com/blog/the-best-couples-holidays-in-asia.html" title="The Best Couples' Holidays in Asia">
                                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/the-best-couples-holidays-in-asia-661-650-388.jpg" alt="The Best Couples' Holidays in Asia">
                            </a>
                        </div>
                        <div class="col-xlg-6 col-xsm-12">
                            <h3><a href="https://www.asiatours.com/blog/the-best-couples-holidays-in-asia.html" title="The Best Couples' Holidays in Asia">The Best Couples' Holidays in Asia</a></h3>
                            <div class="desti">Asia</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xlg-6 col-xsm-12">
                            <a href="https://www.asiatours.com/blog/top-family-friendly-theme-parks-in-asia.html" title="Top Family-Friendly Theme Parks in Asia">
                                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/top-family-friendly-theme-parks-in-asia-1-650-388.jpg" alt="Top Family-Friendly Theme Parks in Asia">
                            </a>
                        </div>
                        <div class="col-xlg-6 col-xsm-12">
                            <h3><a href="https://www.asiatours.com/blog/top-family-friendly-theme-parks-in-asia.html" title="Top Family-Friendly Theme Parks in Asia">Top Family-Friendly Theme Parks in Asia</a></h3>
                            <div class="desti">Asia</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xlg-6 col-xsm-12">
                            <a href="https://www.asiatours.com/blog/sri-lanka-india-epic-wildlife-and-timeless-wonders.html" title="Sri Lanka & India: Epic Wildlife and Timeless Wonders">
                                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/sri-lanka-india-epic-wildlife-and-timeless-wonders-537-650-388.jpg" alt="Sri Lanka & India: Epic Wildlife and Timeless Wonders">
                            </a>
                        </div>
                        <div class="col-xlg-6 col-xsm-12">
                            <h3><a href="https://www.asiatours.com/blog/sri-lanka-india-epic-wildlife-and-timeless-wonders.html" title="Sri Lanka & India: Epic Wildlife and Timeless Wonders">Sri Lanka & India: Epic Wildlife and Timeless Wonders</a></h3>
                            <div class="desti">India, Sri Lanka</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xlg-6 col-xsm-12">
                            <a href="https://www.asiatours.com/blog/two-kingdoms-of-the-himalayas-why-nepal-bhutan-belong-in-one-trip.html" title="Two Kingdoms of the Himalayas: Why Nepal & Bhutan Belong in One Trip">
                                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/two-kingdoms-of-the-himalayas-why-nepal-bhutan-bel-493-650-388.jpg" alt="Two Kingdoms of the Himalayas: Why Nepal & Bhutan Belong in One Trip">
                            </a>
                        </div>
                        <div class="col-xlg-6 col-xsm-12">
                            <h3><a href="https://www.asiatours.com/blog/two-kingdoms-of-the-himalayas-why-nepal-bhutan-belong-in-one-trip.html" title="Two Kingdoms of the Himalayas: Why Nepal & Bhutan Belong in One Trip">Two Kingdoms of the Himalayas: Why Nepal & Bhutan Belong in One Trip</a></h3>
                            <div class="desti">Bhutan, Nepal</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xlg-6 col-xsm-12">
                            <a href="https://www.asiatours.com/blog/spring-wonders-chasing-cherry-blossoms-across-japan-korea.html" title="Spring Wonders: Chasing Cherry Blossoms Across Japan & Korea">
                                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/uploads/photo-blog/spring-wonders-chasing-cherry-blossoms-across-japa-238-650-388.jpg" alt="Spring Wonders: Chasing Cherry Blossoms Across Japan & Korea">
                            </a>
                        </div>
                        <div class="col-xlg-6 col-xsm-12">
                            <h3><a href="https://www.asiatours.com/blog/spring-wonders-chasing-cherry-blossoms-across-japan-korea.html" title="Spring Wonders: Chasing Cherry Blossoms Across Japan & Korea">Spring Wonders: Chasing Cherry Blossoms Across Japan & Korea</a></h3>
                            <div class="desti">Japan, South Korea</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-posts">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/demo-slider-11.jpg" alt="">
                <div>
                    <button class="btn-st2 btn-contact">enquire now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section-bg mg-top-0 mg-bot-0">
    <div class="bacground-box">
        <div class="bg-left">
            <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/form_l.jpg" alt="">
        </div>
        <div class="bg-right">
            <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/form_r.jpg" alt="">
        </div>
    </div>
    <div class="container">
        <div class="wrap-mini-intro-st2">
            <div class="team-quote">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a2.webp" alt="">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a3.webp" alt="">
                <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/otm_home/a5.webp" alt="">
                <div class="team-name">Being the locals, We know our homeland the best!</div>
            </div>
        </div>
        <div class="team-mess mobile-hidden">
            <p>We are here to take the stress out of the holiday planning process.<br>Let us help you plan an unforgettable journey of lifetime with High Quality & Affordable Price.<br>Surely, you will feel satisfied!
            </p>
        </div>
        <div class="team-contact">
            <form id="form-contact-home" action="" style="position: relative;">
                <div class="loading-modal close-display">
                    <img src="#" data-img="https://d2lwt6tidfiof0.cloudfront.net/images/loading-modal.gif">
                </div>
                <div class="form-field col-xlg-12">
                    <div>Your questions, trip ideas...<span>*</span></div>
                    <textarea id="f_question" name="" required=""></textarea>
                </div>
                <div class="half">
                    <div class="form-field col-xlg-6 col-xsm-12">
                        <div>Name:<span>*</span></div>
                        <input id="f_name" name="" type="text" required="">
                    </div>
                    <div class="form-field col-xlg-6 col-xsm-12">
                        <div>Email:<span>*</span></div>
                        <input id="f_mail" name="" type="text" required="">
                    </div>
                </div>
                <div class="form-field col-xlg-12">
                    <div class="booking-step-budget select-st2 select-st2-new">
                        <select id="f_budget" name="f_budget">
                            <option value="" selected=""></option>
                        </select>
                        <div class="text">
                            <b>Your budget (USD)/person (without in/out flights)</b>
                            <i class="icon-font select-arrow-thin"></i>
                        </div>
                        <ul class="value">
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>> $10,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>$5,000 - $10,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>$3,000 - $5,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>$2,000 - $3,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>$1,000 - $2,000</b>
                                    <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:" class="btn-value">
                                    <b>
                                        < $1,000</b>
                                            <i class="icon-font checkmark"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="check-field">
                        <div class="">
                            <label for="">
                                <div style="font-style: italic;">* Above is just budget reference to match you up with the perfect product, not fixed price.</div>
                            </label>
                        </div>
                    </div>
                </div>
                <div id="load-contact-home"></div>
                <button id="btn-contact-home" class="btn-st3" type="button">Send</button>
            </form>
        </div>
    </div>
</section>

@endsection