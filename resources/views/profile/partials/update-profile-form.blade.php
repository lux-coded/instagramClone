<section>
  <header>
      <h2 class="text-lg font-medium text-gray-900">
          {{ __('Profile Information') }}
      </h2>

      <p class="mt-1 text-sm text-gray-600">
          {{ __("Update your profile.") }}
      </p>
  </header>

  <form method="post" enctype="multipart/form-data" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
      @csrf
      @method('patch')

      <div>
          <x-input-label for="title" :value="__('Title')" />
          <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $user->profile->title)" required autofocus autocomplete="title" />
          <x-input-error class="mt-2" :messages="$errors->get('title')" />
      </div>

      <div>
          <x-input-label for="description" :value="__('Description')" />
          <x-text-input id="description" name="description" type="text" class="mt-1 block w-full" :value="old('description', $user->profile->description)" required autofocus autocomplete="description" />
          <x-input-error class="mt-2" :messages="$errors->get('description')" />
      </div>

      <div>
          <x-input-label for="url" :value="__('Link')" />
          <x-text-input id="url" name="url" type="url" class="mt-1 block w-full" :value="old('url', $user->profile->url)" required autocomplete="url" />
          <x-input-error class="mt-2" :messages="$errors->get('url')" />
      </div>

      <div>
          <x-input-label for="image" :value="__('Image')" />
          <x-text-input id="image" name="image" type="file" class="mt-1 block w-full" :value="old('image', $user->profile->image)" autocomplete="image" />
          <x-input-error class="mt-2" :messages="$errors->get('image')" />
      </div>

      <div class="flex items-center gap-4">
          <x-primary-button>{{ __('Save') }}</x-primary-button>

          @if (session('status') === 'profile-updated')
              <p
                  x-data="{ show: true }"
                  x-show="show"
                  x-transition
                  x-init="setTimeout(() => show = false, 2000)"
                  class="text-sm text-gray-600"
              >{{ __('Saved.') }}</p>
          @endif
      </div>
  </form>
</section>
