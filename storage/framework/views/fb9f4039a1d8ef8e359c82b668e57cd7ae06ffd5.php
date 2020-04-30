<?php $__env->startSection('title','Form edit karyawan'); ?>

<?php $__env->startSection('container'); ?>

<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="mt-3">Form Edit Data Karyawan</h1>
            
    <form method="post" action="/karyawan/<?php echo e($karyawan->id); ?>">
    <?php echo method_field('patch'); ?>
    <?php echo csrf_field(); ?>
        <div class="form-group">
            <label for="nik">Nik</label>
            <input type="text" class="form-control" id="nik" placeholder="Masukan nik" name="nik" value="<?php echo e($karyawan->nik); ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" id="nama" placeholder="Masukan nama" name="nama" value="<?php echo e($karyawan->nama); ?>">
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" placeholder="Masukan alamat" name="alamat" value="<?php echo e($karyawan->alamat); ?>">
        </div>
        <div class="form-group">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" placeholder="Masukan jabatan" name="jabatan" value="<?php echo e($karyawan->jabatan); ?>">
        </div>        
        <div class="form-group">
            <label for="handphone">No Handphone</label>
            <input type="text" class="form-control" id="handphone" placeholder="Masukan handphone" name="handphone" value="<?php echo e($karyawan->handphone); ?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah Data</button>
    </form>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
   
<?php echo $__env->make('layout/index', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>