function OnReady() {		
	$('#topPart').addClass('hidden');
	$('#closeMenu').addClass('hidden');
	$('#openMenu').click(function (e) {
		e.preventDefault();
		$('#topPart').slideDown('slow');
		$('#openMenu').addClass('hidden');
		$('#closeMenu').removeClass('hidden');
	});
	$('#closeMenu').click(function (e) {
		e.preventDefault();
		$('#topPart').slideUp('slow');
		$('#closeMenu').addClass('hidden');
		$('#openMenu').removeClass('hidden');
	});
	$('#closeLanguageMenu').click(function (e) {
		e.preventDefault();
		HideLangMenuItem();
		$('#languageSelected').removeClass('hidden');
	});
	$('#selectedLanguageName').click(function (e) {
		e.preventDefault();
		ShowLangMenuItem();
		$('#languageSelected').addClass('hidden');
	});
	$('#russianLang').click(function (e) {
		ChangeLanguage('russianLang');
	});
	$('#engLang').click(function (e) {
		ChangeLanguage('engLang');
	});
	$('#deutschLang').click(function (e) {
		ChangeLanguage('deutschLang');
	});
	$('#franceLang').click(function (e) {
		ChangeLanguage('franceLang');
	});
};
function ShowLangMenuItem(){
	$(".languageMenuItem").removeClass('hidden');
}

function HideLangMenuItem(){
	$(".languageMenuItem").addClass('hidden');
}

function ChangeLanguage(langName) {
	$('#selectedLanguageName').html($('#'+langName).html()+'&#9662;');
	$('#languageSelected').removeClass('hidden');
	$('#languageMenu').addClass('hidden');
};