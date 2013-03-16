jQuery(document).ready(function() {

	$("#sendme").click(function() {
		if (form.nome.value == "") {
		      alert ("Favor preencher o campo nome !");
		      form.nome.focus();
		      return false;
		    } 
		    
		    if (form.email.value == "") { 
		      alert ("Favor preencher o campo e-mail !");
		      form.email.focus();
		      return false;
		    } 
		    
		    if (form.telefone.value == "") {
		      alert ("Favor preencher o campo telefone !"); 
		      form.telefone.focus();
		      return false;
		    } 
		    
		    else {
		    	$("#form").submit();
		     }
  		
	});

	$("#clearall").click(function() {
		$("input").val("");
		$("textarea").val("");
  		
	});



}); 