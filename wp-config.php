<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'wordpress' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'wppass' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'h>9&Zfl}G$CG9w8_a@3<42W[DG8!13~,=@ k1V_H8KzQH4c4YX(fr^a~x)e[Sje ' );
define( 'SECURE_AUTH_KEY',  ')9+;C6jP :@%Ty3L&;~W=tL~3i86=|6L#nn[)HA&4W3Ntra2s-bmtkfNYQOEF>lJ' );
define( 'LOGGED_IN_KEY',    '(b#r4z]lJAMx@RhJ9SOST(<S28nzzvx.r^/D3TudiRo*sZK>4!l %C7llI|rq-1H' );
define( 'NONCE_KEY',        'JWrEDb4=qq(AeJtFkiz3; SW.[[G/n+cuCEow$u(Jd `,r(,dX#@|FA,mXdHP[%7' );
define( 'AUTH_SALT',        '@v8(L[jUk?(a[t,:9/b)IR{&[.NumoLu]>k{kW=vooud0<UjA}6,.BB%&Y[WfyA5' );
define( 'SECURE_AUTH_SALT', '4oyDv4(TnT1!Jh9c2XufW~FWYm7N-0Vu^+a`tfE<A]kiazSuJmZrXKrxY$A1#e32' );
define( 'LOGGED_IN_SALT',   '(E6g~.KYh>8{^p5`ZL+aR%U0=hrJB|AetV*=f}/]kYl3rhPQRh6v{{i[#+/O?}oP' );
define( 'NONCE_SALT',       '|$#+N6HOOx,D7O4yO?X:%,2cQzP;8&9&HR||dJs<w: 6(q>=MZ*6^6P^[rLDGP[d' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('FS_METHOD','direct');
define("FTP_HOST", "localhost");
define("FTP_USER", "rover");
define("FTP_PASS", "Chareka$1Rover");

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
