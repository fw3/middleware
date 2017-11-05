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
 * ミドルウェアレスポンスを実現するための基礎的な機能を提供します。
 *
 * @category	Flywheel3
 * @package		middleware
 * @author		wakaba <wakabadou@gmail.com>
 * @license		http://opensource.org/licenses/MIT The MIT License MIT
 * @varsion		1.0.0
 */
class MiddlewareResponse {
	/**
	 * @var	array	スキップ対象とするミドルウェアクラス
	 */
	protected $skipMiddlewareClassList	= [];

	/**
	 * ミドルウェアレスポンスを初期化し返します。
	 *
	 * @return	MiddlewareResponse	自身のインスタンス
	 */
	public static function init ($response = []) {
		$instance	= new static;
		foreach ($response as $name => $value) {
			$instance->$name = $value;
		}
		return $instance;
	}

	/**
	 * スキップ対象とするミドルウェアクラスを設定、取得します。
	 *
	 * @param	array	...$args	スキップ対象とするミドルウェアクラス
	 * @return	array|\fw3\middleware\MiddlewareResponse
	 */
	public function skipMiddlewareClass (...$args) {
		if (empty($args)) {
			return $this->skipMiddlewareClassList;
		}
		foreach ($args as $class_name) {
			$this->skipMiddlewareClassList[$class_name]	= $class_name;
		}
		return $this;
	}

	/**
	 * ミドルウェアクラスをスキップ対象から外します。
	 *
	 * @param	array	...$args	スキップ対象から外すミドルウェアクラス
	 * @return	\fw3\middleware\MiddlewareResponse
	 */
	public function removeSkipMiddlewareClass (...$args) {
		foreach ($args as $class_name) {
			if (isset($this->skipMiddlewareClassList[$class_name])) {
				unset($this->skipMiddlewareClassList[$class_name]);
			}
		}
		return $this;
	}
}
