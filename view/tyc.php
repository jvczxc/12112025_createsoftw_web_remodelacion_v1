<?php require_once 'view/layouts/headers.php'; ?>
    <style>
        :root {
            --corporate-color: #460809; /* [cite: 1, 15] */
            --corporate-colore: #B11F19; /* [cite: 2, 16] */
            --highlight-color: #FFDF20; /* [cite: 3, 17] */
            --text-color-light: #FFFFFF; /* [cite: 4, 18] */
            --border-color: #FFFFFF; /* [cite: 4, 18] */
        }
        .pricing-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-bottom: 50px;
        }

        .pricing-card {
            background: var(--corporate-color);
            color: var(--text-color-light);
            border: 2px solid var(--border-color);
            border-radius: 10px;
            width: 300px;
            padding: 20px;
            text-align: center;
            transition: transform 0.3s;
        }

        .pricing-card:hover {
            transform: translateY(-10px);
            border-color: var(--highlight-color);
        }

        .pricing-card h2 {
            color: var(--highlight-color);
            text-transform: uppercase;
        }

        .price {
            font-size: 2em;
            font-weight: bold;
            margin: 10px 0;
            color: var(--text-color-light);
        }

        .services-list {
            text-align: left;
            font-size: 0.85em;
            list-style: none;
            padding: 0;
            margin: 20px 0;
            height: 450px;
            overflow-y: auto;
            border-bottom: 1px solid var(--corporate-colore);
        }

        .services-list li {
            padding: 5px 0;
            border-bottom: 1px solid rgba(255,255,255,0.1);
        }

        .terms-checkbox {
            margin: 15px 0;
            font-size: 0.8em;
        }

        .btn-pay {
            background-color: var(--highlight-color);
            color: #000;
            border: none;
            padding: 10px 20px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            text-transform: uppercase;
        }

        .terms-container {
            background: #fff;
            margin-top: 40px;
            padding: 30px;
            border-radius: 10px;
            max-width: 2000px;
            margin: 0 auto;
            border-top: 5px solid var(--corporate-color);
            color: #333;
        }

        .terms-container h1, .terms-container h2 {
            color: var(--corporate-color);
        }

        .terms-content {
            height: 1200px;
            overflow-y: scroll;
            border: 1px solid #ddd;
            padding: 15px;
            background: #fafafa;
        }
    </style>
    <div class="terms-container">
        <h1>Términos y Condiciones</h1>
        <div class="terms-content">
            <h2>Artículo I: Responsabilidades</h2>
            <p>Usted el Contratante, acepta y se hace responsable del mantenimiento del servidor de shaiya así como sus pagos[cite: 18]. La empresa (CREATESOFTW) queda libre de cerrar o eliminar de la nube archivos y VPS por falta de pago[cite: 19]. La empresa queda libre de responsabilidad con cualquier servidor bajo el dominio createsotfw.com[cite: 20]. El uso indebido para actos ilícitos o ataques hackers permite a la empresa suspender el contrato[cite: 21]. El contratante renuncia a cualquier reclamación de reembolso según el Articulo III[cite: 21].</p>

            <h2>Artículo II: Armado de VPS Juegos</h2>
            <p>El contratante debe aprender mediante los tutoriales proporcionados[cite: 22]. La empresa no está obligada a armar listas de Drop, ItemMall o edición de .SDATA[cite: 24]. Cualquier cambio adicional solicitado requiere un pago previo convenido[cite: 26]. El contratante renuncia al reembolso en el instante de la entrega de la programación[cite: 26].</p>

            <h2>Artículo III: Pagos y Reembolsos</h2>
            <p>No se podrá pedir reembolso del 100% una vez entregado el VPS y pasadas 24 horas del pago[cite: 27]. Scripts, APPs y programaciones personalizadas quedan excluidos de cualquier reclamo de reembolso[cite: 28, 29, 30]. En caso de reembolso aceptado, se descontarán gastos administrativos y días de soporte[cite: 31]. Cualquier difamación a Createsoftw.com anula el derecho a reembolso[cite: 32]. Disputas en PayPal sin acuerdo previo inhabilitarán futuros contratos[cite: 34].</p>

            <h2>Artículo IV: Área de Trabajo y Ataques de Terceros</h2>
            <p>El contratante debe realizar su trabajo en su ordenador local; Createsoftw no se hace responsable por pérdida de datos debido a ataques de terceros (ransomware)[cite: 35, 36, 37].</p>

            <h2>Artículo V: Páginas Web Prearmadas</h2>
            <p>Las webs prearmadas (modelos Breakers, Latino Original) son propiedad exclusiva de Createsoftw y no son de libre distribución[cite: 39, 40]. Createsoftw se reserva los derechos de autor sobre las modificaciones[cite: 40].</p>

            <h2>Artículo VI: Políticas de Retención de Pagos</h2>
            <p>El servicio solo se entregará si el dinero en PayPal está liberado, lo cual puede tardar de 7 a 30 días hábiles[cite: 43, 44].</p>

            <h2>Artículo VII: Limitaciones de Cuentas PayPal</h2>
            <p>Si un pago es retenido por limitación de PayPal, el contratante podrá pedir reembolso a PayPal o enviar el dinero a una cuenta secundaria asignada por la empresa[cite: 45, 46, 48].</p>
        </div>
    </div>

<?php require_once 'view/layouts/footers.php'; ?>
