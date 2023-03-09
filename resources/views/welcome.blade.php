<x-home-layout>
    <div class="container">
        <!-- Home search -->
        <div class="home-search-tr">
            <!-- brand -->
            <div class="d-flex align-items-center justify-content-center logo-home-tr flex-column text-center">
                <img height="50" src="{{ asset('img/logo.svg') }}" alt="">
                <h1>the kind of jobs I like</h1>
            </div>
            <!-- / brand -->
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="d-flex align-items-center justify-content-center mb-5">
                        <img height="150" src="{{ asset('img/img-home.svg') }}" alt="">
                    </div>
                    <div class="select-country-tr shadow-sm rounded shadow-ssm">
                        <h4 class="text-center">Select your country</h4>
                        <div class="row mt-5">
                            <div class="col-sm">
                                <h6>Americas</h6>
                                <ul class="list-unstyled">
                                    <li>
                                        <a class="d-flex align-items-center" href="{{ route('country.show', ['country' => 'ca']) }}">
                                            <img alt=" Canada " class="mr-2 h-[16px] " src="https://resources-uzoes.s3.amazonaws.com/melga/img/Flags/canada.svg " height="16px "> Canada
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- / Home search -->
    </div>
</x-home-layout>