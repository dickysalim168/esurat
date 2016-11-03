
Runner.pages.PageSettings.addPageEvent("surat_Awam",Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Kembali';if(!pageObj.buttonEventBefore['Kembali']){pageObj.buttonEventBefore['Kembali']=function(params,ctrl,pageObj,proxy,pageid,rowData){history.go(-1);return;}}
if(!pageObj.buttonEventAfter['Kembali']){pageObj.buttonEventAfter['Kembali']=function(result,ctrl,pageObj,proxy,pageid,rowData){}}
$('a[id=Kembali]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="Kembali"+"_"+Runner.genId();var button_Kembali=new Runner.form.Button({id:this.id,btnName:"Kembali"});button_Kembali.init({args:[pageObj,proxy,pageid]});});});