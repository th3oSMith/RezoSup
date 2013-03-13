
function getListe(){

if ($("#username").val().length>-1){ //--- FIXME length>2
	url = "liste/"+$("#username").val()+"/"+$("#serveur").val()+"/"+$("#operateur")[0].checked;

	$.get(url,function(data){
			
			$("#listeDiv").html(data);		
			
			
		});
	}
}
