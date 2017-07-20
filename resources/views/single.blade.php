@extends('layouts.master')


@section('pageContent')
<!-- content -->
<div class="container">
<div class="content-top">
	
			<div class="single">
				<div class="single-top">
					<img src="images/7.jpg" class="img-responsive" alt="">
					
					<p> {{$mypost->text}}</p>
						<div class="artical-links">
		  						 	<ul>
		  						 		<li><small> </small><span>june 14, 2013</span></li>
		  						 		<li><a href="#"><small class="admin"> </small><span>admin</span></a></li>
		  						 		<li><a href="insert"><small class="no"> </small><span>comments</span></a></li>
		  						 		<li><a href="#"><small class="posts"> </small><span>View posts</span></a></li>
		  						 		<li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
		  						 	</ul>
		  						 </div>
						<div class="respon">
							<h2>Responses so far</h2>
							<div class="strator">
								<h5>{{$comment->name}}</h5>
								<p>feb 20th, 2015 at 9:41 pm</p>
									<div class="strator-left">
										<img src="images/co.png" class="img-responsive" alt="">
									</div>
									<div class="strator-right">
										<p>{{$comment->message}} </p>
									</div>
								<div class="clearfix"></div>
								<div class="rep">
									<a href="#" class="reply">REPLY</a>
								</div>
							</div>
							<br>
							<div class="strator">
								<h5>{{$comment->name}}</h5>
								<p>feb 20th, 2015 at 9:41 pm</p>
								<div class="strator-left">
									<img src="images/co.png" class="img-responsive" alt="">
								</div>
								<div class="strator-right">
									<p>{{$comment->message}} </p>
								</div>
								<div class="clearfix"></div>
								<div class="rep">
									<a href="#" class="reply">REPLY</a>
								</div>
							</div>
							<div class="comment">
								<h2>Leave a comment</h2>
								<form method="post" action="save">
								 <input type="text" name="name" class="textbox" placeholder="Name">
								 <input type="text" name="email" class="textbox" placeholder="Email">
								  <input type="text" name="phone" class="textbox" placeholder="Phone No">
								 <textarea placeholder="Message:" name="message" ></textarea>
									<input type="hidden"  name="_token" value="{{csrf_token()}}">
									<input type="hidden" name="post_id" value="1">
								 <div class="smt1">
									<input type="submit" value="add a comment" name="submit">
								 </div>
							   </form>
							</div>
						</div>
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
<!-- content -->
</div>
@stop