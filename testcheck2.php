<script>

function count() {
var item1price = 150;
var item2price = 150;
var item3price = 150;
var item4price = 150;

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
   
var c=witem1;var c1=witem2;var c2=witem3;var c3=witem4;
 // document.calc.pay.value = witem1 + witem2 + witem3 + witem4;
 document.getElementById('pay').innerHTML = witem1 + witem2 + witem3 + witem4;
 document.getElementById('pay1').value = c;
 document.getElementById('pay2').value = c1;
 document.getElementById('pay3').value = c2;
 document.getElementById('pay4').value = c3;
 //document.getElementById('pay5').innerHTML = witem5;
 }






</script>
<form name="calc" method="POST">

<br />
<table class="gqra">

  <tr>
   <td class="row2" ><span> Item </span></th>
   <td class="row2" ><span> Select </span></th>
  </tr>


  <tr>
   <td class="row"><span> Item 1 </span></td>
   <td class="row"><input type="checkbox" name="item1" onClick="count()"></td>
  </tr>

  <tr>
   <td class="row"><span> Item 2 </span></td>
   <td class="row"><input type="checkbox" name="item2" onClick="count()"></td>
  </tr>

  <tr>
   <td class="row"><span> Item 3 </span></td>
   <td class="row"><input type="checkbox" name="item3" onClick="count()"></td>
  </tr>

  <tr>
   <td class="row"><span> Item 4 </span></td>
   <td class="row"><input type="checkbox" name="item4" onClick="count()"></td>
  </tr>

  <tr>
  	<td class="row">&nbsp;</td>
    <td class="row">
       <input type="button" onClick="count()" value="Calculate" >*
       <input type="reset" value="Reset" >
    </td>
  </tr>

  <tr>
   <td class="row">  Total price, $: &nbsp; <span id="pay"></span> <br /> </td>
   <td class="row">  Total price, $: &nbsp; <span id="pay1"></span> <br /> </td>
   <td class="row">  Total price, $: &nbsp; <span id="pay2"></span> <br /> </td>
   <td class="row">  Total price, $: &nbsp; <span id="pay3"></span> <br /> </td>
   <td class="row">  Total price, $: &nbsp; <span id="pay4"></span> <br /> </td>

<!--  <td class="row">  Total price 2, $: &nbsp; <span id="pay"></span> <br /> </td>
 <td class="row">  Total price 3, $: &nbsp; <span id="pay"></span> <br /> </td> -->
   <td class="row">&nbsp;  </td>
  </tr>
<form> 
<input type="text" name="a" id="pay1">
<input type="text" name="a" id="pay2">
<input type="text" name="a" id="pay3">
<input type="text" name="a" id="pay4">
</form>

</table>

</form>