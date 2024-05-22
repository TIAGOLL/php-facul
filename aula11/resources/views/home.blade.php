<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home</title>
</head>

<body class="h-screen w-screen flex bg-zinc-400">
    <div class="w-full flex flex-row gap-2 m-10">
        @foreach ($product as $value)
        <div class="text-black h-auto flex flex-col p-10 gap-2 bg-zinc-100 rounded-md">
            <div>
                Nome: {{$value->name}}
            </div>
            <div>
                Descrição: {{$value->description}}
            </div>
            @foreach ($cost as $item)
            <div>
                Preço: {{$item->cost_value}}
                Data do preço: {{$item->date}}
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</body>
