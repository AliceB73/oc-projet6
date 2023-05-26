<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6@dxni!T2J>kCQ2>?%ZbC2VIXu:N-nF/:I{XM<1%Ndtp+f=Y|kbjwKmEd8Ibu,4d' );
define( 'SECURE_AUTH_KEY',  'LW]OX#mV(/tq=|/{rd4krFW~:L?OChH[uS5B6mI.AP/)]PC+4w2KiVuew449&bMY' );
define( 'LOGGED_IN_KEY',    '[uk|=,`qgIuTN<eZFr$oClGjPz:qR*Ag7I~eVyQP_[^!KAE^-9+}L}++wm=]-hFn' );
define( 'NONCE_KEY',        'Urgc-(&^%S8,L5+j6Mi(wHkw2St_5-6W%DsFscxTC@](N[lWBfF?rw@t`nX7i-<L' );
define( 'AUTH_SALT',        'Q#G`0-yO&EUw=xnftF( dd+_lF1%R> vYOEDD)qg5NR^#7?yILt9<:Q)gXyUF<`-' );
define( 'SECURE_AUTH_SALT', 'Wc%Db{x[%GIag&2Rksj.)}F3SC[GsQD},P#LHRCP2<h3ZI)W&yu^ydU%aIi1}A~H' );
define( 'LOGGED_IN_SALT',   '8HKY?Oy5q>fhr;~c]t1ENvZ I;sk)j^]yulsgoaoP3cTO?D,_V-#d4QfJ}6u/?EL' );
define( 'NONCE_SALT',       'Z~]P[=b]:B1y< B2^+#@GF,Oo[_ITIF<Z<vw~%|s:{TqyM[${^};xvTjpi|1_F-P' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
