
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OEMs Management - StarTenderManagement</title>
    <script src="https://cdn.tailwindcss.com" defer></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex">
        @include('partials.sidebar')
        
        <div class="flex-1">
            @include('partials.topbar')

            <!-- Page Content -->
            <div class="p-8">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-2xl font-semibold">Original Equipment Manufacturers (OEMs)</h2>
                    <div class="flex items-center space-x-4">
                        <button class="px-4 py-2 bg-white text-gray-700 border border-gray-300 rounded-md hover:bg-gray-50">
                            <i class="fas fa-download mr-2"></i>Export
                        </button>
                        <button onclick="openOEMModal()" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                            <i class="fas fa-plus mr-2"></i>Add OEM
                        </button>
                    </div>
                </div>

                <!-- OEM List -->
                <div class="bg-white rounded-lg shadow">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold mb-4">OEM List</h3>
                        <div class="mb-4">
                            <input type="text" placeholder="Search OEMs..." class="w-full px-4 py-2 border rounded-md">
                        </div>
                        <table class="w-full">
                            <thead>
                                <tr class="border-b">
                                    <th class="text-left py-3 px-4">Vendor ID</th>
                                    <th class="text-left py-3 px-4">Company Name</th>
                                    <th class="text-left py-3 px-4">Contact Person</th>
                                    <th class="text-left py-3 px-4">Phone</th>
                                    <th class="text-left py-3 px-4">Email</th>
                                    <th class="text-left py-3 px-4">City</th>
                                    <th class="text-left py-3 px-4">Status</th>
                                    <th class="text-left py-3 px-4">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Add OEM Modal -->
                <div id="addOEMModal" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden flex items-center justify-center overflow-y-auto">
                    <div class="bg-white rounded-lg p-6 w-[800px] max-h-[90vh] overflow-y-auto my-8">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold">Add New OEM</h2>
                            <button onclick="closeOEMModal()" class="text-gray-500 hover:text-gray-700">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                        <form>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        Vendor ID<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" class="w-full px-3 py-2 border rounded-md" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        Company Name<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" class="w-full px-3 py-2 border rounded-md" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        Contact Person Name<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" class="w-full px-3 py-2 border rounded-md" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        Phone No.<span class="text-red-500">*</span>
                                    </label>
                                    <input type="tel" class="w-full px-3 py-2 border rounded-md" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        Email ID<span class="text-red-500">*</span>
                                    </label>
                                    <input type="email" class="w-full px-3 py-2 border rounded-md" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        Address<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" class="w-full px-3 py-2 border rounded-md" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        City<span class="text-red-500">*</span>
                                    </label>
                                    <select class="w-full px-3 py-2 border rounded-md" required>
                                        <option value="">Select city</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        State<span class="text-red-500">*</span>
                                    </label>
                                    <select class="w-full px-3 py-2 border rounded-md" required>
                                        <option value="">Select state</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        Pin Code<span class="text-red-500">*</span>
                                    </label>
                                    <input type="text" class="w-full px-3 py-2 border rounded-md" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block text-gray-700 text-sm font-bold mb-2">
                                        Status<span class="text-red-500">*</span>
                                    </label>
                                    <select class="w-full px-3 py-2 border rounded-md" required>
                                        <option value="">Select status</option>
                                        <option value="active">Active</option>
                                        <option value="inactive">Inactive</option>
                                        <option value="under_review">Under Review</option>
                                        <option value="blacklisted">Blacklisted</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex justify-end space-x-2 mt-6">
                                <button type="button" onclick="closeOEMModal()" class="px-6 py-2 text-gray-600 border rounded-md hover:bg-gray-100">
                                    Cancel
                                </button>
                                <button type="submit" class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                    Save
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <script>
                    function openOEMModal() {
                        document.getElementById('addOEMModal').classList.remove('hidden');
                    }

                    function closeOEMModal() {
                        document.getElementById('addOEMModal').classList.add('hidden');
                    }
                </script>
            </div>
        </div>
    </div>
</body>
</html>
