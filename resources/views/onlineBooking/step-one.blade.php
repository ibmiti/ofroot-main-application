<!DOCTYPE HTML>
<html>
    <head>
		<title>OFROOT</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href=" {{ asset('css/main.css') }}" />
		<noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
        <style>
            body {
                background-color: white; /* Sets the background to white */
                color: black;           /* Sets the text color to black */
            }

            h1, h2, h3, p, li, a {
                color: black !important; /* Overrides other color specifications */
            }

            /* Targeting navigation links specifically */
            nav a {
                color: white !important; /* Ensures nav links are always white */
            }

            .alert-success, .alert-danger, .form-control, .btn {
                color: black;
                background-color: #fff;
                border-color: #000;
            }

            .btn-dark {
                background-color: black;
                color: white;
            }

            .btn-dark:hover {
                background-color: #333; /* Darker shade for hover state */
                color: white;
            }

            #form {
                margin-top: 5%;
                margin-bottom: 5%;
            }

            #btn-submit {
                margin-top: 3%;
            }

            #btn-service {
                color: orange;
            }
        </style>
    </head>
	</head>
	<body class="is-preload">
        <section id="sidebar">
                <div class="inner">
                    <nav>
                        <ul>
                            <li><a href="/">Welcome</a></li>
                            <li><a href="#one">Who we are</a></li>
                            <li><a href="#two">What we do</a></li>
                            <li><a href="#three">Get in touch</a></li>
                            <li><a href="#blog">Blog</a></li>
                            <li><a href="{{ url('online-booking/service-selection') }}">Book a Meeting</a></li>
                            <li><a href="{{ route('health') }}">Health Services</a></li>

                        </ul>
                    </nav>
                </div>
            </section>
		<!-- Wrapper -->
			<div id="wrapper">
                <!-- NAV/Header -->
                @php $name='Online Booking'; @endphp
                <div class="mb-3 pb-3">
                    <x-nav-bar :name="$name"/>
                </div>


				<!-- Main -->
					<div id="main" class="alt">
                        <div class="container-fluid mt-4 pt-4">
                            @if(session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                        <!-- END OF WRAPPER ONE -->



                        <!-- Main this should be the component being slotted into -->
						<!-- One -->
                        <section id="one" style="margin-top: 10%; margin-left: 5%; margin-right 5%;">
                            <div class="inner">
                                <header class="major">
                                    <h1>Enter your Zip Code</h1>
                                </header>
                                <!-- TODO add image later -->
                                <div class="container">
                                <p id="btn-service">{{Session::get('service_type')}}</p>
                                    <form action="{{ url('/online-booking/step-two') }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <!-- <label for="zip_code">Enter Zip Code</label> -->
                                            <input class="form-control" id="zip_code" placeholder="Zip Code" name="zip_code" maxlength="5" required>
                                            <br>
                                            <button id="btn-submit" type="submit" class="btn btn-dark mt-4">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
    <!-- WRAPPER TWO -->
                    <!-- TODO THIS SHOULD BE A COMPONENT OR APART OF SOME MAIN PAGE (MAYBE APP.BLADE) -->
                    <section style="margin-top:10%; margin-right: 5%; margin-left:5%;" id="four">
                        <div class="inner">
                            <header class="major">
                                <h1>Have a job for us?</h1>
                            </header>
                            <p>Contact us here for more information on our services and to recieve a free estimate</p>
                            <x-contact/>
                        </div>
                    </section>

				<!-- Footer -->
                <x-footer/>

			</div>

		<!-- Scripts -->
            <script>
            document.addEventListener("DOMContentLoaded", function () {
                var form = document.getElementById("myForm");
                var selectOption = document.getElementById("selectOption");

                // Add an event listener to the select element
                selectOption.addEventListener("change", function () {
                    var selectedValue = selectOption.value;

                    // Modify the form action based on the selected option
                    form.action = selectedValue;
                });
            });
        </script>
            <script src="{{ asset('/js/jquery.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
			<script src="{{ asset('/js/jquery.scrollex.min.js') }}"></script>
			<script src="{{ asset('/js/browser.min.js') }}"></script>
			<script src="{{ asset('/js/breakpoints.min.js') }}"></script>
			<script src="{{ asset('/js/util.js') }}"></script>
			<script src="{{ asset('/js/main.js') }}"></script>

	</body>
</html>
<!-- TODO END OF WRAPPER 2 -->


