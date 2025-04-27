<?php
// index.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nguyen Tan Phat - Music Producer</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #000;
        color: #ffffff;
        scroll-behavior: smooth;
        overflow-y: scroll;
    }
    header { 
        width: 100%; 
        background: #000000; 
        padding: 20px 50px; 
        display: flex; 
        justify-content: space-between; 
        align-items: center; 
        position: fixed; 
        top: 0; 
        left: 0; 
        box-shadow: 0 2px 8px rgba(255,255,255,0.2); 
        z-index: 10;
    }
    nav a { margin-left: 30px; text-decoration: none; color: #ffffff; font-weight: 500; transition: 0.3s; }
    nav a:hover { color: #E2D825; }
    main { 
        margin-top: 0; 
        width: 100%; 
        scroll-snap-type: y mandatory; 
    }
    section { 
        scroll-snap-align: start;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 80px 40px;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        position: relative;
        opacity: 0;
        transform: translateY(50px);
        transition: opacity 1s ease, transform 1s ease;
    }
    section::before {
        content: '';
        position: absolute;
        top: 0; left: 0; width: 100%; height: 100%;
        background: rgba(0, 0, 0, 0.5);
        z-index: 0;
    }
    section > * { position: relative; z-index: 1; }
    section.active {
        opacity: 1;
        transform: translateY(0);
    }
    h1, h2 { margin-bottom: 20px; color: #ffffff; }
    .audio-player, .video-player { margin-top: 30px; }
    audio, iframe { width: 100%; border-radius: 15px; }
    a { color: #E2D825; transition: 0.3s; }
    a:hover { color: #ffffff; }
</style>
</head>
<body>
<header>
    <div class="logo">NGUYỄN TẤN PHÁT</div>
    <nav>
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#experience">Experience</a>
        <a href="#projects">Projects</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<main>
    <section id="about" style="background-image: url('images/1.jpg');">
        <h1>Music Producer | Mixing Engineer</h1>
        <p>From an early age, I discovered a deep passion for music — a flame that has only grown stronger with time. Over the past 5 years, I have immersed myself in music production, honing my craft in composition, arrangement, recording, and mixing. Every project I touch is fueled by dedication, creativity, and a relentless drive to craft soundscapes that captivate and inspire. I am ready to bring not just skills, but true artistry to every musical journey.</p>
    </section>

    <section id="skills" style="background-image: url('images/2.jpg');">
        <h2>Skills</h2>
        <p><strong>DAWs:</strong> Ableton Live, Reaper, Cubase, Bandlab, FL Studio</p>
        <p><strong>Mixing/Mastering:</strong> EQ, Compression, Reverb/Delay, FabFilter, Waves, iZotope plugins</p>
        <p><strong>Instruments:</strong> Guitar, Bass, Keyboard, Vocals</p>
        <p><strong>Genres:</strong> Rock, Funk, R&B, Pop, Ballad, City Pop, Gospel, EDM, Hip-Hop</p>
    </section>

    <section id="experience" style="background-image: url('images/3.jpg');">
        <h2>Work Experience</h2>
        <p><strong>No Sleep Session (2020 - Present)</strong><br>
        Producer / Mixing Engineer<br>
        Produced 2 EPs and 2 singles, arranged across genres like Pop, R&B, Rock, EDM.</p>
        <p><strong>Freelance (2022 - Present)</strong><br>
        Producer / Mixing Engineer<br>
        Collaborated with independent artists on 7 singles.</p>
        <p><strong>NSS Studio (2021 - 2023)</strong><br>
        Recording/Mixing Engineer & Beat Arranger<br>
        Recorded, mixed, mastered songs for artists; arranged hip-hop and classical piano beats.</p>
    </section>

    <section id="projects" style="background-image: url('images/4.jpg');">

        <h2>Projects</h2>
        <p>- 2 EPs and 2 singles with No Sleep Session (2020 - 2025)</p>
        <p>- 7 independent artist singles (2022 - 2025)</p>

        <div class="video-player">
            <h3>Listen to My Work</h3>
            <div class="iframe-container">
                <iframe src="https://www.youtube.com/embed/Ih8jJchLfOk" frameborder="0" allowfullscreen></iframe>
                <iframe src="https://www.youtube.com/embed/pxKoe56XIuI" frameborder="0" allowfullscreen></iframe>
                <iframe src="https://www.youtube.com/embed/7o_D0v_p7cU" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </section>

    <style>
        .video-player {
            margin-top: 30px;
        }

        .iframe-container {
            display: flex;
            justify-content: space-between;
            gap: 20px; /* Khoảng cách giữa các iframe */
            flex-wrap: wrap; /* Cho phép các iframe xuống dòng khi không đủ chỗ */
        }

        iframe {
            width: 30%; /* Đặt mỗi iframe chiếm 30% chiều rộng */
            height: 300px; /* Chiều cao cố định cho iframe */
            border-radius: 15px;
        }
    </style>

    <section id="contact" style="background-image: url('background-contact.jpg');">
        <h2>Contact</h2>
        <p>Email: <a href="mailto:phatden544@gmail.com">phatden544@gmail.com</a></p>
        <p>Phone: <a href="tel:+84828994050">+84 828 994 050</a></p>
        <p>YouTube: <a href="https://youtube.com/@nosleepsession" target="_blank">@nosleepsession</a></p>
    </section>
</main>

<script>
    const links = document.querySelectorAll('nav a'); // Lấy tất cả các liên kết trong nav

    links.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault(); // Ngừng hành vi mặc định của thẻ <a>

            const targetId = link.getAttribute('href').substring(1); // Lấy ID phần muốn cuộn đến
            const targetSection = document.getElementById(targetId); // Lấy phần có ID đó

            if (targetSection) {
                window.scrollTo({
                    top: targetSection.offsetTop - 50, // Điều chỉnh vị trí cuộn với offset (khoảng cách từ trên cùng)
                    behavior: 'smooth' // Cuộn mượt mà
                });
            }
        });
    });

    const sections = document.querySelectorAll('section');
    let isScrolling = false;
    let currentSection = 0;

    // Scroll handler for mouse wheel
    window.addEventListener('wheel', (e) => {
        if (isScrolling) return;

        if (e.deltaY > 0) {
            // Scroll down
            if (currentSection < sections.length - 1) {
                currentSection++;
                scrollToSection();
            }
        } else {
            // Scroll up
            if (currentSection > 0) {
                currentSection--;
                scrollToSection();
            }
        }
    });

    // Scroll to a specific section, with adjusted position
    function scrollToSection() {
        isScrolling = true;
        const targetSection = sections[currentSection];
        const targetPosition = targetSection.getBoundingClientRect().top + window.pageYOffset - 50; // Điều chỉnh khoảng cách
        window.scrollTo({
            top: targetPosition,
            behavior: 'smooth'
        });

        setTimeout(() => {
            isScrolling = false;
        }, 1000); // Khoảng thời gian để chờ scroll xong
    }

    // Kích hoạt animation fade khi load
    function handleFade() {
        const triggerBottom = window.innerHeight / 2;

        sections.forEach(section => {
            const boxTop = section.getBoundingClientRect().top;
            const boxBottom = section.getBoundingClientRect().bottom;

            if (boxTop < triggerBottom && boxBottom > triggerBottom) {
                section.classList.add('active');
            } else {
                section.classList.remove('active');
            }
        });
    }

    window.addEventListener('scroll', handleFade);
    window.addEventListener('load', handleFade);
</script>
</body>
</html>
