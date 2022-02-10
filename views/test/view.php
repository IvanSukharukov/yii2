<?php /** @var TYPE_NAME $countries */ ?>

<div class="col-md-12">
    <h1>Работа с моделями</h1>
    <?php debug($countries) ?>
    <table class="table">
        <?php foreach ($countries as $country) { ?>
            <tr>
                <td><?= $country->code ?></td>
                <td><?= $country->name ?></td>
                <td><?= $country->population ?></td>
            </tr>
        <?php } ?>

    </table>
</div>