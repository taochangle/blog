
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 08 月 26 日 02:00
-- 服务器版本: 10.0.20-MariaDB
-- PHP 版本: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `u325084755_admin`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `datetime` int(11) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `info`, `datetime`, `image`) VALUES
(1, 'taoxin', '96e79218965eb72c92a549dd5a330112', '勒布朗·詹姆斯（LeBron James），绰号“皇帝”，1984年12月30日出生在美国·俄亥俄州·阿克伦，世界著名的美国男子职业篮球运动员，司职小前锋，效力于NBA克利夫兰骑士队。\r\n勒布朗·詹姆斯在2003年的NBA选秀大会中，首轮第一顺位被克利夫兰骑士队选中。2003-2010年，詹姆斯在骑士队效力7年，期间获得两届NBA最有价值球员（MVP）。2010年转会至迈阿密热火队，与德怀恩·韦德、克里斯·波什组成“三巨头”阵容。\r\n2012年，詹姆斯收获了个人在NBA的第三座最有价值球员奖，亦于同年获得了NBA生涯第一个总冠军并加冕总决赛MVP。当年夏天，詹姆斯代表美国男篮获得了伦敦奥运会金牌，追平了迈克尔·乔丹在1992年所创的纪录。2013年，他再度获得NBA总冠军、完成两连冠，并连续两年包揽常规赛和总决赛MVP。2014-15赛季，詹姆斯回归克利夫兰骑士队。2015-2016赛季，詹姆斯带领骑士队逆转战胜勇士队获得队史首个冠军，并全票当选总决赛MVP。', 1471683228, 'Public/Upload/avatar/1/1470056620/1470056620.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `aid` int(11) NOT NULL AUTO_INCREMENT,
  `atitle` varchar(50) NOT NULL,
  `auserid` int(11) NOT NULL,
  `atime` int(11) NOT NULL,
  `acontent` text NOT NULL,
  `acid` int(11) NOT NULL,
  `aorder` int(11) NOT NULL,
  `auid` int(11) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`aid`, `atitle`, `auserid`, `atime`, `acontent`, `acid`, `aorder`, `auid`) VALUES
(1, 'session_start', 0, 1471621207, '&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;line-height:1.5;&quot;&gt;session_start&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	(PHP 4, PHP 5, PHP 7)\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	session_start — 启动新会话或者重用现有会话\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	说明\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	bool session_start ([ array $options = [] ] )\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	session_start() 会创建新会话或者重用现有会话。 如果通过 GET 或者 POST 方式，或者使用 cookie 提交了会话 ID， 则会重用现有会话。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	当会话自动开始或者通过 session_start() 手动开始的时候， PHP 内部会调用会话管理器的 open 和 read 回调函数。 会话管理器可能是 PHP 默认的， 也可能是扩展提供的（SQLite 或者 Memcached 扩展）， 也可能是通过 session_set_save_handler() 设定的用户自定义会话管理器。 通过 read 回调函数返回的现有会话数据（使用特殊的序列化格式存储）， PHP 会自动反序列化数据并且填充 $_SESSION 超级全局变量。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	要想使用命名会话，请在调用 session_start() 函数 之前调用 session_name() 函数。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	如果启用了 session.use_trans_sid 选项， session_start() 函数会注册一个内部输出管理器， 该输出管理器完成 URL 重写的工作。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	如果用户联合使用 ob_start() 和 ob_gzhandler 函数， 那么函数的调用顺序会影响输出结果。 例如，必须在开始会话之前调用 ob_gzhandler 函数完成注册。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	参数\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	options\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	此参数是一个关联数组，如果提供，那么会用其中的项目覆盖 会话配置指示 中的配置项。此数组中的键无需包含 session. 前缀\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	除了常规的会话配置指示项， 还可以在此数组中包含 read_and_close 选项。如果将此选项的值设置为 TRUE， 那么会话文件会在读取完毕之后马上关闭， 因此，可以在会话数据没有变动的时候，避免不必要的文件锁。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	返回值\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	成功开始会话返回 TRUE ，反之返回 FALSE\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	更新日志\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	版本\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	说明\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	7.0.0 新加 options 参数。 &amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	5.3.0 如果函数调用失败返回 FALSE， 之前版本返回了 TRUE。 &amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	4.3.3 在 PHP 4.3.3 中， 会话开始之后调用 session_start() 函数 会引发 E_NOTICE 级别的错误， 并且第二次请求开始会话的调用会被忽略。 &amp;nbsp;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;line-height:1.5;&quot;&gt;范例&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	基本的会话示例\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	Example #1 page1.php\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;line-height:1.5;&quot;&gt;&amp;lt;?php&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;// page1.php\r\nsession_start();\r\necho ''Welcome to page #1'';\r\n$_SESSION[''favcolor''] = ''green'';\r\n$_SESSION[''animal'']   = ''cat'';\r\n$_SESSION[''time'']     = time();\r\n// 如果使用 cookie 方式传送会话 ID\r\necho ''&amp;lt;br /&amp;gt;&amp;lt;a href=&quot;page2.php&quot;&amp;gt;page 2&amp;lt;/a&amp;gt;'';\r\n// 如果不是使用 cookie 方式传送会话 ID，则使用 URL 改写的方式传送会话 ID\r\necho ''&amp;lt;br /&amp;gt;&amp;lt;a href=&quot;page2.php?'' . SID . ''&quot;&amp;gt;page 2&amp;lt;/a&amp;gt;'';\r\n?&amp;gt;  &lt;/pre&gt;\r\n&lt;p&gt;\r\n	请求 page1.php 页面之后， 第二个页面 page2.php 会包含会话数据。 请查阅 会话参考 获取更多关于 会话 ID 传送的信息， 在该参考页面中有关于常量 SID 的详细说明。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;line-height:1.5;&quot;&gt;Example #2 page2.php&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php\r\n// page2.php\r\nsession_start();\r\necho ''Welcome to page #2&amp;lt;br /&amp;gt;'';\r\necho $_SESSION[''favcolor'']; // green\r\necho $_SESSION[''animal''];   // cat\r\necho date(''Y m d H:i:s'', $_SESSION[''time'']);\r\n// 类似 page1.php 中的代码，你可能需要在这里处理使用 SID 的场景\r\necho ''&amp;lt;br /&amp;gt;&amp;lt;a href=&quot;page1.php&quot;&amp;gt;page 1&amp;lt;/a&amp;gt;'';\r\n?&amp;gt;  &lt;/pre&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	调用 session_start() 的时候指定选项\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	Example #3 覆盖 Cookie 超时时间设定\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;line-height:1.5;&quot;&gt;&amp;lt;?php&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;// 设置 cookie 的有效时间为 1 天\r\nsession_start([\r\n   ''cookie_lifetime'' =&amp;gt; 86400,\r\n]);\r\n?&amp;gt;  &lt;/pre&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;line-height:1.5;&quot;&gt;Example #4 读取会话之后立即关闭会话存储文件&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;line-height:1.5;&quot;&gt;&amp;lt;?php&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;// 如果确定不修改会话中的数据，\r\n// 我们可以在会话文件读取完毕之后立即关闭它\r\n// 来避免由于给会话文件加锁导致其他页面阻塞\r\nsession_start([\r\n   ''cookie_lifetime'' =&amp;gt; 86400,\r\n   ''read_and_close''  =&amp;gt; true,\r\n]);  &lt;/pre&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;line-height:1.5;&quot;&gt;注释&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	Note:\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	要使用基于 cookie 的会话， 必须在输出开始之前调用 session_start() 函数。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	Note:\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	建议使用 zlib.output_compression 来替代 ob_gzhandler()。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;span style=&quot;line-height:1.5;&quot;&gt;Note:&lt;/span&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	根据配置不同，本函数会发送几个 HTTP 响应头。 参考 session_cache_limiter() 来自定义 HTTP 响应头。\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;\r\n&lt;p&gt;\r\n	&lt;br /&gt;\r\n&lt;/p&gt;', 1, 1, 1),
(2, '垃圾回收机制', 0, 1471683516, '&lt;h2 class=&quot;title&quot; style=&quot;font-size:1.5rem;font-weight:500;color:#793862;font-family:&amp;quot;background-color:#F2F2F2;&quot;&gt;\r\n	引用计数基本知识\r\n&lt;/h2&gt;\r\n&lt;p class=&quot;para&quot; style=&quot;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	每个php变量存在一个叫&quot;zval&quot;的变量容器中。一个zval变量容器，除了包含变量的类型和值，还包括两个字节的额外信息。第一个是&quot;is_ref&quot;，是个bool值，用来标识这个变量是否是属于引用集合(reference set)。通过这个字节，php引擎才能把普通变量和引用变量区分开来，由于php允许用户通过使用&amp;amp;来使用自定义引用，zval变量容器中还有一个内部引用计数机制，来优化内存使用。第二个额外字节是&quot;refcount&quot;，用以表示指向这个zval变量容器的变量(也称符号即symbol)个数。所有的符号存在一个符号表中，其中每个符号都有作用域(scope)，那些主脚本(比如：通过浏览器请求的的脚本)和每个函数或者方法也都有作用域。\r\n&lt;/p&gt;\r\n&lt;p class=&quot;para&quot; style=&quot;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	当一个变量被赋常量值时，就会生成一个zval变量容器，如下例这样：\r\n&lt;/p&gt;\r\n&lt;div class=&quot;example&quot; id=&quot;example-396&quot; style=&quot;margin:1.5rem 0px;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	&lt;p&gt;\r\n		&lt;span&gt;Example #1 生成一个新的zval容器&lt;/span&gt;\r\n	&lt;/p&gt;\r\n	&lt;div class=&quot;example-contents&quot;&gt;\r\n		&lt;div class=&quot;phpcode&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php\r\n$a = &quot;new string&quot;;\r\n?&amp;gt;&lt;/pre&gt;\r\n&lt;br /&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;p class=&quot;para&quot; style=&quot;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	在上例中，新的变量&lt;em&gt;a&lt;/em&gt;，是在当前作用域中生成的。并且生成了类型为&amp;nbsp;&lt;span class=&quot;type&quot;&gt;&lt;a href=&quot;http://php.net/manual/zh/language.types.string.php&quot; class=&quot;type string&quot;&gt;string&lt;/a&gt;&lt;/span&gt;&amp;nbsp;和值为&lt;em&gt;new string&lt;/em&gt;的变量容器。在额外的两个字节信息中，&quot;is_ref&quot;被默认设置为&amp;nbsp;&lt;span&gt;FALSE&lt;/span&gt;，因为没有任何自定义的引用生成。&quot;refcount&quot; 被设定为&amp;nbsp;&lt;em&gt;1&lt;/em&gt;，因为这里只有一个变量使用这个变量容器. 注意到当&quot;refcount&quot;的值是&lt;em&gt;1&lt;/em&gt;时，&quot;is_ref&quot;的值总是&lt;span&gt;FALSE&lt;/span&gt;. 如果你已经安装了&lt;a href=&quot;http://xdebug.org/&quot; class=&quot;link external&quot;&gt;»&amp;nbsp;Xdebug&lt;/a&gt;，你能通过调用函数&amp;nbsp;&lt;span class=&quot;function&quot;&gt;&lt;span&gt;xdebug_debug_zval()&lt;/span&gt;&lt;/span&gt;显示&quot;refcount&quot;和&quot;is_ref&quot;的值。\r\n&lt;/p&gt;\r\n&lt;div class=&quot;example&quot; id=&quot;example-397&quot; style=&quot;margin:1.5rem 0px;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	&lt;p&gt;\r\n		&lt;span&gt;Example #2 显示zval信息&lt;/span&gt;\r\n	&lt;/p&gt;\r\n	&lt;div class=&quot;example-contents&quot;&gt;\r\n		&lt;div class=&quot;phpcode&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php\r\nxdebug_debug_zval(''a'');\r\n?&amp;gt;&lt;/pre&gt;\r\n&lt;br /&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=&quot;example-contents&quot;&gt;\r\n		&lt;p&gt;\r\n			以上例程会输出：\r\n		&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=&quot;example-contents screen&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n		&lt;div class=&quot;cdata&quot;&gt;\r\n&lt;pre&gt;a: (refcount=1, is_ref=0)=''new string''\r\n&lt;/pre&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;p class=&quot;para&quot; style=&quot;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	把一个变量赋值给另一变量将增加引用次数(refcount).\r\n&lt;/p&gt;\r\n&lt;div class=&quot;example&quot; id=&quot;example-398&quot; style=&quot;margin:1.5rem 0px;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	&lt;p&gt;\r\n		&lt;span&gt;Example #3 增加一个zval的引用计数&lt;/span&gt;\r\n	&lt;/p&gt;\r\n	&lt;div class=&quot;example-contents&quot;&gt;\r\n		&lt;div class=&quot;phpcode&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php\r\n$a = &quot;new string&quot;;\r\n$b = $a;\r\nxdebug_debug_zval( ''a'' );\r\n?&amp;gt;&lt;/pre&gt;\r\n&lt;br /&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=&quot;example-contents&quot;&gt;\r\n		&lt;p&gt;\r\n			以上例程会输出：\r\n		&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=&quot;example-contents screen&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n		&lt;div class=&quot;cdata&quot;&gt;\r\n&lt;pre&gt;a: (refcount=2, is_ref=0)=''new string''\r\n&lt;/pre&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;p class=&quot;para&quot; style=&quot;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	这时，引用次数是&lt;em&gt;2&lt;/em&gt;，因为同一个变量容器被变量&amp;nbsp;a&amp;nbsp;和变量&amp;nbsp;b关联.当没必要时，php不会去复制已生成的变量容器。变量容器在”refcount“变成0时就被销毁. 当任何关联到某个变量容器的变量离开它的作用域(比如：函数执行结束)，或者对变量调用了函数&amp;nbsp;&lt;span class=&quot;function&quot;&gt;&lt;a href=&quot;http://php.net/manual/zh/function.unset.php&quot; class=&quot;function&quot;&gt;unset()&lt;/a&gt;&lt;/span&gt;时，”refcount“就会减1，下面的例子就能说明:\r\n&lt;/p&gt;\r\n&lt;div class=&quot;example&quot; id=&quot;example-399&quot; style=&quot;margin:1.5rem 0px;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	&lt;p&gt;\r\n		&lt;span&gt;Example #4 减少引用计数&lt;/span&gt;\r\n	&lt;/p&gt;\r\n	&lt;div class=&quot;example-contents&quot;&gt;\r\n		&lt;div class=&quot;phpcode&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php\r\n$a = &quot;new string&quot;;\r\n$c = $b = $a;\r\nxdebug_debug_zval( ''a'' );\r\nunset( $b, $c );\r\nxdebug_debug_zval( ''a'' );\r\n?&amp;gt;&lt;/pre&gt;\r\n&lt;br /&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=&quot;example-contents&quot;&gt;\r\n		&lt;p&gt;\r\n			以上例程会输出：\r\n		&lt;/p&gt;\r\n	&lt;/div&gt;\r\n	&lt;div class=&quot;example-contents screen&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n		&lt;div class=&quot;cdata&quot;&gt;\r\n&lt;pre&gt;a: (refcount=3, is_ref=0)=''new string''\r\na: (refcount=1, is_ref=0)=''new string''\r\n&lt;/pre&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;p class=&quot;para&quot; style=&quot;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	如果我们现在执行&amp;nbsp;&lt;em&gt;unset($a);&lt;/em&gt;，包含类型和值的这个变量容器就会从内存中删除。\r\n&lt;/p&gt;\r\n&lt;div class=&quot;sect2&quot; id=&quot;features.gc.compound-types&quot; style=&quot;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	&lt;h3 class=&quot;title&quot; style=&quot;font-size:1.25rem;font-weight:500;color:#793862;&quot;&gt;\r\n		复合类型(Compound Types)\r\n	&lt;/h3&gt;\r\n	&lt;p class=&quot;para&quot;&gt;\r\n		当考虑像&amp;nbsp;&lt;span class=&quot;type&quot;&gt;&lt;a href=&quot;http://php.net/manual/zh/language.types.array.php&quot; class=&quot;type array&quot;&gt;array&lt;/a&gt;&lt;/span&gt;和&lt;span class=&quot;type&quot;&gt;&lt;a href=&quot;http://php.net/manual/zh/language.types.object.php&quot; class=&quot;type object&quot;&gt;object&lt;/a&gt;&lt;/span&gt;这样的复合类型时，事情就稍微有点复杂. 与&amp;nbsp;&lt;span class=&quot;type&quot;&gt;标量(scalar)&lt;/span&gt;类型的值不同，&lt;span class=&quot;type&quot;&gt;&lt;a href=&quot;http://php.net/manual/zh/language.types.array.php&quot; class=&quot;type array&quot;&gt;array&lt;/a&gt;&lt;/span&gt;和&amp;nbsp;&lt;span class=&quot;type&quot;&gt;&lt;a href=&quot;http://php.net/manual/zh/language.types.object.php&quot; class=&quot;type object&quot;&gt;object&lt;/a&gt;&lt;/span&gt;类型的变量把它们的成员或属性存在自己的符号表中。这意味着下面的例子将生成三个zval变量容器。\r\n	&lt;/p&gt;\r\n	&lt;div class=&quot;example&quot; id=&quot;example-400&quot; style=&quot;margin:1.5rem 0px;&quot;&gt;\r\n		&lt;p&gt;\r\n			&lt;span&gt;Example #5 Creating a&amp;nbsp;&lt;span class=&quot;type&quot;&gt;&lt;a href=&quot;http://php.net/manual/zh/language.types.array.php&quot; class=&quot;type array&quot;&gt;array&lt;/a&gt;&lt;/span&gt;&amp;nbsp;zval&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;div class=&quot;phpcode&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php\r\n$a = array( ''meaning'' =&amp;gt; ''life'', ''number'' =&amp;gt; 42 );\r\nxdebug_debug_zval( ''a'' );\r\n?&amp;gt;&lt;/pre&gt;\r\n&lt;br /&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;p&gt;\r\n				以上例程的输出类似于：\r\n			&lt;/p&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents screen&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n			&lt;div class=&quot;cdata&quot;&gt;\r\n&lt;pre&gt;a: (refcount=1, is_ref=0)=array (\r\n   ''meaning'' =&amp;gt; (refcount=1, is_ref=0)=''life'',\r\n   ''number'' =&amp;gt; (refcount=1, is_ref=0)=42\r\n)\r\n&lt;/pre&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;p&gt;\r\n				图示:\r\n			&lt;/p&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;mediaobject&quot;&gt;\r\n			&lt;div class=&quot;imageobject&quot;&gt;\r\n				&lt;img src=&quot;http://php.net/manual/zh/images/12f37b1c6963c1c5c18f30495416a197-simple-array.png&quot; alt=&quot;一个简单数组的zval&quot; width=&quot;593&quot; height=&quot;143&quot; /&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;p class=&quot;para&quot;&gt;\r\n		这三个zval变量容器是:&amp;nbsp;a，meaning和&amp;nbsp;number。增加和减少”refcount”的规则和上面提到的一样. 下面, 我们在数组中再添加一个元素,并且把它的值设为数组中已存在元素的值:\r\n	&lt;/p&gt;\r\n	&lt;div class=&quot;example&quot; id=&quot;example-401&quot; style=&quot;margin:1.5rem 0px;&quot;&gt;\r\n		&lt;p&gt;\r\n			&lt;span&gt;Example #6 添加一个已经存在的元素到数组中&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;div class=&quot;phpcode&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php\r\n$a = array( ''meaning'' =&amp;gt; ''life'', ''number'' =&amp;gt; 42 );\r\n$a[''life''] = $a[''meaning''];\r\nxdebug_debug_zval( ''a'' );\r\n?&amp;gt;&lt;/pre&gt;\r\n&lt;br /&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;p&gt;\r\n				以上例程的输出类似于：\r\n			&lt;/p&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents screen&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n			&lt;div class=&quot;cdata&quot;&gt;\r\n&lt;pre&gt;a: (refcount=1, is_ref=0)=array (\r\n   ''meaning'' =&amp;gt; (refcount=2, is_ref=0)=''life'',\r\n   ''number'' =&amp;gt; (refcount=1, is_ref=0)=42,\r\n   ''life'' =&amp;gt; (refcount=2, is_ref=0)=''life''\r\n)\r\n&lt;/pre&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;p&gt;\r\n				图示：\r\n			&lt;/p&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;mediaobject&quot;&gt;\r\n			&lt;div class=&quot;imageobject&quot;&gt;\r\n				&lt;img src=&quot;http://php.net/manual/zh/images/12f37b1c6963c1c5c18f30495416a197-simple-array2.png&quot; alt=&quot;带有引用的简单数组的zval&quot; width=&quot;593&quot; height=&quot;143&quot; /&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;p class=&quot;para&quot;&gt;\r\n		从以上的xdebug输出信息，我们看到原有的数组元素和新添加的数组元素关联到同一个&quot;refcount&quot;&lt;em&gt;2&lt;/em&gt;的zval变量容器. 尽管 Xdebug的输出显示两个值为&lt;em&gt;''life''&lt;/em&gt;的 zval 变量容器，其实是同一个。 函数&lt;span class=&quot;function&quot;&gt;&lt;span&gt;xdebug_debug_zval()&lt;/span&gt;&lt;/span&gt;不显示这个信息，但是你能通过显示内存指针信息来看到。\r\n	&lt;/p&gt;\r\n	&lt;p class=&quot;para&quot;&gt;\r\n		删除数组中的一个元素，就是类似于从作用域中删除一个变量. 删除后,数组中的这个元素所在的容器的“refcount”值减少，同样，当“refcount”为0时，这个变量容器就从内存中被删除，下面又一个例子可以说明：\r\n	&lt;/p&gt;\r\n	&lt;div class=&quot;example&quot; id=&quot;example-402&quot; style=&quot;margin:1.5rem 0px;&quot;&gt;\r\n		&lt;p&gt;\r\n			&lt;span&gt;Example #7 从数组中删除一个元素&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;div class=&quot;phpcode&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php\r\n$a = array( ''meaning'' =&amp;gt; ''life'', ''number'' =&amp;gt; 42 );\r\n$a[''life''] = $a[''meaning''];\r\nunset( $a[''meaning''], $a[''number''] );\r\nxdebug_debug_zval( ''a'' );\r\n?&amp;gt;&lt;/pre&gt;\r\n&lt;br /&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;p&gt;\r\n				以上例程的输出类似于：\r\n			&lt;/p&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents screen&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n			&lt;div class=&quot;cdata&quot;&gt;\r\n&lt;pre&gt;a: (refcount=1, is_ref=0)=array (\r\n   ''life'' =&amp;gt; (refcount=1, is_ref=0)=''life''\r\n)\r\n&lt;/pre&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;p class=&quot;para&quot;&gt;\r\n		现在，当我们添加一个数组本身作为这个数组的元素时，事情就变得有趣，下个例子将说明这个。例中我们加入了引用操作符，否则php将生成一个复制。\r\n	&lt;/p&gt;\r\n	&lt;div class=&quot;example&quot; id=&quot;example-403&quot; style=&quot;margin:1.5rem 0px;&quot;&gt;\r\n		&lt;p&gt;\r\n			&lt;span&gt;Example #8 把数组作为一个元素添加到自己&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;div class=&quot;phpcode&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n&lt;pre class=&quot;prettyprint lang-php&quot;&gt;&amp;lt;?php\r\n$a = array( ''one'' );\r\n$a[] =&amp;amp; $a;\r\nxdebug_debug_zval( ''a'' );\r\n?&amp;gt;&lt;/pre&gt;\r\n&lt;br /&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;p&gt;\r\n				以上例程的输出类似于：\r\n			&lt;/p&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents screen&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n			&lt;div class=&quot;cdata&quot;&gt;\r\n&lt;pre&gt;a: (refcount=2, is_ref=1)=array (\r\n   0 =&amp;gt; (refcount=1, is_ref=0)=''one'',\r\n   1 =&amp;gt; (refcount=2, is_ref=1)=...\r\n)\r\n&lt;/pre&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;p&gt;\r\n				图示：\r\n			&lt;/p&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;mediaobject&quot;&gt;\r\n			&lt;div class=&quot;imageobject&quot;&gt;\r\n				&lt;img src=&quot;http://php.net/manual/zh/images/12f37b1c6963c1c5c18f30495416a197-loop-array.png&quot; alt=&quot;自引用(curcular reference,自己是自己的一个元素)的数组的zval&quot; width=&quot;533&quot; height=&quot;144&quot; /&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n	&lt;p class=&quot;para&quot;&gt;\r\n		能看到数组变量 (a) 同时也是这个数组的第二个元素(1) 指向的变量容器中“refcount”为&amp;nbsp;&lt;em&gt;2&lt;/em&gt;。上面的输出结果中的&quot;...&quot;说明发生了递归操作, 显然在这种情况下意味着&quot;...&quot;指向原始数组。\r\n	&lt;/p&gt;\r\n	&lt;p class=&quot;para&quot;&gt;\r\n		跟刚刚一样，对一个变量调用unset，将删除这个符号，且它指向的变量容器中的引用次数也减1。所以，如果我们在执行完上面的代码后，对变量$a调用unset, 那么变量&amp;nbsp;$a&amp;nbsp;和数组元素 &quot;1&quot; 所指向的变量容器的引用次数减1, 从&quot;2&quot;变成&quot;1&quot;. 下例可以说明:\r\n	&lt;/p&gt;\r\n	&lt;div class=&quot;example&quot; id=&quot;example-404&quot; style=&quot;margin:1.5rem 0px;&quot;&gt;\r\n		&lt;p&gt;\r\n			&lt;span&gt;Example #9 Unsetting&amp;nbsp;$a&lt;/span&gt;\r\n		&lt;/p&gt;\r\n		&lt;div class=&quot;example-contents screen&quot; style=&quot;padding:0.75rem;background-color:#FFFFFF;&quot;&gt;\r\n			&lt;div class=&quot;cdata&quot;&gt;\r\n&lt;pre&gt;(refcount=1, is_ref=1)=array (\r\n   0 =&amp;gt; (refcount=1, is_ref=0)=''one'',\r\n   1 =&amp;gt; (refcount=1, is_ref=1)=...\r\n)\r\n&lt;/pre&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;example-contents&quot;&gt;\r\n			&lt;p&gt;\r\n				图示：\r\n			&lt;/p&gt;\r\n		&lt;/div&gt;\r\n		&lt;div class=&quot;mediaobject&quot;&gt;\r\n			&lt;div class=&quot;imageobject&quot;&gt;\r\n				&lt;img src=&quot;http://php.net/manual/zh/images/12f37b1c6963c1c5c18f30495416a197-leak-array.png&quot; alt=&quot;Zvals after removal of array with a circular reference demonstrating the memory leak&quot; width=&quot;463&quot; height=&quot;144&quot; /&gt;\r\n			&lt;/div&gt;\r\n		&lt;/div&gt;\r\n	&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;sect2&quot; id=&quot;features.gc.cleanup-problems&quot; style=&quot;color:#333333;font-family:&amp;quot;font-size:16px;background-color:#F2F2F2;&quot;&gt;\r\n	&lt;h3 class=&quot;title&quot; style=&quot;font-size:1.25rem;font-weight:500;color:#793862;&quot;&gt;\r\n		清理变量容器的问题(Cleanup Problems)\r\n	&lt;/h3&gt;\r\n	&lt;p class=&quot;para&quot;&gt;\r\n		尽管不再有某个作用域中的任何符号指向这个结构(就是变量容器)，由于数组元素“1”仍然指向数组本身，所以这个容器不能被清除 。因为没有另外的符号指向它，用户没有办法清除这个结构，结果就会导致内存泄漏。庆幸的是，php将在脚本执行结束时清除这个数据结构，但是在php清除之前，将耗费不少内存。如果你要实现分析算法，或者要做其他像一个子元素指向它的父元素这样的事情，这种情况就会经常发生。当然，同样的情况也会发生在对象上，实际上对象更有可能出现这种情况，因为对象总是隐式的被引用。\r\n	&lt;/p&gt;\r\n	&lt;p class=&quot;para&quot;&gt;\r\n		如果上面的情况发生仅仅一两次倒没什么，但是如果出现几千次，甚至几十万次的内存泄漏，这显然是个大问题。这样的问题往往发生在长时间运行的脚本中，比如请求基本上不会结束的守护进程(deamons)或者单元测试中的大的套件(sets)中。后者的例子：在给巨大的eZ(一个知名的PHP Library) 组件库的模板组件做单元测试时，就可能会出现问题。有时测试可能需要耗用2GB的内存，而测试服务器很可能没有这么大的内存。\r\n	&lt;/p&gt;\r\n&lt;/div&gt;', 1, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(20) NOT NULL,
  `cdesc` varchar(100) NOT NULL,
  `corder` int(10) unsigned NOT NULL DEFAULT '0',
  `ctime` int(11) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`cid`, `cname`, `cdesc`, `corder`, `ctime`) VALUES
(1, 'PHP', 'PHP有关信息', 1, 1471621012);

-- --------------------------------------------------------

--
-- 表的结构 `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `rid` int(11) NOT NULL AUTO_INCREMENT,
  `raid` int(11) NOT NULL,
  `remail` varchar(50) NOT NULL,
  `rname` varchar(20) NOT NULL,
  `rcontent` varchar(50) NOT NULL,
  `rtime` int(11) NOT NULL,
  `rstatus` int(1) NOT NULL DEFAULT '0',
  `rip` varchar(20) NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `info` text NOT NULL,
  `regtime` int(11) NOT NULL,
  `lasttime` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `name`, `mail`, `password`, `info`, `regtime`, `lasttime`, `image`) VALUES
(1, 'taoxin', '', '209afd815b14acfa4943be0491e4757c', '', 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `zan`
--

CREATE TABLE IF NOT EXISTS `zan` (
  `zid` int(11) NOT NULL AUTO_INCREMENT,
  `zaid` int(11) DEFAULT NULL,
  `zip` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`zid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `zan`
--

INSERT INTO `zan` (`zid`, `zaid`, `zip`) VALUES
(1, 1, '182.18.73.136'),
(2, 1, '106.2.209.173'),
(3, 1, '106.2.209.173'),
(4, 2, '182.18.73.133'),
(5, 2, '182.18.73.133'),
(6, 2, '182.18.73.133'),
(7, 2, '182.18.73.133'),
(8, 2, '182.18.73.135'),
(9, 2, '182.18.73.135'),
(10, 1, '182.18.73.140');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
