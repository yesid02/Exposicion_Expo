<div class="slide bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-4 slide-title">Estructura del Proyecto en React Native</h2>
    <p class="text-xl mb-2">Expo Router utiliza la estructura de carpetas para definir rutas automáticamente en tu app móvil.</p>
    <div class="tip"><svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z' /></svg>El archivo <b>_layout.js</b> permite compartir UI entre varias pantallas móviles.</div>
    <div class="code-block"><button class="copy-btn" onclick="copyCode(this)">Copiar</button><pre><code class="language-none">/app
index.js        // Pantalla principal
[id].js         // Pantalla dinámica
_layout.js      // Layout común</code></pre></div>
    <ul class="list-disc pl-6 text-base text-gray-700 mb-2">
        <li><b>index.js</b>: Pantalla principal</li>
        <li><b>[id].js</b>: Pantalla dinámica para detalles</li>
        <li><b>_layout.js</b>: Layout compartido para las pantallas</li>
    </ul>
    <a href="https://docs.expo.dev/router/file-system-based-routing/" target="_blank" class="resource-link">Más sobre rutas basadas en archivos</a>
</div>
