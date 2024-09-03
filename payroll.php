<?php

class payroll {

	private string $fname = "John";
	private string $lname = "Volta";

	private float $tax = 50;
	private float $salary = 500;


	public function computeNet() {

		$sub = $this->salary - $this->tax; 

	｝

	public function getEmployeeName() : string { 

		return $this->fname . " " . $this->lname;

	｝

	public function displayNet() : string {

		return number_format ($this->computeNet(),2);		

	｝

		$payroll = new payroll();

			echo "Employee Name: ". $payroll->getEmployeeName() . "‹br/›"; 
			echo "Net: ". $payroll->displayNet();


?>

