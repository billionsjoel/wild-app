@extends('layouts.index')
@section('assets')
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
@endsection

@section('content')
    <header id="home">
        <div class="row header" id="home">
            <div class="col-sm-12">
                <div class="center">
                    <span class="heading-main">ProActive </span>
                    <span class="heading-sub mb-4 border-bottom border-teal">wild Adventure.</span>
                    <span class="heading-sub P-4">"Safe and Seemless Experience."</span></p>
                    <a class="btn btn-light btn-lg" style="width:13rem; border-radius: 100px;" href="#services">Get
                        started</a>
                </div>
            </div>
        </div>
    </header>

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                system, extensive prebuilt components, and powerful JavaScript plugins.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-primary btn-lg px-4 gap-3">Primary button</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4">Secondary</button>
            </div>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Backround image</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look.
                    Then, mix and match with additional component themes and more.</p>
                <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>The Great Rift Valley</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi itaque fugiat rem deleniti alias
                    eaque sit ratione maxime, eveniet inventore neque natus voluptate ab, dolore aspernatur fuga
                    commodi, facere veritatis?
                    Obcaecati nesciunt incidunt maiores impedit, tempora sequi, distinctio sed recusandae dolor numquam
                    laudantium cumque vitae ducimus, officiis ratione iusto velit magni itaque? Mollitia, aperiam. Ad
                    nihil modi ut impedit excepturi?
                    Eveniet quidem expedita dolorum, nostrum sunt officiis rerum consectetur vitae incidunt nulla
                    aperiam, pariatur dignissimos doloremque id. Beatae nulla illo amet nisi totam in eligendi, eveniet
                    vel non vitae modi?
                <p>
                    <button class="btn btn-outline-secondary" type="button">View Activities</button>
            </div>
        </div>
    </div>

    <div class="container px-4 py-5" id="custom-cards">
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url('unsplash-photo-1.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill" />
                                </svg>
                                <small>Earth</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3" />
                                </svg>
                                <small>3d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url('unsplash-photo-2.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines
                        </h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill" />
                                </svg>
                                <small>Pakistan</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3" />
                                </svg>
                                <small>4d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url('unsplash-photo-3.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="me-auto">
                                <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32"
                                    class="rounded-circle border border-white">
                            </li>
                            <li class="d-flex align-items-center me-3">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#geo-fill" />
                                </svg>
                                <small>California</small>
                            </li>
                            <li class="d-flex align-items-center">
                                <svg class="bi me-2" width="1em" height="1em">
                                    <use xlink:href="#calendar3" />
                                </svg>
                                <small>5d</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="display-5 fw-bold">Centered hero</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                system, extensive prebuilt components, and powerful JavaScript plugins.</p>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100 p-5 text-white bg-dark rounded-3">
                <h2>Backround image</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look.
                    Then, mix and match with additional component themes and more.</p>
                <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <h2>The Great Rift Valley</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sequi itaque fugiat rem deleniti alias
                    eaque sit ratione maxime, eveniet inventore neque natus voluptate ab, dolore aspernatur fuga
                    commodi, facere veritatis?
                    Obcaecati nesciunt incidunt maiores impedit, tempora sequi, distinctio sed recusandae dolor numquam
                    laudantium cumque vitae ducimus, officiis ratione iusto velit magni itaque? Mollitia, aperiam. Ad
                    nihil modi ut impedit excepturi?
                    Eveniet quidem expedita dolorum, nostrum sunt officiis rerum consectetur vitae incidunt nulla
                    aperiam, pariatur dignissimos doloremque id. Beatae nulla illo amet nisi totam in eligendi, eveniet
                    vel non vitae modi?
                <p>
                    <button class="btn btn-outline-secondary" type="button">View Activities</button>
            </div>
        </div>
    </div>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="bootstrap-themes.png" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700"
                    height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                    world’s most popular front-end open source toolkit, featuring Sass variables and mixins, responsive grid
                    system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                </div>
            </div>
        </div>
    </div>

    {{-- contact us info --}}
    <section id="contact">

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Feel free to contact us here</h1>
                    <p class="col-lg-10 fs-4">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-success" width="2em" height="2em"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">Uganda House</h6>
                                    <p class="mb-0 opacity-75">Kampala Rd</p>
                                </div>
                                {{-- <small class="opacity-50 text-nowrap">now</small> --}}
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" class="text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                            </svg>
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">+256 (0) 772 141 274</h6>
                                    <p class="mb-0 opacity-75">+256 (0) 704 907 021</p>
                                </div>
                                {{-- <small class="opacity-50 text-nowrap">3d</small> --}}
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="2em" height="2em" class="text-success"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                            </svg>
                            <div class="d-flex gap-2 w-100 justify-content-between">
                                <div>
                                    <h6 class="mb-0">proactivewildadventures@gmail.com</h6>
                                    <p class="mb-0 opacity-75">info@proactivewildadventures.com</p>
                                </div>
                                {{-- <small class="opacity-50 text-nowrap">1w</small> --}}
                            </div>
                        </a>
                    </div>
                    </p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email address</label>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea rows="10" cols="6" class="form-control" id="floatingPassword"
                                placeholder="Message"></textarea>
                            <label for="floatingPassword">Message</label>
                        </div>
                        <div class="checkbox mb-3">
                            <label>
                                <input type="checkbox" value="remember-me"> Am not a robot
                            </label>
                        </div>
                        <button class="w-100 btn btn-lg btn-success text-light" type="submit">Send Message</button>
                        <hr class="my-4">
                        <small class="text-muted">By clicking send message, you agree to the terms of use.</small>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
