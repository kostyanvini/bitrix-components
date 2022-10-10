<?

use Bitrix\Main\Localization\Loc;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
}

$this->setFrameMode(false);

$timerId = "countdown-timer-" . $this->randString();

$endDays = date_create($arParams['COUNTDOWN_DATE']);
$currentDate = date_create();
$diffDays = date_diff($endDays, $currentDate);
?>

<div id="<?= $timerId ?>" class="countdown-timer">
	<? if ($arParams['TIMER_TITLE'] != ''): ?>
		<div class="countdown-timer__title">
			<?= $arParams['TIMER_TITLE'] ?>
		</div>
	<? endif; ?>
	<div class="countdown-timer__items">
		<div class="countdown-timer__item">
			<div class="countdown-timer__item-value countdown-timer_days"></div>
			<div class="countdown-timer__item-name">
				<?= $this->getComponent()->getNumEnding($diffDays->days, Loc::getMessage('COMPONENT_TEMPLATE_COUNTDOWN_DAYS')) ?>
			</div>
		</div>
		<svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg"
		     class="countdown-timer__splitter">
			<rect width="4" height="4" fill="#212529"/>
			<rect y="14" width="4" height="4" fill="#212529"/>
		</svg>
		<div class="countdown-timer__item">
			<div class="countdown-timer__item-value countdown-timer_hours"></div>
			<div class="countdown-timer__item-name">
				<?= Loc::getMessage('COMPONENT_TEMPLATE_COUNTDOWN_HOURS') ?>
			</div>
		</div>
		<svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg"
		     class="countdown-timer__splitter">
			<rect width="4" height="4" fill="#212529"/>
			<rect y="14" width="4" height="4" fill="#212529"/>
		</svg>
		<div class="countdown-timer__item">
			<div class="countdown-timer__item-value countdown-timer_minutes"></div>
			<div class="countdown-timer__item-name">
				<?= Loc::getMessage('COMPONENT_TEMPLATE_COUNTDOWN_MINUTES') ?>
			</div>
		</div>
		<svg width="4" height="18" viewBox="0 0 4 18" fill="none" xmlns="http://www.w3.org/2000/svg"
		     class="countdown-timer__splitter">
			<rect width="4" height="4" fill="#212529"/>
			<rect y="14" width="4" height="4" fill="#212529"/>
		</svg>
		<div class="countdown-timer__item">
			<div class="countdown-timer__item-value countdown-timer_seconds"></div>
			<div class="countdown-timer__item-name">
				<?= Loc::getMessage('COMPONENT_TEMPLATE_COUNTDOWN_SECONDS') ?>
			</div>
		</div>
	</div>
</div>
<script>
	new BX.Citrus.CountDownTimer({
		timer: '<?=$timerId?>',
		timeEnd: '<?= $arParams['COUNTDOWN_DATE'] ?>'
	});
</script>