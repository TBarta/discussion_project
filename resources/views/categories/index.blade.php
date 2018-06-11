@extends('questions/layout')
 
@section('content')
 
    <section id="banner">
        <div class="container">
            <h1>Categories</h1>
        </div>
    </section>
 
    <section id="categories">
        <div class="container">
            <ul class="list-group">
                @foreach($categories as $category)
                    <li class="list-group-item">
                        {{ $category->name }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
 
@endsection