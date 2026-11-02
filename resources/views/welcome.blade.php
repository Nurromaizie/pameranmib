<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pameran MIB - Hab Tenaga Dermaga Diraja</title>
    
    <!-- Tailwind CSS & Alpine.js -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Plus Jakarta Sans', sans-serif; }
        .font-serif-title { font-family: 'Playfair Display', serif; }
    </style>
</head>
<body class="min-h-screen antialiased text-amber-950 bg-stone-900 relative" x-data="mibDashboard()">

    <!-- Fixed Background Image with Soft Light Overlay -->
    <div class="fixed inset-0 z-0">
        <img 
            src="https://www.bruneitourism.com/wp-content/uploads/2026/07/energy-hub-768x512.jpg" 
            alt="Brunei Energy Hub Background" 
            class="w-full h-full object-cover filter brightness-90"
        />
        <div class="absolute inset-0 bg-stone-100/90 backdrop-blur-md"></div>
    </div>

    <!-- Main Outer Wrapper -->
    <div class="relative z-10 flex flex-col min-h-screen">

        <!-- Top Header Navigation -->
        <header class="border-b border-amber-900/10 bg-white/90 backdrop-blur sticky top-0 z-50 shadow-md">
            <div class="max-w-7xl mx-auto px-6 py-3.5 flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <img src="https://upload.wikimedia.org/wikipedia/en/9/9c/Universiti_Teknologi_Brunei.png?utm_source=en.wikipedia.org&utm_campaign=index&utm_content=original" alt="UTB Logo" class="h-10 w-auto object-contain">
                    <div>
                        <h1 class="text-sm md:text-base font-bold text-stone-900 uppercase tracking-wider font-serif-title">Universiti Teknologi Brunei</h1>
                        <p class="text-xs text-amber-800 font-semibold">Pameran Melayu Islam Beraja</p>
                    </div>
        </header>

        <main class="max-w-7xl mx-auto px-6 py-8 space-y-8 flex-grow w-full">

            <!-- Hero Banner -->
            <section class="text-center space-y-3 bg-gradient-to-r from-amber-900 via-stone-900 to-amber-950 text-white py-10 px-6 rounded-3xl shadow-2xl border border-amber-500/30">
                <span class="inline-block px-4 py-1 rounded-full bg-amber-500/20 text-amber-300 text-xs font-bold tracking-widest uppercase border border-amber-400/30">
                    LG1405 Melayu Islam Beraja
                </span>
                <h2 class="text-2xl md:text-4xl lg:text-5xl font-black font-serif-title text-amber-100 tracking-wide leading-tight max-w-4xl mx-auto">
                    Nilai-Nilai Melayu Islam Beraja Di Pusat Tenaga Brunei Dermaga Diraja
                </h2>
            </section>

            <!-- Dashboard Interactive Navigation Buttons -->
            <section class="grid grid-cols-2 md:grid-cols-5 gap-3">
                <button @click="activeTab = 'place'" :class="activeTab === 'place' ? 'bg-amber-900 text-amber-100 shadow-lg ring-2 ring-amber-600' : 'bg-white/90 text-stone-800 hover:bg-amber-100'" class="p-4 rounded-2xl font-bold text-sm transition text-center flex flex-col items-center justify-center space-y-1 border border-amber-900/10 shadow-sm">
                    <i data-lucide="landmark" class="w-5 h-5 text-amber-600"></i>
                    <span>Tentang Tempat</span>
                </button>
                <button @click="activeTab = 'melayu'" :class="activeTab === 'melayu' ? 'bg-amber-800 text-amber-100 shadow-lg ring-2 ring-amber-600' : 'bg-white/90 text-stone-800 hover:bg-amber-100'" class="p-4 rounded-2xl font-bold text-sm transition text-center flex flex-col items-center justify-center space-y-1 border border-amber-900/10 shadow-sm">
                    <i data-lucide="users" class="w-5 h-5 text-amber-700"></i>
                    <span>Melayu</span>
                </button>
                <button @click="activeTab = 'islam'" :class="activeTab === 'islam' ? 'bg-emerald-800 text-emerald-100 shadow-lg ring-2 ring-emerald-600' : 'bg-white/90 text-stone-800 hover:bg-emerald-100'" class="p-4 rounded-2xl font-bold text-sm transition text-center flex flex-col items-center justify-center space-y-1 border border-emerald-900/10 shadow-sm">
                    <i data-lucide="book-open" class="w-5 h-5 text-emerald-700"></i>
                    <span>Islam</span>
                </button>
                <button @click="activeTab = 'beraja'" :class="activeTab === 'beraja' ? 'bg-yellow-700 text-yellow-50 shadow-lg ring-2 ring-yellow-500' : 'bg-white/90 text-stone-800 hover:bg-yellow-100'" class="p-4 rounded-2xl font-bold text-sm transition text-center flex flex-col items-center justify-center space-y-1 border border-yellow-900/10 shadow-sm">
                    <i data-lucide="crown" class="w-5 h-5 text-yellow-600"></i>
                    <span>Beraja</span>
                </button>
                <button @click="activeTab = 'quiz'" :class="activeTab === 'quiz' ? 'bg-stone-800 text-stone-100 shadow-lg ring-2 ring-stone-600' : 'bg-white/90 text-stone-800 hover:bg-stone-100'" class="col-span-2 md:col-span-1 p-4 rounded-2xl font-bold text-sm transition text-center flex flex-col items-center justify-center space-y-1 border border-stone-900/10 shadow-sm">
                    <i data-lucide="help-circle" class="w-5 h-5 text-stone-700"></i>
                    <span>Kuiz MIB</span>
                </button>
            </section>

            <!-- Dashboard Dynamic Display Content Area -->
            <div class="bg-white/95 backdrop-blur-md rounded-3xl p-6 md:p-8 border border-amber-900/10 shadow-xl min-h-[450px]">
                
                <!-- 1. TENTANG TEMPAT -->
                <div x-show="activeTab === 'place'" class="space-y-8">
                    <div class="flex items-center space-x-3 border-b border-amber-100 pb-4">
                        <div class="p-3 bg-amber-100 text-amber-900 rounded-2xl">
                            <i data-lucide="landmark" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold font-serif-title text-stone-900">Hab Tenaga Brunei Dermaga Diraja</h3>
                            <p class="text-xs text-amber-800 font-semibold">Lokasi: Jalan McArthur, Bandar Seri Begawan</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                        <div class="space-y-4 text-sm text-stone-700 leading-relaxed">
                            <p>
                                Terletak di bangunan bersejarah Bekas Kastam di sepanjang perairan Sungai Brunei, pusat ini telah ditransformasikan secara moden tanpa memupuskan reka bentuk warisan asalnya.
                            </p>
                            <p>
                                Ia mempamerkan sejarah industri minyak dan gas Brunei sejak era penemuan awal di Seria hingga ke visi kelestarian tenaga hijau negara.
                            </p>
                            <div class="p-4 bg-amber-50 rounded-xl border border-amber-200 space-y-1">
                                <span class="block font-bold text-amber-950 text-xs uppercase tracking-wider">Pentingnya Dalam Pameran</span>
                                <p class="text-stone-800 text-xs font-semibold">Pusat pendidikan interaktif yang menyatukan liputan sejarah pelabuhan dagang dengan cita-cita pembangunan negara.</p>
                            </div>
                        </div>
                        <div class="rounded-2xl overflow-hidden shadow-lg border border-amber-200 group">
                            <img src="https://www.bruneitourism.com/wp-content/uploads/2026/07/energy-hub-768x512.jpg" alt="Dermaga Diraja" class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500">
                        </div>
                    </div>

<!-- Video Inside Tentang Tempat Tab -->
            <div class="pt-6 border-t border-stone-200 space-y-4">
            <div class="flex items-center justify-between">
        <div>
            <h4 class="text-lg font-bold font-serif-title text-stone-900">Dokumentari Video Projek MIB</h4>
            <p class="text-xs text-amber-800 font-semibold">Tayangan video Lawatan & Sejarah Dermaga Diraja</p>
        </div>
        </div>
       <div class="relative max-w-4xl mx-auto aspect-video rounded-2xl overflow-hidden shadow-2xl border border-stone-800 bg-black">
        <iframe 
            src="https://drive.google.com/file/d/1rCxXsVadsmeQOiqSduVZEnrrcsY1oHZ_/preview" 
            class="w-full h-full border-0" 
            allow="autoplay" 
            allowfullscreen>
        </iframe>
    </div>
                </div>      
                <!-- 2. MELAYU (Direct Dermaga Diraja Tie-ins) -->
                <div x-show="activeTab === 'melayu'" class="space-y-6" style="display: none;">
                    <div class="flex items-center space-x-3 border-b border-amber-100 pb-4">
                        <div class="p-3 bg-amber-100 text-amber-900 rounded-2xl font-extrabold font-serif-title text-lg">M</div>
                        <div>
                            <h3 class="text-xl font-bold font-serif-title text-stone-900">Pillar Melayu: Warisan Sosio-Ekonomi Dermaga Diraja</h3>
                            <p class="text-xs text-amber-800 font-semibold">Kebudayaan Melayu, Jati Diri Perdagangan & Komuniti Sungai</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
                        <div class="rounded-2xl overflow-hidden shadow-lg border border-amber-200 group h-80 relative sticky top-24">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSv03XClm3_vMsk54uJ7eG7VvcaRplZP86TuFEHXHtkuZANNqX7C1z78Zk&s=10" alt="Warisan Melayu Dermaga Diraja" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-4">
                                <span class="text-white text-sm font-bold font-serif-title">Pangkalan Perdagangan Sungai Dermaga Diraja</span>
                            </div>
                        </div>

                        <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 bg-amber-50/80 rounded-2xl border border-amber-200 space-y-1.5">
                                <h4 class="font-bold text-amber-950 text-sm">Pangkalan Perdagangan Padian & Pengalu</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Perairan Dermaga Diraja merupakan pusat pertukaran barangan utama di mana pedagang Padian menaiki perahu kecil membekalkan barang harian kepada komuniti Kampong Ayer.</p>
                            </div>
                            <div class="p-4 bg-amber-50/80 rounded-2xl border border-amber-200 space-y-1.5">
                                <h4 class="font-bold text-amber-950 text-sm">Etika & Budi Bahasa Berdagang</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Penerapan amalan kesopanan Melayu Brunei, rasa hormat, dan muafakat yang menjadi teras perhubungan peniaga tempatan di sekitar jeti Dermaga Diraja sejak zaman berzaman.</p>
                            </div>
                            <div class="p-4 bg-amber-50/80 rounded-2xl border border-amber-200 space-y-1.5">
                                <h4 class="font-bold text-amber-950 text-sm">Bahasa Melayu Dalam Pentadbiran Kastam</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Sejak era Bangunan Kastam lama 1957, Bahasa Melayu digunakan sebagai medium komunikasi rasmi kawalan sempadan marin dan dokumen perkapalan pelabuhan.</p>
                            </div>
                            <div class="p-4 bg-amber-50/80 rounded-2xl border border-amber-200 space-y-1.5">
                                <h4 class="font-bold text-amber-950 text-sm">Seni Bina Simbolik Melayu Brunei</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Transformasi galeri Brunei Energy Hub kekal mempertahankan bentuk atap serta identiti seni bina Melayu tempatan bagi menghormati tapak warisan bersejarah ini.</p>
                            </div>
                            <div class="sm:col-span-2 p-4 bg-amber-50/80 rounded-2xl border border-amber-200 space-y-1.5">
                                <h4 class="font-bold text-amber-950 text-sm">Pemeliharaan Jati Diri Bangsa Melayu</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Pengorganisasian galeri di Dermaga Diraja bertindak sebagai jambatan ilmu untuk generasi muda menghayati semangat berdikari dan daya usaha gigih nenek moyang bangsa Melayu Brunei.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 3. ISLAM (Penyemakan Fokus Nilai & Pengajaran Islam di Tempat Pameran) -->
                <div x-show="activeTab === 'islam'" class="space-y-6" style="display: none;">
                    <div class="flex items-center space-x-3 border-b border-emerald-100 pb-4">
                        <div class="p-3 bg-emerald-100 text-emerald-900 rounded-2xl font-extrabold font-serif-title text-lg">I</div>
                        <div>
                            <h3 class="text-xl font-bold font-serif-title text-stone-900">Pillar Islam: Nilai Syariat & Pengajaran di Hab Tenaga</h3>
                            <p class="text-xs text-emerald-800 font-semibold">Penghayatan Nilai-Nilai Islam Sepanjang Pameran & Kawasan Dermaga</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
                        <div class="rounded-2xl overflow-hidden shadow-lg border border-emerald-200 group h-80 relative sticky top-24">
                            <img src="https://images.trvl-media.com/place/6097966/739d6d31-9486-4a32-9f67-ed9d92834383.jpg" alt="Masjid Sultan Omar Ali Saifuddien berdekatan Dermaga Diraja" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-4">
                                <span class="text-white text-sm font-bold font-serif-title">Penghayatan Nilai Islam di Hab Tenaga</span>
                            </div>
                        </div>

                        <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 bg-emerald-50/80 rounded-2xl border border-emerald-200 space-y-1.5">
                                <h4 class="font-bold text-emerald-950 text-sm">Kesedaran Amanah Khalifah</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Pengunjung mempelajari bahawa sumber minyak dan gas adalah nikmat amanah Allah SWT yang wajib diurus secara berhemah, telus, dan tidak membazir.</p>
                            </div>
                            <div class="p-4 bg-emerald-50/80 rounded-2xl border border-emerald-200 space-y-1.5">
                                <h4 class="font-bold text-emerald-950 text-sm">Menghayati Sikap Syukur Atas Nikmat Rezeki</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Pameran sejarah industri tenaga mendidik masyarakat untuk sentiasa bersyukur atas kurniaan rezeki bumi Brunei yang menjadi tunjang kemakmuran negara.</p>
                            </div>
                            <div class="p-4 bg-emerald-50/80 rounded-2xl border border-emerald-200 space-y-1.5">
                                <h4 class="font-bold text-emerald-950 text-sm">Tanggungjawab Memelihara Alam Sekitar</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Pameran tenaga hijau mengajar prinsip Islam dalam menjaga kebersihan perairan sungai dan kelestarian alam demi kesejahteraan generasi akan datang.</p>
                            </div>
                            <div class="p-4 bg-emerald-50/80 rounded-2xl border border-emerald-200 space-y-1.5">
                                <h4 class="font-bold text-emerald-950 text-sm">Etika & Kejujuran Dalam Perdagangan</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Sejarah pangkalan Kastam di dermaga mengimbau pengajaran Islam tentang kepentingaan amanah, integriti, dan sifat adil dalam urusan perniagaan.</p>
                            </div>
                            <div class="sm:col-span-2 p-4 bg-emerald-50/80 rounded-2xl border border-emerald-200 space-y-1.5">
                                <h4 class="font-bold text-emerald-950 text-sm">Adat Menuntut Ilmu Secara Berhemah</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Galeri interaktif ini menjadi tempat menimba ilmu pengetahuan yang bermanfaat, sejajar dengan tuntutan Islam yang mewajibkan umatnya sentiasa belajar dan berfikir.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 4. BERAJA (Direct Dermaga Diraja Tie-ins) -->
                <div x-show="activeTab === 'beraja'" class="space-y-6" style="display: none;">
                    <div class="flex items-center space-x-3 border-b border-yellow-100 pb-4">
                        <div class="p-3 bg-yellow-100 text-yellow-900 rounded-2xl font-extrabold font-serif-title text-lg">B</div>
                        <div>
                            <h3 class="text-xl font-bold font-serif-title text-stone-900">Pillar Beraja: Kepimpinan Sultan & Pembangunan Dermaga Diraja</h3>
                            <p class="text-xs text-yellow-800 font-semibold">Warisan Al-Marhum Sultan Omar 'Ali Saifuddien III & Wawasan 2035</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-start">
                        <div class="rounded-2xl overflow-hidden shadow-lg border border-yellow-200 group h-80 relative sticky top-24">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdG2n7cHYqJqF3kiYKXF5EDnBf_LKKBm6RwsNaAtjIptaysjlqLRmjqX-7&s=10" alt="Institusi Beraja Brunei" class="w-full h-full object-cover transform group-hover:scale-105 transition duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex items-end p-4">
                                <span class="text-white text-sm font-bold font-serif-title">Naungan Institusi Beraja di Dermaga Diraja</span>
                            </div>
                        </div>

                        <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="p-4 bg-yellow-50/80 rounded-2xl border border-yellow-200 space-y-1.5">
                                <h4 class="font-bold text-yellow-950 text-sm">Visi Arkitek Brunei Moden</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Al-Marhum Sultan Omar 'Ali Saifuddien III merancang pembangunan infrastruktur pelabuhan dan kawasan waterfront yang kini menjadi lokasi terletaknya Dermaga Diraja.</p>
                            </div>
                            <div class="p-4 bg-yellow-50/80 rounded-2xl border border-yellow-200 space-y-1.5">
                                <h4 class="font-bold text-yellow-950 text-sm">Perasmian Rasmi Brunei Energy Hub (2022)</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Pengubahsuaian dan perasmian rasmi Hab Tenaga pada 23 Oktober 2022 dilaksanakan di bawah sokongan padu institusi beraja bagi memelihara sejarah negara.</p>
                            </div>
                            <div class="p-4 bg-yellow-50/80 rounded-2xl border border-yellow-200 space-y-1.5">
                                <h4 class="font-bold text-yellow-950 text-sm">Pemodenan Pesisiran Bandar Seri Begawan</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Kepimpinan Kebawah Duli Yang Maha Mulia Baginda Sultan memastikan kawasan Dermaga Diraja menjadi simbol kemajuan bandar raya yang harmoni dan berprestij.</p>
                            </div>
                            <div class="p-4 bg-yellow-50/80 rounded-2xl border border-yellow-200 space-y-1.5">
                                <h4 class="font-bold text-yellow-950 text-sm">Penyokong Utama Wawasan Brunei 2035</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Hab Tenaga Dermaga Diraja menjadi bukti komitmen institusi beraja dalam melahirkan modal insan berilmu tinggi dan celik industri tenaga.</p>
                            </div>
                            <div class="sm:col-span-2 p-4 bg-yellow-50/80 rounded-2xl border border-yellow-200 space-y-1.5">
                                <h4 class="font-bold text-yellow-950 text-sm">Simbol Kedaulatan & Kesejahteraan Rakyat</h4>
                                <p class="text-xs text-stone-700 leading-relaxed">Penamaan rasmi 'Dermaga Diraja' mengabadikan kedaulatan institusi beraja yang sentiasa mengutamakan perpaduan, kemakmuran, dan kebajikan rakyat Brunei.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 5. KUIZ MIB INTERAKTIF -->
                <div x-show="activeTab === 'quiz'" class="space-y-6" style="display: none;">
                    <div class="flex items-center space-x-3 border-b border-stone-200 pb-4">
                        <div class="p-3 bg-stone-100 text-stone-900 rounded-2xl">
                            <i data-lucide="help-circle" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold font-serif-title text-stone-900">Kuiz Eksklusif Booth MIB</h3>
                            <p class="text-xs text-stone-600 font-semibold">Uji Minda Pengunjung Booth Kami!</p>
                        </div>
                    </div>

                    <!-- Question Container -->
                    <div class="max-w-2xl mx-auto space-y-4">
                        <div class="p-6 bg-stone-50 rounded-2xl border border-stone-200 shadow-sm text-center space-y-3">
                            <span class="text-xs font-bold uppercase tracking-wider text-amber-800 bg-amber-100 px-3 py-1 rounded-full" x-text="'Soalan ' + (currentQuiz + 1) + ' dari ' + quizQuestions.length"></span>
                            <h4 class="text-base font-bold text-stone-900" x-text="quizQuestions[currentQuiz].question"></h4>
                            
                            <div class="grid grid-cols-1 gap-2 pt-2">
                                <template x-for="(option, index) in quizQuestions[currentQuiz].options">
                                    <button @click="checkAnswer(index)" 
                                            class="p-3 rounded-xl text-sm font-semibold border transition text-left px-4"
                                            :class="selectedAnswer === null ? 'bg-white border-stone-300 hover:bg-amber-50 text-stone-800' : (index === quizQuestions[currentQuiz].correct ? 'bg-emerald-100 border-emerald-500 text-emerald-900 font-bold' : (selectedAnswer === index ? 'bg-rose-100 border-rose-400 text-rose-900' : 'bg-white border-stone-200 text-stone-400'))"
                                            x-text="option">
                                    </button>
                                </template>
                            </div>

                            <div x-show="selectedAnswer !== null" class="pt-2">
                                <p class="text-xs font-bold mb-2" :class="selectedAnswer === quizQuestions[currentQuiz].correct ? 'text-emerald-700' : 'text-rose-700'" x-text="selectedAnswer === quizQuestions[currentQuiz].correct ? 'Tahniah! Jawapan anda tepat.' : 'Kurang tepat. Jawapan betul ditandakan dengan warna hijau.'"></p>
                                <button @click="nextQuiz()" class="px-5 py-2 bg-amber-900 text-white rounded-xl text-xs font-bold hover:bg-amber-950 transition">Soalan Seterusnya →</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Quick Information Card & Navigation Links -->
            <section class="bg-white/95 backdrop-blur-md rounded-3xl p-6 border border-amber-900/10 shadow-xl space-y-4">
                <div class="flex items-center space-x-2 border-b border-stone-100 pb-3">
                    <i data-lucide="info" class="w-5 h-5 text-amber-700"></i>
                    <h3 class="text-lg font-bold font-serif-title text-stone-900">Pintasan Maklumat Pantas Booth</h3>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-3">
                    <button @click="activeTab = 'place'" class="text-left p-3.5 rounded-xl bg-amber-50 hover:bg-amber-100 text-amber-900 text-xs font-bold transition flex items-center justify-between border border-amber-200">
                        <span>📍 Tentang Tempat & Video</span>
                        <span>→</span>
                    </button>
                    <button @click="activeTab = 'melayu'" class="text-left p-3.5 rounded-xl bg-amber-50 hover:bg-amber-100 text-amber-900 text-xs font-bold transition flex items-center justify-between border border-amber-200">
                        <span>👥 Maklumat Melayu</span>
                        <span>→</span>
                    </button>
                    <button @click="activeTab = 'islam'" class="text-left p-3.5 rounded-xl bg-emerald-50 hover:bg-emerald-100 text-emerald-900 text-xs font-bold transition flex items-center justify-between border border-emerald-200">
                        <span>📖 Maklumat Islam</span>
                        <span>→</span>
                    </button>
                    <button @click="activeTab = 'beraja'" class="text-left p-3.5 rounded-xl bg-yellow-50 hover:bg-yellow-100 text-yellow-900 text-xs font-bold transition flex items-center justify-between border border-yellow-200">
                        <span>👑 Maklumat Beraja</span>
                        <span>→</span>
                    </button>
                </div>
            </section>

        </main>

        <!-- Footer -->
        <footer class="border-t border-amber-900/20 bg-white/90 backdrop-blur text-center py-4 text-xs font-semibold text-stone-600 relative z-10">
            LG1405 – MELAYU ISLAM BERAJA | UNIVERSITI TEKNOLOGI BRUNEI
        </footer>

    </div>

    <!-- Alpine Dashboard & 6-Question Quiz Script -->
    <script>
        function mibDashboard() {
            return {
                activeTab: 'place',
                currentQuiz: 0,
                selectedAnswer: null,
                quizQuestions: [
                    {
                        question: "Apakah nama asal bangunan Hab Tenaga Dermaga Diraja sebelum ditransformasikan?",
                        options: ["Bangunan Kastam Lama", "Balai Polis Bandar", "Pejabat Pos Besar"],
                        correct: 0
                    },
                    {
                        question: "Apakah peranan masyarakat tradisi Padian di perairan dermaga pada masa lalu?",
                        options: ["Menangkap ikan jerung", "Menjual barang keperluan menaiki perahu", "Membina kapal besar"],
                        correct: 1
                    },
                    {
                        question: "Siapakah yang dikenali sebagai Arkitek Brunei Moden yang merintis pemodenan ibu kota?",
                        options: ["Sultan Haji Omar 'Ali Saifuddien III", "Sultan Bolkiah", "Sultan Sharif Ali"],
                        correct: 0
                    },
                    {
                        question: "Apakah pegangan akidah rasmi yang menjadi asas konsep Negara Zikir di Brunei?",
                        options: ["Ahli Sunnah Wal-Jamaah", "Mazhab Maliki", "Mazhab Hanafi"],
                        correct: 0
                    },
                    {
                        question: "Di manakah lokasi sebenar Hab Tenaga Dermaga Diraja?",
                        options: ["Jalan McArthur, Bandar Seri Begawan", "Jalan Jerudong", "Pekan Tutong"],
                        correct: 0
                    },
                    {
                        question: "Apakah matlamat utama Wawasan Brunei 2035 yang dikemudi oleh institusi beraja?",
                        options: ["Melahirkan rakyat berpendidikan tinggi dan berkualiti", "Membina lapangan terbang kedua", "Menukar mata wang negara"],
                        correct: 0
                    }
                ],
                checkAnswer(index) {
                    if (this.selectedAnswer === null) {
                        this.selectedAnswer = index;
                    }
                },
                nextQuiz() {
                    this.selectedAnswer = null;
                    this.currentQuiz = (this.currentQuiz + 1) % this.quizQuestions.length;
                }
            }
        }
    </script>

    <!-- Initialize Lucide Icons -->
    <script>
        lucide.createIcons();
    </script>
</body>
</html>