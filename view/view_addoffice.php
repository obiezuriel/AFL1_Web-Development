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
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-lg p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Add New Office</h1>

            <form action="../controller/controller_office.php" method="POST" class="space-y-4">
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-2">Nama</label>
                    <input type="text" id="nama" name="nama" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label for="kota" class="block text-sm font-medium text-gray-700 mb-2">Kota</label>
                    <input type="text" id="kota" name="kota" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label for="alamat" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                    <input type="text" id="alamat" name="alamat" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label for="telepon" class="block text-sm font-medium text-gray-700 mb-2">Telepon</label>
                    <input type="text" id="telepon" name="telepon" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div class="flex gap-4 mt-6">
                    <button name="button_registeroffice" type="submit"
                        class="flex-1 bg-zinc-800 hover:bg-zinc-500 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                        Add Office
                    </button>

                    <a href="view_office.php"
                        class="flex-1 bg-zinc-800 hover:bg-zinc-500 text-white font-semibold py-3 px-6 rounded-lg transition duration-200 text-center">
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>