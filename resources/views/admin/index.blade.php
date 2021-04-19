@extends('layouts.index')


@section('content')
<section class="site-section-small section-blog">

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="text-danger"><a href={{route('admin')}}> Admin</a></li>
        </ol><!-- /.breadcrumb -->


        <div>
            <a href={{route('addblog')}}><button class="btn">BLOG + post</button></a> 

            <a href={{route('addportfolio')}}><button class="btn">Porfolio + project</button></a> 

            <a class="btn" href={{route('allBlog')}}>BLOG - post </a>

            <a class="btn" href={{route('allPortfolio')}}>PORTFOLIO - post</a>

        </div>

    </div>

</section>


@endsection