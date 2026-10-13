 <?php $__env->startSection('contenu1'); ?>
<div id = "contenu">
    <h2>Identification utilisateur</h2>
<form method = "post" action = "">
        <?php echo e(csrf_field()); ?> <!-- laravel va ajouter un champ caché avec un token -->
        <?php echo $__env->renderWhen($erreurs != null , 'msgerreurs', ['erreurs' => $erreurs], array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1])); ?> 
        <p>
        <label for = "nom">Login*</label>
        <input id = "login" type = "text" name = "login"  size = "30" maxlength = "45" required >
        </p>
        <p>
        <label for = "mdp">Mot de passe*</label>
        <input id = "mdp"  type = "password"  name = "mdp" size = "30" maxlength = "45" required>
        </p>
       <input type = "submit" value = "Valider" name = "valider">
       <input type = "reset" value = "Annuler" name = "annuler"> 
        </p>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('modeles/visiteur', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ch199\OneDrive - BUREAU 89\Documents\www\Dossier gsb\gsbLaravel13\resources\views/connexion.blade.php ENDPATH**/ ?>