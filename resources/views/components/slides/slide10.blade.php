<div class="slide {{ $active ? 'active' : '' }} bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">¿Qué es un <span class="text-emerald-500">"Method"</span> en Expo Router?</h2>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="bg-gradient-to-br from-indigo-50 to-indigo-100 p-6 rounded-xl shadow-md transform hover:scale-102 transition duration-300">
            <p class="text-xl mb-3 font-medium text-indigo-700">
                Un <span class="text-emerald-500 font-bold">method</span> es una función especial que Expo Router expone para que tú la uses en tu app.
            </p>
            <p class="text-lg text-indigo-600">
                Sirve para realizar tareas útiles como manejar rutas, layouts, estructura de navegación, etc.
            </p>
        </div>
        
        <div class="bg-gradient-to-br from-emerald-50 to-emerald-100 p-6 rounded-xl shadow-md transform hover:scale-102 transition duration-300 flex flex-col justify-center">
            <div class="flex items-center mb-4">
                <div class="w-12 h-12 rounded-full bg-emerald-200 flex items-center justify-center mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-emerald-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                    </svg>
                </div>
                <p class="text-xl font-medium text-emerald-700">Piensa en ellos como herramientas del sistema de navegación</p>
            </div>
            <p class="text-lg text-emerald-600 ml-15 pl-4 border-l-4 border-emerald-300">
                No crean pantallas, pero te ayudan a organizarlas y controlarlas.
            </p>
        </div>
    </div>
    
    <div class="mt-6 flex justify-center">
        <div class="code-block max-w-lg">
            <pre><code class="language-js">// Ejemplo de un método para redirigir
const handleSubmit = () => {
  router.replace('/dashboard');
};</code></pre>
        </div>
    </div>
</div> 