<?php

/**
 * My Application
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */



/**
 * Homepage presenter.
 *
 * @author     John Doe
 * @package    MyApplication
 */
class HomepagePresenter extends BasePresenter
{

	/**
	 * Example form factory
	 * @return AppForm
	 */
	protected function createComponentExampleForm()
	{
		$form = new AppForm;

		$form->addTextarea("text", "Text", 110, 20)
			->getControlPrototype()->class("texyla");

		$form->addSubmit("s", "Submit");

		return $form;
	}

}
