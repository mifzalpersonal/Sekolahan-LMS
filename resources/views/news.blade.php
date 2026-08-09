<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolahan - School News & Updates</title>
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
<body class="bg-slate-50 text-slate-800 antialiased">

  <!-- ================= NAVBAR (GLASSMORPHISM) ================= -->
  <header class="fixed top-0 left-0 w-full z-50 py-4 px-6 lg:px-16 flex items-center justify-between bg-white/70 backdrop-blur-md border-b border-white/40 shadow-sm transition-all duration-300">
    <div class="text-2xl font-bold text-sky-500 tracking-tight">Sekolahan</div>
    
    <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-600">
      <a href="index.html" class="hover:text-sky-500 transition">Home</a>
      <a href="about.html" class="hover:text-sky-500 transition">About</a>
      <a href="#" class="hover:text-sky-500 transition">Gallery</a>
      <a href="news.html" class="text-sky-500 border-b-2 border-sky-500 pb-1">News</a>
    </nav>

    <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white text-xs font-semibold px-5 py-2.5 rounded-lg transition shadow-sm">
      Apply Now
    </a>
  </header>

  <!-- ================= PAGE HEADER & FILTERS ================= -->
  <section class="pt-32 pb-8 px-6 lg:px-16 max-w-7xl mx-auto">
    <h1 class="text-3xl md:text-5xl font-extrabold text-sky-500 leading-tight mb-3">
      School News &<br>Updates
    </h1>
    <p class="text-xs md:text-sm text-slate-500 max-w-xl leading-relaxed mb-8">
      Stay connected with the latest breakthroughs, student achievements, and campus developments at Sekolahan.
    </p>

    <!-- Categories & Search Bar -->
    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
      <!-- Category Filter Pills -->
      <div class="flex flex-wrap items-center gap-2">
        <button class="bg-sky-500 text-white px-5 py-2 rounded-full text-xs font-medium shadow-sm">All</button>
        <button class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200/80 px-5 py-2 rounded-full text-xs font-medium transition">Students</button>
        <button class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200/80 px-5 py-2 rounded-full text-xs font-medium transition">Teachers</button>
        <button class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200/80 px-5 py-2 rounded-full text-xs font-medium transition">Events</button>
        <button class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200/80 px-5 py-2 rounded-full text-xs font-medium transition">Awards</button>
      </div>

      <!-- Search Box -->
      <div class="relative w-full md:w-72">
        <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"></i>
        <input 
          type="text" 
          placeholder="Search news..." 
          class="w-full pl-10 pr-4 py-2 bg-white border border-slate-200 rounded-lg text-xs text-slate-700 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-sky-500 transition shadow-sm"
        >
      </div>
    </div>
  </section>

  <!-- ================= FEATURED ARTICLE ================= -->
  <section class="py-6 px-6 lg:px-16 max-w-7xl mx-auto">
    <div class="bg-white rounded-3xl overflow-hidden shadow-sm border border-slate-100 grid grid-cols-1 lg:grid-cols-12 gap-0">
      <!-- Left Image -->
      <div class="lg:col-span-7 relative h-64 sm:h-80 lg:h-auto min-h-[300px]">
        <img 
          src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=1200&auto=format&fit=crop" 
          alt="Classroom research" 
          class="w-full h-full object-cover"
        >
      </div>

      <!-- Right Content -->
      <div class="lg:col-span-5 p-6 sm:p-10 flex flex-col justify-between">
        <div>
          <span class="inline-block bg-sky-100 text-sky-600 text-[11px] font-bold px-3 py-1 rounded-md mb-4">
            Featured • Research
          </span>
          <h2 class="text-xl sm:text-2xl font-bold text-slate-900 leading-snug mb-4">
            Breakthrough in Sustainable Quantum Computing Research
          </h2>
          <p class="text-xs text-slate-500 leading-relaxed mb-6">
            The Sekolahan Department of Applied Sciences has unveiled a revolutionary new approach to quantum cooling, potentially...
          </p>
        </div>

        <div class="flex items-center justify-between pt-4 border-t border-slate-100 text-xs">
          <span class="text-slate-400">October 24, 2024</span>
          <a href="#" class="text-sky-500 font-semibold inline-flex items-center hover:text-sky-600 transition">
            Read More <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= NEWS GRID & SIDEBAR ================= -->
  <section class="py-8 px-6 lg:px-16 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
      
      <!-- Left: News Cards Grid (8 cols) -->
      <div class="lg:col-span-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        
        <!-- Card 1 -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=600&auto=format&fit=crop" alt="News" class="w-full h-full object-cover">
              <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-sky-600 text-[10px] font-bold px-2.5 py-1 rounded-md">Campus Life</span>
            </div>
            <div class="p-4">
              <span class="text-[10px] text-slate-400 block mb-1">OCT 21, 2024</span>
              <h3 class="text-xs sm:text-sm font-bold text-slate-800 leading-snug mb-2">New Global Leadership Minor Introduced</h3>
              <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2">Celebrating creativity across three days of...</p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1577896851231-70ef18881754?q=80&w=600&auto=format&fit=crop" alt="News" class="w-full h-full object-cover">
              <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-sky-600 text-[10px] font-bold px-2.5 py-1 rounded-md">Sports</span>
            </div>
            <div class="p-4">
              <span class="text-[10px] text-slate-400 block mb-1">OCT 18, 2024</span>
              <h3 class="text-xs sm:text-sm font-bold text-slate-800 leading-snug mb-2">New Global Leadership Minor Introduced</h3>
              <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2">A historic victory for the Academia Eagles as they...</p>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=600&auto=format&fit=crop" alt="News" class="w-full h-full object-cover">
              <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-sky-600 text-[10px] font-bold px-2.5 py-1 rounded-md">Academics</span>
            </div>
            <div class="p-4">
              <span class="text-[10px] text-slate-400 block mb-1">OCT 15, 2024</span>
              <h3 class="text-xs sm:text-sm font-bold text-slate-800 leading-snug mb-2">New Global Leadership Minor Introduced</h3>
              <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2">Expanding the curriculum to prepare students for the...</p>
            </div>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=600&auto=format&fit=crop" alt="News" class="w-full h-full object-cover">
              <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-sky-600 text-[10px] font-bold px-2.5 py-1 rounded-md">Research</span>
            </div>
            <div class="p-4">
              <span class="text-[10px] text-slate-400 block mb-1">OCT 12, 2024</span>
              <h3 class="text-xs sm:text-sm font-bold text-slate-800 leading-snug mb-2">New Global Leadership Minor Introduced</h3>
              <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2">Students collaborate with urban planners to solve...</p>
            </div>
          </div>
        </div>

        <!-- Card 5 -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=600&auto=format&fit=crop" alt="News" class="w-full h-full object-cover">
              <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-sky-600 text-[10px] font-bold px-2.5 py-1 rounded-md">Campus Life</span>
            </div>
            <div class="p-4">
              <span class="text-[10px] text-slate-400 block mb-1">OCT 10, 2024</span>
              <h3 class="text-xs sm:text-sm font-bold text-slate-800 leading-snug mb-2">New Global Leadership Minor Introduced</h3>
              <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2">The renovated Hub offers new social spaces and...</p>
            </div>
          </div>
        </div>

        <!-- Card 6 -->
        <div class="bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 flex flex-col justify-between hover:shadow-md transition">
          <div>
            <div class="relative h-40">
              <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=600&auto=format&fit=crop" alt="News" class="w-full h-full object-cover">
              <span class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm text-sky-600 text-[10px] font-bold px-2.5 py-1 rounded-md">Academics</span>
            </div>
            <div class="p-4">
              <span class="text-[10px] text-slate-400 block mb-1">OCT 05, 2024</span>
              <h3 class="text-xs sm:text-sm font-bold text-slate-800 leading-snug mb-2">New Global Leadership Minor Introduced</h3>
              <p class="text-[11px] text-slate-500 leading-relaxed line-clamp-2">Recognizing excellence in theoretical physics and...</p>
            </div>
          </div>
        </div>

      </div>

      <!-- Right: Sidebar Widgets (4 cols) -->
      <div class="lg:col-span-4 space-y-6">
        
        <!-- Upcoming Events Widget -->
        <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm">
          <div class="flex items-center justify-between mb-4">
            <h3 class="text-sm font-bold text-sky-500 flex items-center gap-2">
              Upcoming Events
            </h3>
            <i data-lucide="calendar" class="w-4 h-4 text-sky-500"></i>
          </div>

          <div class="space-y-4">
            <!-- Event 1 -->
            <div class="flex items-center gap-3">
              <div class="bg-sky-100 text-sky-600 rounded-lg p-2 text-center min-w-[48px]">
                <span class="block text-[9px] font-bold uppercase">OCT</span>
                <span class="block text-sm font-extrabold leading-none">28</span>
              </div>
              <div>
                <h4 class="text-xs font-bold text-slate-800 leading-tight">Graduate Research Fair</h4>
                <p class="text-[10px] text-slate-400">10:00 AM - Grand Hall</p>
              </div>
            </div>

            <!-- Event 2 -->
            <div class="flex items-center gap-3">
              <div class="bg-slate-100 text-slate-600 rounded-lg p-2 text-center min-w-[48px]">
                <span class="block text-[9px] font-bold uppercase">NOV</span>
                <span class="block text-sm font-extrabold leading-none">02</span>
              </div>
              <div>
                <h4 class="text-xs font-bold text-slate-800 leading-tight">Career Path Symposium</h4>
                <p class="text-[10px] text-slate-400">02:30 PM - Online</p>
              </div>
            </div>

            <!-- Event 3 -->
            <div class="flex items-center gap-3">
              <div class="bg-slate-100 text-slate-600 rounded-lg p-2 text-center min-w-[48px]">
                <span class="block text-[9px] font-bold uppercase">NOV</span>
                <span class="block text-sm font-extrabold leading-none">05</span>
              </div>
              <div>
                <h4 class="text-xs font-bold text-slate-800 leading-tight">Winter Athletics Kickoff</h4>
                <p class="text-[10px] text-slate-400">05:00 PM - Arena</p>
              </div>
            </div>
          </div>

          <a href="#" class="block text-center border border-slate-200 text-sky-500 font-semibold text-[11px] py-2.5 rounded-lg mt-6 hover:bg-sky-50 transition">
            View All Events
          </a>
        </div>

        <!-- Campus Alert Widget -->
        <div class="bg-sky-500 text-white p-6 rounded-2xl shadow-md">
          <h3 class="text-sm font-bold mb-2">Campus Alert</h3>
          <p class="text-xs text-sky-100 leading-relaxed mb-6">
            Maintenance update for Science Building East scheduled for Saturday Oct 28. Access remains open.
          </p>
          <a href="#" class="inline-flex items-center text-xs font-semibold text-white hover:underline">
            Learn more <i data-lucide="external-link" class="w-3.5 h-3.5 ml-1"></i>
          </a>
        </div>

      </div>

    </div>
  </section>

  <!-- ================= PAGINATION ================= -->
  <section class="py-10 px-6 max-w-7xl mx-auto flex justify-center">
    <div class="inline-flex items-center gap-2 text-xs font-medium">
      <button class="px-4 py-2 text-slate-400 hover:text-slate-600 transition">
        &lt; Previous
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
      <button class="px-4 py-2 text-slate-600 hover:text-sky-500 transition">
        Next &gt;
      </button>
    </div>
  </section>

  <!-- ================= FOOTER ================= -->
  <footer class="bg-white border-t border-slate-100 py-8 px-6 lg:px-16 text-xs text-slate-500">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-6">
      <div>
        <div class="text-lg font-bold text-sky-500 mb-1">Sekolahan</div>
        <p>© 2024 Sekolahan. Excellence in Education.</p>
      </div>

      <div class="flex items-center space-x-6 font-medium">
        <a href="#" class="hover:text-sky-500 transition">Privacy Policy</a>
        <a href="#" class="hover:text-sky-500 transition">Terms of Service</a>
        <a href="#" class="hover:text-sky-500 transition">Contact Us</a>
      </div>

      <div class="flex items-center space-x-4">
        <a href="#" class="text-slate-400 hover:text-sky-500 transition"><i data-lucide="message-circle" class="w-4 h-4"></i></a>
        <a href="#" class="text-slate-400 hover:text-sky-500 transition"><i data-lucide="youtube" class="w-4 h-4"></i></a>
      </div>
    </div>
  </footer>

  <!-- Initialize Lucide Icons -->
  <script>
    lucide.createIcons();
  </script>
</body>
</html>