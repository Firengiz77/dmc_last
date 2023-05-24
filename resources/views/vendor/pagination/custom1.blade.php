@if ($paginator->hasPages())
<div class="col-lg-12">
                        <ul class="pagination">
                        @if ($paginator->onFirstPage())
                            <li class="page-item disabled" aria-disabled="true"><a href="#"><i class="icon-chevron-left"></i></a></li>
                            @else
                            <li><a href="{{ $paginator->previousPageUrl() }}"><i class="icon-chevron-left"></i></a></li>
                         @endif


                      
            @foreach ($elements as $element)
            
                @if (is_string($element))
                    <li><a>{{ $element }}</a></li>
                @endif
           
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active" aria-current="page"><a class="page-link">{{ $page }}</a></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

                     
            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
               
                <li><a href="{{ $paginator->nextPageUrl() }}"><i class="icon-chevron-right"></i></a></li>
            @else
                <li > <a href="">
                <i class="icon-chevron-right"></i>
                </a>
                </li>
            @endif

                           



                        </ul>
                    </div>
@endif
