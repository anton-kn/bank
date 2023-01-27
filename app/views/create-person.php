<?php

use models\User;
?>

<main>
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Персональные данные</h1>
                <p>
                    <?php if (User::getTypePerson()['private'] == $this->typePerson) { ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <input  name="action" value="create-person" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <input  name="type" value="<?= $this->typePerson ?>" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <input  name="product_id" value="<?= $this->productId ?>" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Фамилия</label>
                            <input name="surname" type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Имя</label>
                            <input name="firstname" type="text" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">Отчество</label>
                            <input name="patronymic" type="text" class="form-control" id="formGroupExampleInput3">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">Дата рождения</label>
                            <input name="birth_date" type="text" class="form-control" id="formGroupExampleInput3">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">ИНН</label>
                            <input name="inn" type="text" class="form-control" id="formGroupExampleInput3">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput5" class="form-label">Паспортные данные</label>
                            <input name="series" type="text" class="form-control" placeholder="Серия">
                            <input name="number" type="text" class="form-control" placeholder="Номер">
                            <input name="is_date_passport" type="text" class="form-control" placeholder="Дата выдачи">
                        </div>
                        <input name="submit" class="btn btn-primary" type="submit" value="Сохранить">
                    </form>
                <?php } ?>
                <?php if (User::getTypePerson()['legal'] == $this->typePerson) { ?>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="mb-3">
                            <input  name="action" value="create-person" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <input  name="type" value="<?= $this->typePerson ?>" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <input  name="product_id" value="<?= $this->productId ?>" type="hidden" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Фамилия</label>
                            <input name="surname" type="text" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Имя</label>
                            <input name="firstname" type="text" class="form-control" id="formGroupExampleInput2">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">Отчество</label>
                            <input name="patronymic" type="text" class="form-control" id="formGroupExampleInput3">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">Наименование организации</label>
                            <input name="name_company" type="text" class="form-control" id="formGroupExampleInput3">
                        </div>
                        <label for="formGroupExampleInput5" class="form-label">Данные организации</label>
                        <input name="ogrn" type="text" class="form-control" placeholder="ОГРН">
                        <input name="inn" type="text" class="form-control" placeholder="ИНН">
                        <input name="kpp" type="text" class="form-control" placeholder="КПП">
                        <input name="submit" class="btn btn-primary" type="submit" value="Сохранить">
                    </form>
                <?php } ?>
                </p>
            </div>
        </div>
    </section>
</main>