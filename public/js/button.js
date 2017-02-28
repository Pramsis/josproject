var d = new Date();
    var time = d.getHours();

    if (time < 7)
      {
      }
      document.getElementById('my_id').value='Pas Waktu' ;
    if (time == 7)
      {
      document.getElementById('my_id').value='Terlambat' ;
      }
    if (time > 7)
      {
      document.getElementById('my_id').value='Terlambat' ;
      }
