 <html>
 <head>
 <title> test </title>
 <script type="text/javascript" language=javascript> 
 function selectID(IDS) {
 var IDxx = document.getElementById(IDS); 
 IDxx.checked = true;
 }
 </script>
 </head>
 <body>
 <form name=xx> 
 <input type="radio" name="checkbox" ID="ID1"> 
 <a href="#" onClick="selectID('ID1'); return false;">Radio Button Description #1</a>
 <br> <input type="radio" name="checkbox" ID="ID2"> 
 <a href="#" onClick="selectID('ID2'); return false;">Radio Button Description #2</a>
 <br> <input type="radio" name="checkbox" ID="ID3"> 
 <a href="#" onClick="selectID('ID3'); return false;">Radio Button Description #3</a>
 <br> <input type="radio" name="checkbox" ID="ID4"> 
 <a href="#" onClick="selectID('ID4'); return false;">Radio Button Description #4</a>
 <br> 
 </form>
 
 </body>
 </html>