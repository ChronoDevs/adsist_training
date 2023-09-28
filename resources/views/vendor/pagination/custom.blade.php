@if ($paginator->hasPages())
    <nav>
        <ul class="pager flex_box">
            {{-- Previous Page Link --}}
            <li class="tostart_btn">
                <a href="{{ !$paginator->onFirstPage()? $paginator->url(1) : 'javascript:void(0)' }}">
                    <img src="{{ asset('/img/arrow_left_double.png') }}">
                </a>
            </li>
            <li class="prevbtn">
                <a href="{{ !$paginator->onFirstPage()? $paginator->previousPageUrl() : 'javascript:void(0)' }}">
                    <img src="{{ asset('/img/arrow_left_g.png') }}">
                    <span>前へ</span>
                </a>
            </li>

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="current"><a class="futura">{{ $page }}</a></li>
                        @else
                            <li><a class="futura" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            <li class="nextbtn">
                <a href="{{ $paginator->hasMorePages()? $paginator->nextPageUrl() : 'javascript:void(0)' }}">
                    <span>次へ</span>
                    <img src="{{ asset('/img/arrow_right_g.png') }}">
                </a>
            </li>
            <li class="toend_btn">
                <a href="{{ $paginator->hasMorePages()? $paginator->url($paginator->lastPage()) : 'javascript:void(0)' }}">
                    <img src="{{ asset('/img/arrow_right_double.png') }}">
                </a>
            </li>
        </ul>
    </nav>
@endif
