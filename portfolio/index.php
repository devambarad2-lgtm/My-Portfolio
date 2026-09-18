<?php
$profile = [
    'name' => 'Devam Barad.',
    'initials' => 'DB',
    'role' => 'Creative Developer & Digital Strategist',
    'location' => 'Based in Gujrat,India / Available worldwide',
    'email' => 'devambarad2@gmail.com',
    'phone' => '+91 704 6543 798',
    'image' => 'assets/profilephoto.jpeg',
    'availability' => 'Available for select projects',
    'intro' => 'I build thoughtful digital experiences where sharp strategy, expressive design, and dependable code meet.',
    'about' => 'I am a Web developer who turns complex ideas into clear, memorable digital products. My work spans brand websites, product interfaces, and interactive experiences for ambitious teams that care about craft.',
];

$skills = [
    ['name' => 'UI / UX Design', 'level' => '92%', 'tools' => 'Figma, Prototyping, Design Systems'],
    ['name' => 'Software Devloper', 'level' => '82%', 'tools' => 'java, Python, C++, C#, SQL'],
    ['name' => 'Frontend Development', 'level' => '95%', 'tools' => 'HTML, CSS, JavaScript, React'],
    ['name' => 'PHP Development', 'level' => '88%', 'tools' => 'PHP, MySQL, WordPress, APIs'],
    ['name' => 'Creative Direction', 'level' => '84%', 'tools' => 'Art Direction, Strategy, Storytelling'],
];

$projects = [
    ['number' => '01', 'type' => 'Digital Product', 'title' => 'Northstar Finance', 'description' => 'A calmer, clearer investment platform designed to make better decisions feel effortless.', 'tags' => ['UX Strategy', 'Product Design', 'Frontend'], 'color' => 'ice'],
    ['number' => '02', 'type' => 'Brand Experience', 'title' => 'Nocturne Studio', 'description' => 'An editorial portfolio for an independent architecture practice with a point of view.', 'tags' => ['Art Direction', 'Web Design', 'Development'], 'color' => 'cyan'],
    ['number' => '03', 'type' => 'E-commerce', 'title' => 'Form / Function', 'description' => 'A high-converting online home for considered objects and the people who make them.', 'tags' => ['Strategy', 'Shopify', 'Motion'], 'color' => 'steel'],
];

$services = [
    ['number' => '01', 'title' => 'Discovery & Strategy', 'text' => 'Finding the sharpest opportunity, defining the story, and building a direction your team can believe in.'],
    ['number' => '02', 'title' => 'Design & Direction', 'text' => 'Creating visual systems and interfaces that are distinctive, intuitive, and built to last beyond launch.'],
    ['number' => '03', 'title' => 'Build & Launch', 'text' => 'Translating the work into fast, resilient code with a polished finish across every screen and interaction.'],
];

$profileImagePath = __DIR__ . '/' . $profile['image'];
$profileImageIsUrl = filter_var($profile['image'], FILTER_VALIDATE_URL);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo htmlspecialchars($profile['name']); ?> - <?php echo htmlspecialchars($profile['role']); ?>">
    <title><?php echo htmlspecialchars($profile['name']); ?> — <?php echo htmlspecialchars($profile['role']); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@400;500&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --ink: #07090c;
            --ink-soft: #0d1117;
            --surface: #10161e;
            --line: rgba(180, 218, 231, .16);
            --muted: #8b9aa5;
            --text: #edf8fb;
            --blue: #8de7fa;
            --blue-bright: #c9f5ff;
            --blue-dark: #173b49;
            --max: 1200px;
        }
        * { box-sizing: border-box;
         }
        html { scroll-behavior: smooth;
         }
        body { margin: 0; background: var(--ink); color: var(--text); font-family: 'Manrope', sans-serif; line-height: 1.6; 
            margin-left: 10px;}
        a { color: inherit; text-decoration: none; }
        .shell { width: min(var(--max), calc(100% - 48px)); margin: 0 auto; }
        .eyebrow { display: flex; align-items: center; gap: 12px; color: var(--blue); font: 500 11px 'DM Mono', monospace; letter-spacing: .12em; text-transform: uppercase; }
        .eyebrow::before { content: ''; width: 28px; height: 1px; background: var(--blue); }
        .site-header { position: absolute; z-index: 2; width: 100%; padding: 28px 0; }
        .nav { display: flex; justify-content: space-between; align-items: center; }
        .brand { display: flex; align-items: center; gap: 12px; font-weight: 800; letter-spacing: -.04em; }
        .brand-mark { display: grid; place-items: center; width: 34px; height: 34px; border: 1px solid var(--blue); color: var(--blue); font: 500 12px 'DM Mono', monospace; }
        .nav-links { display: flex; gap: 30px; color: var(--muted); font-size: 12px; font-weight: 700; }
        .nav-links a { transition: color .2s; }
        .nav-links a:hover { color: var(--blue); }
        .hero { min-height: 760px; display: flex; align-items: center; position: relative; overflow: hidden; border-bottom: 1px solid var(--line); background: radial-gradient(circle at 82% 42%, rgba(76, 187, 214, .14), transparent 28%), linear-gradient(125deg, #07090c 0%, #0a1117 60%, #10232c 100%); }
        .hero::after { content: ''; position: absolute; width: 520px; height: 520px; right: 4%; top: 19%; border: 1px solid rgba(141, 231, 250, .2); border-radius: 50%; box-shadow: 0 0 0 42px rgba(141,231,250,.025), 0 0 0 100px rgba(141,231,250,.018); }
        .hero-grid { position: relative; z-index: 1; width: 100%; display: grid; grid-template-columns: minmax(0, 1.15fr) minmax(220px, .5fr) minmax(220px, .5fr); gap: 42px; align-items: center; }
        h1, h2, h3, p { margin-top: 0; }
        h1 { max-width: 790px; margin: 22px 0 28px; font-size: clamp(3.3rem, 7.5vw, 7.3rem); line-height: .94; letter-spacing: -.075em; }
        h1 em { color: var(--blue); font-style: normal; }
        .hero-copy { max-width: 540px; color: var(--muted); font-size: 17px; }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 14px; margin-top: 38px; }
        .button { display: inline-flex; align-items: center; gap: 14px; padding: 14px 18px; border: 1px solid var(--blue); color: var(--blue-bright); font-size: 12px; font-weight: 800; transition: background .2s, color .2s; }
        .button:hover { background: var(--blue); color: var(--ink); }
        .button.ghost { border-color: var(--line); color: var(--text); }
        .button.ghost:hover { background: var(--surface); color: var(--blue); }
        .hero-meta { align-self: end; justify-self: end; width: min(100%, 330px); border-left: 1px solid var(--blue); padding: 20px 0 20px 22px; color: var(--muted); font: 11px 'DM Mono', monospace; }
        .hero-meta strong { display: block; margin-bottom: 8px; color: var(--text); font: 700 15px 'Manrope', sans-serif; }
        .portrait-wrap { display: flex; flex-direction: column; align-items: center; gap: 18px; }
        .portrait-frame { position: relative; width: min(100%, 270px); aspect-ratio: 4 / 5; padding: 10px; border: 1px solid rgba(141,231,250,.55); background: rgba(7,9,12,.55); box-shadow: 18px 18px 0 rgba(141,231,250,.1); }
        .portrait-frame::before, .portrait-frame::after { content: ''; position: absolute; width: 24px; height: 24px; border-color: var(--blue); border-style: solid; pointer-events: none; }
        .portrait-frame::before { top: -7px; left: -7px; border-width: 1px 0 0 1px; }
        .portrait-frame::after { right: -7px; bottom: -7px; border-width: 0 1px 1px 0; }
        .portrait-frame img, .portrait-placeholder { display: block; width: 100%; height: 100%; object-fit: cover; }
        .portrait-placeholder { display: grid; place-items: center; padding: 25px; background: linear-gradient(145deg, #172b35, #071016); color: var(--blue); text-align: center; font: 11px/1.8 'DM Mono', monospace; text-transform: uppercase; letter-spacing: .08em; }
        .portrait-label { color: var(--muted); font: 10px 'DM Mono', monospace; letter-spacing: .08em; text-transform: uppercase; }
        .scroll-note { position: absolute; bottom: 28px; left: 24px; color: var(--muted); font: 10px 'DM Mono', monospace; letter-spacing: .1em; text-transform: uppercase; writing-mode: vertical-rl; }
        section { padding: 120px 0; }
        .section-head { display: flex; justify-content: space-between; align-items: end; gap: 32px; margin-bottom: 60px; }
        h2 { max-width: 650px; margin: 18px 0 0; font-size: clamp(2.4rem, 5vw, 5rem); line-height: .98; letter-spacing: -.065em; }
        .section-note { max-width: 300px; color: var(--muted); font-size: 13px; }
        .about { background: var(--surface); }
        .about-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 90px; }
        .about-text { color: #c2d0d6; font-size: clamp(1.2rem, 2.2vw, 1.75rem); line-height: 1.42; letter-spacing: -.025em; }
        .about-details { display: grid; grid-template-columns: 1fr 1fr; gap: 26px 40px; align-content: center; }
        .detail { border-top: 1px solid var(--line); padding-top: 12px; color: var(--muted); font: 11px 'DM Mono', monospace; }
        .detail strong { display: block; margin-top: 8px; color: var(--text); font: 600 14px 'Manrope', sans-serif; }
        .projects { background: var(--ink); }
        .project-list { border-top: 1px solid var(--line); }
        .project { display: grid; grid-template-columns: 90px minmax(200px, .7fr) 1fr 150px; gap: 30px; align-items: center; padding: 29px 0; border-bottom: 1px solid var(--line); transition: padding .25s, background .25s; }
        .project:hover { padding-left: 18px; background: rgba(141,231,250,.035); }
        .project-number, .project-type { color: var(--blue); font: 11px 'DM Mono', monospace; }
        .project h3 { margin: 0; font-size: clamp(1.5rem, 3vw, 2.5rem); letter-spacing: -.06em; }
        .project-description { max-width: 360px; margin: 0; color: var(--muted); font-size: 13px; }
        .project-tags { display: flex; flex-wrap: wrap; justify-content: end; gap: 6px; }
        .tag { padding: 6px 8px; border: 1px solid var(--line); color: var(--muted); font: 10px 'DM Mono', monospace; }
        .services { background: #dff8fd; color: var(--ink); }
        .services .eyebrow { color: #17768b; }
        .services .eyebrow::before { background: #17768b; }
        .services-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; background: rgba(7,9,12,.2); border: 1px solid rgba(7,9,12,.2); }
        .service { min-height: 270px; padding: 25px; background: #dff8fd; }
        .service-number { color: #17768b; font: 12px 'DM Mono', monospace; }
        .service h3 { max-width: 220px; margin: 62px 0 14px; font-size: 24px; line-height: 1.05; letter-spacing: -.05em; }
        .service p { color: #41606a; font-size: 13px; }
        .skills { background: var(--surface); }
        .skills-grid { display: grid; grid-template-columns: .8fr 1.2fr; gap: 90px; }
        .skills-intro { max-width: 340px; color: var(--muted); font-size: 15px; }
        .skill { padding: 19px 0; border-top: 1px solid var(--line); }
        .skill:last-child { border-bottom: 1px solid var(--line); }
        .skill-top { display: flex; justify-content: space-between; margin-bottom: 10px; }
        .skill-name { font-weight: 700; }
        .skill-level { color: var(--blue); font: 11px 'DM Mono', monospace; }
        .skill-tools { color: var(--muted); font: 11px 'DM Mono', monospace; }
        .meter { height: 3px; margin-top: 13px; background: #23323a; }
        .meter span { display: block; height: 100%; background: var(--blue); }
        .contact { position: relative; overflow: hidden; background: var(--ink); }
        .contact-inner { position: relative; z-index: 1; display: flex; justify-content: space-between; align-items: end; gap: 40px; }
        .contact h2 { max-width: 700px; }
        .contact h2 em { color: var(--blue); font-style: normal; }
        .contact-link { display: block; margin-top: 36px; color: var(--blue); font-size: clamp(1.1rem, 2vw, 1.5rem); font-weight: 700; }
        .contact-link:hover { color: white; }
        .contact-orbit { position: absolute; right: -10%; bottom: -210px; width: 640px; height: 640px; border: 1px solid rgba(141,231,250,.18); border-radius: 50%; box-shadow: 0 0 0 65px rgba(141,231,250,.03), 0 0 0 140px rgba(141,231,250,.025); }
        footer { padding: 25px 0; border-top: 1px solid var(--line); color: var(--muted); font: 10px 'DM Mono', monospace; }
        .footer-row { display: flex; justify-content: space-between; gap: 20px; }
        @media (max-width: 800px) {
            .shell { width: min(var(--max), calc(100% - 34px)); }
            .nav-links { display: none; }
            .hero { min-height: 700px; }
            .hero-grid, .about-grid, .skills-grid { grid-template-columns: 1fr; gap: 45px; }
            .hero-meta { justify-self: start; }
            .portrait-wrap { align-items: flex-start; }
            .hero::after { width: 330px; height: 330px; right: -120px; top: 27%; }
            section { padding: 80px 0; }
            .section-head, .contact-inner { display: block; }
            .section-note { margin-top: 24px; }
            .project { grid-template-columns: 44px 1fr; gap: 12px 18px; padding: 24px 0; }
            .project-type, .project-description, .project-tags { grid-column: 2; justify-content: start; }
            .project-type { grid-row: 1; }
            .project h3 { grid-column: 2; grid-row: 2; }
            .project-description { grid-row: 3; }
            .project-tags { grid-row: 4; }
            .services-grid { grid-template-columns: 1fr; }
            .service { min-height: auto; }
            .service h3 { margin-top: 40px; }
            .contact-orbit { right: -55%; }
            .footer-row { display: block; }
            .footer-row span + span { display: block; margin-top: 8px; }
        }
    </style>
</head>
<body>
    <header class="site-header">
        <div class="shell nav">
            <a class="brand" href="#top"><span class="brand-mark"><?php echo htmlspecialchars($profile['initials']); ?></span><span><?php echo htmlspecialchars($profile['name']); ?></span></a>
            <nav class="nav-links" aria-label="Primary navigation">
                <a href="#about">About</a><a href="#work">Work</a><a href="#skills">Skills</a><a href="#contact">Contact</a>
            </nav>
        </div>
    </header>

    <main id="top">
        <section class="hero">
            <div class="shell hero-grid">
                <div>
                    <div class="eyebrow">Independent creative developer</div>
                    <h1>Ideas with a <em>pulse.</em></h1>
                    <p class="hero-copy"><?php echo htmlspecialchars($profile['intro']); ?></p>
                    <div class="hero-actions"><a class="button" href="#work">Explore my work <span>↘</span></a><a class="button ghost" href="#contact">Start a conversation</a></div>
                </div>
                <div class="portrait-wrap">
                    <div class="portrait-frame">
                        <?php if ($profileImageIsUrl || is_file($profileImagePath)): ?>
                            <img src="<?php echo htmlspecialchars($profile['image']); ?>" alt="Portrait of <?php echo htmlspecialchars($profile['name']); ?>">
                        <?php else: ?>
                            <div class="portrait-placeholder">Add your portrait<br>path or URL above</div>
                        <?php endif; ?>
                    </div>
                    <div class="portrait-label">Portrait / <?php echo htmlspecialchars($profile['initials']); ?></div>
                </div>
                <div class="hero-meta"><strong><?php echo htmlspecialchars($profile['availability']); ?></strong><?php echo htmlspecialchars($profile['location']); ?><br><?php echo htmlspecialchars($profile['email']); ?></div>
            </div>
            <div class="scroll-note">Scroll to discover</div>
        </section>

        <section class="about" id="about">
            <div class="shell">
                <div class="section-head"><div><div class="eyebrow">01 / Profile</div><h2>A human touch in a digital world.</h2></div><p class="section-note">The best work starts with curiosity, honest questions, and a shared ambition to make something matter.</p></div>
                <div class="about-grid"><p class="about-text"><?php echo htmlspecialchars($profile['about']); ?></p><div class="about-details"><div class="detail">Current focus<strong>Digital experiences</strong></div><div class="detail">Experience<strong>3+ years</strong></div><div class="detail">Availability<strong>Q6 / 2024</strong></div><div class="detail">Languages<strong>English, Hindi, Gujarati</strong></div></div></div>
            </div>
        </section>

        <section class="projects" id="work">
            <div class="shell"><div class="section-head"><div><div class="eyebrow">02 / Selected work</div><h2>Work that earns attention.</h2></div><p class="section-note">A small selection of recent collaborations, shaped from first thought to final pixel.</p></div>
                <div class="project-list">
                    <?php foreach ($projects as $project): ?>
                        <article class="project">
                            <div class="project-number"><?php echo htmlspecialchars($project['number']); ?></div>
                            <div><div class="project-type"><?php echo htmlspecialchars($project['type']); ?></div><h3><?php echo htmlspecialchars($project['title']); ?></h3></div>
                            <p class="project-description"><?php echo htmlspecialchars($project['description']); ?></p>
                            <div class="project-tags"><?php foreach ($project['tags'] as $tag): ?><span class="tag"><?php echo htmlspecialchars($tag); ?></span><?php endforeach; ?></div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="services"><div class="shell"><div class="section-head"><div><div class="eyebrow">03 / Approach</div><h2>From first sketch to final launch.</h2></div><p class="section-note">One partner for the thinking, the making, and the details in between.</p></div><div class="services-grid"><?php foreach ($services as $service): ?><article class="service"><div class="service-number"><?php echo htmlspecialchars($service['number']); ?></div><h3><?php echo htmlspecialchars($service['title']); ?></h3><p><?php echo htmlspecialchars($service['text']); ?></p></article><?php endforeach; ?></div></div></section>

        <section class="skills" id="skills"><div class="shell"><div class="section-head"><div><div class="eyebrow">04 / Capabilities</div><h2>Tools are only useful when they serve the idea.</h2></div><p class="section-note">A flexible toolkit for turning a strong point of view into a useful, living experience.</p></div><div class="skills-grid"><p class="skills-intro">I move comfortably between strategy, design, and development. That means fewer handoffs, better conversations, and a final product that feels like one coherent thought.</p><div><?php foreach ($skills as $skill): ?><div class="skill"><div class="skill-top"><span class="skill-name"><?php echo htmlspecialchars($skill['name']); ?></span><span class="skill-level"><?php echo htmlspecialchars($skill['level']); ?></span></div><div class="skill-tools"><?php echo htmlspecialchars($skill['tools']); ?></div><div class="meter"><span style="width: <?php echo htmlspecialchars($skill['level']); ?>"></span></div></div><?php endforeach; ?></div></div></div></section>

        <section class="contact" id="contact"><div class="contact-orbit"></div><div class="shell contact-inner"><div><div class="eyebrow">05 / Let’s talk</div><h2>Have a good idea?<br><em>Let’s give it form.</em></h2><a class="contact-link" href="mailto:<?php echo htmlspecialchars($profile['email']); ?>"><?php echo htmlspecialchars($profile['email']); ?> ↗</a></div><div class="hero-meta"><strong><?php echo htmlspecialchars($profile['phone']); ?></strong><?php echo htmlspecialchars($profile['location']); ?></div></div></section>
    </main>

    <footer><div class="shell footer-row"><span>© <?php echo date('Y'); ?> <?php echo htmlspecialchars($profile['name']); ?></span><span>Designed & built with intention / <?php echo htmlspecialchars($profile['initials']); ?></span></div></footer>
</body>
</html>
