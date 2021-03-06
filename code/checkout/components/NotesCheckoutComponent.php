<?php

class NotesCheckoutComponent extends CheckoutComponent{

	public function getFormFields(Order $order) {
		return new FieldList(
			TextareaField::create("Notes", _t("CheckoutField.NOTES", "Message"))
		);
	}

	public function validateData(Order $order, array $data) {

	}

	public function setData(Order $order, array $data) {
		if(isset($data['Notes'])){
			$order->Notes = $data['Notes'];
		}
		//TODO: save this to an order log

		$order->write();
	}

	public function getData(Order $order) {
		return array(
			'Notes' => $order->Notes
		);
	}

}
