<form>
    <div class="form-group">
        <label for="exampleFormControlInput1">Title:</label>
        <input wire:model='title' type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter the title">
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput2">Body:</label>
        <textarea wire:model='body' class="form-control" id="exampleFormControlInput2" placeholder="Enter the Body"></textarea>
        <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['body'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="text-danger"><?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
    </div>
    <button wire:click.prevent="update()" type="submit" class="btn btn-success mt-3">Update</button>
    <button wire:click.prevent="cancel()" class="btn btn-danger mt-3">Cancel</button>
</form>
<?php /**PATH C:\LProjects\livewire-crud\resources\views/livewire/edit.blade.php ENDPATH**/ ?>