<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сокращение ссылок</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

<div class="m-3">
    <form id="create-link-form" class="mb-3" method="POST">
        @csrf
        <fieldset>
            <legend>Сокращение ссылок</legend>
            <div class="mb-3 col-6">
                <label for="url" class="form-label">Url</label>
                <input type="url" name="url" id="url" class="form-control" placeholder="введите url">
            </div>
            <button type="submit" class="btn btn-primary">Создать ссылку</button>
        </fieldset>
    </form>
    <div id="result"></div>
    <h6>Последние 10 ссылок</h6>
    <ul id="recent-links"></ul>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
<script src="{{asset('js/link.js')}}"></script>
</body>
</html>
