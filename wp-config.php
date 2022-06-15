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
define( 'DB_NAME', 'criar-sites' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'I/YBq}1{:eM{?`q3l- *snFkj4jfPl:,Cl;+QXo]U`V5_(zmF98,jhQ}X/?AKFu}' );
define( 'SECURE_AUTH_KEY',  'aTz8pc8i.F~b0:<{=*k5#!F,m2hgOax+A/eVPZ}Aads@v3%_[($b>^d&qIzg_AH9' );
define( 'LOGGED_IN_KEY',    '+2$x9gs& 2S6L.65-9nMaut62m#Pb#70W].A-$u]g#<E1k(|Ord64 l?O76bdF~L' );
define( 'NONCE_KEY',        '131`.<Z{AU-KdFFQ.lWir/FO0D-|1uzOFpSdvbhbn4R_J[DVHa&U2Futo2S{r04V' );
define( 'AUTH_SALT',        'V^Z-_6g#l-dxR&&?;X&QtMC5pvp+h*HJQgo#c~$]*4^}`%!SgThmejR,#[oN-=M<' );
define( 'SECURE_AUTH_SALT', '#ZfE?Vi-PfRQ{(TnTE#1Swxji0:#zDyd,b$}iY{/K|RCNxNC0~lXo!Y<:9rq+6lt' );
define( 'LOGGED_IN_SALT',   '{&Edi/jApTm,YI-K`f}6e;KbLu-*??[K#l7)ymaRSlzA ?i_VHAKQ.5;cxr*.qcj' );
define( 'NONCE_SALT',       '= +Cr@6u%GAm0P,9C*K/V$H~VRSg0v]EvF k6E`Myvcq)gfa&=/+0,!R<AD}.tG7' );

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
