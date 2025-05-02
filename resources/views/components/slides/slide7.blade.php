<div class="slide bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-4 slide-title">Hook <span class="text-indigo-600">useSegments()</span> en React Native</h2>
    <p class="text-xl mb-2">Devuelve un array con los segmentos de la ruta actual en tu app móvil.</p>
    <div class="code-block"><button class="copy-btn" onclick="copyCode(this)">Copiar</button><pre><code class="language-jsx">import { View, Text } from 'react-native';
import { useSegments } from 'expo-router';

export default function SegmentosScreen() {
const segments = useSegments();

return (
<View>
<Text>Segmentos de la ruta: {JSON.stringify(segments)}</Text>
</View>
);
}</code></pre></div>
    <ul class="list-disc pl-6 text-base text-gray-700 mb-2">
        <li>Detectar en qué parte de la app está el usuario</li>
        <li>Construir rutas dinámicas complejas</li>
        <li>Mostrar u ocultar componentes según la ruta</li>
    </ul>
</div>
