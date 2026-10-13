    <?php $__env->startSection('menu'); ?>
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">
                  
             </div>  
               <ul id="menuList">
                   <li >
                    <strong>Bonjour <?php echo e($visiteur['nom'] . ' ' . $visiteur['prenom']); ?></strong>
                      
                   </li>
                  <li class="smenu">
                     <a href="<?php echo e(route('chemin_gestionFrais')); ?>" title="Saisie fiche de frais ">Saisie fiche de frais</a>
                  </li>
                  <li class="smenu">
                    <a href="<?php echo e(route('chemin_selectionMois')); ?>" title="Consultation de mes fiches de frais">Mes fiches de frais</a>
                  </li>
               <li class="smenu">
                <a href="<?php echo e(route('chemin_deconnexion')); ?>"" title="Se déconnecter">Déconnexion</a>
                  </li>
                </ul>
               
        </div>
    <?php $__env->stopSection(); ?>          
<?php echo $__env->make('modeles/visiteur', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\ch199\OneDrive - BUREAU 89\Documents\www\Dossier gsb\gsbLaravel13\resources\views/sommaire.blade.php ENDPATH**/ ?>