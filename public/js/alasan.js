var d = new Date();
    var time = d.getHours();

    if (time < 7)
      {
      document.write("<b>Siipp!! Kamu Datang Lebih Awal</b>");
      }
    if (time == 7)
      {
      document.write("<b>Ayoo Cepetan!! Nanti Kamu Terlambat</b>");
      }
    if (time > 7)
      {
      document.write("<b>Maaf Kamu Hari Ini Terlambat</b>");
      }
