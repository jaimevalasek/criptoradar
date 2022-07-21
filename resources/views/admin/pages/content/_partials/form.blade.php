@include('admin.includes.alerts')

@csrf

<div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
    <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Formulário de Cadastro</h3>

    <!-- STATUS -->
    <div class="form-group g-mb-30">
        <label class="g-mb-10" for="inputGroup-1_1">Status</label>

        <div class="g-pos-rel">
            <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
               <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
            </span>

            <!-- Toggles Views -->
            <label class="form-check-inline u-check g-mr-20 mx-0 mb-0">
                <input type="hidden" id="content-status" name="status" value="{{ $content->status }}">
                <input id="cb-status" class="g-hidden-xs-up g-pos-abs g-top-0 g-right-0" name="cb-status" @if($content->status == 1) checked="checked" @endif value="" type="checkbox">
                <div class="u-check-icon-radio-v7">
                    <i class="fa" data-check-icon="&#xf00c" data-uncheck-icon="&#xf00d"></i>
                </div>
            </label>
            <!-- End Toggles Views -->

        </div>
    </div>

    <!-- TITULO -->
    <div class="form-group g-mb-30">
        <label class="g-mb-10" for="inputGroup-1_1">Titulo</label>

        <div class="g-pos-rel">
            <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
               <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
            </span>
            <a href="#">{{ $content->title }}</a>
        </div>
    </div>

    <!-- DESCRICAO -->
    <div class="form-group g-mb-30">
        <label class="g-mb-10" for="inputGroup-1_4">Descrição</label>

        {{ $content->description ?? old('description') }}
    </div>


</div>

<div class="media">
    <div class="media-body align-self-center text-right">
        <a href="{{ url()->previous() }}" class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10">Voltar</a>
        <button class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10" type="submit">Enviar</button>
    </div>
</div>

<script>

</script>
