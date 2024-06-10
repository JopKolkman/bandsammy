<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sammy and the SamsoKnight KofferBand</title>
    <!-- Link naar Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Aanvullende CSS-stijlen */
        .hero-section {
            background-color: #f9fafb;
            padding-top: 10vh;
            padding-bottom: 10vh;
        }

        .portfolio-section {
            background-color: #f3f4f6;
            overflow: hidden;
        }

        .bandleden-section {
            background-color: #edf2f7;
        }

        .fade-out p:nth-of-type(n+4) {
            opacity: 0.5;
        }

        /* Kleurenthema voor de band */
        :root {
            --primary-color: #4A5568; /* Donkergrijs */
            --secondary-color: #E2E8F0; /* Lichtgrijs */
            --accent-color: #4299E1; /* Blauw */
        }

        .portfolio-card {
            transition: transform 0.5s ease;
            transform: translateX(-100%);
        }

        .portfolio-section.in-view .portfolio-card {
            transform: translateX(0);
        }

        .bandleden-card {
            transition: transform 1.5s ease;
            transform: translateY(100%);
        }

        .bandleden-section.in-view .bandleden-card {
            transform: translateY(0);
        }

        .read-more-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        /* CSS om de read-more-content te tonen wanneer de checkbox is aangevinkt */
        .read-more-btn:checked + .read-more-label + .read-more-content {
            max-height: 1000px; /* Zet dit op een groot genoeg getal om de volledige inhoud weer te geven */
        }

        .read-more-btn:checked ~ .read-more-content {
            display: block;
        }

        .read-more-btn {
            display: none;
        }

        .read-more-label {
            cursor: pointer;
            color: #1a202c;
        }
        .read-more-btn + .read-more-label::after {
            content: '\25BC'; /* Pijl naar beneden symbool */
            display: inline-block;
            margin-left: 5px;
            transition: transform 0.3s ease;
        }

        .read-more-btn:checked + .read-more-label::after {
            transform: rotate(180deg); /* Draai de pijl naar boven wanneer ingedrukt */
        }

        .fade-out {
            opacity: 1;
            transition: opacity 0.5s ease;
        }

        .fade-out p:nth-of-type(n+4) {
            opacity: 0.5;
        }
        .carousel {
            scroll-snap-type: x mandatory;
            -webkit-overflow-scrolling: touch;
        }

        .carousel-item {
            scroll-snap-align: center;
        }

        .carousel::-webkit-scrollbar {
            display: none;
        }

        .carousel-dot {
            width: 12px;
            height: 12px;
            background-color: #a0aec0;
            border-radius: 50%;
            margin: 0 4px;
            cursor: pointer;
        }

        .carousel-dot.active {
            background-color: #4a5568;
        }
        .modal-content {
        max-width: 600px;
        }
        #hamburger-btn {
        color: #fff; /* Witte kleur */
        }

        /* Voor de sluitknop */
        #close-menu-btn {
            color: #4a5568; /* Donkergrijze kleur */
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-gray-800 text-white py-4 px-10 lg:px-0">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-2xl font-bold ml-3">Sammy and the SamsoKnight KofferBand</h1>
            <!-- Hamburgerknop -->
            <button id="hamburger-btn" class="block lg:hidden focus:outline-none">
                ☰ <!-- Hamburgerpictogram als Unicode -->
            </button>
        </div>
    </header>
    <!-- Navigatiemenu -->
    <nav id="nav-menu" class="z-10 hidden fixed inset-y-0 right-0 bg-white text-gray-800 py-10 px-4 lg:hidden">
        <button id="close-menu-btn" class="absolute top-4 right-4 text-white focus:outline-none">
            &times; <!-- Sluitpictogram als Unicode -->
        </button>
        <ul class="text-center">
            <li><a href="#about" class="block py-2 hover:text-gray-400">Over ons</a></li>
            <li><a href="portfolio.php" class="block py-2 hover:text-gray-400">Portfolio</a></li>
            <li><a href="#lineup" class="block py-2 hover:text-gray-400">Line-up</a></li>
            <li><a href="#contact" class="block py-2 hover:text-gray-400">Contact</a></li>
            <li><a href="#socials" class="block py-2 hover:text-gray-400">Socials</a></li>
        </ul>
    </nav>

    <!-- Hero sectie -->
    <section class="hero-section py-20 text-center relative">
        <div class="absolute inset-0 bg-cover bg-center z-0" style="background-image: url('./image/1main.jfif');"></div>
        <div class="container mx-auto relative z-9">
        <div class="bg-black bg-opacity-50 absolute inset-0"></div>
            <h2 class="text-3xl font-bold text-white mb-8 relative z-9">
                <span class="block">Welkom bij</span>
                <span class="block">Sammy and the SamsoKnight KofferBand</span>
            </h2>
            <p class="text-lg text-white mb-8 relative z-9">De Rockband uit Borculo pakt de oude muziek weer op en maakt het nieuwe om naar te luisteren.</p>
            <div id="bg-slider" class="hidden">
                <img src="./image/2main.jfif" alt="Placeholder foto 2" class="hidden">
                <img src="./image/3main.jfif" alt="Placeholder foto 3" class="hidden">
            </div>
        </div>
    </section>

    <section class="py-20 text-center bg-gray-200">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Geschiedenis van Vorige Optredens</h2>
            <div id="history-carousel" class="carousel flex overflow-x-scroll">
                <div class="carousel-item flex-none w-full max-w-xs mr-4">
                    <img src="./image/optreden1.jpg" alt="Optreden 1" class="w-full h-64 object-cover rounded-lg shadow-lg">
                    <p class="mt-4">Optreden 1 Beschrijving</p>
                </div>
                <div class="carousel-item flex-none w-full max-w-xs mr-4">
                    <img src="./image/optreden2.jpg" alt="Optreden 2" class="w-full h-64 object-cover rounded-lg shadow-lg">
                    <p class="mt-4">Optreden 2 Beschrijving</p>
                </div>
                <div class="carousel-item flex-none w-full max-w-xs mr-4">
                    <img src="./image/optreden3.jpg" alt="Optreden 3" class="w-full h-64 object-cover rounded-lg shadow-lg">
                    <p class="mt-4">Optreden 3 Beschrijving</p>
                </div>
                <div class="carousel-item flex-none w-full max-w-xs mr-4">
                    <img src="./image/optreden4.jpg" alt="Optreden 4" class="w-full h-64 object-cover rounded-lg shadow-lg">
                    <p class="mt-4">Optreden 4 Beschrijving</p>
                </div>
            </div>
            <div id="history-dots" class="carousel-dots flex justify-center mt-4"></div>
        </div>
    </section>

    <section id="about" class="py-20 text-center bg-white">
        <div class="container mx-auto flex flex-col md:flex-row items-center md:justify-between">
            <div class="max-w-xl mx-auto md:order-2">
                <h2 class="text-3xl font-bold mb-8">Over ons</h2>
                <p class="text-lg mb-8 leading-relaxed">Sammy and the SamsoKnight KofferBand is een rockband uit Borculo. <span class="opacity-50">Met een passie voor muziek uit de jaren '70 en '80 brengt de band een unieke mix van oude en nieuwe klanken.</span></p>
                <input type="checkbox" class="read-more-btn hidden" id="read-more-btn">
                <label for="read-more-btn" class="read-more-label text-blue-500 cursor-pointer">Lees meer</label>
                <div class="read-more-content text-lg opacity-0 transition-all duration-500">
                    <p>Met een passie voor muziek uit de jaren '70 en '80 brengt de band een unieke mix van oude en nieuwe klanken. Hun energieke optredens en originele composities hebben hen een loyale fanbase opgeleverd.</p>
                    <p>Met een passie voor muziek uit de jaren '70 en '80 brengt de band een unieke mix van oude en nieuwe klanken. Hun energieke optredens en originele composities hebben hen een loyale fanbase opgeleverd.</p>
                    <div class="hidden" id="extra-paragraphs">
                        <p>Met een passie voor muziek uit de jaren '70 en '80 brengt de band een unieke mix van oude en nieuwe klanken. Hun energieke optredens en originele composities hebben hen een loyale fanbase opgeleverd.</p>
                        <p>Met een passie voor muziek uit de jaren '70 en '80 brengt de band een unieke mix van oude en nieuwe klanken. Hun energieke optredens en originele composities hebben hen een loyale fanbase opgeleverd.</p>
                    </div>
                </div>
            </div>
            <div class="max-w-xl mx-auto md:order-1">
                <img src="./image/right-image.jpg" alt="Right Image" class="w-full rounded-lg shadow-lg h-auto">
            </div>
        </div>
    </section>

    <section class="portfolio-section py-20 text-center">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Portfolio</h2>
            <div class="relative inline-block">
                <img src="./image/alg1.jfif" alt="Portfolio Placeholder" class="w-90 h-64 object-cover rounded-lg shadow-lg portfolio-card">
                <div class="absolute inset-0 flex justify-center items-center bg-black bg-opacity-50 opacity-0 hover:opacity-100 transition duration-300">
                    <a href="portfolio.php" class="text-white text-2xl flex items-center justify-center">
                        <span>Bekijk onze portfolio</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Line-up en agenda sectie -->
    <section id="lineup" class="py-20 text-center bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Line-up & Agenda</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <div class="lineup-item relative bg-white rounded-lg shadow-xl p-6 cursor-pointer transform transition duration-300 hover:scale-105">
                    <h3 class="text-lg font-semibold mb-2">Rock Festival</h3>
                    <p class="text-sm mb-4 underline">20 juni 2024</p>
                    <img src="./image/alg1.jfif" alt="Rock Festival" class="w-full h-48 object-cover mb-4 rounded-lg">
                    <button class="lineup-modal-btn absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer flex justify-center items-center bg-gradient-to-br from-blue-500 to-purple-500 hover:bg-opacity-75 transition duration-300 rounded-lg">
                        <span class="text-white">Bekijk</span>
                    </button>
                </div>
                <div class="lineup-item relative bg-white rounded-lg shadow-xl p-6 cursor-pointer transform transition duration-300 hover:scale-105">
                    <h3 class="text-lg font-semibold mb-2">Summer Jam</h3>
                    <p class="text-sm mb-4 underline">15 juli 2024</p>
                    <img src="./image/alg1.jfif" alt="Summer Jam" class="w-full h-48 object-cover mb-4 rounded-lg">
                    <button class="lineup-modal-btn absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer flex justify-center items-center bg-gradient-to-br from-blue-500 to-purple-500 hover:bg-opacity-75 transition duration-300 rounded-lg">
                        <span class="text-white">Bekijk</span>
                    </button>
                </div>
                <div class="lineup-item relative bg-white rounded-lg shadow-xl p-6 cursor-pointer transform transition duration-300 hover:scale-105">
                    <h3 class="text-lg font-semibold mb-2">Music Night</h3>
                    <p class="text-sm mb-4 underline">30 augustus 2024</p>
                    <img src="./image/alg1.jfif" alt="Music Night" class="w-full h-48 object-cover mb-4 rounded-lg">
                    <button class="lineup-modal-btn absolute top-0 left-0 w-full h-full opacity-0 cursor-pointer flex justify-center items-center bg-gradient-to-br from-blue-500 to-purple-500 hover:bg-opacity-75 transition duration-300 rounded-lg">
                        <span class="text-white">Bekijk</span>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <div id="lineup-modal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-10 flex justify-center items-center">
        <div class="modal-content bg-gradient-to-br from-blue-500 to-purple-500 rounded-lg shadow-xl p-8">
            <button id="close-modal" class="absolute top-4 right-4 text-gray-200 hover:text-gray-300">&times;</button>
            <h2 class="text-3xl font-bold mb-4 text-white">Rock Festival</h2>
            <img src="./image/alg1.jfif" alt="Rock Festival" class="mb-6 rounded-lg w-full">
            <p class="text-lg mb-4 text-white">Volgende maand staan we met z'n allen in de Ziggo Dome op te treden voor jullie!!</p>
            <p class="text-sm text-gray-200">Adres: Ziggodome 123, Amsterdam</p>
        </div>
    </div>


    <!-- Bandleden sectie -->
    <section class="bandleden-section py-20 text-center">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Onze Bandleden</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                <!-- Kaart van elk bandlid -->
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-center bandleden-card">
                    <img src="./image/pfjpg.jpg" alt="Hilda Halselberg" class="w-32 h-32 rounded-full mb-4">
                    <h3 class="text-xl font-semibold">Hilda Haselberg</h3>
                    <p class="text-gray-600">Vocalist</p>
                    <button class="bandlid-modal-btn mt-auto bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Meer info</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-center bandleden-card">
                    <img src="./image/pfjpg.jpg" alt="Roep Paas" class="w-32 h-32 rounded-full mb-4">
                    <h3 class="text-xl font-semibold">Roel Paas</h3>
                    <p class="text-gray-600">Slag-lead Guitarist</p>
                    <button class="bandlid-modal-btn mt-auto bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Meer info</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-center bandleden-card">
                    <img src="./image/pfjpg.jpg" alt="Marc Kolkman" class="w-32 h-32 rounded-full mb-4">
                    <h3 class="text-xl font-semibold">Marc Kolkman</h3>
                    <p class="text-gray-600">Vocalist</p>
                    <button class="bandlid-modal-btn mt-auto bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Meer info</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-center bandleden-card">
                    <img src="./image/pfjpg.jpg" alt="Henkjan Kruize" class="w-32 h-32 rounded-full mb-4">
                    <h3 class="text-xl font-semibold">Henkjan Kruize</h3>
                    <p class="text-gray-600">Slag-lead Guitarist</p>
                    <button class="bandlid-modal-btn mt-auto bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Meer info</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-center bandleden-card">
                    <img src="./image/pfjpg.jpg" alt="Lorim Ipsum" class="w-32 h-32 rounded-full mb-4">
                    <h3 class="text-xl font-semibold">Bernd Schekman</h3>
                    <p class="text-gray-600">Drummer</p>
                    <button class="bandlid-modal-btn mt-auto bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Meer info</button>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-center bandleden-card">
                    <img src="./image/pfjpg.jpg" alt="Lorim Ipsum" class="w-32 h-32 rounded-full mb-4">
                    <h3 class="text-xl font-semibold">Mark Van Uem</h3>
                    <p class="text-gray-600">Bassist</p>
                    <button class="bandlid-modal-btn mt-auto bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition duration-300">Meer info</button>
                </div>
           </div>
        </div>
    </section>

    <div id="bandlid-modals" class="hidden fixed inset-0 bg-black bg-opacity-50 z-10 flex justify-center items-center">
        <div class="modal-content bg-white p-8 rounded-lg">
            <button id="close-modal" class="absolute top-4 right-4 text-gray-500">&times;</button>
            <h2 class="text-2xl font-bold mb-4" id="bandlid-naam"></h2>
            <div id="bandlid-info"></div>
        </div>
    </div>

    <section id="contact" class="py-20 text-center bg-white">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Contact</h2>
            <p class="text-lg mb-8">Neem contact met ons op via email: info@sammyband.com</p>
        </div>
    </section>

    <!-- Socials sectie -->
    <section id="socials" class="py-20 text-center bg-gray-200">
        <div class="container mx-auto">
            <h2 class="text-3xl font-bold mb-8">Volg ons op Social Media</h2>
            <div class="flex justify-center space-x-4">
                <a href="https://facebook.com" class="text-blue-600">Facebook</a>
                <a href="https://www.instagram.com/sammyandthesamsoknights/" class="text-pink-600">Instagram</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Sammy and the SamsoKnight KofferBand. Alle rechten voorbehouden.</p>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const lineupModalBtns = document.querySelectorAll('.lineup-modal-btn');
        const lineupModal = document.getElementById('lineup-modal');
        const closeModalBtn = document.getElementById('close-modal');
        const modalContent = document.querySelector('.modal-content');

        lineupModalBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                lineupModal.classList.remove('hidden');
            });
        });

        closeModalBtn.addEventListener('click', () => {
            lineupModal.classList.add('hidden');
        });

        modalContent.addEventListener('click', (event) => {
            event.stopPropagation();
        });

        lineupModal.addEventListener('click', () => {
            lineupModal.classList.add('hidden');
        });
    });

        const readMoreBtn = document.querySelector('.read-more-btn');
        const readMoreContent = document.querySelector('.read-more-content');
        const readMoreLabel = document.querySelector('.read-more-label');
        const extraParagraphs = document.getElementById('extra-paragraphs');

        readMoreBtn.addEventListener('change', () => {
            readMoreContent.classList.toggle('opacity-0');
            readMoreContent.classList.toggle('opacity-100');
            readMoreContent.classList.toggle('h-0');
            readMoreLabel.textContent = readMoreBtn.checked ? 'Lees minder' : 'Lees meer';
            extraParagraphs.classList.toggle('hidden');
        });

        // JavaScript voor achtergrondwisseling
        const bgSlider = document.getElementById('bg-slider');
        const images = bgSlider.querySelectorAll('img');
        let index = 0;

        setInterval(() => {
            images.forEach(img => img.classList.add('hidden'));
            images[index].classList.remove('hidden');
            index = (index + 1) % images.length;
        }, 5000);

        // Voeg JavaScript toe voor de animaties bij het scrollen
        window.addEventListener('scroll', function () {
            const portfolioSection = document.querySelector('.portfolio-section');
            const bandledenSection = document.querySelector('.bandleden-section');

            const portfolioPosition = portfolioSection.getBoundingClientRect().top;
            const bandledenPosition = bandledenSection.getBoundingClientRect().top;
            const screenPosition = window.innerHeight / 1.5;

            if (portfolioPosition < screenPosition) {
                portfolioSection.classList.add('in-view');
            }

            if (bandledenPosition < screenPosition) {
                bandledenSection.classList.add('in-view');
            }
        });

        // hamburger menu 

        const hamburgerBtn = document.getElementById('hamburger-btn');
        const closeMenuBtn = document.getElementById('close-menu-btn');
        const navMenu = document.getElementById('nav-menu');

        hamburgerBtn.addEventListener('click', () => {
            navMenu.classList.toggle('hidden');
        });

        closeMenuBtn.addEventListener('click', () => {
            navMenu.classList.add('hidden');
        });

        document.addEventListener('DOMContentLoaded', function () {
        const carousels = document.querySelectorAll('.carousel');
        carousels.forEach((carousel) => {
            const dotsContainer = carousel.nextElementSibling;
            const items = carousel.querySelectorAll('.carousel-item');

            items.forEach((item, index) => {
                const dot = document.createElement('div');
                dot.classList.add('carousel-dot');
                dot.addEventListener('click', () => {
                    const itemOffsetLeft = item.offsetLeft;
                    const carouselWidth = carousel.clientWidth;
                    const itemWidth = item.clientWidth;
                    const scrollTo = itemOffsetLeft - (carouselWidth / 2) + (itemWidth / 2);
                    carousel.scrollTo({
                        left: scrollTo,
                        behavior: 'smooth'
                    });
                });
                dotsContainer.appendChild(dot);
            });

        carousel.addEventListener('scroll', () => {
            const scrollLeft = carousel.scrollLeft;
            const scrollWidth = carousel.scrollWidth;
            const clientWidth = carousel.clientWidth;

            const scrollPercentage = scrollLeft / (scrollWidth - clientWidth);
            const activeIndex = Math.round(scrollPercentage * (items.length - 1));

            dotsContainer.querySelectorAll('.carousel-dot').forEach((dot, index) => {
                dot.classList.toggle('active', index === activeIndex);
            });
        });

        // Initialize the first dot as active
        dotsContainer.querySelector('.carousel-dot').classList.add('active');
            });
        });

        //band modal
        const bandleden = document.querySelectorAll('.bandleden-card');
        const modal = document.getElementById('bandlid-modals');
        const closeModalBtn = document.getElementById('close-modal');
        const bandlidInfo = document.getElementById('bandlid-info');
        const bandlidNaam = document.getElementById('bandlid-naam');

        bandleden.forEach((bandlid, index) => {
            const btn = bandlid.querySelector('.bandlid-modal-btn');
            const naam = bandlid.querySelector('h3').innerText;
            const rol = bandlid.querySelector('p').innerText;

            btn.addEventListener('click', () => {
                bandlidNaam.innerText = naam;
                bandlidInfo.innerHTML = `<p>${rol}</p><p>Extra informatie over ${naam}...</p>`;
                modal.classList.remove('hidden');
            });
        });

        // Sluit de modal wanneer er buiten wordt geklikt
        modal.addEventListener('click', (event) => {
            if (event.target === modal) {
                modal.classList.add('hidden');
            }
        });

        closeModalBtn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });

    </script>
<!-- pagina voor huren wellicht (optioneel)
    fotos aanleveren
    portfolio Carousel met video's
    lineup agenda optredens 
    logo 
 -->
</body>
</html>