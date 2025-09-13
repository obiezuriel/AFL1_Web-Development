<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFL 1</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="min-h-screen flex flex-col items-center justify-center bg-zinc-300">
    <div class="flex flex-col justify-center items-center bg-zinc-100 p-20 gap-5 rounded-lg shadow-lg w-100 h-100">
        <h1 class="font-bold text-4xl">AFL 1</h1>
        <p>Bryan & Obie</p>
        <div class="flex flex-col gap-4">
            <a href="view/view_employee.php" class="w-full bg-zinc-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 block text-center">
                Employee
            </a>

            <a href="view/view_office.php" class="w-full bg-zinc-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 block text-center">
                Office
            </a>

            <a href="view/view_employee_office.php" class="w-full bg-zinc-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 block text-center">
                Employee-Office
            </a>
        </div>
    </div>
</body>

</html>