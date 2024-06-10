<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <!-- Link naar Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Aanvullende CSS-stijlen */
        /* Voeg hier je eigen aanpassingen toe */
        .portfolio-item {
            transition: transform 0.3s ease;
            cursor: pointer;
        }
        .portfolio-item:hover {
            transform: scale(1.1);
        }
        .portfolio-item.active {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            margin: auto;
            z-index: 9999;
            cursor: zoom-out;
        }
        .portfolio-item.active img {
            max-width: 70%;
            max-height: 70%;
            display: block;
            margin: auto;
            margin-top:100px;
        }
        .portfolio-background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 9999;
            display: none;
            justify-content: center;
            align-items: center;
        }
        .portfolio-close {
            position: absolute;
            top: 30px;
            right: 20px;
            color: #fff;
            cursor: pointer;
            z-index: 9999;
            display: none;
        }
        .portfolio-arrows {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            z-index: 9999;
            display: none;
            justify-content: space-between;
            width: 100%;
        }
        .portfolio-arrow {
            font-size: 2rem;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-100">
<a href="index.php" class="absolute top-4 left-4 flex items-center text-white text-xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
        Terug
    </a>
    <!-- Header -->
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <h1 class="text-2xl font-bold">Portfolio</h1>
        </div>
    </header>

    <!-- Portfolio sectie -->
    <section class="container mx-auto py-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
        <!-- Placeholder afbeeldingen -->
        <!-- Vervang deze afbeeldingen met je eigen portfolio items -->
        <div class="portfolio-item relative">
            <img src="./image/main.jfif" alt="Portfolio Item 1" class="w-full rounded-lg shadow-lg">
            <div class="portfolio-background"></div>
            <div class="portfolio-arrows">
                <div class="portfolio-arrow portfolio-prev">&lt;</div>
                <div class="portfolio-arrow portfolio-next">&gt;</div>
            </div>
            <div class="portfolio-close">×</div>
        </div>
        <div class="portfolio-item relative">
            <img src="./image/main.jfif" alt="Portfolio Item 2" class="w-full rounded-lg shadow-lg">
            <div class="portfolio-background"></div>
            <div class="portfolio-arrows">
                <div class="portfolio-arrow portfolio-prev">&lt;</div>
                <div class="portfolio-arrow portfolio-next">&gt;</div>
            </div>
            <div class="portfolio-close">×</div>
        </div>
        <div class="portfolio-item relative">
            <img src="./image/main.jfif" alt="Portfolio Item 3" class="w-full rounded-lg shadow-lg">
            <div class="portfolio-background"></div>
            <div class="portfolio-arrows">
                <div class="portfolio-arrow portfolio-prev">&lt;</div>
                <div class="portfolio-arrow portfolio-next">&gt;</div>
            </div>
            <div class="portfolio-close">×</div>
        </div>
        <div class="portfolio-item relative">
            <img src="./image/main.jfif" alt="Portfolio Item 4" class="w-full rounded-lg shadow-lg">
            <div class="portfolio-background"></div>
            <div class="portfolio-arrows">
                <div class="portfolio-arrow portfolio-prev">&lt;</div>
                <div class="portfolio-arrow portfolio-next">&gt;</div>
            </div>
            <div class="portfolio-close">×</div>
        </div>
        <div class="portfolio-item relative">
            <img src="./image/main.jfif" alt="Portfolio Item 5" class="w-full rounded-lg shadow-lg">
            <div class="portfolio-background"></div>
            <div class="portfolio-arrows">
                <div class="portfolio-arrow portfolio-prev">&lt;</div>
                <div class="portfolio-arrow portfolio-next">&gt;</div>
            </div>
            <div class="portfolio-close">×</div>
        </div>
        <div class="portfolio-item relative">
            <img src="./image/main.jfif" alt="Portfolio Item 6" class="w-full rounded-lg shadow-lg">
            <div class="portfolio-background"></div>
            <div class="portfolio-arrows">
                <div class="portfolio-arrow portfolio-prev">&lt;</div>
                <div class="portfolio-arrow portfolio-next">&gt;</div>
            </div>
            <div class="portfolio-close">×</div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-4">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Sammy and the SamsoKnight Band. Alle rechten voorbehouden.</p>
        </div>
    </footer>

    <!-- JavaScript voor de klikfunctionaliteit -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            portfolioItems.forEach(item => {
                const image = item.querySelector('img');
                const background = item.querySelector('.portfolio-background');
                const arrows = item.querySelector('.portfolio-arrows');
                const close = item.querySelector('.portfolio-close');

                item.addEventListener('click', function() {
                    item.classList.toggle('active');
                    background.classList.toggle('hidden');
                    arrows.classList.toggle('hidden');
                    close.classList.toggle('hidden');
                });

                close.addEventListener('click', function(event) {
                    event.stopPropagation();
                    item.classList.remove('active');
                    background.classList.add('hidden');
                    arrows.classList.add('hidden');
                    close.classList.add('hidden');
                });
            });

            document.querySelectorAll('.portfolio-next').forEach(arrow => {
                arrow.addEventListener('click', function(event) {
                    event.stopPropagation();
                    const item = this.closest('.portfolio-item');
                    const nextItem = item.nextElementSibling || item.parentElement.firstElementChild;
                    simulateClick(nextItem);
                });
            });

            document.querySelectorAll('.portfolio-prev').forEach(arrow => {
                arrow.addEventListener('click', function(event) {
                    event.stopPropagation();
                    const item = this.closest('.portfolio-item');
                    const prevItem = item.previousElementSibling || item.parentElement.lastElementChild;
                    simulateClick(prevItem);
                });
            });

            function simulateClick(elem) {
                const event = new MouseEvent('click', {
                    bubbles: true,
                    cancelable: true,
                    view: window
                });
                elem.dispatchEvent(event);
            }
        });
    </script>
</body>
</html>
