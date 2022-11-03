import Croppie from "croppie";
import MicroModal from "micromodal";

function circleImageCropperInit({ image, origin, binder, modalId, cropBtn }) {
    MicroModal.init();
    const basic = new Croppie(binder, {
        viewport: { width: 150, height: 150 },
        boundary: {
            width: 300,
            height: 300,
        },
        enableZoom: false,
    });

    image.addEventListener("click", () => {
        MicroModal.show(modalId);
        basic.bind({
            url: origin.value,
        });
    });

    // uploadBtn.addEventListener("click", () => {
    //     const tempInput = document.createElement("input");
    //     tempInput.type = "file";
    //     tempInput.onchange = function (e) {
    //         if (e.target.files.length === 0) return;
    //         basic.bind({
    //             url: URL.createObjectURL(e.target.files[0]),
    //         });
    //     };
    //     tempInput.click();
    // });
    cropBtn.addEventListener("click", () => {
        basic.result("blob").then(function (blob) {
            image.src = URL.createObjectURL(blob);
        });
    });
}

window.circleImageCropperInit = circleImageCropperInit;
