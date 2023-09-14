<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{-- Use 'Edit' for edit mode and create for non-edit/create mode --}}
            {{ isset($kost) ? 'Edit Kost' : 'Add New Kost' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- don't forget to add multipart/form-data so we can accept file in our form --}}
                    <form method="post" action="{{ isset($kost) ? route('kosts.update', $kost->id) : route('kosts.store') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
                        @csrf
                        {{-- add @method('put') for edit mode --}}
                        @isset($kost)
                            @method('put')
                        @endisset

                        <div>
                            <x-input-label for="kost_title" value="Nama Kost" />
                            <x-text-input id="kost_title" name="kost_title" type="text" class="mt-1 block w-full" :value="$kost->kost_title ?? old('kost_title')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('kost_title')" />
                        </div>

                        <div>
                            <x-input-label for="kost_type" value="Tipe Kost" />
                            <x-text-input id="kost_type" name="kost_type" type="text" class="mt-1 block w-full" :value="$kost->kost_type ?? old('kost_type')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('kost_type')" />
                        </div>

                        <div>
                            <x-input-label for="kost_address" value="Alamat Kost" />
                            <x-text-input id="kost_address" name="kost_address" type="text" class="mt-1 block w-full" :value="$kost->kost_address ?? old('kost_address')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('kost_address')" />
                        </div>

                        <div>
                            <x-input-label for="kost_city" value="Kecamatan, Kota Kost" />
                            <x-text-input id="kost_city" name="kost_city" type="text" class="mt-1 block w-full" :value="$kost->kost_city ?? old('kost_city')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('kost_city')" />
                        </div>

                        <div>
                            <x-input-label for="kost_price" value="Harga Kost Per Bulan" />
                            <x-text-input id="kost_price" name="kost_price" type="number" class="mt-1 block w-full" :value="$kost->kost_price ?? old('kost_price')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('kost_price')" />
                        </div>

                        <div>
                            <x-input-label for="kost_facilities" value="Fasilitas Kost" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="kost_facilities" placeholder="cth. lemari, ac, meja" name="kost_facilities" class="mt-1 block w-full" required autofocus>{{ $kost->kost_facilities ?? old('kost_facilities') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('kost_facilities')" />
                        </div>

                        <div>
                            <x-input-label for="virtual_embed" value="Embed Virtual 360 (*html)" />
                            <x-text-input id="virtual_embed" placeholder="cth. <div><script></script></div>" name="virtual_embed" type="text" class="mt-1 block w-full" :value="$kost->virtual_embed ?? old('virtual_embed')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('virtual_embed')" />
                        </div>
                        <div>
                            <x-input-label for="gmaps_location" value="Link Gmaps Location" />
                            <x-text-input id="gmaps_location" placeholder="cth. https://goo.gl/maps/xhwb6Ze29CZktdvc8" name="gmaps_location" type="text" class="mt-1 block w-full" :value="$kost->gmaps_location ?? old('gmaps_location')" required autofocus />
                            <x-input-error class="mt-2" :messages="$errors->get('gmaps_location')" />
                        </div>
                        <div>
                            <x-input-label for="others" value="Others" />
                            {{-- use textarea-input component that we will create after this --}}
                            <x-textarea-input id="others" name="others" class="mt-1 block w-full" autofocus>{{ $kost->others ?? old('others') }}</x-textarea-input>
                            <x-input-error class="mt-2" :messages="$errors->get('others')" />
                        </div>
                        <div>
                            <x-input-label for="thumbnail_image" value="Thumbnail Image (Max 2 mb)" />
                            <label class="block mt-2">
                                <span class="sr-only">Choose image</span>
                                <input type="file" id="thumbnail_image" name="thumbnail_image" class="block w-full text-sm text-slate-500
                                    file:mr-4 file:py-2 file:px-4
                                    file:rounded-full file:border-0
                                    file:text-sm file:font-semibold
                                    file:bg-violet-50 file:text-violet-700
                                    hover:file:bg-violet-100
                                "/>
                            </label>
                            <div class="shrink-0 my-2">
                                <img id="thumbnail_image_preview" class="h-64 w-128 object-cover rounded-md" src="{{ isset($kost) ? Storage::url($kost->thumbnail_image) : '' }}" alt="Featured image preview" />
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('thumbnail_image')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        // create onchange event listener for thumbnail_image input
        document.getElementById('thumbnail_image').onchange = function(evt) {
            const [file] = this.files
            if (file) {
                // if there is an image, create a preview in thumbnail_image_preview
                document.getElementById('thumbnail_image_preview').src = URL.createObjectURL(file)
            }
        }
    </script>
</x-app-layout>
