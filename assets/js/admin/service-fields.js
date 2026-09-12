addEventListener("DOMContentLoaded", () => {
    const featuresList = document.querySelector(".service-features-list");
    const addFeatureBtn = document.querySelector(".add-feature");
    let featureIndex = featuresList.children.length;

    if (!featuresList || !addFeatureBtn) {
        return;
    }

    addFeatureBtn.addEventListener("click", () => {
        const index = featureIndex++;
        const newFeatureItem = createFeatureItem(index);
        featuresList.appendChild(newFeatureItem);
    });

    featuresList.addEventListener("click", (e) => {
        if (e.target.classList.contains("remove-feature")) {
            e.preventDefault();
            e.target.closest(".service-feature").remove();
        }
    });

    function createFeatureItem(index) {
        const featureItem = document.createElement("div");
        featureItem.className = "service-feature";

        const featureLabel = document.createElement("label");
        featureLabel.textContent = novapressServiceFields.featureTitle;
        featureLabel.setAttribute("for", `novapress_service_feature[${index}]`);
        const featureInput = document.createElement("input");
        featureInput.type = "text";
        featureInput.name = `novapress_service_feature[${index}]`;
        featureInput.id = `novapress_service_feature[${index}]`;
        featureInput.value = "";
        // featureInput.required = true;
        const removeBtn = document.createElement("button");
        removeBtn.type = "button";
        removeBtn.textContent = novapressServiceFields.removeFeature;
        removeBtn.classList.add("remove-feature", "button");

        featureItem.append(featureLabel, featureInput, removeBtn);
        return featureItem;
    }
});