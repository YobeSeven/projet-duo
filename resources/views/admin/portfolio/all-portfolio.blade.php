@extends('layouts.index')

@section('content')
<section class="site-section-small section-blog">

    <div class="container">
        
        <ol class="breadcrumb">
            <li><a href={{route('home')}}>Home</a></li>
            <li class="text-danger"><a href={{route('admin')}}> Admin</a></li>
            <li>portfolio</li>
            <li>All </li>
            <li class="active">Delete</li>
        </ol>


        @foreach ($projets as $projet)
            <div>
                <p>{{$projet->titre}}</p>
                <form action={{route('deletePortfolio', $projet->id)}} method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-small btn-yellow">SUPPRIMER</button>
                </form>
                <a class="btn bg-danger" href={{route('editPortfolio', $projet->id)}}>EDITER</a>
            </div>
            <hr>
        @endforeach
    </div>
</section>
@endsection