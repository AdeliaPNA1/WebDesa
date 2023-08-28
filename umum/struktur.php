<html>
    <head>
        <title>Halaman User</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <h1 class="text-center">
        Struktur Organisasi
      </h1>
      <div class="container">
        <div class="row">
          <ul id="tree-data" style="display:none">
            <li id="root">
              Direktorat Utama
              <ul>
                <li id="node1">
                  Direktorat Operasi
                </li>
                <li id="node2">
                 Direktorat Investasi
                </li>
                <li id="node3">
                 Direktorat Umum
                </li>
                <li id="node4">
                  Direktorat Keuangan
                </li>
                <li id="node5">
                  Direktorat Informasi
                </li>
              </ul>
            </li>
          </ul>
        <div id="tree-view"></div>  
        <script>
          $(document).ready(function () {
          $("#tree-data").jOrgChart({
            chartElement: $("#tree-view"), 
            nodeClicked: nodeClicked
          });
        // lighting a node in the selection
          function nodeClicked(node, type) {
            node = node || $(this);
            $('.jOrgChart .selected').removeClass('selected');
                node.addClass('selected');
            }
          });
        </script>       
        </div>
      </div>
      <br>
      <br>
      <br>
      <h1 class="text-center">
        Visi Misi
      </h1>
       </body>
</html>