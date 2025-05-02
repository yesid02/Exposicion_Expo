<div class="slide bg-white rounded-xl shadow-xl p-8">
    <h2 class="text-3xl font-bold mb-6 slide-title">Prueba tu código React Native</h2>
    <div class="code-editor">
        <div class="code-editor-header">
            <span>index.js</span>
            <button onclick="runCode()" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">Ejecutar</button>
        </div>
        <div class="code-editor-content">
            <textarea id="codeInput" placeholder="// Escribe tu código React Native aquí...&#10;// Ejemplo:&#10;import { View, Text } from 'react-native';&#10;import { useRouter } from 'expo-router';&#10;&#10;export default function Home() {&#10;  const router = useRouter();&#10;  return (<View><Text>Hola Mundo</Text></View>);&#10;}" spellcheck="false"></textarea>
        </div>
    </div>
</div>
