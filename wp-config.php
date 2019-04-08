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
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

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
define( 'AUTH_KEY',         'GK ~ep>-_RlfsP{D6<H4;PJO4qt/V(mP+bu!tDA{:lY0Qgf!&zHw**f;@i^:y!c}' );
define( 'SECURE_AUTH_KEY',  'm7fJDZ|G[P@}u}oS;T%I~/qW-N;b~]kyn!ZH@Az[B+?)6,;D%:< xQe<3z%fd,X)' );
define( 'LOGGED_IN_KEY',    'M5VRKw}VaE$<yGN6-{KCF})<N)q?+Q5boc ?~e.|fZ#)$sz,Bd7m8/-Z42t^i%oB' );
define( 'NONCE_KEY',        'IDrk5lt.h%YSGslK5Z5ogc<RmOyP/,jVo,K-b#rvc@txwp)5ezX[[X(=I#P~fUk5' );
define( 'AUTH_SALT',        'n2HYQ>,8Bnof3Vwfbc!q,RSRmzn~22-hFOFCopoU]u]9iS,RzSOV|xZ2rJ(0X=~g' );
define( 'SECURE_AUTH_SALT', 'g<Hcn%HM}ALpIuT$pV-)^v9[QpL|&n<[Rr2}(~vpuiuP8Nra+}9UHszgyiPbxXl3' );
define( 'LOGGED_IN_SALT',   'd*Lr_c vmO^r0}s2rT6l!F$,.?Xp.AC5YzF+$9>f<lqc5y.1Wl0Bdk+#REK#Op=:' );
define( 'NONCE_SALT',       'S6 jx$cC_oF[0[18ZC.#Rq`z&:a6PKLM&sLl>Qk`vEvj1!Fc;zsIT7`$TTj{qhny' );

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
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
