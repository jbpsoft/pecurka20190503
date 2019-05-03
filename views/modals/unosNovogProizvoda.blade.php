
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">{{ AdminOptions::lang(103, Session::get('jezik.AdminOptions::server()')) }}</h4>
    </div>
    <form action='{{ AdminOptions::base_url() }}admin-new-product' name="UnosNovogProizvoda" method="post">
      <div class="modal-body">
        <div class="form-group row">
          <label class="col-sm-4 control-label">{{ AdminOptions::lang(104, Session::get('jezik.AdminOptions::server()')) }}</label>
          <div class="col-sm-8">
            <input type="text" class="form-control input-sm invoice-amt" name="naziv_proizvoda">
          </div>        
        </div>
        <div class="form-group row">
          <label class="col-sm-4 control-label" for="sel10">{{ AdminOptions::lang(98, Session::get('jezik.AdminOptions::server()')) }}</label>
          <select class="form-group row" id="sel10" name="grupa_proizvoda" autocomplete="off">
            @foreach(DB::table('grupa_proizvoda')->get() as $product)
              <option value="{{ $product->grupa_id }}" >{{ $product->naziv_grupe }}</option>
            @endforeach
          </select>
        </div> 
        <div class="form-group row">
          <label class="col-sm-4 control-label">{{ AdminOptions::lang(105, Session::get('jezik.AdminOptions::server()')) }}</label>
          <div class="col-sm-8">
            <input type="text" class="form-control input-sm cheque-amt" name="cena_proizvoda" autocomplete="off">
          </div>
        </div> 
      </div> 
      <div class="modal-footer">
        <button type="submit" class="btn btn-info waves-effect waves-light">{{ AdminOptions::lang(47, Session::get('jezik.AdminOptions::server()')) }}</button>
        <button type="button" class="btn btn-primary waves-effect waves-light" data-dismiss="modal">{{ AdminOptions::lang(24, Session::get('jezik.AdminOptions::server()')) }}</button>
      </div>
    </form>
  </div>
</div>
