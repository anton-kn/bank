<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Тип продукта</h1>
                <p>
                    <a href="/bank/?action=product&type=1&person=<?= $this->typePerson ?>" class="btn btn-primary my-2">Кредит</a>
                    <a href="/bank/?action=product&type=2&person=<?= $this->typePerson ?>" class="btn btn-secondary my-2">Вклад</a>
                </p>
            </div>
        </div>
    </section>
</main>
