<x-app-layout>
  <div class="container mx-auto">
    <div class="max-w-2xl mt-10 mx-auto overflow-hidden">
      <img src="/storage/{{ $post->image }}" class="w-full h-full object-cover" alt="">
    </div>
    <h1 class="text-center font-sans text-3xl my-5">{{ $post->caption }}</h1>
  </div>
</x-app-layout>
