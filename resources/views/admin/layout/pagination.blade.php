@if ($paginator->hasPages())
    <ul class="pagination">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                <span class="page-link" aria-hidden="true">&lsaquo;</span>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                    aria-label="@lang('pagination.previous')">&lsaquo;</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span>
                </li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span
                                class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                    aria-label="@lang('pagination.next')">&rsaquo;</a>
            </li>
        @else
            <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                <span class="page-link" aria-hidden="true">&rsaquo;</span>
            </li>
        @endif
    </ul>
@endif

<style>
    .pagination {
        display: flex;
        justify-content: auto;
        list-style: none;
        padding: 0;
    }

    .darkmode .pagination {
        display: flex;
        justify-content: auto;
        list-style: none;
        padding: 0;
        color: #fff;
    }

    .pagination li {
        margin: 0 5px;
    }

    .pagination a {
        color: #333;
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .darkmode .pagination a {
        color: #fff;
        text-decoration: none;
        padding: 5px 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .pagination a:hover {
        background-color: #eee;
    }

    .darkmode .pagination a:hover {
        background-color: #fff;
    }

    .pagination .active a {
        color: #fff;
    }

    .darkmode .pagination .active a {
        color: #fff;
    }

    .pagination .page-item.active .page-link {
        /* Ganti dengan warna yang diinginkan */
        border-color: #eee;
        /* Ganti dengan warna yang diinginkan */
        color: #333;
        /* Ganti dengan warna teks yang sesuai */
    }

    .darkmode .pagination .page-item.active .page-link {
        /* Ganti dengan warna yang diinginkan */
        border-color: #eee;
        /* Ganti dengan warna yang diinginkan */
        color: #fff;
        /* Ganti dengan warna teks yang sesuai */
    }
</style>
