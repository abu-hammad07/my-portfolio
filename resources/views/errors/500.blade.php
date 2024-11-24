<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Abu Hammad | Portfolio</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
        <meta name="description" content="Admin Portal | Abu Hammad | Portfolio | Driven by Passion, Focused on Results">
        <meta name="keywords" content="Admin Portal, abuhammad, hammadkamalportfolio, Portfolio, abuhammad">
        <meta name="author" content="Abu Hammad | Portfolio | Admin Portal">
        <meta name="robots" content="Abu Hammad, Portfolio, Driven by Passion, Focused on Results">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ url('public/assets/img/favicon.ico') }}">

        <!-- Bootstrap CSS -->
        {{--  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- animation CSS -->
        <link rel="stylesheet" href="assets/css/animate.css">
        <!-- Datatable CSS -->
        <link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
        <!-- Fontawesome CSS -->
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
        <!-- Main CSS -->
        <link rel="stylesheet" href="assets/css/style.css">  --}}

        @include('layouts.partials.head')

    </head>
    <body class="error-page">
        <div id="global-loader" >
            <div class="whirly-loader"> </div>
        </div>
        <!-- Main Wrapper -->
        <div class="main-wrapper">
            <div class="error-box">
				<div class="error-img">
                    <img src="{{ url('public/img/authentication/error-500.png') }}" class="img-fluid" alt="">
                </div>
				<h3 class="h2 mb-3">Oops, something went wrong</h3>
				<p>Server Error 500. We apologise and are fixing the problem
                    Please try again at a  later stage</p>
                <a href="{{ route('home') }}" class="btn btn-primary">Back to Dashboard</a>
			</div>
        </div>
        <!-- /Main Wrapper -->
        <div class="customizer-links" id="setdata">
			<ul class="sticky-sidebar">
				<li class="sidebar-icons">
					<a href="#" class="navigation-add" data-bs-toggle="tooltip" data-bs-placement="left"
						data-bs-original-title="Theme">
						<i data-feather="settings" class="feather-five"></i>
					</a>
				</li>
			</ul>
		</div>

        {{--  <!-- jQuery -->
        <script src="assets/js/jquery-3.7.1.min.js"></script>
        <!-- Feather Icon JS -->
        <script src="assets/js/feather.min.js"></script>
        <!-- Slimscroll JS -->
        <script src="assets/js/jquery.slimscroll.min.js"></script>
        <!-- Bootstrap Core JS -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/theme-script.js"></script>
		<script src="assets/js/script.js"></script>  --}}

        @include('layouts.partials.footer-scripts')


    </body>
</html>
