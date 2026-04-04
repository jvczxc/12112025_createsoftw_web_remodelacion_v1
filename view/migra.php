<?php require_once 'view/layouts/headers.php'; ?>
    <style>
        .form-container {
            background: var(--bg-gradient);
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            width: 100%;
            max-width: 600px;
            color: var(--corporate-colore);
            border: 1px solid var(--corporate-colore);
        }

        h2 {
            text-align: center;
            color: var(--corporate-colore);
            margin-bottom: 30px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            border-bottom: 2px solid var(--corporate-colore);
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
            color: #B11F19;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            font-size: 0.9rem;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid var(--corporate-colore);
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            box-sizing: border-box; /* Asegura que el padding no desborde el ancho */
            transition: all 0.3s ease;
        }

        input::placeholder {
            color: #B11F19;
        }

        input:focus, select:focus, textarea:focus {
            outline: none;
            background: rgba(255, 255, 255, 0.2);
            border-color: var(--highlight-color);
            box-shadow: 0 0 8px var(--highlight-color);
        }

        select option {
            background: var(--corporate-colore);
            color: white;
        }

        .btn-submit {
            width: 100%;
            padding: 15px;
            background-color: var(--highlight-color);
            color: var(--corporate-colore);
            border: none;
            border-radius: 6px;
            font-weight: bold;
            font-size: 1.1rem;
            cursor: pointer;
            transition: transform 0.2s, background-color 0.3s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #e6c81d;
            transform: translateY(-2px);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        .form-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.8rem;
            opacity: 0.8;
        }
        .margen{
            margin-top: 50px;
            margin-bottom: 50px;
            align-items: center;
        }
    </style>
<center>
    <div class="form-container margen">
        <h2>Solicitud de Migración</h2>
        
        <form action="#" method="post">
            <!-- Información del Dominio -->
            <div class="form-group">
                <label for="domain_name">Nombre del Dominio a Migrar:</label>
                <input type="text" id="domain_name" name="domain_name" placeholder="ejemplo.com" required>
            </div>
    
            <div class="form-group">
                <label for="auth_code">Código de Autorización (Auth-Code/EPP):</label>
                <input type="text" id="auth_code" name="auth_code" placeholder="Ingrese el código proporcionado por su actual registrador" required>
            </div>
    
            <!-- Detalles del Hosting -->
            <div class="form-group">
                <label for="current_provider">Proveedor Actual:</label>
                <input type="text" id="current_provider" name="current_provider" placeholder="Nombre de la empresa actual">
            </div>
    
            <div class="form-group">
                <label for="migration_type">Tipo de Migración:</label>
                <select id="migration_type" name="migration_type">
                    <option value="only_domain">Solo Dominio</option>
                    <option value="domain_hosting">Dominio y Contenido (Hosting)</option>
                    <option value="emails">Migración de Correos Electrónicos</option>
                </select>
            </div>
    
            <!-- Comentarios Adicionales -->
            <div class="form-group">
                <label for="notes">Notas o Instrucciones Especiales:</label>
                <textarea id="notes" name="notes" rows="4" placeholder="Indique si hay bases de datos o configuraciones DNS específicas..."></textarea>
            </div>
    
            <button type="submit" class="btn-submit">Iniciar Proceso de Migración</button>
        </form>
    
        <div class="form-footer">
            © 2024 Departamento de IT - Gestión de Infraestructura
        </div>
    </div>
</center>

<?php require_once 'view/layouts/footers.php'; ?>
 