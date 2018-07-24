!function(t){"function"==typeof define&&define.amd?define(["jquery"],t):t(jQuery)}(function(l){l.extend(l.fn,{validate:function(t){if(this.length){var i=l.data(this[0],"validator");return i||(this.attr("novalidate","novalidate"),i=new l.validator(t,this[0]),l.data(this[0],"validator",i),i.settings.onsubmit&&(this.validateDelegate(":submit","click",function(t){i.settings.submitHandler&&(i.submitButton=t.target),l(t.target).hasClass("cancel")&&(i.cancelSubmit=!0),void 0!==l(t.target).attr("formnovalidate")&&(i.cancelSubmit=!0)}),this.submit(function(e){function t(){var t;return!i.settings.submitHandler||(i.submitButton&&(t=l("<input type='hidden'/>").attr("name",i.submitButton.name).val(l(i.submitButton).val()).appendTo(i.currentForm)),i.settings.submitHandler.call(i,i.currentForm,e),i.submitButton&&t.remove(),!1)}return i.settings.debug&&e.preventDefault(),i.cancelSubmit?(i.cancelSubmit=!1,t()):i.form()?i.pendingRequest?!(i.formSubmitted=!0):t():(i.focusInvalid(),!1)})),i)}t&&t.debug&&window.console&&console.warn("Tidak ada yang dipilih, tidak dapat memvalidasi.")},valid:function(){var t,e;return l(this[0]).is("form")?t=this.validate().form():(t=!0,e=l(this[0].form).validate(),this.each(function(){t=e.element(this)&&t})),t},removeAttrs:function(t){var i={},s=this;return l.each(t.split(/\s/),function(t,e){i[e]=s.attr(e),s.removeAttr(e)}),i},rules:function(t,e){var i,s,n,r,a,o,u=this[0];if(t)switch(i=l.data(u.form,"validator").settings,s=i.rules,n=l.validator.staticRules(u),t){case"add":l.extend(n,l.validator.normalizeRule(e)),delete n.messages,s[u.name]=n,e.messages&&(i.messages[u.name]=l.extend(i.messages[u.name],e.messages));break;case"remove":return e?(o={},l.each(e.split(/\s/),function(t,e){o[e]=n[e],delete n[e],"required"===e&&l(u).removeAttr("aria-required")}),o):(delete s[u.name],n)}return(r=l.validator.normalizeRules(l.extend({},l.validator.classRules(u),l.validator.attributeRules(u),l.validator.dataRules(u),l.validator.staticRules(u)),u)).required&&(a=r.required,delete r.required,r=l.extend({required:a},r),l(u).attr("aria-required","true")),r.remote&&(a=r.remote,delete r.remote,r=l.extend(r,{remote:a})),r}}),l.extend(l.expr[":"],{blank:function(t){return!l.trim(""+l(t).val())},filled:function(t){return!!l.trim(""+l(t).val())},unchecked:function(t){return!l(t).prop("checked")}}),l.validator=function(t,e){this.settings=l.extend(!0,{},l.validator.defaults,t),this.currentForm=e,this.init()},l.validator.format=function(i,t){return 1===arguments.length?function(){var t=l.makeArray(arguments);return t.unshift(i),l.validator.format.apply(this,t)}:(2<arguments.length&&t.constructor!==Array&&(t=l.makeArray(arguments).slice(1)),t.constructor!==Array&&(t=[t]),l.each(t,function(t,e){i=i.replace(new RegExp("\\{"+t+"\\}","g"),function(){return e})}),i)},l.extend(l.validator,{defaults:{messages:{},groups:{},rules:{},errorClass:"error",validClass:"valid",errorElement:"label",focusInvalid:!0,errorContainer:l([]),errorLabelContainer:l([]),onsubmit:!0,ignore:":hidden",ignoreTitle:!1,onfocusin:function(t){this.lastActive=t,this.settings.focusCleanup&&!this.blockFocusCleanup&&(this.settings.unhighlight&&this.settings.unhighlight.call(this,t,this.settings.errorClass,this.settings.validClass),this.hideThese(this.errorsFor(t)))},onfocusout:function(t){this.checkable(t)||!(t.name in this.submitted)&&this.optional(t)||this.element(t)},onkeyup:function(t,e){(9!==e.which||""!==this.elementValue(t))&&(t.name in this.submitted||t===this.lastElement)&&this.element(t)},onclick:function(t){t.name in this.submitted?this.element(t):t.parentNode.name in this.submitted&&this.element(t.parentNode)},highlight:function(t,e,i){"radio"===t.type?this.findByName(t.name).addClass(e).removeClass(i):l(t).addClass(e).removeClass(i)},unhighlight:function(t,e,i){"radio"===t.type?this.findByName(t.name).removeClass(e).addClass(i):l(t).removeClass(e).addClass(i)}},setDefaults:function(t){l.extend(l.validator.defaults,t)},messages:{required:"Kolom ini wajib di isi.",remote:"Perbaiki kolom ini.",email:"Email tidak valid.",url:"URL tidak valid.",date:"Tanggal tidak valid.",dateISO:"Tanggal ( ISO ) tidak valid.",number:"Nomor tidak valid.",digits:"Masukan angka saja.",creditcard:"Kartu kredit tidak valid.",equalTo:"Masukkan kembali.",maxlength:l.validator.format("Maksimal {0} karakter."),minlength:l.validator.format("Minimal {0} karakter."),rangelength:l.validator.format("Masukan {0} sampai {1} karakter."),range:l.validator.format("Masukan antara {0} dan {1}."),max:l.validator.format("Masukan angka kurang atau sama dengan {0}."),min:l.validator.format("Masukan angka lebih atau sama dengan {0}.")},autoCreateRanges:!1,prototype:{init:function(){function t(t){var e=l.data(this[0].form,"validator"),i="on"+t.type.replace(/^validate/,""),s=e.settings;s[i]&&!this.is(s.ignore)&&s[i].call(e,this[0],t)}this.labelContainer=l(this.settings.errorLabelContainer),this.errorContext=this.labelContainer.length&&this.labelContainer||l(this.currentForm),this.containers=l(this.settings.errorContainer).add(this.settings.errorLabelContainer),this.submitted={},this.valueCache={},this.pendingRequest=0,this.pending={},this.invalid={},this.reset();var i,s=this.groups={};l.each(this.settings.groups,function(i,t){"string"==typeof t&&(t=t.split(/\s/)),l.each(t,function(t,e){s[e]=i})}),i=this.settings.rules,l.each(i,function(t,e){i[t]=l.validator.normalizeRule(e)}),l(this.currentForm).validateDelegate(":text, [type='password'], [type='file'], select, textarea, [type='number'], [type='search'] ,[type='tel'], [type='url'], [type='email'], [type='datetime'], [type='date'], [type='month'], [type='week'], [type='time'], [type='datetime-local'], [type='range'], [type='color'], [type='radio'], [type='checkbox']","focusin focusout keyup",t).validateDelegate("select, option, [type='radio'], [type='checkbox']","click",t),this.settings.invalidHandler&&l(this.currentForm).bind("invalid-form.validate",this.settings.invalidHandler),l(this.currentForm).find("[required], [data-rule-required], .required").attr("aria-required","true")},form:function(){return this.checkForm(),l.extend(this.submitted,this.errorMap),this.invalid=l.extend({},this.errorMap),this.valid()||l(this.currentForm).triggerHandler("invalid-form",[this]),this.showErrors(),this.valid()},checkForm:function(){this.prepareForm();for(var t=0,e=this.currentElements=this.elements();e[t];t++)this.check(e[t]);return this.valid()},element:function(t){var e=this.clean(t),i=this.validationTargetFor(e),s=!0;return void 0===(this.lastElement=i)?delete this.invalid[e.name]:(this.prepareElement(i),this.currentElements=l(i),(s=!1!==this.check(i))?delete this.invalid[i.name]:this.invalid[i.name]=!0),l(t).attr("aria-invalid",!s),this.numberOfInvalids()||(this.toHide=this.toHide.add(this.containers)),this.showErrors(),s},showErrors:function(e){if(e){for(var t in l.extend(this.errorMap,e),this.errorList=[],e)this.errorList.push({message:e[t],element:this.findByName(t)[0]});this.successList=l.grep(this.successList,function(t){return!(t.name in e)})}this.settings.showErrors?this.settings.showErrors.call(this,this.errorMap,this.errorList):this.defaultShowErrors()},resetForm:function(){l.fn.resetForm&&l(this.currentForm).resetForm(),this.submitted={},this.lastElement=null,this.prepareForm(),this.hideErrors(),this.elements().removeClass(this.settings.errorClass).removeData("previousValue").removeAttr("aria-invalid")},numberOfInvalids:function(){return this.objectLength(this.invalid)},objectLength:function(t){var e,i=0;for(e in t)i++;return i},hideErrors:function(){this.hideThese(this.toHide)},hideThese:function(t){t.not(this.containers).text(""),this.addWrapper(t).hide()},valid:function(){return 0===this.size()},size:function(){return this.errorList.length},focusInvalid:function(){if(this.settings.focusInvalid)try{l(this.findLastActive()||this.errorList.length&&this.errorList[0].element||[]).filter(":visible").focus().trigger("focusin")}catch(t){}},findLastActive:function(){var e=this.lastActive;return e&&1===l.grep(this.errorList,function(t){return t.element.name===e.name}).length&&e},elements:function(){var t=this,e={};return l(this.currentForm).find("input, select, textarea").not(":submit, :reset, :image, [disabled]").not(this.settings.ignore).filter(function(){return!this.name&&t.settings.debug&&window.console&&console.error("%o has no name assigned",this),!(this.name in e||!t.objectLength(l(this).rules()))&&(e[this.name]=!0)})},clean:function(t){return l(t)[0]},errors:function(){var t=this.settings.errorClass.split(" ").join(".");return l(this.settings.errorElement+"."+t,this.errorContext)},reset:function(){this.successList=[],this.errorList=[],this.errorMap={},this.toShow=l([]),this.toHide=l([]),this.currentElements=l([])},prepareForm:function(){this.reset(),this.toHide=this.errors().add(this.containers)},prepareElement:function(t){this.reset(),this.toHide=this.errorsFor(t)},elementValue:function(t){var e,i=l(t),s=t.type;return"radio"===s||"checkbox"===s?l("input[name='"+t.name+"']:checked").val():"number"===s&&void 0!==t.validity?!t.validity.badInput&&i.val():"string"==typeof(e=i.val())?e.replace(/\r/g,""):e},check:function(e){e=this.validationTargetFor(this.clean(e));var t,i,s,n=l(e).rules(),r=l.map(n,function(t,e){return e}).length,a=!1,o=this.elementValue(e);for(i in n){s={method:i,parameters:n[i]};try{if("dependency-mismatch"===(t=l.validator.methods[i].call(this,o,e,s.parameters))&&1===r){a=!0;continue}if(a=!1,"pending"===t)return void(this.toHide=this.toHide.not(this.errorsFor(e)));if(!t)return this.formatAndAdd(e,s),!1}catch(t){throw this.settings.debug&&window.console&&console.log("Pengecualian terjadi saat memeriksa elemen "+e.id+", cek kembali metode '"+s.method+"'.",t),t}}if(!a)return this.objectLength(n)&&this.successList.push(e),!0},customDataMessage:function(t,e){return l(t).data("msg"+e.charAt(0).toUpperCase()+e.substring(1).toLowerCase())||l(t).data("msg")},customMessage:function(t,e){var i=this.settings.messages[t];return i&&(i.constructor===String?i:i[e])},findDefined:function(){for(var t=0;t<arguments.length;t++)if(void 0!==arguments[t])return arguments[t]},defaultMessage:function(t,e){return this.findDefined(this.customMessage(t.name,e),this.customDataMessage(t,e),!this.settings.ignoreTitle&&t.title||void 0,l.validator.messages[e],"<strong>Peringatan: Tidak ada pesan untuk "+t.name+"</strong>")},formatAndAdd:function(t,e){var i=this.defaultMessage(t,e.method),s=/\$?\{(\d+)\}/g;"function"==typeof i?i=i.call(this,e.parameters,t):s.test(i)&&(i=l.validator.format(i.replace(s,"{$1}"),e.parameters)),this.errorList.push({message:i,element:t,method:e.method}),this.errorMap[t.name]=i,this.submitted[t.name]=i},addWrapper:function(t){return this.settings.wrapper&&(t=t.add(t.parent(this.settings.wrapper))),t},defaultShowErrors:function(){var t,e,i;for(t=0;this.errorList[t];t++)i=this.errorList[t],this.settings.highlight&&this.settings.highlight.call(this,i.element,this.settings.errorClass,this.settings.validClass),this.showLabel(i.element,i.message);if(this.errorList.length&&(this.toShow=this.toShow.add(this.containers)),this.settings.success)for(t=0;this.successList[t];t++)this.showLabel(this.successList[t]);if(this.settings.unhighlight)for(t=0,e=this.validElements();e[t];t++)this.settings.unhighlight.call(this,e[t],this.settings.errorClass,this.settings.validClass);this.toHide=this.toHide.not(this.toShow),this.hideErrors(),this.addWrapper(this.toShow).show()},validElements:function(){return this.currentElements.not(this.invalidElements())},invalidElements:function(){return l(this.errorList).map(function(){return this.element})},showLabel:function(t,e){var i,s,n,r=this.errorsFor(t),a=this.idOrName(t),o=l(t).attr("aria-describedby");r.length?(r.removeClass(this.settings.validClass).addClass(this.settings.errorClass),r.html(e)):(i=r=l("<"+this.settings.errorElement+">").attr("id",a+"-error").addClass(this.settings.errorClass).html(e||""),this.settings.wrapper&&(i=r.hide().show().wrap("<"+this.settings.wrapper+"/>").parent()),this.labelContainer.length?this.labelContainer.append(i):this.settings.errorPlacement?this.settings.errorPlacement(i,l(t)):i.insertAfter(t),r.is("label")?r.attr("for",a):0===r.parents("label[for='"+a+"']").length&&(n=r.attr("id"),o?o.match(new RegExp("\b"+n+"\b"))||(o+=" "+n):o=n,l(t).attr("aria-describedby",o),(s=this.groups[t.name])&&l.each(this.groups,function(t,e){e===s&&l("[name='"+t+"']",this.currentForm).attr("aria-describedby",r.attr("id"))}))),!e&&this.settings.success&&(r.text(""),"string"==typeof this.settings.success?r.addClass(this.settings.success):this.settings.success(r,t)),this.toShow=this.toShow.add(r)},errorsFor:function(t){var e=this.idOrName(t),i=l(t).attr("aria-describedby"),s="label[for='"+e+"'], label[for='"+e+"'] *";return i&&(s=s+", #"+i.replace(/\s+/g,", #")),this.errors().filter(s)},idOrName:function(t){return this.groups[t.name]||(this.checkable(t)?t.name:t.id||t.name)},validationTargetFor:function(t){return this.checkable(t)&&(t=this.findByName(t.name).not(this.settings.ignore)[0]),t},checkable:function(t){return/radio|checkbox/i.test(t.type)},findByName:function(t){return l(this.currentForm).find("[name='"+t+"']")},getLength:function(t,e){switch(e.nodeName.toLowerCase()){case"select":return l("option:selected",e).length;case"input":if(this.checkable(e))return this.findByName(e.name).filter(":checked").length}return t.length},depend:function(t,e){return!this.dependTypes[typeof t]||this.dependTypes[typeof t](t,e)},dependTypes:{boolean:function(t){return t},string:function(t,e){return!!l(t,e.form).length},function:function(t,e){return t(e)}},optional:function(t){var e=this.elementValue(t);return!l.validator.methods.required.call(this,e,t)&&"dependency-mismatch"},startRequest:function(t){this.pending[t.name]||(this.pendingRequest++,this.pending[t.name]=!0)},stopRequest:function(t,e){this.pendingRequest--,this.pendingRequest<0&&(this.pendingRequest=0),delete this.pending[t.name],e&&0===this.pendingRequest&&this.formSubmitted&&this.form()?(l(this.currentForm).submit(),this.formSubmitted=!1):!e&&0===this.pendingRequest&&this.formSubmitted&&(l(this.currentForm).triggerHandler("invalid-form",[this]),this.formSubmitted=!1)},previousValue:function(t){return l.data(t,"previousValue")||l.data(t,"previousValue",{old:null,valid:!0,message:this.defaultMessage(t,"remote")})}},classRuleSettings:{required:{required:!0},email:{email:!0},url:{url:!0},date:{date:!0},dateISO:{dateISO:!0},number:{number:!0},digits:{digits:!0},creditcard:{creditcard:!0}},addClassRules:function(t,e){t.constructor===String?this.classRuleSettings[t]=e:l.extend(this.classRuleSettings,t)},classRules:function(t){var e={},i=l(t).attr("class");return i&&l.each(i.split(" "),function(){this in l.validator.classRuleSettings&&l.extend(e,l.validator.classRuleSettings[this])}),e},attributeRules:function(t){var e,i,s={},n=l(t),r=t.getAttribute("type");for(e in l.validator.methods)"required"===e?(""===(i=t.getAttribute(e))&&(i=!0),i=!!i):i=n.attr(e),/min|max/.test(e)&&(null===r||/number|range|text/.test(r))&&(i=Number(i)),i||0===i?s[e]=i:r===e&&"range"!==r&&(s[e]=!0);return s.maxlength&&/-1|2147483647|524288/.test(s.maxlength)&&delete s.maxlength,s},dataRules:function(t){var e,i,s={},n=l(t);for(e in l.validator.methods)void 0!==(i=n.data("rule"+e.charAt(0).toUpperCase()+e.substring(1).toLowerCase()))&&(s[e]=i);return s},staticRules:function(t){var e={},i=l.data(t.form,"validator");return i.settings.rules&&(e=l.validator.normalizeRule(i.settings.rules[t.name])||{}),e},normalizeRules:function(s,n){return l.each(s,function(t,e){if(!1!==e){if(e.param||e.depends){var i=!0;switch(typeof e.depends){case"string":i=!!l(e.depends,n.form).length;break;case"function":i=e.depends.call(n,n)}i?s[t]=void 0===e.param||e.param:delete s[t]}}else delete s[t]}),l.each(s,function(t,e){s[t]=l.isFunction(e)?e(n):e}),l.each(["minlength","maxlength"],function(){s[this]&&(s[this]=Number(s[this]))}),l.each(["rangelength","range"],function(){var t;s[this]&&(l.isArray(s[this])?s[this]=[Number(s[this][0]),Number(s[this][1])]:"string"==typeof s[this]&&(t=s[this].replace(/[\[\]]/g,"").split(/[\s,]+/),s[this]=[Number(t[0]),Number(t[1])]))}),l.validator.autoCreateRanges&&(s.min&&s.max&&(s.range=[s.min,s.max],delete s.min,delete s.max),s.minlength&&s.maxlength&&(s.rangelength=[s.minlength,s.maxlength],delete s.minlength,delete s.maxlength)),s},normalizeRule:function(t){if("string"==typeof t){var e={};l.each(t.split(/\s/),function(){e[this]=!0}),t=e}return t},addMethod:function(t,e,i){l.validator.methods[t]=e,l.validator.messages[t]=void 0!==i?i:l.validator.messages[t],e.length<3&&l.validator.addClassRules(t,l.validator.normalizeRule(t))},methods:{required:function(t,e,i){if(!this.depend(i,e))return"dependency-mismatch";if("select"===e.nodeName.toLowerCase()){var s=l(e).val();return s&&0<s.length}return this.checkable(e)?0<this.getLength(t,e):0<l.trim(t).length},email:function(t,e){return this.optional(e)||/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/.test(t)},url:function(t,e){return this.optional(e)||/^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i.test(t)},date:function(t,e){return this.optional(e)||!/Invalid|NaN/.test(new Date(t).toString())},dateISO:function(t,e){return this.optional(e)||/^\d{4}[\/\-](0?[1-9]|1[012])[\/\-](0?[1-9]|[12][0-9]|3[01])$/.test(t)},number:function(t,e){return this.optional(e)||/^-?(?:\d+|\d{1,3}(?:,\d{3})+)?(?:\.\d+)?$/.test(t)},digits:function(t,e){return this.optional(e)||/^\d+$/.test(t)},creditcard:function(t,e){if(this.optional(e))return"dependency-mismatch";if(/[^0-9 \-]+/.test(t))return!1;var i,s,n=0,r=0,a=!1;if((t=t.replace(/\D/g,"")).length<13||19<t.length)return!1;for(i=t.length-1;0<=i;i--)s=t.charAt(i),r=parseInt(s,10),a&&9<(r*=2)&&(r-=9),n+=r,a=!a;return n%10==0},minlength:function(t,e,i){var s=l.isArray(t)?t.length:this.getLength(l.trim(t),e);return this.optional(e)||i<=s},maxlength:function(t,e,i){var s=l.isArray(t)?t.length:this.getLength(l.trim(t),e);return this.optional(e)||s<=i},rangelength:function(t,e,i){var s=l.isArray(t)?t.length:this.getLength(l.trim(t),e);return this.optional(e)||s>=i[0]&&s<=i[1]},min:function(t,e,i){return this.optional(e)||i<=t},max:function(t,e,i){return this.optional(e)||t<=i},range:function(t,e,i){return this.optional(e)||t>=i[0]&&t<=i[1]},equalTo:function(t,e,i){var s=l(i);return this.settings.onfocusout&&s.unbind(".validate-equalTo").bind("blur.validate-equalTo",function(){l(e).valid()}),t===s.val()},remote:function(r,a,t){if(this.optional(a))return"dependency-mismatch";var o,e,u=this.previousValue(a);return this.settings.messages[a.name]||(this.settings.messages[a.name]={}),u.originalMessage=this.settings.messages[a.name].remote,this.settings.messages[a.name].remote=u.message,t="string"==typeof t&&{url:t}||t,u.old===r?u.valid:(u.old=r,(o=this).startRequest(a),(e={})[a.name]=r,l.ajax(l.extend(!0,{url:t,mode:"abort",port:"validate"+a.name,dataType:"json",data:e,context:o.currentForm,success:function(t){var e,i,s,n=!0===t||"true"===t;o.settings.messages[a.name].remote=u.originalMessage,n?(s=o.formSubmitted,o.prepareElement(a),o.formSubmitted=s,o.successList.push(a),delete o.invalid[a.name],o.showErrors()):(e={},i=t||o.defaultMessage(a,"remote"),e[a.name]=u.message=l.isFunction(i)?i(r):i,o.invalid[a.name]=!0,o.showErrors(e)),u.valid=n,o.stopRequest(a,n)}},t)),"pending")}}}),l.format=function(){throw"$.format sudah tidak digunakan lagi. Silakan gunakan $ .validator.format sebagai gantinya."};var s,n={};l.ajaxPrefilter?l.ajaxPrefilter(function(t,e,i){var s=t.port;"abort"===t.mode&&(n[s]&&n[s].abort(),n[s]=i)}):(s=l.ajax,l.ajax=function(t){var e=("mode"in t?t:l.ajaxSettings).mode,i=("port"in t?t:l.ajaxSettings).port;return"abort"===e?(n[i]&&n[i].abort(),n[i]=s.apply(this,arguments),n[i]):s.apply(this,arguments)}),l.extend(l.fn,{validateDelegate:function(i,t,s){return this.bind(t,function(t){var e=l(t.target);return e.is(i)?s.apply(e,arguments):void 0})}})});