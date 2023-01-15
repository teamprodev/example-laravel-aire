<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.css" rel="stylesheet">
    <title>Home</title>
</head>
<body class="m-12 mx-52">

<table>
    <thead>
    <tr>
        <th class="m-2">Title</th>
        <th class="m-2">Body</th>
        <th class="m-2">Email</th>
        <th class="m-2">Delete</th>
        <th class="m-2">Edit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($posts as $post )
        <tr class="m-10">
            <td>
                <div class="mx-4">
                    {{ $post->title }}
                </div>
            </td>
            <td>
                <div class="mx-4">
                    {{ $post->blog }}
                </div>
            </td>
            <td>
                <div class="mx-4">
                    {{ $post->email }}
                </div>
            </td>
            <td>
                {{ Aire::open()
                    ->route('destroy',$post->id)
                    ->get()}}
                    {{Aire::submit('Delete')
                        ->class("mx-4")}}
                {{ Aire::close() }}
            </td>
            <td>
                <a href="{{route('edit', $post->id)}}">
                    {{Aire::submit('Edit')
                        ->class("mx-4")}}
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{route('create')}}">
    {{ Aire::submit('Create New') }}
</a>
</body>
</html>
