<form>
  <div class="form-row">
    <div class="col-3">
      <label for="honap">Válaszd ki a hónapot:</label>
    </div>
    <div class="col-3"> 
      <input type="month" class="form-control" id="honap" >
    </div>
    <div class="col-2">
      <div id="feltolt" class="btn btn-primary">Feltöltés</div>
    </div>
  </div>
</form>

<div class="table-responsive">
  <table class="table-sm table-striped" id="output"></table>
</div>
<script src="honap.js"></script>