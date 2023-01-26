class FileInput extends HTMLElement {
  constructor() {
    super();
    this.files = []
  }
  connectedCallback() {
    const multiple = this.getAttribute('multiple');
    const accept = this.getAttribute("accept");
    const inputEl = document.createElement("input");
    inputEl.type = "file"
    if (accept != null) inputEl.accept = accept;
    inputEl.multiple = (multiple != null && multiple != "false")

    inputEl.addEventListener("change", (e) => {
      this.files = e.target.files;
    })
    
    this.addEventListener("click", () => {
      inputEl.click()
    })
  }
}
customElements.define('file-input', FileInput);