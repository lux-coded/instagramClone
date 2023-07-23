<x-app-layout>
    <div class="container mx-auto">
        <div class="container mx-auto row flex p-5">
            <div class="col-3 xl:pt-10 pt-5 xl:pl-20 pl-5">
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-full max-h-60 rounded-full bg-black" alt="">
            </div>
            <div class="col-9 lg:pt-20 pt-10 pl-10">
                <h1 class="text-3xl font-bold">{{ $user->username }}</h1>
                 <div class="lg:flex gap-5 pt-4">
                    <div><strong>193</strong> posts</div>
                    <div><strong>1.5m</strong> followers</div>
                    <div><strong>0</strong> following</div>
                </div>
                <p class="pt-4"><strong>{{ $user->profile->title }}</strong></p>
                <p class="pt-4">{{ $user->profile->description }}</p>
                <p class="pt-4"><a href="#">{{ $user->profile->url }}</a></p>
            </div>
        </div>
        <div class="lg:container xl:py-20 xl:px-20 p-1 grid grid-cols-3 lg:gap-5 gap-1">
            <div>
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-100" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-100" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-100" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-100" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-100" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-100" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-100" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-100" alt="">
            </div>
            <div>
                <img src="https://i.pinimg.com/736x/bf/f1/44/bff144450ad6c24e3bf5e86a39640a35.jpg" class="w-100" alt="">
            </div>
        </div>
    </div>
</x-app-layout>
