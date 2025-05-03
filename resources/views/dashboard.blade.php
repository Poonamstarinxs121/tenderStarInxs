
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Star Tender Management</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] min-h-screen">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-64 bg-white dark:bg-[#161615] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d]">
            <div class="p-4 border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
                <h1 class="text-xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">StarTenderManagement</h1>
            </div>
            <nav class="p-4">
                <a href="/dashboard" class="flex items-center px-4 py-2 mb-2 text-[#1b1b18] dark:text-[#EDEDEC] bg-[#fff2f2] dark:bg-[#1D0002] rounded-lg">
                    <span>Dashboard</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 mb-2 text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] rounded-lg">
                    <span>Companies</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 mb-2 text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] rounded-lg">
                    <span>OEMs</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 mb-2 text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] rounded-lg">
                    <span>Customers</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 mb-2 text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] rounded-lg">
                    <span>User Management</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 mb-2 text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] rounded-lg">
                    <span>Leads</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 mb-2 text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] rounded-lg">
                    <span>Document Management</span>
                </a>
                <a href="#" class="flex items-center px-4 py-2 mb-2 text-[#706f6c] dark:text-[#A1A09A] hover:bg-[#fff2f2] dark:hover:bg-[#1D0002] rounded-lg">
                    <span>Tender Management</span>
                </a>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-semibold text-[#1b1b18] dark:text-[#EDEDEC]">OEMs</h2>
                <button class="px-4 py-2 bg-[#1b1b18] dark:bg-[#eeeeec] text-white dark:text-[#1C1C1A] rounded-lg hover:bg-black dark:hover:bg-white">
                    Add New OEM
                </button>
            </div>

            <div class="bg-white dark:bg-[#161615] shadow-[inset_0px_0px_0px_1px_rgba(26,26,0,0.16)] dark:shadow-[inset_0px_0px_0px_1px_#fffaed2d] rounded-lg p-6">
                <div class="mb-4">
                    <input type="text" placeholder="Search OEMs..." class="w-full px-4 py-2 rounded-lg border border-[#e3e3e0] dark:border-[#3E3E3A] bg-transparent text-[#1b1b18] dark:text-[#EDEDEC]">
                </div>

                <table class="w-full">
                    <thead>
                        <tr class="text-left text-[#706f6c] dark:text-[#A1A09A] border-b border-[#e3e3e0] dark:border-[#3E3E3A]">
                            <th class="pb-3">Company Name</th>
                            <th class="pb-3">Contact Person</th>
                            <th class="pb-3">Phone No.</th>
                            <th class="pb-3">Email</th>
                            <th class="pb-3">Status</th>
                            <th class="pb-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="py-4 text-[#1b1b18] dark:text-[#EDEDEC]" colspan="6">
                                No OEMs found. Add your first OEM to get started.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
