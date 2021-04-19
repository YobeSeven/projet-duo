@extends('layouts.index')

@section('content')

<section class="site-section-small section-blog">

    <div class="container">

        <ol class="breadcrumb">
            <li><a href={{route('home')}}>Home</a></li>
            <li class="text-danger"><a href={{route('admin')}}> Admin</a></li>
            <li>Blog</li>
            <li>All </li>
            <li class="active">Delete</li>
        </ol>

        <div class="row shuffle">

            @foreach ($articles as $article)
                <div class="col col-lg-fifth col-md-3 col-sm-4 col-xs-6 shuffle-item filtered mb-10">
                    <p>{{$article->titre}}</p>
                    <form action={{route('deleteBlog', $article->id)}} method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-small btn-yellow">SUPPRIMER</button>
                    </form>
                </div>
            @endforeach

        </div>
    </div>
</section>




@endsection