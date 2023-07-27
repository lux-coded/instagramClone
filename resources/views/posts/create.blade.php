<x-app-layout>
  <div class="container mx-auto">
    <div class="container max-w-xl mx-auto mt-10">
      <h1 class=" text-3xl">New Post</h1>
    </div>
    <form class="row p-5" action="/p" enctype="multipart/form-data" method="post">
      @csrf
        <div class="container max-w-xl mx-auto mt-5">
          <x-input-label for="caption" :value="__('Post Caption')" />
          <x-text-input id="caption" class="block mt-1 w-full" type="text" name="caption" :value="old('caption')" autofocus autocomplete="name" />
          <x-input-error :messages="$errors->get('caption')" class="mt-2" />
        </div>
        <div class="container max-w-xl mx-auto mt-10 ">
          <x-input-label for="image" :value="__('Post Image')" />
          <input type="file" class="hover:cursor-pointer py-2 form-control-file" id="image" name="image">
          <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        <div class="container max-w-xl mx-auto mt-10">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Post
          </button>
        </div>
    </form>
  </div>
</x-app-layout>
