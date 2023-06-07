		<!--sidebar wrapper -->
		<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{asset('backend')}}/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rukada</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
						</li>
						<li> <a href="dashboard-eCommerce.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
						</li>
						<li> <a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
						</li>
						<li> <a href="dashboard-digital-marketing.html"><i class="bx bx-right-arrow-alt"></i>Digital Marketing</a>
						</li>
						<li> <a href="dashboard-human-resources.html"><i class="bx bx-right-arrow-alt"></i>Human Resources</a>
						</li>
					</ul>
				</li>
                <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Property</div>
					</a>
					<ul>
						<li> <a href="{{route('admin.poterty')}}"><i class="bx bx-right-arrow-alt"></i>Add Poterty</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Property Element</div>
					</a>
					<ul>
						<li> <a href="{{route('admin.featured')}}"><i class="bx bx-right-arrow-alt"></i>Add Featured </a>
						</li>
						<li> <a href="{{route('admin.status')}}"><i class="bx bx-right-arrow-alt"></i>Add Status</a>
						</li>
						<li> <a href="{{route('admin.amenity')}}"><i class="bx bx-right-arrow-alt"></i>Add Amenity</a>
						</li>
						<li> <a href="{{route('admin.explore')}}"><i class="bx bx-right-arrow-alt"></i>Add Explore</a>
						</li>
						<li> <a href="{{route('admin.bedroom')}}"><i class="bx bx-right-arrow-alt"></i>Add Bed Room</a>
						</li>
						<li> <a href="{{route('admin.bathroom')}}"><i class="bx bx-right-arrow-alt"></i>Add Bath Room</a>
						</li>
						<li> <a href="{{route('admin.countroom')}}"><i class="bx bx-right-arrow-alt"></i>Add Count Room</a>
						</li>
						<li> <a href="{{route('admin.parkingspace')}}"><i class="bx bx-right-arrow-alt"></i>Add Parking Space</a>
						</li>

					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Frontend Index Element</div>
					</a>
					<ul>
						<li> <a href="{{route('admin.choose')}}"><i class="bx bx-right-arrow-alt"></i>Add Choose </a>
						</li>
						<li> <a href="{{route('admin.chooseitem')}}"><i class="bx bx-right-arrow-alt"></i>Add Choose Item </a>
						</li>
						<li> <a href="{{route('admin.indexalltext')}}"><i class="bx bx-right-arrow-alt"></i>Add Index all text </a>
						</li>
						<li> <a href="{{route('admin.indexsearch')}}"><i class="bx bx-right-arrow-alt"></i>Add Index Search</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Frontend Property Element</div>
					</a>
					<ul>
						<li> <a href="{{route('admin.property.text')}}"><i class="bx bx-right-arrow-alt"></i>Add Property Text </a>
						</li>
					</ul>
				</li>

				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Agent Page Element</div>
					</a>
					<ul>


                        <li> <a href="{{route('admin.agent')}}"><i class="bx bx-right-arrow-alt"></i>Add Agent</a>
						</li>

						<li> <a href="{{route('admin.agenttext')}}"><i class="bx bx-right-arrow-alt"></i>Add Agent Text </a>
						</li>

					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Blog Post Element</div>
					</a>
					<ul>


                        <li> <a href="{{route('admin.blogcategory')}}"><i class="bx bx-right-arrow-alt"></i>Add Blog Category</a>
						</li>

						<li> <a href="{{route('admin.blogtag')}}"><i class="bx bx-right-arrow-alt"></i>Add Blog Tags </a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Blog Post</div>
					</a>
					<ul>


                        <li> <a href="{{route('admin.blogpost')}}"><i class="bx bx-right-arrow-alt"></i>Add Blog Post</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Frontend Blog Post Index</div>
					</a>
					<ul>
                        <li> <a href="{{route('admin.blogpost.text')}}"><i class="bx bx-right-arrow-alt"></i>Add Text</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Contact Page Element</div>
					</a>
					<ul>
                        <li> <a href="{{route('admin.contact')}}"><i class="bx bx-right-arrow-alt"></i>Contact Text</a>
						</li>
                        <li> <a href="{{route('admin.contact.location')}}"><i class="bx bx-right-arrow-alt"></i>Add Office Location</a>
						</li>
                        <li> <a href="{{route('admin.contact.topic')}}"><i class="bx bx-right-arrow-alt"></i>Add Massage Topic</a>
						</li>
					</ul>
				</li>

			</ul>
			<!--end navigation-->
		</div>
		<!--end sidebar wrapper -->
