@extends('layouts.index')

@section('content')

<section class="site-section-small section-blog">

    <div class="container">
        @foreach ($articles as $article)
            <div>
                <p>{{$article->titre}}</p>
                <form action={{route('deleteBlog', $article->id)}} method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-small btn-yellow">SUPPRIMER</button>
                </form>
            </div>
            <hr>
        @endforeach
    </div>
</section>




@endsection