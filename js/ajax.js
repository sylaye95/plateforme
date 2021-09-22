//de preferance j' utilise jquery
$(document).ready(function(){
	//on declare la funtion schowtable
	schowtable();
});
//on cree la function
function schowtable(str){
	//recvoir en paramtetre une chaine  str;
	//ajax on utilise ici get
	$.get("listesclient.php?idlist ="+str,function(rep){
		//affiche l'lelement p
		$('#liste').html(rep);

	});

}