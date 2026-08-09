<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sekolahan - Empowering Future Leaders</title>
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
  <header class="fixed top-0 left-0 w-full z-50 py-4 px-6 lg:px-16 flex items-center justify-between bg-white/60 backdrop-blur-md border-b border-white/30 shadow-sm transition-all duration-300">
    <div class="text-2xl font-bold text-sky-500 tracking-tight">Sekolahan</div>
    
    <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-700">
      <a href="/" class="text-sky-500 border-b-2 border-sky-500 pb-1">Home</a>
      <a href="/about" class="hover:text-sky-500 transition">About</a>
      <a href="#" class="hover:text-sky-500 transition">Gallery</a>
      <a href="#" class="hover:text-sky-500 transition">News</a>
    </nav>

    <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white text-xs font-semibold px-5 py-2.5 rounded-md transition shadow-sm">
      Apply Now
    </a>
  </header>

  <!-- ================= HERO SECTION ================= -->
  <section class="relative min-h-[780px] lg:min-h-[840px] flex items-center pt-20 px-6 lg:px-16 overflow-hidden">
    <!-- Background Image -->
    <div class="absolute inset-0 -z-10">
      <img src="https://images.pexels.com/photos/31385486/pexels-photo-31385486.jpeg" alt="School Background" class="w-full h-full object-cover">
    </div>

    <!-- Glassmorphic Card (Enhanced Glassmorphism) -->
    <div class="max-w-xl bg-white/40 backdrop-blur-xl p-8 md:p-12 rounded-3xl shadow-2xl border border-white/60 my-10">
      <h1 class="text-3xl md:text-4xl font-extrabold text-sky-600 leading-tight mb-4">
        Empowering<br>Future Leaders
      </h1>
      <p class="text-xs md:text-sm text-slate-700/90 font-medium mb-8 leading-relaxed">
        At Sekolahan, we combine academic rigor with creative exploration to prepare students for a rapidly evolving world. Discover a community where excellence meets empathy.
      </p>
      <div class="flex flex-wrap gap-4 text-xs font-medium">
        <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white px-5 py-3 rounded-xl transition shadow-md hover:shadow-lg">
          Explore Campus
        </a>
        <!-- Glassmorphic Secondary Button -->
        <a href="#" class="bg-white/50 hover:bg-white/80 text-slate-800 border border-white/70 backdrop-blur-sm px-5 py-3 rounded-xl transition shadow-sm">
          View Curriculum
        </a>
      </div>
    </div>
  </section>

  <!-- ================= STATS SECTION ================= -->
  <section class="bg-white py-12 px-6 border-b border-slate-100">
    <div class="max-w-5xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-slate-100">
      <div class="pt-4 md:pt-0">
        <div class="text-3xl md:text-4xl font-extrabold text-sky-500">98%</div>
        <div class="text-xs font-bold tracking-wider text-slate-400 mt-2 uppercase">Graduation Rate</div>
      </div>
      <div class="pt-4 md:pt-0">
        <div class="text-3xl md:text-4xl font-extrabold text-sky-500">50+</div>
        <div class="text-xs font-bold tracking-wider text-slate-400 mt-2 uppercase">Global Programs</div>
      </div>
      <div class="pt-4 md:pt-0">
        <div class="text-3xl md:text-4xl font-extrabold text-sky-500">20:1</div>
        <div class="text-xs font-bold tracking-wider text-slate-400 mt-2 uppercase">Student Ratio</div>
      </div>
    </div>
  </section>

  <!-- ================= PROGRAMS SECTION ================= -->
  <section class="py-16 px-6 lg:px-16 max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
      <div>
        <span class="text-xs font-bold text-sky-500 uppercase tracking-wider">Academic Excellence</span>
        <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mt-1">Our Distinguished Programs</h2>
      </div>
      <a href="#" class="inline-flex items-center text-xs font-semibold text-sky-500 hover:text-sky-600 mt-4 md:mt-0">
        View All Programs <i data-lucide="arrow-right" class="w-4 h-4 ml-1"></i>
      </a>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Card 1 -->
      <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
        <div class="w-10 h-10 bg-sky-100 text-sky-500 rounded-lg flex items-center justify-center mb-6">
          <i data-lucide="flask-conical" class="w-5 h-5"></i>
        </div>
        <h3 class="text-base font-bold text-slate-800 mb-2">Science & Tech</h3>
        <p class="text-xs text-slate-500 leading-relaxed mb-6">
          Pushing the boundaries of innovation through advanced robotics, AI research, and sustainable engineering initiatives.
        </p>
        <ul class="text-xs text-slate-600 space-y-2 font-medium">
          <li class="flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-sky-500"></i> Quantum Computing</li>
          <li class="flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-sky-500"></i> Bio-Engineering</li>
        </ul>
      </div>

      <!-- Card 2 -->
      <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
        <div class="w-10 h-10 bg-rose-100 text-rose-500 rounded-lg flex items-center justify-center mb-6">
          <i data-lucide="palette" class="w-5 h-5"></i>
        </div>
        <h3 class="text-base font-bold text-slate-800 mb-2">Arts & Humanities</h3>
        <p class="text-xs text-slate-500 leading-relaxed mb-6">
          Cultivating creative thinking and critical analysis through deep engagement with literature, history, and visual arts.
        </p>
        <ul class="text-xs text-slate-600 space-y-2 font-medium">
          <li class="flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-rose-500"></i> Digital Arts</li>
          <li class="flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-rose-500"></i> Philosophy & Ethics</li>
        </ul>
      </div>

      <!-- Card 3 -->
      <div class="bg-white p-6 rounded-xl shadow-sm border border-slate-100 hover:shadow-md transition">
        <div class="w-10 h-10 bg-indigo-100 text-indigo-500 rounded-lg flex items-center justify-center mb-6">
          <i data-lucide="globe" class="w-5 h-5"></i>
        </div>
        <h3 class="text-base font-bold text-slate-800 mb-2">Global Business</h3>
        <p class="text-xs text-slate-500 leading-relaxed mb-6">
          Developing ethical leaders and entrepreneurs equipped with the strategic skills to navigate the global economy.
        </p>
        <ul class="text-xs text-slate-600 space-y-2 font-medium">
          <li class="flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-indigo-500"></i> Strategic Management</li>
          <li class="flex items-center gap-2"><i data-lucide="sparkles" class="w-3.5 h-3.5 text-indigo-500"></i> Social Entrepreneurship</li>
        </ul>
      </div>
    </div>
  </section>

  <!-- ================= PHILOSOPHY / ABOUT SECTION ================= -->
  <section class="py-16 px-6 lg:px-16 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
      <!-- Image with Quote Box Overlay -->
      <div class="relative">
        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?q=80&w=1000&auto=format&fit=crop" alt="Library" class="rounded-2xl shadow-lg w-full h-[380px] object-cover">
        
        <!-- Quote Box -->
        <div class="absolute -bottom-6 -right-2 md:bottom-6 md:-right-6 max-w-xs bg-sky-500 text-white p-5 rounded-xl shadow-xl">
          <p class="text-xs font-semibold leading-relaxed">
            "Education is not the filling of a pail, but the lighting of a fire."
          </p>
        </div>
      </div>

      <!-- Content -->
      <div class="lg:pl-6">
        <span class="text-xs font-bold text-sky-500 uppercase tracking-wider">Our Philosophy</span>
        <h2 class="text-2xl md:text-3xl font-bold text-slate-800 mt-1 mb-6">
          Shaping the Visionaries of Tomorrow
        </h2>
        <p class="text-xs text-slate-500 leading-relaxed mb-4">
          Founded on the principles of academic integrity and global citizenship, Academia Global provides a transformative educational experience that transcends traditional boundaries.
        </p>
        <p class="text-xs text-slate-500 leading-relaxed mb-8">
          We believe in the power of diverse perspectives. Our faculty members are not just educators but mentors who inspire students to question, innovate, and lead with purpose in an interconnected world.
        </p>
        <a href="#" class="inline-block bg-sky-500 hover:bg-sky-600 text-white text-xs font-medium px-6 py-3 rounded-md transition shadow">
          Our Mission & Values
        </a>
      </div>
    </div>
  </section>

  <!-- ================= CTA BANNER ================= -->
  <section class="py-12 px-6 lg:px-16 max-w-7xl mx-auto">
    <div class="bg-gradient-to-r from-sky-500 to-sky-400 text-white rounded-2xl p-8 md:p-12 text-center shadow-lg">
      <h2 class="text-2xl md:text-3xl font-bold mb-3">Ready to Start Your Journey?</h2>
      <p class="text-xs text-sky-100 max-w-xl mx-auto mb-8">
        Join a global network of thinkers, creators, and innovators. Applications for the Fall semester are now open.
      </p>
      <div class="flex flex-wrap justify-center gap-4 text-xs font-medium">
        <a href="#" class="bg-white text-sky-600 hover:bg-sky-50 px-6 py-3 rounded-md transition shadow">
          Start Your Application
        </a>
        <a href="#" class="border border-white/60 hover:bg-white/10 text-white px-6 py-3 rounded-md transition">
          Request Information
        </a>
      </div>
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