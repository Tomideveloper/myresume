@extends('frontend.frontendmaster')
@section('body')

<section id="home-section" class="hero">
	<div class="home-slider  owl-carousel">
		@foreach($heros as $hero)
		<div class="slider-item ">
			<div class="overlay"></div>
			<div class="container">
				<div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
					<div class="one-third js-fullheight order-md-last img">
						<img src="{{url('public/admin/heropic/', $hero->image)}}" alt="">
						<div class="overlay"></div>
					</div>
					<div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
						<div class="text">
							<span class="subheading">{{$hero->pop}}!</span>
							<h1 class="mb-4 mt-3">I'm <span>{{$hero->name}}</span></h1>
							<h2 class="mb-4">{{$hero->title}}</h2>
							<p><a href="#" class="btn btn-primary py-3 px-4">Hire me</a> <a href="#" class="btn btn-white btn-outline-white py-3 px-4">My works</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach

	</div>
</section>

<!-- about section start here  -->

<section class="ftco-about img ftco-section ftco-no-pb" id="about-section">
	<div class="container">
		<div class="row d-flex">
			<div class="col-md-6 col-lg-5 d-flex">
				<div class="img-about img d-flex align-items-stretch">
					<div class="overlay"></div>
					<div class="align-self-stretch align-items-center">
						<img src="{{url('public/admin/aboutpic',$abouts->image)}}" alt="" class="img-fluid">
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-7 pl-lg-5 pb-5">
				<div class="row justify-content-start pb-3">
					<div class="col-md-12 heading-section ftco-animate">
						<h1 class="big">About</h1>
						<h2 class="mb-4">About Me</h2>
						<p>{{$abouts->title}}</p>
						<ul class="about-info mt-4 px-md-0 px-2">
							<li class="d-flex"><span>Name:</span> <span>{{$abouts->name}}</span></li>
							<li class="d-flex"><span>Date of birth:</span> <span>{{$abouts->dob}}</span></li>
							<li class="d-flex"><span>Address:</span> <span>{{$abouts->address}}</span></li>
							<li class="d-flex"><span>Zip code:</span> <span>{{$abouts->zip_code}}</span></li>
							<li class="d-flex"><span>Email:</span> <span>{{$abouts->email}}</span></li>
							<li class="d-flex"><span>Phone: </span> <span>{{$abouts->phone}}</span></li>
						</ul>
					</div>
				</div>
				<div class="counter-wrap ftco-animate d-flex mt-md-3">
					<div class="text">
						<p class="mb-4">
							<span class="number" data-number="15">{{$abouts->projects}}</span>
							<span>Project complete</span>
						</p>
						<p><a href="#" class="btn btn-primary py-3 px-3">Download CV</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Resume  section start here  -->
<section class="ftco-section ftco-no-pb" id="resume-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<h1 class="big big-2">Resume</h1>
				<h2 class="mb-4">Resume</h2>
				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			</div>
		</div>
		<div class="row">
			@foreach($resumes as $resume)

			<div class="col-md-6">
				<div class="resume-wrap ftco-animate">
					<span class="date">{{$resume->date}}</span>
					<h2>{{$resume->education}}</h2>
					<span class="position">{{$resume->school}}</span>
					<p class="mt-4">{{$resume->description}}</p>
				</div>

			</div>
			@endforeach
		</div>
		<div class="row justify-content-center mt-5">
			<div class="col-md-6 text-center ftco-animate">
				<p><a href="#" class="btn btn-primary py-4 px-5">Download CV</a></p>
			</div>
		</div>
	</div>
</section>

<!-- services  section start here  -->
<section class="ftco-section" id="services-section">
	<div class="container">
		<div class="row justify-content-center py-5 mt-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Services</h1>
				<h2 class="mb-4">Services</h2>
				<p class="text-warning">There are the services which can be provide you look at this and inform us and join us.</p>
			</div>
		</div>
		<div class="row">
			@foreach($services as $ser)
			<div class="col-md-4 text-center d-flex ftco-animate">
				<a href="#" class="services-1">
					<span class="icon">
						<i class="{{$ser->icon}}"></i>
					</span>
					<div class="desc">
						<h3 class="mb-5">{{$ser->services}}</h3>
					</div>
				</a>
			</div>
			@endforeach
		</div>
	</div>
</section>

<!-- skills  section start here  -->
<section class="ftco-section" id="skills-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Skills</h1>
				<h2 class="mb-4">My Skills</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div class="row">
			@foreach($skills as $skill)
			<div class="col-md-6 animate-box">
				<div class="progress-wrap ftco-animate">
					<h3>{{$skill->skill}}</h3>
					<div class="progress">
						<div class="progress-bar color-1" role="progressbar"
							aria-valuenow="{{$skill->percent}}"
							aria-valuemin="0" aria-valuemax="100"
							style="width: {{$skill->percent}}%;">
							<span>{{$skill->percent}}%</span>
						</div>
					</div>
				</div>
			</div>
			@endforeach

		</div>
	</div>
</section>

<!-- projects  section start here  -->

<section class="ftco-section ftco-project" id="projects-section">
	<div class="container">
		<div class="row justify-content-center pb-5">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h1 class="big big-2">Projects</h1>
				<h2 class="mb-4">Our Projects</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div class="row">
			@foreach($projects as $project)
			<div class="col-md-4">
				<div class="" >
					<img src="{{url('public/admin/projectpic/',$project->image)}}" alt="" class=" project img ftco-animate d-flex justify-content-center align-items-center img-fluid">
					<div class="overlay"></div>
					<div class="text text-center p-4">
						<h3><a href="#">Branding &amp; Design by MR</a></h3>
						<span>{{$project->project}}</span>
					</div>
				</div>
			</div>
		@endforeach
		</div>
	</div>
</section>

<!-- blogs  section start here  -->

<section class="ftco-section" id="blog-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-5">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h1 class="big big-2">Blog</h1>
				<h2 class="mb-4">Our Blog</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>
		<div class="row d-flex">
			@foreach($blogs as $blog)
			<div class="col-md-4 d-flex ftco-animate">
				<div class="blog-entry justify-content-end">
					<a href="single.html" class="block-20">
						<img src="{{url('public/admin/blogpic/',$blog->image)}}" alt="" class="img-fluid block-20">
					</a>
					<div class="text mt-3 float-right d-block">
						<div class="d-flex align-items-center mb-3 meta">
							<p class="mb-0">
								<span class="mr-2">Date: {{$blog->created_at}}</span>
								<a href="#" class="mr-2">Admin</a>
								<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
							</p>
						</div>
						<h3 class="heading"><a href="{{url('frontend/single',$blog->id)}}">{{$blog->title}}</a></h3>
						<p>{{$blog->description}}</p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">
	<div class="container">
		<div class="row d-md-flex align-items-center">
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18">
					<div class="text">
						<strong class="number" data-number="100">0</strong>
						<span>Awards</span>
					</div>
				</div>
			</div>
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18">
					<div class="text">
						<strong class="number" data-number="1200">0</strong>
						<span>Complete Projects</span>
					</div>
				</div>
			</div>
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18">
					<div class="text">
						<strong class="number" data-number="1200">0</strong>
						<span>Happy Customers</span>
					</div>
				</div>
			</div>
			<div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
				<div class="block-18">
					<div class="text">
						<strong class="number" data-number="500">0</strong>
						<span>Cups of coffee</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-hireme img margin-top" style="background-image: url(images/bg_1.jpg)">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-7 ftco-animate text-center">
				<h2>I'm <span>Available</span> for freelancing</h2>
				<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				<p class="mb-0"><a href="#" class="btn btn-primary py-3 px-5">Hire me</a></p>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
	<div class="container">
		<div class="row justify-content-center mb-5 pb-3">
			<div class="col-md-7 heading-section text-center ftco-animate">
				<h1 class="big big-2">Contact</h1>
				<h2 class="mb-4">Contact Me</h2>
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
			</div>
		</div>

		<div class="row d-flex contact-info mb-5">
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-map-signs"></span>
					</div>
					<h3 class="mb-4">Address</h3>
					<p>{{$contact->address}}</p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-phone2"></span>
					</div>
					<h3 class="mb-4">Contact Number</h3>
					<p><a href="tel://1234567920">{{$contact->phone}}</a></p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-paper-plane"></span>
					</div>
					<h3 class="mb-4">Email Address</h3>
					<p><a href="{{$contact->email}}">{{$contact->email}}</a></p>
				</div>
			</div>
			<div class="col-md-6 col-lg-3 d-flex ftco-animate">
				<div class="align-self-stretch box p-4 text-center">
					<div class="icon d-flex align-items-center justify-content-center">
						<span class="icon-globe"></span>
					</div>
					<h3 class="mb-4">Website</h3>
					<p><a href="#">{{$contact->site}}</a></p>
				</div>
			</div>
		</div>

		<div class="row no-gutters block-9">
			<div class="col-md-6 order-md-last d-flex">
				<form action="{{url('insert')}}" class="bg-light p-4 p-md-5 contact-form" method="post">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Name" name="name">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Your Email" name="email">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Subject" name="subject">
					</div>
					<div class="form-group">
						<textarea id="" cols="30" rows="7" class="form-control" placeholder="Message" name="message"></textarea>
					</div>
					<div class="form-group">
						<button type="submit" value="Send Message" class="btn btn-primary py-3 px-5">Send Message</button>
					</div>
				</form>

			</div>

			<div class="col-md-6 d-flex">
				<div >
					<img src="{{url('public/admin/contactpic/',$contact->image)}}" alt="" class="img img-fluid">
				</div>
			</div>
		</div>
	</div>
</section>

@endsection