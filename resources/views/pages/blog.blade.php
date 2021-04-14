@extends('layouts.index')

@section('content')
    <section class="site-section-small section-blog">

        <div class="container">

            <div class="text-center">

                <h1 class="section-title-big"> {{ $title }} </h1>
                <p class="section-text">{{ $descr }} </p>
            
            </div>

            <ol class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Blog</li>
            </ol><!-- /.breadcrumb -->

            <div class="row">

                <div class="col-md-9">

                    <!-- start forEach --> 

                    @foreach ($articles as $article)
                        <div class="blog-post">

                            <a href="blog-post.html"><img class="img-carousel post-img" src={{asset($article->imgurl)}} alt=""></a>

                            <div class="post-content">

                                <h3><a class="post-title" href="blog-post.html">{{ $article->titre }} </a></h3>

                                        
                                <p class="section-text">{{ $article->description }} </p>
                                
                            </div><!-- /.post-content -->

                        </div><!-- /.blog-post -->
                    @endforeach


                    <!-- end --> 
                </div>
            </div>
        </div>
        
    </section><!-- /.section-blog -->

    
    @include('contents.icone')


@endsection