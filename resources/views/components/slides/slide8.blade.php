<div class="slide bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-4 slide-title">Hook <span class="text-indigo-600">usePathname()</span> en React Native</h2>
    <p class="text-xl mb-2">Devuelve la ruta activa (sin parámetros de consulta) en tu app móvil.</p>
    <div class="code-block"><button class="copy-btn" onclick="copyCode(this)">Copiar</button><pre><code class="language-jsx">import { View, Text } from 'react-native';
import { usePathname } from 'expo-router';

export default function PathnameScreen() {
const pathname = usePathname();

return (
<View>
<Text>Ruta actual: {pathname}</Text>
</View>
);
}</code></pre></div>
    <ul class="list-disc pl-6 text-base text-gray-700 mb-2">
        <li>Para adaptar la UI según la ruta</li>
        <li>Mostrar títulos o breadcrumbs dinámicos</li>
        <li>Aplicar estilos o animaciones según la pantalla</li>
    </ul>
</div>
