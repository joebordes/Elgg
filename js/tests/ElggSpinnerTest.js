define(function(require) {

	var spinner = require('elgg/spinner');
	var elgg = require('elgg');
	var visible_selector = 'body.elgg-spinner-active';

	describe("elgg/spinner", function() {
		beforeEach(function () {
			spinner.stop();
		});

		it("indicator is in the DOM", function () {
			expect($('.elgg-spinner').length).toBe(1);
		});

		it("start() doesn't add the body class immediately", function() {
			expect($(visible_selector).length).toBe(0);
			spinner.start();
			expect($(visible_selector).length).toBe(0);
		});

		it("start() adds the body class after 20ms", function() {
			expect($(visible_selector).length).toBe(0);
			var flag = false;

			runs(function() {
				spinner.start();

				setTimeout(function() {
					flag = true;
				}, 25);
			});

			waitsFor(function() {
				return flag;
			});

			runs(function() {
				expect($(visible_selector).length).toBe(1);
			});
		});

		it("stop() removes the body class", function() {
			var flag = false;

			runs(function() {
				spinner.start();

				setTimeout(function() {
					flag = true;
				}, 25);
			});

			waitsFor(function() {
				return flag;
			});

			runs(function() {
				expect($(visible_selector).length).toBe(1);
				spinner.stop();
				expect($(visible_selector).length).toBe(0);
			});
		});
	});
});
