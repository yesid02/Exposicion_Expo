<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-4 slide-title">Hook <span class="text-indigo-600">useQuery()</span></h2>
    <p class="text-xl mb-2">Accede a los parámetros de consulta (query params) de la URL.</p>
    <div class="code-block"><pre><code class="language-js">const { id } = useQuery(); // URL: "/producto?id=42"</code></pre></div>
    <p class="text-lg mb-2">¿Por qué es útil?</p>
    <ul class="list-disc pl-6 text-base text-gray-700 mb-2">
        <li>Filtrar o buscar datos en la pantalla actual</li>
        <li>Obtener parámetros para peticiones a APIs</li>
        <li>Personalizar la experiencia del usuario</li>
    </ul>
</div> 