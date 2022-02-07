<code><?= __FILE__ ?></code>
<?= $this->render('inc') ?>
<p><?= $name; ?></p>
<p><?= $age; ?></p>
<?= $this->render('/inc/test.html') ?>
<p><?= $this->context->myVar; ?></p>
<p><?= $this->params['t1']; ?></p>

<?php $this->params['t2'] = 't2 params' ?>
<?php debug($this->params) ?>
<p><?= $this->params['t2']; ?></p>

<?php $this->beginBlock('block1'); ?>
...содержимое блока 1...
<?php $this->endBlock(); ?>