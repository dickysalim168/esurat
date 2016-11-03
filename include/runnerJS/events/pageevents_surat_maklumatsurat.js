
Runner.pages.PageSettings.addPageEvent("surat_maklumatsurat",Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Kembali3';if(!pageObj.buttonEventBefore['Kembali3']){pageObj.buttonEventBefore['Kembali3']=function(params,ctrl,pageObj,proxy,pageid,rowData){history.go(-1);return;}}
if(!pageObj.buttonEventAfter['Kembali3']){pageObj.buttonEventAfter['Kembali3']=function(result,ctrl,pageObj,proxy,pageid,rowData){}}
$('a[id=Kembali3]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="Kembali3"+"_"+Runner.genId();var button_Kembali3=new Runner.form.Button({id:this.id,btnName:"Kembali3"});button_Kembali3.init({args:[pageObj,proxy,pageid]});});});