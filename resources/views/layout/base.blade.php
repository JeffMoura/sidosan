<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../icone.png">
  <link rel="icon" type="image/png" href="../icone.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>SIDOSAN</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!-- CSS  -->
  <link href="../css/bootstrap.min.css" rel="stylesheet" />
  <link href="../datatables/dataTables.bootstrap4.css" rel="stylesheet"/>

  @stack('css')

</head>
<body>

    @yield('conteudo')

    <footer>
        <div style="align-text:center">
            Copyright® 2019. Todos os Direitos reservados. Seja um Doador!
        </div>
    </footer>

      <!--   arquivos js   -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/plugins/bootstrap-notify.js"></script>
    <script src="../datatables/jquery.dataTables.min.js"></script>
    <script src="../datatables/dataTables.bootstrap4.min"></script>

      <!-- script datatable-->
  <script>
        $(function () {
            setTimeout(function () {
                $('#alerta').fadeOut('slow')
            }, 2000)

            setTimeout(function(){
                if($('.has-error').children('.form-control').val() == '')
                    $('.has-error').addClass('has-error')
                else
                    $('.has-error').removeClass('has-error')
            }, 100)

            $('.has-error').on('keyup', function(){
                if($(this).children('.form-control').val() == '')
                    $(this).addClass('has-error')
                else
                    $(this).removeClass('has-error')
            })
             $('#tabela').DataTable({
                "columnDefs": [
                    {"orderable": true}
                ],
                "order": [[0, 'DESC']],
                "language": {
                    "zeroRecords": "Nenhuma informação encontrada",
                    "infoEmpty": "Mostrando 0 resultados encontrados",
                    "infoFiltered":   "(filtro aplicado nas _MAX_ entradas)",
                    "info":  "Mostrando _START_ a _END_ do total de _TOTAL_ encontradas",
                    "search": "Pesquisa:",
                    "lengthMenu":     "Mostrar _MENU_ resultados",
                    "paginate": {
                        "first":      "First",
                        "last":       "Last",
                        "next":       "Próximo",
                        "previous":   "Anterior"
                    },
                }
            });


        })
    </script>
</body>

</html>

