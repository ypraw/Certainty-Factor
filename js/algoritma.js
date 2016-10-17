$(document).ready(function(){
$("#submit").click(function(){
	var delusi = $("#delusi").val();
	var halusinasi = $("#halus").val();
  var to = $("#to").val();
  var gp = $("#gp").val();

	if( delusi != 99 && halusinasi !=99 && to!=99 && gp!=99){
		return true;
	}
	else{
		alert("Tolong diisi...!!!!!!");
    delusi.trigger('reset');
    halusinasi.trigger('reset');
    to.trigger('reset');
    gp.trigger('reset');
		return false;
	}
});
});
