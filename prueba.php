<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Abrir Popup Con Checkbok Javascript</title>
<script type = "text/javascript">
var count = 0;
function nuevapagina(page) {
if (count == 0) {  //en linea
count ++;
OpenWin = this.open(page,"CtrlWindow","top=80,left=100,screenX=100,screenY=80,width=550,height=460,toolbar=no,menubar=no,location=no, scrollbars=no,resizable=yes");
}

function closepop() {if (OpenWin != null) OpenWin.close() }
window.onunload = closepop;
}
</script>
</head>
<body>
<form action="#" method="post">
<input type = "checkbox" name = "check1" id = "check1" onclick = "nuevapagina('index.php')">
</form>
</body>
</html>