<!-- Page header with logo and tagline-->
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">
                @yield("header-title", "Welcome to Blog Home!")
            </h1>
            <p class="lead mb-0">
                @yield("header-subtitle")
            </p>
        </div>
    </div>
</header>