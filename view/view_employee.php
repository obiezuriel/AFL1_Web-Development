<?php include ('../controller/controller_employee.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFL 1</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-zinc-300">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Employee</h1>
        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">No</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Office</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Jabatan</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Usia</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider border-b">Action</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    $allemployee = getAllEmployee();
                    foreach($allemployee as $index => $employee){
                    ?>
                        <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=($index + 1)?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=$employee->getNama()?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=getCurrentOffice($employee->getOfficeId())?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=$employee->getJabatan()?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=$employee->getUsia()?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <!-- <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Edit</a> -->
                            <a href="../controller/controller_member.php?deleteID=<?=$index?>" class="text-red-600 hover:text-red-900" onclick="return confirm('Do you want to fire this employee?');">Delete</a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        
        <div class="flex justify-center mt-6">
            <a href="view_addemployee.php" class="bg-zinc-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                Add Employee
            </a>
        </div>

        <div class="flex justify-center mt-4">
            <a href="../index.php" class="bg-zinc-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                Back to Home
            </a>
        </div>
    </div>
</body>

</html>