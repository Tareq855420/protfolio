<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bashar - Made by Bashar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}front/css/A.open-iconic-bootstrap.min.css%2banimate.css%2bowl.carousel.min.css%2bowl.theme.default.min.css%2bmagnific-popup.css%2baos.css%2bionicons.min.css%2bflaticon.css%2bicomoon.css%2bst" />
    <script nonce="725fda5f-0db6-4005-b33f-dd541ee825be">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{},a.zarazData.executed=[],a.zaraz={deferred:[]},a.zaraz.q=[],a.zaraz._f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","ecommerce","debug"])a.zaraz[e]=a.zaraz._f(e);a.addEventListener("DOMContentLoaded",(()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];for(n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text),a.zarazData.w=a.screen.width,a.zarazData.h=a.screen.height,a.zarazData.j=a.innerHeight,a.zarazData.e=a.innerWidth,a.zarazData.l=a.location.href,a.zarazData.r=e.referrer,a.zarazData.k=a.screen.colorDepth,a.zarazData.n=e.characterSet,a.zarazData.o=(new Date).getTimezoneOffset(),a.zarazData.q=[];a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0,z.referrerPolicy="origin",z.src="../../cdn-cgi/zaraz/sd0d9.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData))),t.parentNode.insertBefore(z,t)}))}(w,d,0,"script");})(window,document);</script></head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}"><span>B</span>ashar</a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="#home-section" class="nav-link"><span>Home</span></a></li>
                <li class="nav-item"><a href="#about-section" class="nav-link"><span>About</span></a></li>
                <li class="nav-item"><a href="#resume-section" class="nav-link"><span>Resume</span></a></li>
                <li class="nav-item"><a href="#services-section" class="nav-link"><span>Services</span></a></li>
                <li class="nav-item"><a href="#projects-section" class="nav-link"><span>Projects</span></a></li>
                <li class="nav-item"><a href="#contact-section" class="nav-link"><span>Contact</span></a></li>
            </ul>
        </div>
    </div>
</nav>

@yield('body')

<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">About</h2>
                    <p>I can make a good looking and professional website by using many languages like HTML,CSS, Bootstrap, Laravel. I can also make WordPress site</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="https://www.facebook.com/tareq.khan.984"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://twitter.com/TareqKhan8554"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/tareqkhan8554/"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Links</h2>
                    <ul class="list-unstyled">
                        <li><a href="#home-section"><span class="icon-long-arrow-right mr-2"></span>Home</a></li>
                        <li><a href="#about-section"><span class="icon-long-arrow-right mr-2"></span>About</a></li>
                        <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>Services</a></li>
                        <li><a href="#projects-section"><span class="icon-long-arrow-right mr-2"></span>Projects</a></li>
                        <li><a href="#contact-section"><span class="icon-long-arrow-right mr-2"></span>Contact</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Services</h2>
                    @foreach( $services as $service )
                    <ul class="list-unstyled">
                        <li><a href="#services-section"><span class="icon-long-arrow-right mr-2"></span>{{ $service->name }}</a></li>
                    </ul>
                    @endforeach
                </div>
            </div>

            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        @foreach( $contacts as $contact )
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">{{ $contact->address }}</span></li>
                            <li><a href="tel://+8801770747432"><span class="icon icon-phone"></span><span class="number">{{ $contact->number }}</a></li>
                            <li><a href="https://khantareq539@gmail.com"><span class="icon icon-envelope"></span><span class="email"><span class="__cf_email__">{{ $contact->email }}</span></span></a></li>
                        </ul>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <p>
                    Copyright &copy;<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                    <script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This site is made by <i class="icon-heart color-danger" aria-hidden="true"></i>
                    by
                    <a href="https://www.google.com/" target="_blank">Bashar</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" /></svg></div>
<script src="{{ asset('/') }}front/js/jquery.min.js"></script>
<script src="{{ asset('/') }}front/js/jquery-migrate-3.0.1.min.js%2bpopper.min.js%2bbootstrap.min.js.pagespeed.jc.bMyveoHKiv.js"></script><script>eval(mod_pagespeed_gb7yraQys5);</script>
<script>eval(mod_pagespeed_RGKn6SW32g);</script>
<script>eval(mod_pagespeed_h9rX52Z4Ti);</script>
<script src="{{ asset('/') }}front/js/jquery.easing.1.3.js%2bjquery.waypoints.min.js%2bjquery.stellar.min.js%2bowl.carousel.min.js.pagespeed.jc.P2hE5bOhqO.js"></script><script>eval(mod_pagespeed_rBeIzFEDC0);</script>
<script>eval(mod_pagespeed_m_l$l00rWq);</script>
<script>eval(mod_pagespeed_tOGOF_KHft);</script>
<script>eval(mod_pagespeed_g921z9MGXC);</script>
<script src="{{ asset('/') }}front/js/jquery.magnific-popup.min.js%2baos.js%2bjquery.animateNumber.min.js%2bscrollax.min.js%2bmain.js.pagespeed.jc.GTDEZB3xMJ.js"></script>
<script>eval(mod_pagespeed_P9B3uJNt60);</script>
<script>eval(mod_pagespeed_ACE0ce7fTR);</script>
<script>eval(mod_pagespeed_awRnuKerVJ);</script>
<script>eval(mod_pagespeed_iVOyfib5U4);</script>
<script>eval(mod_pagespeed_udwuFYXF0f);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"7005f85a7aaf6eec","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.12.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
