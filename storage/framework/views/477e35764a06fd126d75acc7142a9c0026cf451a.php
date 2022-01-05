<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <title>Edit</title>
</head>
<body>
    <div class='container p-4' style="margin-bottom: 100px;">
        <div class="row">
            <div class="d-flex flex-row justify-content-between bd-highlight col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Изменить сотрудника c id: <?php echo e($employee->id); ?></h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-warning" href="<?php echo e(route('employees.index')); ?>">Вернуться назад</a>
                </div>
            </div>
        </div>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('employees.update',$employee->id)); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="row">
                <div class="mb-3">
                        <strong>Имя:</strong>
                        <input type="text" name="name" value="<?php echo e($employee->name); ?>" class="form-control" >
                </div>
                <div class="mb-3">
                        <strong>Фамилия:</strong>
                        <input type="text" name="surname" value="<?php echo e($employee->surname); ?>" class="form-control" >
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Имя:</strong>
                        <input type="text" name="patronymic" value="<?php echo e($employee->patronymic); ?>" class="form-control" >
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Дата рождения:</strong>
                        <input type="date" name="bth" value="<?php echo e($employee->bth); ?>" class="form-control" >
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Фото:</strong>
                        <input type="text" id='photo' name="photo" value="<?php echo e($employee->photo); ?>"  class="form-control" disabled>
                        <input type="file" id='photo' name="photo"  class="form-control" >
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <strong>Должность:</strong>
                        <select id="position" name='type_position' class="form-select" aria-label="Default select example" required >
                            <option <?php if($employee->type_position == 'Бухгалтер') echo("selected"); ?>  value="1">Бухгалтер</option>
                            <option <?php if($employee->type_position == 'Администратор') echo("selected"); ?>  value="2">Администратор</option>
                            <option <?php if($employee->type_position == 'Менеджер') echo("selected"); ?>  value="3">Менеджер</option>
                        </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                </div>
            </div>
        </form>
    </div>

</body>
</html>

<?php /**PATH /home/std/orkis_web/resources/views/employees/edit.blade.php ENDPATH**/ ?>