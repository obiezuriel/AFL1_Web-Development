<?php 
    include ('../controller/controller_employee.php');
    include ('../controller/controller_office.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assign Employee to Office</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <div class="max-w-xl mx-auto bg-white rounded-lg shadow-lg p-6 mb-8">
            <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Assign Employee to Office</h1>

            <form action="../controller/controller_employee.php" method="POST" class="space-y-4">
                <div>
                    <label for="employee_index" class="block text-sm font-medium text-gray-700 mb-2">Select Employee</label>
                    <select id="employee_index" name="employee_index" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">-- Choose an Employee --</option>
                        <?php
                        $allemployee = getAllEmployee();
                        foreach($allemployee as $index => $employee){
                        ?>
                            <option value="<?=$index?>"><?=$employee->getNama()?></option>
                        <?php } ?>
                    </select>
                </div>

                <div>
                    <label for="office_id" class="block text-sm font-medium text-gray-700 mb-2">Select Office</label>
                    <select id="office_id" name="office_id" required
                        class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="">-- Choose an Office --</option>
                        <?php
                        $alloffice = getAllOffice();
                        foreach($alloffice as $office){
                        ?>
                            <option value="<?=$office->getId()?>"><?=$office->getNama()?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="flex justify-center mt-6">
                    <button name="button_assign_employee" type="submit"
                        class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                        Assign Employee
                    </button>
                </div>
            </form>
        </div>

        <h2 class="text-2xl font-bold text-gray-800 mb-4 text-center">Employee-Office Assignments</h2>
        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full bg-white border border-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Employee Name</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Position</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Assigned Office</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Office City</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php
                    foreach($allemployee as $employee){
                        $officeId = $employee->getOfficeId();
                        $assignedOffice = null;
                        if ($officeId) {
                            $assignedOffice = getOfficeById($officeId);
                        }
                    ?>
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=$employee->getNama()?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"><?=$employee->getJabatan()?></td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <?= $assignedOffice ? $assignedOffice->getNama() : '<span class="text-gray-400">Not Assigned</span>' ?>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                            <?= $assignedOffice ? $assignedOffice->getKota() : '<span class="text-gray-400">N/A</span>' ?>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        
        <div class="flex justify-center mt-6">
            <a href="../index.php" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-3 px-6 rounded-lg transition duration-200">
                Back to Home
            </a>
        </div>
    </div>
</body>
</html>