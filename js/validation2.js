function rek() {
	 if (document.getElementById('rekening').value == 40100 || document.getElementById('rekening').value == 40200 || document.getElementById('rekening').value == 40300) {
		document.getElementById('hide').style.display = "";
		document.getElementById('hide2').style.display = "none";
	 } else if (document.getElementById('rekening').value == 40101 || document.getElementById('rekening').value == 40201 || document.getElementById('rekening').value == 40301) {
		document.getElementById('hide').style.display = "none";
		document.getElementById('hide2').style.display = "";
	 } else {
		document.getElementById('hide').style.display = "none";
		document.getElementById('hide2').style.display = "none";
	 }
}