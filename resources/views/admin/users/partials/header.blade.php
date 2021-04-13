<div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 {{ $class ?? '' }}">
                <h1 class="display-2 text-white">{{ $title }}</h1>
                @if (isset($description) && $description)
                    <p class="text-white mt-0 mb-5">{{ $description }}</p>
                @endif
            </div>
            <div class="col-md-4">
                <div class="card-profile-image">
                    <a href="#">
                        <img src="{{ $profile }}" class="rounded-circle">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div> 