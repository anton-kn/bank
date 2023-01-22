<?php

use models\Deposit;
use models\Kredit;
?>

<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Тип продукта</h1>
                <p>
                    <?php if (Deposit::getTypeProduct()['kredit'] == $this->typeProduct) { ?>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
                        <div class="mb-3">
                            <input  name="action" value="kredit" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <input  name="person" value="<?= $this->typePerson ?>" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <input  name="type" value="<?= $this->typeProduct ?>" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Дата открытия</label>
                            <input name="date_start" type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Дата закрытия</label>
                            <input name="date_end" type="text" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">Срок (в месяцах)</label>
                            <input name="duration" type="text" class="form-control" id="formGroupExampleInput3">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">График платежей аннуитетный</label>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">Процентная ставка: <?= Kredit::getRate()?> %</label>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput5" class="form-label">Сумма</label>
                            <input name="sum" type="text" class="form-control" id="formGroupExampleInput5">
                        </div>
                        <input name="submit" class="btn btn-primary" type="submit" value="Далее">
                    </form>
                <?php } ?>
                <?php if (Deposit::getTypeProduct()['deposit'] == $this->typeProduct) { ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="get">
                        <div class="mb-3">
                            <input  name="action" value="deposit" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <input  name="person" value="<?= $this->typePerson ?>" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <input  name="type" value="<?= $this->typeProduct ?>" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Дата открытия</label>
                            <input name="date_start" type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Дата закрытия</label>
                            <input name="date_end" type="text" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">Срок (в месяцах)</label>
                            <input name="duration" type="text" class="form-control" id="formGroupExampleInput3">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">Процентная ставка <?= Deposit::getRate() ?> %</label>
                        </div>
                        <div class="form-check">
                            <input name="period_kapit" value="<?php echo Deposit::getTypeСapitalization()['endTime'] ?>" class="form-check-input" type="radio" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                В конце срока
                            </label>
                        </div>
                        <div class="form-check">
                            <input name="period_kapit" value="<?php echo Deposit::getTypeСapitalization()['monthly'] ?>" class="form-check-input" type="radio" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                Ежемесячно
                            </label>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput5" class="form-label">Сумма</label>
                            <input name="sum" type="text" class="form-control" id="formGroupExampleInput5">
                        </div>
                        <input name="submit" class="btn btn-primary" type="submit" value="Далее">
                    </form>
                <?php } ?>
                </p>
            </div>
        </div>
    </section>
</main>