<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">Métodos principales en Expo&nbsp;Router</h2>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Método 1: sitemap() -->
        <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl shadow-md overflow-hidden">
            <div class="bg-purple-600 text-white py-3 px-5 flex items-center">
                <span class="text-xl font-bold mr-2">1.</span>
                <code class="bg-purple-700 text-white px-3 py-1 rounded-md font-mono">sitemap()</code>
            </div>
            <div class="p-5">
                <div class="flex items-start mb-4">
                    <div class="text-purple-600 mr-2 mt-1">📌</div>
                    <p class="text-lg text-purple-800">Devuelve un mapa completo de tus rutas.<br>
                    Ideal para debug, testing o generación de rutas estáticas.</p>
                </div>
                
                <div class="bg-slate-800 text-slate-100 rounded-md p-4 font-mono text-sm mb-4 overflow-auto">
                    <div class="text-blue-400">const</div> tree = <span class="text-green-400">sitemap</span>();<br>
                    <div class="text-blue-400">console</div>.<span class="text-green-400">log</span>(tree);
                </div>
                
                <div class="flex items-start">
                    <div class="text-purple-600 mr-2 mt-1">🔎</div>
                    <p class="text-base text-purple-700">Te permite inspeccionar la estructura del sistema de navegación.</p>
                </div>
            </div>
        </div>
        
        <!-- Método 2: withLayoutContext() -->
        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl shadow-md overflow-hidden">
            <div class="bg-blue-600 text-white py-3 px-5 flex items-center">
                <span class="text-xl font-bold mr-2">2.</span>
                <code class="bg-blue-700 text-white px-3 py-1 rounded-md font-mono">withLayoutContext(Nav, processor?)</code>
            </div>
            <div class="p-5">
                <div class="flex items-start mb-4">
                    <div class="text-blue-600 mr-2 mt-1">📌</div>
                    <p class="text-lg text-blue-800">Crea un navegador personalizado (como Stack) con layouts integrados.</p>
                </div>
                
                <div class="mb-4">
                    <div class="flex items-start mb-2">
                        <div class="text-blue-600 mr-2">🛠️</div>
                        <p class="text-base font-medium text-blue-700">Sirve para:</p>
                    </div>
                    <ul class="list-disc pl-10 text-blue-700 space-y-1">
                        <li>Reutilizar diseño.</li>
                        <li>Inyectar layouts automáticamente.</li>
                        <li>Proteger rutas o añadir lógica personalizada.</li>
                    </ul>
                </div>
                
                <div class="bg-slate-800 text-slate-100 rounded-md p-4 font-mono text-sm overflow-auto">
                    <div class="text-blue-400">const</div> CustomStack = <span class="text-green-400">withLayoutContext</span>(Stack);
                </div>
            </div>
        </div>
    </div>
    
    <div class="mt-6 text-center">
        <p class="text-base text-gray-600 italic">Estos métodos proporcionan mayor control sobre la estructura y comportamiento de navegación en tu app.</p>
    </div>
</div> 