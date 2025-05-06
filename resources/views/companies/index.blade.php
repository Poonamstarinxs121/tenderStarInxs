<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies - StarTenderManagement</title>
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
                    <h2 class="text-2xl font-semibold">Companies</h2>
                    <div class="flex items-center space-x-4">
                        <button class="px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50">
                            <i class="fas fa-download mr-2"></i>Export
                        </button>
                        <button onclick="openModal()" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                            <i class="fas fa-plus mr-2"></i>Add Company
                        </button>
                    </div>
                </div>

                <!-- Company List -->
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6">
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
                                @foreach($companies as $company)
                                <tr class="border-b">
                                    <td class="py-3 px-4">{{ $company->name }}</td>
                                    <td class="py-3 px-4">{{ $company->contact_person }}</td>
                                    <td class="py-3 px-4">{{ $company->email }}</td>
                                    <td class="py-3 px-4">{{ $company->phone }}</td>
                                    <td class="py-3 px-4">{{ $company->location }}</td>
                                    <td class="py-3 px-4">
                                        <span class="px-2 py-1 bg-green-100 text-green-800 rounded">{{ $company->status }}</span>
                                    </td>
                                    <td class="py-3 px-4 space-x-2">
                                        <button class="text-blue-500 hover:text-blue-700"><i class="fas fa-edit"></i></button>
                                        <button class="text-red-500 hover:text-red-700"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Add Company Modal -->
                <div id="addCompanyModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center">
                    <div class="bg-white rounded-lg p-6 w-[800px]">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold">Add New Company</h2>
                            <button onclick="closeModal()" class="text-gray-500 hover:text-gray-700">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <form action="{{ route('companies.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                        Company Name*
                                    </label>
                                    <input type="text" name="name" id="name" required class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                        Email*
                                    </label>
                                    <input type="email" name="email" id="email" required class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                        Phone
                                    </label>
                                    <input type="text" name="phone" id="phone" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">
                                        Address
                                    </label>
                                    <input type="text" name="address" id="address" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="city">
                                        City
                                    </label>
                                    <input type="text" name="city" id="city" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="state">
                                        State
                                    </label>
                                    <input type="text" name="state" id="state" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="country">
                                        Country
                                    </label>
                                    <input type="text" name="country" id="country" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="postal_code">
                                        Postal Code
                                    </label>
                                    <input type="text" name="postal_code" id="postal_code" class="w-full px-3 py-2 border rounded-md">
                                </div>
                                <div class="mb-4 col-span-2">
                                    <label class="block text-gray-700 text-sm font-bold mb-2" for="description">
                                        Description
                                    </label>
                                    <textarea name="description" id="description" class="w-full px-3 py-2 border rounded-md"></textarea>
                                </div>
                            </div>
                            <div class="flex justify-end space-x-2 mt-6">
                                <button type="button" onclick="closeModal()" class="px-6 py-2 text-gray-600 border rounded-md hover:bg-gray-100">
                                    Cancel
                                </button>
                                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            window.openModal = function() {
                document.getElementById('addCompanyModal').classList.remove('hidden');
            }

            window.closeModal = function() {
                document.getElementById('addCompanyModal').classList.add('hidden');
            }
        });
    </script>
</body>
</html>
