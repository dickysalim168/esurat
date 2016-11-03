<?php
function DisplayMasterTableInfo_surat($params)
{
	$keys = $params["keys"];
	$detailtable = $params["detailtable"];
	$data = $params["masterRecordData"];
	
	$xt = new Xtempl();
	$tName = "surat";
	$xt->eventsObject = getEventObject($tName);
	
	include_once(getabspath('classes/listpage.php'));
	include_once(getabspath('classes/listpage_simple.php'));
	$mParams  = array();
	$mParams["xt"] = &$xt;
	$mParams["mode"] = LIST_MASTER;
	$mParams["pageType"] = PAGE_LIST;
	$mParams["flyId"] = $params["recId"];
	$masterPage = ListPage::createListPage($tName, $mParams);
	
	$settings = $masterPage->pSet;
	$viewControls = new ViewControlsContainer($settings, PAGE_LIST, $masterPage);
	
	$keysAssoc = array();
	$showKeys = "";	

	if($detailtable == "surat_individu")
	{
		$keysAssoc["sid"] = $keys[1-1];
				
				$keyValue = $viewControls->showDBValue("sid", $keysAssoc);
		$showKeys.= " ".GetFieldLabel("surat","sid").": ".$keyValue;
		$xt->assign('showKeys', $showKeys);
	}

	if( !$data || !count($data) )
		return;
	
	// reassign pagetitlelabel function adding extra params
	$xt->assign_function("pagetitlelabel", "xt_pagetitlelabel", array("record" => $data, "settings" => $settings));
	
	$keylink = "";
	$keylink.= "&key1=".runner_htmlspecialchars(rawurlencode(@$data["sid"]));
	
	$xt->assign("tarikhTerima_mastervalue", $viewControls->showDBValue("tarikhTerima", $data, $keylink));
	$format = $settings->getViewFormat("tarikhTerima");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("tarikhTerima")))
		$class = ' rnr-field-number';
		
	$xt->assign("tarikhTerima_class", $class); // add class for field header as field value
	$xt->assign("Jenis_mastervalue", $viewControls->showDBValue("Jenis", $data, $keylink));
	$format = $settings->getViewFormat("Jenis");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Jenis")))
		$class = ' rnr-field-number';
		
	$xt->assign("Jenis_class", $class); // add class for field header as field value
	$xt->assign("agensi_mastervalue", $viewControls->showDBValue("agensi", $data, $keylink));
	$format = $settings->getViewFormat("agensi");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("agensi")))
		$class = ' rnr-field-number';
		
	$xt->assign("agensi_class", $class); // add class for field header as field value
	$xt->assign("bahagian_mastervalue", $viewControls->showDBValue("bahagian", $data, $keylink));
	$format = $settings->getViewFormat("bahagian");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("bahagian")))
		$class = ' rnr-field-number';
		
	$xt->assign("bahagian_class", $class); // add class for field header as field value
	$xt->assign("individu_mastervalue", $viewControls->showDBValue("individu", $data, $keylink));
	$format = $settings->getViewFormat("individu");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("individu")))
		$class = ' rnr-field-number';
		
	$xt->assign("individu_class", $class); // add class for field header as field value
	$xt->assign("jawatan_mastervalue", $viewControls->showDBValue("jawatan", $data, $keylink));
	$format = $settings->getViewFormat("jawatan");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("jawatan")))
		$class = ' rnr-field-number';
		
	$xt->assign("jawatan_class", $class); // add class for field header as field value
	$xt->assign("kategori_mastervalue", $viewControls->showDBValue("kategori", $data, $keylink));
	$format = $settings->getViewFormat("kategori");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("kategori")))
		$class = ' rnr-field-number';
		
	$xt->assign("kategori_class", $class); // add class for field header as field value
	$xt->assign("rujukanSurat_mastervalue", $viewControls->showDBValue("rujukanSurat", $data, $keylink));
	$format = $settings->getViewFormat("rujukanSurat");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("rujukanSurat")))
		$class = ' rnr-field-number';
		
	$xt->assign("rujukanSurat_class", $class); // add class for field header as field value
	$xt->assign("RingkasanKandungan_mastervalue", $viewControls->showDBValue("RingkasanKandungan", $data, $keylink));
	$format = $settings->getViewFormat("RingkasanKandungan");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("RingkasanKandungan")))
		$class = ' rnr-field-number';
		
	$xt->assign("RingkasanKandungan_class", $class); // add class for field header as field value
	$xt->assign("tarikhSurat_mastervalue", $viewControls->showDBValue("tarikhSurat", $data, $keylink));
	$format = $settings->getViewFormat("tarikhSurat");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("tarikhSurat")))
		$class = ' rnr-field-number';
		
	$xt->assign("tarikhSurat_class", $class); // add class for field header as field value
	$xt->assign("Imbas_mastervalue", $viewControls->showDBValue("Imbas", $data, $keylink));
	$format = $settings->getViewFormat("Imbas");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("Imbas")))
		$class = ' rnr-field-number';
		
	$xt->assign("Imbas_class", $class); // add class for field header as field value
	$xt->assign("tarikhKemasukkan_mastervalue", $viewControls->showDBValue("tarikhKemasukkan", $data, $keylink));
	$format = $settings->getViewFormat("tarikhKemasukkan");
	$class = " rnr-field-text";
	if($format == FORMAT_FILE) 
		$class = ' rnr-field-file'; 
	if($format == FORMAT_AUDIO)
		$class = ' rnr-field-audio';
	if($format == FORMAT_CHECKBOX)
		$class = ' rnr-field-checkbox';
	if($format == FORMAT_NUMBER || IsNumberType($settings->getFieldType("tarikhKemasukkan")))
		$class = ' rnr-field-number';
		
	$xt->assign("tarikhKemasukkan_class", $class); // add class for field header as field value

	$layout = GetPageLayout("surat", 'masterlist');
	if( $layout )
		$xt->assign("pageattrs", 'class="'.$layout->style." page-".$layout->name.'"');
	
	$xt->displayPartial(GetTemplateName("surat", "masterlist"));
}

?>