<section class="pre-footer-default novi-background bg-cover bg-gray-light text-center text-sm-left">
		<div class="shell ">
			<div class="range range-sm-center spacing-55">
				<div class="cell-sm-12 cell-md-4">
					<div >
						<a href="index.html"><img src="Web_Resources_Logos/Leadership_Web.png"  alt="" width="190" height="55"></a></div>
					<p>Webline Project is a perfect solution for everyone who wants to establish a stunningly looking website with
						lots of useful functions and without extra coding.</p>
						<div class="group-sm group-middle" ><span class="big text-primary">Social media</span>
							<ul class="inline-list-xxs">
								<li>
									<a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-youtube novi-icon" href="https://"></a>
								</li>
								<li>
									<a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-facebook novi-icon" href="https://www.facebook.com/leadershipfoundationofficial"></a>
								</li>
								<li>
									<a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-twitter novi-icon" href="https://twitter.com/leadershipls"></a>
								</li>
								<li>
									<a class="icon icon-xxs icon-circle icon-trout-outline icon-effect-1 fa fa-google-plus novi-icon" href="#"></a>
								</li>
							</ul>
						</div>
						<br>
				
				</div>
				<div class="cell-sm-0 cell-md-1">
				</div>
				<div class="cell-sm-4 cell-md-2">
					
						<div class="brand-sm"><h4>Programs</h4></div>
						<ul>
							<li>
								<a   href="">Parinama</a>
							</li>
							<li>
								<a    href="">Clash Of Kingdoms</a>
							</li>
							<li>
								<a   href="">CAP</a>
							</li>
							<li>
									<a   href="">Unlimited</a>
							</li>
							<li>
									<a   href="">Vyuha</a>
							</li>
							<li>
									<a   href="">Prarambh</a>
							</li>
							<li>
									<a   href="">Panchatantra</a>
							</li>
							<li>
									<a   href="">Abhiyaan</a>
							</li>
							<li>
									<a   href="">SMMP</a>
							</li>
						</ul>	
					
				</div>
				<div class="cell-sm-4 cell-md-2">
						<div class="brand-sm"><h4>Our Works</h4></div>
				
					<ul>
						<li>
							<a href="#"  >Student Activity Center</a>
						</li>
						<li>
							<a href="#"  >Technology Incubation Hub</a>
						</li>
						<li>
							<a   href="https://www.smartvillagerevolution.in">Smart Village Revolution</a>
							
						</li>
						<li>
							<a   href="">In Schools</a>
						</li>
					</ul>
				</div>
				<div class="cell-sm-4 cell-md-3">
					<h4>About Leadership</h4>
					<div>
						<h3>	</h3>
					</div>
					<ul>
						<li>
							<a   href="">About Us</a>
						</li>
						<li>
							<a   href="">Careers</a>
						</li>
						<li>
							<a   href="">Success Stories</a>
						</li>
						<li>
							<a   href="">Our StartUps</a>
						</li>
						<li>
							<a   href="">Shop</a>
						</li>
						<li>
							<a   href="">Jobs & Interships</a>
						</li>
						<li>
							<a   href="">Press</a>
						</li>
						<li>
							<a   href="">Contact</a>
						</li>
					</ul>

				</div>
			</div>
		</div>

	</section>
	<footer class="page-footer-default novi-background bg-cover text-center">
		<div class="shell">
			<div class="range spacing-30 range-fix">
				<div class="cell-md-8 cell-lg-8 text-md-left">
					<ul class="list-nav">
						<li class="active"><a href="index.html">Home</a></li>
						<li><a href="#about-us">About us</a></li>
						<li><a href="#services">Clubs</a></li>
						<li><a href="#clients">Affiliations</a></li>
						<li><a href="#testimonials">Testimonials</a></li>
						<li><a href="login.html">Login</a></li>
					</ul>
				</div>
				<div class="cell-md-4 cell-lg-4 text-md-right"><p class="rights">Leadership Foundation&nbsp;©&nbsp;
					<span id="copyright-year"></span>.&nbsp; <br class="veil-sm"></p></div>
			</div>
		</div>
	</footer>
</div>
<!-- coded by Himic -->
<div class="snackbars" id="form-output-global"></div>

<script>
	$(document).ready(function() {
  var counter = 0;

  // Start the changing images
  setInterval(function() {
    if(counter == 9) { 
      counter = 0; 
    }

    changeImage(counter);
    counter++;
  }, 3000);

  // Set the percentage off
  loading();
});

function changeImage(counter) {
  var images = [
	'<img src="images/Leadership Logo.png" alt="" >',
    '<i class="fa fa-gamepad"></i>',
    '<i class="fa fa-headphones"></i>',
    '<i class="fa fa-cubes"></i>',
    '<i class="fa fa-paw"></i>',
    '<i class="fa fa-rocket"></i>',
    '<i class="fa fa-ticket"></i>',
    '<i class="fa fa-pie-chart"></i>',
    '<i class="fa fa-codepen"></i>'
  ];

  $(".loader .image").html(""+ images[counter] +"");
}

function loading(){
  var num = 0;

  for(i=0; i<=100; i++) {
    setTimeout(function() { 
      $('.loader span').html(num+'%');

      if(num == 100) {
        loading();
      }
      num++;
    },i*120);
  };

}
</script>
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
</html>