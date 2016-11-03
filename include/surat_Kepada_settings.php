<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasurat_Kepada = array();
	$tdatasurat_Kepada[".truncateText"] = true;
	$tdatasurat_Kepada[".NumberOfChars"] = 80;
	$tdatasurat_Kepada[".ShortName"] = "surat_Kepada";
	$tdatasurat_Kepada[".OwnerID"] = "";
	$tdatasurat_Kepada[".OriginalTable"] = "pejawatan_staffdetails";

//	field labels
$fieldLabelssurat_Kepada = array();
$fieldToolTipssurat_Kepada = array();
$pageTitlessurat_Kepada = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelssurat_Kepada["Malay"] = array();
	$fieldToolTipssurat_Kepada["Malay"] = array();
	$pageTitlessurat_Kepada["Malay"] = array();
	$fieldLabelssurat_Kepada["Malay"]["staff_id"] = "Staff Id";
	$fieldToolTipssurat_Kepada["Malay"]["staff_id"] = "";
	$fieldLabelssurat_Kepada["Malay"]["name"] = "Name";
	$fieldToolTipssurat_Kepada["Malay"]["name"] = "";
	$fieldLabelssurat_Kepada["Malay"]["post_id"] = "Post Id";
	$fieldToolTipssurat_Kepada["Malay"]["post_id"] = "";
	$fieldLabelssurat_Kepada["Malay"]["dept_id"] = "Dept Id";
	$fieldToolTipssurat_Kepada["Malay"]["dept_id"] = "";
	$fieldLabelssurat_Kepada["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipssurat_Kepada["Malay"]["Jawatan"] = "";
	$fieldLabelssurat_Kepada["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipssurat_Kepada["Malay"]["Bahagian"] = "";
	$fieldLabelssurat_Kepada["Malay"]["id"] = "Id";
	$fieldToolTipssurat_Kepada["Malay"]["id"] = "";
	$fieldLabelssurat_Kepada["Malay"]["id1"] = "Id1";
	$fieldToolTipssurat_Kepada["Malay"]["id1"] = "";
	if (count($fieldToolTipssurat_Kepada["Malay"]))
		$tdatasurat_Kepada[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssurat_Kepada[""] = array();
	$fieldToolTipssurat_Kepada[""] = array();
	$pageTitlessurat_Kepada[""] = array();
	if (count($fieldToolTipssurat_Kepada[""]))
		$tdatasurat_Kepada[".isUseToolTips"] = true;
}


	$tdatasurat_Kepada[".NCSearch"] = true;



$tdatasurat_Kepada[".shortTableName"] = "surat_Kepada";
$tdatasurat_Kepada[".nSecOptions"] = 0;
$tdatasurat_Kepada[".recsPerRowList"] = 1;
$tdatasurat_Kepada[".recsPerRowPrint"] = 1;
$tdatasurat_Kepada[".mainTableOwnerID"] = "";
$tdatasurat_Kepada[".moveNext"] = 1;
$tdatasurat_Kepada[".entityType"] = 1;

$tdatasurat_Kepada[".strOriginalTableName"] = "pejawatan_staffdetails";




$tdatasurat_Kepada[".showAddInPopup"] = false;

$tdatasurat_Kepada[".showEditInPopup"] = false;

$tdatasurat_Kepada[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasurat_Kepada[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasurat_Kepada[".fieldsForRegister"] = array();

$tdatasurat_Kepada[".listAjax"] = false;

	$tdatasurat_Kepada[".audit"] = false;

	$tdatasurat_Kepada[".locking"] = false;


$tdatasurat_Kepada[".add"] = true;
$tdatasurat_Kepada[".afterAddAction"] = 1;
$tdatasurat_Kepada[".closePopupAfterAdd"] = 1;
$tdatasurat_Kepada[".afterAddActionDetTable"] = "";

$tdatasurat_Kepada[".list"] = true;

$tdatasurat_Kepada[".inlineAdd"] = true;





$tdatasurat_Kepada[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasurat_Kepada[".searchSaving"] = false;
//

$tdatasurat_Kepada[".showSearchPanel"] = true;
		$tdatasurat_Kepada[".flexibleSearch"] = true;

if (isMobile())
	$tdatasurat_Kepada[".isUseAjaxSuggest"] = false;
else
	$tdatasurat_Kepada[".isUseAjaxSuggest"] = true;

$tdatasurat_Kepada[".rowHighlite"] = true;


																																																																									
$tdatasurat_Kepada[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasurat_Kepada[".isUseTimeForSearch"] = false;





$tdatasurat_Kepada[".allSearchFields"] = array();
$tdatasurat_Kepada[".filterFields"] = array();
$tdatasurat_Kepada[".requiredSearchFields"] = array();

$tdatasurat_Kepada[".allSearchFields"][] = "name";
	$tdatasurat_Kepada[".allSearchFields"][] = "Jawatan";
	$tdatasurat_Kepada[".allSearchFields"][] = "Bahagian";
	$tdatasurat_Kepada[".allSearchFields"][] = "post_id";
	$tdatasurat_Kepada[".allSearchFields"][] = "dept_id";
	$tdatasurat_Kepada[".allSearchFields"][] = "id";
	$tdatasurat_Kepada[".allSearchFields"][] = "id1";
	$tdatasurat_Kepada[".allSearchFields"][] = "staff_id";
	

$tdatasurat_Kepada[".googleLikeFields"] = array();
$tdatasurat_Kepada[".googleLikeFields"][] = "name";
$tdatasurat_Kepada[".googleLikeFields"][] = "Jawatan";
$tdatasurat_Kepada[".googleLikeFields"][] = "Bahagian";
$tdatasurat_Kepada[".googleLikeFields"][] = "post_id";
$tdatasurat_Kepada[".googleLikeFields"][] = "dept_id";
$tdatasurat_Kepada[".googleLikeFields"][] = "id";
$tdatasurat_Kepada[".googleLikeFields"][] = "id1";
$tdatasurat_Kepada[".googleLikeFields"][] = "staff_id";

$tdatasurat_Kepada[".panelSearchFields"] = array();
$tdatasurat_Kepada[".searchPanelOptions"] = array();
$tdatasurat_Kepada[".panelSearchFields"][] = "name";
	$tdatasurat_Kepada[".panelSearchFields"][] = "Jawatan";
	$tdatasurat_Kepada[".panelSearchFields"][] = "Bahagian";
	
$tdatasurat_Kepada[".advSearchFields"] = array();
$tdatasurat_Kepada[".advSearchFields"][] = "name";
$tdatasurat_Kepada[".advSearchFields"][] = "Jawatan";
$tdatasurat_Kepada[".advSearchFields"][] = "Bahagian";
$tdatasurat_Kepada[".advSearchFields"][] = "post_id";
$tdatasurat_Kepada[".advSearchFields"][] = "dept_id";
$tdatasurat_Kepada[".advSearchFields"][] = "staff_id";

$tdatasurat_Kepada[".tableType"] = "list";

$tdatasurat_Kepada[".printerPageOrientation"] = 0;
$tdatasurat_Kepada[".nPrinterPageScale"] = 100;

$tdatasurat_Kepada[".nPrinterSplitRecords"] = 40;

$tdatasurat_Kepada[".nPrinterPDFSplitRecords"] = 40;



$tdatasurat_Kepada[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasurat_Kepada[".pageSize"] = 20;

$tdatasurat_Kepada[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasurat_Kepada[".strOrderBy"] = $tstrOrderBy;

$tdatasurat_Kepada[".orderindexes"] = array();

$tdatasurat_Kepada[".sqlHead"] = "SELECT pejawatan_staffdetails.name,  pejawatan_ref_position.name AS Jawatan,  pejawatan_ref_department.name AS Bahagian,  pejawatan_staffdetails.post_id,  pejawatan_staffdetails.dept_id,  pejawatan_ref_position.id,  pejawatan_ref_department.id AS id1,  pejawatan_staffdetails.staff_id";
$tdatasurat_Kepada[".sqlFrom"] = "FROM pejawatan_staffdetails  , pejawatan_ref_position  , pejawatan_ref_department";
$tdatasurat_Kepada[".sqlWhereExpr"] = "(pejawatan_staffdetails.post_id = pejawatan_ref_position.id) AND (pejawatan_staffdetails.dept_id = pejawatan_ref_department.id)";
$tdatasurat_Kepada[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasurat_Kepada[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasurat_Kepada[".arrGroupsPerPage"] = $arrGPP;


$tableKeyssurat_Kepada = array();
$tableKeyssurat_Kepada[] = "staff_id";
$tdatasurat_Kepada[".Keys"] = $tableKeyssurat_Kepada;

$tdatasurat_Kepada[".listFields"] = array();
$tdatasurat_Kepada[".listFields"][] = "name";
$tdatasurat_Kepada[".listFields"][] = "Jawatan";
$tdatasurat_Kepada[".listFields"][] = "Bahagian";

$tdatasurat_Kepada[".hideMobileList"] = array();


$tdatasurat_Kepada[".viewFields"] = array();

$tdatasurat_Kepada[".addFields"] = array();
$tdatasurat_Kepada[".addFields"][] = "name";
$tdatasurat_Kepada[".addFields"][] = "Jawatan";
$tdatasurat_Kepada[".addFields"][] = "Bahagian";

$tdatasurat_Kepada[".masterListFields"] = array();
$tdatasurat_Kepada[".masterListFields"][] = "name";
$tdatasurat_Kepada[".masterListFields"][] = "Jawatan";
$tdatasurat_Kepada[".masterListFields"][] = "Bahagian";
$tdatasurat_Kepada[".masterListFields"][] = "post_id";
$tdatasurat_Kepada[".masterListFields"][] = "dept_id";
$tdatasurat_Kepada[".masterListFields"][] = "id";
$tdatasurat_Kepada[".masterListFields"][] = "id1";
$tdatasurat_Kepada[".masterListFields"][] = "staff_id";

$tdatasurat_Kepada[".inlineAddFields"] = array();
$tdatasurat_Kepada[".inlineAddFields"][] = "name";
$tdatasurat_Kepada[".inlineAddFields"][] = "Jawatan";
$tdatasurat_Kepada[".inlineAddFields"][] = "Bahagian";

$tdatasurat_Kepada[".editFields"] = array();

$tdatasurat_Kepada[".inlineEditFields"] = array();

$tdatasurat_Kepada[".exportFields"] = array();

$tdatasurat_Kepada[".importFields"] = array();

$tdatasurat_Kepada[".printFields"] = array();

//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = GetFieldLabel("surat_Kepada","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pejawatan_staffdetails.name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=225";

		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_Kepada["name"] = $fdata;
//	Jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Jawatan";
	$fdata["GoodName"] = "Jawatan";
	$fdata["ownerTable"] = "pejawatan_ref_position";
	$fdata["Label"] = GetFieldLabel("surat_Kepada","Jawatan");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pejawatan_ref_position.name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_Kepada["Jawatan"] = $fdata;
//	Bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Bahagian";
	$fdata["GoodName"] = "Bahagian";
	$fdata["ownerTable"] = "pejawatan_ref_department";
	$fdata["Label"] = GetFieldLabel("surat_Kepada","Bahagian");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pejawatan_ref_department.name";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_Kepada["Bahagian"] = $fdata;
//	post_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "post_id";
	$fdata["GoodName"] = "post_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = GetFieldLabel("surat_Kepada","post_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "post_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pejawatan_staffdetails.post_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_Kepada["post_id"] = $fdata;
//	dept_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "dept_id";
	$fdata["GoodName"] = "dept_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = GetFieldLabel("surat_Kepada","dept_id");
	$fdata["FieldType"] = 3;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "dept_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pejawatan_staffdetails.dept_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_Kepada["dept_id"] = $fdata;
//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pejawatan_ref_position";
	$fdata["Label"] = GetFieldLabel("surat_Kepada","id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pejawatan_ref_position.id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_Kepada["id"] = $fdata;
//	id1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "id1";
	$fdata["GoodName"] = "id1";
	$fdata["ownerTable"] = "pejawatan_ref_department";
	$fdata["Label"] = GetFieldLabel("surat_Kepada","id1");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pejawatan_ref_department.id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_Kepada["id1"] = $fdata;
//	staff_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "staff_id";
	$fdata["GoodName"] = "staff_id";
	$fdata["ownerTable"] = "pejawatan_staffdetails";
	$fdata["Label"] = GetFieldLabel("surat_Kepada","staff_id");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "staff_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pejawatan_staffdetails.staff_id";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 143;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

	// the end of search options settings




	$tdatasurat_Kepada["staff_id"] = $fdata;


$tables_data["surat_Kepada"]=&$tdatasurat_Kepada;
$field_labels["surat_Kepada"] = &$fieldLabelssurat_Kepada;
$fieldToolTips["surat_Kepada"] = &$fieldToolTipssurat_Kepada;
$page_titles["surat_Kepada"] = &$pageTitlessurat_Kepada;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["surat_Kepada"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["surat_Kepada"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_surat_Kepada()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pejawatan_staffdetails.name,  pejawatan_ref_position.name AS Jawatan,  pejawatan_ref_department.name AS Bahagian,  pejawatan_staffdetails.post_id,  pejawatan_staffdetails.dept_id,  pejawatan_ref_position.id,  pejawatan_ref_department.id AS id1,  pejawatan_staffdetails.staff_id";
$proto0["m_strFrom"] = "FROM pejawatan_staffdetails  , pejawatan_ref_position  , pejawatan_ref_department";
$proto0["m_strWhere"] = "(pejawatan_staffdetails.post_id = pejawatan_ref_position.id) AND (pejawatan_staffdetails.dept_id = pejawatan_ref_department.id)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(pejawatan_staffdetails.post_id = pejawatan_ref_position.id) AND (pejawatan_staffdetails.dept_id = pejawatan_ref_department.id)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(pejawatan_staffdetails.post_id = pejawatan_ref_position.id) AND (pejawatan_staffdetails.dept_id = pejawatan_ref_department.id)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "pejawatan_staffdetails.post_id = pejawatan_ref_position.id";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "post_id",
	"m_strTable" => "pejawatan_staffdetails",
	"m_srcTableName" => "surat_Kepada"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= pejawatan_ref_position.id";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "pejawatan_staffdetails.dept_id = pejawatan_ref_department.id";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dept_id",
	"m_strTable" => "pejawatan_staffdetails",
	"m_srcTableName" => "surat_Kepada"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= pejawatan_ref_department.id";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = true;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto7=array();
$proto7["m_sql"] = "";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_staffdetails",
	"m_srcTableName" => "surat_Kepada"
));

$proto9["m_sql"] = "pejawatan_staffdetails.name";
$proto9["m_srcTableName"] = "surat_Kepada";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_ref_position",
	"m_srcTableName" => "surat_Kepada"
));

$proto11["m_sql"] = "pejawatan_ref_position.name";
$proto11["m_srcTableName"] = "surat_Kepada";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "Jawatan";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_ref_department",
	"m_srcTableName" => "surat_Kepada"
));

$proto13["m_sql"] = "pejawatan_ref_department.name";
$proto13["m_srcTableName"] = "surat_Kepada";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "Bahagian";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "post_id",
	"m_strTable" => "pejawatan_staffdetails",
	"m_srcTableName" => "surat_Kepada"
));

$proto15["m_sql"] = "pejawatan_staffdetails.post_id";
$proto15["m_srcTableName"] = "surat_Kepada";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "dept_id",
	"m_strTable" => "pejawatan_staffdetails",
	"m_srcTableName" => "surat_Kepada"
));

$proto17["m_sql"] = "pejawatan_staffdetails.dept_id";
$proto17["m_srcTableName"] = "surat_Kepada";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pejawatan_ref_position",
	"m_srcTableName" => "surat_Kepada"
));

$proto19["m_sql"] = "pejawatan_ref_position.id";
$proto19["m_srcTableName"] = "surat_Kepada";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pejawatan_ref_department",
	"m_srcTableName" => "surat_Kepada"
));

$proto21["m_sql"] = "pejawatan_ref_department.id";
$proto21["m_srcTableName"] = "surat_Kepada";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "id1";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "staff_id",
	"m_strTable" => "pejawatan_staffdetails",
	"m_srcTableName" => "surat_Kepada"
));

$proto23["m_sql"] = "pejawatan_staffdetails.staff_id";
$proto23["m_srcTableName"] = "surat_Kepada";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "pejawatan_staffdetails";
$proto26["m_srcTableName"] = "surat_Kepada";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "staff_id";
$proto26["m_columns"][] = "lantikan_date";
$proto26["m_columns"][] = "sah_date";
$proto26["m_columns"][] = "pencen_date";
$proto26["m_columns"][] = "gaji_date";
$proto26["m_columns"][] = "skim_pencen";
$proto26["m_columns"][] = "tamatkontrak_date";
$proto26["m_columns"][] = "nofail";
$proto26["m_columns"][] = "name";
$proto26["m_columns"][] = "icno";
$proto26["m_columns"][] = "post_id";
$proto26["m_columns"][] = "dept_id";
$proto26["m_columns"][] = "grade_id";
$proto26["m_columns"][] = "start_date";
$proto26["m_columns"][] = "scheme_id";
$proto26["m_columns"][] = "username";
$proto26["m_columns"][] = "password";
$proto26["m_columns"][] = "type";
$proto26["m_columns"][] = "level";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "pejawatan_staffdetails";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "surat_Kepada";
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto25["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto25);

$proto0["m_fromlist"][]=$obj;
												$proto29=array();
$proto29["m_link"] = "SQLL_CROSSJOIN";
			$proto30=array();
$proto30["m_strName"] = "pejawatan_ref_position";
$proto30["m_srcTableName"] = "surat_Kepada";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "name";
$proto30["m_columns"][] = "description";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "pejawatan_ref_position";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "surat_Kepada";
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto29["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto29);

$proto0["m_fromlist"][]=$obj;
												$proto33=array();
$proto33["m_link"] = "SQLL_CROSSJOIN";
			$proto34=array();
$proto34["m_strName"] = "pejawatan_ref_department";
$proto34["m_srcTableName"] = "surat_Kepada";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id";
$proto34["m_columns"][] = "name";
$proto34["m_columns"][] = "description";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "pejawatan_ref_department";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "surat_Kepada";
$proto35=array();
$proto35["m_sql"] = "";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

$proto33["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto33);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="surat_Kepada";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_surat_Kepada = createSqlQuery_surat_Kepada();



								

$tdatasurat_Kepada[".sqlquery"] = $queryData_surat_Kepada;

$tableEvents["surat_Kepada"] = new eventsBase;
$tdatasurat_Kepada[".hasEvents"] = false;

?>