<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'cetis-wp');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '[j,Or>;&vE6ZB~K~gt/(DLMsQJ23jhzca0;d;_Z_aG^i3[m?HaR{6zAo07lLq(Ds'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', 'r;`|z9Sq}5UCiPy3V[m@v(BRbH6/oJ(evBzm`#=,;1 (%Xv*:WqEs)FYL^G%Bw7j'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'A4Olb }4BCuc8Nwq:-{}I?(o&2}@/KwJ|&*Xb0R/hD4fQi%yMuut@@ {$DGd7#Ul'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', '!2n}w/3Tl51*ynlNvk`}:rb?kVQ(hHAB?>S<DW#i0:E$fVF1/1|w(lx_Gx:SKHFs'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', 'g5lKwf*TOj6~bh6(|3m]CK%%N|{Ya6^jxZZiQfH2 &JRom^nPf4j&KcGVL?,Z`b.'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', 'D*T#NzCmc}VZEP7;Txj9,HE +Q,aRL}J)ht#[K|AvjL]~4cXR*]maQyUsZf}CIdB'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', 'D_nB_N*Sd)QPrZXQ t^QXuW}Z3msS6ERYC&G:*ea8B:l_=4uj;WHZhbuD6J%<r^^'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'qD^=Xrg-iW2zz26M`|@y(7}G.y[/C/ qU72p|/z.pVGPsJETxnetC5jVgTo&a].,'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

