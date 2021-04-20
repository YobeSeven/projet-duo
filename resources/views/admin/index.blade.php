@extends('layouts.index')


@section('content')
<section class="site-section-small section-blog">

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="text-danger"><a href={{route('admin')}}> Admin</a></li>
        </ol><!-- /.breadcrumb -->


        <div>
            <a href={{route('addblog')}}><button class="btn">BLOG "ajout"</button></a> 

            <a href={{route('addportfolio')}}><button class="btn">PORTFOLIO "ajout"</button></a> 
        </div>
        

        <div>
            <a class="btn" href={{route('allBlog')}}>BLOG "EDIT&SUPPR" </a>
            <a class="btn" href={{route('allPortfolio')}}>PORTFOLIO "EDIT&SUPPR" </a>
        </div>

    </div>

</section>


@endsection