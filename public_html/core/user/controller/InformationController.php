<?php

namespace core\user\controller;

use core\admin\model\Model;
use core\base\controller\BaseController;


class InformationController extends BaseUser
{

	protected function inputData()
	{
		// Выпуск №120
		parent::inputData();

		//$data = [];

		if (!empty($this->menu['information-bottom'])) {

			foreach ($this->menu['information-bottom'] as $item) {

				if ($item['alias'] === ($this->parameters['alias'])) {

					$infoData['name'] = $item['name'];
					$infoData['content'] = $item['content'];
				}
			}
		}
		return compact('infoData');
	}
}
