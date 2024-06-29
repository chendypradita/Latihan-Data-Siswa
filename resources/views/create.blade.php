<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body>
    <form action="{{ route('students.store') }}" method="POST">
        @csrf
    <div class="max-w-md mx-auto p-16 pt-2 pb-2 mb-4 bg-gray-200 rounded-lg shadow-md">
        <h2 class="text-lg font-bold mb-4 text-center">Tambah Data</h2>
        <label for="label1" class="block text-sm font-bold">Nama:</label>
        <input type="text" name="nama" class="w-full p-2 pl-2 mb-1 text-sm text-gray-700 rounded-lg" required>

        <label for="label2" class="block text-sm font-bold">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" class="w-full p-2 pl-2 mb-4 text-sm text-gray-700 rounded-lg" required>

        <label for="label2" class="block text-sm font-bold">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" class="w-full p-2 pl-2 mb-4 text-sm text-gray-700 rounded-lg" required>

        <label for="label3" class="block text-sm font-bold">Sekolah:</label>
        <input type="text" name="sekolah" class="w-full p-2 pl-2 mb-4 text-sm text-gray-700 rounded-lg" required>

        <label for="label4" class="block text-sm font-bold">Keterangan:</label>
        <input type="text" name="keterangan" class="w-full p-2 pl-2 mb-4 text-sm text-gray-700 rounded-lg" required>
        <div class="mt-1">
            <a href="/students"> 
              <button class="bg-gray-600 hover:bg-gray-500 text-white py-1 px-6 mx-1 rounded-lg">Batal</button>
            </a>
            <button type="submit" class="bg-gray-600 hover:bg-gray-500 text-white py-1 px-6 mx-1 rounded-lg float-right">Tambah</button>
        </div>
    </div>
    </form>
    
</body>
</html> 