<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response Pertanyaan</title>
</head>
<body>
    <h1>Data Pertanyaan Berhasil Dikirim</h1>

    <p>Nama: {{ $name }}</p>
    <p>Email: {{ $email }}</p>
    <p>Pertanyaan: {{ $question }}</p>

    <a href="{{ route('question.form') }}">Kembali ke Form</a>
</body>
</html>