@extends('layouts.app')

@section('title', $article->title)

@section('content')

<div class="section">
    <div class="container py-4 ">
        <div class="row">
            <div class="container col-md-9 ">
                 
                <div class=" text-left">
                    <h1 class="text-black">{{ $article->title }}</h1>
                    
                    <h5>{{ $article->category->name }}</h5>
                    <h6>{{ $article->meta_description }}</h6>
                    {{--
                    <div class="header">
                        <i class="fas fa-user"></i>{{ $article->user->name ?? 'null' }}  &nbsp;
                        @if(count($article->tags))
                        <i class="fas fa-tags"></i>
                            @foreach($article->tags as $tag)
                                <a href="{{ url('tag', ['tag' => $tag->tag]) }}">{{ $tag->tag }}</a> &nbsp;
                            @endforeach
                        @endif
                        <i class="fas fa-clock"></i>{{ $article->published_at->diffForHumans() }} 
                    </div> --}}
                </div>
                <div class="my-4 text-center">
                    <img class=" img-fluid  rounded-xlg" alt="{{ $article->slug }}" src="{{ $article->page_image }}"  >
                </div> 
                <div class="text-justify ">
                    <parse content="{{ $article->content['raw'] }}"></parse>
                    @if($article->is_original)
                        @endif
                        @if(config('blog.social_share.article_share'))
                        <div class="footing mt-2">
                            <div class="social-share"
                                data-title="{{ $article->title }}"
                                data-description="{{ $article->title }}"
                                {{ config('blog.social_share.sites') ? "data-sites=" . config('blog.social_share.sites') : '' }}
                                {{ config('blog.social_share.mobile_sites') ? "data-mobile-sites=" . config('blog.social_share.mobile_sites') : '' }}
                                initialized></div>
                        </div>
                        @endif
                    </div>
                
                    {{--
                    <comment title={{ lang('Comments') }}
                        commentable-type="articles"
                        commentable-id="{{ $article->id }}"
                        @can('comment',$article)
                        username="{{ Auth::user()->name }}"
                        user-avatar="{{ Auth::user()->avatar }}"
                        can-comment
                        @endcan
                    ></comment>
                    --}}
                </div>

            <div class="col-md-3"> @include('particals.blogmenu')</div>
        </div>
    
    </div>
</div>

@endsection

@section('scripts')
    <script>
        hljs.initHighlightingOnLoad();
    </script>
@endsection
