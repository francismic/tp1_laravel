
<?php $__env->startSection('title', 'Liste des étudiants'); ?>
<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center pt-2">
                <div class="display-5 mt-2">
                    Liste Des Étudiants
                </div>
            </div>
        </div>
        
        <table class="table table-striped table-dark mt-4">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Étudiant</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ville</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $etudiants; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $etudiant): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><?php echo e($etudiant->id); ?></th>
                    <td><a href="<?php echo e(route('etudiant.show', $etudiant->id)); ?>"><?php echo e($etudiant->nom); ?></a></td>
                    <td><?php echo e($etudiant->email); ?></td>
                    <td><?php echo e($etudiant->etudiantHasVille->nom); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <hr>
        <?php echo e($etudiants); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e2195223\resources\views/etudiant/index.blade.php ENDPATH**/ ?>