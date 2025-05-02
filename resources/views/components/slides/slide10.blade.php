<div class="slide bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-4 slide-title">Ejemplo avanzado: Protección de rutas en React Native</h2>
    <p class="text-xl mb-2">Redirige a login si el usuario no está autenticado usando hooks de Expo Router en React Native.</p>
    <div class="code-block"><button class="copy-btn" onclick="copyCode(this)">Copiar</button><pre><code class="language-jsx">import { View, Text } from 'react-native';
import { useRouter, useSegments } from 'expo-router';
import { useEffect } from 'react';

export default function ZonaPrivadaScreen() {
const router = useRouter();
const segments = useSegments();
const isLoggedIn = false; // Simulación

useEffect(() => {
if (!isLoggedIn && segments[0] === 'privado') {
router.replace('/login');
}
}, [segments, isLoggedIn]);

return (
<View>
<Text>Zona protegida</Text>
</View>
);
}</code></pre></div>
</div>
