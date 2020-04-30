<?php $__env->startSection('title','Daftar Karyawan'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <h1 class="mt-3">Daftar Karyawan</h1>
            
            <?php if(session('status')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <?php $__currentLoopData = $karyawan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $karyawan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul class="list-group">
              <li class="list-group-item d-flex justify-content-between align-items-center"> 
                    <tr>
                    <td><?php echo e($karyawan->nama); ?></td>
                    <td>
                    <a href="/karyawan/<?php echo e($karyawan->id); ?>" class="badge badge-info">Detail</a>
                    </td>
                    </tr>
                </li>
            </ul>
        </tbody>
    </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        

            <a href="/karyawan/create" class="btn btn-primary my-3">create</a>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>