@extends('layout.app')

@section('content')
    <main>
        
        <header class="hero">
            <div class="container">
                <div class="current-article-container">
                    <article>
                        <h1>Beatae, odio vel vitae facere expedita</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus repudiandae doloremque cum libero harum dolore suscipit officia sed explicabo a, error velit culpa laborum distinctio incidunt beatae voluptatibus! Repellendus, quae.</p>
                    </article>

                    <a href="">read more</a>
                </div>
        </header>
   <div class="container">
        <section class="content">

            <section class="article">

                @foreach($allArticles as $article)
                    <article>
                    <h2>{{ $article->title }}</h2>

                        <picture>
                            <img src="{{ url('assets/img/ilustrative/realLife/real-life.jpeg')}}" alt="">
                        </picture>
                    
                        <div class="info-wraper">
                            <div class="info-article">
                                <div class="icon">
                                    <i class="fa-regular fa-heart fa-xl"></i>
                                </div>
                                <p>
                                    {{ $article->category->name }}
                                </p>
                            </div>
                            <p>
                                {{ $article->created_at->format('d/m/Y') }}
                            </p>
                        </div>
                    <p>{{ $article->content }}</p>
                   

                    <a href="">read more</a>
                </article>
                @endforeach
            </section>

            <div class="hot-articles">
                <h3>HOT POSTS</h3>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni eaque minima eum error, totam porro laudantium nemo commodi fugit quidem facere aspernatur repellendus consequuntur modi hic quasi itaque suscipit esse!
            </div>
        </section>
   </div>


    </main>
@endsection