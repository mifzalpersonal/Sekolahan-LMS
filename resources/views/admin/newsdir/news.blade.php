<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolahan - News Manager</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Lucide Icons -->
  <script src="https://unpkg.com/lucide@latest"></script>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap');
    body {
      font-family: 'Inter', sans-serif;
    }
  </style>
</head>
<body class="bg-slate-100 text-slate-800 antialiased flex min-h-screen">

  <!-- ================= SIDEBAR ================= -->
  <aside class="w-64 bg-slate-200/60 border-r border-slate-300/60 flex flex-col justify-between shrink-0 h-screen sticky top-0">
    <div>
      <!-- Brand Logo -->
      <div class="p-6">
        <h1 class="text-xl font-bold text-sky-500 tracking-tight">Sekolahan</h1>
        <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase">Admin Portal</p>
      </div>

      <!-- Navigation Menu -->
      <nav class="px-3 space-y-1 text-xs font-semibold">
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-300/50 hover:text-slate-900 transition">
          <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
          Dashboard
        </a>
        <!-- Active Link -->
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-sky-500/10 text-sky-600 border-r-4 border-sky-500 transition">
          <i data-lucide="newspaper" class="w-4 h-4"></i>
          News Manager
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-300/50 hover:text-slate-900 transition">
          <i data-lucide="user-plus" class="w-4 h-4"></i>
          PPDB Admissions
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-300/50 hover:text-slate-900 transition">
          <i data-lucide="image" class="w-4 h-4"></i>
          Gallery Manager
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-300/50 hover:text-slate-900 transition">
          <i data-lucide="file-text" class="w-4 h-4"></i>
          Page Content
        </a>

        <!-- Divider label -->
        <div class="pt-6 pb-2 px-3 text-[10px] font-bold text-slate-400 uppercase tracking-wider">
          System
        </div>

        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-300/50 hover:text-slate-900 transition">
          <i data-lucide="settings" class="w-4 h-4"></i>
          Settings
        </a>
      </nav>
    </div>

    <!-- User Profile Footer -->
    <div class="p-4 border-t border-slate-300/60 flex items-center justify-between">
      <div class="flex items-center gap-3">
        <div class="w-9 h-9 rounded-full bg-slate-300 text-slate-700 font-bold text-xs flex items-center justify-center border border-slate-400/40">
          JD
        </div>
        <div>
          <h4 class="text-xs font-bold text-slate-800 leading-tight">John Doe</h4>
          <p class="text-[10px] text-slate-500">Super Admin</p>
        </div>
      </div>
      <button class="text-slate-500 hover:text-slate-800 transition">
        <i data-lucide="log-out" class="w-4 h-4"></i>
      </button>
    </div>
  </aside>

  <!-- ================= MAIN CONTENT AREA ================= -->
  <div class="flex-1 flex flex-col min-w-0">

    <!-- Top Header Bar -->
    <header class="bg-white border-b border-slate-200/80 px-8 py-4 flex items-center justify-between sticky top-0 z-40">
      <div>
        <h2 class="text-lg font-bold text-slate-800">News Manager</h2>
        <div class="flex items-center gap-1.5 text-[11px] text-slate-400">
          <span>Admin</span>
          <i data-lucide="chevron-right" class="w-3 h-3"></i>
          <span class="text-sky-500 font-medium">News Manager</span>
        </div>
      </div>

      <div class="flex items-center gap-4">
        <!-- Search Bar -->
        <div class="relative w-72">
          <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2"></i>
          <input 
            type="text" 
            placeholder="Search news by title..." 
            class="w-full pl-9 pr-4 py-2 bg-slate-100/80 border border-slate-200 rounded-lg text-xs text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 transition"
          >
        </div>

        <!-- Upload Button -->
        <button class="bg-sky-500 hover:bg-sky-600 text-white font-semibold px-4 py-2 rounded-lg text-xs flex items-center gap-2 transition shadow-sm">
          <i data-lucide="cloud-upload" class="w-4 h-4"></i>
          Upload New News
        </button>
      </div>
    </header>

    <!-- Main Content Padding -->
    <main class="p-8 space-y-8 flex-1">

      <!-- ================= 4 METRICS CARDS ================= -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- Card 1 -->
        <div class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-sm flex items-start justify-between">
          <div>
            <p class="text-[11px] font-bold text-slate-500 leading-tight mb-2">Total Articles</p>
            <h3 class="text-3xl font-extrabold text-slate-800 mb-2">128</h3>
            <span class="text-[10px] font-semibold text-sky-600 flex items-center gap-1">
              <i data-lucide="trending-up" class="w-3 h-3"></i> +4 this week
            </span>
          </div>
          <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-500 flex items-center justify-center">
            <i data-lucide="file-text" class="w-5 h-5"></i>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-sm flex items-start justify-between">
          <div>
            <p class="text-[11px] font-bold text-slate-500 leading-tight mb-2">Published</p>
            <h3 class="text-3xl font-extrabold text-slate-800 mb-2">94</h3>
            <span class="text-[10px] text-slate-400 block">
              73% of total content
            </span>
          </div>
          <div class="w-10 h-10 rounded-xl bg-sky-50 text-sky-500 flex items-center justify-center">
            <i data-lucide="check-circle-2" class="w-5 h-5"></i>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-sm flex items-start justify-between">
          <div>
            <p class="text-[11px] font-bold text-slate-500 leading-tight mb-2">Drafts</p>
            <h3 class="text-3xl font-extrabold text-slate-800 mb-2">12</h3>
            <span class="text-[10px] text-slate-400 block">
              Pending review
            </span>
          </div>
          <div class="w-10 h-10 rounded-xl bg-slate-100 text-slate-500 flex items-center justify-center">
            <i data-lucide="file" class="w-5 h-5"></i>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white p-5 rounded-2xl border border-slate-200/70 shadow-sm flex items-start justify-between">
          <div>
            <p class="text-[11px] font-bold text-slate-500 leading-tight mb-2">Total Views</p>
            <h3 class="text-3xl font-extrabold text-slate-800 mb-2">45.2K</h3>
            <span class="text-[10px] font-semibold text-amber-600 flex items-center gap-1">
              <i data-lucide="sparkles" class="w-3 h-3"></i> 12% growth
            </span>
          </div>
          <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-600 flex items-center justify-center">
            <i data-lucide="eye" class="w-5 h-5"></i>
          </div>
        </div>

      </div>

      <!-- ================= SEARCH & FILTER CONTROL BAR ================= -->
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
        <!-- Filter Search Input -->
        <div class="relative w-full sm:w-96">
          <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
          <input 
            type="text" 
            placeholder="Filter articles by title or keyword..." 
            class="w-full pl-10 pr-4 py-2.5 bg-white border border-slate-200/80 rounded-xl text-xs text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 transition shadow-sm"
          >
        </div>

        <!-- Right Filter Actions -->
        <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
          <div class="flex items-center gap-2 text-xs font-semibold text-slate-500">
            <span>Status:</span>
            <select class="bg-white border border-slate-200 rounded-lg px-3 py-2 text-xs text-slate-700 focus:outline-none focus:ring-2 focus:ring-sky-500 shadow-sm cursor-pointer">
              <option>All Status</option>
              <option>Published</option>
              <option>Scheduled</option>
              <option>Draft</option>
            </select>
          </div>

          <button class="p-2 bg-white border border-slate-200 rounded-lg text-slate-500 hover:text-slate-800 shadow-sm transition">
            <i data-lucide="sliders-horizontal" class="w-4 h-4"></i>
          </button>
          <button class="p-2 bg-white border border-slate-200 rounded-lg text-slate-500 hover:text-slate-800 shadow-sm transition">
            <i data-lucide="arrow-down-up" class="w-4 h-4"></i>
          </button>
        </div>
      </div>

      <!-- ================= ARTICLES TABLE CARD ================= -->
      <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full text-left border-collapse text-xs">
            <thead>
              <tr class="bg-slate-50/80 border-b border-slate-100 text-slate-500 font-bold text-[11px]">
                <th class="py-3.5 px-6">Article Title</th>
                <th class="py-3.5 px-6">Category</th>
                <th class="py-3.5 px-6">Author</th>
                <th class="py-3.5 px-6">Date</th>
                <th class="py-3.5 px-6">Status</th>
                <th class="py-3.5 px-6 text-right">Actions</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-slate-100 text-slate-700">

              <!-- Row 1 -->
              <tr class="hover:bg-slate-50/60 transition">
                <td class="py-4 px-6 max-w-xs">
                  <h4 class="font-bold text-slate-900 leading-snug mb-1">Breakthrough in Sustainable Quantum Computing Research</h4>
                  <p class="text-[11px] text-slate-400 truncate">Breaking frontiers in environmental tech...</p>
                </td>
                <td class="py-4 px-6">
                  <span class="px-3 py-1 rounded-full text-[10px] font-semibold bg-sky-100 text-sky-600">Research</span>
                </td>
                <td class="py-4 px-6">
                  <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-700 text-[10px] font-bold flex items-center justify-center shrink-0">JD</span>
                    <span class="text-xs font-medium text-slate-800 leading-tight">Jane<br>Doe</span>
                  </div>
                </td>
                <td class="py-4 px-6 text-slate-500 text-[11px]">Oct 24, 2024</td>
                <td class="py-4 px-6">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-semibold bg-emerald-100 text-emerald-700">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Published
                  </span>
                </td>
                <td class="py-4 px-6 text-right">
                  <div class="flex items-center justify-end gap-2 text-slate-400">
                    <button class="p-1 hover:text-slate-700 transition"><i data-lucide="edit-2" class="w-4 h-4"></i></button>
                    <button class="p-1 hover:text-slate-700 transition"><i data-lucide="eye" class="w-4 h-4"></i></button>
                    <button class="p-1 hover:text-rose-600 transition"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                  </div>
                </td>
              </tr>

              <!-- Row 2 -->
              <tr class="hover:bg-slate-50/60 transition">
                <td class="py-4 px-6 max-w-xs">
                  <h4 class="font-bold text-slate-900 leading-snug mb-1">New Global Leadership Minor Introduced</h4>
                  <p class="text-[11px] text-slate-400 truncate">Available for enrollment starting spring...</p>
                </td>
                <td class="py-4 px-6">
                  <span class="px-3 py-1 rounded-full text-[10px] font-semibold bg-indigo-100 text-indigo-600">Academics</span>
                </td>
                <td class="py-4 px-6">
                  <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-sky-100 text-sky-700 text-[10px] font-bold flex items-center justify-center shrink-0">AU</span>
                    <span class="text-xs font-medium text-slate-800 leading-tight">Admin<br>User</span>
                  </div>
                </td>
                <td class="py-4 px-6 text-slate-500 text-[11px]">Oct 22, 2024</td>
                <td class="py-4 px-6">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-semibold bg-sky-100 text-sky-700">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-600"></span> Scheduled
                  </span>
                </td>
                <td class="py-4 px-6 text-right">
                  <div class="flex items-center justify-end gap-2 text-slate-400">
                    <button class="p-1 hover:text-slate-700 transition"><i data-lucide="edit-2" class="w-4 h-4"></i></button>
                    <button class="p-1 hover:text-slate-700 transition"><i data-lucide="eye" class="w-4 h-4"></i></button>
                    <button class="p-1 hover:text-rose-600 transition"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                  </div>
                </td>
              </tr>

              <!-- Row 3 -->
              <tr class="hover:bg-slate-50/60 transition">
                <td class="py-4 px-6 max-w-xs">
                  <h4 class="font-bold text-slate-900 leading-snug mb-1">Campus Expansion: East Wing Renovation</h4>
                  <p class="text-[11px] text-slate-400 truncate">Updates on phase 2 construction...</p>
                </td>
                <td class="py-4 px-6">
                  <span class="px-3 py-1 rounded-full text-[10px] font-semibold bg-slate-100 text-slate-600">Life</span>
                </td>
                <td class="py-4 px-6">
                  <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-amber-100 text-amber-700 text-[10px] font-bold flex items-center justify-center shrink-0">JD</span>
                    <span class="text-xs font-medium text-slate-800 leading-tight">Jane<br>Doe</span>
                  </div>
                </td>
                <td class="py-4 px-6 text-slate-500 text-[11px]">Oct 20, 2024</td>
                <td class="py-4 px-6">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-semibold bg-slate-100 text-slate-600">
                    <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span> Draft
                  </span>
                </td>
                <td class="py-4 px-6 text-right">
                  <div class="flex items-center justify-end gap-2 text-slate-400">
                    <button class="p-1 hover:text-slate-700 transition"><i data-lucide="edit-2" class="w-4 h-4"></i></button>
                    <button class="p-1 hover:text-slate-700 transition"><i data-lucide="eye" class="w-4 h-4"></i></button>
                    <button class="p-1 hover:text-rose-600 transition"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                  </div>
                </td>
              </tr>

              <!-- Row 4 -->
              <tr class="hover:bg-slate-50/60 transition">
                <td class="py-4 px-6 max-w-xs">
                  <h4 class="font-bold text-slate-900 leading-snug mb-1">Annual Scholarship Gala Announced</h4>
                  <p class="text-[11px] text-slate-400 truncate">Join us for an evening of giving...</p>
                </td>
                <td class="py-4 px-6">
                  <span class="px-3 py-1 rounded-full text-[10px] font-semibold bg-sky-100 text-sky-600">Campus</span>
                </td>
                <td class="py-4 px-6">
                  <div class="flex items-center gap-2">
                    <span class="w-6 h-6 rounded-full bg-sky-100 text-sky-700 text-[10px] font-bold flex items-center justify-center shrink-0">AU</span>
                    <span class="text-xs font-medium text-slate-800 leading-tight">Admin<br>User</span>
                  </div>
                </td>
                <td class="py-4 px-6 text-slate-500 text-[11px]">Oct 18, 2024</td>
                <td class="py-4 px-6">
                  <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-[10px] font-semibold bg-emerald-100 text-emerald-700">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-600"></span> Published
                  </span>
                </td>
                <td class="py-4 px-6 text-right">
                  <div class="flex items-center justify-end gap-2 text-slate-400">
                    <button class="p-1 hover:text-slate-700 transition"><i data-lucide="edit-2" class="w-4 h-4"></i></button>
                    <button class="p-1 hover:text-slate-700 transition"><i data-lucide="eye" class="w-4 h-4"></i></button>
                    <button class="p-1 hover:text-rose-600 transition"><i data-lucide="trash-2" class="w-4 h-4"></i></button>
                  </div>
                </td>
              </tr>

            </tbody>
          </table>
        </div>

        <!-- Table Pagination Footer -->
        <div class="p-4 bg-slate-50/50 border-t border-slate-100 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-500">
          <div>
            Showing <span class="font-bold text-slate-800">1 to 4</span> of <span class="font-bold text-slate-800">128</span> results
          </div>

          <div class="inline-flex items-center gap-1 font-medium">
            <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-400 hover:text-slate-600 flex items-center justify-center transition">
              <i data-lucide="chevron-left" class="w-4 h-4"></i>
            </button>
            <button class="w-8 h-8 rounded-lg bg-teal-800 text-white font-bold flex items-center justify-center shadow-sm">
              1
            </button>
            <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition">
              2
            </button>
            <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition">
              3
            </button>
            <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition">
              <i data-lucide="chevron-right" class="w-4 h-4"></i>
            </button>
          </div>
        </div>
      </div>

    </main>

    <!-- Footer -->
    <footer class="bg-white border-t border-slate-200/80 py-4 px-8 text-xs text-slate-500 flex flex-col sm:flex-row items-center justify-between gap-4 mt-auto">
      <p>© 2024 Sekolah. All rights reserved.</p>
    </footer>

  </div>

  <!-- Initialize Lucide Icons -->
  <script>
    lucide.createIcons();
  </script>
</body>
</html>