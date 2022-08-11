@extends('layouts.app')


@section('content')
<div class="section">
	<div class="container">
			<h1 class="ml-3 mt-3 sdl-h1 font-weight-normal text-dark" style="line-height:3rem">
			<b>{{ $category->name }}</b>
			{{--<br>{{ lang('Category Meta') }}</span>--}}
			</h1>
		</div>
	</div>
	
</div>
<div class="section mt-5">    
	<div class="container px-5">
		@forelse($articles as $article)
		<div class="row my-5">
			<div class="col-md-6 
			@if($loop->index % 2 == 0)
			order-first
			@else
			order-md-last
			@endif
			">
				@if($article->page_image)
              		<a class="media-left " href="{{ url($article->slug) }}">
                   		<img class="img-fluid rounded-xlg w-100 h-auto" alt="{{ $article->slug }}" src="{{ $article->page_image }}" data-holder-rendered="true">
               		</a>
				@endif
			</div>
			<div class="col-md-6 border-0 card">
				<div class="card-body">
					<h5 >
						<a href="{{ url($article->slug) }}">
							{{ $article->title }}
						</a>
					</h5>
					<h6 class="card-subtitle mb-2 text-muted"> {{ $article->subtitle }}</h6>
					<p class="card-text">{{ $article->meta_description }}</p>
				</div>
				<div class="card-footer bg-transparent border-0 
				@if($loop->index % 2 == 0)
				text-md-right 
				@endif
				"><a href="{{ url($article->slug) }}" class="btn btn-primary rounded-pill">Saiba mais</a></div>
			</div>	
				
					{{--<span class="badge badge-secondary float-right">{{ $article->comments->count() }}</span>--}}
						
				
		</div>
		@empty
		<div class="row">
			<div class="col">{{ lang('Nothing') }}</div>
		</div>
		@endforelse
        
	</div>
</div>
@endsection

@section('scripts')

@endsection
