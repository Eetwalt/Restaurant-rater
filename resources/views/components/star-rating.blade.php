@props(['rating'])

<div class="flex items-center group">
    <div class="relative inline-block">
        <div class="flex">
            @for ($i = 1; $i <= 5; $i++)
                <span class="relative inline-block">
                    <svg class="w-5 h-5 text-gray-300"
                         fill="currentColor"
                         viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    @if ($rating >= $i)
                        <svg class="absolute top-0 left-0 w-5 h-5 text-yellow-400"
                             fill="currentColor"
                             viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @elseif ($rating > $i - 1)
                        <svg class="absolute top-0 left-0 w-5 h-5 text-yellow-400"
                             fill="currentColor"
                             viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="grad{{ $i }}">
                                    <stop offset="{{ ($rating - $i + 1) * 100 }}%" stop-color="currentColor"/>
                                    <stop offset="{{ ($rating - $i + 1) * 100 }}%" stop-color="transparent" stop-opacity="1"/>
                                </linearGradient>
                            </defs>
                            <path fill="url(#grad{{ $i }})" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endif
                </span>
            @endfor
        </div>
    </div>
    <div class="relative ml-2">
        <div class="absolute left-0 z-10 px-2 py-1 -mt-2 text-xs text-white transition-opacity bg-gray-900 rounded opacity-0 group-hover:opacity-100 whitespace-nowrap">
            {{ number_format($rating, 1) }} average
        </div>
    </div>
</div>
