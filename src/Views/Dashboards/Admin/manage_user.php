<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin – Manage Users</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .sidebar-gradient {
            background: linear-gradient(180deg, #111827 0%, #1f2937 100%);
        }
    </style>
</head>

<body class="bg-slate-100 text-slate-800">

<!-- ================= SIDEBAR ================= -->
<aside class="sidebar-gradient w-72 h-screen fixed left-0 top-0 hidden md:block border-r border-slate-800">
    <div class="p-6 border-b border-slate-800">
        <div class="flex items-center gap-3">
            <div class="w-10 h-10 bg-indigo-600 rounded-xl flex items-center justify-center text-white font-bold">
                TH
            </div>
            <span class="text-white font-bold text-xl">Talent HUB</span>
        </div>
    </div>

    <nav class="p-4 space-y-2">
        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-indigo-400 hover:bg-indigo-400/10">
            <i class="fas fa-columns w-5"></i>
            Dashboard
        </a>

        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-indigo-400/10 text-indigo-400">
            <i class="fas fa-users w-5"></i>
            Users
        </a>

        <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-400 hover:text-indigo-400 hover:bg-indigo-400/10">
            <i class="fas fa-briefcase w-5"></i>
            Job Offers
        </a>
    </nav>
</aside>

<!-- ================= MAIN ================= -->
<main class="md:ml-72 min-h-screen">

    <!-- TOPBAR -->
    <header class="h-[70px] bg-white border-b flex items-center justify-between px-8 sticky top-0 z-40">
        <h2 class="text-sm font-bold text-slate-500 uppercase tracking-wider">
            User Management
        </h2>

        <div class="flex items-center gap-3">
            <span class="text-sm font-semibold">Admin User</span>
            <div class="w-10 h-10 rounded-full bg-slate-900 text-white flex items-center justify-center font-bold">
                AU
            </div>
        </div>
    </header>

    <!-- CONTENT -->
    <div class="p-8">

        <!-- PAGE HEADER -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-3xl font-extrabold text-slate-900">Accounts</h1>
                <p class="text-slate-500">Manage all user accounts</p>
            </div>

            <button onclick="openModal()"
                    class="bg-indigo-600 text-white px-5 py-2.5 rounded-xl font-bold hover:bg-indigo-700">
                <i class="fas fa-plus"></i> Add User
            </button>
        </div>

        <!-- TABLE -->
        <div class="bg-white rounded-2xl border shadow overflow-hidden">
            <table class="w-full text-left border-collapse">
                <thead>
                <tr class="text-xs font-bold text-slate-400 uppercase bg-slate-50">
                    <th class="p-4">ID</th>
                    <th class="p-4">Full Name</th>
                    <th class="p-4">Email</th>
                    <th class="p-4">Phone</th>
                    <th class="p-4 text-center">Role</th>
                    <th class="p-4 text-right">Action</th>
                </tr>
                </thead>

                <tbody class="divide-y">

                <!-- ================= PHP LOOP GOES HERE ================= -->

                <tr class="hover:bg-slate-50">
                    <td class="p-4 font-semibold">1</td>
                    <td class="p-4 font-semibold">John Doe</td>
                    <td class="p-4 text-slate-600">john@example.com</td>
                    <td class="p-4 text-slate-600">0600000000</td>
                    <td class="p-4 text-center">
                        <span class="px-3 py-1 text-xs font-bold rounded-full bg-indigo-100 text-indigo-700">
                            Admin
                        </span>
                    </td>
                    <td class="p-4 text-right space-x-2">
                        <button class="w-8 h-8 rounded-lg hover:bg-indigo-50 text-slate-400 hover:text-indigo-600">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="w-8 h-8 rounded-lg hover:bg-red-50 text-slate-400 hover:text-red-600">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>

                <!-- ====================================================== -->

                </tbody>
            </table>
        </div>

    </div>
</main>

<!-- ================= MODAL ================= -->
<div id="userModal"
     class="fixed inset-0 bg-black/50 backdrop-blur-sm hidden items-center justify-center z-50">

    <div class="bg-white w-full max-w-lg rounded-2xl shadow-2xl overflow-hidden">
        <div class="p-6 border-b flex justify-between items-center bg-slate-50">
            <h3 class="text-lg font-bold">Add New User</h3>
            <button onclick="closeModal()" class="text-slate-400 hover:text-slate-600">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <form class="p-6 space-y-4">
            <div>
                <label class="block text-xs font-bold uppercase mb-1">Full Name</label>
                <input type="text" name="full_name" class="w-full px-4 py-2 border rounded-xl focus:border-indigo-500 outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase mb-1">Email</label>
                <input type="email" name="email" class="w-full px-4 py-2 border rounded-xl focus:border-indigo-500 outline-none">
            </div>

            <div>
                <label class="block text-xs font-bold uppercase mb-1">Phone</label>
                <input type="text" name="phone" class="w-full px-4 py-2 border rounded-xl focus:border-indigo-500 outline-none">
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-xs font-bold uppercase mb-1">Password</label>
                    <input type="password" name="password" class="w-full px-4 py-2 border rounded-xl">
                </div>
                <div>
                    <label class="block text-xs font-bold uppercase mb-1">Confirm Password</label>
                    <input type="password" name="repassword" class="w-full px-4 py-2 border rounded-xl">
                </div>
            </div>
            <div>
                <label class="block text-xs font-bold uppercase mb-1">Role</label>
                <select name="role" class="w-full px-4 py-2 border rounded-xl">
                    <option value="admin">Admin</option>
                    <option value="recruiter">Recruiter</option>
                    <option value="candidat">Candidat</option>
                </select>
            </div>

            <div class="pt-4 flex justify-end gap-3 border-t">
                <button type="button" onclick="closeModal()"
                        class="px-4 py-2 rounded-xl font-bold text-slate-500 hover:bg-slate-100">
                    Cancel
                </button>
                <button type="submit"
                        class="px-5 py-2 rounded-xl bg-indigo-600 text-white font-bold hover:bg-indigo-700">
                    Save User
                </button>
            </div>
        </form>
    </div>
</div>

<!-- ================= JS (UI ONLY) ================= -->
<script>
    function openModal() {
        const modal = document.getElementById('userModal');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    }

    function closeModal() {
        const modal = document.getElementById('userModal');
        modal.classList.add('hidden');
        modal.classList.remove('flex');
    }
</script>

</body>
</html>
