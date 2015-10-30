<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Le script de création wp-config.php utilise ce fichier lors de l'installation.
 * Vous n'avez pas à utiliser l'interface web, vous pouvez directement
 * renommer ce fichier en "wp-config.php" et remplir les variables à la main.
 * 
 * Ce fichier contient les configurations suivantes :
 * 
 * * réglages MySQL ;
 * * clefs secrètes ;
 * * préfixe de tables de la base de données ;
 * * ABSPATH.
 * 
 * @link https://codex.wordpress.org/Editing_wp-config.php 
 * 
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'projet_evening');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'liz;+a-Y[<T|6d->n*u;|CRN|<l}F@-J,I@]!+/&nHef~;8)T(Kb~iOx5K Elh7{');
define('SECURE_AUTH_KEY',  'YE-/&N}>^.TV@p[y0P-k*$&ODTPr%6=8$K]`/.UnaP9g1?Fc~y[%_fr5zc|4L$9c');
define('LOGGED_IN_KEY',    'mfiG5 HH(u&3./}!${xP/ip3jk;.MX-M2P}-<l@KdaEWjc;9a&}mjA~d]PgUMD|#');
define('NONCE_KEY',        'WB>]pmPkyboIBUo+k{G:5?N1R1 z~0ML:O!UFBk<G@zxn|{9+JJ$uyYj]iK7mK]4');
define('AUTH_SALT',        'atEtkbT;nkTIQx:vWLWi1Y UA=n7-u+|7QD[kYmr?Nh98eL:c53}?gl,]Dfhw?HW');
define('SECURE_AUTH_SALT', '4Gm7%E!Lt&^;id^VFpQE}e@dEh*5/B_tPwq?U[E{L-]9&IFpL5CT$+}tHbl$VFN|');
define('LOGGED_IN_SALT',   'h:6ulT->D1GXF=Lim.6{uTG0-9ycU(B7]jHKGwh#o0QyRV44;137@k9/Ci4mX[u*');
define('NONCE_SALT',       'v ?;ZH6/:^)`&T,R,lWt&~|1$l![hqB*1fbyxjYNj!CG4RJ}Dhvzgi>1p?>LVdve');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'evsu_';

/** 
 * Pour les développeurs : le mode déboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 * 
 * Pour obtenir plus d'information sur les constantes 
 * qui peuvent être utilisée pour le déboguage, consultez le Codex.
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress 
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');