
<!doctype html>
<html lang="en">

@include('backend.includes.head')

<body>
	<!--wrapper-->
	<div class="wrapper">

        @include('backend.includes.sidebar-wrapper')
		<!--start header -->
            @include('backend.includes.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
                @yield('content')
			</div>
		</div>
		<!--end page wrapper -->
		<!--start overlay-->
		<div class="overlay toggle-icon"></div>
		<!--end overlay-->
		<!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
		<!--End Back To Top Button-->
        @include('backend.includes.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
    @include('backend.includes.switcher')
	<!-- Bootstrap JS -->
    @include('backend.includes.js')
</body>

</html>
