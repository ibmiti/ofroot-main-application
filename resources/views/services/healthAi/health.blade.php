<!DOCTYPE HTML>
<html>
<head>
    <title>OFROOT @yield('title')</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <!-- <link rel="stylesheet" href="{{ asset('css/main.css') }}" /> -->
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!-- Protecting Client/Server Communication -->
    <!-- Bootstrap CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<x-NavbarSecondary/>
<!-- Body -->
<body style="color:black !important;">
<div class="container font-monospace">
    <div class="row">
        <div class="col-12">
            <h1 class="fw-bold text-left mt-4 pt-4 mb-3 pb-3 text-white" style="color:aqua;">
                OFROOT HEALTH
            </h1>
            <div class="jumbotron">
                <h1>WHO WE ARE</h1>
                <p class="mb-5 lead">Welcome to OFROOT HEALTH, where cutting-edge technology meets compassionate care. We are not just a health services company; we are the architects of a healthier future. Through the seamless integration of AI and innovative software development, we redefine what it means to prioritize your well-being.</p>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h1>Transforming Telehealth By Harnessing AI for Advanced Waveform Analysis</h1>
            <p class="mb-4">We recognize the transformative power of AI in deciphering intricate signal data, leading to unparalleled insights that revolutionize the way we deliver healthcare remotely.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h1>Real-world Impact in Telehealth</h1>
            <p class="mb-4">Experience the tangible benefits of AI in telehealth through real-world applications. Whether it's optimizing the interpretation of vital signs for remote patient monitoring or ensuring the quality of telehealth consultations, our AI-powered waveform analysis is at the forefront of improving patient outcomes and expanding access to quality healthcare.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h1>Save The Date</h1>
            <p>Our official launch date is just around the corner. Stay tuned for updates on our website and social media channels (Coming Soon). Together, let's shape the future of healthcare!</p>
            <p>Thank you for being part of this exciting journey. We can't wait to revolutionize healthcare with you.</p>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12">
            <h1>DEMO</h1>
            <p>Coming soon</p>
            <!-- <p><a href="{{ route('ecg-submit-view') }}">Try out the model</a></p> -->
        </div>
    </div>
    <x-footer/>
</div>
<!-- Scripts -->
<script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/browser.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/breakpoints.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/util.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
