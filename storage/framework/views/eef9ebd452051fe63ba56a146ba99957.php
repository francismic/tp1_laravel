
<?php $__env->startSection('title', 'Ajouter un étudiant'); ?>
<?php $__env->startSection('content'); ?>

<div class="container mt-4">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Ajouter un étudiant</h3>
                        <p>Remplir le formulaire.</p>
                        <form action="<?php echo e(route('etudiant.store')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                            <div class="col-md-12 mt-4">
                               <input class="form-control" type="text" name="nom" placeholder="Nom Complet" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <input class="form-control" type="text" name="adresse" placeholder="Adresse maison" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <input class="form-control" type="tel" name="phone" placeholder="Numéro de téléphone" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <input class="form-control" type="email" name="email" placeholder="Adresse courielle" required>
                            </div>

                            <div class="col-md-12 mt-4">
                                <input class="form-control" type="date" name="birthday" placeholder="Date de naissance" required>
                            </div>

                           <div class="col-md-12">
                                <select class="form-select mt-3" name="villeId" required>
                                      <option selected disabled value="">Ville</option>
                                      <?php $__currentLoopData = $villes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ville): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($ville->id); ?>"><?php echo e($ville->nom); ?></option>
                                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                               </select>
                           </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\e2195223\resources\views/etudiant/create.blade.php ENDPATH**/ ?>