
<div id="ispisNarudzbine" class="modal fade right" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false" aria-labelledby="myModalLabel" aria-hidden="true">
<div class="modal-dialog modal-full-height modal-right" role="document" >
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">{{ AdminOptions::lang(123, Session::get('jezik.AdminOptions::server()')) }}</h4>
        </div> 
        <form action="/privremena-tabela2" method="post">  
            <div class="modal-body">
               <tr>
                    <td>
                        {{ $data1->naziv_proizvoda }}
                    </td>
                    <td>
                        {{ $data->kolicina }}
                    </td>
                    <td>
                        {{ $data->cena }}
                    </td>
                    <td>
                        {{ $data->zarRad }}
                    </td>
                </tr>         
            </div>  
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">{{ AdminOptions::lang(47, Session::get('jezik.AdminOptions::server()')) }}</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">{{ AdminOptions::lang(24, Session::get('jezik.AdminOptions::server()')) }}</button>
            </div> 
        </form> 
    </div>    
</div>
</div>
<script type="text/javascript">
    //$('#ispisNarudzbine').modal('show');
</script>