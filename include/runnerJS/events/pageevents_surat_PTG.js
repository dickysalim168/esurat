
Runner.pages.PageSettings.addPageEvent("surat_PTG",Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Kembali31';if(!pageObj.buttonEventBefore['Kembali31']){pageObj.buttonEventBefore['Kembali31']=function(params,ctrl,pageObj,proxy,pageid,rowData){history.go(-1);return;}}
if(!pageObj.buttonEventAfter['Kembali31']){pageObj.buttonEventAfter['Kembali31']=function(result,ctrl,pageObj,proxy,pageid,rowData){}}
$('a[id=Kembali31]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="Kembali31"+"_"+Runner.genId();var button_Kembali31=new Runner.form.Button({id:this.id,btnName:"Kembali31"});button_Kembali31.init({args:[pageObj,proxy,pageid]});});});