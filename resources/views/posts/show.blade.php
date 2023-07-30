<x-app-layout>
  <div class="container mx-auto mt-10 flex rounded-lg shadow-lg overflow-hidden">
    <div class="container max-w-2xl overflow-hidden ">
      <img src="/storage/{{ $post->image }}" class="w-full h-full object-cover" alt="">
    </div>
    <div class="py-5 px-10 grow">
      <div class="flex items-center gap-4">
        <a href="/user/{{ $post->user->id }}">
          <img class="w-16 rounded-full" src="{{ $post->user->profile->profileImage() }}" alt="">
        </a>
        <h1 class="text-center font-bold font-sans text-xl my-5">
          <a href="/user/{{ $post->user->id }}">
            {{ $post->user->name }}
          </a>
        </h1>
        <button class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow">
          Follow
        </button>
      </div>
      <hr class="my-5">
      <div class="px-5">
        <p>
          <span class="text-center font-bold font-sans my-5">
            <a href="/user/{{ $post->user->id }}">
              {{ $post->user->name }}
            </a>
          </span> {{ $post->caption }}
        </p>
      </div>
    </div>
  </div>
</x-app-layout>
