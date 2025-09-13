<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFL 1</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="min-h-screen flex justify-center items-center bg-zinc-300">
    <div class="container mx-auto p-6">
        <div class="max-w-md mx-auto bg-zinc-100 rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Add New Employee</h1>

            <form action="../controller/controller_employee.php" method="POST" class="space-y-4">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                    <input type="text" id="nama" name="nama" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label for="jabatan" class="block text-sm font-medium text-gray-700 mb-2">Jabatan</label>
                    <input type="text" id="jabatan" name="jabatan" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label for="usia" class="block text-sm font-medium text-gray-700 mb-2">Usia</label>
                    <input type="number" id="usia" name="usia" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div class="flex gap-4 mt-6">
                    <button name="button_registeremployee" type="submit"
                        class="flex-1 bg-zinc-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                        Add Employee
                    </button>

                    <a href="view_employee.php"
                        class="flex-1 bg-zinc-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>