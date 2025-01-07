function getSelectedValues() {
     var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
     let values = [];

     checkboxes.forEach(function (checkbox) {
          values.push(parseInt(checkbox.value));
     });

     let sum = 0;

     for (let i = 0; i < values.length; i++) {
          sum = sum + values[i];
          if (sum > 900) {
               document.getElementById('accommodate').style.display = 'block';
          } else {
               document.getElementById('accommodate').style.display = 'none';
          }
     }

     var s = sum;
     document.getElementById('t6').setAttribute('value', s);



}