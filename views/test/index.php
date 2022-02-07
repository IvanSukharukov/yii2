<code><?= __FILE__ ?></code>
<?= $this->render('inc') ?>
<p><?= $name; ?></p>
<p><?= $age; ?></p>
<?= $this->render('/inc/test.html') ?>
<p><?= $this->context->myVar; ?></p>
<p><?= $this->params['t1']; ?></p>