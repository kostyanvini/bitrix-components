BX.namespace('BX.Components.CountDownTimer');

/**
 * @description Простой таймер обратного отсчета
 * @param {Object} settings
 * @param {String} [settings.timer=null] - id таймера
 * @param {String} [settings.timeEnd=null] - Строка даты окончания
 * @constructor
 * @return CountDownTimer
 */
BX.Components.CountDownTimer = function (settings) {
	this.interval = null;

	this.timer = document.getElementById(settings.timer) || null;
	this.timeEnd = settings.timeEnd || null;

	if (!this.timer || !this.timeEnd) {
		return console.warn('CountDownTimer is not initialize');
	}

	this.days = 0;
	this.hours = 0;
	this.minutes = 0;
	this.seconds = 0;

	this.preRender();
	this.start();
}

BX.Components.CountDownTimer.prototype.start = function () {
	var _this = this;

	this.interval = setInterval(function () {
		_this.setTime();
		_this.render();
	}, 1000);
}

BX.Components.CountDownTimer.prototype.setTime = function () {
	var countDownDate = new Date((this.timeEnd).replace(/-/g, "/"));

	var utcDateNow = new Date(
		new Date().getUTCFullYear(), 
		new Date().getUTCMonth(), 
		new Date().getUTCDate(),
		new Date().getUTCHours(),
		new Date().getUTCMinutes(),
		new Date().getUTCSeconds(),
		new Date().getUTCMilliseconds()
	);

	var endTime = countDownDate - utcDateNow;

	if (endTime <= 0) {
		clearInterval(this.interval);
		return;
	}

	this.days = Math.floor(endTime / (1000 * 60 * 60 * 24));
	this.hours = Math.floor((endTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	this.minutes = Math.floor((endTime % (1000 * 60 * 60)) / (1000 * 60));
	this.seconds = Math.floor((endTime % (1000 * 60)) / 1000);
}

BX.Components.CountDownTimer.prototype.render = function () {
	this.timer.querySelector('.countdown-timer_days').innerHTML = this.days < 10 ? '0' + this.days : this.days;
	this.timer.querySelector('.countdown-timer_hours').innerHTML = this.hours < 10 ? '0' + this.hours : this.hours;
	this.timer.querySelector('.countdown-timer_minutes').innerHTML = this.minutes < 10 ? '0' + this.minutes : this.minutes;
	this.timer.querySelector('.countdown-timer_seconds').innerHTML = this.seconds < 10 ? '0' + this.seconds : this.seconds;
}

BX.Components.CountDownTimer.prototype.preRender = function () {
	this.setTime();
	this.render();
}