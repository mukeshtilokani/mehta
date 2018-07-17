@if ($breadcrumbs)
    <ul class="breadcrumb bg-white push">
        @foreach ($breadcrumbs as $breadcrumb)
            @if (!$breadcrumb->last)
                <li>
                    @if ($breadcrumb->first)
                        <i class="icon-home"></i>
                    @endif
                    <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    <i class="fa fa-angle-right"></i>
                </li>
            @else
                <li>
                    @if ($breadcrumb->first)
                        <i class="icon-home"></i>
                    @endif
                    @if(isset($breadcrumb->parents))
                        @foreach($breadcrumb->parents as $value)
                            <li class="active pagewise-breadcrumb">{{{$value}}}<i class="fa fa-angle-right"></i></li>    
                        @endforeach
                    @endif
                    <span>{{ $breadcrumb->title }}</span>
                </li>
            @endif
        @endforeach
    </ul>
@endif
