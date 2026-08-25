<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Yuni | Frontend Developer</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Icon -->
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- ================= NAVBAR ================= -->
    <header class="navbar">
        <div class="container nav-container">

            <a href="#home" class="logo">
                <span>&lt;</span>Yuni<span>/&gt;</span>
            </a>

            <nav class="nav-menu">
                <a href="#home" class="active">Home</a>
                <a href="#skills">Keahlian</a>
                <a href="#projects">Proyek</a>
                <a href="#contact">Kontak</a>
            </nav>

            <a href="#contact" class="btn btn-nav">
                Hubungi Saya <i class="fa-solid fa-arrow-right"></i>
            </a>

            <button class="menu-toggle" aria-label="Buka menu">
                <i class="fa-solid fa-bars"></i>
            </button>

        </div>
    </header>


    <main>

        <!-- ================= HERO ================= -->
        <section id="home" class="hero">

            <div class="hero-glow glow-one"></div>
            <div class="hero-glow glow-two"></div>

            <div class="container hero-container">

                <div class="hero-content">

                    <div class="availability">
                        <span class="status-dot"></span>
                        Tersedia untuk bekerja
                    </div>

                    <p class="hero-small">
                        Halo, saya Yuni 👋
                    </p>

                    <h1>
                        Frontend Developer yang
                        <span>membangun pengalaman digital.</span>
                    </h1>

                    <p class="hero-description">
                        Saya membuat website modern, responsif, dan
                        user-friendly dengan fokus pada desain serta
                        pengalaman pengguna yang menarik.
                    </p>

                    <div class="hero-buttons">
                        <a href="#projects" class="btn btn-primary">
                            Lihat Proyek
                            <i class="fa-solid fa-arrow-down"></i>
                        </a>

                        <a href="cv.pdf" class="btn btn-outline" download>
                            Unduh CV
                            <i class="fa-solid fa-download"></i>
                        </a>
                    </div>

                    <div class="hero-social">
                        <a href="https://github.com/" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>

                        <a href="https://linkedin.com/" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>

                        <a href="mailto:yuni@email.com">
                            <i class="fa-solid fa-envelope"></i>
                        </a>
                    </div>

                </div>

                <div class="hero-card">

                    <div class="code-window">

                        <div class="window-top">
                            <div class="window-dots">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>

                            <span>developer.js</span>
                        </div>

                        <div class="code-content">
                            <p>
                                <span class="purple">const</span>
                                developer =
                                <span class="blue">{</span>
                            </p>

                            <p class="indent">
                                name:
                                <span class="green">'Yuni'</span>,
                            </p>

                            <p class="indent">
                                role:
                                <span class="green">'Frontend Developer'</span>,
                            </p>

                            <p class="indent">
                                skills:
                                <span class="blue">[</span>
                            </p>

                            <p class="indent-two">
                                <span class="green">'HTML'</span>,
                            </p>

                            <p class="indent-two">
                                <span class="green">'CSS'</span>,
                            </p>

                            <p class="indent-two">
                                <span class="green">'JavaScript'</span>
                            </p>

                            <p class="indent">
                                <span class="blue">]</span>
                            </p>

                            <p>
                                <span class="blue">};</span>
                            </p>
                        </div>

                    </div>

                </div>

            </div>
        </section>


        <!-- ================= SKILLS ================= -->
        <section id="skills" class="section">

            <div class="container">

                <div class="section-heading">
                    <span class="section-label">KEAHLIAN</span>

                    <h2>
                        Keahlian yang saya
                        <span>kuasai</span>
                    </h2>

                    <p>
                        Beberapa teknologi dan bidang yang saya gunakan
                        untuk membangun produk digital.
                    </p>
                </div>

                <div class="skills-grid">

                    <div class="skill-card">
                        <div class="skill-icon">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>

                        <h3>Web Development</h3>

                        <p>
                            Membuat website modern, responsif,
                            cepat, dan nyaman digunakan.
                        </p>

                        <div class="skill-tags">
                            <span>HTML</span>
                            <span>CSS</span>
                            <span>JavaScript</span>
                        </div>
                    </div>


                    <div class="skill-card">
                        <div class="skill-icon">
                            <i class="fa-solid fa-mobile-screen"></i>
                        </div>

                        <h3>Mobile Development</h3>

                        <p>
                            Membuat tampilan aplikasi yang
                            responsif dan mudah digunakan.
                        </p>

                        <div class="skill-tags">
                            <span>Responsive</span>
                            <span>UI</span>
                            <span>Mobile</span>
                        </div>
                    </div>


                    <div class="skill-card">
                        <div class="skill-icon">
                            <i class="fa-solid fa-server"></i>
                        </div>

                        <h3>Backend & Database</h3>

                        <p>
                            Memahami pengolahan data, database,
                            serta struktur backend website.
                        </p>

                        <div class="skill-tags">
                            <span>PHP</span>
                            <span>MySQL</span>
                            <span>SQL</span>
                        </div>
                    </div>


                    <div class="skill-card">
                        <div class="skill-icon">
                            <i class="fa-solid fa-pen-ruler"></i>
                        </div>

                        <h3>UI / UX Design</h3>

                        <p>
                            Mendesain antarmuka yang sederhana,
                            modern, dan berorientasi pengguna.
                        </p>

                        <div class="skill-tags">
                            <span>Figma</span>
                            <span>UI Design</span>
                            <span>UX</span>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <!-- ================= PROJECTS ================= -->
        <section id="projects" class="section projects-section">

            <div class="container">

                <div class="section-heading project-heading">

                    <div>
                        <span class="section-label">PORTOFOLIO</span>

                        <h2>
                            Proyek <span>pilihan</span>
                        </h2>
                    </div>

                    <p>
                        Beberapa proyek yang pernah saya kerjakan
                        menggunakan berbagai teknologi web.
                    </p>

                </div>


                <div class="projects-grid">

                    <!-- PROJECT 1 -->
                    <article class="project-card">

                        <div class="project-image">
                            <div class="image-placeholder">
                                <i class="fa-solid fa-globe"></i>
                                <span>PROJECT IMAGE</span>
                            </div>

                            <div class="project-overlay">
                                <a href="#" target="_blank">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>

                        <div class="project-content">

                            <div class="project-tags">
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>JavaScript</span>
                            </div>

                            <h3>Personal Portfolio</h3>

                            <p>
                                Website portofolio personal dengan
                                desain modern dan fully responsive.
                            </p>

                            <div class="project-links">
                                <a href="#" target="_blank">
                                    Live Demo
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>

                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                    Repository
                                </a>
                            </div>

                        </div>
                    </article>


                    <!-- PROJECT 2 -->
                    <article class="project-card">

                        <div class="project-image">
                            <div class="image-placeholder">
                                <i class="fa-solid fa-store"></i>
                                <span>PROJECT IMAGE</span>
                            </div>

                            <div class="project-overlay">
                                <a href="#" target="_blank">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>

                        <div class="project-content">

                            <div class="project-tags">
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>JS</span>
                            </div>

                            <h3>Online Store</h3>

                            <p>
                                Website toko online sederhana dengan
                                tampilan produk yang menarik dan responsif.
                            </p>

                            <div class="project-links">
                                <a href="#" target="_blank">
                                    Live Demo
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>

                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                    Repository
                                </a>
                            </div>

                        </div>
                    </article>


                    <!-- PROJECT 3 -->
                    <article class="project-card">

                        <div class="project-image">
                            <div class="image-placeholder">
                                <i class="fa-solid fa-leaf"></i>
                                <span>PROJECT IMAGE</span>
                            </div>

                            <div class="project-overlay">
                                <a href="#" target="_blank">
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>
                            </div>
                        </div>

                        <div class="project-content">

                            <div class="project-tags">
                                <span>HTML</span>
                                <span>CSS</span>
                                <span>Responsive</span>
                            </div>

                            <h3>Website Desa</h3>

                            <p>
                                Website informasi desa yang menampilkan
                                potensi, wisata, berita, dan informasi masyarakat.
                            </p>

                            <div class="project-links">
                                <a href="#" target="_blank">
                                    Live Demo
                                    <i class="fa-solid fa-arrow-up-right-from-square"></i>
                                </a>

                                <a href="#" target="_blank">
                                    <i class="fa-brands fa-github"></i>
                                    Repository
                                </a>
                            </div>

                        </div>
                    </article>

                </div>
            </div>
        </section>


        <!-- ================= CONTACT ================= -->
        <section id="contact" class="section contact-section">

            <div class="container">

                <div class="contact-box">

                    <div class="contact-content">

                        <span class="section-label">KONTAK</span>

                        <h2>
                            Mari buat sesuatu
                            <span>bersama.</span>
                        </h2>

                        <p>
                            Punya ide proyek atau ingin bekerja sama?
                            Jangan ragu untuk menghubungi saya.
                        </p>

                        <a href="mailto:yuni@email.com"
                           class="btn btn-primary">
                            Hubungi Saya
                            <i class="fa-solid fa-paper-plane"></i>
                        </a>

                    </div>


                    <div class="contact-links">

                        <a href="mailto:yuni@email.com" class="contact-item">

                            <div class="contact-icon">
                                <i class="fa-solid fa-envelope"></i>
                            </div>

                            <div>
                                <small>Email</small>
                                <strong>yuni@email.com</strong>
                            </div>

                            <i class="fa-solid fa-arrow-up-right-from-square arrow"></i>

                        </a>


                        <a href="https://linkedin.com/"
                           target="_blank"
                           class="contact-item">

                            <div class="contact-icon">
                                <i class="fa-brands fa-linkedin-in"></i>
                            </div>

                            <div>
                                <small>LinkedIn</small>
                                <strong>linkedin.com/in/yuni</strong>
                            </div>

                            <i class="fa-solid fa-arrow-up-right-from-square arrow"></i>

                        </a>


                        <a href="https://github.com/"
                           target="_blank"
                           class="contact-item">

                            <div class="contact-icon">
                                <i class="fa-brands fa-github"></i>
                            </div>

                            <div>
                                <small>GitHub</small>
                                <strong>github.com/yuni</strong>
                            </div>

                            <i class="fa-solid fa-arrow-up-right-from-square arrow"></i>

                        </a>

                    </div>

                </div>
            </div>
        </section>

    </main>


    <!-- ================= FOOTER ================= -->
    <footer class="footer">

        <div class="container footer-container">

            <a href="#home" class="logo">
                <span>&lt;</span>Yuni<span>/&gt;</span>
            </a>

            <p>
                © 2026 Yuni. Dibuat dengan ❤️ dan kode.
            </p>

            <div class="footer-social">

                <a href="https://github.com/" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>

                <a href="https://linkedin.com/" target="_blank">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>

                <a href="mailto:yuni@email.com">
                    <i class="fa-solid fa-envelope"></i>
                </a>

            </div>

        </div>

    </footer>


    <!-- ================= JAVASCRIPT MENU ================= -->
    <script>
        const menuToggle = document.querySelector(".menu-toggle");
        const navMenu = document.querySelector(".nav-menu");

        menuToggle.addEventListener("click", () => {
            navMenu.classList.toggle("show");

            const icon = menuToggle.querySelector("i");

            if (navMenu.classList.contains("show")) {
                icon.classList.remove("fa-bars");
                icon.classList.add("fa-xmark");
            } else {
                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");
            }
        });

        document.querySelectorAll(".nav-menu a").forEach(link => {
            link.addEventListener("click", () => {
                navMenu.classList.remove("show");

                const icon = menuToggle.querySelector("i");
                icon.classList.remove("fa-xmark");
                icon.classList.add("fa-bars");
            });
        });
    </script>

</body>
</html>
