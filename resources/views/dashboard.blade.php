
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard - Star Tender Management</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <style>
        /* Base styles */
        body { background: #FDFDFC; min-height: 100vh; margin: 0; font-family: 'Instrument Sans', sans-serif; }
        .dark body { background: #0a0a0a; }
        
        /* Layout */
        .flex { display: flex; }
        .min-h-screen { min-height: 100vh; }
        .w-64 { width: 16rem; }
        .flex-1 { flex: 1; }
        .p-4 { padding: 1rem; }
        .p-8 { padding: 2rem; }
        .mb-8 { margin-bottom: 2rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        .px-4 { padding-left: 1rem; padding-right: 1rem; }
        .py-2 { padding-top: 0.5rem; padding-bottom: 0.5rem; }
        
        /* Colors and borders */
        .bg-white { background: white; }
        .dark .bg-white { background: #161615; }
        .text-white { color: white; }
        .rounded-lg { border-radius: 0.5rem; }
        
        /* Typography */
        .text-2xl { font-size: 1.5rem; }
        .font-semibold { font-weight: 600; }
        
        /* Sidebar */
        .sidebar { border-right: 1px solid #e3e3e0; }
        .dark .sidebar { border-color: #3E3E3A; }
        .nav-link { color: #706f6c; text-decoration: none; }
        .nav-link:hover { background: #fff2f2; }
        .dark .nav-link:hover { background: #1D0002; }
        .nav-link.active { background: #fff2f2; color: #1b1b18; }
        .dark .nav-link.active { background: #1D0002; color: #EDEDEC; }
        
        /* Table */
        table { width: 100%; border-collapse: collapse; }
        th { text-align: left; padding: 1rem 0; color: #706f6c; border-bottom: 1px solid #e3e3e0; }
        td { padding: 1rem 0; }
        .dark th { color: #A1A09A; border-color: #3E3E3A; }
        
        /* Search input */
        input[type="text"] { width: 100%; padding: 0.5rem 1rem; border: 1px solid #e3e3e0; border-radius: 0.5rem; margin-bottom: 1rem; }
        .dark input[type="text"] { background: transparent; border-color: #3E3E3A; color: #EDEDEC; }
        
        /* Button */
        .btn { padding: 0.5rem 1rem; background: #1b1b18; color: white; border: none; border-radius: 0.5rem; cursor: pointer; }
        .dark .btn { background: #eeeeec; color: #1C1C1A; }
    </style>
</head>
<body>
    <div class="flex min-h-screen">
        <aside class="w-64 bg-white sidebar">
            <div class="p-4">
                <h1 class="text-xl font-semibold">StarTenderManagement</h1>
            </div>
            <nav class="p-4">
                <a href="/dashboard" class="nav-link active block px-4 py-2 mb-2">Dashboard</a>
                <a href="#" class="nav-link block px-4 py-2 mb-2">Companies</a>
                <a href="#" class="nav-link block px-4 py-2 mb-2">OEMs</a>
                <a href="#" class="nav-link block px-4 py-2 mb-2">Customers</a>
                <a href="#" class="nav-link block px-4 py-2 mb-2">User Management</a>
                <a href="#" class="nav-link block px-4 py-2 mb-2">Leads</a>
                <a href="#" class="nav-link block px-4 py-2 mb-2">Document Management</a>
                <a href="#" class="nav-link block px-4 py-2 mb-2">Tender Management</a>
            </nav>
        </aside>

        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-semibold">OEMs</h2>
                <button class="btn">Add New OEM</button>
            </div>

            <div class="bg-white rounded-lg p-6">
                <input type="text" placeholder="Search OEMs...">
                <table>
                    <thead>
                        <tr>
                            <th>Company Name</th>
                            <th>Contact Person</th>
                            <th>Phone No.</th>
                            <th>Email</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="6">No OEMs found. Add your first OEM to get started.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
</body>
</html>
