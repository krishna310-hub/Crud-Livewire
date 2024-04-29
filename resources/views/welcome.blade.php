<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Livewire CRUD</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        @livewireStyles()
    </head>
    <body>
        <div class="container">
            <br>
            <h1>Livewire CRUD</h1>
            @livewire('posts')
        </div>
        @livewireScripts()
    </body>
</html>
