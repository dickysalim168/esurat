
var pType=Runner.pages.constants.PAGE_LIST;Runner.pages.PageSettings.addPageEvent("TambahPergerakan",pType,"afterInit",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Masukkan_Kedalam_Senarai';if(!pageObj.buttonEventBefore['Masukkan_Kedalam_Senarai']){pageObj.buttonEventBefore['Masukkan_Kedalam_Senarai']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['Masukkan_Kedalam_Senarai']){pageObj.buttonEventAfter['Masukkan_Kedalam_Senarai']=function(result,ctrl,pageObj,proxy,pageid,rowData){alert("Penerima yang dipilih telah dimasukkan");window.opener.location.reload();close();}}
$('a[id=Masukkan_Kedalam_Senarai]').each(function(){if(!$(this).closest('tr.gridRowAdd').length){var newId="Masukkan_Kedalam_Senarai"+"_"+Runner.genId();this.id=newId;var button_Masukkan_Kedalam_Senarai=new Runner.form.Button({id:newId,btnName:"Masukkan_Kedalam_Senarai"});button_Masukkan_Kedalam_Senarai.init({args:[pageObj,proxy,pageid]});}});});