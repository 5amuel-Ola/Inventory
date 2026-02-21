function getRealTime() {
 // retrieve the DOM objects to place the content
 var domshirttypes = document.getElementById("shirttypecount");
 var domshirts = document.getElementById("shirtcount");
 var domlistpricetotal = document.getElementById("listpricetotal");
 var domwholesalepricetotal = document.getElementById("wholesalepricetotal");
 
 // send the GET request to realtime.php to retrieve the data using XMLHttpRequest
 var request = new XMLHttpRequest();
 request.open("GET", "realtime.php", true);
 request.onreadystatechange = function() {
     if (request.readyState == 4 && request.status == 200) {
         // parse the XML document to get each data element
         var xmldoc = request.responseXML;
         
         var xmlshirttypes = xmldoc.getElementsByTagName("shirttypes")[0];
         var shirttypes = xmlshirttypes.childNodes[0].nodeValue;
         
         var xmlshirts = xmldoc.getElementsByTagName("shirts")[0];
         var shirts = xmlshirts.childNodes[0].nodeValue;
         
         var xmllistpricetotal = xmldoc.getElementsByTagName("listpricetotal")[0];
         var listpricetotal = xmllistpricetotal.childNodes[0].nodeValue;
         
         var xmlwholesalepricetotal = xmldoc.getElementsByTagName("wholesalepricetotal")[0];
         var wholesalepricetotal = xmlwholesalepricetotal.childNodes[0].nodeValue;
         
         domshirttypes.innerHTML = shirttypes;
         domshirts.innerHTML = shirts;
         domlistpricetotal.innerHTML = "$" + parseFloat(listpricetotal).toFixed(2);
         domwholesalepricetotal.innerHTML = "$" + parseFloat(wholesalepricetotal).toFixed(2);
     }
 };
 request.send();
}