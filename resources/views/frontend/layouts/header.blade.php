<section class="header">

	<div class="container">

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				<a class="navbar-brand" href="#"><img src="{{url('public/upload/logo_images/'.$logo->image)}}"></a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="{{route('index')}}">Home</a>
						</li>

						<li class="nav-item">
							<a class="nav-link" href="">About US</a>
						</li>
						{{--<li class="nav-item">
							<a class="nav-link" href="">Automated Test Equipment</a>
						</li>--}}

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Service
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}">Service overview </a></li>
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}">Inspection</a></li>
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}">Test&Measurment</a></li>
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}">Support</a></li>

								{{--<li><hr class="dropdown-divider"><strong style="padding-left: 10px;background-color:green;opacity: 1;">Organizational Structure</strong></li>
								<li><a class="dropdown-item" href="{{route('foundationcommittee')}}">Foundation Committees</a></li>
								<li><a class="dropdown-item" href="{{route('executivecommittee')}}">Executive Committee</a></li>
								<li><a class="dropdown-item" href="{{route('auditcommittee')}}">Audit Committee</a></li>
								<li><a class="dropdown-item" href="{{route('hospitalcommittee')}}">Hospital Committee</a></li>
								<li><a class="dropdown-item" href="{{route('communityhospitalcommittee')}}">Community Hospital Committee</a></li>
								<li><a class="dropdown-item" href="{{route('communityhospitalboard')}}">Islami Bank Community Hospitals Board</a></li>
								<li><a class="dropdown-item" href="">Executive Committee of Islami Bank Health Educational Institutions</a></li>
								<li><a class="dropdown-item" href="{{route('healtheducationcommittee')}}">Education,Health Education & Social Work Committee</a></li>
--}}

							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Solutions
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}">Aerospace</a></li>
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}">Automotive</a></li>
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}">Manufacturing-B2B</a></li>
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}"> Industrial</a></li>
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}"> PCB Design & Development Support</a></li>
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}"> Proto Product Development Support</a></li>
								<li ><a class="dropdown-item" style="color: black" href="{{route('atglance')}}"> Portable Test System, Equipment development</a></li>



							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="">Contract US</a>
                                                </li>


					</ul>

				</div>
			</div>
		</nav>


	</div>



</section>