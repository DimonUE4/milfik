function showModal(element) {
    const modal = document.getElementById("myModal");
    const modalImg1 = document.getElementById("modalImage1");
    const modalImg2 = document.getElementById("modalImage2");
    const modalImg3 = document.getElementById("modalImage3");
    const modalDescription = document.getElementById("modalDescription");
    const modalName = document.getElementById("modalName");
    const header = document.querySelector("header");

    const img = element.querySelector("img");

    modalImg1.src = img.getAttribute("data-modal-img1");
    modalImg2.src = img.getAttribute("data-modal-img2");
    modalImg3.src = img.getAttribute("data-modal-img3");

    modalDescription.textContent = img.getAttribute("data-text");
    modalName.textContent = img.getAttribute("data-name");

    modal.style.display = "block";
    document.body.classList.add("modal-open");
    header.classList.add("hidden"); // Скрываем хедер
}

function hideModal() {
    const modal = document.getElementById("myModal");
    const header = document.querySelector("header");
    
    modal.style.display = "none";
    document.body.classList.remove("modal-open");
    header.classList.remove("hidden"); // Показываем хедер
}



// Остальные функции остаются без изменений
function showText(imageContainer) {
    const text = imageContainer.querySelector('.image-text');
    text.style.display = 'flex';
}

function hideText(imageContainer) {
    const text = imageContainer.querySelector('.image-text');
    text.style.display = 'none';
}
