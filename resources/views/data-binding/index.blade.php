<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Livewire Text Entry Example</title>
    @livewireAssets

</head>
<body>
<h1>Livewire Example Name Entry Component</h1>
<p>
    By default text data entry has 150ms debounce.
</p>
<p>
    By using lazy loading, entry will delayed until the user clicks or move focus off.
</p>
@livewire('my-name-is')

</body>
</html>
