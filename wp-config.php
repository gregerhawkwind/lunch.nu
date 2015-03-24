<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil innehåller följande konfigurationer: Inställningar för MySQL,
 * Tabellprefix, Säkerhetsnycklar, WordPress-språk, och ABSPATH.
 * Mer information på {@link http://codex.wordpress.org/Editing_wp-config.php 
 * Editing wp-config.php}. MySQL-uppgifter får du från ditt webbhotell.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsen, du kan kopiera denna fil direkt till
 * "wp-config.php" och fylla i värdena.
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define('DB_NAME', 'lunch_wp');

/** MySQL-databasens användarnamn */
define('DB_USER', 'root');

/** MySQL-databasens lösenord */
define('DB_PASSWORD', 'root');

/** MySQL-server */
define('DB_HOST', 'localhost');

/** Teckenkodning för tabellerna i databasen. */
define('DB_CHARSET', 'utf8');

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tOpmlH1G5&4BOV*a;U4h3`EbV+;;y7Jl}3zVw7zfh?.zGLmhk~+)O4e;$~Aa>0R%');
define('SECURE_AUTH_KEY',  '66|a,-gU$h^jm=I+k:Y2{oEG-%g?(z# Ok,8o=Ynb[uUP+*| C+Y=6|ybym@uqYK');
define('LOGGED_IN_KEY',    'TFa/I-SH:`lOn%?AJ)]gI_B:74U@6vPn1+32Yctw7M(p $+q5p+x9#x@)b[X.|5(');
define('NONCE_KEY',        '<oNum{HIv=&+mw0:[-CQul/o- B.QF4tNOrCRxftTX6nZ#--?20:$V6I->J/x+Sj');
define('AUTH_SALT',        ':?$bbu0xsdH.%-MC!_X(+[@v9(N~ez+s?$q]~.@|(|nV|@n_p5S-+Qn<#-p=bWi,');
define('SECURE_AUTH_SALT', '9{:w]+YHRggU$P~I9!?^zz}[_ nd9N>tMHoh+~EBOxF30DE2A-2efiCq9XHk|dx$');
define('LOGGED_IN_SALT',   'mTr8iD?*.vC<#r4rbM&x7Duv3N~~hikGvmG+7P2d iPfk,tX5#MxJ%^GR)(sG/+:');
define('NONCE_SALT',       'OCV-$w7[K2*&<NRm3@H{*:,C=<u-CzyJ+<jp=]}<@uHw78@QX|r%HkBt:u%A/`?w');

/**#@-*/

/**
 * Tabellprefix för WordPress Databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Endast siffror, bokstäver och understreck!
 */
$table_prefix  = 'lunch_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det är rekommderat att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här! Blogga på. */

/** Absoluta sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');