console.log('Novapress Admin Loaded');

document.addEventListener("DOMContentLoaded", () => {

    console.log(document.querySelectorAll(".novapress-media-field"));
    const mediaContainers = document.querySelectorAll(".novapress-media-field");

    // updateMediaFieldState();

    mediaContainers.forEach((container) => {
        let mediaFrame;
        const attachmentInput = container.querySelector(".attachment-id");
        const previewImage = container.querySelector(".preview-image");

        container.addEventListener("click", (e) => {
            if (e.target.dataset.action === "select") {
                if (mediaFrame) {
                    mediaFrame.open();
                    return;
                }

                mediaFrame = wp.media({
                    title: __('Select Hero Image', 'novapress'),
                    button: {
                        text: __('Use this image', 'novapress'),
                    },
                    multiple: false,
                });

                mediaFrame.on('select', () => {
                    const attachment = mediaFrame.state().get('selection').first().toJSON();
                    console.log(attachment);
                    if (attachmentInput) {
                        attachmentInput.value = attachment.id;
                    }

                    if (previewImage) {
                        previewImage.src = attachment.url;
                    }

                    updateMediaFieldState(container);
                });

                mediaFrame.open();
            }

            if (e.target.dataset.action === "remove") {
                attachmentInput.value = "";
                previewImage.src = "";
                updateMediaFieldState(container);
                if (mediaFrame) {
                    mediaFrame.close();
                }
            }
        });
    });

    function updateMediaFieldState(container) {
        const previewImage = container.querySelector(".preview-image");
        const previewText = container.querySelector(".preview-text");
        const removeBtn = container.querySelector(".remove");
        const attachmentInput = container.querySelector(".attachment-id");
        if (attachmentInput.value) {
            previewImage.style.display = "block";
            previewText.style.display = "none";
            removeBtn.style.display = "block";
        } else {
            previewImage.style.display = "none";
            previewText.style.display = "block";
            removeBtn.style.display = "none";
        }
    }
});