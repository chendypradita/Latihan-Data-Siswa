<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Latihan</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="bg-gray-200 shadow flex justify-between items-center px-4 py-6">
        <h1 class="text-3xl font-bold tracking-tight text-gray-900">Data Siswa</h1>
        <div class="flex items-center space-x-2">
            <form action="{{ route('students.index') }}" method="GET" class="flex">
                <div class="relative">
                    <label for="search" class="hidden mb-2 text-sm font-medium text-gray-200 dark:text-gray-300">Search</label>
                    <div class="flex absolute inset-y-0 right-0 items-center pr-3 pointer-events-none">
                        <svg class="w-4 h-4 text-black-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input
                        class="p-1 pr-8 w-32 text-sm text-gray-900 bg-white rounded-lg border border-gray-300 dark:border-gray-600 placeholder-white-200 dark:text-black dark:focus:ring-primary-500 dark:focus:border-primary-500"
                        placeholder="Search" type="search" id="search" name="search" autocomplete="off" value="{{ request('search') }}">
                </div>
            </form>
        </div>
    </header>
    <div class="container mx-auto relative">
        <div class="flex justify-center items-center my-8">
            <h1 class="text-3xl font-bold">Data Siswa Sekolah ......</h1>
        </div>
        <div class="col-auto">
            <a href="/create" data-toggle="modal" data-target="#ModalCreate">
                <button
                    class="absolute top-0 right-12 p-1 border border-gray-300 rounded-lg hover:bg-white bg-gray-200 font-bold">
                    Tambah Data
                </button>
            </a>
        </div>
    </div>
        <div class="py-4 px-4 mx-auto max-w-screen-xl flex lg:py-8 gap-8 flex-wrap lg:px-0">
    @foreach ($students as $student)
        @if (is_object($student))
            <div class="grid gap-8 ">
                <article class="p-4 bg-gray-200 rounded-lg border border-gray-200 shadow-md mb-8">
                    <ul style="list-style: none; display: table;">
                        <li style="display: table-row;"><b
                                style="display: table-cell;
                        padding-right: 1em;">Nama</b>:
                            {{ $student->nama }}</li>
                        <li style="display: table-row;"><b
                                style="display: table-cell;
                        padding-right: 1em;">Ttl</b>:
                            {{ $student->tempat_lahir }} {{ $student->tanggal_lahir }}</li>
                        <li style="display: table-row;"><b
                                style="display: table-cell;
                        padding-right: 1em;">Sekolah</b>:
                            {{ $student->sekolah }}</li>
                        <li style="display: table-row;"><b
                                style="display: table-cell;
                        padding-right: 1em;">Keterangan</b>:
                            {{ $student->keterangan }}
                        </li>
                    </ul>
                    <div class="flex justify-between mt-28 space-x-2">
                        <a href="{{ route('students.edit', $student->id) }}">
                            <button
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-10 rounded-md ">Edit</button>
                        </a>
                        <form action="{{ route('student.hapus', $student->id) }}" method="POST">
                            @csrf
                            <button
                                class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-1 px-8 rounded-md">Delete</button>
                        </form>
                    </div>
                </article>
            </div>
        @endif
    @endforeach
        </div>
</body>
</html>
