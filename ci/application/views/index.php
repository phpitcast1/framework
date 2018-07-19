<?= $data1 ?>

<hr />

<?php echo $data1; ?>

<hr />


<?php if ($data2['sex'] == '男') : ?>
公的
<?php else : ?>
母的
<?php endif; ?>

<hr />

<?php foreach($data3 as $temp) : ?>

	<?= $temp['name']; ?>

<?php endforeach; ?>