<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Blog</title>
</head>
<body>
    <h3>
        Daftar Judul
        <a href="/blogs/create">Buat Blog Baru</a>
    </h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Aksi</th>
        </tr>
        @foreach($blogs as $blog)
        <tr>
            <td>{{ $blog->id }}</td>
            <td>{{ $blog->title }}</td>
            <td>{{ $blog->author }}</td>
            <td><a href="/blogs/{{ $blog->id }}/edit">Ubah</a></td>
        </tr>
        @endforeach
    </table>
</body>
</html>
