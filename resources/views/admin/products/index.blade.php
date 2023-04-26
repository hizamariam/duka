<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bidhaa zilizopo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-xl mx-auto">
        <div class="flex justify-between items-center mt-3">
            <h1>Bidhaa zilizopo</h1>
            <a href="/admin/products/create" class="bg-blue-500 text-white px-2 py-1 rounded-md">Ongeza Bidhaa</a>
        </div>
        <hr class="mt-3">
        <table class="w-full">
            <thead>
                <tr>
                    <th class="text-left border">sn</th>
                    <th class="text-left border">Jina</th>
                    <th class="text-left border">Bei</th>
                    <th class="text-left border">Picha</th>
                    <th class="text-left border"></th>
                    <th class="text-left border"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                <tr>
                    <td class="border">{{ $loop->index+1 }}</td>
                    <td class="border">{{ $product->jina }}</td>
                    <td class="border">{{ $product->bei }}</td>
                    <td class="border">
                        <img class="w-16" src="/picha/{{ $product->picha }}" alt="" >
                    </td>
                    <td class="border p-1.5">
                        <a href="/admin/products/{{ $product->id }}/edit" class="bg-green-500 text-white rounded-mp px-2 py-1 shadow-md">Edit</a>
                    </td>
                    <td class="border p-1.5">
                        <a href="/admin/products/{{ $product->id }}/destroy" class="bg-green-500 text-white rounded-mp px-2 py-1 shadow-md">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="mt-3">
            {{ $products->links() }}
        </div>
    </div>

</body>
</html>
