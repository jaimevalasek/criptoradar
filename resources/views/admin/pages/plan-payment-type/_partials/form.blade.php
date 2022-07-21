@include('admin.includes.alerts')

@csrf

<div class="g-brd-around g-brd-gray-light-v7 g-rounded-4 g-pa-15 g-pa-20--md g-mb-30">
    <h3 class="d-flex align-self-center text-uppercase g-font-size-12 g-font-size-default--md g-color-black g-mb-20">Formulário de Cadastro</h3>

    <!-- NOME -->
    <div class="form-group g-mb-30">
        <label class="g-mb-10" for="inputGroup-1_1">Nome</label>

        <div class="g-pos-rel">
              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
              </span>
            <input name="name" value="{{ $planPaymentType->name ?? old('name') }}" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Nome do tipo do pagamento">
        </div>
    </div>

    <!-- CODIGO -->
    <div class="form-group g-mb-30">
        <label class="g-mb-10" for="inputGroup-1_2">Código</label>

        <div class="g-pos-rel">
              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
              </span>
            <input name="code" value="{{ $planPaymentType->code ?? old('code') }}" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Código do pagamento">
        </div>
    </div>

    <!-- MEMO -->
    <div class="form-group g-mb-30">
        <label class="g-mb-10" for="inputGroup-1_3">Memo</label>

        <div class="g-pos-rel">
              <span class="g-pos-abs g-top-0 g-right-0 d-block g-width-40 h-100 opacity-0 g-opacity-1--success">
                <i class="hs-admin-check g-absolute-centered g-font-size-default g-color-secondary"></i>
              </span>
            <input name="memo" value="{{ $planPaymentType->memo ?? old('memo') }}" class="form-control form-control-md g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-4 g-px-14 g-py-10" type="text" placeholder="Memo do pagamento">
            <small class="form-text text-muted g-font-size-default g-mt-10">
                <strong>Note:</strong> Este campo é opicional, porque, alguns pagamentos, principalmente em cripto precisam deste campo adicional, por exemplo o pagamento em Ripple (XRP).
            </small>
        </div>
    </div>

    <!-- DESCRICAO -->
    <div class="form-group g-mb-30">
        <label class="g-mb-10" for="inputGroup-1_4">Descrição</label>

        <textarea id="inputGroup-1_4" name="description" class="form-control form-control-md g-resize-none g-brd-gray-light-v7 g-brd-gray-light-v3--focus g-rounded-20" rows="3" placeholder="Descrição do tipo de pagamento">{{ $planPaymentType->description ?? old('description') }}</textarea>
    </div>


</div>

<div class="media">
    <div class="media-body align-self-center text-right">
        <a href="{{ url()->previous() }}" class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10">Voltar</a>
        <button class="btn btn-xl u-btn-secondary g-width-160--md g-font-size-default g-ml-10" type="submit">Enviar</button>
    </div>
</div>
