<!DOCTYPE html>
<html>
  <head>
    <?php include "connect.php";?>
        <script>
            function ajaxing(){
              xhr=new XMLHttpRequest();
              xhr.onreadystatechange=function(){
                if(xhr.readyState==4){
                  obxml=xhr.responseXML;
                  document.getElementById("divi").innerHTML=obxml.getElementsByTagName("cap").item(0).firstChild.nodeValue;
                }
              }
              xhr.open("get","contenu.xml",true);
              xhr.send(null);
            }
        </script>
  </head>
  <body>
    <input type="button" value="Executer AJAX" onClick="ajaxing()">
    <div id="divi"></div>
  </body>
</html>
