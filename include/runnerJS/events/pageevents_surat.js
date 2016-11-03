
Runner.pages.PageSettings.addPageEvent("surat",Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button';if(!pageObj.buttonEventBefore['New_Button']){pageObj.buttonEventBefore['New_Button']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['New_Button']){pageObj.buttonEventAfter['New_Button']=function(result,ctrl,pageObj,proxy,pageid,rowData){var win=window.open("ftpcopy/index.php","mywindow","location=1,status=1,scrollbars=1,resizable=1,width=1500,height=600");win.focus();}}
$('a[id=New_Button]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="New_Button"+"_"+Runner.genId();var button_New_Button=new Runner.form.Button({id:this.id,btnName:"New_Button"});button_New_Button.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent("surat",Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Kemaskini1';if(!pageObj.buttonEventBefore['Kemaskini1']){pageObj.buttonEventBefore['Kemaskini1']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['Kemaskini1']){pageObj.buttonEventAfter['Kemaskini1']=function(result,ctrl,pageObj,proxy,pageid,rowData){window.location="suratview2_edit.php?editid1="+result["txt"];}}
$('a[id=Kemaskini1]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="Kemaskini1"+"_"+Runner.genId();var button_Kemaskini1=new Runner.form.Button({id:this.id,btnName:"Kemaskini1"});button_Kemaskini1.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent("surat",Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button11';if(!pageObj.buttonEventBefore['New_Button11']){pageObj.buttonEventBefore['New_Button11']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['New_Button11']){pageObj.buttonEventAfter['New_Button11']=function(result,ctrl,pageObj,proxy,pageid,rowData){if(result["txt"]==null)
{window.alert('Anda wajib memilih surat asal yang telah dicetak sebelum hantar kepada penerima');}
else
{window.open("TambahPenerima_list.php","mywindow","location=1,status=1,scrollbars=1").focus();}}}
$('a[id=New_Button11]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="New_Button11"+"_"+Runner.genId();var button_New_Button11=new Runner.form.Button({id:this.id,btnName:"New_Button11"});button_New_Button11.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent("surat",Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrl=Runner.getControl(pageid,"Jenis");ctrl.on('change',function()
{if(this.getValue()=="1")
{$("tr[data-fieldname='Dalaman']").show();$("tr[data-fieldname='Agensi']").hide();$("tr[data-fieldname='Awam']").hide();}
else if(this.getValue()=="2")
{$("tr[data-fieldname='Dalaman']").hide();$("tr[data-fieldname='Agensi']").show();$("tr[data-fieldname='Awam']").hide();}
else
{$("tr[data-fieldname='Dalaman']").hide();$("tr[data-fieldname='Agensi']").hide();$("tr[data-fieldname='Awam']").show();}});;});