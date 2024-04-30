<!DOCTYPE HTML>
<html>
    <head>
        <title>OFROOT</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
        <style>
            body {
                background-color: white;
                color: black;
            }

            h1, h2, h3, p, li, a {
                color: black;
            }

            nav a {
                color: white;
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
                background-color: #333;
                color: white;
            }

            .btn-primary {
                background-color: #007bff;
                color: white;
                border-color: #007bff;
            }

            .btn-primary:hover {
                background-color: #0056b3;
                border-color: #0053bf;
            }

            .form-control {
                display: block;
                width: 100%;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: 0.25rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            .form-control:focus {
                border-color: #80bdff;
                outline: 0;
                box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
            }
            #btn-service {
                display: inline-block; /* Makes the <p> element behave like a block but inline */
                padding: 0.375rem 0.75rem; /* Padding similar to Bootstrap's buttons */
                font-size: 1rem; /* Standard button text size */
                font-weight: 400; /* Normal font weight */
                line-height: 1.5; /* Standard line height for button text */
                text-align: center; /* Centers text inside the element */
                white-space: nowrap; /* Prevents text from wrapping to the next line */
                vertical-align: middle; /* Aligns text vertically in the middle */
                user-select: none; /* Prevents text selection to mimic button behavior */
                border: 1px solid transparent; /* Transparent border but can be set to match if needed */
                border-radius: 50rem; /* Extremely rounded corners for a pill effect */
                color: #fff; /* White text, typical for Bootstrap primary buttons */
                background-color: #007bff; /* Bootstrap primary blue background */
                border-color: #007bff; /* Border color similar to background */
                cursor: default; /* Default cursor to indicate non-clickability */
                text-decoration: none; /* Ensures no text decoration */
                transition: background-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; /* Smooth transition for visual effects */
             }

            #btn-service:hover, #btn-service:focus {
                background-color: #0056b3; /* Darker blue on hover/focus to simulate button-like interaction visually */
                border-color: #0053bf; /* Border color to match the hover background */
                box-shadow: none; /* No shadow to maintain non-clickable appearance */
            }
        </style>
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
        <div id="wrapper">
            <div id="main" class="alt">
                <div class="container-fluid mt-4 pt-4">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif
                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif
                </div>
                <section id="one" style="margin-top: 10%; margin-left: 5%; margin-right: 5%;">
                    <div class="inner">
                        <header class="major">
                            <h1>Availability</h1>
                        </header>
                        <div class="container">
                            <form action="{{ route('send-email') }}" method="post">
                                @csrf
                                <div class="row mt-4 pt-4">
                                    <div class="col-md-6">
                                        <p><span id="btn-service">{{Session::get('service_type')}}</span></p>
                                        <div class="form-group">
                                            <label for="time-slot" style="color:black;">
                                                Choose a time slot:
                                            </label>
                                            <p style="color: grey; font-size: 75%;">
                                                Click below and select a time slot. May vary depending on availability
                                            </p>
                                            <select id="time-slot" name="time_slot" class="form-control">
                                                <option value="07:00 AM - 9:00 AM">7:00 AM - 9:00 AM</option>
                                                <option value="09:00 AM - 11:00 AM">9:00 AM - 11:00 AM</option>
                                                <option value="11:00 AM - 1:00 PM">11:00 AM - 1:00 PM</option>
                                                <option value="01:00 PM - 3:00 PM">1:00 PM - 3:00 PM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4" style="margin-top:3%;">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="datepicker" style="color:black">Pick A Date For Meeting:</label>
                                            <input type="text" class="form-control datepicker" id="datepicker" name="date">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" style="color:black; margin-top:3%;" class="btn btn-primary mt-4">Submit</button>
                            </form>
                        </div>
                    </div>
                </section>
                <section style="margin-top:10%; margin-right: 5%; margin-left:5%;" id="four">
                    <div class="inner">
                        <header class="major">
                            <h1>Have a job for us?</h1>
                        </header>
                        <p>Contact us here for more information on our services and to receive a free estimate</p>
                        <x-contact/>
                    </div>
                </section>
                <x-footer/>
            </div>
        </div>
        <script>
            $(document).ready(function(){
                $('.datepicker').datepicker({
                    format: 'mm/dd/yyyy',
                    todayHighlight: true,
                    autoclose: true,
                    orientation: "bottom auto"
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
