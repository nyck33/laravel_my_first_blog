@extends('layouts.master')

@section('title')
    Sustainable Training and Nutrition
@endsection

@section('content')
 <main role="main" class="container"  style="margin-top: 5px">

        <div class="row">

            <div class="col-sm-8 blog-main">
                <h1 style="text-align:center;">Sustainable Training and Nutrition</h1>
                <div class="blog-post">
                    <h2 class="blog-post-title">Welcome Message</h2>
                    <p class="blog-post-meta"><small><i>January 4, 2019 <a href="#">Nobu</a></i></small></p>

                    <p>Welcome to my blog on sustainable training and nutrition <a href="#">We will discuss training and nutrition good for you and the planet</a> because our goal is to live in harmony with nature as the omnipotent being in the biosphere.  Get strong and fit while keeping your ecofootprint minimal. </p>
                    <blockquote>
                        <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong>
                            ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula
                            ut id elit... <a href="" class="btn btn-primary btn-sm">Learn more</a> </p>
                    </blockquote>
                </div><!-- /.blog-post -->

                <div class="blog-post">
                    <h2 class="blog-post-title">Post Two</h2>
                    <p class="blog-post-meta"><small><i>December 14, 2013 by <a href="#">Evans</a></i></small></p>

                    <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                        Aenean lacinia bibendum nulla sed consectetur. Etiam porta
                        euismod. Fusce dapibus... <a href="" class="btn btn-primary btn-sm">Learn more</a> </p>
                </div><!-- /.blog-post -->

                <nav class="blog-pagination">
                    <a class="btn btn-outline-primary" href="#">Older</a>
                    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module">
                    <h4>Latest Posts</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">March 2017</a></li>
                        <li><a href="#">February 2017</a></li>
                        <li><a href="#">January 2017</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>
                <div class="sidebar-module">
                    <h4>Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="https://github.com/nyck33">GitHub</a></li>
                        <li><a href="https://twitter.com/Nobucoach31">Twitter</a></li>
                        <li><a href="https://www.facebook.com/profile.php?id=100011150493325">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection   
