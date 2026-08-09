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
  <header class="fixed top-0 left-0 w-full z-50 py-4 px-6 lg:px-16 flex items-center justify-between bg-white/70 backdrop-blur-md border-b border-white/40 shadow-sm transition-all duration-300">
    <div class="text-2xl font-bold text-sky-500 tracking-tight">Sekolahan</div>
    
    <nav class="hidden md:flex items-center space-x-8 text-sm font-medium text-slate-600">
      <a href="index.html" class="hover:text-sky-500 transition">Home</a>
      <a href="about.html" class="text-sky-500 border-b-2 border-sky-500 pb-1">About</a>
      <a href="#" class="hover:text-sky-500 transition">Gallery</a>
      <a href="#" class="hover:text-sky-500 transition">News</a>
    </nav>

    <a href="#apply" class="bg-sky-500 hover:bg-sky-600 text-white text-xs font-semibold px-5 py-2.5 rounded-lg transition shadow-sm">
      Apply Now
    </a>
  </header>

  <!-- ================= HERO SECTION ================= -->
  <section class="pt-32 pb-16 px-6 lg:px-16 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <!-- Left Column Text Content -->
      <div class="lg:col-span-6">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-sky-50 border border-sky-100 text-sky-600 text-xs font-medium mb-6">
          <span class="w-2 h-2 rounded-full bg-sky-500 animate-pulse"></span>
          Admissions Open for Fall 2024
        </div>

        <h1 class="text-3xl md:text-5xl font-extrabold text-slate-900 leading-tight mb-6 tracking-tight">
          Empowering <br>
          <span class="text-sky-500">Future Leaders</span> for <br>
          a Changing World
        </h1>

        <p class="text-xs md:text-sm text-slate-500 mb-8 leading-relaxed max-w-lg">
          Experience an academic culture that transcends boundaries. We cultivate critical thinkers and creative problem solvers to lead in a complex, globalized future.
        </p>

        <div class="flex flex-wrap items-center gap-4 text-xs font-medium">
          <a href="#" class="bg-sky-500 hover:bg-sky-600 text-white px-6 py-3.5 rounded-lg transition shadow-sm">
            Explore Campus
          </a>
          <a href="#" class="bg-white hover:bg-slate-50 text-sky-500 border border-sky-500/30 px-6 py-3.5 rounded-lg transition shadow-sm">
            View Executive
          </a>
        </div>
      </div>

      <!-- Right Column Image Card -->
      <div class="lg:col-span-6">
        <div class="relative rounded-3xl overflow-hidden shadow-xl border border-slate-100">
          <img 
            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1200&auto=format&fit=crop" 
            alt="Students collaborating" 
            class="w-full h-[380px] md:h-[440px] object-cover"
          >
        </div>
      </div>
    </div>
  </section>

  <!-- ================= A CENTURY OF ACADEMIC LEADERSHIP ================= -->
  <section class="py-16 px-6 lg:px-16 max-w-7xl mx-auto">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <!-- Left Text -->
      <div class="lg:col-span-5">
        <span class="text-xs font-bold text-sky-500 uppercase tracking-wider">Established 1924</span>
        <h2 class="text-2xl md:text-3xl font-bold text-sky-500 mt-1 mb-6 leading-snug">
          A Century of<br>Academic Leadership
        </h2>
        <p class="text-xs text-slate-500 leading-relaxed mb-4">
          Founded in the heart of a burgeoning intellectual movement in 1924, Sekolahan began as a small research collective dedicated to cross-border collaboration. Over the last century, we have expanded into a world-class institution with seven specialized colleges and a global network of alumni.
        </p>
        <p class="text-xs text-slate-500 leading-relaxed">
          Our growth is defined not just by infrastructure, but by the breakthrough ideas born within our halls. From pioneering environmental science to defining modern economic theory, our legacy is one of continuous evolution.
        </p>
      </div>

      <!-- Right Image Showcase Card -->
      <div class="lg:col-span-7 bg-slate-100/80 p-4 md:p-6 rounded-3xl border border-slate-200/60 shadow-sm">
        <div class="relative rounded-2xl overflow-hidden mb-4">
          <img src="https://images.unsplash.com/photo-1541829070764-84a7d30dd3f3?q=80&w=1000&auto=format&fit=crop" alt="Historical Campus" class="w-full h-52 md:h-60 object-cover">
          <!-- Glass Badge -->
          <div class="absolute top-4 right-4 bg-white/70 backdrop-blur-md px-4 py-2 rounded-xl border border-white/50 text-slate-800 text-right shadow-sm">
            <span class="block text-base font-extrabold text-sky-600">100+</span>
            <span class="block text-[10px] font-bold uppercase text-slate-600 tracking-wider">Years of Excellence</span>
          </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm text-center">
            <img src="https://images.unsplash.com/photo-1562774053-701939374585?q=80&w=600&auto=format&fit=crop" alt="Historical Roots" class="w-full h-28 object-cover rounded-lg mb-3">
            <h4 class="text-xs font-bold text-slate-800 uppercase tracking-wide">Historical Roots</h4>
            <p class="text-[11px] text-slate-400">Est. 1924</p>
          </div>
          <div class="bg-white p-4 rounded-xl border border-slate-100 shadow-sm text-center">
            <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=600&auto=format&fit=crop" alt="Future Innovation" class="w-full h-28 object-cover rounded-lg mb-3">
            <h4 class="text-xs font-bold text-slate-800 uppercase tracking-wide">Future Innovation</h4>
            <p class="text-[11px] text-slate-400">Cutting-Edge Research</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ================= PURPOSE & FUTURE (MISSION & VISION) ================= -->
  <section class="py-16 px-6 lg:px-16 max-w-5xl mx-auto">
    <div class="text-center mb-10">
      <h2 class="text-2xl md:text-3xl font-bold text-sky-500">Purpose & Future</h2>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Mission Card -->
      <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 text-center hover:shadow-md transition">
        <div class="w-12 h-12 bg-sky-100 text-sky-500 rounded-full flex items-center justify-center mx-auto mb-4">
          <i data-lucide="rocket" class="w-5 h-5"></i>
        </div>
        <h3 class="text-base font-bold text-sky-500 mb-3">Our Mission</h3>
        <p class="text-xs text-slate-500 leading-relaxed">
          To foster an environment of radical innovation where academic integrity meets creative freedom. We empower our students to solve the world's most complex challenges through interdisciplinary excellence.
        </p>
      </div>

      <!-- Vision Card -->
      <div class="bg-white p-8 rounded-2xl shadow-sm border border-slate-100 text-center hover:shadow-md transition">
        <div class="w-12 h-12 bg-sky-100 text-sky-500 rounded-full flex items-center justify-center mx-auto mb-4">
          <i data-lucide="eye" class="w-5 h-5"></i>
        </div>
        <h3 class="text-base font-bold text-sky-500 mb-3">Our Vision</h3>
        <p class="text-xs text-slate-500 leading-relaxed">
          To be the global benchmark for transformative education, creating a seamless ecosystem where knowledge, ethics, and technology converge to shape a sustainable and inclusive global future.
        </p>
      </div>
    </div>
  </section>

  <!-- ================= OUR PEOPLE (VISIONARY LEADERSHIP) ================= -->
  <section class="py-16 px-6 lg:px-16 max-w-7xl mx-auto">
    <div class="flex flex-col md:flex-row md:items-end justify-between mb-10 gap-4">
      <div>
        <span class="text-xs font-bold text-sky-500 uppercase tracking-wider">Our People</span>
        <h2 class="text-2xl md:text-3xl font-bold text-sky-500 mt-1">Visionary Leadership</h2>
      </div>
      <p class="text-xs text-slate-500 max-w-md leading-relaxed">
        Guided by world-class educators and industry veterans committed to student success and institutional growth.
      </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Member 1 -->
      <div>
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=500&auto=format&fit=crop" alt="Dr. Julian Vance" class="w-full h-72 object-cover rounded-2xl mb-3 shadow-sm">
        <h3 class="text-sm font-bold text-sky-500">Dr. Julian Vance</h3>
        <p class="text-[11px] text-slate-400">President & Chancellor</p>
      </div>

      <!-- Member 2 -->
      <div>
        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?q=80&w=500&auto=format&fit=crop" alt="Prof. Elena Rossi" class="w-full h-72 object-cover rounded-2xl mb-3 shadow-sm">
        <h3 class="text-sm font-bold text-sky-500">Prof. Elena Rossi</h3>
        <p class="text-[11px] text-slate-400">Provost of Academic Affairs</p>
      </div>

      <!-- Member 3 -->
      <div>
        <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?q=80&w=500&auto=format&fit=crop" alt="Dr. Marcus Wei" class="w-full h-72 object-cover rounded-2xl mb-3 shadow-sm">
        <h3 class="text-sm font-bold text-sky-500">Dr. Marcus Wei</h3>
        <p class="text-[11px] text-slate-400">Dean of Research</p>
      </div>

      <!-- Member 4 -->
      <div>
        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?q=80&w=500&auto=format&fit=crop" alt="Sarah Jenkins" class="w-full h-72 object-cover rounded-2xl mb-3 shadow-sm">
        <h3 class="text-sm font-bold text-sky-500">Sarah Jenkins</h3>
        <p class="text-[11px] text-slate-400">Director of Global Outreach</p>
      </div>
    </div>
  </section>

  <!-- ================= SEKOLAHAN'S ETHOS BANNER ================= -->
  <section class="py-16 px-6 lg:px-16 bg-sky-500 text-white text-center">
    <div class="max-w-4xl mx-auto mb-12">
      <h2 class="text-2xl md:text-3xl font-bold mb-3">Sekolahan's Ethos</h2>
      <p class="text-xs text-sky-100">
        The principles that guide every lecture, research project, and campus initiative.
      </p>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
      <!-- Ethos 1 -->
      <div class="px-4">
        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 border border-white/30">
          <i data-lucide="shield-check" class="w-5 h-5 text-white"></i>
        </div>
        <h3 class="text-sm font-bold mb-2">Academic Integrity</h3>
        <p class="text-xs text-sky-100/80 leading-relaxed">
          Honesty and transparency in pursuit of truth and discovery, upholding the highest ethical standards.
        </p>
      </div>

      <!-- Ethos 2 -->
      <div class="px-4">
        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 border border-white/30">
          <i data-lucide="globe-2" class="w-5 h-5 text-white"></i>
        </div>
        <h3 class="text-sm font-bold mb-2">Global Perspective</h3>
        <p class="text-xs text-sky-100/80 leading-relaxed">
          Celebrating diverse cultures and viewpoints to create a truly inclusive and interconnected campus.
        </p>
      </div>

      <!-- Ethos 3 -->
      <div class="px-4">
        <div class="w-10 h-10 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-4 border border-white/30">
          <i data-lucide="users" class="w-5 h-5 text-white"></i>
        </div>
        <h3 class="text-sm font-bold mb-2">Inclusive Excellence</h3>
        <p class="text-xs text-sky-100/80 leading-relaxed">
          Providing equitable opportunities for every individual to thrive and contribute to our shared mission.
        </p>
      </div>
    </div>
  </section>

  <!-- ================= START YOUR ACADEMIC JOURNEY (FORM SECTION) ================= -->
  <section id="apply" class="py-20 px-6 lg:px-16 bg-slate-100/70">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
      <!-- Left Content -->
      <div class="lg:col-span-6">
        <h2 class="text-3xl md:text-4xl font-extrabold text-slate-900 leading-tight mb-4">
          Start Your<br>Academic<br>Journey
        </h2>
        <p class="text-xs md:text-sm text-slate-500 mb-8 max-w-sm leading-relaxed">
          Join a community of visionaries. Applications for the upcoming semester are now open.
        </p>

        <!-- Social Icons -->
        <div class="flex items-center space-x-3 text-slate-400 text-xs">
          <a href="#" class="w-8 h-8 rounded-full border border-slate-300 flex items-center justify-center hover:bg-white hover:text-sky-500 transition"><i data-lucide="globe" class="w-4 h-4"></i></a>
          <a href="#" class="w-8 h-8 rounded-full border border-slate-300 flex items-center justify-center hover:bg-white hover:text-sky-500 transition"><i data-lucide="share-2" class="w-4 h-4"></i></a>
          <a href="#" class="w-8 h-8 rounded-full border border-slate-300 flex items-center justify-center hover:bg-white hover:text-sky-500 transition"><i data-lucide="compass" class="w-4 h-4"></i></a>
          <span class="text-[11px] ml-2 text-slate-400">Accredited Institution</span>
        </div>
      </div>

      <!-- Right Form Card -->
      <div class="lg:col-span-6">
        <form class="bg-white p-6 md:p-8 rounded-2xl shadow-lg border border-slate-100 space-y-4">
          <div>
            <label class="block text-[11px] font-bold uppercase text-slate-400 mb-1">Full Name</label>
            <input type="text" placeholder="John Doe" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-sky-500 transition">
          </div>

          <div>
            <label class="block text-[11px] font-bold uppercase text-slate-400 mb-1">Email Address</label>
            <input type="email" placeholder="john@example.com" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-800 focus:outline-none focus:ring-2 focus:ring-sky-500 transition">
          </div>

          <div>
            <label class="block text-[11px] font-bold uppercase text-slate-400 mb-1">Program of Interest</label>
            <select class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-xs text-slate-600 focus:outline-none focus:ring-2 focus:ring-sky-500 transition">
              <option>Select Program...</option>
              <option>Science & Tech</option>
              <option>Arts & Humanities</option>
              <option>Global Business</option>
            </select>
          </div>

          <button type="submit" class="w-full bg-sky-500 hover:bg-sky-600 text-white font-semibold py-3.5 rounded-xl text-xs transition shadow-md">
            Submit Application
          </button>
        </form>
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