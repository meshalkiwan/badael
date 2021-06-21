<?php
/**
 * إعدادات الووردبريس الأساسية
 *
 * عملية إنشاء الملف wp-config.php تستخدم هذا الملف أثناء التنصيب. لا يجب عليك
 * استخدام الموقع، يمكنك نسخ هذا الملف إلى "wp-config.php" وبعدها ملئ القيم المطلوبة.
 *
 * هذا الملف يحتوي على هذه الإعدادات:
 *
 * * إعدادات قاعدة البيانات
 * * مفاتيح الأمان
 * * بادئة جداول قاعدة البيانات
 * * المسار المطلق لمجلد الووردبريس
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** إعدادات قاعدة البيانات - يمكنك الحصول على هذه المعلومات من مستضيفك ** //

/** اسم قاعدة البيانات لووردبريس */
define( 'DB_NAME', 'albdael' );

/** اسم مستخدم قاعدة البيانات */
define( 'DB_USER', 'root' );

/** كلمة مرور قاعدة البيانات */
define( 'DB_PASSWORD', '' );

/** عنوان خادم قاعدة البيانات */
define( 'DB_HOST', 'localhost' );

/** ترميز قاعدة البيانات */
define( 'DB_CHARSET', 'utf8mb4' );

/** نوع تجميع قاعدة البيانات. لا تغير هذا إن كنت غير متأكد */
define( 'DB_COLLATE', '' );

/**#@+
 * مفاتيح الأمان.
 *
 * استخدم الرابط التالي لتوليد المفاتيح {@link https://api.wordpress.org/secret-key/1.1/salt/}
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'p*bV||dnT^7c]L[+C-C`B8=X(@<xA!_!g*}X}5n^<8AxRD6+CBu9{,CiP@-1Rcc2' );
define( 'SECURE_AUTH_KEY',  '7dbI{*CM5-j:S97JoA$&D38W#!/;Ai&#G,/:cuM,ms?&X+i3ngl=T+jU5J}<M/&Q' );
define( 'LOGGED_IN_KEY',    'fCZ`/P?`ySNBU(9*Fl2SfBD@j#xK1K6aL|U:UX^/_IA_<klBx`.*>c&Q:;{#]@k@' );
define( 'NONCE_KEY',        'i`@Z4/U9rZ15cR~dji2b*{)OL4LJ,E$|Tm|VRv^P:r%O=5iJw]eN@[vrsy0gp#`j' );
define( 'AUTH_SALT',        'qN:Y2OD#VNQF2IfO$#TX:/wU|gPpC}sk~ck=TzhqM8:GsQpw?a*vpqM>~s&<rO,x' );
define( 'SECURE_AUTH_SALT', 'H{||pp[VCoMjbxUj>)rt<+ryr7fX}2@~9A,P<?El6i<ysV>E,zQU2F]pprrG}{L!' );
define( 'LOGGED_IN_SALT',   ' }uA#(-[?w+w#C3e=?SU8z!:G!XuoP/S2Y{CgbjP+*]zYbMrz]h|.s-o9NYK_2sK' );
define( 'NONCE_SALT',       'HhUZZvN4qiMfk=xu8CE^GI]3u_g0Fwk5t&}*zoD=V2|*~_~^H]Bte@#7bhY~i<dO' );

/**#@-*/

/**
 * بادئة الجداول في قاعدة البيانات.
 *
 * تستطيع تركيب أكثر من موقع على نفس قاعدة البيانات إذا أعطيت لكل موقع بادئة جداول مختلفة
 * يرجى استخدام حروف، أرقام وخطوط سفلية فقط!
 */
$table_prefix = 'wp_';

/**
 * للمطورين: نظام تشخيص الأخطاء
 *
 * قم بتغييرالقيمة، إن أردت تمكين عرض الملاحظات والأخطاء أثناء التطوير.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* هذا هو المطلوب، توقف عن التعديل! نتمنى لك التوفيق. */

/** المسار المطلق لمجلد ووردبريس. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** إعداد متغيرات الووردبريس وتضمين الملفات. */
require_once ABSPATH . 'wp-settings.php';
