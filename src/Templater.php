<?php
namespace RusaDrako\templater;

/**  */
class Templater{

	public $data=[];
	public $root_folder=[];


	/** Загружает переменную в шаблонизатор
	 * @param string $name Имя переменной в шаблонизаторе
	 * @param string|array|object $value Значение переменной
	 */
	public function addRootFolder($folder) {
		if (!in_array($folder, $this->root_folder)) {
			$this->root_folder[]=$folder;
		}
	}


	/** Загружает переменную в шаблонизатор
	 * @param string $name Имя переменной в шаблонизаторе
	 * @param string|array|object $value Значение переменной
	 */
	public function assign($name, $value) {
		$this->data[$name]=$value;
	}


	/** Выводит указанный шаблон
	 * @param string $link Ссылка на файл шаблона
	 */
	public function display($link, array $data=[]){
		echo $this->render($link, $data);
	}


	/** Возвращает html-код указанного шаблона
	 * @param string $link Ссылка на файл шаблона
	 */
	public function render($link, array $data=[]){
		foreach($data as $k=>$v){
			$this->assign($k, $v);
		}
		foreach($this->root_folder as $v){
			$file="{$v}/{$link}.php";
			if(file_exists($file)){
				$obj=new render($this);
				$obj->setDataArr($this->data);
				# Задаём объект шаблонизатора
				$obj->setData('templater', $this);
				return $obj->render($file);
			}
		}
		throw new \Exception("Шаблон '{$link}' не найден", 1);
	}


/**/
}
