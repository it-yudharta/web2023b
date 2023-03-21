<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Baru</title>
</head>
<body>
    <h3>Buat Blog Baru</h3>
    <form action="/blogs/create" method="POST">
        @csrf
        <div>
            <label>Judul</label>
            <input type="text" name="title">
        </div>
        <br>
        <div>
            <label>Penulis</label>
            <input type="text" name="author">
        </div>
        <br>
        <div>
            <label>Waktu Baca</label>
            <input type="number" name="time_to_read">
        </div>
        <br>
        <div>
            <p>Untuk Anak</p>
            <input type="radio" id="for_kid_yes" name="for_kid" value="true">
            <label for="for_kid_yes">Iya</label>
            <input type="radio" id="for_kid_no" name="for_kid" value="false">
            <label for="for_kid_no">No</label>
        </div>
        <br>
        <div>
            <label>Isi</label>
            <textarea name="content" rows="5" cols="100"></textarea>
        </div>
        <br>
        <input type="submit" value="Simpan">
    </form>
</body>
</html>
