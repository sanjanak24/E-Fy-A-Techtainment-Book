function getSelectedValues() {
     var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
     let values = [];

     checkboxes.forEach(function (checkbox) {
          values.push(parseInt(checkbox.value));
     });

     let sum = 0;

     for (let i = 0; i < values.length; i++) {
          sum = sum + values[i];
		  
          if (sum > 300) {
           		   document.getElementById('accommodate').style.display = 'block';
          
		  }
		
           		  


		  else {
               document.getElementById('accommodate').style.display = 'none';
          }
     }

     var s = sum;
     document.getElementById('t6').setAttribute('value', s);



}






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