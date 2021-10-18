@extends('layouts.index')
@section('assets')
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
    <style>
        .content {
            display: flex;
            justify-content: center;
            align-content: center;
            flex-direction: column;
        }

    </style>
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
        <svg role="img" class="bi text-success" width="64" height="64" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            {{-- <title>Gradle</title> --}}
            <path
                d="M22.695 4.297a3.807 3.807 0 0 0-5.29-.09.368.368 0 0 0 0 .533l.46.47a.363.363 0 0 0 .474.032 2.182 2.182 0 0 1 2.86 3.291c-3.023 3.02-7.056-5.447-16.211-1.083a1.24 1.24 0 0 0-.534 1.745l1.571 2.713a1.238 1.238 0 0 0 1.681.461l.037-.02-.029.02.688-.384a16.083 16.083 0 0 0 2.193-1.635.384.384 0 0 1 .499-.016.357.357 0 0 1 .016.534 16.435 16.435 0 0 1-2.316 1.741H8.77l-.696.39a1.958 1.958 0 0 1-.963.25 1.987 1.987 0 0 1-1.726-.989L3.9 9.696C1.06 11.72-.686 15.603.26 20.522a.363.363 0 0 0 .354.296h1.675a.363.363 0 0 0 .37-.331 2.478 2.478 0 0 1 4.915 0 .36.36 0 0 0 .357.317h1.638a.363.363 0 0 0 .357-.317 2.478 2.478 0 0 1 4.914 0 .363.363 0 0 0 .358.317h1.627a.363.363 0 0 0 .363-.357c.037-2.294.656-4.93 2.42-6.25 6.108-4.57 4.502-8.486 3.088-9.9zm-6.229 6.901l-1.165-.584a.73.73 0 1 1 1.165.587z" />
        </svg>
        <h1 class="display-5 fw-bold">Tourism</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Known as the pearl of a Africa, Uganda's stunning scenery and warm, friendly
                people offer unique experiences in one of the most remarkable countries in the world. It is blessed with
                extraordinary biodiversity, with incredible wildlife living throughout its volcanoes, montane rainforest and
                sweeping plains.</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-success btn-lg px-4 gap-3">Read more</button>
                <button type="button" class="btn btn-outline-secondary btn-lg px-4" id="#contact">Contact Us</button>
            </div>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100">
                <img class="rounded-3" src="{{ url('images/canopy-walk.jpeg') }}" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3 text-center">
                <div class="content h-100 mt-4 ">
                    <h2>The Great Rift Valley</h2>
                    <p class="mt-4 lead">As guardians of many iconic species, Rwanda is committed to safeguarding their
                        existence within the
                        four
                        National Parks.
                    <p>
                    <p class="lead">
                        We are constantly working to ensure we can live in sustainable harmony with our environment, with a
                        clean and green mindset. We banned plastic bags in 2008, and our lands are possibly the cleanest in
                        Africa thanks to efforts throughout every community.
                    </p>
                    <p class="lead">
                        Ten percent of the income derived from gorilla, safari and other tourist permits, as well as park
                        fees,
                        is spent in partnership with local communities to change lives for the better.
                    <p>
                        <a href="{{ url('gallery') }}" class="btn btn-outline-success align-center mt-4"
                            type="button">View
                            Activities</a>
                </div>
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
        <svg role="img" class="bi text-success" width="64" height="64" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <title>Monkey</title>
            <path
                d="M21.1627 13.1843a2.8517 2.8517 0 0 0-.6778.0841c-.8438-3.3181-3.5478-5.8376-6.9172-6.4452a8.3933 8.3933 0 0 0-.4407-.0668c.0259-.8255.0636-1.7791 1.2781-2.6369l-.1918-.4838s-2.3708.7349-2.6391 2.7598c-.1175-.5507-1.2209-1.2403-1.7673-1.3707l-.2717.4384s.7242.3621.9009 1.361c-3.3691.6056-6.0743 3.1229-6.9204 6.4398-1.5194-.376-3.056.5508-3.432 2.0703-.376 1.5194.5508 3.056 2.0703 3.432a2.8346 2.8346 0 0 0 1.7195-.1142 8.6821 8.6821 0 0 0 .9203 1.7123l2.3524-1.5852c-.6381-.8071-1.0206-1.9884-1.0873-3.1736-.07-1.2931.2446-2.5755 1.0701-3.3298 1.7016-1.4483 3.5561-.7877 4.7135.6002h.3114c1.1606-1.388 3.0173-2.0475 4.7135-.6002.8244.7543 1.1401 2.0378 1.0701 3.3298-.0656 1.1853-.4481 2.3664-1.0873 3.1736l2.3524 1.5852a8.6854 8.6854 0 0 0 .9224-1.7123c1.4551.5751 3.1009-.1384 3.676-1.5935s-.1384-3.1009-1.5935-3.676a2.8349 2.8349 0 0 0-1.0448-.1983zM2.7861 16.8482a.8362.8362 0 0 1 0-1.6724.8442.8442 0 0 1 .4688.1444c.0071.4391.0369.8776.0894 1.3136-.1472.1346-.3738.2329-.5582.2144zm18.4273 0a.8361.8361 0 0 1-.5582-.2155 12.679 12.679 0 0 0 .0894-1.3136.8352.8352 0 0 1 1.304.6929c.0078.4574-.3823.8581-.8352.8362z" />
        </svg>
        <h1 class="display-5 fw-bold mb-4">Responsible Toursim</h1>
        <div class="col-lg-6 mx-auto mt-4">
            <p class="mb-4 lead">As guardians of many iconic species, Uganda is committed to safeguarding their
                existence within the National Parks.
            </p>
            <p class="lead">
                We are constantly working to ensure we can live in sustainable harmony with our environment, with a clean
                and green mindset. We banned plastic bags, and our lands are possibly one of the cleanest in Africa. Thanks
                to efforts throughout every community.
            </p>
            <p class="lead">
                A percentage of the income derived from gorilla, safari and other tourist permits, as well as park fees, is
                spent in partnership with local communities to change lives for the better.</p>
        </div>
    </div>

    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div class="h-100">
                <img class="rounded-3" src="{{ url('images/two-monkeys.jpeg') }}" class="img-fluid" alt="...">
            </div>
        </div>
        <div class="col-md-6">
            <div class="h-100 p-5 bg-light border rounded-3">
                <div class="content h-100 mt-4 text-center">
                    <h2 class="mt-4">Responsible Tourism</h2>
                    <p class="mt-4 lead">
                        The west of Uganda forms a branch of the Great Rift Valley known as the Albertine Rift. It has many
                        unique, endemic species and is bursting with life.
                    </p>
                    <p class="lead">
                        Chimpanzees, golden monkeys and other primates live alongside hundreds of brightly-coloured birds,
                        orchids and butterflies.
                    </p>
                    <p class="lead">
                        And that is only scratching the surface…
                    <p>
                        <button class="btn btn-outline-success mt-4" type="button">View Activities</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="{{ url('images/uganda-airlines.jpeg') }}" class="d-block mx-lg-auto img-fluid"
                    alt="Uganda Airlines" width="700" height="500" loading="lazy">
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold lh-1 mb-3">Meet in Uganda</h1>
                <p class="lead mt-4">Uganda is an excellent hub for meetings and events, with world-class facilities –
                    the Kampala, Mbarara, Gulu, Jinja and Hoima with Hotels like the serena Hotel where Convention Centre
                    chose to host the Commonwealth Heads of Government Summit in past years.
                    Conveniently located close to Entebbe airport, the KCCA offers a premium environment for regional and
                    international conventions, exhibitions, festivals, meetings and other events.</p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button type="button" class="btn btn-success btn-lg px-4 me-md-2">Read more</button>
                    <button type="button" class="btn btn-outline-secondary btn-lg px-4">Contact Us</button>
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
