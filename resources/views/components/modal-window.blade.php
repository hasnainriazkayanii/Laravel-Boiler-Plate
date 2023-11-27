<div {{ $attributes->merge(['class' => 'modal modal-blur fade','role'=>'dialog', 'aria-hidden' => 'true']) }}>
    <div class="modal-dialog modal-lg">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            {{ $slot }}
        </div>
    </div>
</div>