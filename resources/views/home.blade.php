<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertanyaan</title>
</head>
<body>
    <h1>Form Pertanyaan</h1>

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('question.store') }}" method="POST">
        @csrf

        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name">
        <br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email">
        <br><br>

        <label for="question">Pertanyaan:</label><br>
        <textarea id="question" name="question" rows="5" cols="40"></textarea>
        <br><br>

        <button type="submit">Kirim Pertanyaan</button>
    </form>
</body>
</html>