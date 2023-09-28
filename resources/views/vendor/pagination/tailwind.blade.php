@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-between">
        <ul class="pagination">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li aria-disabled="true" aria-label="@lang('pagination.previous')" class="disabled">
                    <span aria-hidden="true" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')" class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0L15 8.586V11a1 1 0 11-2 0V9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 010-1.414l-4-4a1 1 0 010-1.414a1 1 0 011.414 0L15 6.586V4a1 1 0 112 0v2.586l3.293-3.293a1 1 0 111.414 1.414l-4 4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            @endif

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')" class="relative inline-flex items-center px-4 py-2 ml-1 text-sm font-medium text-gray-700 bg-white border border-gray-300 leading-5 hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0L15 8.586V11a1 1 0 11-2 0V9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 010-1.414l-4-4a1 1 0 010-1.414a1 1 0 011.414 0L15 6.586V4a1 1 0 112 0v2.586l3.293-3.293a1 1 0 111.414 1.414l-4 4z" clip-rule="evenodd"></path>
                        </svg>
                    </a>
                </li>
            @else
                <li aria-disabled="true" aria-label="@lang('pagination.next')" class="disabled">
                    <span aria-hidden="true" class="relative inline-flex items-center px-2 py-2 ml-1 -mr-px text-sm font-medium text-gray-500 bg-white border border-gray-300 cursor-default leading-5">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7 7-7m8 14l-7-7 7-7"></path>
                        </svg>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
