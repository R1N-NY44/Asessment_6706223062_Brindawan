<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Kendaraan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <form method="POST" action="{{ route('kendaraan.tambah') }}">
                        @csrf

                        <div class="mb-4">
                            <label for="name font-bold">Nama Kendaraan : </label>
                            {{-- <input type="number" name="name" id="id" class="border p-2 rounded-xl" required> --}}
                            <input type="text" name="name" id="name" class="border p-2 rounded-xl" required>
                        </div>
                        <div class="mb-4">
                            <label for="name font-bold">Tipe Kendaraan : </label>
                            <input type="number" name="typeId" id="type" class="border p-2 rounded-xl" required>
                        </div>
                        <div class="mb-4">
                            <label for="name font-bold">Lisensi Kendaraan : </label>
                            <input type="text" name="license" id="license" class="border p-2 rounded-xl" required>
                        </div>
                        <div class="mb-4">
                            <label for="name font-bold">Harga Harian : </label>
                            <input type="number" name="dailyprice" id="dailyprice" class="border p-2 rounded-xl" required>
                            <input type="number" name="status" id="status" class="hidden" value="1">
                        </div>

                        <!-- Tambahkan input untuk kolom-kolom lain seperti typeId, license, dailyprice, dan status -->

                        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Tambah Kendaraan</button>
                    </form>

                    {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif --}}


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
