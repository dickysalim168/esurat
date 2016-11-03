
Runner.pages.PageSettings.addPageEvent("surat_AgensiAwam",Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button16';if(!pageObj.buttonEventBefore['New_Button16']){pageObj.buttonEventBefore['New_Button16']=function(params,ctrl,pageObj,proxy,pageid,rowData){history.go(-1);return;}}
if(!pageObj.buttonEventAfter['New_Button16']){pageObj.buttonEventAfter['New_Button16']=function(result,ctrl,pageObj,proxy,pageid,rowData){}}
$('a[id=New_Button16]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="New_Button16"+"_"+Runner.genId();var button_New_Button16=new Runner.form.Button({id:this.id,btnName:"New_Button16"});button_New_Button16.init({args:[pageObj,proxy,pageid]});});});