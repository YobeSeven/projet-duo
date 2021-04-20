@extends('layouts.index')

@section('content')
<section class="site-section-small section-blog">

    <div class="container">

        <form action={{route('updateBlog', $article->id)}} method="POST">
            @csrf
            @method('PUT')
            <label for="titre">Titre</label>
            <br>
                <input type="text" name="titre" value="{{$article->titre}}">
            <br/>

            <label for="imgurl">Lien vers l'image:</label>
            <br>
                <input type="text" name="imgurl" value="{{$article->imgurl}}" /> 

            <br/>

            <label for="desc">Description</label>
            <br>
                <textarea name="desc" cols="30" rows="10">{{$article->description}}</textarea>

            <br/>

            <input type="submit" value="envoyer >> ">
        </form>

    </div>
</section>
@endsection