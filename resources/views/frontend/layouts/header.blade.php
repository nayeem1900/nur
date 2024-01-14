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

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								Instituions
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="{{route('ibch')}}">Islami Bank Central Hospital</a></li>


								<li><hr class="dropdown-divider">Health Education</li>
								<li><a class="dropdown-item" href="#">Islami Bank Medical College Rajsahi</a></li>

								<li><hr class="dropdown-divider">Generala Education</li>
								<li><a class="dropdown-item" href="http://ibiscdhaka.com">Islami Bank International School & College</a></li>

								<li><a class="dropdown-item" href="#">Islami Bank Mohila Madrasha</a></li>
								<li><hr class="dropdown-divider">Technical Education</li>
								<li><a class="dropdown-item" href="#">Islami Bank Institute of Technology,Chottogram</a></li>
							</ul>
						</li>

						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
								About US
							</a>
							<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
								<li><a class="dropdown-item" href="{{route('atglance')}}">At a Glance</a></li>
								<li><hr class="dropdown-divider">Organizational Structure</li>

								<li><a class="dropdown-item" href="{{route('hospitalcommittee')}}">Hospital Committee</a></li>
								<li><a class="dropdown-item" href="{{route('educationcommittee')}}">IBF Education,Health Education & Social Work Committee</a></li>
								<li><hr class="dropdown-divider"></li>

								<li><a class="dropdown-item" href="#">Corporate Inpormation</a></li>

							</ul>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="#">Media Room</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('etender')}}">Etender</a>
						</li>


						<li class="nav-item">
							<a class="nav-link" href="#">Career</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{route('contact')}}">Contact Us</a>
						</li>


					</ul>

				</div>
			</div>
		</nav>



	</div>





</section>