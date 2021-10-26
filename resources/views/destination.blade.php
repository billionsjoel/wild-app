<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Destination</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

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
                @forelse ($destinations as $destination)
                    <h1 class="display-4 fst-italic">{{ $destination->title }}</h1>
                    <div class="col-sm-12">
                        <div class="card align-center" style="width: 100%;">
                            <img src="{{ asset('images/' . $destination->image) }}" class="card-img-top img-style"
                                alt="...">
                        </div>
                    </div>
                @empty
                    <h1 class="display-4 fst-italic alert alert-danger">This destination must have been moved or
                        deleted.</h1>
                @endforelse

            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-8">
                @forelse ($destinations as $destination)
                    <article class="blog-post">
                        <h2 class="blog-post-title">{{ $destination->title }}</h2>
                        <p>{!! $destination->body !!}</p>
                    </article>
                @empty
                    <article class="blog-post">
                        <p class="lead alert alert-warning p-4">The content of this destination must have been moved or
                            deleted.</p>
                    </article>
                @endforelse

                <nav class="blog-pagination mt-4" aria-label="Pagination" style="margin-top: 2rem;">
                    <a class="btn btn-outline-primary" href="{{ url('destinations') }}">Book Destination</a>
                    <a class="btn btn-outline-secondary " href="{{ url('safaris') }}" tabindex="-1"
                        aria-disabled="true">See
                        Safaris</a>
                </nav>

            </div>

            <div class="col-md-4">
                <div class="position-sticky" style="top: 2rem;">
                    <div class="p-4 mb-3 bg-light rounded">
                        <h4 class="fst-italic">About</h4>
                        <p class="mb-0">We can customize this private tour just for you. Any element can be
                            tailored – activities, length, hotels and destinations. Write to us at
                            proactive-adventures@gmail.com or call us on +254706511644, +64273782346.</p>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Destinations</h4>
                        <ol class="list-unstyled mb-0">
                            @forelse ($titles as $title)
                                <li><a href="{{ url('destination?id=' . $title->id) }}">{{ $title->title }}</a>
                                </li>

                            @empty
                                <li class="alert alert-warning">No Destinations found</li>
                            @endforelse

                        </ol>
                    </div>

                    <div class="p-4">
                        <h4 class="fst-italic">Safaris</h4>
                        <ol class="list-unstyled">
                            @forelse ($safaris as $safari)
                                <li><a href="{{ url('destination?id=' . $safari->id) }}">{{ $safari->title }}</a>
                                </li>

                            @empty
                                <li class="alert alert-warning">No Safaris found</li>
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
