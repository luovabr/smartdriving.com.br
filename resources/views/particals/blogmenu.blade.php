<div class=" text-center "><span class="text-black font-weight-bold"><h4>{{ lang('Categories') }}</h4></span></div>

{{--<span>{{ lang('Categories Meta') }}</span>--}}
<ul class="list-group  mt-2">
    @forelse($categories as $category)
        <li class="list-group-item border-0 py-1">
            <span class="badge badge-secondary badge-pill float-right">{{ $category->articles->count() }}</span>
            <a class="text-black font-weight-normal" href="{{ url('category', ['name' => $category->name]) }}">{{ $category->name }}</a>
        </li>
    @empty
        <li class="list-group-item">{{ lang('Nothing') }}</li>
    @endforelse
</ul>