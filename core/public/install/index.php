<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="robots" content="noindex,nofollow">
    <title>Setup Configuration File</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <style>
        .button{text-align: center;}.installer-header{text-align: center;}
        .wp-core-ui .button,.wp-core-ui .button-primary,.wp-core-ui .button-secondary{display:inline-block;text-decoration:none;font-size:13px;line-height:2.15384615;min-height:30px;margin:0;padding:0 10px;cursor:pointer;border-width:1px;border-style:solid;-webkit-appearance:none;border-radius:3px;white-space:nowrap;box-sizing:border-box}.wp-core-ui button::-moz-focus-inner,.wp-core-ui input[type=button]::-moz-focus-inner,.wp-core-ui input[type=reset]::-moz-focus-inner,.wp-core-ui input[type=submit]::-moz-focus-inner{border-width:0;border-style:none;padding:0}.wp-core-ui .button-group.button-large .button,.wp-core-ui .button.button-large{min-height:32px;line-height:2.30769231;padding:0 12px}.wp-core-ui .button-group.button-small .button,.wp-core-ui .button.button-small{min-height:26px;line-height:2.18181818;padding:0 8px;font-size:11px}.wp-core-ui .button-group.button-hero .button,.wp-core-ui .button.button-hero{font-size:14px;min-height:46px;line-height:3.14285714;padding:0 36px}.wp-core-ui .button.hidden{display:none}.wp-core-ui input[type=reset],.wp-core-ui input[type=reset]:active,.wp-core-ui input[type=reset]:focus,.wp-core-ui input[type=reset]:hover{background:0 0;border:none;box-shadow:none;padding:0 2px 1px;width:auto}.wp-core-ui .button,.wp-core-ui .button-secondary{color:#2271b1;border-color:#2271b1;background:#f6f7f7;vertical-align:top}.wp-core-ui p .button{vertical-align:baseline}.wp-core-ui .button-secondary:hover,.wp-core-ui .button.hover,.wp-core-ui .button:hover{background:#f0f0f1;border-color:#0a4b78;color:#0a4b78}.wp-core-ui .button-secondary:focus,.wp-core-ui .button.focus,.wp-core-ui .button:focus{background:#f6f7f7;border-color:#3582c4;color:#0a4b78;box-shadow:0 0 0 1px #3582c4;outline:2px solid transparent;outline-offset:0}.wp-core-ui .button-secondary:active,.wp-core-ui .button:active{background:#f6f7f7;border-color:#8c8f94;box-shadow:none}.wp-core-ui .button.active,.wp-core-ui .button.active:hover{background-color:#dcdcde;color:#135e96;border-color:#0a4b78;box-shadow:inset 0 2px 5px -3px #0a4b78}.wp-core-ui .button.active:focus{border-color:#3582c4;box-shadow:inset 0 2px 5px -3px #0a4b78,0 0 0 1px #3582c4}.wp-core-ui .button-disabled,.wp-core-ui .button-secondary.disabled,.wp-core-ui .button-secondary:disabled,.wp-core-ui .button-secondary[disabled],.wp-core-ui .button.disabled,.wp-core-ui .button:disabled,.wp-core-ui .button[disabled]{color:#a7aaad!important;border-color:#dcdcde!important;background:#f6f7f7!important;box-shadow:none!important;cursor:default;transform:none!important}.wp-core-ui .button-link{margin:0;padding:0;box-shadow:none;border:0;border-radius:0;background:0 0;cursor:pointer;text-align:left;color:#2271b1;text-decoration:underline;transition-property:border,background,color;transition-duration:.05s;transition-timing-function:ease-in-out}.wp-core-ui .button-link:active,.wp-core-ui .button-link:hover{color:#135e96}.wp-core-ui .button-link:focus{color:#043959;box-shadow:0 0 0 1px #4f94d4,0 0 2px 1px rgba(79,148,212,.8);outline:1px solid transparent}.wp-core-ui .button-link-delete{color:#d63638}.wp-core-ui .button-link-delete:focus,.wp-core-ui .button-link-delete:hover{color:#d63638;background:0 0}.wp-core-ui .button-link-delete:disabled{background:0 0!important}.wp-core-ui .button-primary{background:#2271b1;border-color:#2271b1;color:#fff;text-decoration:none;text-shadow:none}.wp-core-ui .button-primary.focus,.wp-core-ui .button-primary.hover,.wp-core-ui .button-primary:focus,.wp-core-ui .button-primary:hover{background:#135e96;border-color:#135e96;color:#fff}.wp-core-ui .button-primary.focus,.wp-core-ui .button-primary:focus{box-shadow:0 0 0 1px #fff,0 0 0 3px #2271b1}.wp-core-ui .button-primary.active,.wp-core-ui .button-primary.active:focus,.wp-core-ui .button-primary.active:hover,.wp-core-ui .button-primary:active{background:#135e96;border-color:#135e96;box-shadow:none;color:#fff}.wp-core-ui .button-primary-disabled,.wp-core-ui .button-primary.disabled,.wp-core-ui .button-primary:disabled,.wp-core-ui .button-primary[disabled]{color:#a7aaad!important;background:#f6f7f7!important;border-color:#dcdcde!important;box-shadow:none!important;text-shadow:none!important;cursor:default}.wp-core-ui .button-group{position:relative;display:inline-block;white-space:nowrap;font-size:0;vertical-align:middle}.wp-core-ui .button-group>.button{display:inline-block;border-radius:0;margin-right:-1px}.wp-core-ui .button-group>.button:first-child{border-radius:3px 0 0 3px}.wp-core-ui .button-group>.button:last-child{border-radius:0 3px 3px 0}.wp-core-ui .button-group>.button-primary+.button{border-left:0}.wp-core-ui .button-group>.button:focus{position:relative;z-index:1}.wp-core-ui .button-group>.button.active{background-color:#dcdcde;color:#135e96;border-color:#0a4b78;box-shadow:inset 0 2px 5px -3px #0a4b78}.wp-core-ui .button-group>.button.active:focus{border-color:#3582c4;box-shadow:inset 0 2px 5px -3px #0a4b78,0 0 0 1px #3582c4}@media screen and (max-width: 782px){.wp-core-ui .button,.wp-core-ui .button.button-large,.wp-core-ui .button.button-small,a.preview,input#publish,input#save-post{padding:0 14px;line-height:2.71428571;font-size:14px;vertical-align:middle;min-height:40px;margin-bottom:4px}.wp-core-ui .copy-to-clipboard-container .copy-attachment-url{margin-bottom:0}#media-upload.wp-core-ui .button{padding:0 10px 1px;min-height:24px;line-height:22px;font-size:13px}.media-frame.mode-grid .bulk-select .button{margin-bottom:0}.wp-core-ui .save-post-status.button{position:relative;margin:0 14px 0 10px}.wp-core-ui.wp-customizer .button{font-size:13px;line-height:2.15384615;min-height:30px;margin:0;vertical-align:inherit}.media-modal-content .media-toolbar-primary .media-button{margin-top:10px;margin-left:5px}.interim-login .button.button-large{min-height:30px;line-height:2;padding:0 12px 2px}}button,input,select,textarea{box-sizing:border-box;font-family:inherit;font-size:inherit;font-weight:inherit}input,textarea{font-size:14px}textarea{overflow:auto;padding:2px 6px;line-height:1.42857143;resize:vertical}label{cursor:pointer}input,select{margin:0 1px}textarea.code{padding:4px 6px 1px}input[type=color],input[type=date],input[type=datetime-local],input[type=datetime],input[type=email],input[type=month],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=time],input[type=url],input[type=week],select,textarea{box-shadow:0 0 0 transparent;border-radius:4px;border:1px solid #8c8f94;background-color:#fff;color:#2c3338}input[type=date],input[type=datetime-local],input[type=datetime],input[type=email],input[type=month],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=time],input[type=url],input[type=week]{padding:0 8px;line-height:2;min-height:30px}::-webkit-datetime-edit{line-height:1.85714286}input[type=checkbox]:focus,input[type=color]:focus,input[type=date]:focus,input[type=datetime-local]:focus,input[type=datetime]:focus,input[type=email]:focus,input[type=month]:focus,input[type=number]:focus,input[type=password]:focus,input[type=radio]:focus,input[type=search]:focus,input[type=tel]:focus,input[type=text]:focus,input[type=time]:focus,input[type=url]:focus,input[type=week]:focus,select:focus,textarea:focus{border-color:#2271b1;box-shadow:0 0 0 1px #2271b1;outline:2px solid transparent}input[type=email],input[type=url]{direction:ltr}input[type=checkbox],input[type=radio]{border:1px solid #8c8f94;border-radius:4px;background:#fff;color:#50575e;clear:none;cursor:pointer;display:inline-block;line-height:0;height:1rem;margin:-.25rem .25rem 0 0;outline:0;padding:0!important;text-align:center;vertical-align:middle;width:1rem;min-width:1rem;-webkit-appearance:none;box-shadow:inset 0 1px 2px rgba(0,0,0,.1);transition:.05s border-color ease-in-out}input[type=radio]:checked+label:before{color:#8c8f94}.wp-core-ui input[type=reset]:active,.wp-core-ui input[type=reset]:hover{color:#135e96}.wp-admin p input[type=checkbox],.wp-admin p input[type=radio],td>input[type=checkbox]{margin-top:0}.wp-admin p label input[type=checkbox]{margin-top:-4px}.wp-admin p label input[type=radio]{margin-top:-2px}input[type=radio]{border-radius:50%;margin-right:.25rem;line-height:.71428571}input[type=checkbox]:checked::before,input[type=radio]:checked::before{float:left;display:inline-block;vertical-align:middle;width:1rem;speak:never;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}input[type=checkbox]:checked::before{content:url("data:image/svg+xml;utf8,%3Csvg%20xmlns%3D%27http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%27%20viewBox%3D%270%200%2020%2020%27%3E%3Cpath%20d%3D%27M14.83%204.89l1.34.94-5.81%208.38H9.02L5.78%209.67l1.34-1.25%202.57%202.4z%27%20fill%3D%27%233582c4%27%2F%3E%3C%2Fsvg%3E");margin:-.1875rem 0 0 -.25rem;height:1.3125rem;width:1.3125rem}input[type=radio]:checked::before{content:"";border-radius:50%;width:.5rem;height:.5rem;margin:.1875rem;background-color:#3582c4;line-height:1.14285714}input[type=search]{-webkit-appearance:textfield}input[type=search]::-webkit-search-decoration{display:none}.wp-admin input[type=file]{padding:3px 0;cursor:pointer}input.readonly,input[readonly],textarea.readonly,textarea[readonly]{background-color:#f0f0f1}::-webkit-input-placeholder{color:#646970}::-moz-placeholder{color:#646970;opacity:1}:-ms-input-placeholder{color:#646970}.form-invalid .form-required,.form-invalid .form-required:focus,.form-invalid.form-required input,.form-invalid.form-required input:focus,.form-invalid.form-required select,.form-invalid.form-required select:focus{border-color:#d63638!important;box-shadow:0 0 2px rgba(214,54,56,.8)}.form-table .form-required.form-invalid td:after{content:"\f534";font:normal 20px/1 dashicons;color:#d63638;margin-left:-25px;vertical-align:middle}.form-table .form-required.user-pass1-wrap.form-invalid td:after{content:""}.form-table .form-required.user-pass1-wrap.form-invalid .password-input-wrapper:after{content:"\f534";font:normal 20px/1 dashicons;color:#d63638;margin:0 6px 0 -29px;vertical-align:middle}.form-input-tip{color:#646970}input.disabled,input:disabled,select.disabled,select:disabled,textarea.disabled,textarea:disabled{background:rgba(255,255,255,.5);border-color:rgba(220,220,222,.75);box-shadow:inset 0 1px 2px rgba(0,0,0,.04);color:rgba(44,51,56,.5)}input[type=file].disabled,input[type=file]:disabled,input[type=range].disabled,input[type=range]:disabled{background:0 0;box-shadow:none;cursor:default}input[type=checkbox].disabled,input[type=checkbox].disabled:checked:before,input[type=checkbox]:disabled,input[type=checkbox]:disabled:checked:before,input[type=radio].disabled,input[type=radio].disabled:checked:before,input[type=radio]:disabled,input[type=radio]:disabled:checked:before{opacity:.7}.wp-core-ui select{font-size:14px;line-height:2;color:#2c3338;border-color:#8c8f94;box-shadow:none;border-radius:3px;padding:0 24px 0 8px;min-height:30px;max-width:25rem;-webkit-appearance:none;background:#fff url(data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%206l5%205%205-5%202%201-7%207-7-7%202-1z%22%20fill%3D%22%23555%22%2F%3E%3C%2Fsvg%3E) no-repeat right 5px top 55%;background-size:16px 16px;cursor:pointer;vertical-align:middle}.wp-core-ui select:hover{color:#2271b1}.wp-core-ui select:focus{border-color:#2271b1;color:#0a4b78;box-shadow:0 0 0 1px #2271b1}.wp-core-ui select:active{border-color:#8c8f94;box-shadow:none}.wp-core-ui select.disabled,.wp-core-ui select:disabled{color:#a7aaad;border-color:#dcdcde;background-color:#f6f7f7;background-image:url(data:image/svg+xml;charset=US-ASCII,%3Csvg%20width%3D%2220%22%20height%3D%2220%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%3Cpath%20d%3D%22M5%206l5%205%205-5%202%201-7%207-7-7%202-1z%22%20fill%3D%22%23a0a5aa%22%2F%3E%3C%2Fsvg%3E);box-shadow:none;text-shadow:0 1px 0 #fff;cursor:default;transform:none}.wp-core-ui select:-moz-focusring{color:transparent;text-shadow:0 0 0 #0a4b78}.wp-core-ui select::-ms-value{background:0 0;color:#50575e}.wp-core-ui select:hover::-ms-value{color:#2271b1}.wp-core-ui select:focus::-ms-value{color:#0a4b78}.wp-core-ui select.disabled::-ms-value,.wp-core-ui select:disabled::-ms-value{color:#a7aaad}.wp-core-ui select::-ms-expand{display:none}.wp-admin .button-cancel{display:inline-block;min-height:28px;padding:0 5px;line-height:2}.meta-box-sortables select{max-width:100%}.meta-box-sortables input{vertical-align:middle}.misc-pub-post-status select{margin-top:0}.wp-core-ui select[multiple]{height:auto;padding-right:8px;background:#fff}.submit{padding:1.5em 0;margin:5px 0;border-bottom-left-radius:3px;border-bottom-right-radius:3px;border:none}form p.submit a.cancel:hover{text-decoration:none}p.submit{text-align:left;max-width:100%;margin-top:20px;padding-top:10px}.textright p.submit{border:none;text-align:right}table.form-table+input+input+p.submit,table.form-table+input+p.submit,table.form-table+p.submit{border-top:none;padding-top:0}#major-publishing-actions input,#minor-publishing-actions .preview,#minor-publishing-actions input{text-align:center}input.all-options,textarea.all-options{width:250px}input.large-text,textarea.large-text{width:99%}.regular-text{width:25em}input.small-text{width:50px;padding:0 6px}label input.small-text{margin-top:-4px}input[type=number].small-text{width:65px;padding-right:0}input.tiny-text{width:35px}input[type=number].tiny-text{width:45px;padding-right:0}#doaction,#doaction2,#post-query-submit{margin:0 8px 0 0}.no-js input#changeit2,.no-js input#doaction2,.no-js label[for=bulk-action-selector-bottom],.no-js label[for=new_role2],.no-js select#bulk-action-selector-bottom,.no-js select#new_role2{display:none}.tablenav .actions select{float:left;margin-right:6px;max-width:12.5rem}#timezone_string option{margin-left:1em}.wp-cancel-pw>.dashicons,.wp-hide-pw>.dashicons{position:relative;top:3px;width:1.25rem;height:1.25rem;top:.25rem;font-size:20px}.wp-cancel-pw .dashicons-no{display:none}#your-profile label+a,label{vertical-align:middle}#your-profile label+a,fieldset label{vertical-align:middle}.options-media-php [for*="_size_"]{min-width:10em;vertical-align:baseline}.options-media-php .small-text[name*="_size_"]{margin:0 0 1em}.wp-generate-pw{margin-top:1em}.wp-pwd{margin-top:1em}#misc-publishing-actions label{vertical-align:baseline}#pass-strength-result{background-color:#f0f0f1;border:1px solid #dcdcde;color:#1d2327;margin:-1px 1px 5px;padding:3px 5px;text-align:center;width:25em;box-sizing:border-box;opacity:0}#pass-strength-result.short{background-color:#ffabaf;border-color:#e65054;opacity:1}#pass-strength-result.bad{background-color:#facfd2;border-color:#f86368;opacity:1}#pass-strength-result.good{background-color:#f5e6ab;border-color:#f0c33c;opacity:1}#pass-strength-result.strong{background-color:#b8e6bf;border-color:#68de7c;opacity:1}.password-input-wrapper input{font-family:Consolas,Monaco,monospace}#pass1-text.short,#pass1.short{border-color:#e65054}#pass1-text.bad,#pass1.bad{border-color:#f86368}#pass1-text.good,#pass1.good{border-color:#f0c33c}#pass1-text.strong,#pass1.strong{border-color:#68de7c}.pw-weak{display:none}.indicator-hint{padding-top:8px}.wp-pwd [type=password],.wp-pwd [type=text]{margin-bottom:0;min-height:30px}.wp-pwd input::-ms-reveal{display:none}#pass1-text,.show-password #pass1{display:none}#pass1-text::-ms-clear{display:none}.show-password #pass1-text{display:inline-block}p.search-box{float:right;margin:0}.network-admin.themes-php p.search-box{clear:left}.search-box input[name="s"],.tablenav .search-plugins input[name="s"],.tagsdiv .newtag{float:left;margin:0 4px 0 0}.js.plugins-php .search-box .wp-filter-search{margin:0;width:280px}input[type=email].ui-autocomplete-loading,input[type=text].ui-autocomplete-loading{background-image:url(../images/loading.gif);background-repeat:no-repeat;background-position:right center;visibility:visible}input.ui-autocomplete-input.open{border-bottom-color:transparent}ul#add-to-blog-users{margin:0 0 0 14px}.ui-autocomplete{padding:0;margin:0;list-style:none;position:absolute;z-index:10000;border:1px solid #4f94d4;box-shadow:0 1px 2px rgba(79,148,212,.8);background-color:#fff}.ui-autocomplete li{margin-bottom:0;padding:4px 10px;white-space:nowrap;text-align:left;cursor:pointer}.ui-autocomplete .ui-state-focus{background-color:#dcdcde}.wp-tags-autocomplete .ui-state-focus,.wp-tags-autocomplete [aria-selected=true]{background-color:#2271b1;color:#fff;outline:2px solid transparent}.form-table{border-collapse:collapse;margin-top:.5em;width:100%;clear:both}.form-table,.form-table td,.form-table td p,.form-table th{font-size:14px}.form-table td{margin-bottom:9px;padding:15px 10px;line-height:1.3;vertical-align:middle}.form-table th,.form-wrap label{color:#1d2327;font-weight:400;text-shadow:none;vertical-align:baseline}.form-table th{vertical-align:top;text-align:left;padding:20px 10px 20px 0;width:200px;line-height:1.3;font-weight:600}.form-table .td-full,.form-table th.th-full{width:auto;padding:20px 10px 20px 0;font-weight:400}.form-table td p{margin-top:4px;margin-bottom:0}.form-table .date-time-doc{margin-top:1em}.form-table p.timezone-info{margin:1em 0}.form-table td fieldset label{margin:.35em 0 .5em!important;display:inline-block}.form-table td fieldset p label{margin-top:0!important}.form-table td fieldset label,.form-table td fieldset li,.form-table td fieldset p{line-height:1.4}.form-table input.tog,.form-table input[type=radio]{margin-top:-4px;margin-right:4px;float:none}.form-table .pre{padding:8px;margin:0}table.form-table td .updated{font-size:13px}table.form-table td .updated p{font-size:13px;margin:.3em 0}#profile-page .form-table textarea{width:500px;margin-bottom:6px}#profile-page .form-table #rich_editing{margin-right:5px}#your-profile legend{font-size:22px}#display_name{width:15em}#adduser .form-field input,#createuser .form-field input{width:25em}.color-option{display:inline-block;width:24%;padding:5px 15px 15px;box-sizing:border-box;margin-bottom:3px}.color-option.selected,.color-option:hover{background:#dcdcde}.color-palette{width:100%;border-spacing:0;border-collapse:collapse}.color-palette td{height:20px;padding:0;border:none}.color-option{cursor:pointer}.create-application-password .form-field{max-width:25em}.create-application-password label{font-weight:600}.create-application-password p.submit{margin-bottom:0;padding-bottom:0;display:block}#application-passwords-section .notice{margin-top:20px;margin-bottom:0}.application-password-display input.code{width:19em}.auth-app-card.card{max-width:768px}.authorize-application-php .form-wrap p{display:block}.tool-box .title{margin:8px 0;font-size:18px;font-weight:400;line-height:24px}.label-responsive{vertical-align:middle}#export-filters p{margin:0 0 1em}#export-filters p.submit{margin:7px 0 5px}.card{position:relative;margin-top:20px;padding:.7em 2em 1em;min-width:255px;max-width:520px;border:1px solid #c3c4c7;box-shadow:0 1px 1px rgba(0,0,0,.04);background:#fff;box-sizing:border-box}.pressthis h4{margin:2em 0 1em}.pressthis textarea{width:100%;font-size:1em}#pressthis-code-wrap{overflow:auto}.pressthis-bookmarklet-wrapper{margin:20px 0 8px;vertical-align:top;position:relative;z-index:1}.pressthis-bookmarklet,.pressthis-bookmarklet:active,.pressthis-bookmarklet:focus,.pressthis-bookmarklet:hover{display:inline-block;position:relative;cursor:move;color:#2c3338;background:#dcdcde;border-radius:5px;border:1px solid #c3c4c7;font-style:normal;line-height:16px;font-size:14px;text-decoration:none}.pressthis-bookmarklet:active{outline:0}.pressthis-bookmarklet:after{content:"";width:70%;height:55%;z-index:-1;position:absolute;right:10px;bottom:9px;background:0 0;transform:skew(20deg) rotate(6deg);box-shadow:0 10px 8px rgba(0,0,0,.6)}.pressthis-bookmarklet:hover:after{transform:skew(20deg) rotate(9deg);box-shadow:0 10px 8px rgba(0,0,0,.7)}.pressthis-bookmarklet span{display:inline-block;margin:0;padding:0 12px 8px 9px}.pressthis-bookmarklet span:before{color:#787c82;font:normal 20px/1 dashicons;content:"\f157";position:relative;display:inline-block;top:4px;margin-right:4px}.pressthis-js-toggle{margin-left:10px;padding:0;height:auto;vertical-align:top}.pressthis-js-toggle.button.button{margin-left:10px;padding:0;height:auto;vertical-align:top}.pressthis-js-toggle .dashicons{margin:5px 8px 6px 7px;color:#50575e}.timezone-info code{white-space:nowrap}.defaultavatarpicker .avatar{margin:2px 0;vertical-align:middle}.options-general-php .date-time-text{display:inline-block;min-width:10em}.options-general-php input.small-text{width:56px;margin:-2px 0}.options-general-php .spinner{float:none;margin:-3px 3px 0}.options-general-php .language-install-spinner,.settings-php .language-install-spinner{display:inline-block;float:none;margin:-3px 5px 0;vertical-align:middle}.form-table.permalink-structure .available-structure-tags li{float:left;margin-right:5px}.setup-php textarea{max-width:100%}.form-field #site-address{max-width:25em}.form-field #domain{max-width:22em}.form-field #admin-email,.form-field #blog_last_updated,.form-field #blog_registered,.form-field #path,.form-field #site-title{max-width:25em}.form-field #path{margin-bottom:5px}#search-sites,#search-users{max-width:60%}.request-filesystem-credentials-dialog{display:none;visibility:visible}.request-filesystem-credentials-dialog .notification-dialog{top:10%;max-height:85%}.request-filesystem-credentials-dialog-content{margin:25px}#request-filesystem-credentials-title{font-size:1.3em;margin:1em 0}.request-filesystem-credentials-form legend{font-size:1em;padding:1.33em 0;font-weight:600}.request-filesystem-credentials-form input[type=password],.request-filesystem-credentials-form input[type=text]{display:block}.request-filesystem-credentials-dialog input[type=password],.request-filesystem-credentials-dialog input[type=text]{width:100%}.request-filesystem-credentials-form .field-title{font-weight:600}.request-filesystem-credentials-dialog label[for=hostname],.request-filesystem-credentials-dialog label[for=private_key],.request-filesystem-credentials-dialog label[for=public_key]{display:block;margin-bottom:1em}.request-filesystem-credentials-dialog .ftp-password,.request-filesystem-credentials-dialog .ftp-username{float:left;width:48%}.request-filesystem-credentials-dialog .ftp-password{margin-left:4%}.request-filesystem-credentials-dialog .request-filesystem-credentials-action-buttons{text-align:right}.request-filesystem-credentials-dialog label[for=ftp]{margin-right:10px}.request-filesystem-credentials-dialog #auth-keys-desc{margin-bottom:0}#request-filesystem-credentials-dialog .button:not(:last-child){margin-right:10px}#request-filesystem-credentials-form .cancel-button{display:none}#request-filesystem-credentials-dialog .cancel-button{display:inline}.request-filesystem-credentials-dialog .ftp-password,.request-filesystem-credentials-dialog .ftp-username{float:none;width:auto}.request-filesystem-credentials-dialog .ftp-username{margin-bottom:1em}.request-filesystem-credentials-dialog .ftp-password{margin:0}.request-filesystem-credentials-dialog .ftp-password em{color:#8c8f94}.request-filesystem-credentials-dialog label{display:block;line-height:1.5;margin-bottom:1em}.request-filesystem-credentials-form legend{padding-bottom:0}.request-filesystem-credentials-form #ssh-keys legend{font-size:1.3em}.request-filesystem-credentials-form .notice{margin:0 0 20px;clear:both}.tools-privacy-policy-page form{margin-bottom:1.3em}.tools-privacy-policy-page input.button{margin:0 1px 0 6px}.tools-privacy-policy-page select{margin:0 1px .5em 6px}.tools-privacy-edit{margin:1.5em 0}.tools-privacy-policy-page span{line-height:2}.privacy_requests .column-email{width:40%}.privacy_requests .column-type{text-align:center}.privacy_requests tfoot td:first-child,.privacy_requests thead td:first-child{border-left:4px solid #fff}.privacy_requests tbody th{border-left:4px solid #fff;background:#fff;box-shadow:inset 0 -1px 0 rgba(0,0,0,.1)}.privacy_requests .row-actions{color:#787c82}.privacy_requests .row-actions.processing{position:static}.privacy_requests tbody .has-request-results th{box-shadow:none}.privacy_requests tbody .request-results th .notice{margin:0 0 5px}.privacy_requests tbody td{background:#fff;box-shadow:inset 0 -1px 0 rgba(0,0,0,.1)}.privacy_requests tbody .has-request-results td{box-shadow:none}.privacy_requests .next_steps .button{word-wrap:break-word;white-space:normal}.privacy_requests .status-request-confirmed td,.privacy_requests .status-request-confirmed th{background-color:#fff;border-left-color:#72aee6}.privacy_requests .status-request-failed td,.privacy_requests .status-request-failed th{background-color:#f6f7f7;border-left-color:#d63638}.privacy_requests .export_personal_data_failed a{vertical-align:baseline}.status-label{font-weight:600}.status-label.status-request-pending{font-weight:400;font-style:italic;color:#646970}.status-label.status-request-failed{color:#d63638;font-weight:600}.wp-privacy-request-form{clear:both}.wp-privacy-request-form-field{margin:1.5em 0}.wp-privacy-request-form input{margin:0}.email-personal-data::before{display:inline-block;font:normal 20px/1 dashicons;margin:3px 5px 0 -2px;speak:never;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;vertical-align:top}.email-personal-data--sending::before{color:#d63638;content:"\f463";animation:rotation 2s infinite linear}.email-personal-data--sent::before{color:#68de7c;content:"\f147"}@media screen and (max-width: 782px){textarea{-webkit-appearance:none}input[type=date],input[type=datetime-local],input[type=datetime],input[type=email],input[type=month],input[type=number],input[type=password],input[type=search],input[type=tel],input[type=text],input[type=time],input[type=url],input[type=week]{-webkit-appearance:none;padding:3px 10px;min-height:40px}::-webkit-datetime-edit{line-height:1.875}.widefat tfoot td input[type=checkbox],.widefat th input[type=checkbox],.widefat thead td input[type=checkbox],input[type=checkbox]{-webkit-appearance:none}.widefat tfoot td input[type=checkbox],.widefat th input[type=checkbox],.widefat thead td input[type=checkbox]{margin-bottom:8px}.widefat tfoot td input[type=checkbox]:before,.widefat th input[type=checkbox]:before,.widefat thead td input[type=checkbox]:before,input[type=checkbox]:checked:before{width:1.875rem;height:1.875rem;margin:-.1875rem -.3125rem}input[type=checkbox],input[type=radio]{height:1.5625rem;width:1.5625rem}.wp-admin p input[type=checkbox],.wp-admin p input[type=radio]{margin-top:-.1875rem}input[type=radio]:checked:before{vertical-align:middle;width:.5625rem;height:.5625rem;margin:.4375rem;line-height:.76190476}.wp-upload-form input[type=submit]{margin-top:10px}.wp-admin .form-table select,.wp-core-ui select{min-height:40px;font-size:16px;line-height:1.625;padding:5px 24px 5px 8px}.wp-admin .button-cancel{margin-bottom:0;padding:2px 0;font-size:14px;vertical-align:middle}#adduser .form-field input,#createuser .form-field input{width:100%}.form-table{box-sizing:border-box}.form-table td,.form-table th,.label-responsive{display:block;width:auto;vertical-align:middle}.label-responsive{margin:.5em 0}.export-filters li{margin-bottom:0}.form-table .color-palette td{display:table-cell;width:15px}.form-table table.color-palette{margin-right:10px}input,textarea{font-size:16px}#profile-page .form-table textarea,.form-table span.description,.form-table td input[type=email],.form-table td input[type=password],.form-table td input[type=text],.form-table td select,.form-table td textarea{width:100%;display:block;max-width:none;box-sizing:border-box}.form-table .form-required.form-invalid td:after{float:right;margin:-30px 3px 0 0}.form-table input[type=text].small-text,input[type=number].small-text,input[type=password].small-text,input[type=search].small-text,input[type=text].small-text{width:auto;max-width:4.375em;display:inline;padding:3px 6px;margin:0 3px}.form-table .regular-text~input[type=text].small-text{margin-top:5px}#pass-strength-result{width:100%;box-sizing:border-box;padding:8px}p.search-box{float:none;position:absolute;bottom:0;width:98%;height:90px;margin-bottom:20px}p.search-box input[name="s"]{float:none;width:100%;margin-bottom:10px;vertical-align:middle}p.search-box input[type=submit]{margin-bottom:10px}.form-table span.description{display:inline;padding:4px 0 0;line-height:1.4;font-size:14px}.form-table th{padding:10px 0 0;border-bottom:0}.form-table td{margin-bottom:0;padding:4px 0 6px}.form-table.permalink-structure td code{margin-left:32px;display:inline-block}.form-table.permalink-structure td input[type=text]{margin-left:32px;margin-top:4px;width:96%}.form-table input.regular-text{width:100%}.form-table label{font-size:14px}.background-position-control .button-group>label{font-size:0}.form-table fieldset label{display:block}#local-time,#utc-time{display:block;float:none;margin-top:.5em}.form-field #domain{max-width:none}.wp-pwd{position:relative}#profile-page .form-table #pass1{padding-right:90px}.wp-pwd button.button{background:0 0;border:1px solid transparent;box-shadow:none;line-height:2;margin:0;padding:5px 9px;position:absolute;right:0;top:0;width:2.375rem;height:2.375rem;min-width:40px;min-height:40px}.wp-pwd button.wp-hide-pw{right:2.5rem}.wp-pwd button.button:focus,.wp-pwd button.button:hover{background:0 0}.wp-pwd button.button:active{background:0 0;box-shadow:none;transform:none}.wp-pwd .button .text{display:none}.wp-pwd [type=password],.wp-pwd [type=text]{line-height:2;padding-right:5rem}.wp-cancel-pw .dashicons-no{display:inline-block}.options-general-php input[type=text].small-text{max-width:6.25em;margin:0}.tools-privacy-policy-page form.wp-create-privacy-page{margin-bottom:1em}.tools-privacy-policy-page input#set-page,.tools-privacy-policy-page select{margin:10px 0 0}.tools-privacy-policy-page .wp-create-privacy-page span{display:block;margin-bottom:1em}.tools-privacy-policy-page .wp-create-privacy-page .button{margin-left:0}.wp-list-table.privacy_requests tr:not(.inline-edit-row):not(.no-items) td.column-primary:not(.check-column){display:table-cell}.wp-list-table.privacy_requests.widefat th input,.wp-list-table.privacy_requests.widefat thead td input{margin-left:5px}.wp-privacy-request-form-field input[type=text]{width:100%;margin-bottom:10px;vertical-align:middle}.regular-text{max-width:100%}}@media only screen and (max-width: 768px){.form-field input[type=email],.form-field input[type=password],.form-field input[type=text],.form-field select,.form-field textarea{width:99%}.form-wrap .form-field{padding:0}}@media only screen and (max-height: 480px),screen and (max-width:450px){.file-editor-warning .notification-dialog,.request-filesystem-credentials-dialog .notification-dialog{width:100%;height:100%;max-height:100%;position:fixed;top:0;margin:0;left:0}}@media screen and (max-width: 600px){.color-option{width:49%}}@media only screen and (max-width: 320px){.options-general-php .date-time-text.date-time-custom-text{min-width:0;margin-right:.5em}}@keyframes rotation{0%{transform:rotate(0)}100%{transform:rotate(359deg)}}html{background:#f0f0f1;margin:0 20px}body{background:#fff;border:1px solid #c3c4c7;color:#3c434a;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;margin:140px auto 25px;padding:20px 20px 10px;max-width:700px;-webkit-font-smoothing:subpixel-antialiased;box-shadow:0 1px 1px rgba(0,0,0,.04)}a{color:#2271b1}a:active,a:hover{color:#135e96}a:focus{color:#043959;box-shadow:0 0 0 1px #4f94d4,0 0 2px 1px rgba(79,148,212,.8)}h1,h2{border-bottom:1px solid #dcdcde;clear:both;color:#646970;font-size:24px;padding:0 0 7px;font-weight:400}h3{font-size:16px}dd,dt,li,p{padding-bottom:2px;font-size:14px;line-height:1.5}.code,code{font-family:Consolas,Monaco,monospace}dl,ol,ul{padding:5px 5px 5px 22px}a img{border:0}abbr{border:0;font-variant:normal}fieldset{border:0;padding:0;margin:0}label{cursor:pointer}#logo{margin:-130px auto 25px;padding:0 0 25px;width:84px;height:84px;overflow:hidden;background-image:none;background-size:84px;background-position:center top;background-repeat:no-repeat;color:#3c434a;font-size:20px;font-weight:400;line-height:1.3em;text-decoration:none;text-align:center;text-indent:-9999px;outline:0}.step{margin:20px 0 15px}.step,th{text-align:left;padding:0}.language-chooser.wp-core-ui .step .button.button-large{font-size:14px}textarea{border:1px solid #dcdcde;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;width:100%;box-sizing:border-box}.form-table{border-collapse:collapse;margin-top:1em;width:100%}.form-table td{margin-bottom:9px;padding:10px 20px 10px 0;font-size:14px;vertical-align:top}.form-table th{font-size:14px;text-align:left;padding:10px 20px 10px 0;width:140px;vertical-align:top}.form-table code{line-height:1.28571428;font-size:14px}.form-table p{margin:4px 0 0;font-size:11px}.form-table input{line-height:1.33333333;font-size:15px;padding:3px 5px}input,submit{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif}#pass-strength-result,.form-table input[type=email],.form-table input[type=password],.form-table input[type=text],.form-table input[type=url]{width:218px}.form-table th p{font-weight:400}.form-table.install-success td,.form-table.install-success th{vertical-align:middle;padding:16px 20px 16px 0}.form-table.install-success td p{margin:0;font-size:14px}.form-table.install-success td code{margin:0;font-size:18px}#error-page{margin-top:50px}#error-page p{font-size:14px;line-height:1.28571428;margin:25px 0 20px}#error-page code,.code{font-family:Consolas,Monaco,monospace}.message{border-left:4px solid #d63638;padding:.7em .6em;background-color:#fcf0f1}#admin_email,#dbhost,#dbname,#pass1,#pass2,#prefix,#pwd,#uname,#user_login{direction:ltr}.rtl input,.rtl submit,.rtl textarea,body.rtl{font-family:Tahoma,sans-serif}:lang(he-il) .rtl input,:lang(he-il) .rtl submit,:lang(he-il) .rtl textarea,:lang(he-il) body.rtl{font-family:Arial,sans-serif}@media only screen and (max-width: 799px){body{margin-top:20px}#logo a{margin:-125px auto 30px}}@media screen and (max-width: 782px){.form-table{margin-top:0}.form-table td,.form-table th{display:block;width:auto;vertical-align:middle}.form-table th{padding:20px 0 0}.form-table td{padding:5px 0;border:0;margin:0}input,textarea{font-size:16px}.form-table span.description,.form-table td input[type=email],.form-table td input[type=password],.form-table td input[type=text],.form-table td input[type=url],.form-table td select,.form-table td textarea{width:100%;font-size:16px;line-height:1.5;padding:7px 10px;display:block;max-width:none;box-sizing:border-box}.wp-pwd #pass1{padding-right:50px}.wp-pwd .button.wp-hide-pw{right:0}#pass-strength-result{width:100%}}body.language-chooser{max-width:300px}.language-chooser select{padding:8px;width:100%;display:block;border:1px solid #dcdcde;background:#fff;color:#2c3338;font-size:16px;font-family:Arial,sans-serif;font-weight:400}.language-chooser select:focus{color:#2c3338}.language-chooser select option:focus,.language-chooser select option:hover{color:#0a4b78}.language-chooser .step{text-align:right}.screen-reader-input,.screen-reader-text{border:0;clip:rect(1px,1px,1px,1px);-webkit-clip-path:inset(50%);clip-path:inset(50%);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px;word-wrap:normal!important}.spinner{background:none;background-size:20px 20px;visibility:hidden;opacity:.7;width:20px;height:20px;margin:2px 5px 0}.step .spinner{display:inline-block;vertical-align:middle;margin-right:15px}.button.hide-if-no-js,.hide-if-no-js{display:none}@media print,(-webkit-min-device-pixel-ratio: 1.25),(min-resolution:120dpi){.spinner{background-image:none}}
    </style>

</head>

<body>









<?php
                                    error_reporting(0);

                                    function extension_check($name){
                                    if (!extension_loaded($name)) {
                                    $response = false;
                                    } else {
                                    $response = true;
                                    }
                                    return $response;
                                    }

                                    function folder_permission($name){
                                    $perm = substr(sprintf('%o', fileperms($name)), -4);
                                        if ($perm >= '0775') {
                                            $response = true;
                                        } else {
                                            $response = false;
                                        }
                                    return $response;
                                    }

                                    function importDatabase($mysql_host,$mysql_database,$mysql_user,$mysql_password){
                                        $db = new PDO("mysql:host=$mysql_host;dbname=$mysql_database", $mysql_user, $mysql_password);
                                        $query = file_get_contents("database.sql");
                                        $stmt = $db->prepare($query);
                                        if ($stmt->execute())
                                        return true;
                                        else
                                        return false;
                                    }

                                    $base_url = home_base_url();
                                    if (substr("$base_url", -1=="/")) {
                                    $base_url = substr("$base_url", 0, -1);
                                    }

                                    function home_base_url(){
                                        $base_url = (isset($_SERVER['HTTPS']) &&
                                        $_SERVER['HTTPS']!='off') ? 'https://' : 'http://';
                                        $tmpURL = dirname(__FILE__);
                                        $tmpURL = str_replace(chr(92),'/',$tmpURL);
                                        $tmpURL = str_replace($_SERVER['DOCUMENT_ROOT'],'',$tmpURL);
                                        $tmpURL = ltrim($tmpURL,'/');
                                        $tmpURL = rtrim($tmpURL, '/');
                                        $tmpURL = str_replace('core/public/install','',$tmpURL);
                                        $base_url .= $_SERVER['HTTP_HOST'].'/'.$tmpURL;
                                        return $base_url.'/';
                                    }

                                    function createTable($name, $details, $status){
                                    if ($status=='1') {
                                    $pr = '<i class="fa fa-check"><i>';
                                    }else{
                                    $pr = '<i class="fa fa-times" style="color:red;"><i>';
                                    }
                                    echo "<tr><td>$name</td><td>$details</td><td>$pr</td></tr>";
                                    }

                                    ////####################################################
                                    $extensions = [
                                        'openssl' ,'pdo', 'mbstring', 'tokenizer', 'JSON', 'cURL', 'XML', 'fileinfo'
                                    ];

                                    $folders = [
                                    '../core/bootstrap/cache/', '../core/storage/', '../core/storage/app/', '../core/storage/framework/', '../core/storage/logs/'
                                    ];
                                    ////####################################################

                                    if (isset($_GET['action'])) {
                                    $action = $_GET['action'];
                                    }else {
                                    $action = "";
                                    }
                                    if ($action=='install') {
                                    ?>
                                                        <div class="step-installer first-installer second-installer third-installer">
                                                            <div class="installer-header">
                                                                <h1 style="text-transform: uppercase;">Result</h1>
                                                            </div>
                                                            <div class="installer-content">
                                                                <?php
                                    if ($_POST) {
                                    $user = $_POST['user'];
                                    $code = $_POST['code'];
                                    $db_name = $_POST['db_name'];
                                    $db_host = $_POST['db_host'];
                                    $db_user = $_POST['db_user'];
                                    $db_pass = $_POST['db_pass'];

                                    /*
                                    $api = "https://thesoftking.com/verify/api.php?code=$code&user=$user&domain=$base_url";

                                    $ch = curl_init();
                                    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
                                    curl_setopt($ch, CURLOPT_HEADER, 0);
                                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                                    curl_setopt($ch, CURLOPT_URL, $api);
                                    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
                                    $ac = curl_exec($ch);
                                    curl_close($ch);

                                    $status = json_decode($ac);
                                    $status->status='Success';
                                    if ($status->status=='Success') {
                                    */


                                    if(importDatabase($db_host,$db_name,$db_user,$db_pass)){
                                    echo '<div style="text-align:center; text-transform:uppercase;">
                                    <h1>Installed Successfully </h1><br>
                                    <a href="'.$base_url.'" class="btn btn-success btn-sm">Go to Website</a>
                                    <br><br><b style="color:red;">Please Delete The Install Folder</b><br><br><br></div>';
                                    ////////////////////// UPDATE CONFIG
                                    $key = base64_encode(random_bytes(32));
$output = '
APP_NAME=Laravel
APP_ENV=production
APP_KEY=base64:'.$key.'
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL='.$base_url.'

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST='.$db_host.'
DB_PORT=3306
DB_DATABASE='.$db_name.'
DB_USERNAME='.$db_user.'
DB_PASSWORD='.$db_pass.'

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

';

$file = fopen('../../../.env', 'w');
fwrite($file, $output);
fclose($file);

$ht_file = fopen('../../../.htaccess', 'w');
fwrite($ht_file, 'RewriteEngine On
RewriteRule (.*) /core/public/$1 [L]');
fclose($ht_file);

//composer update
//$composer = shell_exec('cd ../../../core/ && composer update');
//show shell_exec loading process working


                                    }

                                    }


                                    ?>
                                                            </div>
                                                        </div>
                                                        <?php
                                    }elseif($action=='config') {
                        ?>
                    <div class="step-installer first-installer second-installer third-installer">
                        <div class="installer-header">
                            <h1 style="text-transform: uppercase;">Information</h1>
                        </div>
                        <div class="installer-content">
                            <form action="?action=install" method="post">
                                <h4>APP URL</h4>
                                <input class="form-control" name="app_url" value="<?php echo $base_url; ?>"
                                    type="text">
                                <hr style="background: #777; height: 1px;">

                                <h4 style="text-transform: uppercase;">Database Details</h4>
                                <input class="form-control input-lg" name="db_name" placeholder="Database Name"
                                    type="text" required=""><br>
                                <input class="form-control input-lg" name="db_host" placeholder="Database Host"
                                    type="text" required=""><br>
                                <input class="form-control input-lg" name="db_user" placeholder="Database User"
                                    type="text" required=""><br>
                                <input class="form-control input-lg" name="db_pass" placeholder="Password" type="text"
                                    required=""><br>
                                    <div class="button">
                                        <button class="btn btn-primary" type="submit">INSTALL NOW</button>
                                    </div>
                            </form>
                        </div>
                    </div>



                    <?php
                            }elseif ($action=='requirements') {
                            ?>
                                                <div class="step-installer first-installer second-installer">
                                                    <div class="installer-header" style="text-transform: uppercase;">
                                                        <h1>Server Requirments</h1>
                                                    </div>
                                                    <div class="installer-content table-responsive">
                                                        <table class="table table-striped" style="text-align: left;">
                                                            <tbody>
                                                                <?php
                            $error = 0;
                            $phpversion = version_compare(PHP_VERSION, '8.0', '>=');
                            if ($phpversion==true) {
                            $error = $error+0;
                            createTable("PHP", "Required PHP version 8.0 or higher",1);
                            }else{
                            $error = $error+1;
                            createTable("PHP", "Required PHP version 8.0 or higher",0);
                            }
                            foreach ($extensions as $key) {
                            $extension = extension_check($key);
                            if ($extension==true) {
                            $error = $error+0;
                            createTable($key, "Required ".strtoupper($key)." PHP Extension",1);
                            }else{
                            $error = $error+1;
                            createTable($key, "Required ".strtoupper($key)." PHP Extension",0);
                            }
                            }
                            /*
                            foreach ($folders as $key) {
                            $folder_perm = folder_permission($key);
                            if ($folder_perm==true) {
                            $error = $error+0;
                            createTable(str_replace("../", "", $key)," Required permission: 0775 ",1);
                            }else{
                            $error = $error+1;
                            createTable(str_replace("../", "", $key)," Required permission: 0775 ",0);
                            }
                            }
                            */

                            $envCheck = is_writable('../../../.env');
                            if ($envCheck==true) {
                            $error = $error+0;
                            createTable('env'," Required .env to be writable",1);
                            }else{
                            $error = $error+1;
                            createTable('env'," Required .env to be writable",0);
                            }


                            $database = file_exists('database.sql');
                            if ($database==true) {
                            $error = $error+0;
                            createTable('Database',"  Required database.sql available",1);
                            }else{
                            $error = $error+1;
                            createTable('Database'," Required database.sql available",0);
                            }
                            echo '</tbody></table><div class="button">';
                            if ($error==0) {
                            echo '<a class="btn btn-primary anchor" href="?action=config">Next Step <i class="fa fa-angle-double-right"></i></a>';
                            }else{
                            echo '<a class="btn btn-info anchor" href="?action=requirements">ReCheck <i class="fa fa-sync-alt"></i></a>';
                            }
                            ?>
                        </div>
                    </div>



                    <?php
                        }else{
                    ?>
                <div class="step-installer first-installer">
                    <div class="installer-header" style="text-transform: uppercase;">
                        <h1> Terms of use</h1>
                    </div>
                    <div class="installer-content">
                        <p style="text-align: left;">
                            <strong>License to be used on one (1) domain only!</strong> <br><br>
                            The Regular license is for one website / domain only. If you want to use it on multiple
                            websites / domains you have to purchase more licenses (1 website = 1 license).<br><br>
                            <strong>YOU CAN:</strong><br><br>
                            <i class="fa fa-check"></i> Use on one (1) domain only.<br>
                            <i class="fa fa-check"></i> Modify or edit as you want.<br>
                            <i class="fa fa-check"></i> Translate language as you want.<br><br>
                            <strong>YOU CANNOT:</strong><br><br>
                            <i class="fa fa-times" style="color:red;"></i> Resell, distribute, give away or trade by any
                            means to any third party or individual without permission.<br>
                            <i class="fa fa-times" style="color:red;"></i> Include this product into other products sold
                            on Envato market and its affiliate websites.<br>
                            <i class="fa fa-times" style="color:red;"></i> Use on more than one (1) domain.<br>

                        </p>
                        <div class="button">
                            <a class="btn btn-primary anchor" href="?action=requirements">I Agree. Next Step <i
                                    class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                </div>

                <?php } ?>






</body>

</html>
