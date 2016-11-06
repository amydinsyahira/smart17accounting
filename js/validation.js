 function rek() {
	 if (document.getElementById('ttlrekening').value == 2) {
		document.getElementById('toggle4').style.display = "none";
		document.getElementById('toggle5').style.display = "none";
		document.getElementById('toggle6').style.display = "none";
		document.getElementById('toggle7').style.display = "none";
		document.getElementById('rekening3').value = "";
		document.getElementById('total3').value = "";
		document.getElementById('ticket3').value = "";
		document.getElementById('tour3').value = "";
		document.getElementById('hide3').style.display = "none";
		document.getElementById('hide7').style.display = "none";
		document.getElementById('profit5').value = "";
		document.getElementById('profit6').value = "";
		document.getElementById('rekening4').value = "";
		document.getElementById('total4').value = "";
		document.getElementById('ticket4').value = "";
		document.getElementById('tour4').value = "";
		document.getElementById('hide4').style.display = "none";
		document.getElementById('hide8').style.display = "none";
		document.getElementById('profit7').value = "";
		document.getElementById('profit8').value = "";
	 } else if (document.getElementById('ttlrekening').value == 3) {
		document.getElementById('toggle4').style.display = "";
		document.getElementById('toggle5').style.display = "";
		document.getElementById('toggle6').style.display = "none";
		document.getElementById('toggle7').style.display = "none";
		document.getElementById('rekening4').value = "";
		document.getElementById('total4').value = "";
		document.getElementById('ticket4').value = "";
		document.getElementById('tour4').value = "";
		document.getElementById('hide4').style.display = "none";
		document.getElementById('hide8').style.display = "none";
		document.getElementById('profit7').value = "";
		document.getElementById('profit8').value = "";
	 } else {
		document.getElementById('toggle4').style.display = "";
		document.getElementById('toggle5').style.display = "";
		document.getElementById('toggle6').style.display = "";
		document.getElementById('toggle7').style.display = "";
	 }
  }
 function fticket() {
	 if (document.getElementById('rekening').value == 40100 || document.getElementById('rekening').value == 40200 || document.getElementById('rekening').value == 40300) {
		document.getElementById('hide').style.display = "";
		document.getElementById('hide5').style.display = "none";
		document.getElementById('tour').value = "";
		document.getElementById('profit2').value = "";
	 } else if (document.getElementById('rekening').value == 40101 || document.getElementById('rekening').value == 40201 || document.getElementById('rekening').value == 40301) {
		document.getElementById('hide').style.display = "none";
		document.getElementById('hide5').style.display = "";
		document.getElementById('ticket').value = "";
		document.getElementById('profit').value = "";
	 } else {
		document.getElementById('profit').value = "";
		document.getElementById('profit2').value = "";
		document.getElementById('tour').value = "";
		document.getElementById('ticket').value = "";
		document.getElementById('hide').style.display = "none";
		document.getElementById('hide5').style.display = "none";
	 }
  }
 function fticket2() {
	 if (document.getElementById('rekening2').value == 40100 || document.getElementById('rekening2').value == 40200 || document.getElementById('rekening2').value == 40300) {
		document.getElementById('hide2').style.display = "";
		document.getElementById('hide6').style.display = "none";
		document.getElementById('tour2').value = "";
		document.getElementById('profit4').value = "";
	 } else if (document.getElementById('rekening2').value == 40101 || document.getElementById('rekening2').value == 40201 || document.getElementById('rekening2').value == 40301) {
		document.getElementById('hide2').style.display = "none";
		document.getElementById('hide6').style.display = "";
		document.getElementById('ticket2').value = "";
		document.getElementById('profit3').value = "";
	 } else {
		document.getElementById('profit3').value = "";
		document.getElementById('profit4').value = "";
		document.getElementById('tour2').value = "";
		document.getElementById('ticket2').value = "";
		document.getElementById('hide2').style.display = "none";
		document.getElementById('hide6').style.display = "none";
	 }
  }
 function fticket3() {
	 if (document.getElementById('rekening3').value == 40100 || document.getElementById('rekening3').value == 40200 || document.getElementById('rekening3').value == 40300) {
		document.getElementById('hide3').style.display = "";
		document.getElementById('hide7').style.display = "none";
		document.getElementById('tour3').value = "";
		document.getElementById('profit6').value = "";
	 } else if (document.getElementById('rekening3').value == 40101 || document.getElementById('rekening3').value == 40201 || document.getElementById('rekening3').value == 40301) {
		document.getElementById('hide3').style.display = "none";
		document.getElementById('hide7').style.display = "";
		document.getElementById('ticket3').value = "";
		document.getElementById('profit5').value = "";
	 } else {
		document.getElementById('profit5').value = "";
		document.getElementById('profit6').value = "";
		document.getElementById('tour3').value = "";
		document.getElementById('ticket3').value = "";
		document.getElementById('hide3').style.display = "none";
		document.getElementById('hide7').style.display = "none";
	 }
  }
 function fticket4() {
	 if (document.getElementById('rekening4').value == 40100 || document.getElementById('rekening4').value == 40200 || document.getElementById('rekening4').value == 40300) {
		document.getElementById('hide4').style.display = "";
		document.getElementById('hide8').style.display = "none";
		document.getElementById('tour4').value = "";
		document.getElementById('profit8').value = "";
	 } else if (document.getElementById('rekening4').value == 40101 || document.getElementById('rekening4').value == 40201 || document.getElementById('rekening4').value == 40301) {
		document.getElementById('hide4').style.display = "none";
		document.getElementById('hide8').style.display = "";
		document.getElementById('ticket4').value = "";
		document.getElementById('profit7').value = "";
	 } else {
		document.getElementById('profit7').value = "";
		document.getElementById('profit8').value = "";
		document.getElementById('tour4').value = "";
		document.getElementById('ticket4').value = "";
		document.getElementById('hide4').style.display = "none";
		document.getElementById('hide8').style.display = "none";
	 }
  }
 function checkForm(form)
  {
  if (form.ttlrekening.value == 2) {
    if(form.client.value == "") {
      alert("Error: Client cannot be blank!");
      form.client.focus();
      return false;
    }
    if(form.handphone.value == "") {
      alert("Error: Handphone cannot be blank!");
      form.handphone.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.handphone.value)) {
      alert("Error: Handphone just filled with number!");
      form.handphone.focus();
      return false;
    }
    if(form.tanggal.value == "") {
      alert("Error: Date cannot be blank!");
      form.tanggal.focus();
      return false;
    }
    if(form.time.value == "") {
      alert("Error: Time cannot be blank!");
      form.time.focus();
      return false;
    }
    if(form.trans.value == "") {
      alert("Error: Transaction cannot be blank!");
      form.trans.focus();
      return false;
    }
    if(form.rekening.value == "") {
      alert("Error: Rekening cannot be blank!");
      form.rekening.focus();
      return false;
    }
	if (form.rekening.value == 40100 || form.rekening.value == 40200 || form.rekening.value == 40300) {
		if(form.ticket.value == "") {
		  alert("Error: Ticket cannot be blank!");
		  form.ticket.focus();
		  return false;
		}
		if(form.profit.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit.focus();
		  return false;
		}
	}
	if (form.rekening.value == 40101 || form.rekening.value == 40201 || form.rekening.value == 40301) {
		if(form.tour.value == "") {
		  alert("Error: Tour cannot be blank!");
		  form.tour.focus();
		  return false;
		}
		if(form.profit2.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit2.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit2.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit2.focus();
		  return false;
		}
	}
    if(form.rekening2.value == "") {
      alert("Error: Rekening cannot be blank!");
      form.rekening2.focus();
      return false;
    }
	if (form.rekening2.value == 40100 || form.rekening2.value == 40200 || form.rekening2.value == 40300) {
		if(form.ticket2.value == "") {
		  alert("Error: Ticket cannot be blank!");
		  form.ticket2.focus();
		  return false;
		}
		if(form.profit3.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit3.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit3.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit3.focus();
		  return false;
		}
	}
	if (form.rekening2.value == 40101 || form.rekening2.value == 40201 || form.rekening2.value == 40301) {
		if(form.tour2.value == "") {
		  alert("Error: Tour cannot be blank!");
		  form.tour2.focus();
		  return false;
		}
		if(form.profit4.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit4.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit4.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit4.focus();
		  return false;
		}
	}
    if(form.total.value == "") {
      alert("Error: Total cannot be blank!");
      form.total.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.total.value)) {
      alert("Error: Total just filled with number!");
      form.total.focus();
      return false;
    }
    if(form.total2.value == "") {
      alert("Error: Total cannot be blank!");
      form.total2.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.total2.value)) {
      alert("Error: Total just filled with number!");
      form.total2.focus();
      return false;
    }
  } else if (form.ttlrekening.value == 3) {
    if(form.client.value == "") {
      alert("Error: Client cannot be blank!");
      form.client.focus();
      return false;
    }
    if(form.handphone.value == "") {
      alert("Error: Handphone cannot be blank!");
      form.handphone.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.handphone.value)) {
      alert("Error: Handphone just filled with number!");
      form.handphone.focus();
      return false;
    }
    if(form.tanggal.value == "") {
      alert("Error: Date cannot be blank!");
      form.tanggal.focus();
      return false;
    }
    if(form.time.value == "") {
      alert("Error: Time cannot be blank!");
      form.time.focus();
      return false;
    }
    if(form.trans.value == "") {
      alert("Error: Transaction cannot be blank!");
      form.trans.focus();
      return false;
    }
    if(form.rekening.value == "") {
      alert("Error: Rekening cannot be blank!");
      form.rekening.focus();
      return false;
    }
	if (form.rekening.value == 40100 || form.rekening.value == 40200 || form.rekening.value == 40300) {
		if(form.ticket.value == "") {
		  alert("Error: Ticket cannot be blank!");
		  form.ticket.focus();
		  return false;
		}
		if(form.profit.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit.focus();
		  return false;
		}
	}
	if (form.rekening.value == 40101 || form.rekening.value == 40201 || form.rekening.value == 40301) {
		if(form.tour.value == "") {
		  alert("Error: Tour cannot be blank!");
		  form.tour.focus();
		  return false;
		}
		if(form.profit2.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit2.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit2.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit2.focus();
		  return false;
		}
	}
    if(form.rekening2.value == "") {
      alert("Error: Rekening cannot be blank!");
      form.rekening2.focus();
      return false;
    }
	if (form.rekening2.value == 40100 || form.rekening2.value == 40200 || form.rekening2.value == 40300) {
		if(form.ticket2.value == "") {
		  alert("Error: Ticket cannot be blank!");
		  form.ticket2.focus();
		  return false;
		}
		if(form.profit3.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit3.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit3.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit3.focus();
		  return false;
		}
	}
	if (form.rekening2.value == 40101 || form.rekening2.value == 40201 || form.rekening2.value == 40301) {
		if(form.tour2.value == "") {
		  alert("Error: Tour cannot be blank!");
		  form.tour2.focus();
		  return false;
		}
		if(form.profit4.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit4.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit4.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit4.focus();
		  return false;
		}
	}
    if(form.rekening3.value == "") {
      alert("Error: Rekening cannot be blank!");
      form.rekening3.focus();
      return false;
    }
	if (form.rekening3.value == 40100 || form.rekening3.value == 40200 || form.rekening3.value == 40300) {
		if(form.ticket3.value == "") {
		  alert("Error: Ticket cannot be blank!");
		  form.ticket3.focus();
		  return false;
		}
		if(form.profit5.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit5.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit5.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit5.focus();
		  return false;
		}
	}
	if (form.rekening3.value == 40101 || form.rekening3.value == 40201 || form.rekening3.value == 40301) {
		if(form.tour3.value == "") {
		  alert("Error: Tour cannot be blank!");
		  form.tour3.focus();
		  return false;
		}
		if(form.profit6.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit6.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit6.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit6.focus();
		  return false;
		}
	}
    if(form.total.value == "") {
      alert("Error: Total cannot be blank!");
      form.total.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.total.value)) {
      alert("Error: Total just filled with number!");
      form.total.focus();
      return false;
    }
    if(form.total2.value == "") {
      alert("Error: Total cannot be blank!");
      form.total2.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.total2.value)) {
      alert("Error: Total just filled with number!");
      form.total2.focus();
      return false;
    }
    if(form.total3.value == "") {
      alert("Error: Total cannot be blank!");
      form.total3.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.total3.value)) {
      alert("Error: Total just filled with number!");
      form.total3.focus();
      return false;
    }
  } else {
    if(form.client.value == "") {
      alert("Error: Client cannot be blank!");
      form.client.focus();
      return false;
    }
    if(form.handphone.value == "") {
      alert("Error: Handphone cannot be blank!");
      form.handphone.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.handphone.value)) {
      alert("Error: Handphone just filled with number!");
      form.handphone.focus();
      return false;
    }
    if(form.tanggal.value == "") {
      alert("Error: Date cannot be blank!");
      form.tanggal.focus();
      return false;
    }
    if(form.time.value == "") {
      alert("Error: Time cannot be blank!");
      form.time.focus();
      return false;
    }
    if(form.trans.value == "") {
      alert("Error: Transaction cannot be blank!");
      form.trans.focus();
      return false;
    }
    if(form.rekening.value == "") {
      alert("Error: Rekening cannot be blank!");
      form.rekening.focus();
      return false;
    }
	if (form.rekening.value == 40100 || form.rekening.value == 40200 || form.rekening.value == 40300) {
		if(form.ticket.value == "") {
		  alert("Error: Ticket cannot be blank!");
		  form.ticket.focus();
		  return false;
		}
		if(form.profit.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit.focus();
		  return false;
		}
	}
	if (form.rekening.value == 40101 || form.rekening.value == 40201 || form.rekening.value == 40301) {
		if(form.tour.value == "") {
		  alert("Error: Tour cannot be blank!");
		  form.tour.focus();
		  return false;
		}
		if(form.profit2.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit2.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit2.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit2.focus();
		  return false;
		}
	}
    if(form.rekening2.value == "") {
      alert("Error: Rekening cannot be blank!");
      form.rekening2.focus();
      return false;
    }
	if (form.rekening2.value == 40100 || form.rekening2.value == 40200 || form.rekening2.value == 40300) {
		if(form.ticket2.value == "") {
		  alert("Error: Ticket cannot be blank!");
		  form.ticket2.focus();
		  return false;
		}
		if(form.profit3.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit3.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit3.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit3.focus();
		  return false;
		}
	}
	if (form.rekening2.value == 40101 || form.rekening2.value == 40201 || form.rekening2.value == 40301) {
		if(form.tour2.value == "") {
		  alert("Error: Tour cannot be blank!");
		  form.tour2.focus();
		  return false;
		}
		if(form.profit4.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit4.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit4.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit4.focus();
		  return false;
		}
	}
    if(form.rekening3.value == "") {
      alert("Error: Rekening cannot be blank!");
      form.rekening3.focus();
      return false;
    }
	if (form.rekening3.value == 40100 || form.rekening3.value == 40200 || form.rekening3.value == 40300) {
		if(form.ticket3.value == "") {
		  alert("Error: Ticket cannot be blank!");
		  form.ticket3.focus();
		  return false;
		}
		if(form.profit5.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit5.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit5.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit5.focus();
		  return false;
		}
	}
	if (form.rekening3.value == 40101 || form.rekening3.value == 40201 || form.rekening3.value == 40301) {
		if(form.tour3.value == "") {
		  alert("Error: Tour cannot be blank!");
		  form.tour3.focus();
		  return false;
		}
		if(form.profit6.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit6.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit6.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit6.focus();
		  return false;
		}
	}
    if(form.rekening4.value == "") {
      alert("Error: Rekening cannot be blank!");
      form.rekening4.focus();
      return false;
    }
	if (form.rekening4.value == 40100 || form.rekening4.value == 40200 || form.rekening4.value == 40300) {
		if(form.ticket4.value == "") {
		  alert("Error: Ticket cannot be blank!");
		  form.ticket4.focus();
		  return false;
		}
		if(form.profit7.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit7.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit7.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit7.focus();
		  return false;
		}
	}
	if (form.rekening4.value == 40101 || form.rekening4.value == 40201 || form.rekening4.value == 40301) {
		if(form.tour4.value == "") {
		  alert("Error: Tour cannot be blank!");
		  form.tour4.focus();
		  return false;
		}
		if(form.profit8.value == "") {
		  alert("Error: Profit cannot be blank!");
		  form.profit8.focus();
		  return false;
		}
		re = /^[0-9]+$/;
		if(!re.test(form.profit8.value)) {
		  alert("Error: Profit just filled with number!");
		  form.profit8.focus();
		  return false;
		}
	}
    if(form.total.value == "") {
      alert("Error: Total cannot be blank!");
      form.total.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.total.value)) {
      alert("Error: Total just filled with number!");
      form.total.focus();
      return false;
    }
    if(form.total2.value == "") {
      alert("Error: Total cannot be blank!");
      form.total2.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.total2.value)) {
      alert("Error: Total just filled with number!");
      form.total2.focus();
      return false;
    }
    if(form.total3.value == "") {
      alert("Error: Total cannot be blank!");
      form.total3.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.total3.value)) {
      alert("Error: Total just filled with number!");
      form.total3.focus();
      return false;
    }
    if(form.total4.value == "") {
      alert("Error: Total cannot be blank!");
      form.total4.focus();
      return false;
    }
    re = /^[0-9]+$/;
    if(!re.test(form.total4.value)) {
      alert("Error: Total just filled with number!");
      form.total4.focus();
      return false;
    }
  }
    document.getElementById('submit').submit();
  }