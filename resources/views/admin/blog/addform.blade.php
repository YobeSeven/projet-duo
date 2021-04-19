@extends('layouts.index')

@section('content')
<section class="site-section-small section-blog">

    <div class="container">

        <ol class="breadcrumb">
            <li><a href={{route('home')}}>Home</a></li>
            <li class="text-danger"><a href={{route('admin')}}> Admin</a></li>
            <li>Blog</li>
            <li class="active">Add</li>
        </ol>


        <form action={{route('postaddblog')}} method="POST">
            @csrf
            <label for="titre">Titre</label>
            <br>
                <input type="text" name="titre">
            <br/>

            <label for="imgurl">Lien vers l'image:</label>
            <br>
                <input type="text" name="imgurl" /> 

            <br/>

            <label for="desc">Description</label>
            <br>
                <textarea name="desc" cols="30" rows="10"></textarea>

            <br/>

            <input type="submit" value="envoyer >> ">
        </form>

@endsection
