var newsletter_modal = document.getElementById('newsletter_modal');
var span = document.getElementsByClassName("close")[0];
var temp_button = document.getElementById("temp_button");

span.onclick = function() {
    newsletter_modal.style.display = "none";
}

window.onclick= function(event){
  if(event.target==newsletter_modal){
    newsletter_modal.style.display = "none";
  }
}

temp_button.onclick= function(){
  newsletter_modal.style.display = "block";
}
