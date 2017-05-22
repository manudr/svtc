<%@ Page Language="C#" %>
<div class="container-fluid">
    <h3 style="padding: 5px; font-weight: bold; color: #800000; background-color: #f0ad4e;">Shiva Rathri</h3>
    <div class="panel">
      <div class="panel-body" style="overflow-y: scroll; height: 800px;">
          <script language="JavaScript">
              var photo;
              for (i=1;i<=204;i++) {
                  photo="multimedia/photos/2017/ShivaRathri/ShivaRathri_"+i+".JPG";
                  document.write("<img src=" + photo + " width=100% style='padding: 5px;'>");
              }
          </script>
      </div>
    </div>
</div>