@extends('layouts.master')

@section('pageContent')
	<!-- Blog -->
	<div class="container">
		<div class="blog">
			<a href="{{URL::asset('post')}}"><h2>Write Post</h2></a>
		<div class="blog-content">
					<div class="blog-content-left">
						<div class="blog-articals">
						<div class="blog-artical">
							<div class="blog-artical-info">
								<div class="blog-artical-info-img">
									<a href="{{URL::asset('single')}}"><img src="images/7.jpg" title="post-name"></a>
								</div>
								<div class="blog-artical-info-head">
									<h2><a href="{{URL::asset('single')}}">{{$post->title }}</a></h2>
									<h6>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a></h6>
									
								</div>
								<div class="blog-artical-info-text">
									<p>{{$post->article }}<a href="#">[...]</a></p>
								</div>
								<div class="artical-links">
		  						 	<ul>
		  						 		<li><small> </small><span>june 14, 2013</span></li>
		  						 		<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
		  						 		<li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
		  						 		<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
		  						 		<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-artical">
							
							<div class="blog-artical-info">
								<div class="blog-artical-info-img">
									<a href="{{URL::asset('single')}}"><img src="images/7.jpg" title="post-name"></a>
									
								</div>
								<div class="blog-artical-info-head">
									<h2><a href="{{URL::asset('single')}}">Simply dummy text of the</a></h2>
									<h6>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a></h6>
									
								</div>
								<div class="blog-artical-info-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy has been the industry's standard dummy has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<a href="#">[...]</a></p>
								</div>
								<div class="artical-links">
		  						 	<ul>
		  						 		<li><small> </small><span>june 14, 2013</span></li>
		  						 		<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
		  						 		<li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
		  						 		<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
		  						 		<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="blog-artical">
						
							<div class="blog-artical-info">
								<div class="blog-artical-info-img">
									<a href="{{URL::asset('single')}}"><img src="images/7.jpg" title="post-name"></a>
								</div>
								<div class="blog-artical-info-head">
									<h2><a href="{{URL::asset('single')}}">Lorem Ipsum has been the</a></h2>
									<h6>Posted on, 12 July 2014 at 10.30am by <a href="#"> admin</a></h6>
									
								</div>
								<div class="blog-artical-info-text">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy has been the industry's standard dummy has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.<a href="#">[...]</a></p>
								</div>
								<div class="artical-links">
		  						 	<ul>
		  						 		<li><small> </small><span>june 14, 2013</span></li>
		  						 		<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
		  						 		<li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
		  						 		<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
		  						 		<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
					<!--start-blog-pagenate-->
							<nav>
										  <ul class="pagination">
											<li>
											  <a href="#" aria-label="Previous">
												<span aria-hidden="true">«</span>
											  </a>
											</li>
											<li><a href="#">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li>
											  <a href="#" aria-label="Next">
												<span aria-hidden="true">»</span>
											  </a>
											</li>
										  </ul>
										</nav>
				<!--//End-blog-pagenate-->
					</div>
					<div class="blog-content-right">
						<div class="b-search">
							<form>
								<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
								<input type="submit" value="">
							</form>
						</div>
						<!--start-twitter-weight-->
						<div class="twitter-weights">
							<h3>Tweet Widget</h3>
							<div class="twitter-weight-grid">
								<h4><span> </span>John Doe</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
								<i><a href="#">2 days ago</a></i>
							</div>
							<div class="twitter-weight-grid">
								<h4><span> </span>John Doe</h4>
								<p>Lorem ipsum dolor sit amet, consectetur elit,labore et dolore magna aliqua. <a href="#">http://t.co/h12k</a></p>
								<i><a href="#">2 days ago</a></i>
							</div>
							<a class="twittbtn" href="#">See all Tweets</a>
						</div>
						<!--//End-twitter-weight-->
						<!-- start-tag-weight-->
						<div class="b-tag-weight">
							<h3>Tags Weight</h3>
							<ul>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">consectetur</a></li>
								<li><a href="#">dolore</a></li>
								<li><a href="#">aliqua</a></li>
								<li><a href="#">sit amet</a></li>
								<li><a href="#">ipsum</a></li>
								<li><a href="#">Lorem</a></li>
								<li><a href="#">consectetur</a></li>
								<li><a href="#">dolore</a></li>
								<li><a href="#">aliqua</a></li>
								<li><a href="#">sit amet</a></li>
								<li><a href="#">ipsum</a></li>
							</ul>
						</div>
						<!---- //End-tag-weight---->
					</div>
					<div class="clearfix"> </div>
				
				</div>
		</div>
		<!-- /Blog -->

<div class="footer">
			<div class="col-md-3 foot-1">
				<h4>Quick Links</h4>
				<ul>
					<li><a href="#">||   Lorem Ipsum passage</a></li>
					<li><a href="#">||   Finibus Bonorum et</a></li>
					<li><a href="#">||   Treatise on the theory</a></li>
				</ul>
			</div>
			<div class="col-md-3 foot-1">
				<h4>Favorite Resources</h4>
				<ul>
					<li><a href="#">||   Characteristic words</a></li>
					<li><a href="#">||   combined with a handful</a></li>
					<li><a href="#">||   which looks reasonable</a></li>
				</ul>
			</div>
			<div class="col-md-3 foot-1">
				<h4>About Us</h4>
				<ul>
					<li><a href="#">||  Even slightly believable</a></li>
					<li><a href="#">||  Hidden in the middle</a></li>
					<li><a href="#">||  Ipsum therefore always</a></li>
				</ul>
			</div>
			<div class="col-md-3 foot-1">
				<h4>Custom Menu</h4>
				<ul>
					<li><a href="#">||  Internet tend to repeat</a></li>
					<li><a href="#">||  Alteration in some form</a></li>
					<li><a href="#">||  This book is a treatise</a></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			<div class="copyright">
				<p>Copyrights © 2015 Voguish All rights reserved | Template by <a href="http://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>

@stop