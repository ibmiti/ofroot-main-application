<!DOCTYPE HTML>
<html>
    <head>
        <title>OFROOT</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
        <style>
            body {
                background-color: white;
                color: black;
                margin: 0;
                font-family: 'Helvetica', 'Arial', sans-serif;
            }

            .container {
                width: 100%;
                padding-right: 15px;
                padding-left: 15px;
                margin-right: auto;
                margin-left: auto;
                max-width: 960px;
            }

            h1, h2, h3, p, li, a {
                color: black;
            }

            nav a {
                color: white;
            }

            .form-control {
                display: block;
                width: 100%;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                color: black; /* Updated to black for better readability */
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da; /* Grey border to match Bootstrap style */
                border-radius: 0.25rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            .form-control:focus {
                color: black; /* Ensures text color remains black on focus */
                background-color: #fff;
                border-color: #80bdff; /* Blue border to indicate focus */
                outline: 0;
                box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
            }

            .btn-primary {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-primary:hover {
                color: #fff;
                background-color: #0069d9;
                border-color: #0062cc;
            }

            .form-group {
                margin-bottom: 1rem;
            }

            label {
                display: inline-block;
                margin-bottom: 0.5rem;
            }

            button {
                display: inline-block;
                font-weight: 400;
                text-align: center;
                white-space: nowrap;
                vertical-align: middle;
                user-select: none;
                border: 1px solid transparent;
                padding: 0.375rem 0.75rem;
                font-size: 1rem;
                line-height: 1.5;
                border-radius: 0.25rem;
                transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
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
                <div class="container mt-4 pt-4">
                    <p id="service-type" class="btn btn-success btn-sm rounded-pill mt-3 p-3">{{Session::get('service_type')}}</p>
                    <form action="{{ url('/online-booking/step-four') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="address" style="color:black;">Address:</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="e.g., 480 West Broad Street">
                        </div>
                        <div class="form-group">
                            <label for="unit">Unit #:</label>
                            <input type="text" class="form-control" id="unit" name="unit" placeholder="e.g., Unit #420">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="city">City:</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="e.g., Columbus">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="state">State:</label>
                            <input type="text" class="form-control" id="state" name="state" placeholder="e.g., Ohio">
                        </div>
                        <div class="form-group">
                            <label for="zip">ZIP Code:</label>
                            <input type="text" class="form-control" id="zip" name="zip" placeholder="e.g., 77002">
                        </div>
                        <div class="form-group">
                            <label for="country">Country:</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="e.g., USA">
                        </div>
                        <h2>Contact Details</h2>
                        <div class="form-group">
                            <label for="first-name">First Name:</label>
                            <input type="text" class="form-control" id="first-name" name="first_name" placeholder="e.g., Donny">
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name:</label>
                            <input type="text" class="form-control" id="last-name" name="last_name" placeholder="e.g., Merkel">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="e.g., harry.starman@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="phone-number">Phone Number:</label>
                            <input type="tel" class="form-control" id="phone-number" name="phone_number" placeholder="e.g., 7344489999">
                        </div>
                        <div class="form-group">
                            <label for="phone-type">Phone Number Type:</label>
                            <select class="form-control" id="phone-type" name="phone_type">
                                <option value="home">Home</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="items_to_remove">Items Being Removed</label>
                            <input class="form-control" name="items_to_remove" value="{{ $items_to_remove ?? '' }}" placeholder="{{ $items_to_remove ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="dateofRemoval">Date Of Removal</label>
                            <input class="form-control" name="dateOfRemoval" value="{{ $dateOfRemoval ?? '' }}" placeholder="{{ $dateOfRemoval ?? '' }}">
                        </div>
                        <div class="form-group">
                            <label for="time-slot">Time for Pickup</label>
                            <select id="time-slot" name="time_slot">
                                <option value="07:00 AM">7:00 AM - 9:00 AM</option>
                                <option value="09:00 AM">9:00 AM - 11:00 AM</option>
                                <option value="11:00 AM">11:00 AM - 1:00 PM</option>
                                <option value="01:00 PM">1:00 PM - 3:00 PM</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <x-footer/>
                <script src="{{ asset('/js/jquery.min.js') }}"></script>
                <script src="{{ asset('/js/jquery.scrolly.min.js') }}"></script>
                <script src="{{ asset('/js/jquery.scrollex.min.js') }}"></script>
                <script src="{{ asset('/js/browser.min.js') }}"></script>
                <script src="{{ asset('/js/breakpoints.min.js') }}"></script>
                <script src="{{ asset('/js/util.js') }}"></script>
                <script src="{{ asset('/js/main.js') }}"></script>
                <script>
                    $(document).ready(function() {
                        $('#datepicker').datepicker({
                            weekStart: 1,
                            daysOfWeekHighlighted: "6,0",
                            autoclose: true,
                            todayHighlight: true,
                        }).datepicker("setDate", new Date());
                        updateLabelsBasedOnServiceType();
                    });

                    function updateLabelsBasedOnServiceType() {
                        let serviceType = $('#service-type').text();
                        if (serviceType === 'Lawn Service') {
                            $('#service-label1').text('Lawn Service Address');
                            $('#service-label2').text('Details of Service');
                            $('#service-label3').text('Date of Service');
                            $('#service-label4').text('Time of Service');
                        } else if (serviceType === 'Removal Service') {
                            $('#service-label1').text('Pick-up Address');
                        }
                    }
                </script>
            </div>
        </div>
    </body>
</html>
