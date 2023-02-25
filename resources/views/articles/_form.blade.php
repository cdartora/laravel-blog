
<form method="POST" action="{{ $action }}" class="h-min">
    @csrf
    @isset($method)
      @method($method)
    @endisset
    <div class="container mx-auto py-8 h-full">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md h-3/4">
            <div class="bg-white px-4 py-2">
                <h1 class="text-3xl font-semibold text-gray-800 mb-8">{{$pageTitle}}</h1>
                <!-- Post Title -->
                <div>
                    <x-input-label for="title" />
                    <x-text-input id="title"
                        class="mt-1 w-full font-semibold text-gray-800 text-xl px-3 py-1 outline-none border-b-2"
                        type="input" name="title" :value="old('title')" placeholder="Title of the post" autofocus />
                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                </div>
            </div>
            <div class="p-4 h-full">
                {{-- Post Image --}}
                <div>
                    <x-input-label for="image" />
                    <x-text-input id="image"
                        class="mt-1 w-full font-normal text-gray-600 text-base px-3 py-1 mb-8 outline-none border-b-2"
                        type="input" name="image" :value="old('image')" placeholder="Thumbnail's image URL" autofocus />
                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                </div>
                {{-- Post Paragraph --}}
                <div class="h-full">
                    <x-input-label for="text" />
                    <textarea id="text"
                        class="mt-1 w-full leading-relaxed text-gray-700 text-base rounded-md px-3 py-1 h-max border-gray-200"
                        type="text-area" name="text" :value="old('text')" placeholder="Text of the article" autofocus></textarea>
                    <x-input-error :messages="$errors->get('text')" class="mt-2" />
                </div>
            </div>
            <div class="flex items-center justify-end p-4">
                <x-primary-button>
                    {{ $submitButtonText }}
                </x-primary-button>
            </div>
        </div>
    </div>
    </div>
</form>
