 <nav class=" navbar navbar-expand-md navbar-dark bg-dark p-2" aria-label="Fourth navbar example">
     <div class="container-fluid">
         <a class="navbar-brand" href="{{ url('/') }}">
             <span><svg role="img" class="bi text-white" width="44" height="44" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                     {{-- <title>Gradle</title> --}}
                     <path
                         d="M22.695 4.297a3.807 3.807 0 0 0-5.29-.09.368.368 0 0 0 0 .533l.46.47a.363.363 0 0 0 .474.032 2.182 2.182 0 0 1 2.86 3.291c-3.023 3.02-7.056-5.447-16.211-1.083a1.24 1.24 0 0 0-.534 1.745l1.571 2.713a1.238 1.238 0 0 0 1.681.461l.037-.02-.029.02.688-.384a16.083 16.083 0 0 0 2.193-1.635.384.384 0 0 1 .499-.016.357.357 0 0 1 .016.534 16.435 16.435 0 0 1-2.316 1.741H8.77l-.696.39a1.958 1.958 0 0 1-.963.25 1.987 1.987 0 0 1-1.726-.989L3.9 9.696C1.06 11.72-.686 15.603.26 20.522a.363.363 0 0 0 .354.296h1.675a.363.363 0 0 0 .37-.331 2.478 2.478 0 0 1 4.915 0 .36.36 0 0 0 .357.317h1.638a.363.363 0 0 0 .357-.317 2.478 2.478 0 0 1 4.914 0 .363.363 0 0 0 .358.317h1.627a.363.363 0 0 0 .363-.357c.037-2.294.656-4.93 2.42-6.25 6.108-4.57 4.502-8.486 3.088-9.9zm-6.229 6.901l-1.165-.584a.73.73 0 1 1 1.165.587z" />
                 </svg></span> ProActive wild Adventure
         </a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04"
             aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
         </button>

         <div class="collapse navbar-collapse" id="navbarsExample04">
             <ul class="navbar-nav ms-auto">
                 <li class="nav-item">
                     <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Home</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">About Us</a>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="{{ url('/safaris?country=all') }}" id="dropdown04"
                         data-bs-toggle="dropdown" aria-expanded="false">Safaris</a>
                     <ul class="dropdown-menu" aria-labelledby="dropdown04">
                         <li><a class="dropdown-item" href="{{ url('/safaris?country=all') }}">All Safaris</a></li>
                         <li><a class="dropdown-item" href="{{ url('/safaris?country=uganda') }}">Uganda</a></li>
                         <li><a class="dropdown-item" href="/safaris?country=kenya">Kenya</a></li>
                         <li><a class="dropdown-item" href="/safaris?country=rwanda">Rwanda</a></li>
                         <li><a class="dropdown-item" href="/safaris?country=tanzania">Tanzania</a></li>
                     </ul>
                 </li>
                 <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="{{ url('/destinations?country=all') }}" id="dropdown04"
                         data-bs-toggle="dropdown" aria-expanded="false">Destinations</a>
                     <ul class="dropdown-menu" aria-labelledby="dropdown04">
                         <li><a class="dropdown-item" href="{{ url('/destinations?country=all') }}">All
                                 Destinations</a></li>
                         <li><a class="dropdown-item" href="{{ url('/destinations?country=uganda') }}">Uganda</a>
                         </li>
                         <li><a class="dropdown-item" href="{{ url('/destinations?country=kenya') }}">Kenya</a></li>
                         <li><a class="dropdown-item" href="{{ url('/destinations?country=rwanda') }}">Rwanda</a>
                         </li>
                         <li><a class="dropdown-item"
                                 href="{{ url('/destinations?country=tanzania') }}">Tanzania</a></li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Shop/Store</a>
                 </li>
                 <li class="nav-item">
                     <a class="nav-link" href="#">Contact Us</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
