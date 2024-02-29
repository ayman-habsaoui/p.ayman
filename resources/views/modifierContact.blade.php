<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            color: #007bff;
            font-weight: bold;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn-modify {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-modify:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Modifier Contact</h1>
        <form action="/saveModifier" method="post">
            @csrf 
            <label for="firstname">Prénom :</label>
            <input type="text" class="form-control" id="firstname" name="firstname" value="{{$contact[0]->firstname}}">

            <label for="lastname">Nom :</label>
            <input type="text" class="form-control" id="lastname" name="lastname" value="{{$contact[0]->lastname}}">

            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$contact[0]->email}}">

            <label for="city">Ville :</label>
            <input type="text" class="form-control" id="city" name="city" value="{{$contact[0]->city}}">

            <label for="country">Pays :</label>
            <input type="text" class="form-control" id="country" name="country" value="{{$contact[0]->country}}">

            <label for="jobtitle">Titre du poste :</label>
            <input type="text" class="form-control" id="jobtitle" name="jobtitle" value="{{$contact[0]->jobtitle}}">

            <button type="submit" class="btn btn-primary btn-modify">Modifier Contact</button>
        </form>
    </div>
</body>
</html>
