<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= esc($title) ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Estilos personalizados para el carrusel (opcional) */
        .carousel-slide {
            display: none; /* Ocultar todas las imágenes por defecto */
        }
        .carousel-slide.active {
            display: block;
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">
    <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold"><?= esc($title) ?></h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="#" class="hover:text-blue-200">Inicio</a></li>
                    <li><a href="#quienes-somos" class="hover:text-blue-200">Quiénes Somos</a></li>
                    <li><a href="#servicios" class="hover:text-blue-200">Servicios</a></li>
                    <li><a href="#contacto" class="hover:text-blue-200">Contacto</a></li>
                    <li><a href="<?= base_url('login') ?>" class="hover:text-blue-200">Iniciar Sesión</a></li>
                    <li>
                        <a href="<?= base_url('agendar') ?>" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                            Agendar Cita
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container mx-auto py-8 px-4">
        <section class="mb-10">
            <div class="relative overflow-hidden rounded-lg shadow-md">
                <div class="carousel-container">
                    <img src="/ruta/a/imagen1.jpg" alt="Imagen 1 del carrusel" class="carousel-slide active w-full h-96 object-cover">
                    <img src="/ruta/a/imagen2.jpg" alt="Imagen 2 del carrusel" class="carousel-slide w-full h-96 object-cover">
                    <img src="/ruta/a/imagen3.jpg" alt="Imagen 3 del carrusel" class="carousel-slide w-full h-96 object-cover">
                </div>
                <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full opacity-50 hover:opacity-100" onclick="nextSlide(-1)">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
                <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-2 rounded-full opacity-50 hover:opacity-100" onclick="nextSlide(1)">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </button>
            </div>
        </section>

        <section id="quienes-somos" class="py-8 mb-8 bg-white rounded-lg shadow-md">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-semibold mb-4">Quiénes Somos</h2>
                <p class="text-gray-700 mb-4">
                    Somos un equipo de profesionales de la salud mental comprometidos con tu bienestar.
                    Creemos en la importancia de un espacio seguro y confidencial para explorar tus desafíos
                    y encontrar el camino hacia una vida más plena.
                </p>
                <p class="text-gray-700">
                    Nuestra misión es hacer que el apoyo psicológico sea accesible y efectivo para todos.
                    Contamos con una amplia red de psicólogos con diversas especializaciones para adaptarnos a tus necesidades específicas.
                </p>
                <div class="mt-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354l-2.169 4.357-4.832.665 3.454 3.356-.995 4.792L12 18.646l4.532-2.394-.995-4.792 3.454-3.356-4.832-.665L12 4.354z"></path></svg>
                        <h3 class="font-semibold mt-2">Profesionalismo</h3>
                        <p class="text-gray-600 text-sm">Psicólogos colegiados y con experiencia.</p>
                    </div>
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        <h3 class="font-semibold mt-2">Confidencialidad</h3>
                        <p class="text-gray-600 text-sm">Tus datos y sesiones están protegidos.</p>
                    </div>
                    <div class="text-center">
                        <svg class="mx-auto h-12 w-12 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h14a2 2 0 012 2v14a2 2 0 01-2 2H5a2 2 0 01-2-2V5z"></path></svg>
                        <h3 class="font-semibold mt-2">Accesibilidad</h3>
                        <p class="text-gray-600 text-sm">Opciones de citas online y presenciales.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="servicios" class="py-8 mb-8">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-semibold mb-4">Nuestros Servicios</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-2">Terapia Individual</h3>
                        <p class="text-gray-600">Apoyo personalizado para abordar desafíos emocionales, ansiedad, depresión y más.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-2">Terapia de Pareja</h3>
                        <p class="text-gray-600">Herramientas y estrategias para mejorar la comunicación y fortalecer la relación.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-2">Terapia Familiar</h3>
                        <p class="text-gray-600">Abordaje de dinámicas familiares y resolución de conflictos.</p>
                    </div>
                    <div class="bg-white rounded-lg shadow-md p-6">
                        <h3 class="text-lg font-semibold mb-2">Orientación Vocacional</h3>
                        <p class="text-gray-600">Apoyo para la toma de decisiones profesionales y desarrollo de carrera.</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" class="py-8 mb-8 bg-gray-200 rounded-lg shadow-md">
            <div class="container mx-auto px-4">
                <h2 class="text-xl font-semibold mb-4">Contáctanos</h2>
                <p class="text-gray-700 mb-4">¿Tienes alguna pregunta? No dudes en ponerte en contacto con nosotros.</p>
                <form class="max-w-lg mx-auto">
                    <div class="mb-4">
                        <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>
                        <input type="text" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="email" id="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="mensaje" class="block text-gray-700 text-sm font-bold mb-2">Mensaje:</label>
                        <textarea id="mensaje" rows="4" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-full focus:outline-none focus:shadow-outline">
                            Enviar Mensaje
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <section class="text-center">
            <p class="mt-4 text-gray-500">¿Ya tienes una cuenta? <a href="<?= base_url('login') ?>" class="text-blue-500 hover:underline">Iniciar Sesión</a></p>
        </section>
    </main>

    <footer class="bg-gray-200 py-4 text-center text-gray-600">
        <p>&copy; <?= date('Y') ?> Tu Sistema de Citas Psicológicas</p>
    </footer>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.carousel-slide');

        function showSlide(n) {
            slides.forEach(slide => slide.classList.remove('active'));
            slideIndex = (n + slides.length) % slides.length;
            slides[slideIndex].classList.add('active');
        }

        function nextSlide(n) {
            showSlide(slideIndex += n);
        }

        // Iniciar el carrusel automáticamente (opcional)
        // setInterval(() => nextSlide(1), 5000);

        // Mostrar la primera imagen al cargar la página
        showSlide(slideIndex);
    </script>
</body>
</html>