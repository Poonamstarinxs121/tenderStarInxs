
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StarTenderManagement</title>
    <script src="https://cdn.tailwindcss.com" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        <div class="w-64 bg-white shadow-lg">
            <div class="p-4 bg-yellow-200">
                <h1 class="text-xl font-bold">StarTenderManagement</h1>
            </div>
            <nav class="mt-4">
                <a href="#" class="flex items-center px-4 py-3 bg-gray-100">
                    <i class="fas fa-th-large mr-3"></i>
                    Dashboard
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-building mr-3"></i>
                    Companies
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-handshake mr-3"></i>
                    OEMs
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-users mr-3"></i>
                    Customers
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-user-cog mr-3"></i>
                    User Management
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-lightbulb mr-3"></i>
                    Leads
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-file-alt mr-3"></i>
                    Document Management
                </a>
                <a href="#" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100">
                    <i class="fas fa-file-contract mr-3"></i>
                    Tender Management
                </a>
            </nav>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Top Navigation Bar -->
            <div class="bg-white shadow-sm">
                <div class="flex justify-between items-center px-8 py-4">
                    <div class="relative">
                        <input type="text" placeholder="Search..." class="w-64 px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <i class="fas fa-search absolute right-3 top-3 text-gray-400"></i>
                    </div>
                    <div class="flex items-center space-x-4">
                        <div class="relative">
                            <i class="fas fa-bell text-gray-600 text-xl"></i>
                            <span class="absolute -top-1 -right-1 bg-red-500 text-white rounded-full w-4 h-4 text-xs flex items-center justify-center">2</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-gray-700">Poonam Amale</span>
                            <i class="fas fa-chevron-down text-gray-600"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold">Companies</h2>
                    <div class="flex items-center space-x-4">
                        <button class="px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50">
                            <i class="fas fa-download mr-2"></i>Export
                        </button>
                        <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                            <i class="fas fa-plus mr-2"></i>Add Company
                        </button>
                    </div>
                </div>

                <!-- Company List -->
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">Company List</h3>
                        <div class="mb-4">
                            <input type="text" placeholder="Search companies..." class="w-full px-4 py-2 border rounded-md">
                        </div>
                        <table class="w-full">
                            <thead>
                                <tr class="border-b">
                                    <th class="text-left py-3 px-4">Company Name</th>
                                    <th class="text-left py-3 px-4">Contact Person</th>
                                    <th class="text-left py-3 px-4">Email</th>
                                    <th class="text-left py-3 px-4">Phone</th>
                                    <th class="text-left py-3 px-4">Location</th>
                                    <th class="text-left py-3 px-4">Status</th>
                                    <th class="text-left py-3 px-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-3 px-4">StarInxs Solution Pvt Ltd</td>
                                    <td class="py-3 px-4">Amit</td>
                                    <td class="py-3 px-4">demo@gmail.com</td>
                                    <td class="py-3 px-4">+914567890</td>
                                    <td class="py-3 px-4">Bhopal, Madhya Pradesh</td>
                                    <td class="py-3 px-4"><span class="px-2 py-1 bg-green-100 text-green-800 rounded">Active</span></td>
                                    <td class="py-3 px-4 space-x-2">
                                        <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-edit"></i></button>
                                        <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
