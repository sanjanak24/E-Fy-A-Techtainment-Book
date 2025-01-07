<html>  
<body>  
  
<h2 style="color:green">Create a checkbox and get its value</h2>  
<h4> Select the programming language, you know </h4>  
<tr>  
<td> Java: <input type="checkbox" id="check1" class="pl" value="1"> </td>  
<td> PHP: <input type="checkbox" id="check2" class="pl" value="2"> </td>   
</tr> <tr>  
<td> Angular: <input type="checkbox" id="check3" class="pl" value="3"> </td>  
<td> CSS: <input type="checkbox" id="check4" class="pl" value="4"> </td>  
</tr> <tr>  
<td> Python: <input type="checkbox" id="check5" class="pl" value="5"> </td>  
<td> Android: <input type="checkbox" id="check6" class="pl" value="6"> </td>  
<button onclick="checkAll()">Check all</button> <br><br>  
<button onclick="check()">Submit</button> <br>  
<h4 style="color:green" id="total"></h4> 
<h4 style="color:green" id="check1"></h4> 
<h4 style="color:green" id="check2"></h4> 
<h4 style="color:green" id="check3"></h4> 
<h4 style="color:green" id="check4"></h4>
<h4 style="color:green" id="check5"></h4>     
  
<script>  
function check() {
  //var basic = 300;
  var add1 = 0,add2=0,add3=0,add4=0,add5=0;  
  if(document.getElementById("check1").checked) {
    add1 = 150;
  }
  if(document.getElementById("check2").checked) {
    add2 = 150;
  }
  if(document.getElementById("check3").checked) {
    add3 = 150;
  }
  if(document.getElementById("check4").checked) {
    add4 = 150;
  }
  if(document.getElementById("check5").checked) {
    add5 = 150;
  }
  
  var p = add1+add2+add3+add4+add5;
  var price = p;
  
  if (price==450) {
           		   document.getElementById('accommodate').style.display = 'block';
		  }


		  else {
               document.getElementById('accommodate').style.display = 'none';
          }
 
  document.getElementById('total').innerHTML = price;  
  document.getElementById('check1').innerHTML = add1;
  document.getElementById('check2').innerHTML = add2;
  document.getElementById('check3').innerHTML = add3;
  document.getElementById('check4').innerHTML = add4;
  document.getElementById('check5').innerHTML = add5;
 }

check();

function test() {
    var cboxes = document.getElementsByName('value[]');
    var len = cboxes.length;
    for (var i=0; i<len; i++) {
        alert(i + (cboxes[i].checked?' checked ':' unchecked ') + cboxes[i].value);
    }
}


function selectOnlyOne(current_clicked) {
    var cboxes = document.getElementsByName('value[]');
    var len = cboxes.length;
    for (var i=0; i<len; i++) {
        cboxes[i].checked = (cboxes[i] == current);
    }
}

function count() {
var item1price = 10;
var item2price = 50;
var item3price = 1100;
var item4price = 100;

 if (calc.item1.checked){
   var witem1 = document.calc.item1.value = item1price; }
   else {
   var witem1 = document.calc.item1.value = 0; }

 if (calc.item2.checked){
   var witem2 = document.calc.item2.value = item2price; }
   else {
   var witem2 = document.calc.item2.value = 0; }

 if (calc.item3.checked) {
   var witem3 = document.calc.item3.value = item3price; }
   else {
   var witem3 = document.calc.item3.value = 0; }

 if (calc.item4.checked) {
   var witem4 = document.calc.item4.value = item4price;}
   else {
   var witem4 = document.calc.item4.value = 0; }

 // document.calc.pay.value = witem1 + witem2 + witem3 + witem4;
 document.getElementById('pay').innerHTML = witem1 + witem2 + witem3 + witem4;
 }


</script>  
  
   <div class="yes-no">
                         <p>Accommodation:</p>
                         <p class="accommodate" id="accommodate"><input type="text" name="yes" value="yes"></p>

                    </div>
					
					
					
					
					
					
					
					
					
					
</body>  
</html>  