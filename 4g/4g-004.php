<body>
<script>
function display_time(obj) {
  var txt = document.createTextNode("時刻は" + obj.time + "です。");
  var p = document.getElementById("time");
  p.appendChild(txt);
}
</script>
<p id="time"></p>
<script src="http://4g-003.php?callback=display_time"></script>
<body>
