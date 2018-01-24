<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>About Us</title>
  <link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/header-login-signup.css">
  <link rel="stylesheet" href="css/footer-distributed-with-address-and-phones.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/xstyle.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


</head>

<body>

<header class="header-login-signup">

	<div class="header-limiter">

		<h1><a href="<?php echo base_url(); ?>/login"><img src="images/gapcis-logo.png"></a></h1>
 
		<nav>
	  <a href="landing-page.html">Home</a>
      <a href="about-us.html">About Us</a>
      <a href="admission.html">Admission</a>
      <a href="contact-us.html">Contact Us</a>
		</nav>

		<ul>
			<li><a href="login.html">Login</a></li>
		</ul>

	</div>

</header>



<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'History')" id="defaultOpen">History</button>
  <button class="tablinks" onclick="openCity(event, 'Vision')">Vision</button>
  <button class="tablinks" onclick="openCity(event, 'Mission')">Mission</button>
</div>

<div id="History" class="tabcontent">
  <div class="">
  <h2 style="font-family: prata">History</h3>
  <p style="font-family: prata">Governor Andres Pascual started out as a dream by the late Don Andres Pascual. Don Andres
loved his countrymen so much, that he founded the Wesleyan High School Foundation in 1947
and housed it in his own lot and building in Tangos, Navotas, Metro Manila to teach children who
are willing to be educated.
Don Andres Pascual was still not satisfied. He reserved his one hectare site where a modern high
school building could be built. However, time did not allow him to realize his dreams. When Don
Andres Pascual died on October 12, 1973, the transformation of his dream into reality became an
obsession not only to his beloved wife, Doña Adela S. Pascual, but also to their niece, Dr. Olivia
S. Pascual. Though prayers and hard work they succeed in funding this high school. To
perpetuate the memory of the late don Andres Pascual, his wife Doña Adela and their niece,
Olivia, decided to name this high school as Governor Andres Pascual High School.
On June 14, 1976, the Governor Andres Pascual High School started accommodating the poor
school children of Navotas, Metro Manila. It offered nursery, kinder, elementary and secondary
levels. From 384 students at the start in 1976, it has grown to 2,395 students in 1995.
In July 1993, since their ultimate goal is to help prepare their students in their professional careers,
the Governor Andres Pascual High School is no longer limited to secondary education. The school
started offering courses that focuses on Education, and was the first private school in Navotas
that offered college education. Hence, the birth of Governor Andres Pascual College (GAPC).
The school now offers 6 Courses that includes Master of Arts in Education and Doctor of
Education.
In 1993, Governor Andres Pascual first started offering Bachelor of Education. They also offered
technical two year courses such as Associate Hotel and Restaurant Management and Associate
Computer Secretariat. Two year courses were later on taken by TESDA in 1994 because of the
Republic Act No. 7796 otherwise known as the "Technical Education and Skills Development Act
of 1994" signed into law by President Fidel V. Ramos on August 25, 1994.
In 1993 they started offering Bachelor of Science in Accountancy but was removed by CHED
based on CHED Memorandum Order requirement that the students should have the capability to
take and pass the CPA (Certified Public Accountants) exam [Article 3 Section 14]. None have
passed the exam that is why they removed the program from the College.
School year 1997-1998 GAPC introduced Master of Arts in Education major in Administration and
Supervision. It was recognized by the Philippine government in April 15, 1998 given at Pasig City,
Philippines. The Recognition No. is (070) Series of 1998.
In 1998-1999 Doctor of Education was introduced into the college and later on recognized by the
Philippine government in June 19, 2000 given at Pasig City with recognition No (166) Series of
2000.</p>
</div>
</div>

<div id="Vision" class="tabcontent">
  <h2 style="font-family: prata">Vision</h2>
  <p style="font-family: prata; font-size: 18px;">Governor Andres Pascual College envisions a model learning institution that makes a positive
difference and is responsive to the needs of the global community.</p> 
</div>

<div id="Mission" class="tabcontent">
  <h2 style="font-family: prata">Mission</h2>
  <p style="font-family: prata; font-size: 18px;">The mission of Governor Andres Pascual College is to provide an affordable learning with
emphasis on relevant, innovative and quality academic programs and services.
</p>
</div>


<footer class="footer-distributed">

      <div class="footer-left">

        <h3>GAPC Information Systems</h3>

        <p class="footer-company-name">Governor Andres Pascual College &copy; 2017</p>
      </div>

      <div class="footer-center">

      </div>

      <div class="footer-right">

         <p class="footer-company-about">
          <span></span>
          
        </p>

      </div>

    </footer>



<script>

	$(document).ready(function(){

		var userMenu = $('.header-user-dropdown .header-user-menu');

		userMenu.on('touchend', function(e){

			userMenu.addClass('show');

			e.preventDefault();
			e.stopPropagation();

		});

		// This code makes the user dropdown work on mobile devices

		$(document).on('touchend', function(e){

			// If the page is touched anywhere outside the user menu, close it
			userMenu.removeClass('show');

		});

	});



	$(document).ready(function(){

		var userMenu = $('.header-user-dropdown .header-user-menu');

		userMenu.on('touchend', function(e){

			userMenu.addClass('show');

			e.preventDefault();
			e.stopPropagation();

		});

		// This code makes the user dropdown work on mobile devices

		$(document).on('touchend', function(e){

			// If the page is touched anywhere outside the user menu, close it
			userMenu.removeClass('show');

		});

	});



	function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();

</script>

</body>

</html>