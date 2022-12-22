@if ($paginator->hasPages())
<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center mt-2">
        @if (!$paginator->onFirstPage())
            <li class="page-item prev"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Prev</a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="page-item"><a class="page-link" href="#">{{$element}}</a></li>
            @endif
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active"><a class="page-link" href="#">{{$page}}</a></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{$page}}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if (!$paginator->onFirstPage())
            <li class="page-item next"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a></li>
        @endif
    </ul>
</nav>
@endif
