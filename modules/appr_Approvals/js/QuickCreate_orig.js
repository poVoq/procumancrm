//Override Save Button
$('#appr_Approvals_subpanel_save_button').removeAttr('onclick');
	
$('#appr_Approvals_subpanel_save_button').attr("onclick", "var _form = document.getElementById('form_SubpanelQuickCreate_appr_Approvals'); disableOnUnloadEditView(); _form.action.value='Save';if(customJavascriptValidation('form_SubpanelQuickCreate_appr_Approvals'))return SUGAR.subpanelUtils.inlineSave(_form.id, 'appr_Approvals_subpanel_save_button');return false;");
