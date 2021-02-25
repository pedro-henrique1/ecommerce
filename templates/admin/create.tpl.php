<h1 class="h2 font-weight-light">Create</h1>
<hr>

<form enctype="multipart/form-data" class="needs-validation" method="POST" novalidate>
    <div class="form-row">
        <div class="col">
            <label for="name">Nome do produto</label>
            <input type="text" class="form-control" id="name" name="name"
                   placeholder="Nome do produto">
        </div>
        <div class="col">
            <label for="price">Preço do produto</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Preço do produto">
        </div>
    </div>
    <div class="form-group mt-3">
        <label for="description">Descrição</label>
        <textarea class="form-control" name="description" id="description" aria-describedby="helpTextArea"
                  rows="7"></textarea>
        <small id="helpTextArea" class="form-text text-muted">
            Este campo pode conter apenas <strong class="text-warning">500</strong> caracteres tente ser breve
        </small>
    </div>

    <div class="form-row">
        <div class="col">
            <label for="category_id">Categoria do produto</label>
            <input type="text" class="form-control" id="category_id" name="category_id"
                   placeholder="Categoria do produto">
        </div>
        <div class="col">
            <label for="voltagem">Voltagem do produto</label>
            <input type="text" class="form-control" id="voltagem" name="voltagem" placeholder="Voltagem do produto">
        </div>
        <div class="col">
            <label for="priceShare">Preço das parcelas do produto sem juros</label>
            <input type="text" class="form-control" id="priceShare" name="price_share"
                   placeholder="Preço das parcelas do produto sem juros">
        </div>
        <div class="col mt-1">
            <label for="image">Imagem do produto</label>
            <input type="file" class="form-control-file" name="image" id="image" placeholder="Imagem do produto"
                   aria-describedby="helpFile">
            <small class="form-text text-warning" id="helpFile">Formato de imagem permitida *png, *jpgeg, *jpg</small>
        </div>
    </div>
    <button type="submit" class="btn btn-outline-secondary mt-3  col-2">Criar</button>
</form>

<script>
    // $('.needs-validation').validate();
    $().ready(function ($) {
        $(".needs-validation").validate(
            {
                errorPlacement: function (error, element) {
                    element.parent("input").next("input").html(error);
                },
                success: function (label) {
                    label.removeClass("error").addClass("ok");
                },
                rules: {
                    name: {
                        required: true,
                        maxlength: 100
                    },
                    price: {
                        required: true,
                        number: true
                    },
                    description: {
                        required: true,
                        maxlength: 500
                    },
                    category_id: {
                        required: true,
                        number: true
                    },
                    voltagem: {
                        required: true,
                        number: true
                    },
                    price_share: {
                        required: true,
                        number: true
                    },
                    image: {
                        required: true,
                        accept: "image/jpg,image/jpeg,image/png"
                    }
                },
                messages: {
                    name: {
                        required: "Esse campo não pode ser vazio",
                        maxlength: "apenas 500 caracteres"
                    },
                    price: {
                        required: "Esse campo não pode ser vazio",
                        password: "digite devmedia"
                    },
                    description: {
                        required: "Esse campo não pode ser vazio",
                        equal: "digite Validado"
                    },
                    category_id: {
                        required: "Campo não pode ser vazio",
                        equal: "digite Validado"
                    },
                    voltagem: {
                        required: "Esse campo não pode ser vazio",
                        equal: "digite Validado"
                    },
                    price_share: {
                        required: "Esse campo não pode ser vazio",
                        equal: "digite Validado"
                    },
                    // image: {
                    //     required: "Isso não e uma imagem",
                    //     equal: "digite Validado"
                    // }
                },
                submitHandler: function (form) {
                    form.submit();
                },
            }
        )
    })
</script>