
<!doctype html>
<html lang="en">

@include('backendagent.includes.head')

<body>
	<!--wrapper-->
	<div class="wrapper">

        @include('backendagent.includes.sidebar-wrapper')
		<!--start header -->
            @include('backendagent.includes.header')
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
        @include('backendagent.includes.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
    {{-- @include('backendagent.includes.switcher') --}}
	<!-- Bootstrap JS -->
    @include('backendagent.includes.js')
</body>

</html>
