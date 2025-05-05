
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management - StarTenderManagement</title>
    <script src="https://cdn.tailwindcss.com" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        <!-- Sidebar -->
        @include('partials.sidebar')

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Top Navigation Bar -->
            @include('partials.topbar')

            <!-- Page Content -->
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold">Users Management</h2>
                    <div class="flex items-center space-x-4">
                        <button onclick="openUserModal()" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                            <i class="fas fa-plus mr-2"></i>Add User
                        </button>
                    </div>
                </div>

                <!-- Users List -->
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6">
                        <div class="mb-4">
                            <input type="text" placeholder="Search users..." class="w-full px-4 py-2 border rounded-md">
                        </div>
                        <table class="w-full">
                            <thead>
                                <tr class="border-b">
                                    <th class="text-left py-3 px-4">Name</th>
                                    <th class="text-left py-3 px-4">Email</th>
                                    <th class="text-left py-3 px-4">Role</th>
                                    <th class="text-left py-3 px-4">Department</th>
                                    <th class="text-left py-3 px-4">Status</th>
                                    <th class="text-left py-3 px-4">Last Login</th>
                                    <th class="text-left py-3 px-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b">
                                    <td class="py-3 px-4">Poonam Amale</td>
                                    <td class="py-3 px-4">poonam@starinxs.com</td>
                                    <td class="py-3 px-4">user</td>
                                    <td class="py-3 px-4">Finance</td>
                                    <td class="py-3 px-4"><span class="px-2 py-1 bg-green-100 text-green-800 rounded">Active</span></td>
                                    <td class="py-3 px-4">-</td>
                                    <td class="py-3 px-4 space-x-2">
                                        <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-edit"></i></button>
                                        <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Create User Modal -->
                <div id="createUserModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center overflow-y-auto">
                    <div class="bg-white rounded-lg p-6 w-[800px] max-h-[90vh] overflow-y-auto my-8">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold">Create User</h2>
                            <button onclick="closeUserModal()" class="text-gray-500 hover:text-gray-700">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <form>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="firstName">
                                        First Name<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="firstName" placeholder="First Name" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="lastName">
                                        Last Name<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" id="lastName" placeholder="Last Name" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                        Email ID<span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" id="email" placeholder="Email Id" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="contact">
                                        Contact No<span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" id="contact" placeholder="Contact No" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                                        Password<span class="text-red-500">*</span>
                                    </label>
                                    <input type="password" id="password" placeholder="Password" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="state">
                                        State
                                    </label>
                                    <select id="state" class="w-full px-3 py-2 border rounded-md">
                                        <option value="">Not Classified</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                                        City
                                    </label>
                                    <select id="city" class="w-full px-3 py-2 border rounded-md">
                                        <option value="">Select City</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="department">
                                        Department<span class="text-red-500">*</span>
                                    </label>
                                    <select id="department" class="w-full px-3 py-2 border rounded-md">
                                        <option value="">Select Department</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
                                        Role<span class="text-red-500">*</span>
                                    </label>
                                    <select id="role" class="w-full px-3 py-2 border rounded-md">
                                        <option value="">Select Role</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="userType">
                                        User Type<span class="text-red-500">*</span>
                                    </label>
                                    <select id="userType" class="w-full px-3 py-2 border rounded-md">
                                        <option value="">Select User Type</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex justify-end space-x-2 mt-6">
                                <button type="button" onclick="closeUserModal()" class="px-6 py-2 text-gray-600 border rounded-md hover:bg-gray-100">
                                    Cancel
                                </button>
                                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                    Create
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        window.openUserModal = function() {
                            document.getElementById('createUserModal').classList.remove('hidden');
                        }

                        window.closeUserModal = function() {
                            document.getElementById('createUserModal').classList.add('hidden');
                        }
                    });
                </script>
            </div>
        </div>
    </div>
</body>
</html>
