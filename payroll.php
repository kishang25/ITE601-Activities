<?php

class payroll {

	private string $fname = "John";
	private string $lname = "Volta";

	private float $tax = 50;
	private float $salary = 500;


	public function computeNet() {

		return $net = $this->salary - $this->tax; 

	｝

	public function getEmployeeName() : string { 

		return $employee = $this->fname. " " . $this->lname;

	｝

		$payroll = new payroll();

			echo "Employee Name: ". $payroll->getEmployeeName() . "‹br/›"; 
			echo "Net: ". $payroll->computeNet();


?>

