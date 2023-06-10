<div class="modal fade bd-example-modal-lg createModalTipe" data-backdrop="static" data-keyboard="false"
    style="z-index: 1041" tabindex="-1" id="createModalTipe" role="dialog">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" onclick=""><span>&times;</span></button>
            </div>
            <div class="row">
                <div class="col">
                    <div class="modal-body create-modal">
                        <div class="alert alert-danger print-error-msg" role="alert" style="display: none">
                            <ul></ul>
                        </div>
                        <form id="form-tipe" method="post" action="javascript:void(0)">
                            @csrf
                            @method('POST')
                            <input type="hidden" id="id_tipe" name="id_tipe">
                            <div class="form-group">
                                <label>Kategori Barang</label>
                                <input type="text" name="tipe" id="tipe_create" class="form-control" placeholder="Kategori">
                            </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" data-toggle="tooltip"  data-placement="top" title="Add Item" class="btn btn-info" id="addRow"> Add Item</button> --}}
                        <button type="button" class="btn btn-secondary "
                            data-dismiss="modal">Tutup</button>
                        <button type="button" class="btn btn-info saveTipe"><i class="ti-check"></i>
                            Simpan</button>

                        {{-- @php $counter @endphp --}}
                        {{-- <input type="hidden" id="jml_row" name="jml_row" value=""> --}}
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
