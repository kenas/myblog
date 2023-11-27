@extends('layout.app')

@section('content')
    <div class="hero">
  
    </div>
    <div class="container">
        <div class="content">
            <article class="articles">
                @foreach($allArticles as $article)

                    <h2>{{ $article->title }}</h2>
                    <p>{{ $article->content }}</p>
                    {{ $article->category->name }}

                @endforeach
            </article>

                <div class="hot-articles">
                    <h3>HOT POSTS</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eaque minima eum error, totam porro laudantium nemo commodi fugit quidem facere aspernatur repellendus consequuntur modi hic quasi itaque suscipit esse!
                </div>
        </div>
    </div>
@endsection