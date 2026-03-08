<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura de Servicios Web</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; }
        .invoice-box { max-width: 800px; margin: auto; padding: 30px; border: 1px solid #eee; box-shadow: 0 0 10px rgba(0, 0, 0, 0.15); font-size: 14px; line-height: 20px; color: #555; }
        .header, .footer { clear: both; margin-bottom: 20px; }
        .header table, .details table, .items table, .payments table { width: 100%; line-height: inherit; text-align: left; border-collapse: collapse; }
        .header table td, .details table td, .items table td, .payments table td { padding: 5px; vertical-align: top; }
        .items table th { background: #eee; border-bottom: 1px solid #ddd; font-weight: bold; }
        .total-row td { border-top: 2px solid #eee; font-weight: bold; }
        .payments { margin-top: 30px; }
    </style>
</head>
<body>
<div class="invoice-box">
    
    <div class="header">
        <table>
            <tr>
                <td style="width: 50%;">
                    <h1>FACTURA</h1>
                    Control N.º: **F-2025-1001**<br>
                    Fecha: 12/11/2025
                </td>
                <td style="width: 50%; text-align: right;">
                    **[Nombre de tu Empresa]**<br>
                    Razón Social: [Tu RIF/NIF]<br>
                    Email: contacto@tuempresa.com<br>
                    WhatsApp: [+58 XXX-XXX-XXXX]<br>
                    Red Social: [Link a tu Red Social]
                </td>
            </tr>
        </table>
    </div>
    
    <hr>
    
    <div class="details">
        <table>
            <tr>
                <td style="width: 50%;">
                    **DATOS DEL CLIENTE:**<br>
                    Cliente: **[Nombre del Cliente]**<br>
                    Razón Social: [RIF/NIF Cliente]<br>
                    Email: cliente@dominio.com<br>
                    WhatsApp: [+XX XXX-XXX-XXXX]<br>
                    Red Social: [Link a Red Social Cliente]
                </td>
                <td></td>
            </tr>
        </table>
    </div>
    
    <hr>

    <div class="items">
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 10%;">Cant.</th>
                    <th style="width: 50%;">Descripción</th>
                    <th style="width: 15%;">Precio Unitario</th>
                    <th style="width: 15%;">Subtotal Línea</th>
                    <th style="width: 10%;">Impuesto (IVA)</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>1</td><td>Alquiler de VPS Pro (Mes 1)</td><td>150.00</td><td>150.00</td><td>24.00</td></tr><tr><td>1</td><td>Servidor Dedicado Estándar</td><td>300.00</td><td>300.00</td><td>48.00</td></tr><tr><td>1</td><td>Desarrollo Web - Landing Page</td><td>800.00</td><td>800.00</td><td>128.00</td></tr><tr><td>1</td><td>Mantenimiento Mensual (Web)</td><td>100.00</td><td>100.00</td><td>16.00</td></tr><tr><td>1</td><td>Licencia de Software (Anual)</td><td>50.00</td><td>50.00</td><td>8.00</td></tr><tr><td>1</td><td>Configuración de Base de Datos</td><td>120.00</td><td>120.00</td><td>19.20</td></tr><tr><td>1</td><td>Consultoría Técnica (2 Hrs)</td><td>80.00</td><td>80.00</td><td>12.80</td></tr><tr><td>1</td><td>Migración de Sitio Web</td><td>90.00</td><td>90.00</td><td>14.40</td></tr><tr><td>1</td><td>Certificado SSL Premium</td><td>60.00</td><td>60.00</td><td>9.60</td></tr><tr><td>1</td><td>VPS Backup Add-on</td><td>20.00</td><td>20.00</td><td>3.20</td></tr><tr><td>1</td><td>Optimización de Velocidad</td><td>70.00</td><td>70.00</td><td>11.20</td></tr><tr><td>1</td><td>Registro de Dominio (.com)</td><td>15.00</td><td>15.00</td><td>2.40</td></tr><tr><td>1</td><td>Soporte Prioritario (Mes)</td><td>35.00</td><td>35.00</td><td>5.60</td></tr><tr><td>1</td><td>Diseño de Banner Publicitario</td><td>40.00</td><td>40.00</td><td>6.40</td></tr><tr><td>1</td><td>Desarrollo API simple</td><td>250.00</td><td>250.00</td><td>40.00</td></tr><tr><td>1</td><td>Hosting compartido (3 Meses)</td><td>45.00</td><td>45.00</td><td>7.20</td></tr><tr><td>1</td><td>Instalación de CMS</td><td>55.00</td><td>55.00</td><td>8.80</td></tr><tr><td>1</td><td>Formación/Capacitación (1 Hr)</td><td>30.00</td><td>30.00</td><td>4.80</td></tr><tr><td>1</td><td>Monitoreo de Servidor</td><td>25.00</td><td>25.00</td><td>4.00</td></tr><tr><td>1</td><td>Actualización de Módulos</td><td>10.00</td><td>10.00</td><td>1.60</td></tr><tr class="total-row">
                    <td colspan="3"></td>
                    <td>**Subtotal:**</td>
                    <td>**2440.00**</td>
                </tr>
                <tr>
                    <td colspan="3"></td>
                    <td>**Impuesto (16%):**</td>
                    <td>**390.40**</td>
                </tr>
                <tr class="total-row">
                    <td colspan="3"></td>
                    <td>**TOTAL A PAGAR:**</td>
                    <td>**2830.40**</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <hr>
    
    <div class="payments">
        <table>
            <tr>
                <td>
                    **DATOS DE PAGO:**<br>
                    * Transferencia Bancaria: Banco [Nombre], Cuenta Corriente N.º [XXXXX], RIF [XXXXX].<br>
                    * Pago Móvil: [Banco] - [Teléfono] - [Cédula/RIF].<br>
                    * PayPal: pagos@tuempresa.com<br>
                    * Criptomonedas: (Solicitar wallet)<br>
                    **Condiciones:** Plazo de pago 7 días. El servicio se interrumpe si no se recibe el pago.
                </td>
            </tr>
        </table>
    </div>

</div>
</body>
</html>