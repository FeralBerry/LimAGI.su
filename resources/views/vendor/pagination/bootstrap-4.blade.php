@if ($paginator->hasPages())
    <nav>
        <ul class="pager">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="page-prv page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <a title="Previous"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Previous Event</a>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')"><i class="fa fa-long-arrow-left" aria-hidden="true"></i>Previous Event</a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="page-item disabled" aria-disabled="true"><span class="page-link" style="font-size: 20px">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><span class="page-link" style="color:rgba(254,202,22,0.75);font-size: 24px">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" style="font-size: 20px" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li class="page-next page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">Next Event<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                </li>
            @else
                <li class="page-next page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span class="page-link" aria-hidden="true">Next Event<i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                </li>
            @endif
        </ul>
    </nav>
@endif
