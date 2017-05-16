<%@ Page Language="C#" %>
<!DOCTYPE html>
<html>
<body>
<div class="container-fluid">
    <h3 style="padding: 5px; font-weight: bold; color: #800000; background-color: #f0ad4e;">Sri Rama Navmi</h3>
    <div class="panel">
        <div class="panel-body">
            <script language="JavaScript">
                var photo;
                for (i=1;i<=721;i++) {
                    photo="photos/2017/SriRamaNavmi/SriRamaNavmi_"+i+".JPG";
                    document.write("<img src=" + photo + " width=100% style='padding: 5px;'>");
                }
            </script>
        </div>
    </div>
</div>
</body>
</html>
