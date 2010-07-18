<?php

/**
 * My Application
 *
 * @copyright  Copyright (c) 2010 John Doe
 * @package    MyApplication
 */



/**
 * Base class for all application presenters.
 *
 * @author     John Doe
 * @package    MyApplication
 */
abstract class BasePresenter extends Presenter
{

    /** @var bool */
    public $oldLayoutMode = false;


    protected function createComponentTexyla()
	{
		$texyla = new TexylaLoader;

		$texyla->filters[] = array(
			"baseUri" => Environment::getVariable("baseUri"),
			"previewPath" => $this->link("Texyla:preview"),
			"filesPath" => $this->link("Texyla:listFiles"),
			"filesUploadPath" => $this->link("Texyla:upload"),
			"filesMkDirPath" => $this->link("Texyla:mkDir"),
			"filesRenamePath" => $this->link("Texyla:rename"),
			"filesDeletePath" => $this->link("Texyla:delete"),
		);

		$texyla->addFile(WWW_DIR . "/js/texyla-init.js");

		return $texyla;
	}

}
