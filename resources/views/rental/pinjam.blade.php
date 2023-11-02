<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pinjam Kendaraan') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="container">
                        <h1 class="mb-4">Form Peminjaman Kendaraan</h1>
                        <form method="POST" action="">
                            @csrf

                            <div class="mb-4">
                                <label for="vehicle_id" class="font-bold">ID Kendaraan:</label>
                                <input type="number" name="vehicle_id" id="vehicle_id" class="border p-2 rounded-xl" required>
                            </div>

                            <div class="mb-4">
                                <label for="customer_id" class="font-bold">ID Pelanggan:</label>
                                <input type="number" name="customer_id" id="customer_id" class="border p-2 rounded-xl" required>
                            </div>

                            <div class="mb-4">
                                <label for="rent_date" class="font-bold">Tanggal Sewa:</label>
                                <input type="date" name="rent_date" id="rent_date" class="border p-2 rounded-xl" required>
                            </div>

                            <div class="mb-4">
                                <label for="return_date" class="font-bold">Tanggal Kembali:</label>
                                <input type="date" name="return_date" id="return_date" class="border p-2 rounded-xl" required>
                            </div>

                            <div class="mb-4">
                                <label for="total_price" class="font-bold">Total Harga:</label>
                                <input type="number" name="total_price" id="total_price" class="border p-2 rounded-xl" required>
                            </div>

                            <div class="mb-4">
                                <label for="status" class="font-bold">Status:</label>
                                <select name="status" id="status" class="border p-2 rounded-xl" required>
                                    <option value="1">Pinjam</option>
                                    <option value="0">Kosong</option>
                                </select>
                            </div>

                            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg">Tambah Peminjaman</button>
                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
