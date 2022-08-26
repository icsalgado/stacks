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
	
define('WP_ALLOW_REPAIR', true);

define('FS_METHOD','direct');
// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '9`FS!TqpJcV)zMSWk4hP?1`4y z2Z5)I]h==.5jm&)TLUUYzBQ%S=k%B@:X.YAiC' );
define( 'SECURE_AUTH_KEY',  '_<vZ0H:>w+g=ogJ}WAvbrDw_x`PuQTHOB 5|CF-Mb4.o}Ql,adb:mmRAkBU)g=zZ' );
define( 'LOGGED_IN_KEY',    '4P@d;kwE%^?,SbT^i?(chCQ]Zy2f[j]y!Wam|Vo1,|~5_&3E0QYEix2/:9,=iGYn' );
define( 'NONCE_KEY',        'w%+)yGNn!>`Ib7s5zd{eAywBt/?r(&Wy<Rp6L_[*M)lws0!b6KJS:XAHi<b(?I&Z' );
define( 'AUTH_SALT',        'sVoz:Pzl:gz:*AV&;]km1oZ?zw1fIqsr{q[6ije_^nb`JH#OaOYthpf1REh@)ldB' );
define( 'SECURE_AUTH_SALT', ', =d[`=n&BPMp4qw:$#b |QsImKc0&Q3=:S(-TCME1ng/]#-%W~z]$:.nGEeq5Uo' );
define( 'LOGGED_IN_SALT',   'Qti#m$hU41sytei3;n?|puM]gf6^{%Xt_}*.y+dQgQ7-fpzQ)n^E&0SO?K[B;-wS' );
define( 'NONCE_SALT',       '@ms)B$5>/bb)M42Dnk.z-eW^!@,-p5Jkv!QuEh~62BT<3=Wg}f3^5LBHs(3,>s|+' );

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
define ( 'WP_DEBUG', true );
define ( 'WP_DEBUG_LOG', true ); // o log fica em wp-content
define ( 'WP_DEBUG_DISPLAY', false ); // não mostra no site em produção
define ( 'SCRIPT_DEBUG', true ); // evita que o wordpress use versões minificadas de scripts

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';

