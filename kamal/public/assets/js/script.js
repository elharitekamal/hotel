const dropdowns = document.querySelector(".dropdowns");
// const check = document.querySelector(".check");
const options = document.querySelector(".options");

options.addEventListener("change", () => {
  dropdowns.innerHTML = '';
  console.log(options.value);
  if (options.value == "suite") {

    html =` <select name="type_suite" class="options add-opts" id="opts2">
        <option class="opt" value="Lit single ">Standard suite</option>
        <option class="opt" value="double">Junior suite</option>
        <option class="opt" value="suite">Presidential suite</option>
        <option class="opt" value="suite">Penthouse suite</option>
        <option class="opt" value="suite">Penthouse suite</option>
        <option class="opt" value="suite">Bridal suite</option>    
      </select> `
    dropdowns.insertAdjacentHTML("beforeend", html);
  } else {
    const opts2 = document.getElementById("opts2");
    if (opts2) {
      opts2.remove();
    }
  }
});