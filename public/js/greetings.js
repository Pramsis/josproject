var d = new Date();
    var time = d.getHours();

    if (time < 12)
      {
      document.write("<b>Selamat Pagi!</b>");
      }
    if (time == 12)
      {
      document.write("<b>Selamat Siang!</b>");
      }
    if (time > 12)
      {
      document.write("<b>Selamat Siang!</b>");
      }
