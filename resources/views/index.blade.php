<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="author" content="SemiColonWeb">
	<meta name="#" content="#">

	<!-- Font Imports -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

	<!-- Core Style -->
	<link rel="stylesheet" href="{{asset('website/assets/css/style.css')}}">

	<!-- Font Icons -->
	<link rel="stylesheet" href="{{asset('website/assets/css/font-icons.css')}}">

	<!-- Plugins/Components CSS -->
	<link rel="stylesheet" href="{{asset('website/assets/css/components/bs-select.css')}}">

	<!-- Niche Demos -->
	<link rel="stylesheet" href="{{asset('website/assets/demos/doctors/doctors.css')}}">

	<!-- Custom CSS -->
	<link rel="stylesheet" href="{{asset('website/assets/css/custom.css')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Document Title
	============================================= -->
	<title>mediaxis | home page</title>
	<link rel="icon" href="{{asset('website/assets/demos/med.png')}}">

</head>

<!-- stretched (body)
============================================= -->
<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper">

		<!-- Header
		============================================= -->
		<header id="header" class="header-size-md dark transparent-header floating-header" data-sticky-shrink="false" data-responsive-class="not-dark">
			<div id="header-wrap" class="border-0">
				<div class="container rounded">
					<div class="header-row justify-content-lg-between">

						<!-- Logo
						============================================= -->
						<div id="logo" class="me-lg-0 col-lg-3">
							<a href="index.html">
								<img class="logo-default "  src="{{asset('website/assets/demos/med.png')}}"  style="height: 500px !important;">
								<img class="logo-dark "  src="{{asset('website/assets/demos/med.png')}}"  style="height: 100px !important;">
							</a>
						</div><!-- #logo end -->

						<div class="header-misc col-lg-3 justify-content-lg-end ms-0">
						<a href="{{url('patient/login')}}" class="button rounded bg-color text-white  h-bg-color-2 h-text-dark button-border"><span class="d-none d-xl-block">Find Your Details</span></a>

						</div>

						<div class="primary-menu-trigger">
							<button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
								<span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
							</button>
						</div>

						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item "><a class="menu-link h-text-dark" href="#"><div>Home</div></a></li>
								<li class="menu-item"><a class="menu-link h-text-dark" href="#services"><div>Services</div></a></li>
								<li class="menu-item"><a class="menu-link h-text-dark" href="#doctor"><div>Doctors</div></a></li>
								<li class="menu-item"><a class="menu-link h-text-dark" href="#Contact"><div>Contact</div></a></li>

							</ul>

						</nav><!-- #primary-menu end -->

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Hero
		============================================= -->
		<section id="slider" class="slider-element include-header" style="background: linear-gradient(90deg, rgba(34, 193, 195, 0.06), rgba(253, 187, 45, 0.1));">
			<div class="container mt-lg-6">
				<div class="row justify-content-between align-items-center py-lg-6 py-5">
					<div class="col-lg-5 mb-4 mb-lg-0">
						<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="50">
						<h2 class="display-3 fw-bold color all-ts">A Truly amazing <span class="underliner nocolor viewport-detect" data-delay="1000">Doctor</u></span> is hard to find. <img class="position-relative" style="top: -5px;" src="{{asset('website/assets/demos/doctors/images/icons/smile.svg')}}" alt="..." width="50"></h2>
						<p>Rapidiously conceptualize inexpensive value through functionalized markets web services.</p>
						<a href="#Contact" class="button py-3 px-4 bg-color-2 color h-bg-color h-text-light rounded mx-0">Enquiry Now<i class="fa fa-arrow-right ms-2 me-0"></i></a>
					</div>
					<div class="col-lg-6">
						<!-- Gallery -->
						<div class="row align-items-center g-4">
							<div class="col-6">
								<img src="{{asset('website/assets/demos/doctors/images/hero/3.jpg' )}}"altt="Image" class="object-cover rounded-6">
							</div>
							<div class="col-6">
								<img src="{{asset('website/assets/demos/doctors/images/hero/2.jpg')}}"t="Image" class="object-cover rounded-6 mb-4">
								<img src="{{asset('website/assets/demos/doctors/images/hero/1.jpg')}}"t="Image" class="object-cover rounded-6">
							</div>
						</div>
						<!-- Gallery -->
						<div class="card hero-card border-0 z-3 scroll-detect" style="--cnvs-transitions: .3s linear; transform: translate(-40%, calc(-.6% * var(--cnvs-scroll-percent)));">
							<div class="card-body p-4">
								<div class="circle-stack d-flex mb-3" style="--cnvs-circle-stack-size: 2.4rem; --cnvs-circle-stack-border-size: 3px; --cnvs-circle-stack-inset-ratio: 0.35">
									<img src="{{asset('website/assets/images/blocks/preview/avatar/1.jpg')}}" alt="Avatar Image">
									<img src="{{asset('website/assets/images/blocks/preview/avatar/2.jpg')}}" alt="Avatar Image">
									<img src="{{asset('website/assets/images/blocks/preview/avatar/3.jpg')}}" alt="Avatar Image">
									<img src="{{asset('website/assets/images/blocks/preview/avatar/4.jpg')}}" alt="Avatar Image">
								</div>
								<h5 class="mb-3 fw-normal small">Get <strong>20%</strong> Instant cahback on your <br> First Appoinmen Booking.</h5>
								<a href="#Contact" class="button button-mini h-bg-dark m-0 rounded-1">Check Offers</a>
							</div>
						</div>
						<img src="{{asset('website/assets/demos/doctors/images/icons/capsule.svg')}}" alt=".." class="position-absolute z-1 top-0 mt-3 op-01" width="70" style="left: -90px;">
					</div>
				</div>
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

				<div id="section-search" class="section my-0 bg-transparent">
					<div class="container py-lg-5">
						<div class="row">
							<div class="col-md-8 col-9">
								<h2 class="display-4 text-rotater" data-separator="," data-rotate="fadeInUpSmall faster bg-color-2 bg-opacity-50 px-2" data-speed="3500">Book the local <span class="t-rotate d-inline nocolor">Doctors,Specialist,Services</span><br>who take your Care.</h2>
							</div>
						</div>
						<div class="position-relative bg-contrast-0 rounded border border-width-3 border-color mt-4">
							<img src="{{asset('website/assets/demos/med.png')}}" alt=".." class="hand-mobile-img">
							<div class="row flex-column flex-lg-row align-items-center">
								<div class="col-lg-auto flex-grow-1">
									<div class="row gx-0 gx-lg-3">
										<div class="col-lg-6 py-2 py-lg-0">
											<div class="input-group align-items-center">
												<span class="input-group-text pe-0 bg-transparent border-0" id="inputGroup-doctors"><i class="fs-5 bi bi-search-heart"></i></span>
												<select class="selectpicker" data-live-search="true" title="Doctors, Conditions, Specialist.." data-container="body" data-width="fit" data-size="8">
													<option>Dermatologist</option>
													<option>General practitioner</option>
													<option>Pediatrician</option>
													<option>Surgeon</option>
													<option>Neurologist</option>
													<option>Psychiatrist</option>
													<option>Oncologist</option>
													<option>Cardiologist</option>
													<option>Orthopedic surgeon</option>
													<option>Radiologist</option>
													<option>Anesthesiologist</option>
													<option>Endocrinologist</option>
													<option>Gastroenterologist</option>
													<option>Ophthalmologist</option>
													<option>Pathologist</option>
													<option>Pulmonologist</option>
													<option>Ophthalmology</option>
													<option>Dentist</option>
													<option>Podiatrists</option>
													<option>Rheumatologist</option>
													<option>Otorhinolaryngology</option>
													<option>Internal medicine</option>
													<option>Otolaryngologist</option>
													<option>Dermatology</option>
												</select>
											</div>
										</div>

									

										<div class="col-lg-6 py-2 py-lg-0" data-class="down-lg:border-top up-lg:border-start">
											<div class="input-group align-items-center">
												<span class="input-group-text pe-0 bg-transparent border-0" id="inputGroup-services"><i class="fs-5 bi bi-clipboard2-heart-fill"></i></span>
												<select class="selectpicker" title="Type of Services" data-live-search="true" data-container="body" multiple data-selected-text-format="count">
													<option>Asthma</option>
													<option>Rash</option>
													<option>Topical burns</option>
													<option>Fevers or colds</option>
													<option>Nausea</option>
													<option>Diarrhea or gastrointestinal distress</option>
													<option>Body pains and aches</option>
													<option>Headaches</option>
													<option>Ear or sinus pain</option>
													<option>Coughs and sore throats</option>
													<option>Bumps, cuts, and scrapes</option>
													<option>Allergic reactions</option>
													<option>Urinary issues</option>
													<option>Diabetes</option>
													<option>Eye pain or irritation</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="col-lg-auto">
									<div class="input-group input-group-btn border-width-3 border-color" data-class="down-lg:border-top up-lg:border-start">
										<button class="button bg-color-2 color h-bg-color h-text-light m-0 h-100 py-3 p-lg-4 px-4 w-100" type="button">Find Doctors</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="services"  class="section mt-0">
					<div class="container">
						<div class="row justify-content-center mb-4">
							<div class="col-md-9 text-center">
								<h2 class="display-4 mb-3">We take your Health Seriously</h2>
								<p>Our team of dedicated professionals is committed to providing exceptional healthcare services. We strive to offer personalized care and ensure that each patient receives the best possible treatment. Trust us to take care of your health and well-being.</p>
							</div>
						</div>
						<div class="row row-cols-xl-5 row-cols-lg-4 row-cols-sm-2 row-cols-1 services-categories g-4 align-items-stretch">
							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Dermatologist</h4>
										<small class="text-smaller">Eczema, Hair Loss, Acne, Skin cancer..</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Neurologist</h4>
										<small class="text-smaller">Neuromuscular disorders, ADD, brain tumors..</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Radiologist</h4>
										<small class="text-smaller">Cancers or tumors. Blockages in your arteries or veins</small>
									</div>
								</a>
							</div>

							<div class="services-category-item ">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Pathologist</h4>
										<small class="text-smaller">bleeding disorders, clotting problems, and anemia</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Pulmonologist</h4>
										<small class="text-smaller">asthma and chronic obstructive pulmonary disease (COPD)</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Dermatologist</h4>
										<small class="text-smaller">Acne, blocked skin follicles that lead to oil, bacteria and dead skin buildup in your pores.</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Psychiatrist</h4>
										<small class="text-smaller">Depression, bipolar disorder, and other mood disorders.
											Eating disorders.</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Psychiatrist</h4>
										<small class="text-smaller">Atherosclerosis, High blood pressure, High cholesterol, Heart Failure..</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Orthopedic</h4>
										<small class="text-smaller">fractures, Knee joint ligament injuries, Knee joint damage due to different causes of arthritis</small>
									</div>
								</a>
							</div>

							<div class="services-category-item">
								<a href="#" class="card border-0 rounded-6">
									<div class="card-body justify-content-center align-items-center px-4 py-5 text-center">
										<h4 class="my-1">Gastroenterology</h4>
										<small class="text-smaller">Constipation, Crohn's disease, Diarrhoea, Vomiting in children, Gastritis..</small>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="section my-0 bg-transparent">
					<div class="container">
						<div class="row justify-content-center mb-5">
							<div class="col-md-9 text-center">
								<h2 class="display-4 mb-3">Our Specialized Departments</h2>
								<p>We offer a wide range of specialized medical services to cater to your health needs. Our departments are equipped with state-of-the-art facilities and staffed by experienced professionals dedicated to providing the best care possible.</p>
							</div>
							<div class="col-12">
								
								<ul class="nav nav-pills mb-5 justify-content-center" id="categories-tab" role="tablist">
									<li class="nav-item" role="presentation">
										<button class="nav-link active" id="pills-pathologist-tab" data-bs-toggle="pill" data-bs-target="#pills-pathologist" type="button" role="tab" aria-controls="pills-pathologist" aria-selected="true">Pathologist</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="pills-orthopedic-tab" data-bs-toggle="pill" data-bs-target="#pills-orthopedic" type="button" role="tab" aria-controls="pills-orthopedic" aria-selected="false">Orthopedic</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="pills-psychiatrist-tab" data-bs-toggle="pill" data-bs-target="#pills-psychiatrist" type="button" role="tab" aria-controls="pills-psychiatrist" aria-selected="false">Psychiatrist</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="pills-radiologist-tab" data-bs-toggle="pill" data-bs-target="#pills-radiologist" type="button" role="tab" aria-controls="pills-radiologist" aria-selected="false">Radiologist</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="pills-neurologist-tab" data-bs-toggle="pill" data-bs-target="#pills-neurologist" type="button" role="tab" aria-controls="pills-neurologist" aria-selected="false">Neurologist</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="pills-dermatologist-tab" data-bs-toggle="pill" data-bs-target="#pills-dermatologist" type="button" role="tab" aria-controls="pills-dermatologist" aria-selected="false">Dermatologist</button>
									</li>
									<li class="nav-item" role="presentation">
										<button class="nav-link" id="pills-pulmonologist-tab" data-bs-toggle="pill" data-bs-target="#pills-pulmonologist" type="button" role="tab" aria-controls="pills-pulmonologist" aria-selected="false">Pulmonologist</button>
									</li>
								</ul>
							</div>
						</div>
						<div class="tab-content px-lg-6" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-pathologist" role="tabpanel" aria-labelledby="pills-pathologist-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Welcome to the Pathologist</h3>
										<div class="line my-4"></div>
										<div class="d-inline-flex">
											<i class="bi-check-circle-fill me-2 fs-4 color-yellow"></i><p><span class="fw-semibold color fs-5">Congenital Heart Defects:</span> Dramatically streamline interoperable niches rather than goal-oriented testing procedures.</p>
										</div>
										<div class="d-inline-flex">
											<i class="bi-check-circle-fill me-2 color-yellow fs-4"></i><p><span class="fw-semibold color fs-5">Heart Defects:</span> Rather than goal-oriented testing procedures.</p>
										</div>
									</div>
									<div class="col-md-6">
										<img src="{{asset('website/assets/demos/doctors/images/section-img.jpg')}}" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-orthopedic" role="tabpanel" aria-labelledby="pills-orthopedic-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Welcome to the Orthopedic</h3>
										<ul class="list-unstyled text-larger">
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i> Congenital Heart Defects</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i> Heart Failure</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i> Electrophysiology</li>
										</ul>
									</div>
									<div class="col-md-6">
										<img src="{{asset('website/assets/demos/doctors/images/categories/orthopedic.jpg')}}" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-psychiatrist" role="tabpanel" aria-labelledby="pills-psychiatrist-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Welcome to the Psychiatrist</h3>
										<ul class="list-unstyled text-larger">
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Congenital Heart Defects</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Heart Failure</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Electrophysiology</li>
										</ul>
									</div>
									<div class="col-md-6">
										<img src="{{asset('website/assets/demos/doctors/images/categories/psychiatrist.jpg')}}" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-radiologist" role="tabpanel" aria-labelledby="pills-radiologist-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Welcome to the Radiologist</h3>
										<ul class="list-unstyled text-larger">
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Congenital Heart Defects</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Heart Failure</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Electrophysiology</li>
										</ul>
									</div>
									<div class="col-md-6">
										<img src="{{asset('website/assets/demos/doctors/images/categories/radiologist.jpg')}}" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-neurologist" role="tabpanel" aria-labelledby="pills-neurologist-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Welcome to the Neurologist</h3>
										<ul class="list-unstyled text-larger">
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Congenital Heart Defects</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Heart Failure</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Electrophysiology</li>
										</ul>
									</div>
									<div class="col-md-6">
										<img src="{{asset('website/assets/demos/doctors/images/categories/neurologist.jpg')}}" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-dermatologist" role="tabpanel" aria-labelledby="pills-dermatologist-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Welcome to the Dermatologist</h3>
										<ul class="list-unstyled text-larger">
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Congenital Heart Defects</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Heart Failure</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow"></i>Electrophysiology</li>
										</ul>
									</div>
									<div class="col-md-6">
										<img src="{{asset('website/assets/demos/doctors/images/categories/dermatologist.jpg')}}" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-pulmonologist" role="tabpanel" aria-labelledby="pills-pulmonologist-tab" tabindex="0">
								<div class="row justify-content-between align-items-stretch">
									<div class="col-md-5">
										<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
										<h3 class="display-5">Welcome to the Pulmonologist</h3>
										<ul class="list-unstyled text-larger">
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow-yellow"></i>Congenital Heart Defects</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow-yellow"></i>Heart Failure</li>
											<li class="mb-3"><i class="bi-check-circle-fill me-2 color-yellow-yellow"></i>Electrophysiology</li>
										</ul>
									</div>
									<div class="col-md-6">
										<img src="{{asset('website/assets/demos/doctors/images/categories/pulmonologist.jpg')}}" alt=".." class="rounded-6 h-100 object-cover">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="doctor"  class="section mt-0 bg-transparent doctor-lists">
					<div class="container">
						<div class="row justify-content-center">
							<div class="col-md-9 text-center">
								<h2 class="display-4 mb-5">Meet with our Experts</h2>
							</div>
						</div>
						<div class="position-relative scroll-detect" style="--cnvs-transitions: .1s linear; transform: translate(calc(-.1% * calc(var(--cnvs-scroll-percent) * .3)), 0);">
							<div class="row row-cols-lg-6 row-cols-sm-2 row-cols-1 g-4" style="transform: translateX(1%);">
								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/1.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">D.W. Coffman</h4>
									<small class="fw-light">Psychologists</small>
								</div>
								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/2.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">D.W. Coffman</h4>
									<small class="fw-light">Psychologists</small>
								</div>

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/3.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">R.G. Everhart</h4>
									<small class="fw-light">Anesthesiology</small>
								</div>

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/4.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">D.B. Truluck</h4>
									<small class="fw-light">Cardiology</small>
								</div>

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/5.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">W.L. Popwell</h4>
									<small class="fw-light">Chiropractic</small>
								</div>

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/6.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">P.M. Adres</h4>
									<small class="fw-light">Chiropractic</small>
								</div>
							</div>
						</div>
						<div class="position-relative scroll-detect" style="--cnvs-transitions: .3s linear; transform: translate(calc(.1% * calc(var(--cnvs-scroll-percent) * .3)), 0);">
							<div class="row flex-row-reverse row-cols-lg-6 row-cols-sm-2 row-cols-1 g-4 mt-0" style="transform: translateX(-1%);">

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/7.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">L.D. Plack</h4>
									<small class="fw-light">Cardiology</small>
								</div>

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/8.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">M.L. Paine</h4>
									<small class="fw-light">Dermatology</small>
								</div>

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/9.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">M.E. Pullen</h4>
									<small class="fw-light">Surgery</small>
								</div>

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/10.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">W.L. Shotts</h4>
									<small class="fw-light">Neurology</small>
								</div>

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/11.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">M.S. Sugar</h4>
									<small class="fw-light">Ophthalmology</small>
								</div>

								<div class="col">
									<img src="{{asset('website/assets/demos/doctors/images/experts/12.jpg')}}" alt="..." class="rounded-6 mb-2">
									<h4 class="mb-0">M.S. Sugar</h4>
									<small class="fw-light">Ophthalmology</small>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section bg-color dark my-0">
					<div class="container py-lg-5">
						<div class="row g-4 justify-content-around">
							<div class="col-md-3 col-6">
								<h3 class="display-3 text-white mb-1">75+</h3>
								<small class="color-2 text-uppercase ls-2 text-smaller">Available Countries</small>
							</div>

							<div class="col-md-3 col-6">
								<h3 class="display-3 text-white mb-1">634+</h3>
								<small class="color-2 text-uppercase ls-2 text-smaller">Available Experts</small>
							</div>

							<div class="col-md-3 col-6">
								<h3 class="display-3 text-white mb-1">23+</h3>
								<small class="color-2 text-uppercase ls-2 text-smaller">Winning Awards</small>
							</div>

							<div class="col-md-3 col-6">
								<h3 class="display-3 text-white mb-1">95%</h3>
								<small class="color-2 text-uppercase ls-2 text-smaller">5 Star Reviews</small>
							</div>
						</div>
						<img src="{{asset('website/assets/demos/doctors/images/section.jpg')}}" alt=".." class="my-5">
						<div class="row align-items-end justify-content-between">
							<div class="col-md-5">
								<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
								<h3 class="display-6 mb-md-0">People pay the doctor for his trouble, for his kindness they still remain in his debt.</h3>
							</div>
							<div class="col-md-5">
								<p class="mb-0">Enthusiastically exploit cutting-edge value with highly efficient e-business. Assertively promote integrated testing procedures vis-a-vis magnetic "outside the box" thinking.</p>
							</div>
						</div>
					</div>
				</div>

				<div class="section bg-transparent mt-0">
					<div class="container">
						<div class="row gy-4 justify-content-around align-items-center">
							<div class="col-md-5">
								<div class="widget-img position-relative">
									<img src="{{asset('website/assets/demos/doctors/images/widget-img.png')}}" alt="..">
								</div>
							</div>
							<div class="col-md-5">
								<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
								<h2 class="display-4 mb-3">Subscribe to Our Newsletter</h2>
								<p class="">Holisticly supply plug-and-play sources with client-based testing procedures. Assertively leverage existing user friendly infrastructures through ethical strategic theme areas.</p>
								<div class="widget subscribe-widget" data-loader="button">

									<div id="Contact" class="widget-subscribe-form-result"></div>
									<form id="widget-subscribe-form" action="include/subscribe.php" method="post" class="mb-0 d-flex bg-color-2 rounded-pill p-2 bg-opacity-50">
										<input type="email" id="widget-subscribe-form-email" name="widget-subscribe-form-email" class="form-control bg-transparent border-0 required email ps-3" placeholder="Your Email Address">
										<button class="button button-large rounded-pill m-0" type="submit">Subscribe</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div  class="section dark bg-color my-0">
					<div class="container">
						<div class="row align-items-center justify-content-between">
							<div class="col-md-4 mt-4">
								<img src="{{asset('website/assets/demos/doctors/images/icons/wave.svg')}}" alt="..." class="position-absolute top-0 start-0 translate-middle d-none d-md-block" width="36">
								<h3 class="display-6">Get in touch with Us.</h3>
								<p>We are here to assist you with any inquiries or concerns you may have. Feel free to reach out to us via email or phone, and our team will get back to you as soon as possible.</p>

								<div class="divider divider-xs fw-light font-body text-uppercase mb-5 op-05 ms-0" style="--cnvs-divider-border-color: rgba(var(--cnvs-contrast-rgb), 0.2)"><div class="divider-text">Or</div></div>

								<h3 class="fs-6 fw-light text-uppercase op-07 mb-2">Give us a Quick Call</h3>
								<h2 class="display-4">+91 9865464427</h2>
							</div>

							<div class="col-md-6">
								

									<form  action="{{route('enquiry')}}" method="post">
										{{ csrf_field() }}
										<div class="col-12 form-group">
											<input type="text"name="name" required value="" class="form-control border-form-control border-light border-opacity-50 py-3 required" placeholder="Full Name..">
										</div>

										<div class="col-12 form-group">
											<input type="email"  name="email" required value="" class="email form-control border-form-control border-light border-opacity-50 py-3 required " placeholder="Email Address..">
										</div>

										<div class="col-12 form-group">
											<input type="text" name="mobile"  required value="" class="form-control border-form-control border-light border-opacity-50 py-3" placeholder="Phone Number..">
										</div>
										<div class="col-12 form-group">
											<select class="required form-control border-form-control border-light border-opacity-50 py-3" name="treatment">
												<option value="" disabled selected>Select Your Treatment</option>
												<option value="consultation" style="color: green;">Consultation</option>
												<option value="surgery" style="color: green;">Surgery</option>
												<option value="therapy" style="color: green;">Therapy</option>
												<option value="checkup" style="color: green;">Checkup</option>
											</select>
										</div>

										

										<div class="col-12 form-group">
											<input class="button button-large button-light h-text-dark h-bg-color-2 rounded ms-0 mt-3" type="submit" value="submit">
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="bg-color dark border-width-1">
			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap">
					<div class="row gx-4 gy-5">

						<div class="col-lg-4 col-6">

							<div class="widget widget_links widget-li-noicon">

								<h4 class="text-uppercase mb-4">About Us</h4>
								<div id="logo" class="me-lg-0 col-lg-8">
									<a href="index.html">
										<img class="logo-default mb-4 ms-0"  src="{{asset('website/assets/demos/med.png')}}" alt="mediaxis Logo">
										
									</a>
								</div><!-- #logo end -->
								<p class="mb-4">We are dedicated to providing top-notch <br> healthcare services  with a focus on patient<br> satisfaction and well-being.</p>

							</div>

						</div>

						<div class="col-lg-4 col-sm-6">

							<div class="widget widget_links widget-li-noicon">

								<h4 class="text-uppercase mb-4">Quick Links</h4>

								<ul class="text-center">
									<li class="menu-item "><a href="#"><div>Home</div></a></li>
								<li class=><a href="#services"><div>Services</div></a></li>
								<li ><a  href="#doctor"><div>Doctors</div></a></li>
								<li ><a href="#Contact"><div>Contact</div></a></li>
								</ul>

							</div>

						</div>

						<div class="col-lg-4 col-sm-6">

							<div class="widget">

								<h4 class="text-uppercase mb-4">Need Help?</h4>

								<ul class="list-unstyled">
									<li class="mb-3">
										<a href="#" class="d-flex">
											<i class="me-3 bi-telephone-fill"></i>+91 9865464427
										</a>
									</li>
									<li class="mb-3">
										<a href="#" class="d-flex">
											<i class="me-3 bi-envelope-fill"></i>manikandan52357@gmail.com										</a>
									</li>
									<li class="mb-3">
										<a href="#" class="d-flex">
											<i class="me-3 bi-geo-alt-fill"></i>123, Anna Salai, Chennai, Tamil Nadu, India
										</a>
									</li>
									<li class="mb-3 d-flex">
										<i class="me-3 bi-calendar-week-fill"></i>Mon - Sat | 09:00 - 16:00
									</li>
								</ul>

							</div>

						</div>

					</div>
				</div><!-- .footer-widgets-wrap end -->
			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights" class="bg-transparent border-top op-08">
				<div class="container">

					<div class="row justify-content-md-between">
						<div class="col-md-sm-6 text-center text-start">
							Copyrights &copy; 2025 All Rights Reserved by  CENSOWARE
						</div>
						
					</div>

				</div>
			</div>
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- JavaScripts
	============================================= -->
	<script src="{{asset('website/assets/js/plugins.min.js')}}"></script>
	<script src="{{asset('website/assets/js/functions.bundle.js')}}"></script>

	<!-- Select Splitter Plugin -->
	<script src="{{asset('website/assets/js/components/selectsplitter.js')}}"></script>
	<script src="{{asset('website/assets/js/components/bs-select.js')}}"></script>

</body>
</html>