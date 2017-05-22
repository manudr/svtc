<%@ Page Language="C#" %>
<div class="container-fluid">
    <h3 style="padding: 5px; font-weight: bold; color: #800000; background-color: #f0ad4e;">January Photos</h3>
    <div class="panel">
        <div class="panel-body" style="overflow-y: scroll; height: 800px;">
            <script language="JavaScript">
                var photo;
                for (i=1;i<=40;i++) {
                    photo="multimedia/photos/2017/Jan13th2017/January13th2017_"+i+".JPG";
                    document.write("<img src=" + photo + " width=100% style='padding: 5px;'>");
                }
            </script>
        </div>
    </div>
</div>