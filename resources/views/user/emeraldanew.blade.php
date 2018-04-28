@extends('layouts.main')

@section('content')

	<section class="md-section">
					<div class="container">
						<div class="row">
							<div class="col-lg-10 offset-0 offset-sm-0 offset-md-0 offset-lg-1 ">
								
								<!-- title-01 -->
								<div class="title-01 title-01__style-04">
									<h2 class="title-01__title"><span>Birthday Party</span>&nbsp;Events</h2>
									<div>Nam suscipit nisi risus, et porttitor metus molestie a. Phasellus id quam id turpis suscipit pretium. Maecenas ultrices, lacus ut accumsan maximus, odio augue rhoncus augue, vulputate maximus mi sapien sed nisl. Sed fermentum congue orci sed lacinia. Nulla nunc purus, consectetur eget rutrum et, rho</div>
								</div><!-- End / title-01 -->
								
							</div>
						</div>
						
						<!-- post-03 -->
						<div class="post-03">
							<div class="post-03__media"><a href="#"><img src="{{ asset('theme/img/cupcakes.jpg') }}" alt=""/></a></div>
							<div class="post-03__body">
								<h6 class="post-03__subTitle">Birthday Party</h6>
								<h2 class="post-03__title"><a href="#">alex</a></h2>
								<div class="post-03__description">Maecenas lorem ex, euismod eget pulvinar non, facilisis ut leo. Quisque placerat purus in neque efficitur ornare. Nam at justo magna. Aliquam venenatis odio ante, non euismod augue porttitor eget. Maecenas nec viverra eros, eget euismod felis. Integer cursus libero sed lorem euismod, vel iaculis fel</div>
								<a class="post-03__link" href="{{url('user.view_detail')}}">View Detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>&nbsp;&nbsp;
								<button type="button" class="btn btn-default">Order</button>
							</div>
						</div><!-- End / post-03 -->
						
						
						<!-- post-03 -->
						<div class="post-03 post-03__reverse">
							<div class="post-03__media"><a href="#"><img src="{{ asset('theme/img/cupcakes.jpg') }}" alt=""/></a></div>
							<div class="post-03__body">
								<h6 class="post-03__subTitle">Birthday Party</h6>
								<h2 class="post-03__title"><a href="#">claire</a></h2>
								<div class="post-03__description">Integer placerat ullamcorper urna nec rhoncus. Sed velit justo, lacinia non sapien imperdiet, sagittis fringilla risus. Nulla in est lobortis massa consectetur scelerisque. Etiam eu metus leo. Mauris a maximus magna. Maecenas odio tortor, tincidunt non lacus a, congue imperdiet diam. Pellentesque in</div>
								<a class="post-03__link" href="#">View Detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>&nbsp;&nbsp;
								<button type="button" class="btn btn-default">Order</button>
							</div>
						</div><!-- End / post-03 -->
						
						
						<!-- post-03 -->
						<div class="post-03">
							<div class="post-03__media"><a href="#"><img src="{{ asset('theme/img/cupcakes.jpg') }}" alt=""/></a></div>
							<div class="post-03__body">
								<h6 class="post-03__subTitle">Birthday Party</h6>
								<h2 class="post-03__title"><a href="#">windy	</a></h2>
								<div class="post-03__description">Nam elit ligula, egestas et ornare non, viverra eu justo. Aliquam ornare lectus ut pharetra dictum. Aliquam erat volutpat. In fringilla erat at eros pharetra faucibus. Nunc a magna eu lectus fringilla interdum luctus vitae diam. Morbi ac orci ac dolor pellentesque interdum vel accumsan risus. In ves</div>
								<a class="post-03__link" href="#">View Detail <i class="fa fa-angle-right" aria-hidden="true"></i></a>&nbsp;&nbsp;
								<button type="button" class="btn btn-default">Order</button>
							</div>
						</div><!-- End / post-03 -->
						
					</div>
				</section>
				<!-- End / Section -->
				
				
				
				
			</div>

@endsection