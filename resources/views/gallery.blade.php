<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolahan - Gallery & Moments of Excellence</title>
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
      <a href="gallery.html" class="text-sky-500 border-b-2 border-sky-500 pb-1">Gallery</a>
      <a href="news.html" class="hover:text-sky-500 transition">News</a>
    </nav>

    <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white text-xs font-semibold px-5 py-2.5 rounded-lg transition shadow-sm">
      Apply Now
    </a>
  </header>

  <!-- ================= HEADER SECTION ================= -->
  <section class="pt-32 pb-8 px-6 lg:px-16 max-w-7xl mx-auto text-center">
    <h1 class="text-3xl md:text-5xl font-extrabold text-sky-500 tracking-tight mb-4">
      Moments of Excellence
    </h1>
    <p class="text-xs md:text-sm text-slate-500 max-w-xl mx-auto leading-relaxed mb-8">
      Explore the vibrant life at Sekolahan through our curated collection of memories, from architectural marvels to student achievements.
    </p>

    <!-- Category Filter Pills -->
    <div class="flex flex-wrap items-center justify-center gap-2 md:gap-3">
      <button class="bg-sky-500 text-white px-6 py-2 rounded-full text-xs font-medium shadow-sm">All</button>
      <button class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200/80 px-6 py-2 rounded-full text-xs font-medium transition">Campus</button>
      <button class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200/80 px-6 py-2 rounded-full text-xs font-medium transition">Students</button>
      <button class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200/80 px-6 py-2 rounded-full text-xs font-medium transition">Events</button>
      <button class="bg-white hover:bg-slate-100 text-slate-600 border border-slate-200/80 px-6 py-2 rounded-full text-xs font-medium transition">Videos</button>
    </div>
  </section>

  <!-- ================= GALLERY MASONRY GRID ================= -->
  <section class="py-10 px-6 lg:px-16 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      
      <!-- COLUMN 1 -->
      <div class="space-y-6">
        <!-- Photo 1: Modern Building -->
        <div class="relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer border border-slate-100">
          <img 
            src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=800&auto=format&fit=crop" 
            alt="Modern Campus Architecture" 
            class="w-full h-60 object-cover group-hover:scale-105 transition duration-500"
          >
        </div>

        <!-- Photo 2 (Tall): Innovation Lab with Video Overlay -->
        <div class="relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer border border-slate-100">
          <img 
            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=800&auto=format&fit=crop" 
            alt="Innovation Lab in Action" 
            class="w-full h-[420px] object-cover group-hover:scale-105 transition duration-500"
          >
          <!-- Gradient Overlay -->
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/70 via-slate-900/10 to-transparent"></div>
          
          <!-- Play Icon Center -->
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="w-12 h-12 rounded-full bg-white/30 backdrop-blur-md flex items-center justify-center text-white border border-white/50 group-hover:scale-110 transition">
              <i data-lucide="play" class="w-5 h-5 fill-current ml-0.5"></i>
            </div>
          </div>

          <!-- Bottom Title -->
          <div class="absolute bottom-4 left-4 text-white font-semibold text-xs tracking-wide">
            Innovation Lab in Action
          </div>
        </div>
      </div>

      <!-- COLUMN 2 -->
      <div class="space-y-6">
        <!-- Photo 3: Sports Football Match -->
        <div class="relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer border border-slate-100">
          <img 
            src="https://images.unsplash.com/photo-1517649763962-0c623266010b?q=80&w=800&auto=format&fit=crop" 
            alt="Sports Match" 
            class="w-full h-60 object-cover group-hover:scale-105 transition duration-500"
          >
        </div>

        <!-- Photo 4: Graduation Day -->
        <div class="relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer border border-slate-100">
          <img 
            src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?q=80&w=800&auto=format&fit=crop" 
            alt="Graduation Ceremony" 
            class="w-full h-52 object-cover group-hover:scale-105 transition duration-500"
          >
        </div>

        <!-- Photo 5: Modern Atrium / Library -->
        <div class="relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer border border-slate-100">
          <img 
            src="https://images.unsplash.com/photo-1521587760476-6c12a4b040da?q=80&w=800&auto=format&fit=crop" 
            alt="Atrium Library" 
            class="w-full h-80 object-cover group-hover:scale-105 transition duration-500"
          >
        </div>
      </div>

      <!-- COLUMN 3 -->
      <div class="space-y-6">
        <!-- Photo 6: Research Symposium with Video Overlay -->
        <div class="relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer border border-slate-100">
          <img 
            src="https://images.unsplash.com/photo-1531482615713-2afd69097998?q=80&w=800&auto=format&fit=crop" 
            alt="Research Symposium" 
            class="w-full h-60 object-cover group-hover:scale-105 transition duration-500"
          >
          <!-- Dark Overlay -->
          <div class="absolute inset-0 bg-slate-900/30"></div>
          <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent"></div>

          <!-- Play Icon Center -->
          <div class="absolute inset-0 flex items-center justify-center">
            <div class="w-12 h-12 rounded-full bg-white/30 backdrop-blur-md flex items-center justify-center text-white border border-white/50 group-hover:scale-110 transition">
              <i data-lucide="play" class="w-5 h-5 fill-current ml-0.5"></i>
            </div>
          </div>

          <!-- Bottom Title -->
          <div class="absolute bottom-4 left-4 text-white font-semibold text-xs tracking-wide">
            Research Symposium
          </div>
        </div>

        <!-- Photo 7: Aerial View Campus -->
        <div class="relative group rounded-2xl overflow-hidden shadow-sm hover:shadow-md transition cursor-pointer border border-slate-100">
          <img 
            src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?q=80&w=800&auto=format&fit=crop" 
            alt="Aerial Campus View" 
            class="w-full h-52 object-cover group-hover:scale-105 transition duration-500"
          >
        </div>
      </div>

    </div>
  </section>

  <!-- ================= FOOTER ================= -->
  <footer class="bg-white border-t border-slate-100 py-8 px-6 lg:px-16 text-xs text-slate-500 mt-12">
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