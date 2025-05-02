        <div class="slide bg-white rounded-xl shadow-xl p-8">
            <h2 class="text-3xl font-bold mb-4 slide-title">Hook <span class="text-indigo-600">useRouter()</span> en React Native</h2>
            <p class="text-xl mb-2">Permite navegar entre pantallas de forma programática en tu app móvil.</p>
            <div class="tip"><svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z' /></svg>Ideal para flujos de login, logout, o redirecciones en apps móviles.</div>
            <div class="code-block"><button class="copy-btn" onclick="copyCode(this)">Copiar</button><pre><code class="language-jsx">import { View, Button } from 'react-native';
import { useRouter } from 'expo-router';

export default function HomeScreen() {
  const router = useRouter();

  return (
    <View>
      <Button title="Ir a Perfil" onPress={() => router.push('/perfil')} />
      <Button title="Volver atrás" onPress={() => router.back()} />
    </View>
  );
}</code></pre></div>
            <ul class="list-disc pl-6 text-base text-gray-700 mb-2">
                <li><b>push(path)</b>: Navega a una nueva pantalla</li>
                <li><b>replace(path)</b>: Reemplaza la pantalla actual</li>
                <li><b>back()</b>: Vuelve a la pantalla anterior</li>
                <li><b>prefetch(path)</b>: Precarga una pantalla</li>
                <li><b>canGoBack()</b>: Verifica si se puede volver atrás</li>
            </ul>
            <div class="warning"><svg xmlns='http://www.w3.org/2000/svg' class='h-5 w-5' fill='none' viewBox='0 0 24 24' stroke='currentColor'><path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M12 8v4m0 4h.01M12 20a8 8 0 100-16 8 8 0 000 16z' /></svg>Usa <b>replace</b> para evitar que el usuario vuelva atrás (por ejemplo, tras un login).</div>
        </div>
