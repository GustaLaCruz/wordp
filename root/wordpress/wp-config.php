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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'bd_misseis' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', 'usbw' );

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
define( 'AUTH_KEY',         '_HjMUr50<36;@K/*))CJ*XQ/lqfi@W4:5%na#>#!{B6>`TQl[Mfj^`W&bZLoF|Qo' );
define( 'SECURE_AUTH_KEY',  '%oxD=uTvj)@[r?oz4;CrGZJ+!`Pnz05<hs?NGM*]kSJ`!JFof9}_)HD=)}~P|Lj8' );
define( 'LOGGED_IN_KEY',    '`pqgA)hcE-EDYa&kxR7Ex^uRx5_cmxY*Ukt>i_=t:(*h5zv~^i{zw;~ncFQQ:&z.' );
define( 'NONCE_KEY',        '5.g8!N9;tYjN#gd#{E3|Q;=wLv~^&-*fL|cq%[LVdrsxK~$Ig`ZOlAM^JlAs=)_z' );
define( 'AUTH_SALT',        '!&<(LyhRuf#)OonB]cZV5A|.MVm5Y(n-$8#jzYr<xJna@)Wj5w)}?RBRl?@TW=+`' );
define( 'SECURE_AUTH_SALT', 'vq*|*Nf>X;=*DD;(8m/}.1coraF/?o4/coz%@!QqHU&MYcRGeS*e+u|g<F|fCOW#' );
define( 'LOGGED_IN_SALT',   '}KIB}DSfJ?qdn1$1g6<o-44kP/b?[b224r;qVTAga][^5G`f8cs]+=2^qW%bhbV@' );
define( 'NONCE_SALT',       'h9B&0fb6!c)QfVV_0Uf9N}&|LL#;7< Ru6d:R_0I<.!L Rs)<G[+;npm`:dnP{8[' );

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

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
