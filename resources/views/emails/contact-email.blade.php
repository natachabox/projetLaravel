<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email</title>
</head>
<body>

<h1>email reçu</h1>

    <ul>
        <li>Nom :  {{ $data["userName"] }}</li>
        <li>Email : {{ $data["userEmail"] }}</li>
        <li>Mobile : {{ $data["userPhone"] }}</li>
        <li>Sujet : {{ $data["userMsg"] }}</li>
    </ul>

</body>
</html>