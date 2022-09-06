 <x-app-layout>
     <x-slot:header>
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Posts List') }}
         </h2>
     </x-slot:header>
     <div class="p-10 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
         <!--Card 1-->
         @foreach ($posts as $post)
             <div class="rounded overflow-hidden shadow-lg">
                 <img src="{{ url('/storage/' . $post->img) }}" class="w-full" />
                 <div class="px-6 py-4">
                     <div class="font-bold text-xl mb-2">{{ $post->title }}</div>
                     <p class="text-gray-700 text-base">
                         {{ $post->category->name }}
                     </p>
                 </div>
                 <div class="px-6 pt-4 pb-2">
                     @foreach ($post->tags as $tag)
                         <span
                             class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $tag->name }}</span>
                     @endforeach

                 </div>
                 <a href="{{ route('posts.show', $post->id) }}"
                     class="inline-flex items-center ml-6 mb-4 py-2 px-3 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                     Read more
                     <svg aria-hidden="true" class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                         <path fill-rule="evenodd"
                             d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                             clip-rule="evenodd"></path>
                     </svg>
                 </a>
             </div>
         @endforeach

     </div>
     </div>
     </x-guest-layout>
