<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{-- {{ __("You're logged in!") }} --}}


                    <div class="container">
                        <h1 class="mb-4">Daftar Rental Kendaraan</h1>
                        <table class="border-collapse table-auto w-full text-sm">
                            <thead>
                                <tr>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pl-8 pt-0 pb-3 text-black text-left">ID</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pt-0 pb-3 text-black text-left">Nama Kendaraan</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pt-0 pb-3 text-black text-left">Nama Customer</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pr-8 pt-0 pb-3 text-black text-left">Tanggal Sewa</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pt-0 pb-3 text-black text-left">Tanggal Kembali</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pt-0 pb-3 text-black text-left">Total Harga</th>
                                    <th class="border-b border-slate-100 dark:border-slate-700 font-medium p-4 pr-8 pt-0 pb-3 text-black text-left">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                {{-- @foreach ($rentals as $rental)
                                    <tr>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pl-8 text-black">{{ $rental->id }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-black">{{ $rental->vehicle->name }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-black">{{ $rental->customer->name }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-black">{{ $rental->rentDate }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-black">{{ $rental->returnDate }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 text-black">{{ $rental->totalPrice }}</td>
                                        <td class="border-b border-slate-100 dark:border-slate-700 p-4 pr-8 text-black">
                                            @if ($rental->status == 1)
                                                <a href="#" class="bg-[#2a944a] rounded-lg text-white py-2 px-4">Pinjam</a>
                                            @else
                                                <a href="#" class="bg-[#942a2a] rounded-lg text-white py-2 px-4">Kosong</a>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
