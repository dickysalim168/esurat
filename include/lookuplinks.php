<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["surat_jenis"]["surat.Jenis"]["edit"] = array("table" => "surat", "field" => "Jenis", "page" => "edit");
	$lookupTableLinks["agensi_awam"]["surat.agensi"]["edit"] = array("table" => "surat", "field" => "agensi", "page" => "edit");
	$lookupTableLinks["SuratKepada"]["surat.individu"]["edit"] = array("table" => "surat", "field" => "individu", "page" => "edit");
	$lookupTableLinks["drop_kategori"]["surat.kategori"]["edit"] = array("table" => "surat", "field" => "kategori", "page" => "edit");
	$lookupTableLinks["surat"]["surat.rujukanSurat"]["edit"] = array("table" => "surat", "field" => "rujukanSurat", "page" => "edit");
	$lookupTableLinks["pejawatan_staffdetails"]["surat.pendaftar"]["edit"] = array("table" => "surat", "field" => "pendaftar", "page" => "edit");
	$lookupTableLinks["pejawatan_staffdetails"]["surat_individu.Penghantar"]["edit"] = array("table" => "surat_individu", "field" => "Penghantar", "page" => "edit");
	$lookupTableLinks["pejawatan_staffdetails"]["surat_individu.Penerima"]["edit"] = array("table" => "surat_individu", "field" => "Penerima", "page" => "edit");
	$lookupTableLinks["status"]["surat_individu.Status"]["edit"] = array("table" => "surat_individu", "field" => "Status", "page" => "edit");
	$lookupTableLinks["pejawatan_ref_department"]["pengguna.Bahagian"]["edit"] = array("table" => "pengguna", "field" => "Bahagian", "page" => "edit");
	$lookupTableLinks["pejawatan_ref_position"]["pengguna.Jawatan"]["edit"] = array("table" => "pengguna", "field" => "Jawatan", "page" => "edit");
	$lookupTableLinks["drop_level"]["pengguna.Level"]["edit"] = array("table" => "pengguna", "field" => "Level", "page" => "edit");
	$lookupTableLinks["status"]["Viewer.Status"]["edit"] = array("table" => "Viewer", "field" => "Status", "page" => "edit");
	$lookupTableLinks["status"]["surat_view.status"]["edit"] = array("table" => "surat_view", "field" => "status", "page" => "edit");
	$lookupTableLinks["surat_jenis"]["surat_view.kategori"]["edit"] = array("table" => "surat_view", "field" => "kategori", "page" => "edit");
	$lookupTableLinks["surat_jenis"]["menuview.Jenis"]["edit"] = array("table" => "menuview", "field" => "Jenis", "page" => "edit");
	$lookupTableLinks["awam"]["menuview.awam"]["edit"] = array("table" => "menuview", "field" => "awam", "page" => "edit");
	$lookupTableLinks["agensi"]["menuview.agensi"]["edit"] = array("table" => "menuview", "field" => "agensi", "page" => "edit");
	$lookupTableLinks["SuratKepada"]["menuview.individu"]["edit"] = array("table" => "menuview", "field" => "individu", "page" => "edit");
	$lookupTableLinks["pejawatan_staffdetails"]["menuview.pendaftar"]["edit"] = array("table" => "menuview", "field" => "pendaftar", "page" => "edit");
	$lookupTableLinks["status"]["surat_editor.Status"]["edit"] = array("table" => "surat_editor", "field" => "Status", "page" => "edit");
	$lookupTableLinks["surat_jenis"]["surat_maklumatsurat.Jenis"]["edit"] = array("table" => "surat_maklumatsurat", "field" => "Jenis", "page" => "edit");
	$lookupTableLinks["awam"]["surat_maklumatsurat.awam"]["edit"] = array("table" => "surat_maklumatsurat", "field" => "awam", "page" => "edit");
	$lookupTableLinks["agensi"]["surat_maklumatsurat.agensi"]["edit"] = array("table" => "surat_maklumatsurat", "field" => "agensi", "page" => "edit");
	$lookupTableLinks["surat_Kepada"]["surat_maklumatsurat.individu"]["edit"] = array("table" => "surat_maklumatsurat", "field" => "individu", "page" => "edit");
	$lookupTableLinks["drop_kategori"]["surat_maklumatsurat.kategori"]["edit"] = array("table" => "surat_maklumatsurat", "field" => "kategori", "page" => "edit");
	$lookupTableLinks["pejawatan_staffdetails"]["surat_maklumatsurat.pendaftar"]["edit"] = array("table" => "surat_maklumatsurat", "field" => "pendaftar", "page" => "edit");
	$lookupTableLinks["surat_jenis"]["surat_PTG.Jenis"]["edit"] = array("table" => "surat_PTG", "field" => "Jenis", "page" => "edit");
	$lookupTableLinks["awam"]["surat_PTG.awam"]["edit"] = array("table" => "surat_PTG", "field" => "awam", "page" => "edit");
	$lookupTableLinks["agensi"]["surat_PTG.agensi"]["edit"] = array("table" => "surat_PTG", "field" => "agensi", "page" => "edit");
	$lookupTableLinks["SuratKepada"]["surat_PTG.individu"]["edit"] = array("table" => "surat_PTG", "field" => "individu", "page" => "edit");
	$lookupTableLinks["surat_Kepada"]["surat_PTG.individu"]["register"] = array("table" => "surat_PTG", "field" => "individu", "page" => "register");
	$lookupTableLinks["pejawatan_staffdetails"]["surat_PTG.pendaftar"]["edit"] = array("table" => "surat_PTG", "field" => "pendaftar", "page" => "edit");
	$lookupTableLinks["surat_jenis"]["surat_AgensiAwam.Jenis"]["edit"] = array("table" => "surat_AgensiAwam", "field" => "Jenis", "page" => "edit");
	$lookupTableLinks["awam"]["surat_AgensiAwam.awam"]["edit"] = array("table" => "surat_AgensiAwam", "field" => "awam", "page" => "edit");
	$lookupTableLinks["agensi_awam"]["surat_AgensiAwam.agensi"]["edit"] = array("table" => "surat_AgensiAwam", "field" => "agensi", "page" => "edit");
	$lookupTableLinks["surat_Kepada"]["surat_AgensiAwam.individu"]["edit"] = array("table" => "surat_AgensiAwam", "field" => "individu", "page" => "edit");
	$lookupTableLinks["pejawatan_staffdetails"]["surat_AgensiAwam.pendaftar"]["edit"] = array("table" => "surat_AgensiAwam", "field" => "pendaftar", "page" => "edit");
	$lookupTableLinks["surat_jenis"]["surat_Awam.Jenis"]["edit"] = array("table" => "surat_Awam", "field" => "Jenis", "page" => "edit");
	$lookupTableLinks["awam"]["surat_Awam.awam"]["edit"] = array("table" => "surat_Awam", "field" => "awam", "page" => "edit");
	$lookupTableLinks["agensi"]["surat_Awam.agensi"]["edit"] = array("table" => "surat_Awam", "field" => "agensi", "page" => "edit");
	$lookupTableLinks["surat_Kepada"]["surat_Awam.individu"]["edit"] = array("table" => "surat_Awam", "field" => "individu", "page" => "edit");
	$lookupTableLinks["pejawatan_staffdetails"]["surat_Awam.pendaftar"]["edit"] = array("table" => "surat_Awam", "field" => "pendaftar", "page" => "edit");
	$lookupTableLinks["surat_jenis"]["suratview2.Jenis"]["edit"] = array("table" => "suratview2", "field" => "Jenis", "page" => "edit");
	$lookupTableLinks["awam"]["suratview2.awam"]["edit"] = array("table" => "suratview2", "field" => "awam", "page" => "edit");
	$lookupTableLinks["agensi"]["suratview2.agensi"]["edit"] = array("table" => "suratview2", "field" => "agensi", "page" => "edit");
	$lookupTableLinks["surat_Kepada"]["suratview2.individu"]["edit"] = array("table" => "suratview2", "field" => "individu", "page" => "edit");
	$lookupTableLinks["drop_kategori"]["suratview2.kategori"]["edit"] = array("table" => "suratview2", "field" => "kategori", "page" => "edit");
	$lookupTableLinks["pejawatan_staffdetails"]["suratview2.pendaftar"]["edit"] = array("table" => "suratview2", "field" => "pendaftar", "page" => "edit");
	$lookupTableLinks["pejawatan_ref_department"]["TambahPenerima.Bahagian"]["edit"] = array("table" => "TambahPenerima", "field" => "Bahagian", "page" => "edit");
	$lookupTableLinks["pejawatan_ref_position"]["TambahPenerima.Jawatan"]["edit"] = array("table" => "TambahPenerima", "field" => "Jawatan", "page" => "edit");
	$lookupTableLinks["drop_level"]["TambahPenerima.Level"]["edit"] = array("table" => "TambahPenerima", "field" => "Level", "page" => "edit");
	$lookupTableLinks["pejawatan_ref_department"]["SuratKepada.Bahagian"]["edit"] = array("table" => "SuratKepada", "field" => "Bahagian", "page" => "edit");
	$lookupTableLinks["pejawatan_ref_position"]["SuratKepada.Jawatan"]["edit"] = array("table" => "SuratKepada", "field" => "Jawatan", "page" => "edit");
	$lookupTableLinks["surat_jenis"]["agensi_awam.jenis"]["edit"] = array("table" => "agensi_awam", "field" => "jenis", "page" => "edit");
}

?>