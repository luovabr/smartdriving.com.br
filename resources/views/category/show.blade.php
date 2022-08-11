@extends('layouts.app')
@section('title', $category->name)
@section('content')
 {{--  @component('particals.jumbotron')
        <h3>{{ $category->name }}</h3>

        <h6>{{ lang('Category Meta') }}</h6>
    @endcomponent

    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <ul class="list-group">
                    @forelse($articles as $article)
                        <li class="list-group-item">
                            <span class="badge badge-secondary float-right">{{ $article->comments->count() }}</span>
                            <a href="{{ url($article->slug) }}">{{ $article->title }}</a>
                        </li>
                    @empty
                        <li class="list-group-item">{{ lang('Nothing') }}</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
    --}}

<div class="container ">
    <div class="row ">
        <div class="col-md-9 ">
            <div class=" text-left px-md-5 ">
                <h1 class="text-black">{{  $category->name }}</h1>
                
                <h6>{{ lang('Category Meta') }}</h6>
            </div>
            @forelse($articles as $article)
            <div class="px-md-5 row">
                <div class=" w-100 my-3">
                    @if($article->page_image)
                    <a class="" href="{{ url($article->slug) }}">
                        <img class="img-fluid rounded-xlg" alt="{{ $article->slug }}" src="{{ $article->page_image }}" data-holder-rendered="true">
                    </a>
                    @endif
                </div>
                <div class=" w-100 my-3">
                    <h4 class="media-heading">
                        <a href="{{ url($article->slug) }}">
                            {{ $article->title }}
                        </a>
                    </h4>
                    {{--<div class="meta">
                            <span class="cinema">{{ $article->subtitle }}</span>
                        </div>--}}
                        <div class="description">
                            <h6>{{ $article->meta_description }}</h6>
                        </div>
                        <div class="extra">
                            @foreach($article->tags as $tag)
                            {{-- a href url('tag', ['tag' => $tag->tag]) --}}
                            <i class="fas fa-tag"></i> {{ $tag->tag }}
                            @endforeach

                            <div class="info">
                            {{--<i class="fas fa-user"></i>{{ $article->user->name ?? 'null' }}&nbsp; &nbsp;
                                <i class="fas fa-clock"></i>{{ $article->published_at->diffForHumans() }}&nbsp; &nbsp;
                                <i class="fas fa-eye"></i>{{ $article->view_count }}
                                <i class="fas fa-comments"></i>{{ $article->comments->count() }}--}}
                                <a href="{{ url($article->slug) }}" class="float-right">
                                {{ lang('Read More') }} <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                
                @empty
                    <h3 class="text-center">{{ lang('Nothing') }}</h3>
                @endforelse
                   
        </div>
        <div class="col-md-3">
            @include('particals.blogmenu')
        </div>
    </div>
</div>

@endsection