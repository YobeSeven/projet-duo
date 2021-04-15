@extends('layouts.index')


@section('content')
<section class="site-section-small section-blog">

    <div class="container">

        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="text-danger">Admin</li>
        </ol><!-- /.breadcrumb -->


        <a href={{route('addblog')}}><button class="btn">BLOG + post</button></a> 

         <a href={{route('addportfolio')}}><button class="btn">Porfolio + project</button></a> 
        

    </div>

</section>
@endsection