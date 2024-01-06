{{-- use AppLayout Component located in app\View\Components\AppLayout.php which use resources\views\layouts\app.blade.php view --}}
<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ 'Table Kost' }}
            </h2>
            <a href="{{ route('kosts.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded-md">+ ADD</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Nama Kost</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Tipe Kost</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Alamat Kost</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Harga Kost</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Updated At</th>
                                <th class="border-b font-medium p-4 pl-8 pt-0 pb-3 text-slate-400 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                            {{-- populate our kost data --}}
                            @if (count($kosts) > 0)
                            @foreach ($kosts as $kost)
                                <tr>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $kost->kost_title }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $kost->kost_type }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $kost->kost_address }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ number_format($kost->kost_price , 0, ',', '.') }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400">{{ $kost->updated_at }}</td>
                                    <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400" style="display: flex">
                                        <a href="{{ route('kosts.show', $kost->id) }}" class="border text-white bg-blue-500 hover:border-blue-500 hover:text-white px-4 py-2 rounded-md"><i class="fa-regular fa-eye"></i></a>
                                        <a href="{{ route('kosts.edit', $kost->id) }}" class="border text-white bg-yellow-500 hover:border-yellow-500 hover:text-white px-4 py-2 rounded-md"><i class="fa-regular fa-pen-to-square"></i></a>
                                        {{-- add delete button using form tag --}}
                                        <form method="post" action="{{ route('kosts.destroy', $kost->id) }}" class="inline">
                                            @csrf
                                            @method('delete')
                                            <button class="border text-white bg-red-500 hover:border-red-500 hover:text-white px-4 py-2 rounded-md"><i class="fa-regular fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            @else
                            <tr>
                                <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-slate-500 dark:text-slate-400" colspan="100%">
                                    <center>
                                        <div><img src="img/empty.svg" width="5%"></div>
                                        <p class="mt-2">Tidak ditemukan kost</p>
                                    </center>
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
