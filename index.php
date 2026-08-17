<?php include("includes/header.php"); ?>

<!-- Hero Section -->
<section id="home" class="hero">
    <div class="hero-content">
        <h1>SANTIAGO MUSSI</h1>
        <p>{'>'} <?php echo ($current_lang === 'es') ? 'DESARROLLADOR JUNIOR' : 'JUNIOR DEVELOPER'; ?> {'<'}</p>
        <a href="#about" class="cta-button"><?php echo ($current_lang === 'es') ? 'COMENZAR' : 'START'; ?></a>
    </div>
</section>


<section id="about" class="section">
    <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'ACERCA DE MÍ' : 'ABOUT ME'; ?></h2>
            <div class="about-me">
                <img src="assets/img/santiago.png" alt="Santiago Mussi" class="about-photo">
            <p class="about-text">
        <?php if ($current_lang === 'es'): ?>
            Soy un desarrollador junior de Buenos Aires (Argentina), con una base sólida en tecnologías backend y web. 
            Estoy constantemente aprendiendo, construyendo y buscando formas creativas de resolver problemas del mundo real a través del código.<br><br>

            He desarrollado aplicaciones móviles enfocadas en el bienestar mental, administrado comunidades en línea a través de la administración de servidores de juegos, 
            y construido proyectos web full-stack que combinan un diseño limpio con funcionalidad práctica. Estas experiencias me han enseñado 
            cómo adaptarme rápidamente, mantener la curiosidad y abordar cada desafío con precisión técnica y empatía hacia los usuarios.<br><br>

            Ya sea colaborando en un equipo o enfrentando problemas de forma independiente, disfruto cada parte del ciclo de desarrollo... 
            desde diseñar interfaces intuitivas hasta optimizar el rendimiento del backend. Actualmente estoy estudiando Ingeniería en Informática 
            y continúo expandiendo mis habilidades a través de proyectos prácticos que me impulsan a pensar críticamente y crecer.
        <?php else: ?>
            I'm a junior developer from Buenos Aires (Argentina), with a solid foundation in backend, and web technologies.  
            I'm constantly learning, building, and looking for creative ways to solve real-world problems through code.<br><br>

            I've developed mobile apps focused on mental well-being, managed online communities through game server administration,  
            and built full-stack web projects that blend clean design with practical functionality. These experiences have taught me  
            how to adapt quickly, stay curious, and approach each challenge with both technical precision and empathy for users.<br><br>

            Whether collaborating on a team or tackling problems independently, I enjoy every part of the development cycle...  
            from designing intuitive interfaces to optimizing backend performance. I'm currently studying IT  
            and continue expanding my skills through hands-on projects that push me to think critically and grow.
        <?php endif; ?>
            </p>
        </div>
</section>

<!-- Languages -->
<section id="languages" class="section">
    <div class="container">
        <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'IDIOMAS' : 'LANGUAGES'; ?></h2>
        <div class="languages">
            <ul class="lang-text">
                <li><strong><?php echo ($current_lang === 'es') ? 'Español – Nativo' : 'Spanish – Native'; ?></strong></li>
                <li><strong><?php echo ($current_lang === 'es') ? 'Inglés – Intermedio-Alto (B2 – Cambridge FCEFS)' : 'English – Upper-Intermediate (B2 – Cambridge FCEFS)'; ?></strong></li>
                <li><strong><?php echo ($current_lang === 'es') ? 'Portugués – Intermedio / Básico' : 'Portuguese – Intermediate / Basic'; ?></strong></li>
            </ul>
        </div>
    </div>
</section>

<!-- Tech Stack -->
<section id="tech" class="section">
    <div class="container">
        <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'STACK TECNOLÓGICO' : 'TECH STACK'; ?></h2>
        <div class="tech-grid">
            <?php
                $technologies = [
                    [
                        'name' => 'Java',
                        'color' => '#f89820',
                        'desc' => [
                            'es' => 'Programación orientada a objetos, estructuras y patrones de diseño.',
                            'en' => 'Object-oriented programming, data structures, and design patterns.'
                        ],
                        'level' => 90
                    ],
                    [
                        'name' => 'Kotlin',
                        'color' => '#0095d5',
                        'desc' => [
                            'es' => 'Desarrollo básico de apps móviles y uso de Firebase.',
                            'en' => 'Basic mobile app development and Firebase integration.'
                        ],
                        'level' => 65
                    ],
                    [
                        'name' => 'JavaScript',
                        'color' => '#f0db4f',
                        'desc' => [
                            'es' => 'Manipulación del DOM, manejo de eventos y uso de fetch.',
                            'en' => 'DOM manipulation, event handling, and fetch usage.'
                        ],
                        'level' => 80
                    ],
                    [
                        'name' => 'Python',
                        'color' => '#3776ab',
                        'desc' => [
                            'es' => 'Automatización de tareas y estructuras funcionales.',
                            'en' => 'Task automation and functional structures.'
                        ],
                        'level' => 70
                    ],
                    [
                        'name' => 'SQL',
                        'color' => '#00758f',
                        'desc' => [
                            'es' => 'Consultas avanzadas, diseño y normalización de bases de datos.',
                            'en' => 'Advanced queries, design, and normalization.'
                        ],
                        'level' => 85
                    ],
                    [
                        'name' => 'MongoDB',
                        'color' => '#47a248',
                        'desc' => [
                            'es' => 'Consultas CRUD, agregaciones y modelado anidado.',
                            'en' => 'CRUD queries, aggregations, and embedded modeling.'
                        ],
                        'level' => 75
                    ],
                    [
                        'name' => 'Redis',
                        'color' => '#dc382d',
                        'desc' => [
                            'es' => 'Comandos clave-valor y lógica de caché aplicada.',
                            'en' => 'Key-value commands and applied caching logic.'
                        ],
                        'level' => 70
                    ],
                    [
                        'name' => 'Cassandra',
                        'color' => '#1287b1',
                        'desc' => [
                            'es' => 'Modelado por consultas, replicación y manejo con CQL.',
                            'en' => 'Query-based modeling, replication, and CQL handling.'
                        ],
                        'level' => 80
                    ],
                    [
                        'name' => 'HTML',
                        'color' => '#e34c26',
                        'desc' => [
                            'es' => 'Estructura semántica, formularios y accesibilidad.',
                            'en' => 'Semantic structure, forms, and accessibility.'
                        ],
                        'level' => 95
                    ],
                    [
                        'name' => 'CSS',
                        'color' => '#1572b6',
                        'desc' => [
                            'es' => 'Diseño responsivo con Flexbox/Grid. Uso de animaciones simples.',
                            'en' => 'Responsive design with Flexbox/Grid. Simple animations usage.'
                        ],
                        'level' => 85
                    ],
                    [
                        'name' => 'PHP',
                        'color' => '#777bb4',
                        'desc' => [
                            'es' => 'Primeros pasos con scripting en páginas web.',
                            'en' => 'First steps with scripting on web pages.'
                        ],
                        'level' => 50
                    ],
                    [
                        'name' => 'Node.js',
                        'color' => '#00FF33',
                        'desc' => [
                            'es' => 'En aprendizaje.',
                            'en' => 'In learning process.'
                        ],
                        'level' => 20
                    ],
                    [
                        'name' => 'React',
                        'color' => '#B6FFFF',
                        'desc' => [
                            'es' => 'En aprendizaje.',
                            'en' => 'In learning process.'
                            ],
                        'level' => 40
                    ]
                ];

                foreach ($technologies as $tech) {
                    $desc = $tech['desc'][$current_lang] ?? $tech['desc']['en'];
                    echo '<div class="tech-item" onclick="showPopup(\'' . addslashes($tech['name']) . '\', \'' . addslashes($desc) . '\', ' . $tech['level'] . ')">';
                    echo '<div class="tech-icon" style="background-color: ' . $tech['color'] . '">' . strtoupper(substr($tech['name'], 0, 2)) . '</div>';
                    echo '<div class="tech-name">' . $tech['name'] . '</div>';
                    echo '<div class="tech-level">';
                    echo '<div class="progress-bar">';
                    echo '<div class="progress-fill" style="width: ' . $tech['level'] . '%; background-color: ' . $tech['color'] . '"></div>';
                    echo '</div>';
                    echo '<span class="level-text">' . $tech['level'] . '%</span>';
                    echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
    </div>
</section>

<div id="popup" class="popup">
  <div class="popup-content glitch">
    <span class="close-btn" onclick="hidePopup()">&times;</span>
    <h3 id="popup-title"></h3>
    <p id="popup-desc"></p>
    <div class="popup-level">
      <div class="popup-progress">
        <div class="popup-progress-fill" id="popup-progress-fill"></div>
      </div>
      <span id="popup-level-text">0%</span>
    </div>
  </div>
</div>

<!-- Experiencia -->
<section id="experience" class="section">
    <div class="container">
        <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'EXPERIENCIA LABORAL' : 'JOB EXPERIENCE'; ?></h2>
        <div class="timeline">

            <!-- Junior Developer -->
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2023 - PRESENT</div>
                    <h3 class="timeline-title"><?php echo ($current_lang === 'es') ? 'Desarrollador Junior' : 'Junior Developer'; ?></h3>
                    <p class="timeline-description">
                        <?php if ($current_lang === 'es'): ?>
                            Desarrollo de aplicaciones móviles con Kotlin, desarrollo web usando HTML, CSS, JavaScript y PHP,  
                            y mantenimiento de sistemas heredados.  
                            Aprendizaje de buenas prácticas y metodologías de desarrollo.
                        <?php else: ?>
                            Mobile application development with Kotlin, web development using HTML, CSS, JavaScript, and PHP,  
                            and maintenance of legacy systems.  
                            Learning best practices and development methodologies.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="timeline-dot"></div>
            </div>

            <!-- Piratas Series -->
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2021 - 2022</div>
                    <h3 class="timeline-title"><?php echo ($current_lang === 'es') ? 'Desarrollador y Organizador – Serie de Minecraft “Piratas”' : 'Developer & Organizer – “Piratas” Minecraft Series'; ?></h3>
                    <p class="timeline-description">
                        <?php if ($current_lang === 'es'): ?>
                            Participación en la programación y coordinación de eventos para la serie de Minecraft  
                            “Piratas”, con youtubers como Vegetta777, Rubius, Willyrex, entre otros.  
                            Trabajo en mecánicas de juego personalizadas, lógica del servidor y diseño de historia.
                        <?php else: ?>
                            Participated in the programming and event coordination for the Minecraft series  
                            “Piratas,” for youtubers like: Vegetta777, Rubius, Willyrex, and others.  
                            Worked on custom gameplay mechanics, server logic, and storyline design.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="timeline-dot"></div>
            </div>

            <!-- ValiantsRP -->
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2020 - 2021</div>
                    <h3 class="timeline-title"><?php echo ($current_lang === 'es') ? 'Administrador de Servidor – ValiantsRP Roleplay' : 'Server Administrator – ValiantsRP Roleplay'; ?></h3>
                    <p class="timeline-description">
                        <?php if ($current_lang === 'es'): ?>
                            Responsable de la gestión y moderación del servidor de roleplay ValiantsRP, cuyos dueños eran Vegetta777 y Willyrex.  
                            Las tareas incluían gestión de usuarios, aplicación de reglas, coordinación de eventos  
                            y mantenimiento de un entorno de roleo seguro y atractivo.
                        <?php else: ?>
                            Responsible for managing and moderating the ValiantsRP roleplay server, which owners were Vegetta777 and Willyrex.  
                            Tasks included user management, rule enforcement, event coordination, and maintaining a safe and engaging roleplay environment.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="timeline-dot"></div>
            </div>

        </div>
    </div>
</section>


    <!-- Educación -->
<section id="education" class="section">
    <div class="container">
        <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'EDUCACIÓN' : 'EDUCATION'; ?></h2>
        <div class="timeline">

            <!-- Computer Engineering -->
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2023 - PRESENT</div>
                    <h3 class="timeline-title">
                        <?php echo ($current_lang === 'es') ? 'Ingeniería en Informática' : 'Computer Engineering'; ?>
                    </h3>
                    <p class="timeline-description">
                        <?php if ($current_lang === 'es'): ?>
                            Universidad Argentina de la Empresa (UADE) – Especialización en desarrollo de software  
                            y arquitectura de sistemas distribuidos.
                        <?php else: ?>
                            Argentine University Of Enterprise – Specialization in software development  
                            and distributed systems architecture.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="timeline-dot"></div>
            </div>

            <!-- Self-Learning -->
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2022 - 2023</div>
                    <h3 class="timeline-title">
                        <?php echo ($current_lang === 'es') ? 'Ruta de Aprendizaje Autodidacta' : 'Self-Learning Path'; ?>
                    </h3>
                    <p class="timeline-description">
                        <?php if ($current_lang === 'es'): ?>
                            Profundización en tecnologías web, fundamentos de la nube y sistemas backend  
                            mediante plataformas online y proyectos personales.
                        <?php else: ?>
                            Deepened knowledge in web technologies, cloud fundamentals, and backend systems  
                            through online platforms and personal projects.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="timeline-dot"></div>
            </div>

            <!-- Web Dev Course -->
            <div class="timeline-item">
                <div class="timeline-content">
                    <div class="timeline-date">2022</div>
                    <h3 class="timeline-title">
                        <?php echo ($current_lang === 'es') ? 'Curso de Desarrollo Web' : 'Web Development Course'; ?>
                    </h3>
                    <p class="timeline-description">
                        <?php if ($current_lang === 'es'): ?>
                            Curso introductorio de desarrollo web realizado durante el secundario,  
                            centrado en HTML, CSS, JavaScript y principios básicos de diseño web.
                        <?php else: ?>
                            Introductory web development course completed during high school,  
                            focused on HTML, CSS, JavaScript, and basic web design principles.
                        <?php endif; ?>
                    </p>
                </div>
                <div class="timeline-dot"></div>
            </div>

        </div>
    </div>
</section>

<!-- Proyectos -->
<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'PROYECTOS' : 'PROJECTS'; ?></h2>
        <div class="projects-grid">
            
             <div class="project-card">
                <div class="project-image">ANALIZADOR</div>
                <div class='project-content'>
                    <h3 class='project-title'>Analizador de métodos numéricos</h3>
                    <p class="project-description">
                        <?php if ($current_lang === 'es'): ?>
                            Este proyecto es una plataforma interactiva desarrollada con Streamlit diseñada para la visualización y análisis de modelos matemáticos y simulaciones computacionales. La aplicación permite a los usuarios explorar fenómenos complejos mediante parámetros ajustables en tiempo real, utilizando Python como motor de cálculo y Plotly para la generación de gráficos dinámicos y de alta precisión.
                        <?php else: ?>
                        This project is an interactive platform built with Streamlit, designed for the visualization and analysis of mathematical models and computational simulations. The application allows users to explore complex phenomena through real-time adjustable parameters, leveraging Python as the calculation engine and Plotly for generating dynamic, high-precision graphics.
                        <?php endif;?>
                    </p>
                    <div class='project-buttons'>
                        <a href="https://github.com/SantiMussi/AppModeladoYSimulacion" class='project-btn' target="_blank">Github</a>
                        <a href='https://modeladoysimulacion.streamlit.app' class='project-btn' target='_blank'>
                            <?php if ($current_lang === 'es'): ?>
                            Prueba la app!
                            <?php else: ?>
                            Test the app!
                            <?php endif;?>
                        </a>
                        
                    </div>
                </div>
            </div>

            <!-- Proyecto: Simulador F1 -->
            <div class="project-card">
                <div class="project-image">F1 SIM</div>
                <div class="project-content">
                    <h3 class="project-title">F1 Pit Optimizer</h3>
                    <p class="project-description">
                        <?php if ($current_lang === 'es'): ?>
                            Herramienta web desarrollada para la simulación y optimización de estrategias en Fórmula 1. Utiliza métodos numéricos y modelos de machine learning integrados con datos de telemetría para calcular las paradas en boxes ideales.
                        <?php else: ?>
                            Web-based tool developed for Formula 1 strategy simulation and optimization. It utilizes numerical methods and machine learning models integrated with telemetry data to calculate ideal pit stops.
                        <?php endif; ?>
                    </p>
                    <div class="project-buttons">
                        <a href="https://github.com/SantiMussi/SimuladorF1" class="project-btn" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto: Vantage -->
            <div class="project-card">
                <div class="project-image">VANTAGE</div>
                <div class="project-content">
                    <h3 class="project-title">Vantage - App de Subastas</h3>
                    <p class="project-description">
                        <?php if ($current_lang === 'es'): ?>
                            Aplicación móvil para una casa de subastas desarrollada con React Native. Incluye el diseño completo de la interfaz en Figma y la implementación del frontend, asegurando una experiencia de usuario fluida y profesional.
                        <?php else: ?>
                            Mobile auction house application developed with React Native. Includes complete UI design in Figma and frontend implementation, ensuring a smooth and professional user experience.
                        <?php endif; ?>
                    </p>
                    <div class="project-buttons">
                        <a href="https://github.com/SantiMussi/AppMovilSubastas" class="project-btn" target="_blank">GitHub</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto: Szafrankus -->
            <div class="project-card">
                <div class="project-image">FULLSTACK</div>
                <div class="project-content">
                    <h3 class="project-title">Szafrankus E-commerce</h3>
                    <p class="project-description">
                        <?php if ($current_lang === 'es'): ?>
                            Tienda e-commerce full-stack desarrollada desde cero.  
                            Incluye gestión de productos, carrito de compras, usuarios y órdenes.  
                            Arquitectura separada frontend / backend con comunicación mediante APIs REST,  
                            manejo de estados del carrito y persistencia de datos.  
                            Enfocado en simular el flujo real de compra de un usuario en un entorno productivo.
                        <?php else: ?>
                            Full-stack e-commerce store developed from scratch.  
                            Features product management, shopping cart, users, and orders.  
                            Separate frontend / backend architecture with REST API communication,  
                            cart state management, and data persistence.  
                            Focused on simulating a real-world user purchase flow.
                        <?php endif; ?>
                        </p>

                    <div class="project-buttons">
                        <a href="https://github.com/SantiMussi/Front-apis" class="project-btn" target="_blank">Frontend</a>
                        <a href="https://github.com/SantiMussi/TPO-APIs" class="project-btn" target="_blank">Backend</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 1: BreakBuddy -->
            <div class="project-card">
                <div class="project-image">BREAK</div>
                <div class="project-content">
                    <h3 class="project-title">BreakBuddy</h3>
                    <p class="project-description">
                        <?php if ($current_lang === 'es'): ?>
                            Aplicación Android desarrollada en Kotlin con layouts XML, enfocada en prevenir el burnout profesional.  
                            Incluye recordatorios personalizados para pausas activas, elementos de gamificación y chequeos emocionales.
                        <?php else: ?>
                            Android application developed in Kotlin with XML layouts, focused on preventing professional burnout.  
                            Features personalized active break reminders, gamification elements, and emotional check-ins.
                        <?php endif; ?>
                    </p>
                    <div class="project-buttons">
                        <a href="https://github.com/marcosvillar4/Proyecto-Seminario-Integracion-Profesional" class="project-btn" target="_blank">GitHub</a>
                        <a href="#" class="project-btn" style="display: none">Demo</a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2: DAL -->
            <div class="project-card">
                <div class="project-image">WEB</div>
                <div class="project-content">
                    <h3 class="project-title">Editorial DAL Website Redesign</h3>
                    <p class="project-description">
                        <?php if ($current_lang === 'es'): ?>
                            Rediseño y migración del sitio web de Editorial DAL usando WordPress.  
                            Implementé un tema personalizado, optimicé velocidad y SEO, y reorganicé el contenido para mejorar la usabilidad  
                            manteniendo la identidad visual de la marca.
                        <?php else: ?>
                            Redesign and migration of the Editorial DAL website using WordPress.  
                            I implemented a custom theme, optimized speed and SEO, and reorganized content for better usability  
                            while preserving the brand’s visual identity.
                        <?php endif; ?>
                    </p>
                    <div class="project-buttons">
                        <a href="https://www.editorialdal.com" class="project-btn" target="_blank">
                            <?php echo ($current_lang === 'es') ? 'Visitar sitio' : 'Visit site'; ?>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3: Minecraft Plugin -->
            <div class="project-card">
                <div class="project-image">PLUGIN</div>
                <div class="project-content">
                    <h3 class="project-title">Linked Health Minecraft plugin</h3>
                    <p class="project-description">
                        <?php if ($current_lang === 'es'): ?>
                            Mi primer plugin para Minecraft, que aprendí a desarrollar completamente por mi cuenta.  
                            Vincula la salud de todos los jugadores, de modo que comparten la misma barra de vida.
                        <?php else: ?>
                            My first Minecraft plugin, which I learned to create entirely on my own.  
                            It links all players' health, so everyone shares the same life bar.
                        <?php endif; ?>
                    </p>
                    <div class="project-buttons">
                        <a href="https://www.spigotmc.org/resources/linkedhealth-1-21.120773/" class="project-btn" target="_blank">
                            <?php echo ($current_lang === 'es') ? 'Ver plugin' : 'Visit plugin'; ?>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Tools & Frameworks -->
<section id="tools" class="section">
  <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'HERRAMIENTAS Y FRAMEWORKS' : 'TOOLS & FRAMEWORKS'; ?></h2>
  <div class="tools-grid">

    <!-- Development Tools -->
    <div class="tools-item">
      <div class="tools-icon">AS</div>
      <div class="tools-name">Android Studio</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">VS</div>
      <div class="tools-name">VS Code</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">IJ</div>
      <div class="tools-name">IntelliJ IDEA</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">Git</div>
      <div class="tools-name">Git</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">GH</div>
      <div class="tools-name">GitHub</div>
    </div>

    <!-- Web Technologies -->
    <div class="tools-item">
      <div class="tools-icon">WP</div>
      <div class="tools-name">WordPress</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">jQ</div>
      <div class="tools-name">jQuery</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">API</div>
      <div class="tools-name">REST APIs</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">JS</div>
      <div class="tools-name">JSON</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">XML</div>
      <div class="tools-name">XML</div>
    </div>

    <!-- Design & UI -->
    <div class="tools-item">
      <div class="tools-icon">Fg</div>
      <div class="tools-name">Figma</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">Ca</div>
      <div class="tools-name">Canva</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">Ps</div>
      <div class="tools-name">Photoshop</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">RD</div>
      <div class="tools-name">Responsive Design</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">MD</div>
      <div class="tools-name">Material Design</div>
    </div>

    <!-- Game Dev -->
    <div class="tools-item">
      <div class="tools-icon">Sp</div>
      <div class="tools-name">Spigot API</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">Bk</div>
      <div class="tools-name">Bukkit</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">MP</div>
      <div class="tools-name">Minecraft Plugins</div>
    </div>
    <div class="tools-item">
      <div class="tools-icon">SM</div>
      <div class="tools-name">Server Management</div>
    </div>

  </div>
</section>


<!-- Social Media -->
<section id="social" class="section">
    <div class="container">
        <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'REDES SOCIALES' : 'SOCIAL MEDIA'; ?></h2>
        <div class="social-grid">

            <!-- LinkedIn -->
            <div class="social-card">
                <div class="social-icon"><i class="fab fa-linkedin-in"></i></div>
                <h3 class="social-name">LinkedIn</h3>
                <p class="social-handle">@santiagomussi</p>
                <a href="https://www.linkedin.com/in/santiago-mussi-82458b238/" class="social-link" target="_blank">
                    <?php echo ($current_lang === 'es') ? 'CONECTAR' : 'CONNECT'; ?>
                </a>
            </div>

            <!-- GitHub -->
            <div class="social-card">
                <div class="social-icon"><i class="fab fa-github"></i></div>
                <h3 class="social-name">GitHub</h3>
                <p class="social-handle">@SantiMussi</p>
                <a href="https://github.com/SantiMussi" class="social-link" target="_blank">
                    <?php echo ($current_lang === 'es') ? 'SEGUIR' : 'FOLLOW'; ?>
                </a>
            </div>

            <!-- Instagram -->
            <div class="social-card">
                <div class="social-icon"><i class="fab fa-instagram"></i></div>
                <h3 class="social-name">Instagram</h3>
                <p class="social-handle">@santi.mussi</p>
                <a href="https://www.instagram.com/santi.mussi/" class="social-link" target="_blank">
                    <?php echo ($current_lang === 'es') ? 'SEGUIR' : 'FOLLOW'; ?>
                </a>
            </div>

            <!-- Email -->
            <div class="social-card">
                <div class="social-icon"><i class="fas fa-envelope"></i></div>
                <h3 class="social-name">Email</h3>
                <p class="social-handle">santimussi1959@gmail.com</p>
                <a href="mailto:santimussi1959@gmail.com" class="social-link">
                    <?php echo ($current_lang === 'es') ? 'ENVIAR CORREO' : 'MAIL NOW'; ?>
                </a>
            </div>

        </div>
    </div>
</section>


<!-- Logros y Destacados -->
<section id="achievements" class="section">
    <div class="container">
        <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'LOGROS Y DESTACADOS' : 'ACHIEVEMENTS & HIGHLIGHTS'; ?></h2>
        <div class="achievements-grid">

            <!-- Impacto en la comunidad -->
            <div class="achievement-card">
                <div class="achievement-header">
                    <div class="achievement-icon">🏆</div>
                    <h3 class="achievement-title">
                        <?php echo ($current_lang === 'es') ? 'Impacto en la Comunidad' : 'Community Impact'; ?>
                    </h3>
                </div>
                <p class="achievement-description">
                    <?php if ($current_lang === 'es'): ?>
                        Contribución a series de Minecraft con más de 50 millones de vistas combinadas,  
                        trabajando junto a los principales creadores de contenido hispanohablantes.
                    <?php else: ?>
                        Contributed to Minecraft series with 50M+ combined views,  
                        working with top Spanish-speaking content creators.
                    <?php endif; ?>
                </p>
                <div class="achievement-stats">
                    <div class="stat-item">
                        <span class="stat-number">50M+</span>
                        <span class="stat-label"><?php echo ($current_lang === 'es') ? 'Vistas' : 'Views'; ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">2</span>
                        <span class="stat-label"><?php echo ($current_lang === 'es') ? 'Años' : 'Years'; ?></span>
                    </div>
                </div>
            </div>

            <!-- Desarrollo móvil -->
            <div class="achievement-card">
                <div class="achievement-header">
                    <div class="achievement-icon">📱</div>
                    <h3 class="achievement-title">
                        <?php echo ($current_lang === 'es') ? 'Desarrollo Móvil' : 'Mobile Development'; ?>
                    </h3>
                </div>
                <p class="achievement-description">
                    <?php if ($current_lang === 'es'): ?>
                        Desarrollo de la app BreakBuddy enfocada en salud mental y productividad,  
                        implementando gamificación y funciones de interacción con el usuario.
                    <?php else: ?>
                        Developed BreakBuddy app focusing on mental health and productivity,  
                        implementing gamification and user engagement features.
                    <?php endif; ?>
                </p>
                <div class="achievement-stats">
                    <div class="stat-item">
                        <span class="stat-number">Kotlin</span>
                        <span class="stat-label"><?php echo ($current_lang === 'es') ? 'Lenguaje' : 'Language'; ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number"><?php echo ($current_lang === 'es') ? 'Salud' : 'Health'; ?></span>
                        <span class="stat-label"><?php echo ($current_lang === 'es') ? 'Enfoque' : 'Focus'; ?></span>
                    </div>
                </div>
            </div>

            <!-- Excelencia Web -->
            <div class="achievement-card">
                <div class="achievement-header">
                    <div class="achievement-icon">🌐</div>
                    <h3 class="achievement-title">
                        <?php echo ($current_lang === 'es') ? 'Excelencia Web' : 'Web Excellence'; ?>
                    </h3>
                </div>
                <p class="achievement-description">
                    <?php if ($current_lang === 'es'): ?>
                        Rediseño y optimización exitosa del sitio web de Editorial DAL,  
                        mejorando el rendimiento, el SEO y la experiencia del usuario.
                    <?php else: ?>
                        Successfully redesigned and optimized Editorial DAL website,  
                        improving performance, SEO, and user experience.
                    <?php endif; ?>
                </p>
                <div class="achievement-stats">
                    <div class="stat-item">
                        <span class="stat-number">WordPress</span>
                        <span class="stat-label"><?php echo ($current_lang === 'es') ? 'Plataforma' : 'Platform'; ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">SEO</span>
                        <span class="stat-label"><?php echo ($current_lang === 'es') ? 'Optimizado' : 'Optimized'; ?></span>
                    </div>
                </div>
            </div>

            <!-- Progreso Académico -->
            <div class="achievement-card">
                <div class="achievement-header">
                    <div class="achievement-icon">🎓</div>
                    <h3 class="achievement-title">
                        <?php echo ($current_lang === 'es') ? 'Progreso Académico' : 'Academic Progress'; ?>
                    </h3>
                </div>
                <p class="achievement-description">
                    <?php if ($current_lang === 'es'): ?>
                        Actualmente cursando Ingeniería en Informática en UADE mientras mantengo  
                        un trabajo activo en desarrollo y aprendizaje continuo.
                    <?php else: ?>
                        Currently pursuing IT at UADE while maintaining  
                        active development work and continuous learning.
                    <?php endif; ?>
                </p>
                <div class="achievement-stats">
                    <div class="stat-item">
                        <span class="stat-number">UADE</span>
                        <span class="stat-label"><?php echo ($current_lang === 'es') ? 'Universidad' : 'University'; ?></span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number">2023+</span>
                        <span class="stat-label"><?php echo ($current_lang === 'es') ? 'Presente' : 'Present'; ?></span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Contacto -->
<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title"><?php echo ($current_lang === 'es') ? 'CONTACTO' : 'CONTACT'; ?></h2>
        <form class="contact-form" method="POST" action="https://formsubmit.co/santimussi1959@gmail.com">
            <input type="hidden" name="_captcha" value="false">

            <div class="form-group">
                <label for="name"><?php echo ($current_lang === 'es') ? 'NOMBRE' : 'NAME'; ?></label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email"><?php echo ($current_lang === 'es') ? 'CORREO ELECTRÓNICO' : 'EMAIL'; ?></label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="message"><?php echo ($current_lang === 'es') ? 'MENSAJE' : 'MESSAGE'; ?></label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button type="submit" class="submit-btn">
                <?php echo ($current_lang === 'es') ? 'ENVIAR' : 'SEND'; ?>
            </button>
        </form>
    </div>
</section>

<?php include("includes/footer.php"); ?>

