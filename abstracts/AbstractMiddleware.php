<?php
/** ______ _                _               _ ____
 * |  ____| |              | |             | |___ \
 * | |__  | |_   ___      _| |__   ___  ___| | __) |
 * |  __| | | | | \ \ /\ / / '_ \ / _ \/ _ \ ||__ <
 * | |    | | |_| |\ V  V /| | | |  __/  __/ |___) |
 * |_|    |_|\__, | \_/\_/ |_| |_|\___|\___|_|____/
 *            __/ |
 *           |___/
 *
 * Flywheel3: the inertia rad php framework
 *
 * @category	Flywheel3
 * @package		middleware
 * @author		wakaba <wakabadou@gmail.com>
 * @copyright	2011- Wakabadou honpo (http://www.wakabadou.net/) / Project ICKX (http://www.ickx.jp/)
 * @license		http://opensource.org/licenses/MIT The MIT License MIT
 * @varsion		1.0.0
 * ASCII Art by Text to ASCII Art Generator (TAAG): http://patorjk.com/software/taag/#p=display&f=Big&t=Flywheel3
 */

namespace fw3\middleware\abstracts;

/**
 * ミドルウェアを実現するための基底クラスを定義します。
 *
 * @category	Flywheel3
 * @package		middleware
 * @author		wakaba <wakabadou@gmail.com>
 * @license		http://opensource.org/licenses/MIT The MIT License MIT
 * @varsion		1.0.0
 */
abstract class AbstractsMiddleware implements fw3\middleware\interfaces\IMiddleware{
	/**
	 * ミドルウェアを初期化し返します。
	 *
	 * @return	Middleware	自身のインスタンス
	 */
	public static function init () {
		return new static;
	}

	/**
	 * invoke
	 *
	 * @param	MiddlewareRequest	$request
	 * @param	MiddlewareResponse	$response
	 * @param	Middleware			$next
	 * @return	mixed				ミドルウェアの実行結果
	 */
	public function __invoke($request, $response, $next) {
		return $next($request, $response);
	}
}
