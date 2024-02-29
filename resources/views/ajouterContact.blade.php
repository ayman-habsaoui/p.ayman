<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un contact</title>
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
            color: #555;
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
        .btn-add {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-add:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ajouter un contact</h1>
        <form action="/saveAjoute" method="post">
            @csrf 
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="firstname" required>

            <label for="lastname">Nom :</label>
            <input type="text" id="lastname" name="lastname" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="city">Ville :</label>
            <input type="text" id="city" name="city" required>

            <label for="country">Pays :</label>
            <input type="text" id="country" name="country" required>

            <label for="jobtitle">Titre du poste :</label>
            <input type="text" id="jobtitle" name="jobtitle" required>

            <button type="submit" class="btn btn-primary btn-add">Ajouter</button>
        </form>
    </div>
</body>
</html>
