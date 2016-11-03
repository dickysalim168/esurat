<html>
<head>
<script>
function gogo()
{

//parent.something
//parent.reload();
//Window.parent.reload();
    if (window.opener && !window.opener.closed) {
    window.opener.location.reload();
    }
this.close();

    

}
       </script>
</head>
<body onload='gogo()'>
</body>
</html>