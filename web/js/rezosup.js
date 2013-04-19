
function getListe(){

if ($("#username").val().length>-1){ //--- FIXME length>2
	url = "liste/"+$("#username").val()+"/"+$("#serveur").val()+"/"+$("#operateur")[0].checked;

	$.get(url,function(data){
			
			$("#listeDiv").html(data);		
			
			
		});
	}
}


function changeAccess(id, level, element){
	
	url = "set/"+id+"/"+level;
	
	$.getJSON(url, function(data){
		
		switch(data['error']){
			case 0:
			break;
			
			case 1:
			alert("L'utilisateur n'existe pas");
			break;
			
			case 2:
			alert("L'utilisateur est un alias");
			break;
			
			case 3:
			alert("Accès refusé !");
			break;
		
		
		}	
	
	element.innerHTML=data["value"];
	
	});
	
}

function  delAdmin(id){
	
	if (confirm('Êtes vous sûr ?')){
	
	
		url="del/"+id;
		
		$.getJSON(url, function(data){
			
			switch(data['error']){
				case 0:
				break;
				
				case 1:
				alert("L'utilisateur n'existe pas");
				break;
				
				case 2:
				alert("L'utilisateur est un alias");
				break;
				
				case 3:
				alert("Accès refusé !");
				break;
			
			
			}	
		
		window.location.reload();
		
		});
	}
}

function getAdmin(id){
	
	$("#userId").val(id);
	
	$.getJSON('get/'+id, function(data){
		
		for (var field in data){
			
			$("#form_"+field).val(data[field]);
		}
		
		$("#form_password").val(-1);
		$("#form_password")[0].parentNode.style.display="none";
		$("#form_div").fadeIn(0);
		
		$('#addForm').fadeIn(0);
		$('#title')[0].innerHTML="Éditer un utilisateur";
		
		
		})
	
	
	
}


function  createAlias(id){
	
	var name = prompt("nom ?");
	
	if (name!="" && name){
	
		$.post("create/", { id : id, name : name}, function(data){
			
			switch(data['error']){
				case 0:
				break;
				
				case 1:
				alert("L'utilisateur n'existe pas");
				break;
				
				case 3:
				alert("Accès refusé !");
				break;
			
			
			}	
		
		window.location.reload();
		
		});
	}
}

