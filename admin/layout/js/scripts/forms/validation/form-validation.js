/*=========================================================================================
  File Name: form-validation.js
  Description: jquery bootsreap validation js
  ----------------------------------------------------------------------------------------
  Item Name: Vuexy  - Vuejs, HTML & Laravel Admin Dashboard Template
  Author: Error 404
  Author URL: http://www.themeforest.net/user/Error 404
==========================================================================================*/

(function(window, document, $) {
  'use strict';

  // Input, Select, Textarea validations except submit button
  $("input,select,textarea").not("[type=submit]").jqBootstrapValidation();

})(window, document, jQuery);
