<x-app-layout>
    <x-slot name="header" class="flex-col">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-4">
            {{ __('Daftar Kendaraan') }}
        </h2>
        <a href="{{ route('tambah') }}" class="bg-blue-500 rounded-lg text-white py-2 px-4">Tambah Kendaraan</a>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container">
                        <h1 class="mb-4">Daftar Kendaraan</h1>
                        <table class="border-collapse table-auto w-full text-sm">
                            <thead>
                                <tr>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">ID</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pt-0 pb-3 text-black text-left">Nama</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pr-8 pt-0 pb-3 text-black text-left">Type ID</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pt-0 pb-3 text-black text-left">License</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pt-0 pb-3 text-black text-left">Daily Price</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pr-8 pt-0 pb-3 text-black text-left">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($vehicles as $vehicle)
                                    <tr>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black">{{ $vehicle->id }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-black">{{ $vehicle->name }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-black">{{ $vehicle->typeId }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-black">{{ $vehicle->license }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-black">{{ $vehicle->dailyprice }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-black">
                                            @if ($vehicle->status == 1)
                                                <a href="{{ route('peminjaman', ['vehicle_id' => $vehicle->id, 'customer_id' => auth()->user()->id]) }}" class="bg-[#2a944a] rounded-lg text-white py-2 px-4">Pinjam</a>
                                            @else
                                                <a href="#" class="bg-[#942a2a] rounded-lg text-white py-2 px-4">Kosong</a>
                                            @endif
                                        </td>


                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
