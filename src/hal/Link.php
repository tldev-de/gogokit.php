<?php

namespace Viagogo\Hal;

use Viagogo\Common\ViagogoModel;

/**
 *
 */
class Link extends ViagogoModel {
	protected $href;
	protected $title;
	protected $templated;

	public function getHref() {
		return $this->href;
	}

	public function getTitle() {
		return $this->title;
	}

	public function getIsTemplated() {
		return $this->isTemplated;
	}
}