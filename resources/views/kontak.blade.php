<!DOCTYPE html>
<html>
<head>
    <title>Form Kontak</title>
</head>
<body>

    <h2>Formulir Kontak</h2>

    {{-- Pesan sukses --}}
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    {{-- Error validasi umum --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="/kontak" method="POST">
        @csrf

        <label>Nama:</label>
        <input type="text" name="nama" value="{{ old('nama') }}">
        <br>
        @error('nama')
            <small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        <label>Pesan:</label>
        <textarea name="pesan">{{ old('pesan') }}</textarea>
        <br>
        @error('pesan')
            <small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>
