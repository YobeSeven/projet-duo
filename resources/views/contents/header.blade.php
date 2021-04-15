@if(((request()->path()=="/") || (request()->path()=="contact")))
    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">
@else
    <header id="masthead" class="site-header site-header-fill">
@endif
<nav id="primary-navigation" class="site-navigation">

        <div class="container-fluid">

            <div class="navbar-header">
                
                <a href="index.html" class="site-title yellow-text">Business Perfect</a>

            </div><!-- /.navbar-header -->

            <div class="main-menu" id="perfect-navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="{{ request()->path() === '/' ? 'active' : ''}}">
                        <a href={{route('home')}}>Home</a></li>
                    <li class="{{ request()->path() === 'blog' ? 'active' : ''}}">
                        <a href={{route('blog')}}  >Blog </a>
                    </li>
                    <li class="{{ request()->path() === 'portfolio' ? 'active' : ''}}">
                        <a href={{route('portfolio')}}>Portfolio</a>                                
                    </li>
                    <li class="{{ request()->path() === 'contact' ? 'active' : ''}}">
                        <a href={{route('contact')}}  >Contact</a>
                    </li> 
                </ul><!-- /.navbar-nav -->
            </div><!-- /.navbar-collapse -->
            
        </div>

    </nav><!-- /.site-navigation -->
</header>
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
