<div>
    <button class="btn btn-error btn-sm" onclick="deleteModal_{{$id}}.showModal()">Delete</button>

    <dialog id="deleteModal_{{$id}}" class="modal">
        <div class="modal-box">
            <h3 class="text-lg font-bold">Are you Sure ?</h3>
            <p class="py-4">This action completly delete your file and you can't recover it.</p>
            <div class="modal-action">
                <button class="btn btn-error btn-sm" wire:click='deleteFile'>Yes Delete it!</button>
                <form method="dialog">
                    <!-- if there is a button in form, it will close the modal -->
                    <button class="btn btn-sm">Close</button>
                </form>
            </div>
        </div>
    </dialog>
</div>