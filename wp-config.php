<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för MySQL
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL-inställningar - MySQL-uppgifter får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'vinkraset1' );

/** MySQL-databasens användarnamn */
define( 'DB_USER', 'root' );

/** MySQL-databasens lösenord */
define( 'DB_PASSWORD', 'root' );

/** MySQL-server */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'S703}{h^cr)#hd2U-uxabhv<YR<}g16#g(e+CQ$wkauc(g1;7VP,MnvqO=0g9n3_' );
define( 'SECURE_AUTH_KEY',  '~zit.$r7~&=}&EObpG%f@2FST`-%EqU_I9*# EgIZNx&[gH[2Zg%6Skn<ih6qrHo' );
define( 'LOGGED_IN_KEY',    'qvF<=sE=Kb6/(FL9e&E ^cMZ=f*@|{ZIBf!95C+]JLj_{UC-=tzZ((g<IU;L;,4c' );
define( 'NONCE_KEY',        'OJrh4wc3bR7K{[OCd6H{jw]! p=a[:vfofXwCeE>ur+D|Q;4OEkGN$3cu7L/P%To' );
define( 'AUTH_SALT',        'L+~xhU.Aq7nM 6)Fvd?^9[]Tg9!_f#.!VEAy)p{tK^8O&Ifi{3Ib6G*`9U_XNP?g' );
define( 'SECURE_AUTH_SALT', 'nkMB#qrB_DD^4UbGKC_b2i*h*nPhuD,GJM:?1APihLk,&}Qhs 3>0MHw:v$Fv#CP' );
define( 'LOGGED_IN_SALT',   '@DTQ`~2]~NZS0[Ky<}.(Rn=$ehc0m6K`VrMC}L.gMo0DXT? )t]N,D)O3H-!mY#0' );
define( 'NONCE_SALT',       'ynC2jcqc]0^hU:BkuFE$5z`sa^u @gGL}I$x~E5%Bw)UciT&CUh6&8Y4,K}0mq;7' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */ 
define('WP_DEBUG', false);

/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');

define( 'CONCATENATE_SCRIPTS', false ); 
define( 'SCRIPT_DEBUG', true );