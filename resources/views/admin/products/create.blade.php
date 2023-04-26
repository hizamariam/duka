<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weka Bidhaa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="max-w-xl mx-auto">
        <div class="flex justify-between items-center mt-3">
            <h1>Weka Bidhaa</h1>
            <a href="/admin/products" class="bg-blue-500 text-white px-2 py-1 rounded-md">Bidhaa Zilizopo</a>
        </div>
        <br>
        <form action="{{ $product->id?"/admin/products/$product->id/update":"/admin/products/store" }}" method="POST"  class="mt-2" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="Jina">Jina la Bidhaa</label>
                <input class="border border-gray-400 w-full" value="{{ $product->jina }}" type="text" name="jina">
            </div>
            <div>
                <label for="Maelezo">Maelezo ya bidhaa</label>
                <textarea  class="border border-gray-400 w-full" type="text" name="maelezo"> {{ $product->maelezo }}</textarea>
            </div>
            <div>
                <label for="Bei ya Bidhaa">Bei ya Bidhaa </label>
                <input class="border border-gray-400 w-full" value="{{ $product->bei }}" type="number" name="bei">
            </div>
            <div class="mt-3">
                <label for="Picha ya Bidhaa">Picha ya Bidhaa </label>
                <input class="border border-gray-400 w-full" value="{{ $product->picha }}" type="file" name="picha">
            </div>
            <div class="mt-3 text-right">
                <input class="bg-blue-500 text-white px-4 py-2" type="submit" value="Hifadhi ">
            </div>
        </form>
    </div>

</body>
</html>
