<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback from praktikum4people.uz</title>
</head>
<body>
    <p style="margin-left:10%;">Name:  - <b>{{ $data->names }} </b></p>
    <p style="margin-left:10%;">Email:  - <b>{{ $data->gmail }} </b></p>
    <p style="margin-left:10%;">Company:  - <b>{{ $data->company }} </b></p>
    <p style="margin-left:10%;">Phone:  - <b>{{ $data->numbers }} </b></p>
    <br>
    <p style="margin-left:10%;">Text: - <b>{{ $data->content }}  </b></p>
</body>
</html>