<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolah - Gallery Manager</title>
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
        <h1 class="text-xl font-bold text-teal-800 tracking-tight">Sekolah</h1>
        <p class="text-[10px] font-bold text-slate-400 tracking-wider uppercase">Admin Portal</p>
      </div>

      <!-- Navigation Menu -->
      <nav class="px-3 space-y-1 text-xs font-semibold">
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-300/50 hover:text-slate-900 transition">
          <i data-lucide="layout-dashboard" class="w-4 h-4"></i>
          Dashboard
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-300/50 hover:text-slate-900 transition">
          <i data-lucide="newspaper" class="w-4 h-4"></i>
          News Manager
        </a>
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-slate-600 hover:bg-slate-300/50 hover:text-slate-900 transition">
          <i data-lucide="user-plus" class="w-4 h-4"></i>
          PPDB Admissions
        </a>
        <!-- Active Link -->
        <a href="#" class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-teal-800/10 text-teal-800 border-r-4 border-teal-800 transition">
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
        <h2 class="text-lg font-bold text-slate-800">Gallery Manager</h2>
        <div class="flex items-center gap-1.5 text-[11px] text-slate-400">
          <span>Admin</span>
          <i data-lucide="chevron-right" class="w-3 h-3"></i>
          <span class="text-sky-500 font-medium">Gallery Manager</span>
        </div>
      </div>

      <div class="flex items-center gap-4">
        <!-- Search Input -->
        <div class="relative w-80">
          <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3 top-1/2 -translate-y-1/2"></i>
          <input 
            type="text" 
            placeholder="Search media by title..." 
            class="w-full pl-9 pr-4 py-2 bg-slate-100/80 border border-slate-200 rounded-lg text-xs text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 transition"
          >
        </div>

        <!-- Upload New Media Button -->
        <button class="bg-sky-500 hover:bg-sky-600 text-white font-semibold px-4 py-2 rounded-lg text-xs flex items-center gap-2 transition shadow-sm">
          <i data-lucide="cloud-upload" class="w-4 h-4"></i>
          Upload New Media
        </button>
      </div>
    </header>

    <!-- Content Padding -->
    <main class="p-8 space-y-6 flex-1">

      <!-- ================= FILTER TABS & BULK ACTIONS ================= -->
      <div class="flex items-center justify-between">
        <!-- Filter Pills Container -->
        <div class="bg-slate-200/60 p-1 rounded-xl inline-flex gap-1 text-xs font-semibold text-slate-600">
          <button class="bg-white text-sky-600 px-4 py-1.5 rounded-lg shadow-sm">All Media</button>
          <button class="px-4 py-1.5 rounded-lg hover:text-slate-900 transition">Photos</button>
          <button class="px-4 py-1.5 rounded-lg hover:text-slate-900 transition">Videos</button>
        </div>

        <!-- Selected Status & Delete -->
        <div class="flex items-center gap-4 text-xs font-medium text-slate-500">
          <span>0 items selected</span>
          <button class="flex items-center gap-1.5 text-slate-500 hover:text-rose-600 transition">
            <i data-lucide="trash-2" class="w-4 h-4"></i>
            Delete
          </button>
        </div>
      </div>

      <!-- ================= MEDIA CARDS GRID ================= -->
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- Card 1: Main Library -->
        <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?q=80&w=600&auto=format&fit=crop" alt="Main Library" class="w-full h-full object-cover">
              <!-- Checkbox -->
              <input type="checkbox" class="absolute top-3 left-3 w-4 h-4 rounded border-white/80 accent-sky-500 cursor-pointer">
              <!-- Status Badge -->
              <span class="absolute bottom-3 left-3 bg-emerald-500/90 text-white text-[9px] font-bold px-2 py-0.5 rounded-full backdrop-blur-sm flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-white"></span> PUBLISHED
              </span>
            </div>
            <div class="p-4">
              <div class="flex items-start justify-between gap-2 mb-1">
                <h3 class="text-xs font-bold text-slate-800 truncate">Main Library...</h3>
                <i data-lucide="image" class="w-4 h-4 text-slate-400 shrink-0"></i>
              </div>
              <p class="text-[11px] text-slate-400">Added: Oct 12, 2023</p>
              <p class="text-[11px] text-slate-400">2.4 MB</p>
            </div>
          </div>
          <!-- Card Actions -->
          <div class="px-4 pb-4 flex items-center gap-2">
            <button class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg transition"><i data-lucide="edit-2" class="w-3.5 h-3.5"></i></button>
            <button class="p-2 bg-slate-100 hover:bg-rose-50 hover:text-rose-600 text-slate-600 rounded-lg transition"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
          </div>
        </div>

        <!-- Card 2: STEM Lab -->
        <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=600&auto=format&fit=crop" alt="STEM Lab" class="w-full h-full object-cover">
              <input type="checkbox" class="absolute top-3 left-3 w-4 h-4 rounded border-white/80 accent-sky-500 cursor-pointer">
              <span class="absolute bottom-3 left-3 bg-emerald-500/90 text-white text-[9px] font-bold px-2 py-0.5 rounded-full backdrop-blur-sm flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-white"></span> PUBLISHED
              </span>
            </div>
            <div class="p-4">
              <div class="flex items-start justify-between gap-2 mb-1">
                <h3 class="text-xs font-bold text-slate-800 truncate">STEM Lab...</h3>
                <i data-lucide="image" class="w-4 h-4 text-slate-400 shrink-0"></i>
              </div>
              <p class="text-[11px] text-slate-400">Added: Nov 05, 2023</p>
              <p class="text-[11px] text-slate-400">1.8 MB</p>
            </div>
          </div>
          <div class="px-4 pb-4 flex items-center gap-2">
            <button class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg transition"><i data-lucide="edit-2" class="w-3.5 h-3.5"></i></button>
            <button class="p-2 bg-slate-100 hover:bg-rose-50 hover:text-rose-600 text-slate-600 rounded-lg transition"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
          </div>
        </div>

        <!-- Card 3: Annual Sports (Video) -->
        <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1517649763962-0c623266010b?q=80&w=600&auto=format&fit=crop" alt="Annual Sports" class="w-full h-full object-cover">
              <input type="checkbox" class="absolute top-3 left-3 w-4 h-4 rounded border-white/80 accent-sky-500 cursor-pointer">
              <!-- Play Icon Center -->
              <div class="absolute inset-0 flex items-center justify-center">
                <div class="w-10 h-10 rounded-full bg-slate-900/40 backdrop-blur-sm flex items-center justify-center text-white">
                  <i data-lucide="play" class="w-4 h-4 fill-current ml-0.5"></i>
                </div>
              </div>
              <span class="absolute bottom-3 left-3 bg-emerald-500/90 text-white text-[9px] font-bold px-2 py-0.5 rounded-full backdrop-blur-sm flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-white"></span> PUBLISHED
              </span>
              <span class="absolute bottom-3 right-3 bg-slate-900/70 text-white text-[9px] font-bold px-1.5 py-0.5 rounded">
                02:45
              </span>
            </div>
            <div class="p-4">
              <div class="flex items-start justify-between gap-2 mb-1">
                <h3 class="text-xs font-bold text-slate-800 truncate">Annual Sports...</h3>
                <i data-lucide="video" class="w-4 h-4 text-slate-400 shrink-0"></i>
              </div>
              <p class="text-[11px] text-slate-400">Added: Nov 15, 2023</p>
              <p class="text-[11px] text-slate-400">45 MB</p>
            </div>
          </div>
          <div class="px-4 pb-4 flex items-center gap-2">
            <button class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg transition"><i data-lucide="edit-2" class="w-3.5 h-3.5"></i></button>
            <button class="p-2 bg-slate-100 hover:bg-rose-50 hover:text-rose-600 text-slate-600 rounded-lg transition"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
          </div>
        </div>

        <!-- Card 4: Campus Night -->
        <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=600&auto=format&fit=crop" alt="Campus Night" class="w-full h-full object-cover">
              <input type="checkbox" class="absolute top-3 left-3 w-4 h-4 rounded border-white/80 accent-sky-500 cursor-pointer">
              <span class="absolute bottom-3 left-3 bg-emerald-500/90 text-white text-[9px] font-bold px-2 py-0.5 rounded-full backdrop-blur-sm flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-white"></span> PUBLISHED
              </span>
            </div>
            <div class="p-4">
              <div class="flex items-start justify-between gap-2 mb-1">
                <h3 class="text-xs font-bold text-slate-800 truncate">Campus Night...</h3>
                <i data-lucide="image" class="w-4 h-4 text-slate-400 shrink-0"></i>
              </div>
              <p class="text-[11px] text-slate-400">Added: Dec 01, 2023</p>
              <p class="text-[11px] text-slate-400">3.2 MB</p>
            </div>
          </div>
          <div class="px-4 pb-4 flex items-center gap-2">
            <button class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg transition"><i data-lucide="edit-2" class="w-3.5 h-3.5"></i></button>
            <button class="p-2 bg-slate-100 hover:bg-rose-50 hover:text-rose-600 text-slate-600 rounded-lg transition"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
          </div>
        </div>

        <!-- Card 5: Student Group -->
        <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop" alt="Student Group" class="w-full h-full object-cover">
              <input type="checkbox" class="absolute top-3 left-3 w-4 h-4 rounded border-white/80 accent-sky-500 cursor-pointer">
              <span class="absolute bottom-3 left-3 bg-emerald-500/90 text-white text-[9px] font-bold px-2 py-0.5 rounded-full backdrop-blur-sm flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-white"></span> PUBLISHED
              </span>
            </div>
            <div class="p-4">
              <div class="flex items-start justify-between gap-2 mb-1">
                <h3 class="text-xs font-bold text-slate-800 truncate">Student Group...</h3>
                <i data-lucide="image" class="w-4 h-4 text-slate-400 shrink-0"></i>
              </div>
              <p class="text-[11px] text-slate-400">Added: Dec 05, 2023</p>
              <p class="text-[11px] text-slate-400">2.1 MB</p>
            </div>
          </div>
          <div class="px-4 pb-4 flex items-center gap-2">
            <button class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg transition"><i data-lucide="edit-2" class="w-3.5 h-3.5"></i></button>
            <button class="p-2 bg-slate-100 hover:bg-rose-50 hover:text-rose-600 text-slate-600 rounded-lg transition"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
          </div>
        </div>

        <!-- Card 6: Class of 2023 -->
        <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=600&auto=format&fit=crop" alt="Class of 2023" class="w-full h-full object-cover">
              <input type="checkbox" class="absolute top-3 left-3 w-4 h-4 rounded border-white/80 accent-sky-500 cursor-pointer">
              <span class="absolute bottom-3 left-3 bg-emerald-500/90 text-white text-[9px] font-bold px-2 py-0.5 rounded-full backdrop-blur-sm flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-white"></span> PUBLISHED
              </span>
            </div>
            <div class="p-4">
              <div class="flex items-start justify-between gap-2 mb-1">
                <h3 class="text-xs font-bold text-slate-800 truncate">Class of 2023...</h3>
                <i data-lucide="image" class="w-4 h-4 text-slate-400 shrink-0"></i>
              </div>
              <p class="text-[11px] text-slate-400">Added: Jun 20, 2023</p>
              <p class="text-[11px] text-slate-400">4.5 MB</p>
            </div>
          </div>
          <div class="px-4 pb-4 flex items-center gap-2">
            <button class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg transition"><i data-lucide="edit-2" class="w-3.5 h-3.5"></i></button>
            <button class="p-2 bg-slate-100 hover:bg-rose-50 hover:text-rose-600 text-slate-600 rounded-lg transition"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
          </div>
        </div>

        <!-- Card 7: Class of 2023 (Alt) -->
        <div class="bg-white rounded-2xl border border-slate-200/70 shadow-sm overflow-hidden flex flex-col justify-between hover:shadow-md transition group">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=600&auto=format&fit=crop" alt="Class of 2023" class="w-full h-full object-cover">
              <input type="checkbox" class="absolute top-3 left-3 w-4 h-4 rounded border-white/80 accent-sky-500 cursor-pointer">
              <span class="absolute bottom-3 left-3 bg-emerald-500/90 text-white text-[9px] font-bold px-2 py-0.5 rounded-full backdrop-blur-sm flex items-center gap-1">
                <span class="w-1.5 h-1.5 rounded-full bg-white"></span> PUBLISHED
              </span>
            </div>
            <div class="p-4">
              <div class="flex items-start justify-between gap-2 mb-1">
                <h3 class="text-xs font-bold text-slate-800 truncate">Class of 2023...</h3>
                <i data-lucide="image" class="w-4 h-4 text-slate-400 shrink-0"></i>
              </div>
              <p class="text-[11px] text-slate-400">Added: Jun 20, 2023</p>
              <p class="text-[11px] text-slate-400">4.5 MB</p>
            </div>
          </div>
          <div class="px-4 pb-4 flex items-center gap-2">
            <button class="p-2 bg-slate-100 hover:bg-slate-200 text-slate-600 rounded-lg transition"><i data-lucide="edit-2" class="w-3.5 h-3.5"></i></button>
            <button class="p-2 bg-slate-100 hover:bg-rose-50 hover:text-rose-600 text-slate-600 rounded-lg transition"><i data-lucide="trash-2" class="w-3.5 h-3.5"></i></button>
          </div>
        </div>

        <!-- Card 8: Upload More Media Box -->
        <div class="border-2 border-dashed border-slate-300 hover:border-sky-400 rounded-2xl flex flex-col items-center justify-center p-6 text-center cursor-pointer transition bg-slate-50/50 hover:bg-sky-50/30 group h-[290px]">
          <div class="w-12 h-12 rounded-full bg-slate-200/80 group-hover:bg-sky-100 group-hover:text-sky-500 text-slate-500 flex items-center justify-center mb-3 transition">
            <i data-lucide="plus" class="w-6 h-6"></i>
          </div>
          <h4 class="text-xs font-bold text-slate-800 mb-1">Upload More Media</h4>
          <p class="text-[10px] text-slate-400 max-w-[140px]">
            Maximum file size: 100MB
          </p>
        </div>

      </div>

      <!-- ================= PAGINATION & COUNT ================= -->
      <div class="flex flex-col sm:flex-row items-center justify-between gap-4 pt-6 text-xs text-slate-500">
        <div>
          Showing <span class="font-bold text-slate-800">1 - 6</span> of <span class="font-bold text-slate-800">148</span> media items
        </div>

        <div class="inline-flex items-center gap-1.5 font-medium">
          <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-400 hover:text-slate-600 flex items-center justify-center transition">
            <i data-lucide="chevron-left" class="w-4 h-4"></i>
          </button>
          <button class="w-8 h-8 rounded-lg bg-sky-500 text-white font-bold flex items-center justify-center shadow-sm">
            1
          </button>
          <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition">
            2
          </button>
          <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition">
            3
          </button>
          <span class="px-1 text-slate-400">...</span>
          <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition">
            25
          </button>
          <button class="w-8 h-8 rounded-lg bg-white border border-slate-200 text-slate-600 hover:bg-slate-50 flex items-center justify-center transition">
            <i data-lucide="chevron-right" class="w-4 h-4"></i>
          </button>
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