if(typeof(EventSource) !== "undefined") {
    var source = new EventSource("eventsource/load.php");
    source.onmessage = function(event) {
        document.getElementById("sl-img").src = "img/"+event.data+".png";
    };
} else {
    document.getElementById("result").innerHTML = "Sorry, your browser does not support server-sent events...";
}

function loadDoc() {
	var url = "http://task-web-1-hw//eventsource/upload.php";
	var xhttp = new XMLHttpRequest();
  	xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
    	document.getElementById("items-block").innerHTML+= xhttp.responseText;
    }
}
  xhttp.open("GET", url, true);
  xhttp.send();
}