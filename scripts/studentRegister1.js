function getSelectedValues() {
     var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
     let values = [];

     checkboxes.forEach(function (checkbox) {
          values.push(parseInt(checkbox.value));
     });

     let sum = 0;

     for (let i = 0; i < values.length; i++) {
          sum = sum + values[i];
          if (sum > 600) {
			//   sum = sum + values[i]+50;
               document.getElementById('accommodate').style.display = 'block';
          } else {
			  sum = sum + values[i];
               document.getElementById('accommodate').style.display = 'none';
          }
     }

     var s = sum;
     document.getElementById('t6').setAttribute('value', s);



}