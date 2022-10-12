<img style="width: 150px" id="image" src="{{asset('storage/test.jpg')}}" alt="" >

<div class="modal micromodal-slide" id="cropper-modal" aria-hidden="true">
<div class="modal__overlay" tabindex="-1" data-micromodal-close>
    <div class="modal__container" role="dialog" aria-modal="true">
        <div class="modal__content" id="cropper-modal-content">
            <div id="cropper-binder"></div>
        </div>
        <div class="modal__footer">
            <button class="modal__btn" id="upload__btn">上傳</button>
            <button class="modal__btn modal__btn-primary" id="crop__btn" data-micromodal-close>裁切</button>
        </div>
    </div>
</div>
</div>
<input type="file" name="upload" id="upload" style="display: none">
<script src="{{ mix('js/circle-image-cropper.js') }}"></script>
<script lang="js">
    circleImageCropperInit({
        image: document.querySelector('#image'),
        binder: document.querySelector('#cropper-binder'),
        modalId: 'cropper-modal',
        uploadInput: document.querySelector('#upload'),
        uploadBtn: document.querySelector('#upload__btn'),
        cropBtn: document.querySelector('#crop__btn')
    });
</script>
<link rel="stylesheet" href="{{mix('css/micromodal.css')}}">
<link rel="stylesheet" href="{{mix('css/croppie.css')}}">
