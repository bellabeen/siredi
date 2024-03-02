var ajaxcek=buatajax();
function buatajax(){
  if (window.XMLHttpRequest){
    return new XMLHttpRequest();
  }
  if (window.ActiveXObject){
    return new ActiveXObject("Microsoft.XMLHTTP");
  }
  return null;
}
function ajaxKTP(id){
  var url="Cek_NoKTP.php?No_KTP="+id+"&sid="+Math.random();
  ajaxcek.onreadystatechange=stateChanged;
  ajaxcek.open("GET",url,true);
  ajaxcek.send(null);
}