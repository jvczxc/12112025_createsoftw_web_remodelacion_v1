<?php require_once 'view/layouts/headers.php'; ?>
<style>
        :root {
            --corporate-color: #460809; /* [cite: 1, 15] */
            --corporate-colore: #B11F19; /* [cite: 2, 16] */
            --highlight-color: #FFDF20; /* [cite: 3, 17] */
            --text-color-light: #FFFFFF; /* [cite: 4, 18] */
            --border-color: #FFFFFF; /* [cite: 4, 18] */
        }
        .h1{
            text-align: center;
            color: var(--corporate-color);
            margin-top: 40px;
            margin-bottom: 40px;
        }
       .textos{
            color: 5px solid var(--highlight-color);
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
            height: 310px;
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
            padding: 30px;
            border-radius: 10px;
            max-width: 1000px;
            margin: 0 auto;
            border-top: 5px solid var(--corporate-color);
            color: #333;
        }

        .terms-container h1, .terms-container h2 {
            color: var(--corporate-color);
        }

        .terms-content {
            height: 400px;
            overflow-y: scroll;
            border: 1px solid #ddd;
            padding: 15px;
            background: #fafafa;
        }
        .padm{
            padding: 30px 50px;
            text-align: justify;
             color: var(--corporate-color);
             font-size: 1.1em;
        }
        h3{
            color: var(--highlight-color);
             text-transform: uppercase;
        }
    </style>
    <h1 class="h1">¿Sabias que no es saludable poner tu panel admin dentro de tu hosting?</h1>

<div class="padm">
    <p>Por eso y pensando en la seguridad de tu servidor hemos desarrollado un panel administrativo externo, 
        con el cual podrás administrar tu servidor de forma segura y sin riesgos de ataques a tu hosting, 
        además de que podrás acceder a tu panel desde cualquier lugar del mundo sin necesidad de estar conectado
         a tu red local. y hasta con tu movil podras aceder desde el navegador de tu prefeencia, 
         todo 100% encriptado.
    </p>
</br>
       Ven y alquila con nosotros tu panel administrativo externo y disfruta de la seguridad y comodidad que te ofrecemos, con nuestro panel podrás administrar tu servidor de forma segura y sin riesgos de ataques a tu hosting, además de que podrás acceder a tu panel desde cualquier lugar del mundo sin necesidad de estar conectado a tu red local. y hasta con tu movil podras aceder desde el navegador de tu prefeencia, todo 100% encriptado.
</div>
    <div class="pricing-container">
        <div class="pricing-card">
            <h2>Panel Administrativo</h2>
            <div class="price">6 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <h3>Carasteristicas Utiles</h3>
                <li>Herramientas de Mantenimiento</li>
                <li>Revivir Personaje</li>
                <li>Cambiar Faccion</li>
                <li>AP por Cuenta</li>
                <li>AP por Personaje</li>
                <li>Eliminar AP</li>
                <li>Historial de Chat</li>
                <li>Buscar Historial de Char de Personaje</li>
                <li>Buscar Drop</li>
                <li>Info de Cuenta</li>
                <li>Herramienta sobre Jugadores</li>
                <li>Loteria aleatoria</li>
                <li>Ganador Online Aleatorio</li>
                <li>Buscar cuenta por nombre de Personje</li>
                <li>Buscar Cuenta por nombre de Usuario</li>
                <li>Todas las cuentas asosiadas a la IP</li>
                <li>Buscar Direcion de IP</li>
                <li>Encontrar viejos nombres de personajes muertos/vivos</li>
                <li>Editar jugador</li>
                <li>Editar Item de inventario</li>
                <li>Borrar un Items</li>
                <li>Editar Bodega</li>
                <li>Borrar item de Bodega</li>
                <li>Colocar Personajes de cuenta en carcel</li>
                <li>Sacar todos los PJs de Carcel de una cuenta</li>
                <li>Cuentas Baneadas</li>
                <li>Banear Cuenta</li>
                <li>Desbanear Cuenta</li>
                <li>Otras herramienta</li>
                <li>Buscar Items Por categorias</li>
                <li>Lista de Items</li>
                <li>Lista de Monstruos</li>
                <li>Desbanear Gremio</li>
                <li>Cambiar nombre de Gremio</li>
                <li>Cambiar Lider de Gremio</li>
                <li>Jugadores Online</li>
                <li>Posibles Stat Padings</li>
                <li>Herramientas de Manuntencion Extra</li>
                <li>Normas del Panel</li>
                <li>Registrar Usuario (Completo)</li>
                <li>Usuarios Multicuentas PW NUEVO</li>
                <li>Puntos Dobles Cuando Donan</li>
                <li>Registro Doners</li>
                <li>WebPoint Por Usuario</li>
                <li>Restar WebAP a Usuario</li>
                <li>Sumar SOLO Webpoints a Usuario</li>
                <li>Ver listado de Gremios y lideres</li>
                <li>Ver Bodega de Gremio</li>
                <li>Borrar item de bodega Gremial</li>
                <li>Ver quien mato a quien dentro de PvP</li>
                <li>Ver quien mato a la Victima</li>
                <li>ver nombre actual asecinos de pvp</li>
                <li>historial de Trades Busqueda por PJ</li>
                <li>historial de Trades Busqueda por Usuario</li>
                <li>Bosses Muertos</li>
                <li>Transpasos de AP y Rango</li>
                <li>Transpasar AP</li>
                <li>Transpasar Rangos</li>
                <li>Bugs Comunes</li>
                <li>Bug PJ No entra</li>
                <li>Supervision de Staff</li>
                <li>Items Creados por Staff</li>
                <li>Supervision de staff</li>
                <li>Acciones de staff</li>
                <li>Borrar creados por Staff Buscar por Usuario</li>
                <li>Borrar creados por Staff Buscar por PJ</li>
                <li>Operaciones de Banco</li>
                <li>Agregar item a banco</li>
                <li>borrar item a banco</li>
                <li>Visualizar banco de usuario</li>
                <li>Movimientos Ilegales</li>
                <li>Delvolver Items</li>
                <li>recuperar Item robado</li>
                <li>tradeos ilegales</li>
                <li>Comprobar Existencia de Item en inventario</li>
                <li>Ver quien tiene mas Stat en el servidor</li>
                <li>Roll-Backs Personal</li>
                <li>recuperar Cuenta Completa robada</li>
                <li>recuperar Personajes robados</li>
                <li>Ver Inventario en Restore (Respaldos)</li>
                <li>Ver Bodegas en Restore (Respaldos)</li>
                <li>Otros Visuales</li>
                <li>Onlines En general</li>
                <li>Rank de Gremios</li>
                <li>Rank de PvP</li>
                <li>Herramientas de Cuentas</li>
                <li>Operaciones de Cuentas</li>
                <li>Banear Cuentas</li>
                <li>Ver Baneos por tiempo</li>
                <li>Ver Baneos en General</li>
                <li>Cambiar Email de una Cuenta</li>
                <li>Cambiar Pass de una Cuenta</li>
                <li>Ver Emails Cambiados</li>
                <li>Cambiar ID a Cuenta</li>
                <li>Ver IDs Cambiados</li>
                <li>Cambiar ID a Cuenta y NOmbres de PJs</li>
                <li>Nombres Cambiados en PJs</li>
                <li>ver Contrase&ntilde;a de cuenta</li>
                <li>Editar Mods</li>
                <li>Editar Mobs</li>
                <li>Top Maximo Editado</li>
                <li>Ver Top Maximo Editado</li>
                <li>Ver Cantidad de Items en un Gremio</li>
                <li>Ver la Cantidad de Items que posee un personaje en Gremio</li>
                <li>Ver Cantidad de Items en una Cuenta</li>
                <li>Ver la Cantidad de Items que posee un personaje en Inventario</li>
                <li>Ver la Cantidad de Items que posee un personaje en Bodega</li>
                <li>Ver Info link en Set</li>
                <li>Ver Info PJ Inventario</li>
                <li>Ver Info PJ Bodega</li>
                <li>Ver Info PJ Gremio</li>
                <li>Eliminar Cuentas</li>
                <li>Eliminar Cuenta de Usuario</li>
                <li>Eliminar Cuenta de Usuario Inactivos por mas de 2 Anos</li>
                <li>Ver Items Dupeados</li>
                <li>Ver Que Items Intento Dupear el jugador</li>
                <li>Ver Dupeos  de jugadores activos (Online)Completa</li>
                <li>Ver Dupeos  de jugadores Baneados Completa</li>
                <li>Buscar Sospechoso de Dupeo por UserID</li>
                <li>Devolver item Dupeado del Jugador</li>
                <li>Agregar Staff</li>
                <li>Add Tag Paint normal</li>
                <li>Add Staff P-GS normal</li>
                <li>Add Staff GS normal</li>
                <li>Add Staff P-GSL normal</li>
                <li>Add Staff GSL normal</li>
                <li>Add Staff GS status 80</li>
                <li>Add Staff GSL status 80</li>
                <li>Add Staff GS status 64</li>
                <li>Add Staff GSL status 64</li>
                <li>Add Staff GS status 48</li>
                <li>Add Staff GSM status 48</li>
                <li>Add Staff P-GM status 48</li>
                <li>Add Staff GM status 32</li>
                <li>Add Staff ADM Status 16</li>
                <li>Add Staff DEV Status 16</li>
                <li>Quitar Staff</li>
                <li>Ver Lista de Comandos Completa</li>
                <li>Quitar UserID del Staff</li>
                <li>Quitar Todo el Staff del Server</li>
                <li>Ver Staff Completo del Servidor</li>
                <li>Ver Pagos de Servicios</li>
                <li>Registro Pagos Hostings</li>
                <li>Registro Pagos VPS</li>
                <li>Ver Registro Pagos_Hostings</li>
                <li>Ver Registro Pagos VPS</li>
                <li>Subidas de Parches</li>
                <li>Cargar Parche</li>
                <li>Listado Comandos Disponibles</li>
                <li>Lista Comandos</li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos">Acepto los Términos</a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="180">Pagar Ahora</button> 
        </div>

        <div class="pricing-card">
            <h2>Panel de Parches</h2>
            <div class="price">6 USD<font class="fontprice">/m</font></div>
            <ul class="services-list">
                <h3>Carasteristicas Utiles</h3>
                <li>Subida de archivos Patch</li>
                <li>Actualizacion remota de clientes</li>
                <li>Edicion de web Updater.exe</li>
                <li>Activacion de funciones</li>
                <li>Registro</li>
                <li>Recuperar contraseña</li>
                <li>Donacion</li>
                <li>status server</li>
            </ul>
            <div class="terms-checkbox">
                <input type="checkbox" id="check2"> <label for="check2"><a href="index.php?w=tyc&i=<?php echo $_SESSION['i']; ?>" class="textos">Acepto los Términos</a></label>
            </div>
            <button class="btn-pay" name="pagar ahora" value="740">Pagar Ahora</button> 
        </div>



    </div>
<?php require_once 'view/layouts/footers.php'; ?>