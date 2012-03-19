/*!
* jQuery lightweight plugin boilerplate
* Original author: @ajpiano
* Further changes, comments: @addyosmani
* Licensed under the MIT license
*/

;(function ( $, window, document, undefined ) {

	var pluginName = 'defaultPluginName',
	    defaults = {
			propertyName: 'value',
			onComplete: function() {
				console.log('Complete');
			}
		};

	function Plugin( element, options ) {
		this.element = element;
		this.options = $.extend( {}, defaults, options);

		this._defaults = defaults;
		this._name = pluginName;

		this.init();
	}

	Plugin.prototype.init = function () {
		if (bool === false) {
			this._name.replace(/[^a-zA-Z\s]+/, '');
		}
	};

	$.fn[pluginName] = function ( options ) {
		return this.each(function () {
			if (!$.data(this, 'plugin_' + pluginName)) {
				$.data(this, 'plugin_' + pluginName,
				new Plugin( this, options ));
			}
		});
	}

})( jQuery, window, document );