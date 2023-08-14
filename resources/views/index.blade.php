<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio website</title>

	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}>

	<!-- box icons -->
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

	<header class="header">
		<a href="#" class="logo">Rafli.</a>

		<div class="bx bx-menu" id="menu-icon"></div>

		<nav class="navbar">
			<a href="#home" class="active">Home</a>
			<a href="#about">About</a>
			<a href="#education">Education</a>
			<a href="#skills">Skills</a>
			<a href="#contact">Contact</a>

			<span class="active-nav"></span>
			
		</nav>
	</header>

	<!-- home section design -->
	<section class="home show-animate" id="home">
		<div class="home-content">
			<h1>Hi, I'm<span>Muhammad Rafli Abdillah</span></h1>
			<div class="text-animate">
				<h3>Frontend Developer</h3>
			</div>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
			</p>
		
			<div class="btn-box">
				<a href="#" class="btn">Hire Me</a>
				<a href="#" class="btn">Let's Talk</a>
			</div>
		</div>

		<div class="home-sci">
			<a href="#"><i class="bx bxl-instagram"></i></a>
			<a href="#"><i class="bx bxl-twitter"></i></a>
			<a href="#"><i class="bx bxl-linkedin"></i></a>
		</div>

		<div class="home-imgHover"></div>
	</section>

	<!-- about section design -->
	<section class="about" id="about">
		<h2 class="heading">About <span>Me</span></h2>

		<div class="about-img">
			<img src="about.png" alt="">
			<span class="circle-spin"></span>
		</div>

		<div class="about-content">
			<h3>Frontend Developer!</h3>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quos ab, asperiores similique non cum reiciendis quisquam ut sint inventore cupiditate beatae expedita magnam. Suscipit quasi, delectus distinctio et ea rerum?<span class="animate scroll" style="--i:4;"></span></p>
			
			<div class="btn-box btns">
				<a href="#" class="btn">Read More</a>
			</div>
		</div>
	</section>

	<!-- education section design -->
	<section class="education" id="education">
		<h2 class="heading">My <span>Journey</span></span></h2>
	
		<div class="education-row">
			<div class="education-column">
				<h3 class="title">Education</h3>

				<div class="education-box">
					<div class="education-content">
						<div class="content">
							<div class="year"><i class="bx bxs-calendar"></i> 2017-2018</div>
							
							<h3>Master Degree - University</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus perferendis quaerat laudantium facilis, provident a fugit magnam obcaecati cum possimus! Quia veniam, perspiciatis iste consequuntur ad incidunt voluptates? Sed, est!</p>
						</div>
					</div>

					<div class="education-content">
						<div class="content">
							<div class="year"><i class="bx bxs-calendar"></i> 2019-2020</div>
							
							<h3>Master Degree - University</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus perferendis quaerat laudantium facilis, provident a fugit magnam obcaecati cum possimus! Quia veniam, perspiciatis iste consequuntur ad incidunt voluptates? Sed, est!</p>
						</div>
					</div>

					<div class="education-content">
						<div class="content">
							<div class="year"><i class="bx bxs-calendar"></i> 2021-2022</div>
							
							<h3>Master Degree - University</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus perferendis quaerat laudantium facilis, provident a fugit magnam obcaecati cum possimus! Quia veniam, perspiciatis iste consequuntur ad incidunt voluptates? Sed, est!</p>
						</div>
					</div>
					<span class="animate scroll" style="--i:3;"></span>
				</div>
			</div>

			<div class="education-column">
				<h3 class="title">Experiences<span class="animate scroll" style="--i:5;"></span></h3>

				<div class="education-box">
					<div class="education-content">
						<div class="content">
							<div class="year"><i class="bx bxs-calendar"></i> 2017-2018</div>
							
							<h3>Web Developer - Company</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus perferendis quaerat laudantium facilis, provident a fugit magnam obcaecati cum possimus! Quia veniam, perspiciatis iste consequuntur ad incidunt voluptates? Sed, est!</p>
						</div>
					</div>

					<div class="education-content">
						<div class="content">
							<div class="year"><i class="bx bxs-calendar"></i> 2019-2020</div>
							
							<h3>Web Developer - Company</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus perferendis quaerat laudantium facilis, provident a fugit magnam obcaecati cum possimus! Quia veniam, perspiciatis iste consequuntur ad incidunt voluptates? Sed, est!</p>
						</div>
					</div>

					<div class="education-content">
						<div class="content">
							<div class="year"><i class="bx bxs-calendar"></i> 2021-2022</div>
							
							<h3>Web Developer - Company</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus perferendis quaerat laudantium facilis, provident a fugit magnam obcaecati cum possimus! Quia veniam, perspiciatis iste consequuntur ad incidunt voluptates? Sed, est!</p>
						</div>
					</div>
					<span class="animate scroll" style="--i:6;"></span>
				</div>
			</div>

		</div>
	</section>

	<!-- skills section design -->
	<section class="skills" id="skills">
		<h2 class="heading">My <span>Skills</span><span class="animate scroll" style="--i:1;"></span></h2>

		<div class="skills-row">
			<div class="skills-column">
				<h3 class="title">Coding Skills<span class="animate scroll" style="--i:2;"></span></h3>

				<div class="skills-box">
					<div class="skills-content">
						<div class="progress">
							<h3>HTML <span>90%</span></h3>
							<div class="bar"><span></span></div>
						</div>
						<div class="progress">
							<h3>CSS <span>80%</span></h3>
							<div class="bar"><span></span></div>
						</div>
						<div class="progress">
							<h3>JavaScript <span>65%</span></h3>
							<div class="bar"><span></span></div>
						</div>
						<div class="progress">
							<h3>Python <span>75%</span></h3>
							<div class="bar"><span></span></div>
						</div>
					</div>
					<span class="animate scroll" style="--i:3;"></span>
				</div>
			</div>

			<div class="skills-column">
				<h3 class="title">Professional Skills<span class="animate scroll" style="--i:5;"></span></h3>

				<div class="skills-box">
					<div class="skills-content">
						<div class="progress">
							<h3>Web Design <span>95%</span></h3>
							<div class="bar"><span></span></div>
						</div>
						<div class="progress">
							<h3>Web Development <span>67%</span></h3>
							<div class="bar"><span></span></div>
						</div>
						<div class="progress">
							<h3>Graphic Design <span>85%</span></h3>
							<div class="bar"><span></span></div>
						</div>
						<div class="progress">
							<h3>SEO Marketing <span>60%</span></h3>
							<div class="bar"><span></span></div>
						</div>
					</div>
					<span class="animate scroll" style="--i:6;"></span>
				</div>
			</div>
		</div>
	</section>

	<!-- contact section design -->
	<section class="contact" id="contact">
		<h2 class="heading">Contact <span>Me!</span><span class="animate scroll" style="--i:1;"></span></h2>

		<form action="#">
			<div class="input-box">
				<div class="input-field">
					<input type="text" placeholder="Full Name" required>
					<span class="focus"></span>
				</div>
				<div class="input-field">
					<input type="email" placeholder="Email Address" required>
					<span class="focus"></span>
				</div>
				<span class="animate scroll" style="--i:3;"></span>
			</div>
			
			<div class="input-box">
				<div class="input-field">
					<input type="number" placeholder="Mobile Number" required>
					<span class="focus"></span>
				</div>
				<div class="input-field">
					<input type="text" placeholder="Email Subject" required>
					<span class="focus"></span>
				</div>
				<span class="animate scroll" style="--i:5;"></span>
			</div>

			<div class="textarea-field">
				<textarea name="" id="" cols="30" rows="10" placeholder="Your Massage" required></textarea>
				<span class="focus"></span>
				<span class="animate scroll" style="--i:7;"></span>
			</div>
			<div class="btn-box btns">
				<button type="submit" class="btn">Submit</button>	
				<span class="animate scroll" style="--i:9;"></span>
			</div>
		</form>
	</section>

	<footer class="footer">
		<div class="footer-text">
			<p>Copyright &copy; 2023 by Rafli | All Rights Reserved</p>
			<span class="animate scroll" style="--i:1;"></span>
		</div>

		<div class="footer-iconTop">
			<a href="#"><i class="bx bx-up-arrow-alt"></i></a>
			<span class="animate scroll" style="--i:3;"></span>
		</div>
	</footer>

	<script type="text/javascript" src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>