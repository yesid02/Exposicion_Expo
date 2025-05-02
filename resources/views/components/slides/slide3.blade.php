<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-4 slide-title">Estructura del Proyecto</h2>
    <p class="text-xl mb-2">Expo Router utiliza la estructura de carpetas para definir rutas automáticamente.</p>
    <p class="text-lg mb-2">Ejemplo de estructura mínima:</p>
    <div class="code-block"><pre><code class="language-none">/app
  index.js        // Ruta raíz
  [id].js         // Ruta dinámica
  _layout.js      // Layout común</code></pre></div>
    <ul class="list-disc pl-6 text-base text-gray-700 mb-2">
        <li><b>index.js</b>: Página principal</li>
        <li><b>[id].js</b>: Ruta dinámica para detalles</li>
        <li><b>_layout.js</b>: Layout compartido para las páginas</li>
    </ul>
    <p class="text-sm text-gray-500 mt-2">Puedes agregar más archivos para nuevas rutas fácilmente.</p>
</div> 