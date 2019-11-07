/**
 * @file
 * Contains the Siteimprove Plugin methods.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  var siteimprove = {
    input: function () {
      this.url = drupalSettings.siteimprove.input.url;
      this.method = 'input';
      this.common();
    },
    domain: function () {
      this.url = drupalSettings.siteimprove.domain.url;
      this.method = 'domain';
      this.common();
    },
    recheck: function () {
      this.url = drupalSettings.siteimprove.recheck.url;
      this.method = 'recheck';
      this.common();
    },
    recrawl: function () {
      this.url = drupalSettings.siteimprove.recrawl.url;
      this.method = 'recrawl';
      this.common();
    },
    common: function () {
      var _si = window._si || [];
      _si.push([this.method, this.url, drupalSettings.siteimprove.token]);
    },
    events: {
      recheck: function () {
        $('.recheck-button').click(function () {
          siteimprove.recheck();
          $(this).attr('disabled', true);
          $(this).addClass('form-button-disabled');
          return false;
        });
      }
    }
  };


  Drupal.behaviors.siteimprove = {
    attach: function (context, settings) {

      $('body', context).once('siteimprove').each(function () {

        // If exist recheck, call recheck Siteimprove method.
        if (typeof settings.siteimprove.recheck !== 'undefined') {
          if (settings.siteimprove.recheck.auto) {
            siteimprove.recheck();
          }
          siteimprove.events.recheck();
        }

        // If exist input, call input Siteimprove method.
        if (typeof settings.siteimprove.input !== 'undefined') {
          if (settings.siteimprove.input.auto) {
            siteimprove.input();
          }
        }

        // If exist domain, call input Siteimprove method.
        if (typeof settings.siteimprove.domain !== 'undefined') {
          if (settings.siteimprove.domain.auto) {
            siteimprove.domain();
          }
        }

        // If exist recrawl, call input Siteimprove method.
        if (typeof settings.siteimprove.recrawl !== 'undefined') {
          if (settings.siteimprove.recrawl.auto) {
            siteimprove.recrawl();
          }
        }

      });

    }
  };

})(jQuery, Drupal, drupalSettings);
;
!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):"object"==typeof module&&module.exports?module.exports=t(require("jquery")):t(jQuery)}(function(t){t.extend(t.fn,{validate:function(e){if(this.length){var i=t.data(this[0],"validator");return i||(this.attr("novalidate","novalidate"),i=new t.validator(e,this[0]),t.data(this[0],"validator",i),i.settings.onsubmit&&(this.on("click.validate",":submit",function(e){i.submitButton=e.currentTarget,t(this).hasClass("cancel")&&(i.cancelSubmit=!0),void 0!==t(this).attr("formnovalidate")&&(i.cancelSubmit=!0)}),this.on("submit.validate",function(e){function s(){var s,n;return i.submitButton&&(i.settings.submitHandler||i.formSubmitted)&&(s=t("<input type='hidden'/>").attr("name",i.submitButton.name).val(t(i.submitButton).val()).appendTo(i.currentForm)),!i.settings.submitHandler||(n=i.settings.submitHandler.call(i,i.currentForm,e),s&&s.remove(),void 0!==n&&n)}return i.settings.debug&&e.preventDefault(),i.cancelSubmit?(i.cancelSubmit=!1,s()):i.form()?i.pendingRequest?(i.formSubmitted=!0,!1):s():(i.focusInvalid(),!1)})),i)}e&&e.debug&&window.console&&console.warn("Nothing selected, can't validate, returning nothing.")},valid:function(){var e,i,s;return t(this[0]).is("form")?e=this.validate().form():(s=[],e=!0,i=t(this[0].form).validate(),this.each(function(){(e=i.element(this)&&e)||(s=s.concat(i.errorList))}),i.errorList=s),e},rules:function(e,i){var s,n,r,a,o,l,h=this[0];if(null!=h&&(!h.form&&h.hasAttribute("contenteditable")&&(h.form=this.closest("form")[0],h.name=this.attr("name")),null!=h.form)){if(e)switch(s=t.data(h.form,"validator").settings,n=s.rules,r=t.validator.staticRules(h),e){case"add":t.extend(r,t.validator.normalizeRule(i)),delete r.messages,n[h.name]=r,i.messages&&(s.messages[h.name]=t.extend(s.messages[h.name],i.messages));break;case"remove":return i?(l={},t.each(i.split(/\s/),function(t,e){l[e]=r[e],delete r[e]}),l):(delete n[h.name],r)}return(a=t.validator.normalizeRules(t.extend({},t.validator.classRules(h),t.validator.attributeRules(h),t.validator.dataRules(h),t.validator.staticRules(h)),h)).required&&(o=a.required,delete a.required,a=t.extend({required:o},a)),a.remote&&(o=a.remote,delete a.remote,a=t.extend(a,{remote:o})),a}}}),t.extend(t.expr.pseudos||t.expr[":"],{blank:function(e){return!t.trim(""+t(e).val())},filled:function(e){var i=t(e).val();return null!==i&&!!t.trim(""+i)},unchecked:function(e){return!t(e).prop("checked")}}),t.validator=function(e,i){this.settings=t.extend(!0,{},t.validator.defaults,e),this.currentForm=i,this.init()},t.validator.format=function(e,i){return 1===arguments.length?function(){var i=t.makeArray(arguments);return i.unshift(e),t.validator.format.apply(this,i)}:void 0===i?e:(arguments.length>2&&i.constructor!==Array&&(i=t.makeArray(arguments).slice(1)),i.constructor!==Array&&(i=[i]),t.each(i,function(t,i){e=e.replace(new RegExp("\\{"+t+"\\}","g"),function(){return i})}),e)},t.extend(t.validator,{defaults:{messages:{},groups:{},rules:{},errorClass:"error",pendingClass:"pending",validClass:"valid",errorElement:"label",focusCleanup:!1,focusInvalid:!0,errorContainer:t([]),errorLabelContainer:t([]),onsubmit:!0,ignore:":hidden",ignoreTitle:!1,onfocusin:function(t){this.lastActive=t,this.settings.focusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,t,this.settings.errorClass,this.settings.validClass),this.hideThese(this.errorsFor(t)))},onfocusout:function(t){this.checkable(t)||!(t.name in this.submitted)&&this.optional(t)||this.element(t)},onkeyup:function(e,i){var s=[16,17,18,20,35,36,37,38,39,40,45,144,225];9===i.which&&""===this.elementValue(e)||-1!==t.inArray(i.keyCode,s)||(e.name in this.submitted||e.name in this.invalid)&&this.element(e)},onclick:function(t){t.name in this.submitted?this.element(t):t.parentNode.name in this.submitted&&this.element(t.parentNode)},highlight:function(e,i,s){"radio"===e.type?this.findByName(e.name).addClass(i).removeClass(s):t(e).addClass(i).removeClass(s)},unhighlight:function(e,i,s){"radio"===e.type?this.findByName(e.name).removeClass(i).addClass(s):t(e).removeClass(i).addClass(s)}},setDefaults:function(e){t.extend(t.validator.defaults,e)},messages:{required:"This field is required.",remote:"Please fix this field.",email:"Please enter a valid email address.",url:"Please enter a valid URL.",date:"Please enter a valid date.",dateISO:"Please enter a valid date (ISO).",number:"Please enter a valid number.",digits:"Please enter only digits.",equalTo:"Please enter the same value again.",maxlength:t.validator.format("Please enter no more than {0} characters."),minlength:t.validator.format("Please enter at least {0} characters."),rangelength:t.validator.format("Please enter a value between {0} and {1} characters long."),range:t.validator.format("Please enter a value between {0} and {1}."),max:t.validator.format("Please enter a value less than or equal to {0}."),min:t.validator.format("Please enter a value greater than or equal to {0}."),step:t.validator.format("Please enter a multiple of {0}.")},autoCreateRanges:!1,prototype:{init:function(){function e(e){!this.form&&this.hasAttribute("contenteditable")&&(this.form=t(this).closest("form")[0],this.name=t(this).attr("name"));var i=t.data(this.form,"validator"),s="on"+e.type.replace(/^validate/,""),n=i.settings;n[s]&&!t(this).is(n.ignore)&&n[s].call(i,this,e)}this.labelContainer=t(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainer||t(this.currentForm),this.containers=t(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var i,s=this.groups={};t.each(this.settings.groups,function(e,i){"string"==typeof i&&(i=i.split(/\s/)),t.each(i,function(t,i){s[i]=e})}),i=this.settings.rules,t.each(i,function(e,s){i[e]=t.validator.normalizeRule(s)}),t(this.currentForm).on("focusin.validate focusout.validate keyup.validate",":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'], [type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox'], [contenteditable], [type='button']",e).on("click.validate","select, option, [type='radio'], [type='checkbox']",e),this.settings.invalidHandler&&t(this.currentForm).on("invalid-form.validate",this.settings.invalidHandler)},form:function(){return this.checkForm(),t.extend(this.submitted,this.errorMap),this.invalid=t.extend({},this.errorMap),this.valid()||t(this.currentForm).triggerHandler("invalid-form",[this]),this.showErrors(),this.valid()},checkForm:function(){this.prepareForm();for(var t=0,e=this.currentElements=this.elements();e[t];t++)this.check(e[t]);return this.valid()},element:function(e){var i,s,n=this.clean(e),r=this.validationTargetFor(n),a=this,o=!0;return void 0===r?delete this.invalid[n.name]:(this.prepareElement(r),this.currentElements=t(r),(s=this.groups[r.name])&&t.each(this.groups,function(t,e){e===s&&t!==r.name&&(n=a.validationTargetFor(a.clean(a.findByName(t))))&&n.name in a.invalid&&(a.currentElements.push(n),o=a.check(n)&&o)}),i=!1!==this.check(r),o=o&&i,this.invalid[r.name]=!i,this.numberOfInvalids()||(this.toHide=this.toHide.add(this.containers)),this.showErrors(),t(e).attr("aria-invalid",!i)),o},showErrors:function(e){if(e){var i=this;t.extend(this.errorMap,e),this.errorList=t.map(this.errorMap,function(t,e){return{message:t,element:i.findByName(e)[0]}}),this.successList=t.grep(this.successList,function(t){return!(t.name in e)})}this.settings.showErrors?this.settings.showErrors.call(this,this.errorMap,this.errorList):this.defaultShowErrors()},resetForm:function(){t.fn.resetForm&&t(this.currentForm).resetForm(),this.invalid={},this.submitted={},this.prepareForm(),this.hideErrors();var e=this.elements().removeData("previousValue").removeAttr("aria-invalid");this.resetElements(e)},resetElements:function(t){var e;if(this.settings.unhighlight)for(e=0;t[e];e++)this.settings.unhighlight.call(this,t[e],this.settings.errorClass,""),this.findByName(t[e].name).removeClass(this.settings.validClass);else t.removeClass(this.settings.errorClass).removeClass(this.settings.validClass)},numberOfInvalids:function(){return this.objectLength(this.invalid)},objectLength:function(t){var e,i=0;for(e in t)void 0!==t[e]&&null!==t[e]&&!1!==t[e]&&i++;return i},hideErrors:function(){this.hideThese(this.toHide)},hideThese:function(t){t.not(this.containers).text(""),this.addWrapper(t).hide()},valid:function(){return 0===this.size()},size:function(){return this.errorList.length},focusInvalid:function(){if(this.settings.focusInvalid)try{t(this.findLastActive()||this.errorList.length&&this.errorList[0].element||[]).filter(":visible").focus().trigger("focusin")}catch(t){}},findLastActive:function(){var e=this.lastActive;return e&&1===t.grep(this.errorList,function(t){return t.element.name===e.name}).length&&e},elements:function(){var e=this,i={};return t(this.currentForm).find("input, select, textarea, [contenteditable]").not(":submit, :reset, :image, :disabled").not(this.settings.ignore).filter(function(){var s=this.name||t(this).attr("name");return!s&&e.settings.debug&&window.console&&console.error("%o has no name assigned",this),this.hasAttribute("contenteditable")&&(this.form=t(this).closest("form")[0],this.name=s),!(s in i||!e.objectLength(t(this).rules()))&&(i[s]=!0,!0)})},clean:function(e){return t(e)[0]},errors:function(){var e=this.settings.errorClass.split(" ").join(".");return t(this.settings.errorElement+"."+e,this.errorContext)},resetInternals:function(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=t([]),this.toHide=t([])},reset:function(){this.resetInternals(),this.currentElements=t([])},prepareForm:function(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElement:function(t){this.reset(),this.toHide=this.errorsFor(t)},elementValue:function(e){var i,s,n=t(e),r=e.type;return"radio"===r||"checkbox"===r?this.findByName(e.name).filter(":checked").val():"number"===r&&void 0!==e.validity?e.validity.badInput?"NaN":n.val():(i=e.hasAttribute("contenteditable")?n.text():n.val(),"file"===r?"C:\\fakepath\\"===i.substr(0,12)?i.substr(12):(s=i.lastIndexOf("/"))>=0?i.substr(s+1):(s=i.lastIndexOf("\\"))>=0?i.substr(s+1):i:"string"==typeof i?i.replace(/\r/g,""):i)},check:function(e){e=this.validationTargetFor(this.clean(e));var i,s,n,r,a=t(e).rules(),o=t.map(a,function(t,e){return e}).length,l=!1,h=this.elementValue(e);if("function"==typeof a.normalizer?r=a.normalizer:"function"==typeof this.settings.normalizer&&(r=this.settings.normalizer),r){if("string"!=typeof(h=r.call(e,h)))throw new TypeError("The normalizer should return a string value.");delete a.normalizer}for(s in a){n={method:s,parameters:a[s]};try{if("dependency-mismatch"===(i=t.validator.methods[s].call(this,h,e,n.parameters))&&1===o){l=!0;continue}if(l=!1,"pending"===i)return void(this.toHide=this.toHide.not(this.errorsFor(e)));if(!i)return this.formatAndAdd(e,n),!1}catch(t){throw this.settings.debug&&window.console&&console.log("Exception occurred when checking element "+e.id+", check the '"+n.method+"' method.",t),t instanceof TypeError&&(t.message+=".  Exception occurred when checking element "+e.id+", check the '"+n.method+"' method."),t}}if(!l)return this.objectLength(a)&&this.successList.push(e),!0},customDataMessage:function(e,i){return t(e).data("msg"+i.charAt(0).toUpperCase()+i.substring(1).toLowerCase())||t(e).data("msg")},customMessage:function(t,e){var i=this.settings.messages[t];return i&&(i.constructor===String?i:i[e])},findDefined:function(){for(var t=0;t<arguments.length;t++)if(void 0!==arguments[t])return arguments[t]},defaultMessage:function(e,i){"string"==typeof i&&(i={method:i});var s=this.findDefined(this.customMessage(e.name,i.method),this.customDataMessage(e,i.method),!this.settings.ignoreTitle&&e.title||void 0,t.validator.messages[i.method],"<strong>Warning: No message defined for "+e.name+"</strong>"),n=/\$?\{(\d+)\}/g;return"function"==typeof s?s=s.call(this,i.parameters,e):n.test(s)&&(s=t.validator.format(s.replace(n,"{$1}"),i.parameters)),s},formatAndAdd:function(t,e){var i=this.defaultMessage(t,e);this.errorList.push({message:i,element:t,method:e.method}),this.errorMap[t.name]=i,this.submitted[t.name]=i},addWrapper:function(t){return this.settings.wrapper&&(t=t.add(t.parent(this.settings.wrapper))),t},defaultShowErrors:function(){var t,e,i;for(t=0;this.errorList[t];t++)i=this.errorList[t],this.settings.highlight&&this.settings.highlight.call(this,i.element,this.settings.errorClass,this.settings.validClass),this.showLabel(i.element,i.message);if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(t=0;this.successList[t];t++)this.showLabel(this.successList[t]);if(this.settings.unhighlight)for(t=0,e=this.validElements();e[t];t++)this.settings.unhighlight.call(this,e[t],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElements:function(){return this.currentElements.not(this.invalidElements())},invalidElements:function(){return t(this.errorList).map(function(){return this.element})},showLabel:function(e,i){var s,n,r,a,o=this.errorsFor(e),l=this.idOrName(e),h=t(e).attr("aria-describedby");o.length?(o.removeClass(this.settings.validClass).addClass(this.settings.errorClass),o.html(i)):(s=o=t("<"+this.settings.errorElement+">").attr("id",l+"-error").addClass(this.settings.errorClass).html(i||""),this.settings.wrapper&&(s=o.hide().show().wrap("<"+this.settings.wrapper+"/>").parent()),this.labelContainer.length?this.labelContainer.append(s):this.settings.errorPlacement?this.settings.errorPlacement.call(this,s,t(e)):s.insertAfter(e),o.is("label")?o.attr("for",l):0===o.parents("label[for='"+this.escapeCssMeta(l)+"']").length&&(r=o.attr("id"),h?h.match(new RegExp("\\b"+this.escapeCssMeta(r)+"\\b"))||(h+=" "+r):h=r,t(e).attr("aria-describedby",h),(n=this.groups[e.name])&&(a=this,t.each(a.groups,function(e,i){i===n&&t("[name='"+a.escapeCssMeta(e)+"']",a.currentForm).attr("aria-describedby",o.attr("id"))})))),!i&&this.settings.success&&(o.text(""),"string"==typeof this.settings.success?o.addClass(this.settings.success):this.settings.success(o,e)),this.toShow=this.toShow.add(o)},errorsFor:function(e){var i=this.escapeCssMeta(this.idOrName(e)),s=t(e).attr("aria-describedby"),n="label[for='"+i+"'], label[for='"+i+"'] *";return s&&(n=n+", #"+this.escapeCssMeta(s).replace(/\s+/g,", #")),this.errors().filter(n)},escapeCssMeta:function(t){return t.replace(/([\\!"#$%&'()*+,./:;<=>?@\[\]^`{|}~])/g,"\\$1")},idOrName:function(t){return this.groups[t.name]||(this.checkable(t)?t.name:t.id||t.name)},validationTargetFor:function(e){return this.checkable(e)&&(e=this.findByName(e.name)),t(e).not(this.settings.ignore)[0]},checkable:function(t){return/radio|checkbox/i.test(t.type)},findByName:function(e){return t(this.currentForm).find("[name='"+this.escapeCssMeta(e)+"']")},getLength:function(e,i){switch(i.nodeName.toLowerCase()){case"select":return t("option:selected",i).length;case"input":if(this.checkable(i))return this.findByName(i.name).filter(":checked").length}return e.length},depend:function(t,e){return!this.dependTypes[typeof t]||this.dependTypes[typeof t](t,e)},dependTypes:{boolean:function(t){return t},string:function(e,i){return!!t(e,i.form).length},function:function(t,e){return t(e)}},optional:function(e){var i=this.elementValue(e);return!t.validator.methods.required.call(this,i,e)&&"dependency-mismatch"},startRequest:function(e){this.pending[e.name]||(this.pendingRequest++,t(e).addClass(this.settings.pendingClass),this.pending[e.name]=!0)},stopRequest:function(e,i){this.pendingRequest--,this.pendingRequest<0&&(this.pendingRequest=0),delete this.pending[e.name],t(e).removeClass(this.settings.pendingClass),i&&0===this.pendingRequest&&this.formSubmitted&&this.form()?(t(this.currentForm).submit(),this.submitButton&&t("input:hidden[name='"+this.submitButton.name+"']",this.currentForm).remove(),this.formSubmitted=!1):!i&&0===this.pendingRequest&&this.formSubmitted&&(t(this.currentForm).triggerHandler("invalid-form",[this]),this.formSubmitted=!1)},previousValue:function(e,i){return i="string"==typeof i&&i||"remote",t.data(e,"previousValue")||t.data(e,"previousValue",{old:null,valid:!0,message:this.defaultMessage(e,{method:i})})},destroy:function(){this.resetForm(),t(this.currentForm).off(".validate").removeData("validator").find(".validate-equalTo-blur").off(".validate-equalTo").removeClass("validate-equalTo-blur")}},classRuleSettings:{required:{required:!0},email:{email:!0},url:{url:!0},date:{date:!0},dateISO:{dateISO:!0},number:{number:!0},digits:{digits:!0},creditcard:{creditcard:!0}},addClassRules:function(e,i){e.constructor===String?this.classRuleSettings[e]=i:t.extend(this.classRuleSettings,e)},classRules:function(e){var i={},s=t(e).attr("class");return s&&t.each(s.split(" "),function(){this in t.validator.classRuleSettings&&t.extend(i,t.validator.classRuleSettings[this])}),i},normalizeAttributeRule:function(t,e,i,s){/min|max|step/.test(i)&&(null===e||/number|range|text/.test(e))&&(s=Number(s),isNaN(s)&&(s=void 0)),s||0===s?t[i]=s:e===i&&"range"!==e&&(t[i]=!0)},attributeRules:function(e){var i,s,n={},r=t(e),a=e.getAttribute("type");for(i in t.validator.methods)"required"===i?(""===(s=e.getAttribute(i))&&(s=!0),s=!!s):s=r.attr(i),this.normalizeAttributeRule(n,a,i,s);return n.maxlength&&/-1|2147483647|524288/.test(n.maxlength)&&delete n.maxlength,n},dataRules:function(e){var i,s,n={},r=t(e),a=e.getAttribute("type");for(i in t.validator.methods)s=r.data("rule"+i.charAt(0).toUpperCase()+i.substring(1).toLowerCase()),this.normalizeAttributeRule(n,a,i,s);return n},staticRules:function(e){var i={},s=t.data(e.form,"validator");return s.settings.rules&&(i=t.validator.normalizeRule(s.settings.rules[e.name])||{}),i},normalizeRules:function(e,i){return t.each(e,function(s,n){if(!1!==n){if(n.param||n.depends){var r=!0;switch(typeof n.depends){case"string":r=!!t(n.depends,i.form).length;break;case"function":r=n.depends.call(i,i)}r?e[s]=void 0===n.param||n.param:(t.data(i.form,"validator").resetElements(t(i)),delete e[s])}}else delete e[s]}),t.each(e,function(s,n){e[s]=t.isFunction(n)&&"normalizer"!==s?n(i):n}),t.each(["minlength","maxlength"],function(){e[this]&&(e[this]=Number(e[this]))}),t.each(["rangelength","range"],function(){var i;e[this]&&(t.isArray(e[this])?e[this]=[Number(e[this][0]),Number(e[this][1])]:"string"==typeof e[this]&&(i=e[this].replace(/[\[\]]/g,"").split(/[\s,]+/),e[this]=[Number(i[0]),Number(i[1])]))}),t.validator.autoCreateRanges&&(null!=e.min&&null!=e.max&&(e.range=[e.min,e.max],delete e.min,delete e.max),null!=e.minlength&&null!=e.maxlength&&(e.rangelength=[e.minlength,e.maxlength],delete e.minlength,delete e.maxlength)),e},normalizeRule:function(e){if("string"==typeof e){var i={};t.each(e.split(/\s/),function(){i[this]=!0}),e=i}return e},addMethod:function(e,i,s){t.validator.methods[e]=i,t.validator.messages[e]=void 0!==s?s:t.validator.messages[e],i.length<3&&t.validator.addClassRules(e,t.validator.normalizeRule(e))},methods:{required:function(e,i,s){if(!this.depend(s,i))return"dependency-mismatch";if("select"===i.nodeName.toLowerCase()){var n=t(i).val();return n&&n.length>0}return this.checkable(i)?this.getLength(e,i)>0:e.length>0},email:function(t,e){return this.optional(e)||/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(t)},url:function(t,e){return this.optional(e)||/^(?:(?:(?:https?|ftp):)?\/\/)(?:\S+(?::\S*)?@)?(?:(?!(?:10|127)(?:\.\d{1,3}){3})(?!(?:169\.254|192\.168)(?:\.\d{1,3}){2})(?!172\.(?:1[6-9]|2\d|3[0-1])(?:\.\d{1,3}){2})(?:[1-9]\d?|1\d\d|2[01]\d|22[0-3])(?:\.(?:1?\d{1,2}|2[0-4]\d|25[0-5])){2}(?:\.(?:[1-9]\d?|1\d\d|2[0-4]\d|25[0-4]))|(?:(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)(?:\.(?:[a-z\u00a1-\uffff0-9]-*)*[a-z\u00a1-\uffff0-9]+)*(?:\.(?:[a-z\u00a1-\uffff]{2,})).?)(?::\d{2,5})?(?:[/?#]\S*)?$/i.test(t)},date:function(t,e){return this.optional(e)||!/Invalid|NaN/.test(new Date(t).toString())},dateISO:function(t,e){return this.optional(e)||/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(t)},number:function(t,e){return this.optional(e)||/^(?:-?\d+|-?\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)},digits:function(t,e){return this.optional(e)||/^\d+$/.test(t)},minlength:function(e,i,s){var n=t.isArray(e)?e.length:this.getLength(e,i);return this.optional(i)||n>=s},maxlength:function(e,i,s){var n=t.isArray(e)?e.length:this.getLength(e,i);return this.optional(i)||n<=s},rangelength:function(e,i,s){var n=t.isArray(e)?e.length:this.getLength(e,i);return this.optional(i)||n>=s[0]&&n<=s[1]},min:function(t,e,i){return this.optional(e)||t>=i},max:function(t,e,i){return this.optional(e)||t<=i},range:function(t,e,i){return this.optional(e)||t>=i[0]&&t<=i[1]},step:function(e,i,s){var n,r=t(i).attr("type"),a="Step attribute on input type "+r+" is not supported.",o=["text","number","range"],l=new RegExp("\\b"+r+"\\b"),h=function(t){var e=(""+t).match(/(?:\.(\d+))?$/);return e&&e[1]?e[1].length:0},u=function(t){return Math.round(t*Math.pow(10,n))},d=!0;if(r&&!l.test(o.join()))throw new Error(a);return n=h(s),(h(e)>n||u(e)%u(s)!=0)&&(d=!1),this.optional(i)||d},equalTo:function(e,i,s){var n=t(s);return this.settings.onfocusout&&n.not(".validate-equalTo-blur").length&&n.addClass("validate-equalTo-blur").on("blur.validate-equalTo",function(){t(i).valid()}),e===n.val()},remote:function(e,i,s,n){if(this.optional(i))return"dependency-mismatch";n="string"==typeof n&&n||"remote";var r,a,o,l=this.previousValue(i,n);return this.settings.messages[i.name]||(this.settings.messages[i.name]={}),l.originalMessage=l.originalMessage||this.settings.messages[i.name][n],this.settings.messages[i.name][n]=l.message,s="string"==typeof s&&{url:s}||s,o=t.param(t.extend({data:e},s.data)),l.old===o?l.valid:(l.old=o,r=this,this.startRequest(i),a={},a[i.name]=e,t.ajax(t.extend(!0,{mode:"abort",port:"validate"+i.name,dataType:"json",data:a,context:r.currentForm,success:function(t){var s,a,o,h=!0===t||"true"===t;r.settings.messages[i.name][n]=l.originalMessage,h?(o=r.formSubmitted,r.resetInternals(),r.toHide=r.errorsFor(i),r.formSubmitted=o,r.successList.push(i),r.invalid[i.name]=!1,r.showErrors()):(s={},a=t||r.defaultMessage(i,{method:n,parameters:e}),s[i.name]=l.message=a,r.invalid[i.name]=!0,r.showErrors(s)),l.valid=h,r.stopRequest(i,h)}},s)),"pending")}}});var e,i={};return t.ajaxPrefilter?t.ajaxPrefilter(function(t,e,s){var n=t.port;"abort"===t.mode&&(i[n]&&i[n].abort(),i[n]=s)}):(e=t.ajax,t.ajax=function(s){var n=("mode"in s?s:t.ajaxSettings).mode,r=("port"in s?s:t.ajaxSettings).port;return"abort"===n?(i[r]&&i[r].abort(),i[r]=e.apply(this,arguments),i[r]):e.apply(this,arguments)}),t});;
if("undefined"==typeof jQuery)throw new Error("Bootstrap's JavaScript requires jQuery");+function(t){"use strict";var e=jQuery.fn.jquery.split(" ")[0].split(".");if(e[0]<2&&e[1]<9||1==e[0]&&9==e[1]&&e[2]<1||e[0]>3)throw new Error("Bootstrap's JavaScript requires jQuery version 1.9.1 or higher, but lower than version 4")}(),function(t){"use strict";function e(){var t=document.createElement("bootstrap"),e={WebkitTransition:"webkitTransitionEnd",MozTransition:"transitionend",OTransition:"oTransitionEnd otransitionend",transition:"transitionend"};for(var i in e)if(void 0!==t.style[i])return{end:e[i]};return!1}t.fn.emulateTransitionEnd=function(e){var i=!1,o=this;t(this).one("bsTransitionEnd",function(){i=!0});return setTimeout(function(){i||t(o).trigger(t.support.transition.end)},e),this},t(function(){t.support.transition=e(),t.support.transition&&(t.event.special.bsTransitionEnd={bindType:t.support.transition.end,delegateType:t.support.transition.end,handle:function(e){if(t(e.target).is(this))return e.handleObj.handler.apply(this,arguments)}})})}(jQuery),function(t){"use strict";var e='[data-dismiss="alert"]',i=function(i){t(i).on("click",e,this.close)};i.VERSION="3.3.7",i.TRANSITION_DURATION=150,i.prototype.close=function(e){function o(){a.detach().trigger("closed.bs.alert").remove()}var n=t(this),s=n.attr("data-target");s||(s=(s=n.attr("href"))&&s.replace(/.*(?=#[^\s]*$)/,""));var a=t("#"===s?[]:s);e&&e.preventDefault(),a.length||(a=n.closest(".alert")),a.trigger(e=t.Event("close.bs.alert")),e.isDefaultPrevented()||(a.removeClass("in"),t.support.transition&&a.hasClass("fade")?a.one("bsTransitionEnd",o).emulateTransitionEnd(i.TRANSITION_DURATION):o())};var o=t.fn.alert;t.fn.alert=function(e){return this.each(function(){var o=t(this),n=o.data("bs.alert");n||o.data("bs.alert",n=new i(this)),"string"==typeof e&&n[e].call(o)})},t.fn.alert.Constructor=i,t.fn.alert.noConflict=function(){return t.fn.alert=o,this},t(document).on("click.bs.alert.data-api",e,i.prototype.close)}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var o=t(this),n=o.data("bs.button"),s="object"==typeof e&&e;n||o.data("bs.button",n=new i(this,s)),"toggle"==e?n.toggle():e&&n.setState(e)})}var i=function(e,o){this.$element=t(e),this.options=t.extend({},i.DEFAULTS,o),this.isLoading=!1};i.VERSION="3.3.7",i.DEFAULTS={loadingText:"loading..."},i.prototype.setState=function(e){var i="disabled",o=this.$element,n=o.is("input")?"val":"html",s=o.data();e+="Text",null==s.resetText&&o.data("resetText",o[n]()),setTimeout(t.proxy(function(){o[n](null==s[e]?this.options[e]:s[e]),"loadingText"==e?(this.isLoading=!0,o.addClass(i).attr(i,i).prop(i,!0)):this.isLoading&&(this.isLoading=!1,o.removeClass(i).removeAttr(i).prop(i,!1))},this),0)},i.prototype.toggle=function(){var t=!0,e=this.$element.closest('[data-toggle="buttons"]');if(e.length){var i=this.$element.find("input");"radio"==i.prop("type")?(i.prop("checked")&&(t=!1),e.find(".active").removeClass("active"),this.$element.addClass("active")):"checkbox"==i.prop("type")&&(i.prop("checked")!==this.$element.hasClass("active")&&(t=!1),this.$element.toggleClass("active")),i.prop("checked",this.$element.hasClass("active")),t&&i.trigger("change")}else this.$element.attr("aria-pressed",!this.$element.hasClass("active")),this.$element.toggleClass("active")};var o=t.fn.button;t.fn.button=e,t.fn.button.Constructor=i,t.fn.button.noConflict=function(){return t.fn.button=o,this},t(document).on("click.bs.button.data-api",'[data-toggle^="button"]',function(i){var o=t(i.target).closest(".btn");e.call(o,"toggle"),t(i.target).is('input[type="radio"], input[type="checkbox"]')||(i.preventDefault(),o.is("input,button")?o.trigger("focus"):o.find("input:visible,button:visible").first().trigger("focus"))}).on("focus.bs.button.data-api blur.bs.button.data-api",'[data-toggle^="button"]',function(e){t(e.target).closest(".btn").toggleClass("focus",/^focus(in)?$/.test(e.type))})}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var o=t(this),n=o.data("bs.carousel"),s=t.extend({},i.DEFAULTS,o.data(),"object"==typeof e&&e),a="string"==typeof e?e:s.slide;n||o.data("bs.carousel",n=new i(this,s)),"number"==typeof e?n.to(e):a?n[a]():s.interval&&n.pause().cycle()})}var i=function(e,i){this.$element=t(e),this.$indicators=this.$element.find(".carousel-indicators"),this.options=i,this.paused=null,this.sliding=null,this.interval=null,this.$active=null,this.$items=null,this.options.keyboard&&this.$element.on("keydown.bs.carousel",t.proxy(this.keydown,this)),"hover"==this.options.pause&&!("ontouchstart"in document.documentElement)&&this.$element.on("mouseenter.bs.carousel",t.proxy(this.pause,this)).on("mouseleave.bs.carousel",t.proxy(this.cycle,this))};i.VERSION="3.3.7",i.TRANSITION_DURATION=600,i.DEFAULTS={interval:5e3,pause:"hover",wrap:!0,keyboard:!0},i.prototype.keydown=function(t){if(!/input|textarea/i.test(t.target.tagName)){switch(t.which){case 37:this.prev();break;case 39:this.next();break;default:return}t.preventDefault()}},i.prototype.cycle=function(e){return e||(this.paused=!1),this.interval&&clearInterval(this.interval),this.options.interval&&!this.paused&&(this.interval=setInterval(t.proxy(this.next,this),this.options.interval)),this},i.prototype.getItemIndex=function(t){return this.$items=t.parent().children(".item"),this.$items.index(t||this.$active)},i.prototype.getItemForDirection=function(t,e){var i=this.getItemIndex(e);if(("prev"==t&&0===i||"next"==t&&i==this.$items.length-1)&&!this.options.wrap)return e;var o=(i+("prev"==t?-1:1))%this.$items.length;return this.$items.eq(o)},i.prototype.to=function(t){var e=this,i=this.getItemIndex(this.$active=this.$element.find(".item.active"));if(!(t>this.$items.length-1||t<0))return this.sliding?this.$element.one("slid.bs.carousel",function(){e.to(t)}):i==t?this.pause().cycle():this.slide(t>i?"next":"prev",this.$items.eq(t))},i.prototype.pause=function(e){return e||(this.paused=!0),this.$element.find(".next, .prev").length&&t.support.transition&&(this.$element.trigger(t.support.transition.end),this.cycle(!0)),this.interval=clearInterval(this.interval),this},i.prototype.next=function(){if(!this.sliding)return this.slide("next")},i.prototype.prev=function(){if(!this.sliding)return this.slide("prev")},i.prototype.slide=function(e,o){var n=this.$element.find(".item.active"),s=o||this.getItemForDirection(e,n),a=this.interval,r="next"==e?"left":"right",l=this;if(s.hasClass("active"))return this.sliding=!1;var h=s[0],d=t.Event("slide.bs.carousel",{relatedTarget:h,direction:r});if(this.$element.trigger(d),!d.isDefaultPrevented()){if(this.sliding=!0,a&&this.pause(),this.$indicators.length){this.$indicators.find(".active").removeClass("active");var p=t(this.$indicators.children()[this.getItemIndex(s)]);p&&p.addClass("active")}var c=t.Event("slid.bs.carousel",{relatedTarget:h,direction:r});return t.support.transition&&this.$element.hasClass("slide")?(s.addClass(e),s[0].offsetWidth,n.addClass(r),s.addClass(r),n.one("bsTransitionEnd",function(){s.removeClass([e,r].join(" ")).addClass("active"),n.removeClass(["active",r].join(" ")),l.sliding=!1,setTimeout(function(){l.$element.trigger(c)},0)}).emulateTransitionEnd(i.TRANSITION_DURATION)):(n.removeClass("active"),s.addClass("active"),this.sliding=!1,this.$element.trigger(c)),a&&this.cycle(),this}};var o=t.fn.carousel;t.fn.carousel=e,t.fn.carousel.Constructor=i,t.fn.carousel.noConflict=function(){return t.fn.carousel=o,this};var n=function(i){var o,n=t(this),s=t(n.attr("data-target")||(o=n.attr("href"))&&o.replace(/.*(?=#[^\s]+$)/,""));if(s.hasClass("carousel")){var a=t.extend({},s.data(),n.data()),r=n.attr("data-slide-to");r&&(a.interval=!1),e.call(s,a),r&&s.data("bs.carousel").to(r),i.preventDefault()}};t(document).on("click.bs.carousel.data-api","[data-slide]",n).on("click.bs.carousel.data-api","[data-slide-to]",n),t(window).on("load",function(){t('[data-ride="carousel"]').each(function(){var i=t(this);e.call(i,i.data())})})}(jQuery),function(t){"use strict";function e(e){var i,o=e.attr("data-target")||(i=e.attr("href"))&&i.replace(/.*(?=#[^\s]+$)/,"");return t(o)}function i(e){return this.each(function(){var i=t(this),n=i.data("bs.collapse"),s=t.extend({},o.DEFAULTS,i.data(),"object"==typeof e&&e);!n&&s.toggle&&/show|hide/.test(e)&&(s.toggle=!1),n||i.data("bs.collapse",n=new o(this,s)),"string"==typeof e&&n[e]()})}var o=function(e,i){this.$element=t(e),this.options=t.extend({},o.DEFAULTS,i),this.$trigger=t('[data-toggle="collapse"][href="#'+e.id+'"],[data-toggle="collapse"][data-target="#'+e.id+'"]'),this.transitioning=null,this.options.parent?this.$parent=this.getParent():this.addAriaAndCollapsedClass(this.$element,this.$trigger),this.options.toggle&&this.toggle()};o.VERSION="3.3.7",o.TRANSITION_DURATION=350,o.DEFAULTS={toggle:!0},o.prototype.dimension=function(){return this.$element.hasClass("width")?"width":"height"},o.prototype.show=function(){if(!this.transitioning&&!this.$element.hasClass("in")){var e,n=this.$parent&&this.$parent.children(".panel").children(".in, .collapsing");if(!(n&&n.length&&(e=n.data("bs.collapse"))&&e.transitioning)){var s=t.Event("show.bs.collapse");if(this.$element.trigger(s),!s.isDefaultPrevented()){n&&n.length&&(i.call(n,"hide"),e||n.data("bs.collapse",null));var a=this.dimension();this.$element.removeClass("collapse").addClass("collapsing")[a](0).attr("aria-expanded",!0),this.$trigger.removeClass("collapsed").attr("aria-expanded",!0),this.transitioning=1;var r=function(){this.$element.removeClass("collapsing").addClass("collapse in")[a](""),this.transitioning=0,this.$element.trigger("shown.bs.collapse")};if(!t.support.transition)return r.call(this);var l=t.camelCase(["scroll",a].join("-"));this.$element.one("bsTransitionEnd",t.proxy(r,this)).emulateTransitionEnd(o.TRANSITION_DURATION)[a](this.$element[0][l])}}}},o.prototype.hide=function(){if(!this.transitioning&&this.$element.hasClass("in")){var e=t.Event("hide.bs.collapse");if(this.$element.trigger(e),!e.isDefaultPrevented()){var i=this.dimension();this.$element[i](this.$element[i]())[0].offsetHeight,this.$element.addClass("collapsing").removeClass("collapse in").attr("aria-expanded",!1),this.$trigger.addClass("collapsed").attr("aria-expanded",!1),this.transitioning=1;var n=function(){this.transitioning=0,this.$element.removeClass("collapsing").addClass("collapse").trigger("hidden.bs.collapse")};if(!t.support.transition)return n.call(this);this.$element[i](0).one("bsTransitionEnd",t.proxy(n,this)).emulateTransitionEnd(o.TRANSITION_DURATION)}}},o.prototype.toggle=function(){this[this.$element.hasClass("in")?"hide":"show"]()},o.prototype.getParent=function(){return t(this.options.parent).find('[data-toggle="collapse"][data-parent="'+this.options.parent+'"]').each(t.proxy(function(i,o){var n=t(o);this.addAriaAndCollapsedClass(e(n),n)},this)).end()},o.prototype.addAriaAndCollapsedClass=function(t,e){var i=t.hasClass("in");t.attr("aria-expanded",i),e.toggleClass("collapsed",!i).attr("aria-expanded",i)};var n=t.fn.collapse;t.fn.collapse=i,t.fn.collapse.Constructor=o,t.fn.collapse.noConflict=function(){return t.fn.collapse=n,this},t(document).on("click.bs.collapse.data-api",'[data-toggle="collapse"]',function(o){var n=t(this);n.attr("data-target")||o.preventDefault();var s=e(n),a=s.data("bs.collapse")?"toggle":n.data();i.call(s,a)})}(jQuery),function(t){"use strict";function e(e){var i=e.attr("data-target");i||(i=(i=e.attr("href"))&&/#[A-Za-z]/.test(i)&&i.replace(/.*(?=#[^\s]*$)/,""));var o=i&&t(i);return o&&o.length?o:e.parent()}function i(i){i&&3===i.which||(t(o).remove(),t(n).each(function(){var o=t(this),n=e(o),s={relatedTarget:this};n.hasClass("open")&&(i&&"click"==i.type&&/input|textarea/i.test(i.target.tagName)&&t.contains(n[0],i.target)||(n.trigger(i=t.Event("hide.bs.dropdown",s)),i.isDefaultPrevented()||(o.attr("aria-expanded","false"),n.removeClass("open").trigger(t.Event("hidden.bs.dropdown",s)))))}))}var o=".dropdown-backdrop",n='[data-toggle="dropdown"]',s=function(e){t(e).on("click.bs.dropdown",this.toggle)};s.VERSION="3.3.7",s.prototype.toggle=function(o){var n=t(this);if(!n.is(".disabled, :disabled")){var s=e(n),a=s.hasClass("open");if(i(),!a){"ontouchstart"in document.documentElement&&!s.closest(".navbar-nav").length&&t(document.createElement("div")).addClass("dropdown-backdrop").insertAfter(t(this)).on("click",i);var r={relatedTarget:this};if(s.trigger(o=t.Event("show.bs.dropdown",r)),o.isDefaultPrevented())return;n.trigger("focus").attr("aria-expanded","true"),s.toggleClass("open").trigger(t.Event("shown.bs.dropdown",r))}return!1}},s.prototype.keydown=function(i){if(/(38|40|27|32)/.test(i.which)&&!/input|textarea/i.test(i.target.tagName)){var o=t(this);if(i.preventDefault(),i.stopPropagation(),!o.is(".disabled, :disabled")){var s=e(o),a=s.hasClass("open");if(!a&&27!=i.which||a&&27==i.which)return 27==i.which&&s.find(n).trigger("focus"),o.trigger("click");var r=s.find(".dropdown-menu li:not(.disabled):visible a");if(r.length){var l=r.index(i.target);38==i.which&&l>0&&l--,40==i.which&&l<r.length-1&&l++,~l||(l=0),r.eq(l).trigger("focus")}}}};var a=t.fn.dropdown;t.fn.dropdown=function(e){return this.each(function(){var i=t(this),o=i.data("bs.dropdown");o||i.data("bs.dropdown",o=new s(this)),"string"==typeof e&&o[e].call(i)})},t.fn.dropdown.Constructor=s,t.fn.dropdown.noConflict=function(){return t.fn.dropdown=a,this},t(document).on("click.bs.dropdown.data-api",i).on("click.bs.dropdown.data-api",".dropdown form",function(t){t.stopPropagation()}).on("click.bs.dropdown.data-api",n,s.prototype.toggle).on("keydown.bs.dropdown.data-api",n,s.prototype.keydown).on("keydown.bs.dropdown.data-api",".dropdown-menu",s.prototype.keydown)}(jQuery),function(t){"use strict";function e(e,o){return this.each(function(){var n=t(this),s=n.data("bs.modal"),a=t.extend({},i.DEFAULTS,n.data(),"object"==typeof e&&e);s||n.data("bs.modal",s=new i(this,a)),"string"==typeof e?s[e](o):a.show&&s.show(o)})}var i=function(e,i){this.options=i,this.$body=t(document.body),this.$element=t(e),this.$dialog=this.$element.find(".modal-dialog"),this.$backdrop=null,this.isShown=null,this.originalBodyPad=null,this.scrollbarWidth=0,this.ignoreBackdropClick=!1,this.options.remote&&this.$element.find(".modal-content").load(this.options.remote,t.proxy(function(){this.$element.trigger("loaded.bs.modal")},this))};i.VERSION="3.3.7",i.TRANSITION_DURATION=300,i.BACKDROP_TRANSITION_DURATION=150,i.DEFAULTS={backdrop:!0,keyboard:!0,show:!0},i.prototype.toggle=function(t){return this.isShown?this.hide():this.show(t)},i.prototype.show=function(e){var o=this,n=t.Event("show.bs.modal",{relatedTarget:e});this.$element.trigger(n),this.isShown||n.isDefaultPrevented()||(this.isShown=!0,this.checkScrollbar(),this.setScrollbar(),this.$body.addClass("modal-open"),this.escape(),this.resize(),this.$element.on("click.dismiss.bs.modal",'[data-dismiss="modal"]',t.proxy(this.hide,this)),this.$dialog.on("mousedown.dismiss.bs.modal",function(){o.$element.one("mouseup.dismiss.bs.modal",function(e){t(e.target).is(o.$element)&&(o.ignoreBackdropClick=!0)})}),this.backdrop(function(){var n=t.support.transition&&o.$element.hasClass("fade");o.$element.parent().length||o.$element.appendTo(o.$body),o.$element.show().scrollTop(0),o.adjustDialog(),n&&o.$element[0].offsetWidth,o.$element.addClass("in"),o.enforceFocus();var s=t.Event("shown.bs.modal",{relatedTarget:e});n?o.$dialog.one("bsTransitionEnd",function(){o.$element.trigger("focus").trigger(s)}).emulateTransitionEnd(i.TRANSITION_DURATION):o.$element.trigger("focus").trigger(s)}))},i.prototype.hide=function(e){e&&e.preventDefault(),e=t.Event("hide.bs.modal"),this.$element.trigger(e),this.isShown&&!e.isDefaultPrevented()&&(this.isShown=!1,this.escape(),this.resize(),t(document).off("focusin.bs.modal"),this.$element.removeClass("in").off("click.dismiss.bs.modal").off("mouseup.dismiss.bs.modal"),this.$dialog.off("mousedown.dismiss.bs.modal"),t.support.transition&&this.$element.hasClass("fade")?this.$element.one("bsTransitionEnd",t.proxy(this.hideModal,this)).emulateTransitionEnd(i.TRANSITION_DURATION):this.hideModal())},i.prototype.enforceFocus=function(){t(document).off("focusin.bs.modal").on("focusin.bs.modal",t.proxy(function(t){document===t.target||this.$element[0]===t.target||this.$element.has(t.target).length||this.$element.trigger("focus")},this))},i.prototype.escape=function(){this.isShown&&this.options.keyboard?this.$element.on("keydown.dismiss.bs.modal",t.proxy(function(t){27==t.which&&this.hide()},this)):this.isShown||this.$element.off("keydown.dismiss.bs.modal")},i.prototype.resize=function(){this.isShown?t(window).on("resize.bs.modal",t.proxy(this.handleUpdate,this)):t(window).off("resize.bs.modal")},i.prototype.hideModal=function(){var t=this;this.$element.hide(),this.backdrop(function(){t.$body.removeClass("modal-open"),t.resetAdjustments(),t.resetScrollbar(),t.$element.trigger("hidden.bs.modal")})},i.prototype.removeBackdrop=function(){this.$backdrop&&this.$backdrop.remove(),this.$backdrop=null},i.prototype.backdrop=function(e){var o=this,n=this.$element.hasClass("fade")?"fade":"";if(this.isShown&&this.options.backdrop){var s=t.support.transition&&n;if(this.$backdrop=t(document.createElement("div")).addClass("modal-backdrop "+n).appendTo(this.$body),this.$element.on("click.dismiss.bs.modal",t.proxy(function(t){this.ignoreBackdropClick?this.ignoreBackdropClick=!1:t.target===t.currentTarget&&("static"==this.options.backdrop?this.$element[0].focus():this.hide())},this)),s&&this.$backdrop[0].offsetWidth,this.$backdrop.addClass("in"),!e)return;s?this.$backdrop.one("bsTransitionEnd",e).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION):e()}else if(!this.isShown&&this.$backdrop){this.$backdrop.removeClass("in");var a=function(){o.removeBackdrop(),e&&e()};t.support.transition&&this.$element.hasClass("fade")?this.$backdrop.one("bsTransitionEnd",a).emulateTransitionEnd(i.BACKDROP_TRANSITION_DURATION):a()}else e&&e()},i.prototype.handleUpdate=function(){this.adjustDialog()},i.prototype.adjustDialog=function(){var t=this.$element[0].scrollHeight>document.documentElement.clientHeight;this.$element.css({paddingLeft:!this.bodyIsOverflowing&&t?this.scrollbarWidth:"",paddingRight:this.bodyIsOverflowing&&!t?this.scrollbarWidth:""})},i.prototype.resetAdjustments=function(){this.$element.css({paddingLeft:"",paddingRight:""})},i.prototype.checkScrollbar=function(){var t=window.innerWidth;if(!t){var e=document.documentElement.getBoundingClientRect();t=e.right-Math.abs(e.left)}this.bodyIsOverflowing=document.body.clientWidth<t,this.scrollbarWidth=this.measureScrollbar()},i.prototype.setScrollbar=function(){var t=parseInt(this.$body.css("padding-right")||0,10);this.originalBodyPad=document.body.style.paddingRight||"",this.bodyIsOverflowing&&this.$body.css("padding-right",t+this.scrollbarWidth)},i.prototype.resetScrollbar=function(){this.$body.css("padding-right",this.originalBodyPad)},i.prototype.measureScrollbar=function(){var t=document.createElement("div");t.className="modal-scrollbar-measure",this.$body.append(t);var e=t.offsetWidth-t.clientWidth;return this.$body[0].removeChild(t),e};var o=t.fn.modal;t.fn.modal=e,t.fn.modal.Constructor=i,t.fn.modal.noConflict=function(){return t.fn.modal=o,this},t(document).on("click.bs.modal.data-api",'[data-toggle="modal"]',function(i){var o=t(this),n=o.attr("href"),s=t(o.attr("data-target")||n&&n.replace(/.*(?=#[^\s]+$)/,"")),a=s.data("bs.modal")?"toggle":t.extend({remote:!/#/.test(n)&&n},s.data(),o.data());o.is("a")&&i.preventDefault(),s.one("show.bs.modal",function(t){t.isDefaultPrevented()||s.one("hidden.bs.modal",function(){o.is(":visible")&&o.trigger("focus")})}),e.call(s,a,this)})}(jQuery),function(t){"use strict";var e=function(t,e){this.type=null,this.options=null,this.enabled=null,this.timeout=null,this.hoverState=null,this.$element=null,this.inState=null,this.init("tooltip",t,e)};e.VERSION="3.3.7",e.TRANSITION_DURATION=150,e.DEFAULTS={animation:!0,placement:"top",selector:!1,template:'<div class="tooltip" role="tooltip"><div class="tooltip-arrow"></div><div class="tooltip-inner"></div></div>',trigger:"hover focus",title:"",delay:0,html:!1,container:!1,viewport:{selector:"body",padding:0}},e.prototype.init=function(e,i,o){if(this.enabled=!0,this.type=e,this.$element=t(i),this.options=this.getOptions(o),this.$viewport=this.options.viewport&&t(t.isFunction(this.options.viewport)?this.options.viewport.call(this,this.$element):this.options.viewport.selector||this.options.viewport),this.inState={click:!1,hover:!1,focus:!1},this.$element[0]instanceof document.constructor&&!this.options.selector)throw new Error("`selector` option must be specified when initializing "+this.type+" on the window.document object!");for(var n=this.options.trigger.split(" "),s=n.length;s--;){var a=n[s];if("click"==a)this.$element.on("click."+this.type,this.options.selector,t.proxy(this.toggle,this));else if("manual"!=a){var r="hover"==a?"mouseenter":"focusin",l="hover"==a?"mouseleave":"focusout";this.$element.on(r+"."+this.type,this.options.selector,t.proxy(this.enter,this)),this.$element.on(l+"."+this.type,this.options.selector,t.proxy(this.leave,this))}}this.options.selector?this._options=t.extend({},this.options,{trigger:"manual",selector:""}):this.fixTitle()},e.prototype.getDefaults=function(){return e.DEFAULTS},e.prototype.getOptions=function(e){return(e=t.extend({},this.getDefaults(),this.$element.data(),e)).delay&&"number"==typeof e.delay&&(e.delay={show:e.delay,hide:e.delay}),e},e.prototype.getDelegateOptions=function(){var e={},i=this.getDefaults();return this._options&&t.each(this._options,function(t,o){i[t]!=o&&(e[t]=o)}),e},e.prototype.enter=function(e){var i=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);if(i||(i=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,i)),e instanceof t.Event&&(i.inState["focusin"==e.type?"focus":"hover"]=!0),i.tip().hasClass("in")||"in"==i.hoverState)i.hoverState="in";else{if(clearTimeout(i.timeout),i.hoverState="in",!i.options.delay||!i.options.delay.show)return i.show();i.timeout=setTimeout(function(){"in"==i.hoverState&&i.show()},i.options.delay.show)}},e.prototype.isInStateTrue=function(){for(var t in this.inState)if(this.inState[t])return!0;return!1},e.prototype.leave=function(e){var i=e instanceof this.constructor?e:t(e.currentTarget).data("bs."+this.type);if(i||(i=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,i)),e instanceof t.Event&&(i.inState["focusout"==e.type?"focus":"hover"]=!1),!i.isInStateTrue()){if(clearTimeout(i.timeout),i.hoverState="out",!i.options.delay||!i.options.delay.hide)return i.hide();i.timeout=setTimeout(function(){"out"==i.hoverState&&i.hide()},i.options.delay.hide)}},e.prototype.show=function(){var i=t.Event("show.bs."+this.type);if(this.hasContent()&&this.enabled){this.$element.trigger(i);var o=t.contains(this.$element[0].ownerDocument.documentElement,this.$element[0]);if(i.isDefaultPrevented()||!o)return;var n=this,s=this.tip(),a=this.getUID(this.type);this.setContent(),s.attr("id",a),this.$element.attr("aria-describedby",a),this.options.animation&&s.addClass("fade");var r="function"==typeof this.options.placement?this.options.placement.call(this,s[0],this.$element[0]):this.options.placement,l=/\s?auto?\s?/i,h=l.test(r);h&&(r=r.replace(l,"")||"top"),s.detach().css({top:0,left:0,display:"block"}).addClass(r).data("bs."+this.type,this),this.options.container?s.appendTo(this.options.container):s.insertAfter(this.$element),this.$element.trigger("inserted.bs."+this.type);var d=this.getPosition(),p=s[0].offsetWidth,c=s[0].offsetHeight;if(h){var f=r,u=this.getPosition(this.$viewport);r="bottom"==r&&d.bottom+c>u.bottom?"top":"top"==r&&d.top-c<u.top?"bottom":"right"==r&&d.right+p>u.width?"left":"left"==r&&d.left-p<u.left?"right":r,s.removeClass(f).addClass(r)}var g=this.getCalculatedOffset(r,d,p,c);this.applyPlacement(g,r);var m=function(){var t=n.hoverState;n.$element.trigger("shown.bs."+n.type),n.hoverState=null,"out"==t&&n.leave(n)};t.support.transition&&this.$tip.hasClass("fade")?s.one("bsTransitionEnd",m).emulateTransitionEnd(e.TRANSITION_DURATION):m()}},e.prototype.applyPlacement=function(e,i){var o=this.tip(),n=o[0].offsetWidth,s=o[0].offsetHeight,a=parseInt(o.css("margin-top"),10),r=parseInt(o.css("margin-left"),10);isNaN(a)&&(a=0),isNaN(r)&&(r=0),e.top+=a,e.left+=r,t.offset.setOffset(o[0],t.extend({using:function(t){o.css({top:Math.round(t.top),left:Math.round(t.left)})}},e),0),o.addClass("in");var l=o[0].offsetWidth,h=o[0].offsetHeight;"top"==i&&h!=s&&(e.top=e.top+s-h);var d=this.getViewportAdjustedDelta(i,e,l,h);d.left?e.left+=d.left:e.top+=d.top;var p=/top|bottom/.test(i),c=p?2*d.left-n+l:2*d.top-s+h,f=p?"offsetWidth":"offsetHeight";o.offset(e),this.replaceArrow(c,o[0][f],p)},e.prototype.replaceArrow=function(t,e,i){this.arrow().css(i?"left":"top",50*(1-t/e)+"%").css(i?"top":"left","")},e.prototype.setContent=function(){var t=this.tip(),e=this.getTitle();t.find(".tooltip-inner")[this.options.html?"html":"text"](e),t.removeClass("fade in top bottom left right")},e.prototype.hide=function(i){function o(){"in"!=n.hoverState&&s.detach(),n.$element&&n.$element.removeAttr("aria-describedby").trigger("hidden.bs."+n.type),i&&i()}var n=this,s=t(this.$tip),a=t.Event("hide.bs."+this.type);if(this.$element.trigger(a),!a.isDefaultPrevented())return s.removeClass("in"),t.support.transition&&s.hasClass("fade")?s.one("bsTransitionEnd",o).emulateTransitionEnd(e.TRANSITION_DURATION):o(),this.hoverState=null,this},e.prototype.fixTitle=function(){var t=this.$element;(t.attr("title")||"string"!=typeof t.attr("data-original-title"))&&t.attr("data-original-title",t.attr("title")||"").attr("title","")},e.prototype.hasContent=function(){return this.getTitle()},e.prototype.getPosition=function(e){var i=(e=e||this.$element)[0],o="BODY"==i.tagName,n=i.getBoundingClientRect();null==n.width&&(n=t.extend({},n,{width:n.right-n.left,height:n.bottom-n.top}));var s=window.SVGElement&&i instanceof window.SVGElement,a=o?{top:0,left:0}:s?null:e.offset(),r={scroll:o?document.documentElement.scrollTop||document.body.scrollTop:e.scrollTop()},l=o?{width:t(window).width(),height:t(window).height()}:null;return t.extend({},n,r,l,a)},e.prototype.getCalculatedOffset=function(t,e,i,o){return"bottom"==t?{top:e.top+e.height,left:e.left+e.width/2-i/2}:"top"==t?{top:e.top-o,left:e.left+e.width/2-i/2}:"left"==t?{top:e.top+e.height/2-o/2,left:e.left-i}:{top:e.top+e.height/2-o/2,left:e.left+e.width}},e.prototype.getViewportAdjustedDelta=function(t,e,i,o){var n={top:0,left:0};if(!this.$viewport)return n;var s=this.options.viewport&&this.options.viewport.padding||0,a=this.getPosition(this.$viewport);if(/right|left/.test(t)){var r=e.top-s-a.scroll,l=e.top+s-a.scroll+o;r<a.top?n.top=a.top-r:l>a.top+a.height&&(n.top=a.top+a.height-l)}else{var h=e.left-s,d=e.left+s+i;h<a.left?n.left=a.left-h:d>a.right&&(n.left=a.left+a.width-d)}return n},e.prototype.getTitle=function(){var t=this.$element,e=this.options;return t.attr("data-original-title")||("function"==typeof e.title?e.title.call(t[0]):e.title)},e.prototype.getUID=function(t){do{t+=~~(1e6*Math.random())}while(document.getElementById(t));return t},e.prototype.tip=function(){if(!this.$tip&&(this.$tip=t(this.options.template),1!=this.$tip.length))throw new Error(this.type+" `template` option must consist of exactly 1 top-level element!");return this.$tip},e.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".tooltip-arrow")},e.prototype.enable=function(){this.enabled=!0},e.prototype.disable=function(){this.enabled=!1},e.prototype.toggleEnabled=function(){this.enabled=!this.enabled},e.prototype.toggle=function(e){var i=this;e&&((i=t(e.currentTarget).data("bs."+this.type))||(i=new this.constructor(e.currentTarget,this.getDelegateOptions()),t(e.currentTarget).data("bs."+this.type,i))),e?(i.inState.click=!i.inState.click,i.isInStateTrue()?i.enter(i):i.leave(i)):i.tip().hasClass("in")?i.leave(i):i.enter(i)},e.prototype.destroy=function(){var t=this;clearTimeout(this.timeout),this.hide(function(){t.$element.off("."+t.type).removeData("bs."+t.type),t.$tip&&t.$tip.detach(),t.$tip=null,t.$arrow=null,t.$viewport=null,t.$element=null})};var i=t.fn.tooltip;t.fn.tooltip=function(i){return this.each(function(){var o=t(this),n=o.data("bs.tooltip"),s="object"==typeof i&&i;!n&&/destroy|hide/.test(i)||(n||o.data("bs.tooltip",n=new e(this,s)),"string"==typeof i&&n[i]())})},t.fn.tooltip.Constructor=e,t.fn.tooltip.noConflict=function(){return t.fn.tooltip=i,this}}(jQuery),function(t){"use strict";var e=function(t,e){this.init("popover",t,e)};if(!t.fn.tooltip)throw new Error("Popover requires tooltip.js");e.VERSION="3.3.7",e.DEFAULTS=t.extend({},t.fn.tooltip.Constructor.DEFAULTS,{placement:"right",trigger:"click",content:"",template:'<div class="popover" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="popover-content"></div></div>'}),e.prototype=t.extend({},t.fn.tooltip.Constructor.prototype),e.prototype.constructor=e,e.prototype.getDefaults=function(){return e.DEFAULTS},e.prototype.setContent=function(){var t=this.tip(),e=this.getTitle(),i=this.getContent();t.find(".popover-title")[this.options.html?"html":"text"](e),t.find(".popover-content").children().detach().end()[this.options.html?"string"==typeof i?"html":"append":"text"](i),t.removeClass("fade top bottom left right in"),t.find(".popover-title").html()||t.find(".popover-title").hide()},e.prototype.hasContent=function(){return this.getTitle()||this.getContent()},e.prototype.getContent=function(){var t=this.$element,e=this.options;return t.attr("data-content")||("function"==typeof e.content?e.content.call(t[0]):e.content)},e.prototype.arrow=function(){return this.$arrow=this.$arrow||this.tip().find(".arrow")};var i=t.fn.popover;t.fn.popover=function(i){return this.each(function(){var o=t(this),n=o.data("bs.popover"),s="object"==typeof i&&i;!n&&/destroy|hide/.test(i)||(n||o.data("bs.popover",n=new e(this,s)),"string"==typeof i&&n[i]())})},t.fn.popover.Constructor=e,t.fn.popover.noConflict=function(){return t.fn.popover=i,this}}(jQuery),function(t){"use strict";function e(i,o){this.$body=t(document.body),this.$scrollElement=t(t(i).is(document.body)?window:i),this.options=t.extend({},e.DEFAULTS,o),this.selector=(this.options.target||"")+" .nav li > a",this.offsets=[],this.targets=[],this.activeTarget=null,this.scrollHeight=0,this.$scrollElement.on("scroll.bs.scrollspy",t.proxy(this.process,this)),this.refresh(),this.process()}function i(i){return this.each(function(){var o=t(this),n=o.data("bs.scrollspy"),s="object"==typeof i&&i;n||o.data("bs.scrollspy",n=new e(this,s)),"string"==typeof i&&n[i]()})}e.VERSION="3.3.7",e.DEFAULTS={offset:10},e.prototype.getScrollHeight=function(){return this.$scrollElement[0].scrollHeight||Math.max(this.$body[0].scrollHeight,document.documentElement.scrollHeight)},e.prototype.refresh=function(){var e=this,i="offset",o=0;this.offsets=[],this.targets=[],this.scrollHeight=this.getScrollHeight(),t.isWindow(this.$scrollElement[0])||(i="position",o=this.$scrollElement.scrollTop()),this.$body.find(this.selector).map(function(){var e=t(this),n=e.data("target")||e.attr("href"),s=/^#./.test(n)&&t(n);return s&&s.length&&s.is(":visible")&&[[s[i]().top+o,n]]||null}).sort(function(t,e){return t[0]-e[0]}).each(function(){e.offsets.push(this[0]),e.targets.push(this[1])})},e.prototype.process=function(){var t,e=this.$scrollElement.scrollTop()+this.options.offset,i=this.getScrollHeight(),o=this.options.offset+i-this.$scrollElement.height(),n=this.offsets,s=this.targets,a=this.activeTarget;if(this.scrollHeight!=i&&this.refresh(),e>=o)return a!=(t=s[s.length-1])&&this.activate(t);if(a&&e<n[0])return this.activeTarget=null,this.clear();for(t=n.length;t--;)a!=s[t]&&e>=n[t]&&(void 0===n[t+1]||e<n[t+1])&&this.activate(s[t])},e.prototype.activate=function(e){this.activeTarget=e,this.clear();var i=this.selector+'[data-target="'+e+'"],'+this.selector+'[href="'+e+'"]',o=t(i).parents("li").addClass("active");o.parent(".dropdown-menu").length&&(o=o.closest("li.dropdown").addClass("active")),o.trigger("activate.bs.scrollspy")},e.prototype.clear=function(){t(this.selector).parentsUntil(this.options.target,".active").removeClass("active")};var o=t.fn.scrollspy;t.fn.scrollspy=i,t.fn.scrollspy.Constructor=e,t.fn.scrollspy.noConflict=function(){return t.fn.scrollspy=o,this},t(window).on("load.bs.scrollspy.data-api",function(){t('[data-spy="scroll"]').each(function(){var e=t(this);i.call(e,e.data())})})}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var o=t(this),n=o.data("bs.tab");n||o.data("bs.tab",n=new i(this)),"string"==typeof e&&n[e]()})}var i=function(e){this.element=t(e)};i.VERSION="3.3.7",i.TRANSITION_DURATION=150,i.prototype.show=function(){var e=this.element,i=e.closest("ul:not(.dropdown-menu)"),o=e.data("target");if(o||(o=(o=e.attr("href"))&&o.replace(/.*(?=#[^\s]*$)/,"")),!e.parent("li").hasClass("active")){var n=i.find(".active:last a"),s=t.Event("hide.bs.tab",{relatedTarget:e[0]}),a=t.Event("show.bs.tab",{relatedTarget:n[0]});if(n.trigger(s),e.trigger(a),!a.isDefaultPrevented()&&!s.isDefaultPrevented()){var r=t(o);this.activate(e.closest("li"),i),this.activate(r,r.parent(),function(){n.trigger({type:"hidden.bs.tab",relatedTarget:e[0]}),e.trigger({type:"shown.bs.tab",relatedTarget:n[0]})})}}},i.prototype.activate=function(e,o,n){function s(){a.removeClass("active").find("> .dropdown-menu > .active").removeClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!1),e.addClass("active").find('[data-toggle="tab"]').attr("aria-expanded",!0),r?(e[0].offsetWidth,e.addClass("in")):e.removeClass("fade"),e.parent(".dropdown-menu").length&&e.closest("li.dropdown").addClass("active").end().find('[data-toggle="tab"]').attr("aria-expanded",!0),n&&n()}var a=o.find("> .active"),r=n&&t.support.transition&&(a.length&&a.hasClass("fade")||!!o.find("> .fade").length);a.length&&r?a.one("bsTransitionEnd",s).emulateTransitionEnd(i.TRANSITION_DURATION):s(),a.removeClass("in")};var o=t.fn.tab;t.fn.tab=e,t.fn.tab.Constructor=i,t.fn.tab.noConflict=function(){return t.fn.tab=o,this};var n=function(i){i.preventDefault(),e.call(t(this),"show")};t(document).on("click.bs.tab.data-api",'[data-toggle="tab"]',n).on("click.bs.tab.data-api",'[data-toggle="pill"]',n)}(jQuery),function(t){"use strict";function e(e){return this.each(function(){var o=t(this),n=o.data("bs.affix"),s="object"==typeof e&&e;n||o.data("bs.affix",n=new i(this,s)),"string"==typeof e&&n[e]()})}var i=function(e,o){this.options=t.extend({},i.DEFAULTS,o),this.$target=t(this.options.target).on("scroll.bs.affix.data-api",t.proxy(this.checkPosition,this)).on("click.bs.affix.data-api",t.proxy(this.checkPositionWithEventLoop,this)),this.$element=t(e),this.affixed=null,this.unpin=null,this.pinnedOffset=null,this.checkPosition()};i.VERSION="3.3.7",i.RESET="affix affix-top affix-bottom",i.DEFAULTS={offset:0,target:window},i.prototype.getState=function(t,e,i,o){var n=this.$target.scrollTop(),s=this.$element.offset(),a=this.$target.height();if(null!=i&&"top"==this.affixed)return n<i&&"top";if("bottom"==this.affixed)return null!=i?!(n+this.unpin<=s.top)&&"bottom":!(n+a<=t-o)&&"bottom";var r=null==this.affixed,l=r?n:s.top,h=r?a:e;return null!=i&&n<=i?"top":null!=o&&l+h>=t-o&&"bottom"},i.prototype.getPinnedOffset=function(){if(this.pinnedOffset)return this.pinnedOffset;this.$element.removeClass(i.RESET).addClass("affix");var t=this.$target.scrollTop(),e=this.$element.offset();return this.pinnedOffset=e.top-t},i.prototype.checkPositionWithEventLoop=function(){setTimeout(t.proxy(this.checkPosition,this),1)},i.prototype.checkPosition=function(){if(this.$element.is(":visible")){var e=this.$element.height(),o=this.options.offset,n=o.top,s=o.bottom,a=Math.max(t(document).height(),t(document.body).height());"object"!=typeof o&&(s=n=o),"function"==typeof n&&(n=o.top(this.$element)),"function"==typeof s&&(s=o.bottom(this.$element));var r=this.getState(a,e,n,s);if(this.affixed!=r){null!=this.unpin&&this.$element.css("top","");var l="affix"+(r?"-"+r:""),h=t.Event(l+".bs.affix");if(this.$element.trigger(h),h.isDefaultPrevented())return;this.affixed=r,this.unpin="bottom"==r?this.getPinnedOffset():null,this.$element.removeClass(i.RESET).addClass(l).trigger(l.replace("affix","affixed")+".bs.affix")}"bottom"==r&&this.$element.offset({top:a-e-s})}};var o=t.fn.affix;t.fn.affix=e,t.fn.affix.Constructor=i,t.fn.affix.noConflict=function(){return t.fn.affix=o,this},t(window).on("load",function(){t('[data-spy="affix"]').each(function(){var i=t(this),o=i.data();o.offset=o.offset||{},null!=o.offsetBottom&&(o.offset.bottom=o.offsetBottom),null!=o.offsetTop&&(o.offset.top=o.offsetTop),e.call(i,o)})})}(jQuery);;
!function ($) {

    "use strict";

    // TABCOLLAPSE CLASS DEFINITION
    // ======================

    var TabCollapse = function (el, options) {
        this.options   = options;
        this.$tabs  = $(el);

        this._accordionVisible = false; //content is attached to tabs at first
        this._initAccordion();
        this._checkStateOnResize();


        // checkState() has gone to setTimeout for making it possible to attach listeners to
        // shown-accordion.bs.tabcollapse event on page load.
        // See https://github.com/flatlogic/bootstrap-tabcollapse/issues/23
        var that = this;
        setTimeout(function() {
          that.checkState();
        }, 0);
    };

    TabCollapse.DEFAULTS = {
        accordionClass: 'visible-xs',
        tabsClass: 'hidden-xs',
        accordionTemplate: function(heading, groupId, parentId, active) {
            return  '<div class="panel panel-default">' +
                    '   <div class="panel-heading">' +
                    '      <h4 class="panel-title">' +
                    '      </h4>' +
                    '   </div>' +
                    '   <div id="' + groupId + '" class="panel-collapse collapse ' + (active ? 'in' : '') + '">' +
                    '       <div class="panel-body js-tabcollapse-panel-body">' +
                    '       </div>' +
                    '   </div>' +
                    '</div>'

        }
    };

    TabCollapse.prototype.checkState = function(){
        if (this.$tabs.is(':visible') && this._accordionVisible){
            this.showTabs();
            this._accordionVisible = false;
        } else if (this.$accordion.is(':visible') && !this._accordionVisible){
            this.showAccordion();
            this._accordionVisible = true;
        }
    };

    TabCollapse.prototype.showTabs = function(){
        var view = this;
        this.$tabs.trigger($.Event('show-tabs.bs.tabcollapse'));

        var $panelHeadings = this.$accordion.find('.js-tabcollapse-panel-heading').detach();

        $panelHeadings.each(function() {
            var $panelHeading = $(this),
            $parentLi = $panelHeading.data('bs.tabcollapse.parentLi');

            var $oldHeading = view._panelHeadingToTabHeading($panelHeading);

            $parentLi.removeClass('active');
            if ($parentLi.parent().hasClass('dropdown-menu') && !$parentLi.siblings('li').hasClass('active')) {
                $parentLi.parent().parent().removeClass('active');
            }

            if (!$oldHeading.hasClass('collapsed')) {
                $parentLi.addClass('active');
                if ($parentLi.parent().hasClass('dropdown-menu')) {
                    $parentLi.parent().parent().addClass('active');
                }
            } else {
                $oldHeading.removeClass('collapsed');
            }

            $parentLi.append($panelHeading);
        });

        if (!$('li').hasClass('active')) {
            $('li').first().addClass('active')
        }

        var $panelBodies = this.$accordion.find('.js-tabcollapse-panel-body');
        $panelBodies.each(function(){
            var $panelBody = $(this),
                $tabPane = $panelBody.data('bs.tabcollapse.tabpane');
            $tabPane.append($panelBody.contents().detach());
        });
        this.$accordion.html('');

        if(this.options.updateLinks) {
            var $tabContents = this.getTabContentElement();
            $tabContents.find('[data-toggle-was="tab"], [data-toggle-was="pill"]').each(function() {
                var $el = $(this);
                var href = $el.attr('href').replace(/-collapse$/g, '');
                $el.attr({
                    'data-toggle': $el.attr('data-toggle-was'),
                    'data-toggle-was': '',
                    'data-parent': '',
                    href: href
                });
            });
        }

        this.$tabs.trigger($.Event('shown-tabs.bs.tabcollapse'));
    };

    TabCollapse.prototype.getTabContentElement = function(){
        var $tabContents = $(this.options.tabContentSelector);
        if($tabContents.length === 0) {
            $tabContents = this.$tabs.siblings('.tab-content');
        }
        return $tabContents;
    };

    TabCollapse.prototype.showAccordion = function(){
        this.$tabs.trigger($.Event('show-accordion.bs.tabcollapse'));

        var $headings = this.$tabs.find('li:not(.dropdown) [data-toggle="tab"], li:not(.dropdown) [data-toggle="pill"]'),
            view = this;
        $headings.each(function(){
            var $heading = $(this),
                $parentLi = $heading.parent();
            $heading.data('bs.tabcollapse.parentLi', $parentLi);
            view.$accordion.append(view._createAccordionGroup(view.$accordion.attr('id'), $heading.detach()));
        });

        if(this.options.updateLinks) {
            var parentId = this.$accordion.attr('id');
            var $selector = this.$accordion.find('.js-tabcollapse-panel-body');
            $selector.find('[data-toggle="tab"], [data-toggle="pill"]').each(function() {
                var $el = $(this);
                var href = $el.attr('href') + '-collapse';
                $el.attr({
                    'data-toggle-was': $el.attr('data-toggle'),
                    'data-toggle': 'collapse',
                    'data-parent': '#' + parentId,
                    href: href
                });
            });
        }

        this.$tabs.trigger($.Event('shown-accordion.bs.tabcollapse'));
    };

    TabCollapse.prototype._panelHeadingToTabHeading = function($heading) {
        var href = $heading.attr('href').replace(/-collapse$/g, '');
        $heading.attr({
            'data-toggle': 'tab',
            'href': href,
            'data-parent': ''
        });
        return $heading;
    };

    TabCollapse.prototype._tabHeadingToPanelHeading = function($heading, groupId, parentId, active) {
        $heading.addClass('js-tabcollapse-panel-heading ' + (active ? '' : 'collapsed'));
        $heading.attr({
            'data-toggle': 'collapse',
            'data-parent': '#' + parentId,
            'href': '#' + groupId
        });
        return $heading;
    };

    TabCollapse.prototype._checkStateOnResize = function(){
        var view = this;
        $(window).resize(function(){
            clearTimeout(view._resizeTimeout);
            view._resizeTimeout = setTimeout(function(){
                view.checkState();
            }, 100);
        });
    };


    TabCollapse.prototype._initAccordion = function(){
        var randomString = function() {
            var result = "",
                possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
            for( var i=0; i < 5; i++ ) {
                result += possible.charAt(Math.floor(Math.random() * possible.length));
            }
            return result;
        };

        var srcId = this.$tabs.attr('id'),
            accordionId = (srcId ? srcId : randomString()) + '-accordion';

        this.$accordion = $('<div class="panel-group ' + this.options.accordionClass + '" id="' + accordionId +'"></div>');
        this.$tabs.after(this.$accordion);
        this.$tabs.addClass(this.options.tabsClass);
        this.getTabContentElement().addClass(this.options.tabsClass);
    };

    TabCollapse.prototype._createAccordionGroup = function(parentId, $heading){
        var tabSelector = $heading.attr('data-target'),
            active = $heading.data('bs.tabcollapse.parentLi').is('.active');

        if (!tabSelector) {
            tabSelector = $heading.attr('href');
            tabSelector = tabSelector && tabSelector.replace(/.*(?=#[^\s]*$)/, ''); //strip for ie7
        }

        var $tabPane = $(tabSelector),
            groupId = $tabPane.attr('id') + '-collapse',
            $panel = $(this.options.accordionTemplate($heading, groupId, parentId, active));
        $panel.find('.panel-heading > .panel-title').append(this._tabHeadingToPanelHeading($heading, groupId, parentId, active));
        $panel.find('.panel-body').append($tabPane.contents().detach())
            .data('bs.tabcollapse.tabpane', $tabPane);

        return $panel;
    };



    // TABCOLLAPSE PLUGIN DEFINITION
    // =======================

    $.fn.tabCollapse = function (option) {
        return this.each(function () {
            var $this   = $(this);
            var data    = $this.data('bs.tabcollapse');
            var options = $.extend({}, TabCollapse.DEFAULTS, $this.data(), typeof option === 'object' && option);

            if (!data) $this.data('bs.tabcollapse', new TabCollapse(this, options));
        });
    };

    $.fn.tabCollapse.Constructor = TabCollapse;


}(window.jQuery);
;
/*! Magnific Popup - v1.1.0 - 2016-02-20
* http://dimsemenov.com/plugins/magnific-popup/
* Copyright (c) 2016 Dmitry Semenov; */
!function(a){"function"==typeof define&&define.amd?define(["jquery"],a):a("object"==typeof exports?require("jquery"):window.jQuery||window.Zepto)}(function(a){var b,c,d,e,f,g,h="Close",i="BeforeClose",j="AfterClose",k="BeforeAppend",l="MarkupParse",m="Open",n="Change",o="mfp",p="."+o,q="mfp-ready",r="mfp-removing",s="mfp-prevent-close",t=function(){},u=!!window.jQuery,v=a(window),w=function(a,c){b.ev.on(o+a+p,c)},x=function(b,c,d,e){var f=document.createElement("div");return f.className="mfp-"+b,d&&(f.innerHTML=d),e?c&&c.appendChild(f):(f=a(f),c&&f.appendTo(c)),f},y=function(c,d){b.ev.triggerHandler(o+c,d),b.st.callbacks&&(c=c.charAt(0).toLowerCase()+c.slice(1),b.st.callbacks[c]&&b.st.callbacks[c].apply(b,a.isArray(d)?d:[d]))},z=function(c){return c===g&&b.currTemplate.closeBtn||(b.currTemplate.closeBtn=a(b.st.closeMarkup.replace("%title%",b.st.tClose)),g=c),b.currTemplate.closeBtn},A=function(){a.magnificPopup.instance||(b=new t,b.init(),a.magnificPopup.instance=b)},B=function(){var a=document.createElement("p").style,b=["ms","O","Moz","Webkit"];if(void 0!==a.transition)return!0;for(;b.length;)if(b.pop()+"Transition"in a)return!0;return!1};t.prototype={constructor:t,init:function(){var c=navigator.appVersion;b.isLowIE=b.isIE8=document.all&&!document.addEventListener,b.isAndroid=/android/gi.test(c),b.isIOS=/iphone|ipad|ipod/gi.test(c),b.supportsTransition=B(),b.probablyMobile=b.isAndroid||b.isIOS||/(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent),d=a(document),b.popupsCache={}},open:function(c){var e;if(c.isObj===!1){b.items=c.items.toArray(),b.index=0;var g,h=c.items;for(e=0;e<h.length;e++)if(g=h[e],g.parsed&&(g=g.el[0]),g===c.el[0]){b.index=e;break}}else b.items=a.isArray(c.items)?c.items:[c.items],b.index=c.index||0;if(b.isOpen)return void b.updateItemHTML();b.types=[],f="",c.mainEl&&c.mainEl.length?b.ev=c.mainEl.eq(0):b.ev=d,c.key?(b.popupsCache[c.key]||(b.popupsCache[c.key]={}),b.currTemplate=b.popupsCache[c.key]):b.currTemplate={},b.st=a.extend(!0,{},a.magnificPopup.defaults,c),b.fixedContentPos="auto"===b.st.fixedContentPos?!b.probablyMobile:b.st.fixedContentPos,b.st.modal&&(b.st.closeOnContentClick=!1,b.st.closeOnBgClick=!1,b.st.showCloseBtn=!1,b.st.enableEscapeKey=!1),b.bgOverlay||(b.bgOverlay=x("bg").on("click"+p,function(){b.close()}),b.wrap=x("wrap").attr("tabindex",-1).on("click"+p,function(a){b._checkIfClose(a.target)&&b.close()}),b.container=x("container",b.wrap)),b.contentContainer=x("content"),b.st.preloader&&(b.preloader=x("preloader",b.container,b.st.tLoading));var i=a.magnificPopup.modules;for(e=0;e<i.length;e++){var j=i[e];j=j.charAt(0).toUpperCase()+j.slice(1),b["init"+j].call(b)}y("BeforeOpen"),b.st.showCloseBtn&&(b.st.closeBtnInside?(w(l,function(a,b,c,d){c.close_replaceWith=z(d.type)}),f+=" mfp-close-btn-in"):b.wrap.append(z())),b.st.alignTop&&(f+=" mfp-align-top"),b.fixedContentPos?b.wrap.css({overflow:b.st.overflowY,overflowX:"hidden",overflowY:b.st.overflowY}):b.wrap.css({top:v.scrollTop(),position:"absolute"}),(b.st.fixedBgPos===!1||"auto"===b.st.fixedBgPos&&!b.fixedContentPos)&&b.bgOverlay.css({height:d.height(),position:"absolute"}),b.st.enableEscapeKey&&d.on("keyup"+p,function(a){27===a.keyCode&&b.close()}),v.on("resize"+p,function(){b.updateSize()}),b.st.closeOnContentClick||(f+=" mfp-auto-cursor"),f&&b.wrap.addClass(f);var k=b.wH=v.height(),n={};if(b.fixedContentPos&&b._hasScrollBar(k)){var o=b._getScrollbarSize();o&&(n.marginRight=o)}b.fixedContentPos&&(b.isIE7?a("body, html").css("overflow","hidden"):n.overflow="hidden");var r=b.st.mainClass;return b.isIE7&&(r+=" mfp-ie7"),r&&b._addClassToMFP(r),b.updateItemHTML(),y("BuildControls"),a("html").css(n),b.bgOverlay.add(b.wrap).prependTo(b.st.prependTo||a(document.body)),b._lastFocusedEl=document.activeElement,setTimeout(function(){b.content?(b._addClassToMFP(q),b._setFocus()):b.bgOverlay.addClass(q),d.on("focusin"+p,b._onFocusIn)},16),b.isOpen=!0,b.updateSize(k),y(m),c},close:function(){b.isOpen&&(y(i),b.isOpen=!1,b.st.removalDelay&&!b.isLowIE&&b.supportsTransition?(b._addClassToMFP(r),setTimeout(function(){b._close()},b.st.removalDelay)):b._close())},_close:function(){y(h);var c=r+" "+q+" ";if(b.bgOverlay.detach(),b.wrap.detach(),b.container.empty(),b.st.mainClass&&(c+=b.st.mainClass+" "),b._removeClassFromMFP(c),b.fixedContentPos){var e={marginRight:""};b.isIE7?a("body, html").css("overflow",""):e.overflow="",a("html").css(e)}d.off("keyup"+p+" focusin"+p),b.ev.off(p),b.wrap.attr("class","mfp-wrap").removeAttr("style"),b.bgOverlay.attr("class","mfp-bg"),b.container.attr("class","mfp-container"),!b.st.showCloseBtn||b.st.closeBtnInside&&b.currTemplate[b.currItem.type]!==!0||b.currTemplate.closeBtn&&b.currTemplate.closeBtn.detach(),b.st.autoFocusLast&&b._lastFocusedEl&&a(b._lastFocusedEl).focus(),b.currItem=null,b.content=null,b.currTemplate=null,b.prevHeight=0,y(j)},updateSize:function(a){if(b.isIOS){var c=document.documentElement.clientWidth/window.innerWidth,d=window.innerHeight*c;b.wrap.css("height",d),b.wH=d}else b.wH=a||v.height();b.fixedContentPos||b.wrap.css("height",b.wH),y("Resize")},updateItemHTML:function(){var c=b.items[b.index];b.contentContainer.detach(),b.content&&b.content.detach(),c.parsed||(c=b.parseEl(b.index));var d=c.type;if(y("BeforeChange",[b.currItem?b.currItem.type:"",d]),b.currItem=c,!b.currTemplate[d]){var f=b.st[d]?b.st[d].markup:!1;y("FirstMarkupParse",f),f?b.currTemplate[d]=a(f):b.currTemplate[d]=!0}e&&e!==c.type&&b.container.removeClass("mfp-"+e+"-holder");var g=b["get"+d.charAt(0).toUpperCase()+d.slice(1)](c,b.currTemplate[d]);b.appendContent(g,d),c.preloaded=!0,y(n,c),e=c.type,b.container.prepend(b.contentContainer),y("AfterChange")},appendContent:function(a,c){b.content=a,a?b.st.showCloseBtn&&b.st.closeBtnInside&&b.currTemplate[c]===!0?b.content.find(".mfp-close").length||b.content.append(z()):b.content=a:b.content="",y(k),b.container.addClass("mfp-"+c+"-holder"),b.contentContainer.append(b.content)},parseEl:function(c){var d,e=b.items[c];if(e.tagName?e={el:a(e)}:(d=e.type,e={data:e,src:e.src}),e.el){for(var f=b.types,g=0;g<f.length;g++)if(e.el.hasClass("mfp-"+f[g])){d=f[g];break}e.src=e.el.attr("data-mfp-src"),e.src||(e.src=e.el.attr("href"))}return e.type=d||b.st.type||"inline",e.index=c,e.parsed=!0,b.items[c]=e,y("ElementParse",e),b.items[c]},addGroup:function(a,c){var d=function(d){d.mfpEl=this,b._openClick(d,a,c)};c||(c={});var e="click.magnificPopup";c.mainEl=a,c.items?(c.isObj=!0,a.off(e).on(e,d)):(c.isObj=!1,c.delegate?a.off(e).on(e,c.delegate,d):(c.items=a,a.off(e).on(e,d)))},_openClick:function(c,d,e){var f=void 0!==e.midClick?e.midClick:a.magnificPopup.defaults.midClick;if(f||!(2===c.which||c.ctrlKey||c.metaKey||c.altKey||c.shiftKey)){var g=void 0!==e.disableOn?e.disableOn:a.magnificPopup.defaults.disableOn;if(g)if(a.isFunction(g)){if(!g.call(b))return!0}else if(v.width()<g)return!0;c.type&&(c.preventDefault(),b.isOpen&&c.stopPropagation()),e.el=a(c.mfpEl),e.delegate&&(e.items=d.find(e.delegate)),b.open(e)}},updateStatus:function(a,d){if(b.preloader){c!==a&&b.container.removeClass("mfp-s-"+c),d||"loading"!==a||(d=b.st.tLoading);var e={status:a,text:d};y("UpdateStatus",e),a=e.status,d=e.text,b.preloader.html(d),b.preloader.find("a").on("click",function(a){a.stopImmediatePropagation()}),b.container.addClass("mfp-s-"+a),c=a}},_checkIfClose:function(c){if(!a(c).hasClass(s)){var d=b.st.closeOnContentClick,e=b.st.closeOnBgClick;if(d&&e)return!0;if(!b.content||a(c).hasClass("mfp-close")||b.preloader&&c===b.preloader[0])return!0;if(c===b.content[0]||a.contains(b.content[0],c)){if(d)return!0}else if(e&&a.contains(document,c))return!0;return!1}},_addClassToMFP:function(a){b.bgOverlay.addClass(a),b.wrap.addClass(a)},_removeClassFromMFP:function(a){this.bgOverlay.removeClass(a),b.wrap.removeClass(a)},_hasScrollBar:function(a){return(b.isIE7?d.height():document.body.scrollHeight)>(a||v.height())},_setFocus:function(){(b.st.focus?b.content.find(b.st.focus).eq(0):b.wrap).focus()},_onFocusIn:function(c){return c.target===b.wrap[0]||a.contains(b.wrap[0],c.target)?void 0:(b._setFocus(),!1)},_parseMarkup:function(b,c,d){var e;d.data&&(c=a.extend(d.data,c)),y(l,[b,c,d]),a.each(c,function(c,d){if(void 0===d||d===!1)return!0;if(e=c.split("_"),e.length>1){var f=b.find(p+"-"+e[0]);if(f.length>0){var g=e[1];"replaceWith"===g?f[0]!==d[0]&&f.replaceWith(d):"img"===g?f.is("img")?f.attr("src",d):f.replaceWith(a("<img>").attr("src",d).attr("class",f.attr("class"))):f.attr(e[1],d)}}else b.find(p+"-"+c).html(d)})},_getScrollbarSize:function(){if(void 0===b.scrollbarSize){var a=document.createElement("div");a.style.cssText="width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;",document.body.appendChild(a),b.scrollbarSize=a.offsetWidth-a.clientWidth,document.body.removeChild(a)}return b.scrollbarSize}},a.magnificPopup={instance:null,proto:t.prototype,modules:[],open:function(b,c){return A(),b=b?a.extend(!0,{},b):{},b.isObj=!0,b.index=c||0,this.instance.open(b)},close:function(){return a.magnificPopup.instance&&a.magnificPopup.instance.close()},registerModule:function(b,c){c.options&&(a.magnificPopup.defaults[b]=c.options),a.extend(this.proto,c.proto),this.modules.push(b)},defaults:{disableOn:0,key:null,midClick:!1,mainClass:"",preloader:!0,focus:"",closeOnContentClick:!1,closeOnBgClick:!0,closeBtnInside:!0,showCloseBtn:!0,enableEscapeKey:!0,modal:!1,alignTop:!1,removalDelay:0,prependTo:null,fixedContentPos:"auto",fixedBgPos:"auto",overflowY:"auto",closeMarkup:'<button title="%title%" type="button" class="mfp-close">&#215;</button>',tClose:"Close (Esc)",tLoading:"Loading...",autoFocusLast:!0}},a.fn.magnificPopup=function(c){A();var d=a(this);if("string"==typeof c)if("open"===c){var e,f=u?d.data("magnificPopup"):d[0].magnificPopup,g=parseInt(arguments[1],10)||0;f.items?e=f.items[g]:(e=d,f.delegate&&(e=e.find(f.delegate)),e=e.eq(g)),b._openClick({mfpEl:e},d,f)}else b.isOpen&&b[c].apply(b,Array.prototype.slice.call(arguments,1));else c=a.extend(!0,{},c),u?d.data("magnificPopup",c):d[0].magnificPopup=c,b.addGroup(d,c);return d};var C,D,E,F="inline",G=function(){E&&(D.after(E.addClass(C)).detach(),E=null)};a.magnificPopup.registerModule(F,{options:{hiddenClass:"hide",markup:"",tNotFound:"Content not found"},proto:{initInline:function(){b.types.push(F),w(h+"."+F,function(){G()})},getInline:function(c,d){if(G(),c.src){var e=b.st.inline,f=a(c.src);if(f.length){var g=f[0].parentNode;g&&g.tagName&&(D||(C=e.hiddenClass,D=x(C),C="mfp-"+C),E=f.after(D).detach().removeClass(C)),b.updateStatus("ready")}else b.updateStatus("error",e.tNotFound),f=a("<div>");return c.inlineElement=f,f}return b.updateStatus("ready"),b._parseMarkup(d,{},c),d}}});var H,I="ajax",J=function(){H&&a(document.body).removeClass(H)},K=function(){J(),b.req&&b.req.abort()};a.magnificPopup.registerModule(I,{options:{settings:null,cursor:"mfp-ajax-cur",tError:'<a href="%url%">The content</a> could not be loaded.'},proto:{initAjax:function(){b.types.push(I),H=b.st.ajax.cursor,w(h+"."+I,K),w("BeforeChange."+I,K)},getAjax:function(c){H&&a(document.body).addClass(H),b.updateStatus("loading");var d=a.extend({url:c.src,success:function(d,e,f){var g={data:d,xhr:f};y("ParseAjax",g),b.appendContent(a(g.data),I),c.finished=!0,J(),b._setFocus(),setTimeout(function(){b.wrap.addClass(q)},16),b.updateStatus("ready"),y("AjaxContentAdded")},error:function(){J(),c.finished=c.loadError=!0,b.updateStatus("error",b.st.ajax.tError.replace("%url%",c.src))}},b.st.ajax.settings);return b.req=a.ajax(d),""}}});var L,M=function(c){if(c.data&&void 0!==c.data.title)return c.data.title;var d=b.st.image.titleSrc;if(d){if(a.isFunction(d))return d.call(b,c);if(c.el)return c.el.attr(d)||""}return""};a.magnificPopup.registerModule("image",{options:{markup:'<div class="mfp-figure"><div class="mfp-close"></div><figure><div class="mfp-img"></div><figcaption><div class="mfp-bottom-bar"><div class="mfp-title"></div><div class="mfp-counter"></div></div></figcaption></figure></div>',cursor:"mfp-zoom-out-cur",titleSrc:"title",verticalFit:!0,tError:'<a href="%url%">The image</a> could not be loaded.'},proto:{initImage:function(){var c=b.st.image,d=".image";b.types.push("image"),w(m+d,function(){"image"===b.currItem.type&&c.cursor&&a(document.body).addClass(c.cursor)}),w(h+d,function(){c.cursor&&a(document.body).removeClass(c.cursor),v.off("resize"+p)}),w("Resize"+d,b.resizeImage),b.isLowIE&&w("AfterChange",b.resizeImage)},resizeImage:function(){var a=b.currItem;if(a&&a.img&&b.st.image.verticalFit){var c=0;b.isLowIE&&(c=parseInt(a.img.css("padding-top"),10)+parseInt(a.img.css("padding-bottom"),10)),a.img.css("max-height",b.wH-c)}},_onImageHasSize:function(a){a.img&&(a.hasSize=!0,L&&clearInterval(L),a.isCheckingImgSize=!1,y("ImageHasSize",a),a.imgHidden&&(b.content&&b.content.removeClass("mfp-loading"),a.imgHidden=!1))},findImageSize:function(a){var c=0,d=a.img[0],e=function(f){L&&clearInterval(L),L=setInterval(function(){return d.naturalWidth>0?void b._onImageHasSize(a):(c>200&&clearInterval(L),c++,void(3===c?e(10):40===c?e(50):100===c&&e(500)))},f)};e(1)},getImage:function(c,d){var e=0,f=function(){c&&(c.img[0].complete?(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("ready")),c.hasSize=!0,c.loaded=!0,y("ImageLoadComplete")):(e++,200>e?setTimeout(f,100):g()))},g=function(){c&&(c.img.off(".mfploader"),c===b.currItem&&(b._onImageHasSize(c),b.updateStatus("error",h.tError.replace("%url%",c.src))),c.hasSize=!0,c.loaded=!0,c.loadError=!0)},h=b.st.image,i=d.find(".mfp-img");if(i.length){var j=document.createElement("img");j.className="mfp-img",c.el&&c.el.find("img").length&&(j.alt=c.el.find("img").attr("alt")),c.img=a(j).on("load.mfploader",f).on("error.mfploader",g),j.src=c.src,i.is("img")&&(c.img=c.img.clone()),j=c.img[0],j.naturalWidth>0?c.hasSize=!0:j.width||(c.hasSize=!1)}return b._parseMarkup(d,{title:M(c),img_replaceWith:c.img},c),b.resizeImage(),c.hasSize?(L&&clearInterval(L),c.loadError?(d.addClass("mfp-loading"),b.updateStatus("error",h.tError.replace("%url%",c.src))):(d.removeClass("mfp-loading"),b.updateStatus("ready")),d):(b.updateStatus("loading"),c.loading=!0,c.hasSize||(c.imgHidden=!0,d.addClass("mfp-loading"),b.findImageSize(c)),d)}}});var N,O=function(){return void 0===N&&(N=void 0!==document.createElement("p").style.MozTransform),N};a.magnificPopup.registerModule("zoom",{options:{enabled:!1,easing:"ease-in-out",duration:300,opener:function(a){return a.is("img")?a:a.find("img")}},proto:{initZoom:function(){var a,c=b.st.zoom,d=".zoom";if(c.enabled&&b.supportsTransition){var e,f,g=c.duration,j=function(a){var b=a.clone().removeAttr("style").removeAttr("class").addClass("mfp-animated-image"),d="all "+c.duration/1e3+"s "+c.easing,e={position:"fixed",zIndex:9999,left:0,top:0,"-webkit-backface-visibility":"hidden"},f="transition";return e["-webkit-"+f]=e["-moz-"+f]=e["-o-"+f]=e[f]=d,b.css(e),b},k=function(){b.content.css("visibility","visible")};w("BuildControls"+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.content.css("visibility","hidden"),a=b._getItemToZoom(),!a)return void k();f=j(a),f.css(b._getOffset()),b.wrap.append(f),e=setTimeout(function(){f.css(b._getOffset(!0)),e=setTimeout(function(){k(),setTimeout(function(){f.remove(),a=f=null,y("ZoomAnimationEnded")},16)},g)},16)}}),w(i+d,function(){if(b._allowZoom()){if(clearTimeout(e),b.st.removalDelay=g,!a){if(a=b._getItemToZoom(),!a)return;f=j(a)}f.css(b._getOffset(!0)),b.wrap.append(f),b.content.css("visibility","hidden"),setTimeout(function(){f.css(b._getOffset())},16)}}),w(h+d,function(){b._allowZoom()&&(k(),f&&f.remove(),a=null)})}},_allowZoom:function(){return"image"===b.currItem.type},_getItemToZoom:function(){return b.currItem.hasSize?b.currItem.img:!1},_getOffset:function(c){var d;d=c?b.currItem.img:b.st.zoom.opener(b.currItem.el||b.currItem);var e=d.offset(),f=parseInt(d.css("padding-top"),10),g=parseInt(d.css("padding-bottom"),10);e.top-=a(window).scrollTop()-f;var h={width:d.width(),height:(u?d.innerHeight():d[0].offsetHeight)-g-f};return O()?h["-moz-transform"]=h.transform="translate("+e.left+"px,"+e.top+"px)":(h.left=e.left,h.top=e.top),h}}});var P="iframe",Q="//about:blank",R=function(a){if(b.currTemplate[P]){var c=b.currTemplate[P].find("iframe");c.length&&(a||(c[0].src=Q),b.isIE8&&c.css("display",a?"block":"none"))}};a.magnificPopup.registerModule(P,{options:{markup:'<div class="mfp-iframe-scaler"><div class="mfp-close"></div><iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe></div>',srcAction:"iframe_src",patterns:{youtube:{index:"youtube.com",id:"v=",src:"//www.youtube.com/embed/%id%?autoplay=1"},vimeo:{index:"vimeo.com/",id:"/",src:"//player.vimeo.com/video/%id%?autoplay=1"},gmaps:{index:"//maps.google.",src:"%id%&output=embed"}}},proto:{initIframe:function(){b.types.push(P),w("BeforeChange",function(a,b,c){b!==c&&(b===P?R():c===P&&R(!0))}),w(h+"."+P,function(){R()})},getIframe:function(c,d){var e=c.src,f=b.st.iframe;a.each(f.patterns,function(){return e.indexOf(this.index)>-1?(this.id&&(e="string"==typeof this.id?e.substr(e.lastIndexOf(this.id)+this.id.length,e.length):this.id.call(this,e)),e=this.src.replace("%id%",e),!1):void 0});var g={};return f.srcAction&&(g[f.srcAction]=e),b._parseMarkup(d,g,c),b.updateStatus("ready"),d}}});var S=function(a){var c=b.items.length;return a>c-1?a-c:0>a?c+a:a},T=function(a,b,c){return a.replace(/%curr%/gi,b+1).replace(/%total%/gi,c)};a.magnificPopup.registerModule("gallery",{options:{enabled:!1,arrowMarkup:'<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',preload:[0,2],navigateByImgClick:!0,arrows:!0,tPrev:"Previous (Left arrow key)",tNext:"Next (Right arrow key)",tCounter:"%curr% of %total%"},proto:{initGallery:function(){var c=b.st.gallery,e=".mfp-gallery";return b.direction=!0,c&&c.enabled?(f+=" mfp-gallery",w(m+e,function(){c.navigateByImgClick&&b.wrap.on("click"+e,".mfp-img",function(){return b.items.length>1?(b.next(),!1):void 0}),d.on("keydown"+e,function(a){37===a.keyCode?b.prev():39===a.keyCode&&b.next()})}),w("UpdateStatus"+e,function(a,c){c.text&&(c.text=T(c.text,b.currItem.index,b.items.length))}),w(l+e,function(a,d,e,f){var g=b.items.length;e.counter=g>1?T(c.tCounter,f.index,g):""}),w("BuildControls"+e,function(){if(b.items.length>1&&c.arrows&&!b.arrowLeft){var d=c.arrowMarkup,e=b.arrowLeft=a(d.replace(/%title%/gi,c.tPrev).replace(/%dir%/gi,"left")).addClass(s),f=b.arrowRight=a(d.replace(/%title%/gi,c.tNext).replace(/%dir%/gi,"right")).addClass(s);e.click(function(){b.prev()}),f.click(function(){b.next()}),b.container.append(e.add(f))}}),w(n+e,function(){b._preloadTimeout&&clearTimeout(b._preloadTimeout),b._preloadTimeout=setTimeout(function(){b.preloadNearbyImages(),b._preloadTimeout=null},16)}),void w(h+e,function(){d.off(e),b.wrap.off("click"+e),b.arrowRight=b.arrowLeft=null})):!1},next:function(){b.direction=!0,b.index=S(b.index+1),b.updateItemHTML()},prev:function(){b.direction=!1,b.index=S(b.index-1),b.updateItemHTML()},goTo:function(a){b.direction=a>=b.index,b.index=a,b.updateItemHTML()},preloadNearbyImages:function(){var a,c=b.st.gallery.preload,d=Math.min(c[0],b.items.length),e=Math.min(c[1],b.items.length);for(a=1;a<=(b.direction?e:d);a++)b._preloadItem(b.index+a);for(a=1;a<=(b.direction?d:e);a++)b._preloadItem(b.index-a)},_preloadItem:function(c){if(c=S(c),!b.items[c].preloaded){var d=b.items[c];d.parsed||(d=b.parseEl(c)),y("LazyLoad",d),"image"===d.type&&(d.img=a('<img class="mfp-img" />').on("load.mfploader",function(){d.hasSize=!0}).on("error.mfploader",function(){d.hasSize=!0,d.loadError=!0,y("LazyLoadError",d)}).attr("src",d.src)),d.preloaded=!0}}}});var U="retina";a.magnificPopup.registerModule(U,{options:{replaceSrc:function(a){return a.src.replace(/\.\w+$/,function(a){return"@2x"+a})},ratio:1},proto:{initRetina:function(){if(window.devicePixelRatio>1){var a=b.st.retina,c=a.ratio;c=isNaN(c)?c():c,c>1&&(w("ImageHasSize."+U,function(a,b){b.img.css({"max-width":b.img[0].naturalWidth/c,width:"100%"})}),w("ElementParse."+U,function(b,d){d.src=a.replaceSrc(d,c)}))}}}}),A()});;
/*
 * jQuery FlexSlider v2.6.4
 * Copyright 2012 WooThemes
 * Contributing Author: Tyler Smith
 */!function($){var e=!0;$.flexslider=function(t,a){var n=$(t);n.vars=$.extend({},$.flexslider.defaults,a);var i=n.vars.namespace,r=window.navigator&&window.navigator.msPointerEnabled&&window.MSGesture,s=("ontouchstart"in window||r||window.DocumentTouch&&document instanceof DocumentTouch)&&n.vars.touch,o="click touchend MSPointerUp keyup",l="",c,d="vertical"===n.vars.direction,u=n.vars.reverse,v=n.vars.itemWidth>0,p="fade"===n.vars.animation,m=""!==n.vars.asNavFor,f={};$.data(t,"flexslider",n),f={init:function(){n.animating=!1,n.currentSlide=parseInt(n.vars.startAt?n.vars.startAt:0,10),isNaN(n.currentSlide)&&(n.currentSlide=0),n.animatingTo=n.currentSlide,n.atEnd=0===n.currentSlide||n.currentSlide===n.last,n.containerSelector=n.vars.selector.substr(0,n.vars.selector.search(" ")),n.slides=$(n.vars.selector,n),n.container=$(n.containerSelector,n),n.count=n.slides.length,n.syncExists=$(n.vars.sync).length>0,"slide"===n.vars.animation&&(n.vars.animation="swing"),n.prop=d?"top":"marginLeft",n.args={},n.manualPause=!1,n.stopped=!1,n.started=!1,n.startTimeout=null,n.transitions=!n.vars.video&&!p&&n.vars.useCSS&&function(){var e=document.createElement("div"),t=["perspectiveProperty","WebkitPerspective","MozPerspective","OPerspective","msPerspective"];for(var a in t)if(void 0!==e.style[t[a]])return n.pfx=t[a].replace("Perspective","").toLowerCase(),n.prop="-"+n.pfx+"-transform",!0;return!1}(),n.ensureAnimationEnd="",""!==n.vars.controlsContainer&&(n.controlsContainer=$(n.vars.controlsContainer).length>0&&$(n.vars.controlsContainer)),""!==n.vars.manualControls&&(n.manualControls=$(n.vars.manualControls).length>0&&$(n.vars.manualControls)),""!==n.vars.customDirectionNav&&(n.customDirectionNav=2===$(n.vars.customDirectionNav).length&&$(n.vars.customDirectionNav)),n.vars.randomize&&(n.slides.sort(function(){return Math.round(Math.random())-.5}),n.container.empty().append(n.slides)),n.doMath(),n.setup("init"),n.vars.controlNav&&f.controlNav.setup(),n.vars.directionNav&&f.directionNav.setup(),n.vars.keyboard&&(1===$(n.containerSelector).length||n.vars.multipleKeyboard)&&$(document).bind("keyup",function(e){var t=e.keyCode;if(!n.animating&&(39===t||37===t)){var a=39===t?n.getTarget("next"):37===t&&n.getTarget("prev");n.flexAnimate(a,n.vars.pauseOnAction)}}),n.vars.mousewheel&&n.bind("mousewheel",function(e,t,a,i){e.preventDefault();var r=t<0?n.getTarget("next"):n.getTarget("prev");n.flexAnimate(r,n.vars.pauseOnAction)}),n.vars.pausePlay&&f.pausePlay.setup(),n.vars.slideshow&&n.vars.pauseInvisible&&f.pauseInvisible.init(),n.vars.slideshow&&(n.vars.pauseOnHover&&n.hover(function(){n.manualPlay||n.manualPause||n.pause()},function(){n.manualPause||n.manualPlay||n.stopped||n.play()}),n.vars.pauseInvisible&&f.pauseInvisible.isHidden()||(n.vars.initDelay>0?n.startTimeout=setTimeout(n.play,n.vars.initDelay):n.play())),m&&f.asNav.setup(),s&&n.vars.touch&&f.touch(),(!p||p&&n.vars.smoothHeight)&&$(window).bind("resize orientationchange focus",f.resize()),n.find("img").attr("draggable","false"),setTimeout(function(){n.vars.start(n)},200)},asNav:{setup:function(){n.asNav=!0,n.animatingTo=Math.floor(n.currentSlide/n.move),n.currentItem=n.currentSlide,n.slides.removeClass(i+"active-slide").eq(n.currentItem).addClass(i+"active-slide"),r?(t._slider=n,n.slides.each(function(){var e=this;e._gesture=new MSGesture,e._gesture.target=e,e.addEventListener("MSPointerDown",function(e){e.preventDefault(),e.currentTarget._gesture&&e.currentTarget._gesture.addPointer(e.pointerId)},!1),e.addEventListener("MSGestureTap",function(e){e.preventDefault();var t=$(this),a=t.index();$(n.vars.asNavFor).data("flexslider").animating||t.hasClass("active")||(n.direction=n.currentItem<a?"next":"prev",n.flexAnimate(a,n.vars.pauseOnAction,!1,!0,!0))})})):n.slides.on(o,function(e){e.preventDefault();var t=$(this),a=t.index();t.offset().left-$(n).scrollLeft()<=0&&t.hasClass(i+"active-slide")?n.flexAnimate(n.getTarget("prev"),!0):$(n.vars.asNavFor).data("flexslider").animating||t.hasClass(i+"active-slide")||(n.direction=n.currentItem<a?"next":"prev",n.flexAnimate(a,n.vars.pauseOnAction,!1,!0,!0))})}},controlNav:{setup:function(){n.manualControls?f.controlNav.setupManual():f.controlNav.setupPaging()},setupPaging:function(){var e="thumbnails"===n.vars.controlNav?"control-thumbs":"control-paging",t=1,a,r;if(n.controlNavScaffold=$('<ol class="'+i+"control-nav "+i+e+'"></ol>'),n.pagingCount>1)for(var s=0;s<n.pagingCount;s++){r=n.slides.eq(s),void 0===r.attr("data-thumb-alt")&&r.attr("data-thumb-alt","");var c=""!==r.attr("data-thumb-alt")?c=' alt="'+r.attr("data-thumb-alt")+'"':"";if(a="thumbnails"===n.vars.controlNav?'<img src="'+r.attr("data-thumb")+'"'+c+"/>":'<a href="#">'+t+"</a>","thumbnails"===n.vars.controlNav&&!0===n.vars.thumbCaptions){var d=r.attr("data-thumbcaption");""!==d&&void 0!==d&&(a+='<span class="'+i+'caption">'+d+"</span>")}n.controlNavScaffold.append("<li>"+a+"</li>"),t++}n.controlsContainer?$(n.controlsContainer).append(n.controlNavScaffold):n.append(n.controlNavScaffold),f.controlNav.set(),f.controlNav.active(),n.controlNavScaffold.delegate("a, img",o,function(e){if(e.preventDefault(),""===l||l===e.type){var t=$(this),a=n.controlNav.index(t);t.hasClass(i+"active")||(n.direction=a>n.currentSlide?"next":"prev",n.flexAnimate(a,n.vars.pauseOnAction))}""===l&&(l=e.type),f.setToClearWatchedEvent()})},setupManual:function(){n.controlNav=n.manualControls,f.controlNav.active(),n.controlNav.bind(o,function(e){if(e.preventDefault(),""===l||l===e.type){var t=$(this),a=n.controlNav.index(t);t.hasClass(i+"active")||(a>n.currentSlide?n.direction="next":n.direction="prev",n.flexAnimate(a,n.vars.pauseOnAction))}""===l&&(l=e.type),f.setToClearWatchedEvent()})},set:function(){var e="thumbnails"===n.vars.controlNav?"img":"a";n.controlNav=$("."+i+"control-nav li "+e,n.controlsContainer?n.controlsContainer:n)},active:function(){n.controlNav.removeClass(i+"active").eq(n.animatingTo).addClass(i+"active")},update:function(e,t){n.pagingCount>1&&"add"===e?n.controlNavScaffold.append($('<li><a href="#">'+n.count+"</a></li>")):1===n.pagingCount?n.controlNavScaffold.find("li").remove():n.controlNav.eq(t).closest("li").remove(),f.controlNav.set(),n.pagingCount>1&&n.pagingCount!==n.controlNav.length?n.update(t,e):f.controlNav.active()}},directionNav:{setup:function(){var e=$('<ul class="'+i+'direction-nav"><li class="'+i+'nav-prev"><a class="'+i+'prev" href="#">'+n.vars.prevText+'</a></li><li class="'+i+'nav-next"><a class="'+i+'next" href="#">'+n.vars.nextText+"</a></li></ul>");n.customDirectionNav?n.directionNav=n.customDirectionNav:n.controlsContainer?($(n.controlsContainer).append(e),n.directionNav=$("."+i+"direction-nav li a",n.controlsContainer)):(n.append(e),n.directionNav=$("."+i+"direction-nav li a",n)),f.directionNav.update(),n.directionNav.bind(o,function(e){e.preventDefault();var t;""!==l&&l!==e.type||(t=$(this).hasClass(i+"next")?n.getTarget("next"):n.getTarget("prev"),n.flexAnimate(t,n.vars.pauseOnAction)),""===l&&(l=e.type),f.setToClearWatchedEvent()})},update:function(){var e=i+"disabled";1===n.pagingCount?n.directionNav.addClass(e).attr("tabindex","-1"):n.vars.animationLoop?n.directionNav.removeClass(e).removeAttr("tabindex"):0===n.animatingTo?n.directionNav.removeClass(e).filter("."+i+"prev").addClass(e).attr("tabindex","-1"):n.animatingTo===n.last?n.directionNav.removeClass(e).filter("."+i+"next").addClass(e).attr("tabindex","-1"):n.directionNav.removeClass(e).removeAttr("tabindex")}},pausePlay:{setup:function(){var e=$('<div class="'+i+'pauseplay"><a href="#"></a></div>');n.controlsContainer?(n.controlsContainer.append(e),n.pausePlay=$("."+i+"pauseplay a",n.controlsContainer)):(n.append(e),n.pausePlay=$("."+i+"pauseplay a",n)),f.pausePlay.update(n.vars.slideshow?i+"pause":i+"play"),n.pausePlay.bind(o,function(e){e.preventDefault(),""!==l&&l!==e.type||($(this).hasClass(i+"pause")?(n.manualPause=!0,n.manualPlay=!1,n.pause()):(n.manualPause=!1,n.manualPlay=!0,n.play())),""===l&&(l=e.type),f.setToClearWatchedEvent()})},update:function(e){"play"===e?n.pausePlay.removeClass(i+"pause").addClass(i+"play").html(n.vars.playText):n.pausePlay.removeClass(i+"play").addClass(i+"pause").html(n.vars.pauseText)}},touch:function(){function e(e){e.stopPropagation(),n.animating?e.preventDefault():(n.pause(),t._gesture.addPointer(e.pointerId),T=0,c=d?n.h:n.w,f=Number(new Date),l=v&&u&&n.animatingTo===n.last?0:v&&u?n.limit-(n.itemW+n.vars.itemMargin)*n.move*n.animatingTo:v&&n.currentSlide===n.last?n.limit:v?(n.itemW+n.vars.itemMargin)*n.move*n.currentSlide:u?(n.last-n.currentSlide+n.cloneOffset)*c:(n.currentSlide+n.cloneOffset)*c)}function a(e){e.stopPropagation();var a=e.target._slider;if(a){var n=-e.translationX,i=-e.translationY;if(T+=d?i:n,m=T,y=d?Math.abs(T)<Math.abs(-n):Math.abs(T)<Math.abs(-i),e.detail===e.MSGESTURE_FLAG_INERTIA)return void setImmediate(function(){t._gesture.stop()});(!y||Number(new Date)-f>500)&&(e.preventDefault(),!p&&a.transitions&&(a.vars.animationLoop||(m=T/(0===a.currentSlide&&T<0||a.currentSlide===a.last&&T>0?Math.abs(T)/c+2:1)),a.setProps(l+m,"setTouch")))}}function i(e){e.stopPropagation();var t=e.target._slider;if(t){if(t.animatingTo===t.currentSlide&&!y&&null!==m){var a=u?-m:m,n=a>0?t.getTarget("next"):t.getTarget("prev");t.canAdvance(n)&&(Number(new Date)-f<550&&Math.abs(a)>50||Math.abs(a)>c/2)?t.flexAnimate(n,t.vars.pauseOnAction):p||t.flexAnimate(t.currentSlide,t.vars.pauseOnAction,!0)}s=null,o=null,m=null,l=null,T=0}}var s,o,l,c,m,f,g,h,S,y=!1,x=0,b=0,T=0;r?(t.style.msTouchAction="none",t._gesture=new MSGesture,t._gesture.target=t,t.addEventListener("MSPointerDown",e,!1),t._slider=n,t.addEventListener("MSGestureChange",a,!1),t.addEventListener("MSGestureEnd",i,!1)):(g=function(e){n.animating?e.preventDefault():(window.navigator.msPointerEnabled||1===e.touches.length)&&(n.pause(),c=d?n.h:n.w,f=Number(new Date),x=e.touches[0].pageX,b=e.touches[0].pageY,l=v&&u&&n.animatingTo===n.last?0:v&&u?n.limit-(n.itemW+n.vars.itemMargin)*n.move*n.animatingTo:v&&n.currentSlide===n.last?n.limit:v?(n.itemW+n.vars.itemMargin)*n.move*n.currentSlide:u?(n.last-n.currentSlide+n.cloneOffset)*c:(n.currentSlide+n.cloneOffset)*c,s=d?b:x,o=d?x:b,t.addEventListener("touchmove",h,!1),t.addEventListener("touchend",S,!1))},h=function(e){x=e.touches[0].pageX,b=e.touches[0].pageY,m=d?s-b:s-x,y=d?Math.abs(m)<Math.abs(x-o):Math.abs(m)<Math.abs(b-o);var t=500;(!y||Number(new Date)-f>500)&&(e.preventDefault(),!p&&n.transitions&&(n.vars.animationLoop||(m/=0===n.currentSlide&&m<0||n.currentSlide===n.last&&m>0?Math.abs(m)/c+2:1),n.setProps(l+m,"setTouch")))},S=function(e){if(t.removeEventListener("touchmove",h,!1),n.animatingTo===n.currentSlide&&!y&&null!==m){var a=u?-m:m,i=a>0?n.getTarget("next"):n.getTarget("prev");n.canAdvance(i)&&(Number(new Date)-f<550&&Math.abs(a)>50||Math.abs(a)>c/2)?n.flexAnimate(i,n.vars.pauseOnAction):p||n.flexAnimate(n.currentSlide,n.vars.pauseOnAction,!0)}t.removeEventListener("touchend",S,!1),s=null,o=null,m=null,l=null},t.addEventListener("touchstart",g,!1))},resize:function(){!n.animating&&n.is(":visible")&&(v||n.doMath(),p?f.smoothHeight():v?(n.slides.width(n.computedW),n.update(n.pagingCount),n.setProps()):d?(n.viewport.height(n.h),n.setProps(n.h,"setTotal")):(n.vars.smoothHeight&&f.smoothHeight(),n.newSlides.width(n.computedW),n.setProps(n.computedW,"setTotal")))},smoothHeight:function(e){if(!d||p){var t=p?n:n.viewport;e?t.animate({height:n.slides.eq(n.animatingTo).innerHeight()},e):t.innerHeight(n.slides.eq(n.animatingTo).innerHeight())}},sync:function(e){var t=$(n.vars.sync).data("flexslider"),a=n.animatingTo;switch(e){case"animate":t.flexAnimate(a,n.vars.pauseOnAction,!1,!0);break;case"play":t.playing||t.asNav||t.play();break;case"pause":t.pause();break}},uniqueID:function(e){return e.filter("[id]").add(e.find("[id]")).each(function(){var e=$(this);e.attr("id",e.attr("id")+"_clone")}),e},pauseInvisible:{visProp:null,init:function(){var e=f.pauseInvisible.getHiddenProp();if(e){var t=e.replace(/[H|h]idden/,"")+"visibilitychange";document.addEventListener(t,function(){f.pauseInvisible.isHidden()?n.startTimeout?clearTimeout(n.startTimeout):n.pause():n.started?n.play():n.vars.initDelay>0?setTimeout(n.play,n.vars.initDelay):n.play()})}},isHidden:function(){var e=f.pauseInvisible.getHiddenProp();return!!e&&document[e]},getHiddenProp:function(){var e=["webkit","moz","ms","o"];if("hidden"in document)return"hidden";for(var t=0;t<e.length;t++)if(e[t]+"Hidden"in document)return e[t]+"Hidden";return null}},setToClearWatchedEvent:function(){clearTimeout(c),c=setTimeout(function(){l=""},3e3)}},n.flexAnimate=function(e,t,a,r,o){if(n.vars.animationLoop||e===n.currentSlide||(n.direction=e>n.currentSlide?"next":"prev"),m&&1===n.pagingCount&&(n.direction=n.currentItem<e?"next":"prev"),!n.animating&&(n.canAdvance(e,o)||a)&&n.is(":visible")){if(m&&r){var l=$(n.vars.asNavFor).data("flexslider");if(n.atEnd=0===e||e===n.count-1,l.flexAnimate(e,!0,!1,!0,o),n.direction=n.currentItem<e?"next":"prev",l.direction=n.direction,Math.ceil((e+1)/n.visible)-1===n.currentSlide||0===e)return n.currentItem=e,n.slides.removeClass(i+"active-slide").eq(e).addClass(i+"active-slide"),!1;n.currentItem=e,n.slides.removeClass(i+"active-slide").eq(e).addClass(i+"active-slide"),e=Math.floor(e/n.visible)}if(n.animating=!0,n.animatingTo=e,t&&n.pause(),n.vars.before(n),n.syncExists&&!o&&f.sync("animate"),n.vars.controlNav&&f.controlNav.active(),v||n.slides.removeClass(i+"active-slide").eq(e).addClass(i+"active-slide"),n.atEnd=0===e||e===n.last,n.vars.directionNav&&f.directionNav.update(),e===n.last&&(n.vars.end(n),n.vars.animationLoop||n.pause()),p)s?(n.slides.eq(n.currentSlide).css({opacity:0,zIndex:1}),n.slides.eq(e).css({opacity:1,zIndex:2}),n.wrapup(c)):(n.slides.eq(n.currentSlide).css({zIndex:1}).animate({opacity:0},n.vars.animationSpeed,n.vars.easing),n.slides.eq(e).css({zIndex:2}).animate({opacity:1},n.vars.animationSpeed,n.vars.easing,n.wrapup));else{var c=d?n.slides.filter(":first").height():n.computedW,g,h,S;v?(g=n.vars.itemMargin,S=(n.itemW+g)*n.move*n.animatingTo,h=S>n.limit&&1!==n.visible?n.limit:S):h=0===n.currentSlide&&e===n.count-1&&n.vars.animationLoop&&"next"!==n.direction?u?(n.count+n.cloneOffset)*c:0:n.currentSlide===n.last&&0===e&&n.vars.animationLoop&&"prev"!==n.direction?u?0:(n.count+1)*c:u?(n.count-1-e+n.cloneOffset)*c:(e+n.cloneOffset)*c,n.setProps(h,"",n.vars.animationSpeed),n.transitions?(n.vars.animationLoop&&n.atEnd||(n.animating=!1,n.currentSlide=n.animatingTo),n.container.unbind("webkitTransitionEnd transitionend"),n.container.bind("webkitTransitionEnd transitionend",function(){clearTimeout(n.ensureAnimationEnd),n.wrapup(c)}),clearTimeout(n.ensureAnimationEnd),n.ensureAnimationEnd=setTimeout(function(){n.wrapup(c)},n.vars.animationSpeed+100)):n.container.animate(n.args,n.vars.animationSpeed,n.vars.easing,function(){n.wrapup(c)})}n.vars.smoothHeight&&f.smoothHeight(n.vars.animationSpeed)}},n.wrapup=function(e){p||v||(0===n.currentSlide&&n.animatingTo===n.last&&n.vars.animationLoop?n.setProps(e,"jumpEnd"):n.currentSlide===n.last&&0===n.animatingTo&&n.vars.animationLoop&&n.setProps(e,"jumpStart")),n.animating=!1,n.currentSlide=n.animatingTo,n.vars.after(n)},n.animateSlides=function(){!n.animating&&e&&n.flexAnimate(n.getTarget("next"))},n.pause=function(){clearInterval(n.animatedSlides),n.animatedSlides=null,n.playing=!1,n.vars.pausePlay&&f.pausePlay.update("play"),n.syncExists&&f.sync("pause")},n.play=function(){n.playing&&clearInterval(n.animatedSlides),n.animatedSlides=n.animatedSlides||setInterval(n.animateSlides,n.vars.slideshowSpeed),n.started=n.playing=!0,n.vars.pausePlay&&f.pausePlay.update("pause"),n.syncExists&&f.sync("play")},n.stop=function(){n.pause(),n.stopped=!0},n.canAdvance=function(e,t){var a=m?n.pagingCount-1:n.last;return!!t||(!(!m||n.currentItem!==n.count-1||0!==e||"prev"!==n.direction)||(!m||0!==n.currentItem||e!==n.pagingCount-1||"next"===n.direction)&&(!(e===n.currentSlide&&!m)&&(!!n.vars.animationLoop||(!n.atEnd||0!==n.currentSlide||e!==a||"next"===n.direction)&&(!n.atEnd||n.currentSlide!==a||0!==e||"next"!==n.direction))))},n.getTarget=function(e){return n.direction=e,"next"===e?n.currentSlide===n.last?0:n.currentSlide+1:0===n.currentSlide?n.last:n.currentSlide-1},n.setProps=function(e,t,a){var i=function(){var a=e||(n.itemW+n.vars.itemMargin)*n.move*n.animatingTo;return-1*function(){if(v)return"setTouch"===t?e:u&&n.animatingTo===n.last?0:u?n.limit-(n.itemW+n.vars.itemMargin)*n.move*n.animatingTo:n.animatingTo===n.last?n.limit:a;switch(t){case"setTotal":return u?(n.count-1-n.currentSlide+n.cloneOffset)*e:(n.currentSlide+n.cloneOffset)*e;case"setTouch":return e;case"jumpEnd":return u?e:n.count*e;case"jumpStart":return u?n.count*e:e;default:return e}}()+"px"}();n.transitions&&(i=d?"translate3d(0,"+i+",0)":"translate3d("+i+",0,0)",a=void 0!==a?a/1e3+"s":"0s",n.container.css("-"+n.pfx+"-transition-duration",a),n.container.css("transition-duration",a)),n.args[n.prop]=i,(n.transitions||void 0===a)&&n.container.css(n.args),n.container.css("transform",i)},n.setup=function(e){if(p)n.slides.css({width:"100%",float:"left",marginRight:"-100%",position:"relative"}),"init"===e&&(s?n.slides.css({opacity:0,display:"block",webkitTransition:"opacity "+n.vars.animationSpeed/1e3+"s ease",zIndex:1}).eq(n.currentSlide).css({opacity:1,zIndex:2}):0==n.vars.fadeFirstSlide?n.slides.css({opacity:0,display:"block",zIndex:1}).eq(n.currentSlide).css({zIndex:2}).css({opacity:1}):n.slides.css({opacity:0,display:"block",zIndex:1}).eq(n.currentSlide).css({zIndex:2}).animate({opacity:1},n.vars.animationSpeed,n.vars.easing)),n.vars.smoothHeight&&f.smoothHeight();else{var t,a;"init"===e&&(n.viewport=$('<div class="'+i+'viewport"></div>').css({overflow:"hidden",position:"relative"}).appendTo(n).append(n.container),n.cloneCount=0,n.cloneOffset=0,u&&(a=$.makeArray(n.slides).reverse(),n.slides=$(a),n.container.empty().append(n.slides))),n.vars.animationLoop&&!v&&(n.cloneCount=2,n.cloneOffset=1,"init"!==e&&n.container.find(".clone").remove(),n.container.append(f.uniqueID(n.slides.first().clone().addClass("clone")).attr("aria-hidden","true")).prepend(f.uniqueID(n.slides.last().clone().addClass("clone")).attr("aria-hidden","true"))),n.newSlides=$(n.vars.selector,n),t=u?n.count-1-n.currentSlide+n.cloneOffset:n.currentSlide+n.cloneOffset,d&&!v?(n.container.height(200*(n.count+n.cloneCount)+"%").css("position","absolute").width("100%"),setTimeout(function(){n.newSlides.css({display:"block"}),n.doMath(),n.viewport.height(n.h),n.setProps(t*n.h,"init")},"init"===e?100:0)):(n.container.width(200*(n.count+n.cloneCount)+"%"),n.setProps(t*n.computedW,"init"),setTimeout(function(){n.doMath(),n.newSlides.css({width:n.computedW,marginRight:n.computedM,float:"left",display:"block"}),n.vars.smoothHeight&&f.smoothHeight()},"init"===e?100:0))}v||n.slides.removeClass(i+"active-slide").eq(n.currentSlide).addClass(i+"active-slide"),n.vars.init(n)},n.doMath=function(){var e=n.slides.first(),t=n.vars.itemMargin,a=n.vars.minItems,i=n.vars.maxItems;n.w=void 0===n.viewport?n.width():n.viewport.width(),n.h=e.height(),n.boxPadding=e.outerWidth()-e.width(),v?(n.itemT=n.vars.itemWidth+t,n.itemM=t,n.minW=a?a*n.itemT:n.w,n.maxW=i?i*n.itemT-t:n.w,n.itemW=n.minW>n.w?(n.w-t*(a-1))/a:n.maxW<n.w?(n.w-t*(i-1))/i:n.vars.itemWidth>n.w?n.w:n.vars.itemWidth,n.visible=Math.floor(n.w/n.itemW),n.move=n.vars.move>0&&n.vars.move<n.visible?n.vars.move:n.visible,n.pagingCount=Math.ceil((n.count-n.visible)/n.move+1),n.last=n.pagingCount-1,n.limit=1===n.pagingCount?0:n.vars.itemWidth>n.w?n.itemW*(n.count-1)+t*(n.count-1):(n.itemW+t)*n.count-n.w-t):(n.itemW=n.w,n.itemM=t,n.pagingCount=n.count,n.last=n.count-1),n.computedW=n.itemW-n.boxPadding,n.computedM=n.itemM},n.update=function(e,t){n.doMath(),v||(e<n.currentSlide?n.currentSlide+=1:e<=n.currentSlide&&0!==e&&(n.currentSlide-=1),n.animatingTo=n.currentSlide),n.vars.controlNav&&!n.manualControls&&("add"===t&&!v||n.pagingCount>n.controlNav.length?f.controlNav.update("add"):("remove"===t&&!v||n.pagingCount<n.controlNav.length)&&(v&&n.currentSlide>n.last&&(n.currentSlide-=1,n.animatingTo-=1),f.controlNav.update("remove",n.last))),n.vars.directionNav&&f.directionNav.update()},n.addSlide=function(e,t){var a=$(e);n.count+=1,n.last=n.count-1,d&&u?void 0!==t?n.slides.eq(n.count-t).after(a):n.container.prepend(a):void 0!==t?n.slides.eq(t).before(a):n.container.append(a),n.update(t,"add"),n.slides=$(n.vars.selector+":not(.clone)",n),n.setup(),n.vars.added(n)},n.removeSlide=function(e){var t=isNaN(e)?n.slides.index($(e)):e;n.count-=1,n.last=n.count-1,isNaN(e)?$(e,n.slides).remove():d&&u?n.slides.eq(n.last).remove():n.slides.eq(e).remove(),n.doMath(),n.update(t,"remove"),n.slides=$(n.vars.selector+":not(.clone)",n),n.setup(),n.vars.removed(n)},f.init()},$(window).blur(function(t){e=!1}).focus(function(t){e=!0}),$.flexslider.defaults={namespace:"flex-",selector:".slides > li",animation:"fade",easing:"swing",direction:"horizontal",reverse:!1,animationLoop:!0,smoothHeight:!1,startAt:0,slideshow:!0,slideshowSpeed:7e3,animationSpeed:600,initDelay:0,randomize:!1,fadeFirstSlide:!0,thumbCaptions:!1,pauseOnAction:!0,pauseOnHover:!1,pauseInvisible:!0,useCSS:!0,touch:!0,video:!1,controlNav:!0,directionNav:!0,prevText:"Previous",nextText:"Next",keyboard:!0,multipleKeyboard:!1,mousewheel:!1,pausePlay:!1,pauseText:"Pause",playText:"Play",controlsContainer:"",manualControls:"",customDirectionNav:"",sync:"",asNavFor:"",itemWidth:0,itemMargin:0,minItems:1,maxItems:0,move:0,allowOneSlide:!0,start:function(){},before:function(){},after:function(){},end:function(){},added:function(){},removed:function(){},init:function(){}},$.fn.flexslider=function(e){if(void 0===e&&(e={}),"object"==typeof e)return this.each(function(){var t=$(this),a=e.selector?e.selector:".slides > li",n=t.find(a);1===n.length&&!1===e.allowOneSlide||0===n.length?(n.fadeIn(400),e.start&&e.start(t)):void 0===t.data("flexslider")&&new $.flexslider(this,e)});var t=$(this).data("flexslider");switch(e){case"play":t.play();break;case"pause":t.pause();break;case"stop":t.stop();break;case"next":t.flexAnimate(t.getTarget("next"),!0);break;case"prev":case"previous":t.flexAnimate(t.getTarget("prev"),!0);break;default:"number"==typeof e&&t.flexAnimate(e,!0)}}}(jQuery);;
/*
* rwdImageMaps jQuery plugin v1.6
*
* Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
*
* Copyright (c) 2016 Matt Stow
* https://github.com/stowball/jQuery-rwdImageMaps
* http://mattstow.com
* Licensed under the MIT license
*/
;(function(a){a.fn.rwdImageMaps=function(){var c=this;var b=function(){c.each(function(){if(typeof(a(this).attr("usemap"))=="undefined"){return}var e=this,d=a(e);a("<img />").on('load',function(){var g="width",m="height",n=d.attr(g),j=d.attr(m);if(!n||!j){var o=new Image();o.src=d.attr("src");if(!n){n=o.width}if(!j){j=o.height}}var f=d.width()/100,k=d.height()/100,i=d.attr("usemap").replace("#",""),l="coords";a('map[name="'+i+'"]').find("area").each(function(){var r=a(this);if(!r.data(l)){r.data(l,r.attr(l))}var q=r.data(l).split(","),p=new Array(q.length);for(var h=0;h<p.length;++h){if(h%2===0){p[h]=parseInt(((q[h]/n)*100)*f)}else{p[h]=parseInt(((q[h]/j)*100)*k)}}r.attr(l,p.toString())})}).attr("src",d.attr("src"))})};a(window).resize(b).trigger("resize");return this}})(jQuery);
;
!function(e,i,t,a){function s(){return i.innerWidth<600?2:i.innerWidth<900?3:4}function n(){if(e("section.title-header").length>0){if(i.innerWidth>767){t=e("section.title-header").find("img#title-header").attr("src");e("section.title-header").hasClass("general")?e("section.title-header").css("height","340px"):e("section.title-header").css("height","470px"),e("section.title-header").hasClass("work")&&e("section.title-header").css("height","520px")}else{var t=e("section.title-header").find("img#title-header-mobile").attr("src");m!=i.innerWidth||d||(e("section.title-header").css("height",i.innerHeight-300),d=!0);var a=e("body").find("main").find("section").first().attr("id");e("section.title-header a#go-down-section").attr("href","#"+a)}t?e("section.title-header").css("backgroundImage","url("+t+")"):e("section.title-header").css("backgroundImage","none")}}function r(){e("section.work-services .service-item").length>0&&e("section.work-services .service-item").each(function(){var i=e(this),t=i.find("img.service-bg").attr("src");i.css("backgroundImage","url("+t+")")})}var l,o,c=e(i),h=e(t),m=i.innerWidth,d=!1;c.on("resize",function(){var t=s();l=t,o=t,r(),n();var a=i.innerWidth;i.innerWidth>940?(e("section.home-slider").css("height",i.innerHeight-175),e("section.home-slider li.home-slide-bg").css("height",i.innerHeight-175)):i.innerWidth<940&&a!==m&&(e("section.home-slider").css("height",i.innerHeight-100),e("section.home-slider li.home-slide-bg").css("height",i.innerHeight-100))}),h.ready(function(){function t(i){a.each(function(){var t=e(this);t.css("font-size",parseInt(t.data("orig-size"))+i)})}n(),e(".search-mob a").click(function(){return e("input#search").hasClass("active")?e("input#search").removeClass("active"):e("input#search").addClass("active"),!1});var a=e("body p, h1, h2, h3, h4, h5, span");a.each(function(){var i=e(this);i.data("orig-size",i.css("font-size"))}),e(".resize li a.small").click(function(e){e.preventDefault(),t(0)}),e(".resize li a.medium").click(function(e){e.preventDefault(),t(2)}),e(".resize li a.big").click(function(e){e.preventDefault(),t(4)}),i.innerWidth>940?(e("section.home-slider").css("height",i.innerHeight-175),e("section.home-slider li.home-slide-bg").css("height",i.innerHeight-175)):(e("section.home-slider").css("height",i.innerHeight-100),e("section.home-slider li.home-slide-bg").css("height",i.innerHeight-100)),e("a#showHome").click(function(){return i.innerWidth>940?e("html, body").animate({scrollTop:e(e(this).attr("href")).offset().top-120},500):e("html, body").animate({scrollTop:e(e(this).attr("href")).offset().top-40},500),!1}),e("section.title-header a#go-down-section").click(function(){return e("html, body").animate({scrollTop:e(e(this).attr("href")).offset().top-60},500),!1});var s=!1,r=!0;if(i.innerWidth<767&&(s=!0,r=!1),e(".home-slider li.home-slide-bg").each(function(){var i=e(this).find("img").attr("src");e(this).css("background-image","url("+i+")")}),e(".home-slider").flexslider({controlNav:r,directionNav:s}),e("img[usemap]").rwdImageMaps(),e("section.map").length>0)var l=e("section.map img#imageHunter").attr("src"),o=e("section.map img#imageCentral").attr("src"),c=e("section.map img#imageBlue").attr("src"),h=e("section.map img#imageNorthShore").attr("src"),m=e("section.map img#imageNorthBeaches").attr("src");e("area").click(function(i){i.preventDefault();var t=e(this).attr("href");e(".nav-tabs li, .panel-heading h4").each(function(){e(this).find("a").attr("href")!=t&&e(this).find("a").attr("href")!=t+"-collapse"||(e(this).siblings().removeClass("active"),e(this).addClass("active"),e(".panel-collapse").removeClass("in"),e(this).parent().siblings(t+"-collapse").addClass("in"),e(this).parent().siblings(t+"-collapse").css("height","auto"),e("html,body").animate({scrollTop:e(t+"-collapse").offset().top-50},"slow"))})}),e(".nav-tabs li a, .panel-heading h4 a").click(function(i){i.preventDefault();var t=e(this).attr("href");t.indexOf("-")>-1&&(t=t.split("-")[0]),e("area").each(function(){switch(t){case"#tab1":e("section.map").css("background-image","url("+o+")");break;case"#tab2":e("section.map").css("background-image","url("+l+")");break;case"#tab3":e("section.map").css("background-image","url("+h+")");break;case"#tab4":e("section.map").css("background-image","url("+m+")");break;case"#tab5":e("section.map").css("background-image","url("+c+")");break;default:e("section.map").css("background-image","url("+o+")")}})}),e("area#hunter").hover(function(){e("section.map").css("background-image","url("+l+")")}),e("area#centralCoast").hover(function(){e("section.map").css("background-image","url("+o+")")}),e("area#blueMount").hover(function(){e("section.map").css("background-image","url("+c+")")}),e("area#northShore").hover(function(){e("section.map").css("background-image","url("+h+")")}),e("area#northBeaches").hover(function(){e("section.map").css("background-image","url("+m+")")});var d=e(".main-nav .wrapper").html();e(".top-nav .wrapper .mob-menu-container").html(d),e("section.main-nav ul.primary li, section.top-nav .mob-menu-container li").hover(function(){e(this).siblings().removeClass("active"),e(this).next(".submenu").siblings(".submenu").hide(),e(this).next(".submenu").length>0&&(e(this).addClass("active"),e(this).next(".submenu").fadeIn(300).addClass("active"))});e(".mob-menu-container ul.primary > li:first"),e(".mob-menu-container ul.primary > li:last");e(".mob-menu-container ul.primary > li a").click(function(i){if(e(this).parent().is(":first-child"));else if(e(this).parent().is(":nth-last-of-type(-n+2)"));else{if(i.preventDefault(),e(this).parent().hasClass("active"))return e(this).parent().removeClass("active"),e(this).parent().siblings(".submenu").removeClass("active").fadeOut(300),!1;e(this).parent().addClass("active"),e(this).parent().next(".submenu").addClass("active").fadeIn(300)}}),e("ul.submenu, ul.primary").mouseleave(function(){e("ul.submenu").removeClass("active").fadeOut(300),e("ul.submenu").siblings(".submenu").removeClass("active").fadeOut(300),e("ul.submenu").prev("li").removeClass("active")}),e("#show-mobile").change(function(){this.checked,e(".top-nav .wrapper .mob-menu-container").slideToggle()}),i.innerWidth<767&&(e(".post-navigation .next a").html('NEXT <img src="/themes/unisson_disability/css/images/sprite/next@2x.png" width="20" height="20" alt="Next">'),e(".post-navigation .prev a").html('<img src="/themes/unisson_disability/css/images/sprite/prev@2x.png" width="20" height="20" alt="Previous"> PREV'),e("#myTab li").removeClass("active"),e(".panel-collapse.collapse").removeClass("in")),e("#myTab").tabCollapse({tabsClass:"hidden-sm hidden-xs",accordionClass:"visible-sm visible-xs"}),e("#tab1 .team-detail-link, .panel .team-detail-link").click(function(i){i.preventDefault();var t=e(this).data("slideid"),a=[],s=[];if(e("#tab1 .team-detail").length>0)n=e("#tab1 .team-detail");else var n=e("#tab1-collapse .team-detail");n.each(function(){a.push({src:e(this)}),s.push({src:e(this).find("h2")})});e(this).siblings(".team-detail");e.magnificPopup.open({items:a,gallery:{enabled:!0}},t)}),e("#tab2 .team-detail-link, .panel .team-detail-link").click(function(i){i.preventDefault();var t=e(this).data("slideid"),a=[],s=[];if(e("#tab2 .team-detail").length>0)n=e("#tab2 .team-detail");else var n=e("#tab2-collapse .team-detail");n.each(function(){a.push({src:e(this)}),s.push({src:e(this).find("h2")})});e(this).siblings(".team-detail");e.magnificPopup.open({items:a,gallery:{enabled:!0}},t)}),e(".team .navigation .prev a").click(function(i){return i.preventDefault(),e.magnificPopup.instance.prev(),!1}),e(".team .navigation .next a").click(function(i){return i.preventDefault(),e.magnificPopup.instance.next(),!1}),e(".team .navigation .see-all a").click(function(i){return i.preventDefault(),e.magnificPopup.instance.close(),!1}),e(".tab-content .media a, .image-post.video a").magnificPopup({iframe:{patterns:{youtube_short:{index:"youtu.be/",id:"youtu.be/",src:"//www.youtube.com/embed/%id%?autoplay=1"}}}}),e(".tab-content .media a.image").magnificPopup({type:"image"}),e(".vertical-slider").flexslider({animation:"slide",direction:"vertical",animationLoop:!1,itemWidth:80,itemHeight:80,itemMargin:20,controlNav:!1,directionNav:!0,slideshow:!1,minItems:1,maxItems:4,move:1,prevText:"",nextText:""}),e(".horizontal-slider").flexslider({animation:"slide",animationLoop:!1,itemWidth:80,itemHeight:80,itemMargin:20,controlNav:!1,directionNav:!0,slideshow:!1,minItems:1,maxItems:4,move:1,prevText:"",nextText:""}),e("#bg-slider").flexslider({animation:"fade",slideToStart:0,controlNav:!1,directionNav:!1,animationLoop:!1,slideshow:!1,start:function(i){e(".vertical-slider li.slide_thumb, .horizontal-slider li.slide_thumb").click(function(){e(this).siblings().removeClass("active"),e(this).addClass("active"),e(".flexslider.bg-slider").show();var t=e(this).attr("data-slide"),a=parseInt(t);i.currentSlide!=a&&i.flexAnimate(a)})}}),e("#text-slider").flexslider({animation:"fade",slideToStart:0,controlNav:!1,directionNav:!1,animationLoop:!1,slideshow:!1,start:function(i){e(".vertical-slider li.slide_thumb, .horizontal-slider li.slide_thumb").click(function(){e(this).siblings().removeClass("active"),e(this).addClass("active"),e(".flexslider.text-slider").show();var t=e(this).attr("data-slide"),a=parseInt(t);i.currentSlide!=a&&i.flexAnimate(a)})}}),e("#bg-slider .slideshow_bg").length>0&&e(".slideshow_bg").each(function(){var i=e(this),t=i.find("img").prop("src");t&&i.css("backgroundImage","url("+t+")")}),e(".timeline-slider li h4 a").click(function(i){i.preventDefault();var t=e(this).attr("data-time");e(this).parents("li").position(),e(this).parents("h4").position();e(".timeline-slider .story").each(function(){e(this).attr("data-time")==t&&(e(this).siblings().removeClass("show"),e(this).addClass("show"),e(".overlay").fadeIn(500))})}),e(".timeline-slider .story .heading a.closeStory").click(function(i){i.preventDefault(),e(this).parent().parent().removeClass("show"),e(".overlay").fadeOut(500)})}),e(i).on("load",function(){e(".timeline-slider").flexslider({animation:"slide",animationLoop:!1,itemWidth:210,itemMargin:5,controlNav:!0,minItems:s(),maxItems:s()})})}(jQuery,window,document);;
jQuery(document).ready(function() {
		jQuery(".team .tab-pane .col").unwrap();
		/*jQuery("section.contact-form input[type='email']").unwrap();
		jQuery("section.contact-form input[type='text']").unwrap();*/
		
		//jQuery("section.contact-form input[type=checkbox]").after("<span></span>");
		
		jQuery("section.contact-form .js-form-item-phone input[type=text]").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if (jQuery.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    	});
		
		jQuery(".search-mob a").click(function(){
				jQuery(".region-header-search-mobile").toggle("slow");
		});	
		
		
		var prev_href = jQuery('.post-navigation div.prev > a').attr('href');
		var next_href = jQuery('.post-navigation div.next > a').attr('href');
		if(prev_href == next_href) {
			jQuery('.post-navigation div.prev').hide();
		}
		
		
		/*jQuery("section.contact-form .webform-button--submit").on("click", function (e) {
            
            e.preventDefault();
            
            var firstname =jQuery("section.contact-form .js-form-item-first-name input[type=text]"),
                lastname = jQuery("section.contact-form .js-form-item-last-name input[type=text]"),
                email = jQuery("section.contact-form .js-form-item-email input[type=email]")
                phone = jQuery("section.contact-form .js-form-item-phone input[type=text]");
            
            var $form = jQuery('section.contact-form form');
                
            if ($form[0].checkValidity()){
            	jQuery(this).attr("disabled", true);
				jQuery('body').css('cursor', 'wait');
				jQuery('section.contact-form form').submit();
			}
			else {
				isEmpty(firstname);
	            isEmpty(lastname);
	            isEmpty(phone);
	            isEmpty(email);
	            //validateEmail(email);
	        }
		});*/
});


/*check data for empty starts here*/
String.prototype.enhancedTrimLeft = function (charList) {
    if (charList === undefined) {
        charList = "\\s";
    }
    return this.replace(new RegExp("^[" + charList + "]+"), '');
}
String.prototype.enhancedTrimRight = function (charList) {
    if (charList === undefined) {
        charList = "\\s";
    }
    return this.replace(new RegExp("[" + charList + "]+$"), '');
}
String.prototype.enhancedTrim = function (charList) {
    if (charList === undefined) {
        charList = "\\s";
    }
    return this.enhancedTrimLeft(charList).enhancedTrimRight(charList);
}


isEmpty = function (theField) {
		if (theField.val().enhancedTrim().length == 0) {
                            theField.after("<div class='message--error'>This is a required field</div>").slideDown(400);
                            return true;
        }
        return false;
};

isSelectval = function (theField, theParent) {
                    	if (theField.val() == 0) {
                            $(""+theParent+"").after("<div class='message--error'>This is a required field</div>").slideDown(400);
                            return true;
                        }
                        return false;
                    };
                    
validateEmail = function (theField) {
                        if (!isEmpty(theField)) {
                            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
                            if (!re.test(theField.val())) {
                                console.log(theField.parent());
                                theField.parent().after("<div class='message--error message-validate-error'>This email is invalid. Please enter a valid email address.</div>").slideDown(400);
                                return true;
                            }
                        }
    return false;
};

/*check for empty fields ends here*/;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (Drupal, drupalSettings) {
  Drupal.behaviors.activeLinks = {
    attach: function attach(context) {
      var path = drupalSettings.path;
      var queryString = JSON.stringify(path.currentQuery);
      var querySelector = path.currentQuery ? '[data-drupal-link-query=\'' + queryString + '\']' : ':not([data-drupal-link-query])';
      var originalSelectors = ['[data-drupal-link-system-path="' + path.currentPath + '"]'];
      var selectors = void 0;

      if (path.isFront) {
        originalSelectors.push('[data-drupal-link-system-path="<front>"]');
      }

      selectors = [].concat(originalSelectors.map(function (selector) {
        return selector + ':not([hreflang])';
      }), originalSelectors.map(function (selector) {
        return selector + '[hreflang="' + path.currentLanguage + '"]';
      }));

      selectors = selectors.map(function (current) {
        return current + querySelector;
      });

      var activeLinks = context.querySelectorAll(selectors.join(','));
      var il = activeLinks.length;
      for (var i = 0; i < il; i++) {
        activeLinks[i].classList.add('is-active');
      }
    },
    detach: function detach(context, settings, trigger) {
      if (trigger === 'unload') {
        var activeLinks = context.querySelectorAll('[data-drupal-link-system-path].is-active');
        var il = activeLinks.length;
        for (var i = 0; i < il; i++) {
          activeLinks[i].classList.remove('is-active');
        }
      }
    }
  };
})(Drupal, drupalSettings);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function ($, Drupal, drupalSettings, storage) {
  var currentUserID = parseInt(drupalSettings.user.uid, 10);

  var secondsIn30Days = 2592000;
  var thirtyDaysAgo = Math.round(new Date().getTime() / 1000) - secondsIn30Days;

  var embeddedLastReadTimestamps = false;
  if (drupalSettings.history && drupalSettings.history.lastReadTimestamps) {
    embeddedLastReadTimestamps = drupalSettings.history.lastReadTimestamps;
  }

  Drupal.history = {
    fetchTimestamps: function fetchTimestamps(nodeIDs, callback) {
      if (embeddedLastReadTimestamps) {
        callback();
        return;
      }

      $.ajax({
        url: Drupal.url('history/get_node_read_timestamps'),
        type: 'POST',
        data: { 'node_ids[]': nodeIDs },
        dataType: 'json',
        success: function success(results) {
          Object.keys(results || {}).forEach(function (nodeID) {
            storage.setItem('Drupal.history.' + currentUserID + '.' + nodeID, results[nodeID]);
          });
          callback();
        }
      });
    },
    getLastRead: function getLastRead(nodeID) {
      if (embeddedLastReadTimestamps && embeddedLastReadTimestamps[nodeID]) {
        return parseInt(embeddedLastReadTimestamps[nodeID], 10);
      }
      return parseInt(storage.getItem('Drupal.history.' + currentUserID + '.' + nodeID) || 0, 10);
    },
    markAsRead: function markAsRead(nodeID) {
      $.ajax({
        url: Drupal.url('history/' + nodeID + '/read'),
        type: 'POST',
        dataType: 'json',
        success: function success(timestamp) {
          if (embeddedLastReadTimestamps && embeddedLastReadTimestamps[nodeID]) {
            return;
          }

          storage.setItem('Drupal.history.' + currentUserID + '.' + nodeID, timestamp);
        }
      });
    },
    needsServerCheck: function needsServerCheck(nodeID, contentTimestamp) {
      if (contentTimestamp < thirtyDaysAgo) {
        return false;
      }

      if (embeddedLastReadTimestamps && embeddedLastReadTimestamps[nodeID]) {
        return contentTimestamp > parseInt(embeddedLastReadTimestamps[nodeID], 10);
      }

      var minLastReadTimestamp = parseInt(storage.getItem('Drupal.history.' + currentUserID + '.' + nodeID) || 0, 10);
      return contentTimestamp > minLastReadTimestamp;
    }
  };
})(jQuery, Drupal, drupalSettings, window.localStorage);;
/**
* DO NOT EDIT THIS FILE.
* See the following change record for more information,
* https://www.drupal.org/node/2815083
* @preserve
**/

(function (window, Drupal, drupalSettings) {
  window.addEventListener('load', function () {
    if (drupalSettings.history && drupalSettings.history.nodesToMarkAsRead) {
      Object.keys(drupalSettings.history.nodesToMarkAsRead).forEach(Drupal.history.markAsRead);
    }
  });
})(window, Drupal, drupalSettings);;
/**
 * @file
 * Javascript for the Geojson Google Maps.
 *
 * @source: https://github.com/JasonSanford/GeoJSON-to-Google-Maps
 */

(function ($, Drupal) {

  'use strict';

  Drupal.googleGeoJson = function (geojson, options) {

    var _geometryToGoogleMaps = function (geojsonGeometry, opts, geojsonProperties) {

      var googleObj;
      var bounds;
      var paths = [];
      var path = [];
      var i;
      var j;
      var k;
      var coord;
      var ll;

      switch (geojsonGeometry.type) {
        case 'Point':
          opts.position = new google.maps.LatLng(geojsonGeometry.coordinates[1], geojsonGeometry.coordinates[0]);
          bounds = new google.maps.LatLngBounds();
          bounds.extend(opts.position);
          googleObj = new google.maps.Marker(opts);
          googleObj.set('bounds', bounds);
          if (geojsonProperties) {
            googleObj.set('geojsonProperties', geojsonProperties);
          }
          break;

        case 'MultiPoint':
          googleObj = [];
          bounds = new google.maps.LatLngBounds();
          for (i = 0; i < geojsonGeometry.coordinates.length; i++) {
            opts.position = new google.maps.LatLng(geojsonGeometry.coordinates[i][1], geojsonGeometry.coordinates[i][0]);
            bounds.extend(opts.position);
            googleObj.push(new google.maps.Marker(opts));
          }
          if (geojsonProperties) {
            for (k = 0; k < googleObj.length; k++) {
              googleObj[k].set('geojsonProperties', geojsonProperties);
            }
          }
          for (k = 0; k < googleObj.length; k++) {
            googleObj[k].set('bounds', bounds);
          }
          break;

        case 'LineString':
          bounds = new google.maps.LatLngBounds();
          path = [];
          for (i = 0; i < geojsonGeometry.coordinates.length; i++) {
            coord = geojsonGeometry.coordinates[i];
            ll = new google.maps.LatLng(coord[1], coord[0]);
            bounds.extend(ll);
            path.push(ll);
          }
          opts.path = path;
          googleObj = new google.maps.Polyline(opts);
          googleObj.set('bounds', bounds);
          if (geojsonProperties) {
            googleObj.set('geojsonProperties', geojsonProperties);
          }
          break;

        case 'MultiLineString':
          googleObj = [];
          bounds = new google.maps.LatLngBounds();
          for (i = 0; i < geojsonGeometry.coordinates.length; i++) {
            path = [];
            for (j = 0; j < geojsonGeometry.coordinates[i].length; j++) {
              coord = geojsonGeometry.coordinates[i][j];
              ll = new google.maps.LatLng(coord[1], coord[0]);
              bounds.extend(ll);
              path.push(ll);
            }
            opts.path = path;
            googleObj.push(new google.maps.Polyline(opts));
          }
          if (geojsonProperties) {
            for (k = 0; k < googleObj.length; k++) {
              googleObj[k].set('geojsonProperties', geojsonProperties);
            }
          }
          for (k = 0; k < googleObj.length; k++) {
            googleObj[k].set('bounds', bounds);
          }
          break;

        case 'Polygon':
          paths = [];
          bounds = new google.maps.LatLngBounds();
          for (i = 0; i < geojsonGeometry.coordinates.length; i++) {
            path = [];
            for (j = 0; j < geojsonGeometry.coordinates[i].length; j++) {
              ll = new google.maps.LatLng(geojsonGeometry.coordinates[i][j][1], geojsonGeometry.coordinates[i][j][0]);
              bounds.extend(ll);
              path.push(ll);
            }
            paths.push(path);
          }
          opts.paths = paths;
          googleObj = new google.maps.Polygon(opts);
          googleObj.set('bounds', bounds);
          if (geojsonProperties) {
            googleObj.set('geojsonProperties', geojsonProperties);
          }
          break;

        case 'MultiPolygon':
          googleObj = [];
          bounds = new google.maps.LatLngBounds();
          for (i = 0; i < geojsonGeometry.coordinates.length; i++) {
            paths = [];
            for (j = 0; j < geojsonGeometry.coordinates[i].length; j++) {
              path = [];
              for (k = 0; k < geojsonGeometry.coordinates[i][j].length; k++) {
                ll = new google.maps.LatLng(geojsonGeometry.coordinates[i][j][k][1], geojsonGeometry.coordinates[i][j][k][0]);
                bounds.extend(ll);
                path.push(ll);
              }
              paths.push(path);
            }
            opts.paths = paths;
            googleObj.push(new google.maps.Polygon(opts));
          }
          if (geojsonProperties) {
            for (k = 0; k < googleObj.length; k++) {
              googleObj[k].set('geojsonProperties', geojsonProperties);
            }
          }
          for (k = 0; k < googleObj.length; k++) {
            googleObj[k].set('bounds', bounds);
          }
          break;

        case 'GeometryCollection':
          googleObj = [];
          if (!geojsonGeometry.geometries) {
            googleObj = _error('Invalid GeoJSON object: GeometryCollection object missing \'geometries\' member.');
          }
          else {
            for (i = 0; i < geojsonGeometry.geometries.length; i++) {
              googleObj.push(_geometryToGoogleMaps(geojsonGeometry.geometries[i], opts, geojsonProperties || null));
            }
          }
          break;

        default:
          googleObj = _error('Invalid GeoJSON object: Geometry object must be one of \'Point\', \'LineString\', \'Polygon\' or \'MultiPolygon\'.');
      }

      return googleObj;

    };

    var _error = function (message) {

      return {
        type: 'Error',
        message: message
      };

    };

    var obj;

    var opts = options || {};

    switch (geojson.type) {
      case 'FeatureCollection':
        if (!geojson.features) {
          obj = _error('Invalid GeoJSON object: FeatureCollection object missing \'features\' member.');
        }
        else {
          obj = [];
          for (var y = 0; y < geojson.features.length; y++) {
            obj.push(_geometryToGoogleMaps(geojson.features[y].geometry, opts, geojson.features[y].properties));
          }
        }
        break;

      case 'GeometryCollection':
        if (!geojson.geometries) {
          obj = _error('Invalid GeoJSON object: GeometryCollection object missing \'geometries\' member.');
        }
        else {
          obj = [];
          for (var z = 0; z < geojson.geometries.length; z++) {
            obj.push(_geometryToGoogleMaps(geojson.geometries[z], opts, geojson.geometries[z].properties));
          }
        }
        break;

      case 'Feature':
        if (!(geojson.properties && geojson.geometry)) {
          obj = _error('Invalid GeoJSON object: Feature object missing \'properties\' or \'geometry\' member.');
        }
        else {
          obj = _geometryToGoogleMaps(geojson.geometry, opts, geojson.properties);
        }
        break;

      case 'Point': case 'MultiPoint': case 'LineString': case 'MultiLineString': case 'Polygon': case 'MultiPolygon':
        obj = geojson.coordinates
          ? obj = _geometryToGoogleMaps(geojson, opts, geojson.properties)
          : _error('Invalid GeoJSON object: Geometry object missing \'coordinates\' member.');
        break;

      default:
        obj = _error('Invalid GeoJSON object: GeoJSON object must be one of \'Point\', \'LineString\', \'Polygon\', \'MultiPolygon\', \'Feature\', \'FeatureCollection\' or \'GeometryCollection\'.');

    }

    return obj;
  };

})(jQuery, Drupal);
;
/**
 * @file
 * Javascript for the Geofield Google Map formatter.
 */

(function ($, Drupal, drupalSettings) {

  'use strict';

  /**
   * The Geofield Google Map formatter behavior.
   *
   * @type {Drupal~behavior}
   *
   * @prop {Drupal~behaviorAttach} attach
   *   Attaches the Geofield Google Map formatter behavior.
   */
  Drupal.behaviors.geofieldGoogleMap = {
    attach: function (context, settings) {

      if (drupalSettings['geofield_google_map']) {
        $(context).find('.geofield-google-map').once('geofield-processed').each(function (index, element) {
          var mapid = $(element).attr('id');

          // Check if the Map container really exists and hasn't been yet
          // initialized.
          if (drupalSettings['geofield_google_map'][mapid] && !Drupal.geoFieldMap.map_data[mapid]) {

            var map_settings = drupalSettings['geofield_google_map'][mapid]['map_settings'];
            var data = drupalSettings['geofield_google_map'][mapid]['data'];

            // Set the map_data[mapid] settings.
            Drupal.geoFieldMap.map_data[mapid] = map_settings;

            // Load before the Gmap Library, if needed.
            Drupal.geoFieldMap.loadGoogle(mapid, map_settings.gmap_api_key, map_settings.map_additional_libraries, function () {
              Drupal.geoFieldMap.map_initialize(mapid, map_settings, data, context);
            });
          }
        });
      }
    }
  };

  Drupal.geoFieldMap = {

    map_start: {
      center: {lat: 41.85, lng: -87.65},
      zoom: 18
    },

    map_data: {},

    // Google Maps are loaded lazily. In some situations load_google() is
    // called twice, which results in "You have included the Google Maps API
    // multiple times on this page. This may cause unexpected errors." errors.
    // This flag will prevent repeat $.getScript() calls.
    maps_api_loading: false,

    /**
     * Returns the re-coded google maps api language parameter, from html lang attribute.
     *
     * @param {string} html_language - The language id string
     *
     * @return {string} - The transformed language id string
     */
    googleMapsLanguage: function (html_language) {
      switch (html_language) {
        case 'zh-hans':
          html_language = 'zh-CN';
          break;

        case 'zh-hant':
          html_language = 'zh-TW';
          break;
      }
      return html_language;
    },

    /**
     * Provides the callback that is called when maps loads.
     */
    googleCallback: function () {
      var self = this;
      // Wait until the window load event to try to use the maps library.
      $(document).ready(function (e) {
        _.invoke(self.googleCallbacks, 'callback');
        self.googleCallbacks = [];
      });
    },

    /**
     * Adds a callback that will be called once the maps library is loaded.
     *
     * @param {string} callback - The callback
     */
    addCallback: function (callback) {
      var self = this;
      // Ensure callbacks array.
      self.googleCallbacks = self.googleCallbacks || [];
      self.googleCallbacks.push({callback: callback});
    },

    /**
     * Load Google Maps library.
     *
     * @param {string} mapid - The map id
     * @param {string} gmap_api_key - The gmap api key
     * @param {array} additional_libraries - Additional Libraries list
     * @param {string} callback - the Callback function  name
     */
    loadGoogle: function (mapid, gmap_api_key, additional_libraries, callback) {
      var self = this;
      var html_language = $('html').attr('lang') || 'en';

      // Add the callback.
      self.addCallback(callback);

      // Check for google maps.
      if (typeof google === 'undefined' || typeof google.maps === 'undefined') {
        if (self.maps_api_loading === true) {
          return;
        }

        self.maps_api_loading = true;
        // Google maps isn't loaded so lazy load google maps.
        // Default script path.
        var scriptPath = self.map_data[mapid]['gmap_api_localization'] + '?v=3.exp&sensor=false&language=' + self.googleMapsLanguage(html_language);

        // If a Google API key is set, use it.
        if (gmap_api_key) {
          scriptPath += '&key=' + gmap_api_key;
        }

        if (additional_libraries) {
          var libraries = [];
          for (var library in additional_libraries) {
            if (additional_libraries.hasOwnProperty(library)) {
              libraries.push(library);
            }
          }
          scriptPath += '&libraries=' + libraries.join();
        }

        $.getScript(scriptPath)
          .done(function () {
            self.maps_api_loading = false;
            self.googleCallback();
          });

      }
      else {
        // Google maps loaded. Run callback.
        self.googleCallback();
      }
    },

    checkImage: function (imageSrc, setIcon, logError) {
      var img = new Image();
      img.src = imageSrc;
      img.onload = setIcon;
      img.onerror = logError;
    },

    place_feature: function (feature, mapid) {
      var self = this;
      var icon_image = null;

      // Override and set icon image with geojsonProperties.icon, if set as not
      // null/empty.
      if (feature.geojsonProperties.icon && feature.geojsonProperties.icon.length > 0) {
        icon_image = feature.geojsonProperties.icon;
      }

      // Define the OverlappingMarkerSpiderfier flag.
      var oms = self.map_data[mapid].oms ? self.map_data[mapid].oms : null;

      // Set the personalized Icon Image, if set.
      if (feature.setIcon && icon_image && icon_image.length > 0) {
        self.checkImage(icon_image,
          // Success loading image.
          function () {
            feature.setIcon(icon_image);
          });
      }

      var map = self.map_data[mapid].map;

      // Add a default Tooltip on the title geojsonProperty, if existing.
      if (feature.setTitle && feature.geojsonProperties.tooltip) {
        feature.setTitle(feature.geojsonProperties.tooltip);
      }

      // If the feature is a Point, make it a Marker and extend the Map bounds.
      if (feature.getPosition) {
        if (oms) {
          self.map_data[mapid].oms.addMarker(feature);
        }
        else {
          feature.setMap(map);
        }

        // Generate the markers object index based on entity id (and geofield
        // cardinality), and add the marker to the markers object.
        var entity_id = feature['geojsonProperties']['entity_id'];
        if (self.map_data[mapid].geofield_cardinality && self.map_data[mapid].geofield_cardinality !== 1) {
          var i = 0;
          while (self.map_data[mapid].markers[entity_id + '-' + i]) {
            i++;
          }
          self.map_data[mapid].markers[entity_id + '-' + i] = feature;
        }
        else {
          self.map_data[mapid].markers[entity_id] = feature;
        }

        self.map_data[mapid].map_bounds.extend(feature.getPosition());

        // Check for eventual simple or OverlappingMarkerSpiderfier click
        // Listener.
        var clickListener = oms ? 'spider_click' : 'click';
        google.maps.event.addListener(feature, clickListener, function () {
          self.infowindow_open(mapid, feature);
        });
      }

      // If the feature is a Polyline or a Polygon, add to the Map and extend
      // the Map bounds.
      if (feature.getPath) {
        var feature_options = feature.geojsonProperties.path_options ? JSON.parse(feature.geojsonProperties.path_options) : {};
        feature.setOptions(feature_options);
        feature.setMap(map);
        var path = feature.getPath();
        path.forEach(function (element) {
          self.map_data[mapid].map_bounds.extend(element);
        });
        google.maps.event.addListener(feature, 'click', function (event) {
          self.infowindow_open(mapid, feature, event.latLng);
        });
      }

    },

    // Closes and open the Map Infowindow at the input feature.
    infowindow_open: function (mapid, feature, anchor) {
      var self = this;
      var map = self.map_data[mapid].map;
      var properties = feature.get('geojsonProperties');
      if (feature.setTitle && properties && properties.title) {
        feature.setTitle(properties.title);
      }
      map.infowindow.close();
      if (properties.description) {
        map.infowindow.setContent(properties.description);

        // Note: if the feature is a Marker (and not a Polyline/Polygon) its
        // extensions will override the infowindow anchor position, in the map.
        // infowindow.open method.
        map.infowindow.setPosition(anchor);
        setTimeout(function () {
          map.infowindow.open(map, feature);
        }, 200);
      }
    },

    map_refresh: function (mapid) {
      var self = this;
      setTimeout(function () {
        google.maps.event.trigger(self.map_data[mapid].map, 'resize');
      }, 10);
    },

    // Init Geofield Google Map and its functions.
    map_initialize: function (mapid, map_settings, data, context) {
      var self = this;
      $.noConflict();

      // If google and google.maps have been defined.
      if (google && google.maps) {
        var styledMapType;

        var mapOptions = {
          center: map_settings.map_center ? new google.maps.LatLng(map_settings.map_center.lat, map_settings.map_center.lon) : new google.maps.LatLng(42, 12.5),
          zoom: map_settings.map_zoom_and_pan.zoom.initial ? parseInt(map_settings.map_zoom_and_pan.zoom.initial) : 8,
          minZoom: map_settings.map_zoom_and_pan.zoom.min ? parseInt(map_settings.map_zoom_and_pan.zoom.min) : 1,
          maxZoom: map_settings.map_zoom_and_pan.zoom.max ? parseInt(map_settings.map_zoom_and_pan.zoom.max) : 20,
          gestureHandling: map_settings.map_zoom_and_pan.gestureHandling || 'auto',
          mapTypeId: map_settings.map_controls.map_type_id || 'roadmap'
        };

        // Manage the old scrollwheel & draggable settings (deprecated by google maps api).
        if (!map_settings.map_zoom_and_pan.scrollwheel && !map_settings.map_zoom_and_pan.gestureHandling) {
          mapOptions.scrollwheel = false;
        }
        if (!map_settings.map_zoom_and_pan.draggable && !map_settings.map_zoom_and_pan.gestureHandling) {
          mapOptions.draggable = false;
        }

        if (map_settings.map_controls.disable_default_ui) {
          mapOptions.disableDefaultUI = map_settings.map_controls.disable_default_ui;
        }
        else {
          // Implement Custom Style Map, if Set.
          if (map_settings.custom_style_map && map_settings.custom_style_map.custom_style_control && map_settings.custom_style_map.custom_style_name.length > 0 && map_settings.custom_style_map.custom_style_options.length > 0) {
            var customMapStyleName = map_settings.custom_style_map.custom_style_name;
            var customMapStyle = JSON.parse(map_settings.custom_style_map.custom_style_options);
            styledMapType = new google.maps.StyledMapType(customMapStyle, {name: customMapStyleName});
            map_settings.map_controls.map_type_control_options_type_ids.push('custom_styled_map');
          }

          mapOptions.zoomControl = !!map_settings.map_controls.zoom_control;
          mapOptions.mapTypeControl = !!map_settings.map_controls.map_type_control;
          mapOptions.mapTypeControlOptions = {
            mapTypeIds: map_settings.map_controls.map_type_control_options_type_ids ? map_settings.map_controls.map_type_control_options_type_ids : ['roadmap', 'satellite', 'hybrid'],
            position: google.maps.ControlPosition.TOP_LEFT
          };
          mapOptions.scaleControl = !!map_settings.map_controls.scale_control;
          mapOptions.streetViewControl = !!map_settings.map_controls.street_view_control;
          mapOptions.fullscreenControl = !!map_settings.map_controls.fullscreen_control;
        }

        // Add map_additional_options if any.
        if (map_settings.map_additional_options.length > 0) {
          var additionalOptions = JSON.parse(map_settings.map_additional_options);
          // Transforms additionalOptions "true", "false" values into true &
          // false.
          for (var prop in additionalOptions) {
            if (additionalOptions.hasOwnProperty(prop)) {
              if (additionalOptions[prop] === 'true') {
                additionalOptions[prop] = true;
              }
              if (additionalOptions[prop] === 'false') {
                additionalOptions[prop] = false;
              }
            }
          }
          // Merge mapOptions with additionalOptions.
          $.extend(mapOptions, additionalOptions);
        }

        // Define the Geofield Google Map.
        var map = new google.maps.Map(document.getElementById(mapid), mapOptions);

        // Add the Map Reset Control, if set.
        if (map_settings.map_zoom_and_pan.map_reset) {
          var mapResetControlPosition = map_settings.map_zoom_and_pan.map_reset_position || 'TOP_RIGHT';

          // Create the DIV to hold the control and call the mapResetControl()
          // constructor passing in this DIV.
          var mapResetControlDiv = document.createElement('div');
          new self.map_reset_control(mapResetControlDiv, mapid);
          mapResetControlDiv.index = 1;
          map.controls[google.maps.ControlPosition[mapResetControlPosition]].push(mapResetControlDiv);
        }

        if (Drupal.geoFieldMap.map_geocoder_control && map_settings.map_geocoder.control) {
          var mapGeocoderControlPosition = map_settings.map_geocoder.settings.position || 'TOP_RIGHT';
          var mapGeocoderControlDiv = document.createElement('div');
          Drupal.geoFieldMap.map_data[mapid].geocoder_control = new Drupal.geoFieldMap.map_geocoder_control(mapGeocoderControlDiv, mapid);
          mapGeocoderControlDiv.index = 1;
          map.controls[google.maps.ControlPosition[mapGeocoderControlPosition]].push(Drupal.geoFieldMap.map_data[mapid].geocoder_control);
          Drupal.geoFieldMap.map_geocoder_control.autocomplete(mapid, map_settings.map_geocoder.settings);
        }

        // If defined a Custom Map Style, associate the styled map with
        // custom_styled_map MapTypeId and set it to display.
        if (styledMapType) {
          map.mapTypes.set('custom_styled_map', styledMapType);
          // Set Custom Map Style to Default, if requested.
          if (map_settings.custom_style_map && map_settings.custom_style_map.custom_style_default) {
            map.setMapTypeId('custom_styled_map');
          }
        }

        // Define a mapid self property, so other code can interact with it.
        self.map_data[mapid].map = map;
        self.map_data[mapid].map_options = mapOptions;
        self.map_data[mapid].features = data.features;
        self.map_data[mapid].markers = {};

        // Define the MapBounds property.
        self.map_data[mapid].map_bounds = new google.maps.LatLngBounds();

        // Set the zoom force and center property for the map.
        self.map_data[mapid].zoom_force = !!map_settings.map_zoom_and_pan.zoom.force;
        self.map_data[mapid].center_force = !!map_settings.map_center.center_force;

        // Parse the Geojson data into Google Maps Locations.
        var features = data.features && data.features.length > 0 ? Drupal.googleGeoJson(data) : null;

        if (features && features.length > 0 && (!features.type || features.type !== 'Error')) {

          /**
           * Implement  OverlappingMarkerSpiderfier if its control set true.
           */
          if (map_settings.map_oms && map_settings.map_oms.map_oms_control && OverlappingMarkerSpiderfier) {
            var omsOptions = map_settings.map_oms.map_oms_options.length > 0 ? JSON.parse(map_settings.map_oms.map_oms_options) : {
              markersWontMove: true,
              markersWontHide: true,
              basicFormatEvents: true,
              keepSpiderfied: true
            };
            self.map_data[mapid].oms = new OverlappingMarkerSpiderfier(map, omsOptions);
          }

          map.infowindow = new google.maps.InfoWindow({
            content: ''
          });

          // If the map.infowindow is defined, add an event listener for the
          // Ajax Infowindow Popup.
          google.maps.event.addListener(map.infowindow, 'domready', function () {
            var infowindow_content = document.createElement('div');
            infowindow_content.innerHTML = map.infowindow.getContent().trim();
            var content = $('[data-geofield-google-map-ajax-popup]', infowindow_content);
            if (content.length) {
              var url = content.data('geofield-google-map-ajax-popup');
              $.get(url, function (response) {
                if (response) {
                  map.infowindow.setContent(response);
                }
              });
            }
          });

          if (features.setMap) {
            self.place_feature(features, mapid);
          }
          else {
            for (var i in features) {
              if (features[i].setMap) {
                self.place_feature(features[i], mapid);
              }
              else {
                for (var j in features[i]) {
                  if (features[i][j].setMap) {
                    self.place_feature(features[i][j], mapid);
                  }
                }
              }
            }
          }

          // Implement Markeclustering, if more than 1 marker on the map,
          // and the markercluster option is set to true.
          if (typeof MarkerClusterer !== 'undefined' && map_settings.map_markercluster.markercluster_control) {

            var markeclusterOption = {
              imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
            };

            // Add markercluster_additional_options if any.
            if (map_settings.map_markercluster.markercluster_additional_options.length > 0) {
              var markeclusterAdditionalOptions = JSON.parse(map_settings.map_markercluster.markercluster_additional_options);
              // Merge markeclusterOption with markeclusterAdditionalOptions.
              $.extend(markeclusterOption, markeclusterAdditionalOptions);
            }

            // Define a markerCluster property, so other code can interact with
            // it.
            var markerCluster = [];
            var keys = Object.keys(self.map_data[mapid].markers);
            for (var k = 0; k < keys.length; k++) {
              markerCluster.push(self.map_data[mapid].markers[keys[k]]);
            }
            self.map_data[mapid].markerCluster = new MarkerClusterer(map, markerCluster, markeclusterOption);
          }

          // If the Map Initial State is defined by MapBounds,
          // and the map center is not forced.
          if (!self.mapBoundsAreNull(self.map_data[mapid].map_bounds) && !self.map_data[mapid].center_force) {
            map.fitBounds(self.map_data[mapid].map_bounds);
          }
          // Else if the Map Initial State is defined by Markers in the exact
          // same locations,.
          else if (self.map_data[mapid].markers.constructor === Object &&
            self.mapBoundsAreNull(self.map_data[mapid].map_bounds) &&
            // And the map center is not forced.
            !self.map_data[mapid].center_force) {
            map.setCenter(self.map_data[mapid].markers[Object.keys(self.map_data[mapid].markers)[0]].getPosition());
          }

        }

        google.maps.event.addListenerOnce(map, 'bounds_changed', function () {
          // Force the Map Zoom if requested.
          if (self.map_data[mapid].zoom_force) {
            self.map_data[mapid].map.setZoom(self.map_data[mapid].map_options.zoom);
          }
        });

        // At the beginning (once) ...
        google.maps.event.addListenerOnce(map, 'idle', function () {

          // Open the Feature infowindow, if so set.
          if (self.map_data[mapid].map_marker_and_infowindow.force_open && parseInt(self.map_data[mapid].map_marker_and_infowindow.force_open) === 1) {
            // map.setCenter(features[0].getPosition());
            self.infowindow_open(mapid, features[0]);
          }

          // In case of map initial position not forced, and zooFiner not
          // null/neutral, adapt the Map Zoom and the Start Zoom accordingly.
          if (!self.map_data[mapid].zoom_force && self.map_data[mapid].map_zoom_and_pan.zoom.finer && self.map_data[mapid].map_zoom_and_pan.zoom.finer !== 0) {
            map.setOptions({
              zoom: map.getZoom() + parseInt(self.map_data[mapid].map_zoom_and_pan.zoom.finer)
            });
          }

          // Update map initial state after everything is settled.
          self.map_set_start_state(mapid, map.getCenter(), map.getZoom());

          // Trigger a custom event on Geofield Map initialized, with mapid.
          $(context).trigger('geofieldMapInit', mapid);
        });

      }
    },

    mapBoundsAreNull: function (mapBounds) {
      var north_east = mapBounds.getNorthEast();
      var south_west = mapBounds.getSouthWest();
      return north_east.toString() === south_west.toString();

    },

    map_set_start_state: function (mapid, center, zoom) {
      var self = this;
      self.map_data[mapid].map_start_center = center;
      self.map_data[mapid].map_start_zoom = zoom;
    },

    map_reset_control: function (controlDiv, mapid) {
      // Set CSS for the control border.
      var controlUI = document.createElement('div');
      controlUI.style.backgroundColor = '#fff';
      controlUI.style.boxShadow = 'rgba(0,0,0,.3) 0px 1px 4px -1px';
      controlUI.style.cursor = 'pointer';
      controlUI.title = Drupal.t('Click to reset the map to its initial state');
      controlUI.style.margin = '10px';
      controlUI.style.position = 'relative';
      controlUI.id = 'geofield-map--' + mapid + '--reset-control';
      controlDiv.appendChild(controlUI);

      // Set CSS for the control interior.
      var controlText = document.createElement('div');
      controlText.style.position = 'relative';
      controlText.innerHTML = Drupal.t('Reset Map');
      controlText.style.padding = '0 17px';
      controlText.style.display = 'table-cell';
      controlText.style.height = '40px';
      controlText.style.fontSize = '18px';
      controlText.style.color = 'rgb(86,86,86)';
      controlText.style.textAlign = 'center';
      controlText.style.verticalAlign = 'middle';
      controlUI.appendChild(controlText);

      // Setup the click event listeners: simply set the map to Chicago.
      controlUI.addEventListener('click', function () {
        Drupal.geoFieldMap.map_data[mapid].map.setCenter(Drupal.geoFieldMap.map_data[mapid].map_start_center);
        Drupal.geoFieldMap.map_data[mapid].map.setZoom(Drupal.geoFieldMap.map_data[mapid].map_start_zoom);
      });
      return controlUI;
    }

  };

})(jQuery, Drupal, drupalSettings);
;
