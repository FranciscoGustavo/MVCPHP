class InputMD {
	constructor(selector){
		this.input = document.querySelectorAll(selector);
		this.bindEvents();
	}

	bindEvents(){
		for (let value of this.input) {
			value.addEventListener("keyup",()=>{
			 	if (value.value == "") return value.classList.remove("non-empty");
				value.classList.add("non-empty");
			});
		}
	}
}

class openMenu {
	constructor(selector) {
		this.menuBoton = document.querySelector(selector);
		this.bindEvents();
	}

	bindEvents(){
		this.menuBoton.addEventListener("click", ()=>{
			document.querySelector(".nav").classList.toggle("active-menu");
		});
	}
}

class editPorfile {
	constructor(selector) {
		this.edit = document.querySelector(selector);
		this.bindEvents();
	}

	bindEvents(){
		this.edit.addEventListener("click", ()=>{
			alert("Editando perfil");
		});
	}
}


(function(){
	new InputMD(".input-form input");
	new openMenu(".icon-container");
	new editPorfile(".edit-porfile");
})();
