<header>
    <nav class="navbar-wrapper">
        <!-- Wrap the .navbar in .container to center it within the absolutely positioned parent. -->
        <div class="container">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <!-- Responsive Navbar Part 1: Button for triggering responsive navbar. Include responsive CSS to utilize. -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><span class="c4mred">Code</span> <span class="c4mblue">For Miami</span></a>
                    <!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="http://codeformia.tumblr.com">Blog</a></li>
                            <li class="dropdown" id="menu-events">
                                <a href="#menu-events" class="dropdown-toggle" data-toggle="dropdown">Events<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="http://www.meetup.com/Code-for-Miami/"><i class="icon-calendar"></i>Our Meetup</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown" id="menu-contact">
                                <a href="#menu-contact" class="dropdown-toggle" data-toggle="dropdown">Contact<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="#contact"><i class="icon-pencil"></i>Email Us</a>
                                    </li>
                                    <li>
                                        <a href="http://eepurl.com/N_QIT"><i class="icon-envelope"></i>Email Newsletter</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
                            <li class="dropdown" id="menu-resources">
                                <a href="#menu-resources" class="dropdown-toggle" data-toggle="dropdown">Resources<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="http://cfmi-live.poplar.phl.io/"><i class="icon-wrench"></i>Our Projects Page (BETA)</a>
                                    </li>
                                    <li>
                                        <a href="https://skymob.co/rooms/zsxbvw"><i class="icon-comment"></i>Our Chat Room (BETA)</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="https://facebook.com/codeformiami"><i class="icon-comment"></i>Our Facebook Page</a>
                                    </li>
                                    <li>
                                        <a href="https://groups.google.com/forum/#!forum/code-for-miami"><i class="icon-comment"></i>Our Google Groups Forum</a>
                                    </li>
                                    <li>
                                        <a href="http://www.meetup.com/code-for-miami/"><i class="icon-user"></i>Our Gatherings on Meetup</a>
                                    </li>
                                    <li>
                                        <a href="https://twitter.com/codeformiami"><i class="icon-retweet"></i>Our Twitter Account (@codeformiami)</a>
                                    </li>
                                    <li>
                                        <a href="https://github.com/code-for-miami"><i class="icon-wrench"></i>Our Code on GitHub</a>
                                    </li>
                                    <li>
                                        <a href="http://codeformiami.uservoice.com/"><i class="icon-thumbs-up"></i>Idea List for Civic Apps and Open Data</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="https://twitter.com/search?q=%23cfabrigade"><i class="icon-retweet"></i>#cfabrigade - National Tweets</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown" id="menu-projects">
                                <a href="http://cfmi-live.poplar.phl.io/">Projects (BETA)</a>
                            </li>
                        </ul>
                        <ul class="nav pull-right language-menu">
                            <li class="divider-vertical"></li>
                            <li>
                                <a href="http://es.codeformiami.org">Español</a>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div><!-- /.navbar-inner -->
            </div><!-- /.navbar -->
        </div> <!-- /.container -->
    </nav><!-- /.navbar-wrapper -->


    <!-- fork me banner, top right
    ================================================== -->
    <a class="forkme" href="https://github.com/Code-for-Miami/code-for-miami.github.io"><img style="position: absolute; top: 0; right: 0; border: 0; z-index: 100;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_gray_6d6d6d.png" alt="Fork me on GitHub"></a>

    <!-- Carousel - only using one at the moment
    ================================================== -->
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <img src="http://www.codeformiami.org/images/carousel/Miami1.jpg" alt="MacArthur Causeway | Miami" />
                <div class="container">
                    <div class="carousel-caption">
                        <h1>We Are Code For Miami.</h1>
                        <p class="lead">
                            Come join developers, designers, data geeks, leaders, and idea-makers who volunteer to help Miami-Dade government and civic orgs adopt open web technologies.
                        </p>
                        <a class="btn btn-large btn-primary" href="http://www.meetup.com/Code-for-Miami/">Stop By Our Meetups</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://www.codeformiami.org/images/carousel/Miami2.jpg" alt="American Airlines Arena | Downtown Miami" />
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Join the Movement.</h1>
                        <p class="lead">
                            We are looking for creatives, developers, designers and writers to support our movement.
                        </p>
                        <a class="btn btn-large btn-primary" href="http://www.meetup.com/Code-for-Miami/">Stop By Our Meetups</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="http://www.codeformiami.org/images/carousel/Miami3.jpg" alt="Downtown Miami Skyline" />
                <div class="container">
                    <div class="carousel-caption">
                        <h1>Want to Learn More?</h1>
                        <p class="lead">
                            We meet weekly at The Lab Miami in Wynwood. 
                        </p>
                        <a class="btn btn-large btn-primary" href="http://www.meetup.com/Code-for-Miami/">Stop By Our Meetups</a>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.carousel -->
</header>