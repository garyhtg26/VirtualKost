<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ 'Detail Kost' }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg m-auto w-50">
                <div class="p-6 text-gray-900">
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Kost Title' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->kost_title }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Tipe Kost' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->kost_type }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Alamat Kost' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->kost_address }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Kecamatan' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->kost_subdistrict }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Kota' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->kost_city }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Provinsi' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->kost_province }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Harga Kost' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            Rp. {{ $kost->kost_price }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Fasilitas Kost' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->kost_facilities }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Embed Virtual 360' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->virtual_embed }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Link Gmaps Location' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->gmaps_location }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Longitude' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->longitude }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Latitude' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->latitude }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Others' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->others }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Thumbnail Kost' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            <img class="h-64 w-128" src="{{ Storage::url($kost->thumbnail_image) }}" alt="{{ $kost->kost_title }}" srcset="">
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Created At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->created_at }}
                        </p>
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ 'Updated At' }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ $kost->updated_at }}
                        </p>
                    </div>
                    <a href="{{ route('kosts.index') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">BACK</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
