<?php
require_once(getabspath("classes/cipherer.php"));




$tdataSuratKepada = array();
	$tdataSuratKepada[".truncateText"] = true;
	$tdataSuratKepada[".NumberOfChars"] = 80;
	$tdataSuratKepada[".ShortName"] = "SuratKepada";
	$tdataSuratKepada[".OwnerID"] = "";
	$tdataSuratKepada[".OriginalTable"] = "pengguna";

//	field labels
$fieldLabelsSuratKepada = array();
$fieldToolTipsSuratKepada = array();
$pageTitlesSuratKepada = array();

if(mlang_getcurrentlang()=="Malay")
{
	$fieldLabelsSuratKepada["Malay"] = array();
	$fieldToolTipsSuratKepada["Malay"] = array();
	$pageTitlesSuratKepada["Malay"] = array();
	$fieldLabelsSuratKepada["Malay"]["pid"] = "Pid";
	$fieldToolTipsSuratKepada["Malay"]["pid"] = "";
	$fieldLabelsSuratKepada["Malay"]["Nama"] = "Nama";
	$fieldToolTipsSuratKepada["Malay"]["Nama"] = "";
	$fieldLabelsSuratKepada["Malay"]["Bahagian"] = "Bahagian";
	$fieldToolTipsSuratKepada["Malay"]["Bahagian"] = "";
	$fieldLabelsSuratKepada["Malay"]["Jawatan"] = "Jawatan";
	$fieldToolTipsSuratKepada["Malay"]["Jawatan"] = "";
	$fieldLabelsSuratKepada["Malay"]["BahagianName"] = "Bahagian Name";
	$fieldToolTipsSuratKepada["Malay"]["BahagianName"] = "";
	$fieldLabelsSuratKepada["Malay"]["JawatanName"] = "Jawatan Name";
	$fieldToolTipsSuratKepada["Malay"]["JawatanName"] = "";
	$fieldLabelsSuratKepada["Malay"]["JawatanID"] = "Jawatan ID";
	$fieldToolTipsSuratKepada["Malay"]["JawatanID"] = "";
	$fieldLabelsSuratKepada["Malay"]["BahagianID"] = "Bahagian ID";
	$fieldToolTipsSuratKepada["Malay"]["BahagianID"] = "";
	if (count($fieldToolTipsSuratKepada["Malay"]))
		$tdataSuratKepada[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsSuratKepada[""] = array();
	$fieldToolTipsSuratKepada[""] = array();
	$pageTitlesSuratKepada[""] = array();
	$fieldLabelsSuratKepada[""]["pid"] = "Pid";
	$fieldToolTipsSuratKepada[""]["pid"] = "";
	$fieldLabelsSuratKepada[""]["BahagianName"] = "Bahagian Name";
	$fieldToolTipsSuratKepada[""]["BahagianName"] = "";
	$fieldLabelsSuratKepada[""]["JawatanName"] = "Jawatan Name";
	$fieldToolTipsSuratKepada[""]["JawatanName"] = "";
	$fieldLabelsSuratKepada[""]["JawatanID"] = "Jawatan ID";
	$fieldToolTipsSuratKepada[""]["JawatanID"] = "";
	$fieldLabelsSuratKepada[""]["BahagianID"] = "Bahagian ID";
	$fieldToolTipsSuratKepada[""]["BahagianID"] = "";
	if (count($fieldToolTipsSuratKepada[""]))
		$tdataSuratKepada[".isUseToolTips"] = true;
}


	$tdataSuratKepada[".NCSearch"] = true;



$tdataSuratKepada[".shortTableName"] = "SuratKepada";
$tdataSuratKepada[".nSecOptions"] = 0;
$tdataSuratKepada[".recsPerRowList"] = 1;
$tdataSuratKepada[".recsPerRowPrint"] = 1;
$tdataSuratKepada[".mainTableOwnerID"] = "";
$tdataSuratKepada[".moveNext"] = 1;
$tdataSuratKepada[".entityType"] = 1;

$tdataSuratKepada[".strOriginalTableName"] = "pengguna";




$tdataSuratKepada[".showAddInPopup"] = false;

$tdataSuratKepada[".showEditInPopup"] = false;

$tdataSuratKepada[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataSuratKepada[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataSuratKepada[".fieldsForRegister"] = array();

$tdataSuratKepada[".listAjax"] = false;

	$tdataSuratKepada[".audit"] = false;

	$tdataSuratKepada[".locking"] = false;



$tdataSuratKepada[".list"] = true;

$tdataSuratKepada[".inlineAdd"] = true;





$tdataSuratKepada[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataSuratKepada[".searchSaving"] = false;
//

$tdataSuratKepada[".showSearchPanel"] = true;
		$tdataSuratKepada[".flexibleSearch"] = true;

if (isMobile())
	$tdataSuratKepada[".isUseAjaxSuggest"] = false;
else
	$tdataSuratKepada[".isUseAjaxSuggest"] = true;

$tdataSuratKepada[".rowHighlite"] = true;


																																																																									
$tdataSuratKepada[".addPageEvents"] = false;

// use timepicker for search panel
$tdataSuratKepada[".isUseTimeForSearch"] = false;





$tdataSuratKepada[".allSearchFields"] = array();
$tdataSuratKepada[".filterFields"] = array();
$tdataSuratKepada[".requiredSearchFields"] = array();

$tdataSuratKepada[".allSearchFields"][] = "JawatanName";
	$tdataSuratKepada[".allSearchFields"][] = "JawatanID";
	$tdataSuratKepada[".allSearchFields"][] = "BahagianID";
	$tdataSuratKepada[".allSearchFields"][] = "BahagianName";
	$tdataSuratKepada[".allSearchFields"][] = "pid";
	$tdataSuratKepada[".allSearchFields"][] = "Nama";
	$tdataSuratKepada[".allSearchFields"][] = "Bahagian";
	$tdataSuratKepada[".allSearchFields"][] = "Jawatan";
	

$tdataSuratKepada[".googleLikeFields"] = array();
$tdataSuratKepada[".googleLikeFields"][] = "pid";
$tdataSuratKepada[".googleLikeFields"][] = "Nama";
$tdataSuratKepada[".googleLikeFields"][] = "Bahagian";
$tdataSuratKepada[".googleLikeFields"][] = "Jawatan";
$tdataSuratKepada[".googleLikeFields"][] = "BahagianName";
$tdataSuratKepada[".googleLikeFields"][] = "JawatanName";
$tdataSuratKepada[".googleLikeFields"][] = "JawatanID";
$tdataSuratKepada[".googleLikeFields"][] = "BahagianID";


$tdataSuratKepada[".advSearchFields"] = array();
$tdataSuratKepada[".advSearchFields"][] = "JawatanName";
$tdataSuratKepada[".advSearchFields"][] = "JawatanID";
$tdataSuratKepada[".advSearchFields"][] = "BahagianID";
$tdataSuratKepada[".advSearchFields"][] = "BahagianName";
$tdataSuratKepada[".advSearchFields"][] = "pid";
$tdataSuratKepada[".advSearchFields"][] = "Nama";
$tdataSuratKepada[".advSearchFields"][] = "Bahagian";
$tdataSuratKepada[".advSearchFields"][] = "Jawatan";

$tdataSuratKepada[".tableType"] = "list";

$tdataSuratKepada[".printerPageOrientation"] = 0;
$tdataSuratKepada[".nPrinterPageScale"] = 100;

$tdataSuratKepada[".nPrinterSplitRecords"] = 40;

$tdataSuratKepada[".nPrinterPDFSplitRecords"] = 40;



$tdataSuratKepada[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataSuratKepada[".pageSize"] = 20;

$tdataSuratKepada[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataSuratKepada[".strOrderBy"] = $tstrOrderBy;

$tdataSuratKepada[".orderindexes"] = array();

$tdataSuratKepada[".sqlHead"] = "SELECT pengguna.pid,  pengguna.Nama,  pengguna.Bahagian,  pengguna.Jawatan,  pejawatan_ref_department.name AS BahagianName,  pejawatan_ref_position.name AS JawatanName,  pejawatan_ref_position.id AS JawatanID,  pejawatan_ref_department.id AS BahagianID";
$tdataSuratKepada[".sqlFrom"] = "FROM pengguna  , pejawatan_ref_department  , pejawatan_ref_position";
$tdataSuratKepada[".sqlWhereExpr"] = "(pengguna.Bahagian = pejawatan_ref_department.id) AND (pengguna.Jawatan = pejawatan_ref_position.id)";
$tdataSuratKepada[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataSuratKepada[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataSuratKepada[".arrGroupsPerPage"] = $arrGPP;


$tableKeysSuratKepada = array();
$tableKeysSuratKepada[] = "pid";
$tdataSuratKepada[".Keys"] = $tableKeysSuratKepada;

$tdataSuratKepada[".listFields"] = array();
$tdataSuratKepada[".listFields"][] = "Nama";
$tdataSuratKepada[".listFields"][] = "Bahagian";
$tdataSuratKepada[".listFields"][] = "Jawatan";

$tdataSuratKepada[".hideMobileList"] = array();


$tdataSuratKepada[".viewFields"] = array();

$tdataSuratKepada[".addFields"] = array();

$tdataSuratKepada[".masterListFields"] = array();
$tdataSuratKepada[".masterListFields"][] = "JawatanName";
$tdataSuratKepada[".masterListFields"][] = "JawatanID";
$tdataSuratKepada[".masterListFields"][] = "BahagianID";
$tdataSuratKepada[".masterListFields"][] = "BahagianName";
$tdataSuratKepada[".masterListFields"][] = "pid";
$tdataSuratKepada[".masterListFields"][] = "Nama";
$tdataSuratKepada[".masterListFields"][] = "Bahagian";
$tdataSuratKepada[".masterListFields"][] = "Jawatan";

$tdataSuratKepada[".inlineAddFields"] = array();

$tdataSuratKepada[".editFields"] = array();

$tdataSuratKepada[".inlineEditFields"] = array();

$tdataSuratKepada[".exportFields"] = array();

$tdataSuratKepada[".importFields"] = array();

$tdataSuratKepada[".printFields"] = array();

//	pid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "pid";
	$fdata["GoodName"] = "pid";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("SuratKepada","pid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "pid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pengguna.pid";

	
	
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




	$tdataSuratKepada["pid"] = $fdata;
//	Nama
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nama";
	$fdata["GoodName"] = "Nama";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("SuratKepada","Nama");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Nama";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pengguna.Nama";

	
	
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
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 300;

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




	$tdataSuratKepada["Nama"] = $fdata;
//	Bahagian
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Bahagian";
	$fdata["GoodName"] = "Bahagian";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("SuratKepada","Bahagian");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Bahagian";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pengguna.Bahagian";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pejawatan_ref_department";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 300;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
	// the end of search options settings




	$tdataSuratKepada["Bahagian"] = $fdata;
//	Jawatan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Jawatan";
	$fdata["GoodName"] = "Jawatan";
	$fdata["ownerTable"] = "pengguna";
	$fdata["Label"] = GetFieldLabel("SuratKepada","Jawatan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "Jawatan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pengguna.Jawatan";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "pejawatan_ref_position";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 3;
	$edata["DisplayField"] = "name";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 300;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
	// the end of search options settings




	$tdataSuratKepada["Jawatan"] = $fdata;
//	BahagianName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BahagianName";
	$fdata["GoodName"] = "BahagianName";
	$fdata["ownerTable"] = "pejawatan_ref_department";
	$fdata["Label"] = GetFieldLabel("SuratKepada","BahagianName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataSuratKepada["BahagianName"] = $fdata;
//	JawatanName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "JawatanName";
	$fdata["GoodName"] = "JawatanName";
	$fdata["ownerTable"] = "pejawatan_ref_position";
	$fdata["Label"] = GetFieldLabel("SuratKepada","JawatanName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataSuratKepada["JawatanName"] = $fdata;
//	JawatanID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "JawatanID";
	$fdata["GoodName"] = "JawatanID";
	$fdata["ownerTable"] = "pejawatan_ref_position";
	$fdata["Label"] = GetFieldLabel("SuratKepada","JawatanID");
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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataSuratKepada["JawatanID"] = $fdata;
//	BahagianID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BahagianID";
	$fdata["GoodName"] = "BahagianID";
	$fdata["ownerTable"] = "pejawatan_ref_department";
	$fdata["Label"] = GetFieldLabel("SuratKepada","BahagianID");
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

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataSuratKepada["BahagianID"] = $fdata;


$tables_data["SuratKepada"]=&$tdataSuratKepada;
$field_labels["SuratKepada"] = &$fieldLabelsSuratKepada;
$fieldToolTips["SuratKepada"] = &$fieldToolTipsSuratKepada;
$page_titles["SuratKepada"] = &$pageTitlesSuratKepada;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["SuratKepada"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["SuratKepada"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_SuratKepada()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "pengguna.pid,  pengguna.Nama,  pengguna.Bahagian,  pengguna.Jawatan,  pejawatan_ref_department.name AS BahagianName,  pejawatan_ref_position.name AS JawatanName,  pejawatan_ref_position.id AS JawatanID,  pejawatan_ref_department.id AS BahagianID";
$proto0["m_strFrom"] = "FROM pengguna  , pejawatan_ref_department  , pejawatan_ref_position";
$proto0["m_strWhere"] = "(pengguna.Bahagian = pejawatan_ref_department.id) AND (pengguna.Jawatan = pejawatan_ref_position.id)";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "(pengguna.Bahagian = pejawatan_ref_department.id) AND (pengguna.Jawatan = pejawatan_ref_position.id)";
$proto1["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "(pengguna.Bahagian = pejawatan_ref_department.id) AND (pengguna.Jawatan = pejawatan_ref_position.id)"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "pengguna.Bahagian = pejawatan_ref_department.id";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Bahagian",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "SuratKepada"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "= pejawatan_ref_department.id";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = true;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "pengguna.Jawatan = pejawatan_ref_position.id";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "Jawatan",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "SuratKepada"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "= pejawatan_ref_position.id";
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
	"m_strName" => "pid",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "SuratKepada"
));

$proto9["m_sql"] = "pengguna.pid";
$proto9["m_srcTableName"] = "SuratKepada";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Nama",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "SuratKepada"
));

$proto11["m_sql"] = "pengguna.Nama";
$proto11["m_srcTableName"] = "SuratKepada";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "Bahagian",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "SuratKepada"
));

$proto13["m_sql"] = "pengguna.Bahagian";
$proto13["m_srcTableName"] = "SuratKepada";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "Jawatan",
	"m_strTable" => "pengguna",
	"m_srcTableName" => "SuratKepada"
));

$proto15["m_sql"] = "pengguna.Jawatan";
$proto15["m_srcTableName"] = "SuratKepada";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_ref_department",
	"m_srcTableName" => "SuratKepada"
));

$proto17["m_sql"] = "pejawatan_ref_department.name";
$proto17["m_srcTableName"] = "SuratKepada";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "BahagianName";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "pejawatan_ref_position",
	"m_srcTableName" => "SuratKepada"
));

$proto19["m_sql"] = "pejawatan_ref_position.name";
$proto19["m_srcTableName"] = "SuratKepada";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "JawatanName";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pejawatan_ref_position",
	"m_srcTableName" => "SuratKepada"
));

$proto21["m_sql"] = "pejawatan_ref_position.id";
$proto21["m_srcTableName"] = "SuratKepada";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "JawatanID";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "pejawatan_ref_department",
	"m_srcTableName" => "SuratKepada"
));

$proto23["m_sql"] = "pejawatan_ref_department.id";
$proto23["m_srcTableName"] = "SuratKepada";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "BahagianID";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto25=array();
$proto25["m_link"] = "SQLL_MAIN";
			$proto26=array();
$proto26["m_strName"] = "pengguna";
$proto26["m_srcTableName"] = "SuratKepada";
$proto26["m_columns"] = array();
$proto26["m_columns"][] = "pid";
$proto26["m_columns"][] = "NoKP";
$proto26["m_columns"][] = "Password";
$proto26["m_columns"][] = "Email";
$proto26["m_columns"][] = "Nama";
$proto26["m_columns"][] = "Bahagian";
$proto26["m_columns"][] = "Jawatan";
$proto26["m_columns"][] = "Level";
$proto26["m_columns"][] = "iid";
$proto26["m_columns"][] = "Status";
$obj = new SQLTable($proto26);

$proto25["m_table"] = $obj;
$proto25["m_sql"] = "pengguna";
$proto25["m_alias"] = "";
$proto25["m_srcTableName"] = "SuratKepada";
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
$proto30["m_strName"] = "pejawatan_ref_department";
$proto30["m_srcTableName"] = "SuratKepada";
$proto30["m_columns"] = array();
$proto30["m_columns"][] = "id";
$proto30["m_columns"][] = "name";
$proto30["m_columns"][] = "description";
$obj = new SQLTable($proto30);

$proto29["m_table"] = $obj;
$proto29["m_sql"] = "pejawatan_ref_department";
$proto29["m_alias"] = "";
$proto29["m_srcTableName"] = "SuratKepada";
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
$proto34["m_strName"] = "pejawatan_ref_position";
$proto34["m_srcTableName"] = "SuratKepada";
$proto34["m_columns"] = array();
$proto34["m_columns"][] = "id";
$proto34["m_columns"][] = "name";
$proto34["m_columns"][] = "description";
$obj = new SQLTable($proto34);

$proto33["m_table"] = $obj;
$proto33["m_sql"] = "pejawatan_ref_position";
$proto33["m_alias"] = "";
$proto33["m_srcTableName"] = "SuratKepada";
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
$proto0["m_srcTableName"]="SuratKepada";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_SuratKepada = createSqlQuery_SuratKepada();



								

$tdataSuratKepada[".sqlquery"] = $queryData_SuratKepada;

$tableEvents["SuratKepada"] = new eventsBase;
$tdataSuratKepada[".hasEvents"] = false;

?>