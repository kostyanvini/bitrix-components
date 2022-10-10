<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

/**
 * Class CCountdownTimer
 */
class CCountdownTimer extends CBitrixComponent
{
	public function onPrepareComponentParams($arParams)
	{
		if (!empty($arParams['COUNTDOWN_DATE'])) {
			$arParams['COUNTDOWN_DATE'] = date_format(new DateTime($arParams['COUNTDOWN_DATE']), 'm-d-Y H:i:s');
		}
		return $arParams;
	}

	public function executeComponent()
	{
		$this->includeComponentTemplate();
	}

	/**
	 * @param $number int
	 * @param $endingArray array - Строка, например день|дня|дней
	 * @return mixed|string
	 */
	public function getNumEnding($number, $endingArray)
	{
		$number = $number % 100;
		if ($number >= 11 && $number <= 19) {
			$ending = explode('|', $endingArray)[2];
		} else {
			$i = $number % 10;
			switch ($i) {
				case (1):
					$ending = explode('|', $endingArray)[0];
					break;
				case (2):
				case (3):
				case (4):
					$ending = explode('|', $endingArray)[1];
					break;
				default:
					$ending = explode('|', $endingArray)[2];
			}
		}
		return $ending;
	}
}