@if ($paginator->hasPages())
    <ul class="w3-center w3-padding-hor-12">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())

        @else
            <li class="w3-btn midnight-blue w3-round"><a class="w3-button" href="{{ $paginator->previousPageUrl() }}" rel="prev">&#10094; قبل</a></li>

        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li   disabled class="w3-btn pagination-item w3-round"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="w3-btn midnight-blue w3-round"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="w3-btn pagination-item w3-round"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="w3-btn midnight-blue w3-round"><a class="w3-button w3-right" href="{{ $paginator->nextPageUrl() }}" rel="next">بعد &#10095;</a></li>
        @else

        @endif
    </ul>
@endif
