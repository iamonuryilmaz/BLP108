<!DOCTYPE html>
<html>
<style>
.red{
	color: red;
}
.green{
	color: green;
}
</style>
<body>

<span class="<?php $not = 60; echo $not < 50 ? 'red':'green';?>">
<?php echo $not < 50 ? 'KALDI':'<b>GEÇTİ</b>'; ?>
</span>


</body>
</html>
