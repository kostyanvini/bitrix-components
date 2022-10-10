function onSetCountDownDate(arParams) {
	arParams.oInput.type = "text";
	arParams.oInput.onclick = BX.delegate(function () {
		BX.calendar({
			node: arParams.oInput,
			field: arParams.oInput,
			callback_after: function () {
				arParams.oInput.value = arParams.oInput.value;
			}
		});
		return false;
	});
}