
var pType=Runner.pages.constants.PAGE_LIST;Runner.pages.PageSettings.addPageEvent("hapus",pType,"afterInit",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button111';if(!pageObj.buttonEventBefore['New_Button111']){pageObj.buttonEventBefore['New_Button111']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['New_Button111']){pageObj.buttonEventAfter['New_Button111']=function(result,ctrl,pageObj,proxy,pageid,rowData){location.href="tambah_individu_list.php";}}
$('a[id=New_Button111]').each(function(){if(!$(this).closest('tr.gridRowAdd').length){var newId="New_Button111"+"_"+Runner.genId();this.id=newId;var button_New_Button111=new Runner.form.Button({id:newId,btnName:"New_Button111"});button_New_Button111.init({args:[pageObj,proxy,pageid]});}});});var pType=Runner.pages.constants.PAGE_LIST;Runner.pages.PageSettings.addPageEvent("hapus",pType,"afterInit",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Selesai211';if(!pageObj.buttonEventBefore['Selesai211']){pageObj.buttonEventBefore['Selesai211']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['Selesai211']){pageObj.buttonEventAfter['Selesai211']=function(result,ctrl,pageObj,proxy,pageid,rowData){location.href="surat_view.php?editid1="+result["txt"];}}
$('a[id=Selesai211]').each(function(){if(!$(this).closest('tr.gridRowAdd').length){var newId="Selesai211"+"_"+Runner.genId();this.id=newId;var button_Selesai211=new Runner.form.Button({id:newId,btnName:"Selesai211"});button_Selesai211.init({args:[pageObj,proxy,pageid]});}});});