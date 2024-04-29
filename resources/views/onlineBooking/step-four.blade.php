<!DOCTYPE HTML>
<html>
    <head>
        <title>Confirm Pickup Details</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/noscript.css') }}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style> label {color: black; }

    /* located in index.css */
    input[type="text"],
	input[type="password"],
	input[type="email"],
	input[type="tel"],
	input[type="search"],
	input[type="url"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		background: #d3d3d3;
		border: none;
		border-radius: 0;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;
	}
    </style>
     @php
        use Illuminate\Support\Facades\Session;
    @endphp
</head>
@php
        $name='Online Booking';
    @endphp
    <div class="mb-3 pb-3">
        <x-nav-bar :name="$name"/>
    </div>
<body>
    <div class="container mt-4 pt-4">
        <div class="container mt-4">
            <p id="service-type" class="btn btn-success btn-sm rounded-pill">{{Session::get('service_type')}}</p>
            <h1>Confirm Details</h1>
            <ul class="list-group mt-3 pt-3" id="editable-list">
                <li class="list-group-item">
                    Address:
                    {{ session('address') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Unit #:{{ session('unit') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    City: {{ session('city') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    State: {{ session('state') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Zip Code: {{ session('zip') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Country: {{ session('country') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    First Name:
                    {{ session('first_name') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Last Name:
                    {{ session('last_name') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Email: {{ session('email') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Phone Number: {{ session('phone_number') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Phone Type: {{ session('phone_type') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Date of Service: {{ session('dateOfRemoval') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Time of Service: {{ session('time_slot') }}
                    <p class="mt-1 pt-1" style="color: red; font-size: 75%;">Note: A representative may reassign this slot for an earlier or later time depending on availability</p>
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
                <li class="list-group-item">
                    Details: {{ session('items_to_remove') }}
                    <span class="float-right edit-icon">
                        <i class="fa fa-pencil" aria-hidden="true"></i>
                    </span>
                </li>
            </ul>
            <form action="{{ url('/online-booking/submit-details') }}" method="post" class="mt-2 pt-2">
                @csrf
                <input name="{{Session::get('service_type')}}" hidden>
                <button class="btn-success" type="submit">Confirm Details</button>
                <button class="btn-dark"><a href="{{ url('/online-booking/edit-information') }}">Back</a></button>
            </form>
        </div>
    </div>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
