<?php
class Product{
	private $_id;
	private $_category = 0;
	private $_label;
	private $_description;
	private $_price;
	/**
	 * @return the $_id
	 */
	public function getId() {
		return $this->_id;
	}

	/**
	 * @return the $_category
	 */
	public function getCategory() {
		return $this->_category;
	}

	/**
	 * @return the $_label
	 */
	public function getLabel() {
		return $this->_label;
	}

	/**
	 * @return the $_description
	 */
	public function getDescription() {
		return $this->_description;
	}

	/**
	 * @return the $_price
	 */
	public function getPrice() {
		return $this->_price;
	}

	/**
	 * @param field_type $_id
	 */
	public function setId($_id) {
		$this->_id = $_id;
	}

	/**
	 * @param field_type $_category
	 */
	public function setCategory($_category) {
		$this->_category = $_category;
	}

	/**
	 * @param field_type $_label
	 */
	public function setLabel($_label) {
		$this->_label = $_label;
	}

	/**
	 * @param field_type $_description
	 */
	public function setDescription($_description) {
		$this->_description = $_description;
	}

	/**
	 * @param field_type $_price
	 */
	public function setPrice($_price) {
		$this->_price = $_price;
	}

	
	
}