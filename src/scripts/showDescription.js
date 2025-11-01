export function showDescription() {
  const gameButtons = document.querySelectorAll(".games__button");
  gameButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const parentItem = button.closest(".games__item");

      const descriptionWrapper = parentItem.querySelector(
        ".games__description"
      );

      descriptionWrapper.classList.toggle("is-open");

      if (descriptionWrapper.classList.contains("is-open")) {
        button.textContent = "Скрыть описание";
      } else {
        button.textContent = "Показать описание";
      }
    });
  });
}
