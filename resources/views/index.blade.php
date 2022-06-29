<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<!-- Head -->
<head>
<title>Saifullah</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="" />
<!-- css -->
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font-awesome.min.css" /> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200,300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all" />
<!-- Default-JavaScript-File -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- //Default-JavaScript-File -->

</head>
<body>
<!-- banner -->
	<div class="w3-banner-top">
	<div class="agileinfo-dot"> 
			<ul style="text-align: center;">
			  <li><a href="/locale/en" style="color:#ffc53e;"> {{__('trans.en')}}</a> &nbsp;&nbsp;&nbsp;&nbsp;
			  	  <a href="/locale/tr" style="color:#ffc53e;">{{__('trans.tr')}}</a> </li> &nbsp;&nbsp;&nbsp;&nbsp;
				  <!-- <a href="/locale/tr" style="color:white;"> {{__('trans.af')}}</a> </li>  -->
			  	  <!-- <a href="{[route('language.locale', ['locale'=> 'tr']) ]}?backUrl={[request()->fullUrl() ]}" style="color:white;">Turkish</a> </li>  -->

			</ul>
			<div class="w3layouts_menu">
				<nav class="cd-stretchy-nav edit-content">
					<a class="cd-nav-trigger" href="#0"> {{__('trans.menu')}} <span aria-hidden="true"></span> </a>
					<ul>
						<li><a href="#home" class="scroll"><span>{{__('trans.home')}}</span></a></li>
						<li><a href="#about" class="scroll"><span>{{__('trans.about')}}</span></a></li>
						<li><a href="#experiences" class="scroll"><span>{{__('trans.experiences')}}</span></a></li>
						<li><a href="#skills" class="scroll"><span>{{__('trans.skills')}}</span></a></li> 
						<li><a href="#projects" class="scroll"><span>{{__('trans.projects')}}</span></a></li>
						<li><a href="#contact" class="scroll"><span>{{__('trans.contact')}}</span></a></li>
					</ul> 
					<span aria-hidden="true" class="stretchy-nav-bg"></span>
				</nav> 
			</div>

		<div class="w3-banner-grids">
		@if(!empty($bilgiPerson))
		@foreach($bilgiPerson as $person)
			<div class="col-md-6 w3-banner-grid-left">
				<div class="w3-banner-img">
					<!-- <img src="images/1.jpg" alt="img"> -->
					<img src="uploads/pictures/{{$person->image}}" alt="img">
					<h3 class="test"> {{$person->name}} </h3>
					<p class="test" >{{__('trans.softDev')}}</p>
				</div>
			</div>
		@endforeach
		@endif
			<div class="col-md-6 w3-banner-grid-right">
			<!-- <div class="w3-banner-text">
				<h3>Career Goal</h3>
				<p>To the best in his career and the best programmer in the world.</p>
			</div> 
				<div class=" w3-right-addres-1">-->
				@if(!empty($bilgiPerson))
		         @foreach($bilgiPerson as $person)
				        <ul class="address">
							<li>
								<ul class="agileits-address-text ">
									<li class="agile-it-adress-left"><b> {{__('trans.dob')}} </b></li>
									<li><span>:</span>{{$person->dob}}</li>
								</ul>
							</li>
							<li>
								<ul class="agileits-address-text">
									<li class="agile-it-adress-left"><b>{{__('trans.phone')}}</b></li>
									<li><span>:</span>{{$person->phone}}</li>
								</ul>
							</li>
							<li>
								<ul class="agileits-address-text">
									<li class="agile-it-adress-left"><b>{{__('trans.address')}}</b></li>
									<li><span>:</span>{{$person->address}}</li>
								</ul>
							</li>
							<li>
								<ul class="agileits-address-text">
									<li class="agile-it-adress-left"><b> {{__('trans.email')}} </b></li>
									<li><span>:</span><a href="https://accounts.google.com/"> {{$person->email}}</a></li>
								</ul>
							</li>
							<li>
								<ul class="agileits-address-text">
									<li class="agile-it-adress-left"><b>{{__('trans.instagram')}}</b></li>
									<li><span>:</span><a href="https://www.instagram.com/saifhmrz/?hl=en">{{$person->instagram}}</a></li>
								</ul>
							</li>
							<li>
								<ul class="agileits-address-text">
									<li class="agile-it-adress-left"><b>{{__('trans.linkedin')}}</b></li>
									<li><span>:</span><a href="https://www.linkedin.com/in/saifullah-nasrullah-32a87694/">{{$person->linkedin}}</a></li>
								</ul>
							</li>
					</ul> 
					 @endforeach
		         @endif
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="thim-click-to-bottom">
				<a href="#about" class="scroll">
					<i class="fa  fa-chevron-down"></i>
				</a>
			</div>

	</div>
<!-- banner -->
<!-- /about -->

<div class="w3-about" id="about">
	<div class="container">
		<div class="w3-about-head">
			<h3> {{ __('trans.aboutMe') }} </h3>
		</div>
		<div class="w3-about-grids">
		<div class=" w3-about-grids1">
				<div class="col-md-6 w3-about-grid-left1">
					<img src="images/ab5.jpg" alt="img1"> 
				</div>
				<div class="col-md-6 w3-about-grid-right1">
					<h3>{{__('trans.aboutMeTitle')}} </h3>
					<p>{{__('trans.aboutMeText')}} </p>
					<h5>Projects</h5>
					<div class= "w3-about-grid-small-border">
					@if(!empty($projects))
						@foreach($projects as $project)
						<div class="col-md-4 w3-about-grid-small">
							<h3 class="w3-head-project">{{$project->count}}</h3>
							<h5>{{$project->title}} </h5>
						</div>
						@endforeach
					@endif  
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div> 
		</div>
	</div>
</div>
</div>
<!-- //about  -->
<!--/ education -->
	<div class="w3-edu-top" id="experiences">
	<div class="container">
		<div class="w3-edu-grids">
			<div class="col-md-5 w3-edu-grid-left">
				<div class="w3-edu-grid-header">
					<h3> {{ __('trans.experiences') }} </h3>
				</div>
				@if(!empty($experiences))
					@foreach($experiences as $experience)
				<div class="col-md-4 w3-edu-info1">
					<h3>{{$experience->year}} </h3>
					<h4>{{$experience->title}}</h4>
			   </div>
			   <div class="col-md-6 w3-edu-info2">
					<h3>{{$experience->company}}</h3>
					<!-- <h4><i class="fa fa-users" aria-hidden="true"></i><span>{{$experience->position}}</span></h4> -->
					<h3>{{$experience->position}} </h3>
					<p>{{$experience->explanation}} </p>
				</div>
				<div class="clearfix"></div>
			    @endforeach
			@endif 
			</div>
			<div class="col-md-4 w3-edu-grid-right">
				<div class="w3-edu-grid-header">
					<h3>{{ __('trans.education') }}</h3>
				</div>
				@if(!empty($educations))
					@foreach($educations as $education)
				<div class="col-md-3 w3-edu-info-right1">
						<h3>{{$education->year}} </h3>
				</div>
				<div class="col-md-9 w3-edu-info-right2">
					<h3>{{$education->school}} </h3>
					<h4>{{$education->title}} </h4>
					<p>{{$education->explanation}} </p>
				</div>
				<div class="clearfix"></div>
					@endforeach
				@endif 
			</div>
			<div class="col-md-3 w3-edu-grid-right">
			<div class="w3-edu-grid-header">
				<h3>{{ __('trans.languages') }}</h3>
			</div>
			<div class="col-md-3 w3-edu-info-right1">
				<h3>{{ __('trans.persian') }}</h3>
			</div>
			<div class="col-md-9 w3-edu-info-right2">
					 <h3 class="lang" style="color:#dcad3f;  font-size: 18px;">{{ __('trans.native') }} </h3>  
			</div>
			<div class="col-md-3 w3-edu-info-right1">
				<h3>{{ __('trans.english') }}</h3>
			</div>
			<div class="col-md-9 w3-edu-info-right2">
					 <h3 class="lang" style="color:#dcad3f;  font-size: 18px;">{{ __('trans.level') }} </h3>  
			</div>
			<div class="col-md-3 w3-edu-info-right1">
				<h3>{{ __('trans.turkish') }}</h3>
			</div>
			<div class="col-md-9 w3-edu-info-right2">
					 <h3 class="lang" style="color:#dcad3f;  font-size: 18px;">{{ __('trans.level') }} </h3>  
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>	
	</div>
	</div>
	</div>
<!-- //education -->
 
<!-- skills -->
<div class="skills" id="skills">
	<div class="container">
		<div class="title-w3ls">
			<h4>{{__('trans.skills')}} </h4>
		</div>
		<div class="skills-bar">
		<div class="col-md-6 w3-agile-skills-grid">
			<section class='bar'>
				<section class='wrap'>
					<div class='wrap_right'>
					  <div class='bar_group'>
					  <?php $sayac=0; ?>
					  @foreach($skills as $skill)
					  	@if($sayac <= count($skills)/2)
						<div class='bar_group__bar thin' label='{{$skill->title}}' show_values='flase' tooltip='true' value='{{$skill->point}}'></div>
						<?php $sayac++; ?>
						@endif
					  @endforeach 

						</div>
					</div>
					<div class="clearfix"></div>
				</section>
			</section>
		</div>
		<div class="col-md-6 w3-agile-skills-grid">
			<section class='bar'>
				<section class='wrap'>
					<div class='wrap_right'>
					  <div class='bar_group'>
					  <?php $sayac=0; ?>
					  @foreach($skills as $skill)
					  	<?php $sayac++; ?>
					  	@if($sayac > count($skills)/2)
						<div class='bar_group__bar thin' label='{{$skill->title}}' show_values='flase' tooltip='true' value='{{$skill->point}}'></div>						
						@endif
					  @endforeach 

						</div>
					</div>
					<div class="clearfix"></div>
				</section>
			</section>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //skills -->

<!-- main-content -->
	<div class="main-content">
		<!-- gallery -->
	<div class="gallery" id="projects">
		<div class="w3-gallery-head">
			<h3>{{__('trans.projects')}} </h3>
		</div>
	<div class="container">
		<div class="gallery_gds">
			<ul class="simplefilter ">
                <li class="active" data-filter="all">{{__('trans.all')}} </li>
			@foreach($projects as $project)
                <li data-filter="{{$project->id}}">{{$project->title}}</li>
			@endforeach
                <!-- <li data-filter="2">Java</li>
                <li data-filter="3">Web development</li> -->
            </ul>   
            <div class="filtr-container " style="padding: 0px; position: relative; height: 858px;">
			@foreach($applications as $app)
				<div class="col-md-4 col-ms-6 jm-item first filtr-item" data-category="{{$app->projectId}}" data-sort="Busy streets" style="opacity: 1; transform: scale(1) translate3d(0px, 0px, 0px); backface-visibility: hidden; perspective: 1000px; transform-style: preserve-3d; position: absolute; transition: all 0.5s ease-out 0ms;">
					<div class="jm-item-wrapper">
						<div class="jm-item-image">
							<img src="/uploads/applications/{{$app->image}}" alt="property" />
							<span class="jm-item-overlay"> </span>
							<div class="jm-item-button"><a href="#"  data-toggle="modal" data-target="#myModal{{$app->id}}">View Details</a></div>
						</div>	
						
					</div>
				</div>
			@endforeach 
			 
               <div class="clearfix"> </div>
            </div>
		</div>
	</div>	
	</div>
	<!--//gallery-->
	</div>
<!-- //main-content -->
@foreach($applications as $app)
	<div class="modal fade" id="myModal{{$app->id}}" tabindex="-1" role="dialog" >
				<div class="modal-dialog">
							<!-- Modal content-->
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
							<div class="w3ls-property-images w3-pop1-img">
								<img src="/uploads/applications/{{$app->image}}" alt="{{$app->name}}">
							</div>
					
						<div class="ins-details">
							<div class="ins-name">
								<h3>{{$app->name}}</h3>
								<p>{{$app->explanation}}</p>
								
							</div>
							
						</div>
						<div class="clearfix"></div>			
			     </div>
	</div>
@endforeach 
 <script src="/js/jquery.filterizr.js"></script>
    
    <!-- Kick off Filterizr -->
    <script type="text/javascript">
        $(function() {
            //Initialize filterizr with default options
            $('.filtr-container').filterizr();
        });
    </script>

<!-- contact -->
   <a name="subscribes"></a>
	 <div class="contact" id="contact">
	<div class="container">
		<div class="w3ls-heading">
			<h3>{{__('trans.contactMe')}} </h3>
		</div>
			<div class="contact-w3ls">
				<form action="/contactMe" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}	
					<div class="col-md-7 col-sm-7 contact-left agileits-w3layouts">
						<input type="text" name="name" placeholder="Name Surname" required="true">
						<input type="email"  class="email" name="email" placeholder="Email" required="true">
						<input type="text" name="phone" placeholder="Mobile Number" required="true"> 
						<!-- <input type="text" name="subject" placeholder="Subject" required="true">  -->
					</div> 
					<div class="col-md-5 col-sm-5 contact-right agileits-w3layouts">
						<textarea name="message" placeholder="Message" required=""></textarea>
						<input type="submit" value="Submit">

						@if(session()->has('cevap'))
						<p style="color:#fba80c;">
							{{session()->get('cevap')}}
						</p>
						@endif
					</div>
					<div class="clearfix"> </div>   
				</form> 
			</div>  

	</div>
</div>
<!-- //contact -->
<!-- footer -->
	<div class="w3l_footer">
		<div class="container">
			
			<div class="w3ls_footer_grids">
				
				<div class="w3ls_footer_grid">
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>{{__('trans.location')}} </h4>
							<p>Izmir</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>{{__('trans.email')}} </h4>
							<a href="mailto:info@example.com">seyfullah.nasrullah@gmail.com</a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 w3ls_footer_grid_left">
						<div class="w3ls_footer_grid_leftl">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="w3ls_footer_grid_leftr">
							<h4>{{__('trans.callMe')}} </h4>
							<p>(+90) 552 5377403</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<div class="w3l_footer_pos">
			<p>© 2020 All Rights Reserved by <a href="/">Saifullah Nasrullah</a></p>
		</div>
	</div>
<!-- //footer -->
<script src="js/bars.js"></script>
<!-- start-smoth-scrolling -->
<script src="js/SmoothScroll.min.js"></script>
<!-- text-effect -->
		<script type="text/javascript" src="js/jquery.transit.js"></script> 
		<script type="text/javascript" src="js/jquery.textFx.js"></script> 
		<script type="text/javascript">
			$(document).ready(function() {
					$('.test').textFx({
						type: 'fadeIn',
						iChar: 100,
						iAnim: 1000
					});
			});
		</script>
<!-- //text-effect -->
<!-- menu-js --> 	
	<script src="js/modernizr.js"></script>	
	<script src="js/menu.js"></script>
<!-- //menu-js --> 	


<script type="text/javascript" src="js/move-top.js"></script>

<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>


</body>
</html>