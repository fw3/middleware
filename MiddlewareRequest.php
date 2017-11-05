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

namespace fw3\middleware;

/**
 * ミドルウェアリクエストを実現するための基礎的な機能を提供します。
 *
 * @category	Flywheel2
 * @package		other
 * @author		wakaba <wakabadou@gmail.com>
 * @license		http://opensource.org/licenses/MIT The MIT License MIT
 * @varsion		1.0.0
 */
class MiddlewareRequest {
	/**
	 * ミドルウェアリクエストを初期化し返します。
	 *
	 * @return	MiddlewareRequest	自身のインスタンス
	 */
	public static function init ($request = []) {
		$instance	= new static;
		foreach ($request as $name => $value) {
			$instance->$name = $value;
		}
		return $instance;
	}
}
