@if ($paginator->hasPages())
    {{-- Previous Page Button --}}
    @if ($paginator->onFirstPage())
        <span class="paginate_button not_button">
            <
        </span>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="paginate_button">
            <
        </a>
    @endif
    {{-- Pagination Elements --}}
    @foreach ($elements as $element)
        {{-- "Three Dots" Separator --}}
        @if (is_string($element))
            <span class="paginate_button">
                {{ $element }}
            </span>
        @endif

        {{-- Array Of Buttons --}}
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                    <span class="paginate_button active_button">
                        {{ $page }}
                    </span>
                @else
                    <a href="{{ $url }}" class="paginate_button">
                        {{ $page }}
                    </a>
                @endif
            @endforeach
        @endif
    @endforeach
    {{-- Next Page Button --}}
    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="paginate_button">
            >
        </a>
    @else
        <span class="paginate_button not_button">
            >
        </span>
    @endif
@endif


