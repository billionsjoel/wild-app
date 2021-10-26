<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Single Safari</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <link href="{{ asset('css/blog.css') }}" rel="stylesheet">
    <style>
        .img-style {
            height: 30rem;
            background-size: cover;
            background-position: top;
            object-fit: cover;
            object-position: 50% 50%;
        }

    </style>
</head>

<body>


    @include('layouts.nav')



    <main class="container mt-4">
        <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
            <div class="col-md-12 px-0">
                @forelse ($safaris as $safari)
                    <h1 class="display-4 fst-italic">{{ $safari->title }}</h1>
                    <p class="lead my-3">{!! $safari->body !!}</p>
                    <div class="col-sm-12">
                        <div class="card align-center" style="width: 100%;">
                            <img src="{{ asset('images/' . $safari->image) }}" class="card-img-top img-style"
                                alt="...">
                        </div>
                    </div>
                @empty
                    <h1 class="display-4 fst-italic">The safari you are looking for doesn't exist anymore</h1>
                    <p class="lead my-3">It has been moved or deleted. <a href="{{ url('safaris') }}"
                            class="btn btn-outline btn-info ms-2">Try another
                            safari</a> </p>
                @endforelse

                {{-- <p class="lead mb-0"><a href="#" class="text-white fw-bold">Continue reading...</a></p> --}}
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-8">
                <h3 class="pb-4 mb-4 fst-italic border-bottom">
                    From the Firehose
                </h3>

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active text-primary" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                            aria-controls="profile" aria-selected="false">Full Itenerary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                            aria-controls="contact" aria-selected="false">Terms and Conditions</a>
                    </li>
                </ul>
                @forelse ($safaris as $safari)
                    <div class="tab-content mt-4" id="myTabContent">
                        <div class="tab-pane fade show active mt-4" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            {!! $safari->overview !!}
                        </div>
                        <div class="tab-pane fade show mt-4 " id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            {!! $safari->itenerary !!}
                        </div>
                        <div class="tab-pane fade show mt-4" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                            {!! $safari->terms !!}</div>
                    </div>
                @empty
                    <p class="well lead p-4">The safari you are looking for has been deleted or moved.</p>
                @endforelse

                <nav class="blog-pagination mt-4" aria-label="Pagination" style="margin-top: 2rem;">
                    <a class="btn btn-outline-primary" href="{{ url('safaris') }}">Book Safari</a>
                    <a class="btn btn-outline-secondary " href="{{ url('destinations') }}" tabindex="-1"
                        aria-disabled="true">See Destinations</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">We can customize this private tour just for you. Any element can be
                            tailored – activities, length, hotels and destinations.
                            Write to us at <span class="text-danger">proactive-adventures@gmail.com </span> or call
                            us on +254706511644, +64273782346.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Safaris</h4>
                        <ol class="list-unstyled mb-0">
                            @forelse ($titles as $title)
                                <li><a href="{{ url('safari?id=' . $title->id) }}">{{ $title->title }}</a></li>

                            @empty
                                <li class="alert alert-warning">No Safari found</li>
                            @endforelse
                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Destinations</h4>
                        <ol class="list-unstyled">
                            @forelse ($destinations as $destination)
                                <li><a
                                        href="{{ url('destination?id=' . $destination->id) }}">{{ $destination->title }}</a>
                                </li>

                            @empty
                                <li class="alert alert-warning">No Destinations found</li>
                            @endforelse
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer class="blog-footer">
        <p>Website built for <a href="https://twitter.com/BillionsJoel">Active Pro</a> by <a
                href="https://twitter.com/BillionsJoel">@BillionsJoel</a>.</p>
        <p>
            <a href="#">Back to top</a>
        </p>
    </footer>





</body>

</html>
