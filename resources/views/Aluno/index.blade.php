<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div class="container mx-auto">
    <div class="text-center mt-10">
        <h1>Alunos Cadastrados</h1>
        <p>Lista dos alunos Cadastrados</p>
    </div>


    <div class="relative overflow-x-auto mt-10">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-950 uppercase  dark:bg-gray-800 dark:text-white">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nome
                </th>
                <th scope="col" class="px-6 py-3">
                    Color
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    :::
                </th>
            </tr>
            </thead>
            <tbody>
            <tr class="bg-white border-b dark:border-gray-700 text-gray-900 ">
                <th scope="row" class="px-6 py-4 font-medium  whitespace-nowrap">
                    Apple MacBook Pro 17"
                </th>
                <td class="px-6 py-4">
                    Silver
                </td>
                <td class="px-6 py-4">
                    Laptop
                </td>
                <td class="px-6 py-4">
                    $2999
                </td>
                <td class="px-6 py-4">
                    <a href="#">Editar</a>
                    <a href="#">Eliminar</a>
                </td>

            </tr>
            </tbody>
        </table>
    </div>

</div>
</body>
</html>
