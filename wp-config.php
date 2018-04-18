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
define('DB_NAME', 'tuto_temas');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '^@CjO{{;U[l[B0H.|YG]?ElAH40^gI[Z]);3F`&0/ClA9 vRxD!&z;/.X|NNW&A~');
define('SECURE_AUTH_KEY', ']n?|O(:ju^TVXO!o!jdc3tMWsf~)r,W+>?JwY?2y?;~NoSXo7 nFHBVVvczD+=tp');
define('LOGGED_IN_KEY', 's=?77s$tmroO/,_rM{ .bJ*pmug8S./H<x$@s1vjw,DkIo.6t7Zg%M^A9D{9=}ji');
define('NONCE_KEY', '[jp+~)PW6*1_+g$ >OF)?>WB(rk&y7}.6-C~?=F#ay?|bf@4?uYIA;{g%IF6$q$Z');
define('AUTH_SALT', '-=L@y9e~wLvp)Fvto*6[O@Y0^fymA_[j-%/u;?u,ibAx}G$t~_]:k%$BQ[{m-;vb');
define('SECURE_AUTH_SALT', 'd(Ma1?Y7#.yt}0rc8L uxpm6&[+[3#350fsuWSmuz]@({XLnS_)f35enH@&;g@~^');
define('LOGGED_IN_SALT', 'J..3$c@^%>6R%=WHhaEKe%MD+HR:AoKQss9Yx$VJ7}%/(/L<^g&:921>e#M|1-m}');
define('NONCE_SALT', '?k4wbP|#9EcEi4j@*M:s><jU=|[iluD(,ER>W7r,@!IW`n-}.(_~ZyQzWsy?wU3c');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

