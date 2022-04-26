@extends('front.master')

@section('body')
    <section class="hero-wrap js-fullheight" id="home-section">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-8 col-md-6 ftco-animate d-flex align-items-center">
                    <div class="text text-center">
                        <span class="subheading">{{ $main->title }}</span>
                        <h1 class="text-center">{{ $main->subtitle }}</h1>
                        <h2> I am a
                            <span class="txt-rotate" data-period="1000" data-rotate='[ "Web Designer.", "Developer.", "Tech Enthusiast." ]'></span>
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="mouse">
            <a href="#resume-section" class="mouse-icon">
                <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
            </a>
        </div>
    </section>

    <section class="ftco-about img ftco-section ftco-no-pt ftco-no-pb" id="about-section">
        @if(count($abouts) > 0 )
            @foreach($abouts as $about)
                <div class="container">
                    <div class="row d-flex no-gutters">
                        <div class="col-md-6 col-lg-6 d-flex">
                            <div class="img-about img d-flex align-items-stretch">
                                <div class="overlay"></div>
                                <div class="img d-flex align-self-stretch align-items-center" style="background-image:url({{$about->image}})"></div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <h1 class="big">About</h1>
                                    <h2 class="mb-4">About Me</h2>
                                    <p>Who am I??</p>
                                    <ul class="about-info mt-4 px-md-0 px-2">
                                        <li class="d-flex"><span>Name:</span> <span>{{ $about->name }}</span></li>
                                        <li class="d-flex"><span>Date of birth:</span> <span>{{ $about->birthDate }}</span></li>
                                        <li class="d-flex"><span>Address:</span> <span>{{ $about->address }}</span></li>
                                        <li class="d-flex"><span>Zip code:</span> <span>{{ $about->zipCode }}</span></li>
                                        <li class="d-flex"><span>Email:</span> <span><label ><a href="{{ $about->email }}" class="__cf_email__"></a></label>{{ $about->email }}</span></li>
                                        <li class="d-flex"><span>Phone: </span> <span>{{ $about->mobile }}</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="counter-wrap ftco-animate d-flex mt-md-3">
                                <div class="text">
                                    <p class="mb-4">
                                        <span class="number" data-number="{{ $about->completed }}">0</span>
                                        <span>Project complete</span>
                                    </p>
                                    <p><a href="{{ $about->resume }}" class="btn btn-primary py-3 px-3">Download CV</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif


    </section>

    <section class="ftco-section ftco-no-pb goto-here" id="resume-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <nav id="navi">
                        <ul>
                            <li><a href="{{ route('education') }}">Education</a></li>
                            <li><a href="{{ route('skill') }}">Skills</a></li>
                        </ul>
                    </nav>
                </div>
                    <div class="col-md-9">
                        <div id="" class="page one">
                            <h2 class="heading">Education</h2>
                            @foreach($educations as $education)
                            <div class="resume-wrap d-flex ftco-animate">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="flaticon-ideas"></span>
                                </div>
                                <div class="text pl-3">
                                    <span class="date">{{ $education->dur }}</span>
                                    <h2>{{ $education->lavel }}</h2>
                                    <span class="position">{{ $education->institute }}</span>
                                    <p>{{ $education->description }}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div id="page-3" class="page three">
                            <h2 class="heading">Skills</h2>
                            <div class="row progress-circle mb-5">
                            @foreach( $skills as $skill )
                                <div class="col-lg-4 mb-4">
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <h2 class="h5 font-weight-bold text-center mb-4">{{ $skill->title }}</h2>
                                            <div class="progress mx-auto" data-value='90'>
                                        <span class="progress-left">
                                            <span class="progress-bar border-info"></span>
                                        </span>
                                                <span class="progress-right">
                                            <span class="progress-bar border-primary"></span>
                                        </span>
                                                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="h2 font-weight-bold">{{ $skill->range }}</div>
                                                </div>
                                            </div>

                                            <div class="row text-center mt-4">
                                                <div class="col-6 border-right">
                                                    <div class="h4 font-weight-bold mb-0">{{ $skill->lastWork }}</div>
                                                    <span class="small text-gray">Last week</span>
                                                </div>
                                                <div class="col-6">
                                                    <div class="h4 font-weight-bold mb-0">{{ $skill->lastMonth }}</div>
                                                    <span class="small text-gray">Last month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            @endforeach
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section" id="services-section">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center py-5 mt-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Services</h1>
                    <h2 class="mb-4">Services</h2>
                    <p>I provide some good services</p>
                </div>
            </div>
            <div class="row">
                @foreach( $services as $service )
                <div class="col-md-4 text-center d-flex ftco-animate">
                    <a href="#" class="services-1 shadow">
                        <span class="icon">
                            <i class="icon"{{ $service->icon }}></i>
                        </span>
                        <div class="desc">
                            <h3 class="mb-5">{{ $service->name }}</h3>
                            <p>{{ $service->description }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-project" id="projects-section">
        <div class="container-fluid px-md-0">
            <div class="row no-gutters justify-content-center pb-5">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Projects</h1>
                    <h2 class="mb-4">My Projects</h2>
                    <p>Here are some projects demo which I've completed.</p>
                </div>
            </div>

            <div class="row no-gutters">
                @foreach( $projects as $project )
                <div class="col-md-4">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" style="background-image:url({{ $project->image }})">
                        <div class="overlay"></div>
                        <div class="text text-center p-4">
                            <h3><a href="#">{{ $project->title }}</a></h3>
                            <span>{{ $project->subtitle }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
        <div class="container-fluid px-md-5">
            <div class="row d-md-flex align-items-center">
                @foreach( $counters as $counter )
                <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18 shadow">
                        <div class="text">
                            <strong class="number" data-number={{ $counter->experience }}>0</strong>
                            <span>Experience Years</span>
                        </div>
                    </div>
                </div>

                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 shadow">
                            <div class="text">
                                <strong class="number" data-number={{ $counter->project }}>0</strong>
                                <span>Complete Projects</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 shadow">
                            <div class="text">
                                <strong class="number" data-number={{ $counter->costumer }}>0</strong>
                                <span>Happy Customers</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                        <div class="block-18 shadow">
                            <div class="text">
                                <strong class="number" data-number={{ $counter->coffee }}>0</strong>
                                <span>Cups of coffee</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        @endforeach
    </section>

    @foreach( $banners as $banner )
    <section class="ftco-section ftco-hireme img" style="background-image:url({{ $banner->image }})">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 ftco-animate text-center">
                    <h2>{{ $banner->title }} <span>{{ $banner->caption }}</span> {{ $banner->subtitle }}</h2>
                    <p>{{ $banner->short }}</p>
                    <p class="mb-0"><a href="{{ $banner->link }}" class="btn btn-primary py-3 px-5">Hire me</a></p>
                </div>
            </div>
        </div>
    </section>
    @endforeach

    <section class="ftco-section contact-section ftco-no-pb" id="contact-section">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h1 class="big big-2">Contact</h1>
                    <h2 class="mb-4">Contact Me</h2>
                    <p>Feel free to contact with me anytime.</p>
                </div>
            </div>
            <div class="row d-flex contact-info mb-5">
                @foreach( $contacts as $contact )
                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-map-signs"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Address</h3>
                            <p><a href="https://goo.gl/maps/S2yndtBdHUNTFwtf7">{{ $contact->address }}</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-phone2"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Contact Number</h3>
                            <p><a href="tel://+8801770747432">{{ $contact->number }}</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-paper-plane"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Email Address</h3>
                            <p><a href="https://khantareq539@gmail.com"><span class="__cf_email__">{{ $contact->email }}</span></a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex ftco-animate">
                    <div class="align-self-stretch box text-center p-4 shadow">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="icon-globe"></span>
                        </div>
                        <div>
                            <h3 class="mb-4">Github</h3>
                            <p><a href="url({{ $contact->site }})">GitHub</a></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row no-gutters block-9">
                <div class="col-md-6 order-md-last d-flex">
                    <form action="{{ route('front-message') }}" id="contact" method="post" class="bg-light p-4 p-md-5 contact-form">
                        @csrf
                        @if(Session::has('message'))
                            <span class="text-success">{{ Session::get('message') }}</span>
                        @endif
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name">
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Your Email">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" placeholder="Subject">
                        </div>

                        <div class="form-group">
                            <textarea type="text" name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>

                <div class="col-md-6 d-flex">
                    @foreach( $contacts as $contact )
                    <div class="img" style="background-image:url({{ $contact->image }})"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
