<!DOCTYPE HTML>
<html>
<head>
    <title>Blog Template</title>
    @include('layouts.includes.css')
    @include('layouts.includes.meta')

</head>
<body>
<!-- header -->
<div class="header">
    <div class="container">
        <div class="logo">

        </div>

        <div class="head-nav">
            <span class="menu"> </span>
            <ul class="cl-effect-1">


                <li><a href="{{Route('blog')}}">Blog</a></li>





                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    {{ Auth::user()->name }}<a style="color: white" href="{{ route('logout') }}">Logout</a>
                @endif


            </ul>
        </div>
        <!-- script-for-nav -->

        <!-- script-for-nav -->



        <div class="clearfix"> </div>
    </div>
</div>
<!-- header -->



    @yield('pageContent')



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
    @include('layouts.includes.js')

</div>
</div>
</body>
</html>


