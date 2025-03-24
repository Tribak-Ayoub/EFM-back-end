<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card shadow-sm border-0">
        <div class="card-header bg-success text-white text-center">
          <h5>Add widget</h5>
        </div>

        <div class="card-body">
          <form method="POST" action="{{ route('store') }}">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">name</label>
              <input
                type="text"
                name="name"
                class="form-control"
                id="name"
                placeholder="method name"
                required>
            </div>

            <div class="mb-3">
              <label for="method" class="form-label">method</label>
              <input
                type="text"
                name="method"
                class="form-control"
                id="method"
                placeholder="method"
                required>
            </div>

            <div class="mb-3">
              <label for="type" class="form-label">type</label>
                <select name="type" class="form-select" id="type" required>
                <option value="number">number</option>
                <option value="list">list</option>
              </select>
            </div>

            <div class="text-center">
              <a href="{{ route('index') }}" class="btn btn-secondary">cancel</a>
              <button type="submit" class="btn btn-success px-4">add</button>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>