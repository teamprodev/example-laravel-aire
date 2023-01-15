<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.css" rel="stylesheet">
    <title>Create</title>
</head>
<body class="m-12 mx-52">
{{ Aire::open()
	->route('store')
	->post() }}

<div class="flex flex-col md:flex-row">

    {{ Aire::input('title', 'Tile here')
      ->id('title')
      ->placeholder('title')
      ->groupClass('flex-1 mr-2') }}

</div>

<div class="my-8">
    {{ Aire::textarea('blog','Blog')
	->value('Demo text area') }}
</div>


{{ Aire::email('email', 'Enter Your Email') }}

{{ Aire::submit('Create') }}

{{ Aire::close() }}
</body>
</html>
