
var pType=Runner.pages.constants.PAGE_EDIT;Runner.pages.PageSettings.addPageEvent("surat_maklumatpenghantar",pType,"afterInit",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Kembali4';if(!pageObj.buttonEventBefore['Kembali4']){pageObj.buttonEventBefore['Kembali4']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['Kembali4']){pageObj.buttonEventAfter['Kembali4']=function(result,ctrl,pageObj,proxy,pageid,rowData){window.location="surat_edit.php?editid1="+result["txt"];}}
$('a[id=Kembali4]').each(function(){if(!$(this).closest('tr.gridRowAdd').length){var newId="Kembali4"+"_"+Runner.genId();this.id=newId;var button_Kembali4=new Runner.form.Button({id:newId,btnName:"Kembali4"});button_Kembali4.init({args:[pageObj,proxy,pageid]});}});});