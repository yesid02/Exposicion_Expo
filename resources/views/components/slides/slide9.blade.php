<div class="slide bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-4 slide-title">Hook <span class="text-indigo-600">useQuery()</span> en React Native</h2>
    <p class="text-xl mb-2">Accede a los parámetros de consulta (query params) de la URL en tu app móvil.</p>
    <div class="code-block"><button class="copy-btn" onclick="copyCode(this)">Copiar</button><pre><code class="language-jsx">import { View, Text } from 'react-native';
import { useQuery } from 'expo-router';

export default function ProductoScreen() {
const { id } = useQuery();

return (
<View>
<Text>ID del producto: {id}</Text>
</View>
);
}</code></pre></div>
    <ul class="list-disc pl-6 text-base text-gray-700 mb-2">
        <li>Filtrar o buscar datos en la pantalla actual</li>
        <li>Obtener parámetros para peticiones a APIs</li>
        <li>Personalizar la experiencia del usuario</li>
    </ul>
</div>
