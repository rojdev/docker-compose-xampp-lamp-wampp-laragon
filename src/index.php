<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido / Welcome</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: system-ui, -apple-system, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: #333;
            transition: background 0.3s, color 0.3s;
        }

        .card {
            background: rgba(255, 255, 255, 0.8);
            padding: 3rem;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 400px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            animation: fadeIn 1s ease-in-out;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            color: #2c3e50;
        }

        p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.6;
        }

        .emoji {
            font-size: 4rem;
            display: block;
            margin-bottom: 1rem;
        }

        @media (prefers-color-scheme: dark) {
            body {
                background: linear-gradient(135deg, #232526 0%, #414345 100%);
                color: #f0f0f0;
            }
            .card {
                background: rgba(40, 40, 40, 0.8);
                border: 1px solid rgba(255, 255, 255, 0.1);
            }
            h1 { color: #fff; }
            p { color: #ccc; }
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

    <div class="card">
        <span class="emoji" id="icon">👋</span>
        <h1 id="title">Loading...</h1>
        <p id="message">Please wait while we detect your language.</p>
    </div>

    <script>
        
        const translations = {
            'es': {
                title: "¡Bienvenido!",
                message: "Has configurado tu entorno Docker correctamente.",
                icon: "🚀"
            },
            'en': {
                title: "Welcome!",
                message: "You have successfully set up your Docker environment.",
                icon: "👋"
            },
            'pt': {
                title: "Bem-vindo!",
                message: "Você configurou seu ambiente Docker com sucesso.",
                icon: "🎉"
            },
            'fr': {
                title: "Bienvenue !",
                message: "Vous avez configuré votre environnement Docker avec succès.",
                icon: "🥂"
            },
            'it': {
                title: "Benvenuto!",
                message: "Hai configurato il tuo ambiente Docker con successo.",
                icon: "🍕"
            },
            'de': {
                title: "Willkommen!",
                message: "Sie haben Ihre Docker-Umgebung erfolgreich eingerichtet.",
                icon: "🍺"
            }
        };

        function detectLanguage() {
            const userLang = navigator.language || navigator.userLanguage; 
            const langCode = userLang.substring(0, 2).toLowerCase();

            const content = translations[langCode] || translations['en'];

            document.getElementById('title').textContent = content.title;
            document.getElementById('message').textContent = content.message;
            document.getElementById('icon').textContent = content.icon;
            
            document.documentElement.lang = langCode;

            console.log(`Idioma detectado: ${userLang} -> Usando: ${langCode}`);
        }

        window.onload = detectLanguage;
    </script>
</body>
</html>