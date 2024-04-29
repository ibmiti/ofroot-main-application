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

            .btn-primary {
                margin-top: 3%;
                background-color: black; /* Bootstrap primary blue, ensure visibility */
                border-color: #007bff;
                color: white;
            }

            .btn-primary:hover {
                background-color: #0056b3; /* Darker blue on hover */
                border-color: #0056b3;
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
                                    <form action="{{ route('step-three') }}" method="post">
                                    @csrf
                                    <div class="row mt-4 pt-4">
                                        <div class="col-md-6">
                                            <p id="service-type"
                                                class="btn btn-success btn-sm rounded-pill">
                                                {{Session::get('service_type')}}
                                            </p>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1"
                                                       style="color:black;">
                                                       Choose a time slot:
                                                </label>
                                                <p style="color: grey; font-size: 75%;">
                                                    Click below and select a time slot. May vary depending on availability
                                                </p>
                                                <select id="time-slot" name="time_slot">
                                                    <option value="07:00 AM">7:00 AM - 9:00 AM</option>
                                                    <option value="09:00 AM">9:00 AM - 11:00 AM</option>
                                                    <option value="11:00 AM">11:00 AM - 1:00 PM</option>
                                                    <option value="01:00 PM">1:00 PM - 3:00 PM</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                    <!-- <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="service-label" for="exampleFormControlTextarea1" style="color:black;">List the items you would like removed</label>
                                <p id="service-label3" style="color: grey; font-size: 75%;">e.g., a mattress and a sofa in my basement</p>
                                <textarea class="form-control" name="items_to_remove" id="exampleFormControlTextarea1"
                                    placeholder="e.g., a mattress and a sofa in my basement" rows="1"></textarea>
                            </div>
                        </div>
                    </div> -->
                    <div class="row mt-4" style="margin-top:3%;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label id="service-label2" for="exampleFormControlTextarea1" style="color:black;">Pick A Date For Meeting</label>
                                <input name="date" data-date-format="mm/dd/yyyy" id="datepicker" class="form-control">
                            </div>
                        </div>
                    </div>
                    <button type="submit" style="color:black;" class="btn btn-primary mt-4">Submit</button>

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

            <!-- Datepicker Initialization Script -->
        <script type="text/javascript">
            $('#datepicker').datepicker({
                weekStart: 1,
                daysOfWeekHighlighted: "6,0",
                autoclose: true,
                todayHighlight: true,
            });
            $('#datepicker').datepicker("setDate", new Date());

            // swap the label text based on given service type
            let serviceType = document.getElementById('service-type').innerText; // gets the service-type text, given from session
            if (serviceType == 'Removal Service'){
                document.getElementById('service-label').innerText = 'LIST THE ITEMS YOU WOULD LIKE REMOVED'
                document.getElementById('service-label2').innerText = 'PICK A DATE FOR PICKUP';
            }

            if (serviceType == 'Lawn Service'){
                document.getElementById('service-label').innerText = 'LIST DETAILS OF THE JOB'; // sets label with serviceType innerText
                document.getElementById('service-label2').innerText = 'PICK A DATE FOR LAWN SERVICE';
                document.getElementById('service-label3').innerText = 'e.g., I have 3 areas I would like to have serviced';
            }

        </script>
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


