@extends('layout.app')

@section('content')
    <main>
        <header class="hero">

        </header>
    <div class="container">
        <div class="content">
            <section class="article">
                @foreach($allArticles as $article)
                    <article>
                    <h2>{{ $article->title }}</h2>
                    <p>{{ $article->content }}</p>
                    {{ $article->category->name }}
                </article>
                @endforeach
            </section>

                <div class="hot-articles">
                    <h3>HOT POSTS</h3>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eaque minima eum error, totam porro laudantium nemo commodi fugit quidem facere aspernatur repellendus consequuntur modi hic quasi itaque suscipit esse!
                </div>
        </div>
    </div>

    </main>
@endsection