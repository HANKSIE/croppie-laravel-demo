<img style="width: 150px" id="image" src="{{asset('storage/test.jpg')}}" alt="" >
<input type="hidden" id="origin" value="{{asset('storage/test.jpg')}}">
<button id="upload__btn" >上傳</button>

<div class="modal micromodal-slide" id="cropper-modal" aria-hidden="true">
<div class="modal__overlay" tabindex="-1" data-micromodal-close>
    <div class="modal__container" role="dialog" aria-modal="true">
        <div class="modal__header">
            <h2 class="">圖片裁減</h2>
            <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        </div>

        <div class="modal__content" id="cropper-modal-content">
            <div id="cropper-binder"></div>
        </div>
        <div class="modal__footer">
            <button class="modal__btn modal__btn-primary" id="crop__btn" data-micromodal-close>裁切</button>
        </div>
    </div>
</div>
</div><script src="{{ mix('js/circle-image-cropper.js') }}"></script>
<script lang="js">
    const image = document.querySelector('#image');
    const origin = document.querySelector('#origin');

    circleImageCropperInit({
        image,
        origin,
        binder: document.querySelector('#cropper-binder'),
        modalId: 'cropper-modal',
        cropBtn: document.querySelector('#crop__btn')
    });

    document.querySelector('#upload__btn').addEventListener("click", () => {
        const tempInput = document.createElement("input");
        tempInput.type = "file";
        tempInput.onchange = function (e) {
            if (e.target.files.length === 0) return;
            const objUrl = URL.createObjectURL(e.target.files[0]);
            image.src = objUrl;
            origin.value = objUrl;
        };
        tempInput.click();
    });
</script>
<link rel="stylesheet" href="{{mix('css/micromodal.css')}}">
<link rel="stylesheet" href="{{mix('css/croppie.css')}}">
