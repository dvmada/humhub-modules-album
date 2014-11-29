<?php
/* @var $this ImageController */
/* @var $model AlbumImage */
/* @var $album Album */
//$this->breadcrumbs=array(
//	'Album Images'=>array('index'),
//	$model->name=>array('view','id'=>$model->id),
//	'Update',
//);
//
$this->menu = [
    [
      'label' => 'Album Details',
      'url' => ['/album/details','id'=>$album->id]
    ],
    [
      'label' => 'Add Image',
      'url' => ['/album/image/create','id'=>$album->id]
    ],
    [
      'label' => 'Update Image',
      'url' => '#',
      'active' => true
    ],
    [
      'label' => 'View Album',
      'url' => ['/album/view','id'=>$album->id]
    ],
    [
      'label' => 'List Album',
      'url' => ['/album'],
    ],
    [
      'label' => 'Create Album',
      'url' => ['/album/create']
    ],
    [
      'label' => 'Manage Albums',
      'url' => ['/album/admin'],
    ],
];
?>

<h1>Update AlbumImage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>