<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'garamont');

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
define('AUTH_KEY',         'KwL8.`C>[6G)9h|]Wv]$==T*$=h7HFT=ma!cg!9$>?wJQ<sf4tf,m69haV.Jz1cB');
define('SECURE_AUTH_KEY',  '+7n_dzed1YN^f-X^GP20OGL<~gIML8Kql*e=/OQ7q_S)<4c6%(^d@J>N}(5a0cSJ');
define('LOGGED_IN_KEY',    '-@gd?LcWunyoSs)$pN!b8cu+uBey-}eR4|!J1&4 RRE=QlWdJxGjN.u*3t7nGQXG');
define('NONCE_KEY',        '*C(%N.x~vPwRbj>`r&O)MAIGj+P_Mg=iMgbd+oA;n~_^%yb]7c~-*yjG=,;9cRNR');
define('AUTH_SALT',        'y9;Kgm`6f|wfA<}bBjIqDnx@ xmq3D/*7v+|hrm0[MlI6y6%$WX,Q{N]&fTZ)/2U');
define('SECURE_AUTH_SALT', 'vqLn-N^,(=:(1y$q8YO%$Z!J`MBk+=zeX=]M0)0O5pUP}M6%[,+2p1L]oH7}<X{u');
define('LOGGED_IN_SALT',   'fBdiwzDhdxrujl~C?xD,O!Cp77$zrHj4PNP;%hX4{221erH^+,bTKkircI?:@D^L');
define('NONCE_SALT',       'Q`zd32.mkEW/>+y8@K{d./5Z{ah5IFC])S$`5:Uirt?{z)sZtW|}lgE1&?W&= +z');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'gt_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
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