<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>midterm - Legaspi</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

</head>
<body>

    <div class="container mt-4">
        <table class="table table-striped table-bordered">
        <h1 class="text-3xl mb-4">Laravel Features</h1>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Feature</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($features as $feature)
                    <tr>
                        <td>{{ $feature->id }}</td>
                        <td>{{ $feature->name }}</td>
                        <td>{{ $feature->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>