    <nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="navbar-header">
                
                <a href="index.html" class="site-title yellow-text">Business Perfect</a>

            </div><!-- /.navbar-header -->

            <div class="main-menu" id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="index.html">Home</a></li>
                    <li>
                        <a href="blog.html">Blog </a>
                    </li>
                    <li>
                        <a href="portfolio.html">Portfolio</a>                                
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li> 
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            
        </div>

    </nav><!-- /.site-navigation -->
    
</header><!-- /#masthead -->

@if ((request()->path()=="/") || (request()->path()=="contact"))
    <div class="hero background-overlay">

        <div class="hero-text">
            @yield('hb')
        </div> <!-- /.hero-text -->
        <div class="hero-arrow">
            <a class="scrollTo" href="#"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
        </div><!-- /.hero-arrow -->

    </div><!-- /.hero -->
@endif
