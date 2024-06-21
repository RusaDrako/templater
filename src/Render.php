<?php
namespace RusaDrako\templater;

/**  */
class render{
	/** @var array Данные для шаблона */
	protected $_data=[];

	/** Обращение к переменным из шаблона */
	public function __get($name) {
		if (key_exists($name, $this->_data)) {
			return $this->_data[$name];
		}
	}

	/** Загружает массив переменных в шаблонизатор
	 * @param string $name Имя переменной в шаблонизаторе
	 * @param string|array|object $value Значение переменной
	 */
	public function setDataArr($arrayData) {
		foreach($arrayData as $k=>$v){
			$this->setData($k, $v);
		}
	}

	/** Загружает переменную в шаблонизатор
	 * @param string $name Имя переменной в шаблонизаторе
	 * @param string|array|object $value Значение переменной
	 */
	public function setData($name, $value) {
		$this->_data[$name]=$value;
	}

	/** Возвращает html-код указанного шаблона
	 * @param string $link Ссылка на файл шаблона
	 */
	public function render($fullLink) {
		ob_start();
		include($fullLink);
		$out = ob_get_clean();
		return $out;
	}


/**/
}
