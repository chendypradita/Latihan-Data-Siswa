<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src ="https://cdn.tailwindcss.com"></script>
    <title>Edit Data</title>
</head>
<body>
    <form action="{{ route('student.change', $students->id) }}" method="POST">
        @csrf
    <div class="max-w-md mx-auto p-16 pt-2 pb-2 mb-4 bg-gray-200 rounded-lg shadow-md">
        <h2 class="text-lg font-bold mb-4 text-center">Edit Data</h2>
        <label class="block text-sm font-bold">Nama:</label>
        <input type="text" name="nama" value="{{ $students->nama }}" class="w-full p-2 pl-2 mb-1 text-sm text-gray-700 rounded-lg" required value="{{ $students->nama }}">

        <label class="block text-sm font-bold">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" value="{{ $students->tempat_lahir }}" class="w-full p-2 pl-2 mb-4 text-sm text-gray-700 rounded-lg" required value="{{ $students->tempat_lahir }}">

        <label class="block text-sm font-bold">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="{{ $students->tanggal_lahir }}" class="w-full p-2 pl-2 mb-4 text-sm text-gray-700 rounded-lg" required value="{{ $students->tanggal_lahir }}">

        <label class="block text-sm font-bold">Sekolah:</label>
        <input type="text" name="sekolah" value="{{ $students->sekolah }}"   class="w-full p-2 pl-2 mb-4 text-sm text-gray-700 rounded-lg" required value="{{ $students->sekolah }}">

        <label  class="block text-sm font-bold">Keterangan:</label>
        <input type="text" name="keterangan" value="" class="w-full p-2 pl-2 mb-4 text-sm text-gray-700 rounded-lg" required value="{{ $students->keterangan }}">
        <div class="mt-1">
            <a href="/students">
            <button type="button" class="bg-gray-600 hover:bg-gray-500 text-white py-1 px-6 mx-1 rounded-lg">Batal</button>
            </a>    
            <button type="submit" class="bg-gray-600 hover:bg-gray-500 text-white py-1 px-6 mx-1 rounded-lg float-right">Simpan</button>
        </div>
    </div>
    </form>
    
</body>
</html> 