<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-4 slide-title">Tabla resumen de hooks</h2>
    <table class="min-w-full bg-white border border-gray-300 mb-4">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Hook</th>
                <th class="py-2 px-4 border-b">Función principal</th>
                <th class="py-2 px-4 border-b">Devuelve</th>
                <th class="py-2 px-4 border-b">Ejemplo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="py-2 px-4 border-b">useRouter()</td>
                <td class="py-2 px-4 border-b">Control de navegación</td>
                <td class="py-2 px-4 border-b">Objeto con métodos</td>
                <td class="py-2 px-4 border-b">router.push('/home')</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b">useSegments()</td>
                <td class="py-2 px-4 border-b">Obtener segmentos de URL</td>
                <td class="py-2 px-4 border-b">Array</td>
                <td class="py-2 px-4 border-b">['blog', 'post']</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b">usePathname()</td>
                <td class="py-2 px-4 border-b">Ruta activa sin parámetros</td>
                <td class="py-2 px-4 border-b">String</td>
                <td class="py-2 px-4 border-b">'/perfil/editar'</td>
            </tr>
            <tr>
                <td class="py-2 px-4 border-b">useQuery()</td>
                <td class="py-2 px-4 border-b">Parámetros de consulta</td>
                <td class="py-2 px-4 border-b">Objeto clave-valor</td>
                <td class="py-2 px-4 border-b">{ id: '42' }</td>
            </tr>
        </tbody>
    </table>
    <p class="text-base text-gray-500">Consulta la <a href="https://docs.expo.dev/router/introduction/" class="text-indigo-600 underline" target="_blank">documentación oficial</a> para más detalles y ejemplos.</p>
</div> 