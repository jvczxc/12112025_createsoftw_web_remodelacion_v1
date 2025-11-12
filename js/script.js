document.addEventListener('DOMContentLoaded', () => {

    // 1. Lógica de Precarga (Loading)
    const loadingOverlay = document.getElementById('loading-overlay');
    const mainContent = document.getElementById('main-content');
    
    // Oculta el esqueleto y la barra de carga después de un pequeño retraso
    // para asegurar que todos los recursos básicos se hayan cargado o simulado.
    window.addEventListener('load', () => {
        // Simulación de tiempo de carga para ver el efecto (opcional)
        setTimeout(() => {
            mainContent.classList.add('loaded');
            loadingOverlay.classList.add('hidden');
            // Quitar la clase skeleton después de que la transición haya terminado
            setTimeout(() => {
                mainContent.classList.remove('skeleton');
            }, 500); // Coincide con la duración de la transición CSS
        }, 1000); // 1 segundo de simulación de carga
    });

    // 2. Menú Móvil (Toggle)
    const menuToggle = document.querySelector('.menu-toggle');
    const navLinks = document.querySelector('.nav-links');

    menuToggle.addEventListener('click', () => {
        navLinks.classList.toggle('active');
    });

    // 3. Botón "Subir al Inicio" (Scroll to Top)
    const scrollToTopBtn = document.getElementById('scroll-to-top');

    // Mostrar u ocultar el botón basado en la posición del scroll
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollToTopBtn.style.display = 'flex';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    });

    // Función para hacer scroll suave al inicio
    scrollToTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // 4. Lógica del Chat Interno
    const chatButton = document.getElementById('chat-button');
    const chatModal = document.getElementById('chat-modal');
    const closeChatButton = document.querySelector('.close-chat');
    const chatBody = document.querySelector('.chat-body');
    const visitorMessageInput = document.getElementById('visitor-message');
    const sendMessageButton = document.getElementById('send-message');

    // Abrir/Cerrar Chat
    chatButton.addEventListener('click', () => {
        chatModal.classList.toggle('open');
        // Asegurar que el scroll esté al final al abrir
        chatBody.scrollTop = chatBody.scrollHeight;
    });

    closeChatButton.addEventListener('click', () => {
        chatModal.classList.remove('open');
    });

    // Función para enviar mensajes
    const sendMessage = () => {
        const messageText = visitorMessageInput.value.trim();
        if (messageText !== '') {
            // Crear el elemento del mensaje
            const messageElement = document.createElement('div');
            messageElement.classList.add('message', 'sent');
            messageElement.textContent = messageText;
            
            // Agregar al cuerpo del chat
            chatBody.appendChild(messageElement);
            
            // Limpiar input y hacer scroll al final
            visitorMessageInput.value = '';
            chatBody.scrollTop = chatBody.scrollHeight;
            
            // Simular respuesta (opcional)
            setTimeout(() => {
                const responseElement = document.createElement('div');
                responseElement.classList.add('message', 'received');
                responseElement.textContent = "Gracias por tu mensaje. Un miembro de nuestro equipo estará contigo en breve.";
                chatBody.appendChild(responseElement);
                chatBody.scrollTop = chatBody.scrollHeight;
            }, 1500);
        }
    };

    sendMessageButton.addEventListener('click', sendMessage);

    // Permitir enviar con la tecla Enter
    visitorMessageInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault(); // Previene salto de línea en algunos casos
            sendMessage();
        }
    });
});