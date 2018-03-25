<!-- footer -->
<div class="footer_top_agileits">
	<div class="container-fluid">
		<div class="col-md-3 footer_grid">
			<h3>About Us</h3>
			<p>Sagittis quis turpis vel, facilisis posuere erat. Nulla facilisi. Proin vel commodo leo. Ut mauris tortor, cursus ut massa vitae, iaculis vehicula turpis. Nam libero tempore cum vulputate id posuere erat.</p>
			<div class="read">
				<a href="about.html">Read more »</a>
			</div>
		</div>
		<div class="col-md-3 footer_grid">
			<h3>Latest News</h3>
			<ul class="footer_grid_list">
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque vulputate </a>
				</li>
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
				</li>
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
				</li>
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Dolor amet sed quam vitae</a>
				</li>
				<li><i class="fa fa-chevron-right" aria-hidden="true"></i>
					<a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum neque, vulputate </a>
				</li>
			</ul>
		</div>
		<div class="col-md-3 footer_grid">
			<h3>Contact Info</h3>
			<ul class="address">
				<li><i class="fa fa-map-marker" aria-hidden="true"></i>3241 USA, Collection building, <span>New York City.</span></li>
				<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">info@example.com</a></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i>+0123 2279 3241</li>
				<li><i class="fa fa-globe" aria-hidden="true"></i><a href="#">info@website.com</a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-grid_agileits_w3 footer_grid">
				<h3>Recent Works</h3>
			<div class="footer-list">
				<div class="flickr-grid">
					<a href="#"><img src="images/p1.jpg" alt=" " ></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p2.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p3.jpg" alt=" " ></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p4.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p5.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p6.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p1.jpg" alt=" "></a>
				</div>
				<div class="flickr-grid">
					<a href="#"><img src="images/p2.jpg" alt=" "></a>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="footer_w3ls">
	<div class="container">
		<div class="footer_bottom1">
			<p>© 2018 Corporation. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
</div>
<!-- //footer -->

<!-- signin Model -->
<!-- Modal1 -->
<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="main-mailposi">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
				<div class="modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Login To Your Account</h3>
					<form action="#" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" placeholder="User Name" name="Name" required="">
						</div>
						<div class="styled-input">
							<input type="password" placeholder="Password" name="password" required="">
						</div>
						<input type="submit" value="Login">
					</form>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<!-- //Modal1 -->

<!--register modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body modal-body-sub_agile">
				<div class="main-mailposi">
					<span class="fa fa-envelope-o" aria-hidden="true"></span>
				</div>
				<div class="modal_body_left modal_body_left1">
					<h3 class="agileinfo_sign">Register Your Account</h3>
					<form action="process/process_add_user.php" method="post">
						<div class="styled-input agile-styled-input-top">
							<input type="text" placeholder="User Name" name="name" required="">
						</div>
						<div class="styled-input agile-styled-input-top">
							<input type="email" placeholder="Email" name="email" required="" class="email">
						</div>
						<div class="styled-input">
							<input type="password" placeholder="Password" name="password" required="" class="pwd">
						</div>
						<div class="styled-input">
							<input type="password" placeholder="Check Password" name="ckpassword" required="" class="ckpwd">
							<input type="hidden" name="role_id" value="0">
						</div>
						<div class="styled-input msg">
							
						</div>
						<input type="submit" value="Register" name="register">

					</form>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- //Modal content-->
	</div>
</div>
<!--register modal ends-->

	
<!-- bootstrap-modal-pop-up -->
<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				Corporation
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
			</div>
			<div class="modal-body">
				<img src="images/banner1.jpg" alt=" " class="img-responsive" />
				<p>Ut enim ad minima veniam, quis nostrum 
					exercitationem ullam corporis suscipit laboriosam, 
					nisi ut aliquid ex ea commodi consequatur? Quis autem 
					vel eum iure reprehenderit qui in ea voluptate velit 
					esse quam nihil molestiae consequatur, vel illum qui 
					dolorem eum fugiat quo voluptas nulla pariatur.
					<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
						esse quam nihil molestiae consequatur.</i></p>
			</div>
		</div>
	</div>
</div>
<!-- //bootstrap-modal-pop-up --> 
	
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
	
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

	<!-- owl carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$("#owl-demo").owlCarousel({

				autoPlay: 3000, //Set AutoPlay to 3 seconds
				autoPlay: true,
				items: 3,
				itemsDesktop: [991, 2],
				itemsDesktopSmall: [414, 4]

			});
		}); 
	</script>
	<!-- //owl carousel -->
	
	<!-- Responsive slider  -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //Responsive slider  -->

	<!-- Flex slider-script -->
	<script defer src="js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
	<!-- //Flex slider-script -->
	
	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->
	
	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->
	
	<!-- smooth scrolling js -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling js -->