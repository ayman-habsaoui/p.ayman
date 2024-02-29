<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 800px;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #007bff;
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-add {
            float: right;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: white;
        }
        .btn-actions {
            display: flex;
            justify-content: center;
        }
        .btn-actions button,
        .btn-actions a {
            padding: 8px 16px;
            margin: 4px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            cursor: pointer;
            border-radius: 4px;
        }
        .btn-primary {
            background-color: #007bff;
            color: white;
            border: none;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
            border: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contacts</h1>
        <a href="/ajouter" class="btn btn-primary btn-add">Ajouter Nouveau Contact</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First name</th>
                    <th>Last name</th>
                    <th>Email</th>
                    <th>City</th>
                    <th>Country</th>
                    <th>Job Title</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                <tr>
                    <td>{{$contact->firstname}}</td>
                    <td>{{$contact->lastname}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->city}}</td>
                    <td>{{$contact->country}}</td>
                    <td>{{$contact->jobtitle}}</td>
                    <td class="btn-actions">
                        <button><a href="/modifier/{{$contact->firstname}}" class="btn btn-primary">Modifier</a></button>
                        <a href="/supprimer/{{$contact->firstname}}" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
